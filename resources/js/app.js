"use strict";

import "flowbite";
// import './bootstrap';

let home = {
    init: function () {
        home.clickTarget();
        home.form();
        home.subscription();
    },
    form: function () {
        const scriptURL =
            "https://script.google.com/macros/s/AKfycbxURYZeJRsaNwcU0wOPvpagFzugG-R4NrGNWgrDwQtYKSXV7TewSzaEBIpR5TzCU4cu/exec";

        const form = document.forms["form-contactus"];
        const btnSubmit = document.querySelector("#btn-sumbit");

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            let isValid = true;

            const name = document.querySelector("input[name='Name']");
            if (name.value.length < 3 || name.value.length > 50) {
                name.classList.add("border-red-400");
                isValid = false;
            }
            const phone = document.querySelector("input[name='Phone']");
            if (phone.value.length < 3 || phone.value.length > 50) {
                phone.classList.add("border-red-400");
                isValid = false;
            }
            const email = document.querySelector("input[name='Email']");
            if (!email.value.includes('@')) {
                email.classList.add("border-red-400");
                isValid = false;
            }
            const hotel = document.querySelector("input[name='Hotel']");
            if (hotel.value.length < 3) {
                hotel.classList.add("border-red-400");
                isValid = false;
            }
            
            if (isValid) {
                btnSubmit.querySelector("#text-btn").classList.add("hidden");
                btnSubmit.querySelector("#loading-btn").classList.remove("hidden");
                btnSubmit.setAttribute("disabled", "");

                fetch(scriptURL, { method: "POST", body: new FormData(form) })
                    .then((response) =>
                        console.log(response)
                    )
                    .then(() => {
                        setTimeout(() => {
                            btnSubmit.querySelector("#text-btn").classList.remove("hidden");
                            btnSubmit.querySelector("#loading-btn").classList.add("hidden");
                            btnSubmit.removeAttribute("disabled");
                            window.location.href = `${window.location.origin}/thank-you`;
                        }, 400);
                    })
                    .catch((error) => console.error("Error!", error.message));
            }
        });
    },
    subscription: function () {
        let btnSbs = document.querySelector("#btn_sbs");
        let listSbs = document.querySelectorAll("#sbs_value li div");
        let dropdown = document.querySelector("#dropdown");
        
        btnSbs.innerHTML = "1 - 5";
        listSbs.forEach(element => {
            element.addEventListener("click", function() {
                btnSbs.innerHTML = `${element.innerHTML}`;
                dropdown.classList.add('hidden');
            });
        });
    },
    clickTarget: function () {
        let btnSubscription = document.querySelectorAll(".btn-subscription");
        let btnDiscuss = document.querySelectorAll(".btn-discuss");

        btnSubscription.forEach((element) => {
            element.addEventListener("click", function () {
                $("html, body").animate(
                    {
                        scrollTop: $("#content-subscription").offset().top,
                    },
                    1500
                );
            });
        });

        btnDiscuss.forEach((element) => {
            element.addEventListener("click", function () {
                $("html, body").animate(
                    {
                        scrollTop: $("#content-contactus").offset().top,
                    },
                    1500
                );
            });
        });
    },
};

let thankYou = {
    init: function () {
        setTimeout(() => {
            $("html, body").animate(
                {
                    scrollTop: $("#thankyou").offset().top,
                },
                1000
            );
        }, 1000);
    },
};

$(function () {
    let pathName = window.location.pathname;

    if (pathName.includes("thank-you")) {
        thankYou.init();
    } else {
        home.init();
    }
});
