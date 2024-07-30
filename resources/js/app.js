"use strict";

import "flowbite";

let home = {
    init: function () {
        home.clickTarget();
        home.form();
        home.subscription();
    },
    form: function () {
        const scriptURL =
            "https://script.google.com/macros/s/AKfycbyy3GJhAJ1VygSqTPtPjhWpjhxIo5Rqxb5NqoBo75K2j52D-ej5wT6kafh1Del-qx8gCg/exec";

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
        let buttonSbs = document.querySelector("#dropdownDefaultButton");
        let btnSbs = document.querySelector("#btn_sbs");
        let listSbs = document.querySelectorAll("#sbs_value li div");
        let dropdown = document.querySelector("#dropdown");
        let contentFlexi = document.querySelector("#trx_flexi");
        let contentFixed = document.querySelector("#trx_fixed");
        let flexiOffering = document.querySelector("#flexi_offering");
        let fixedOffering = document.querySelector("#fixed_offering");

        buttonSbs.addEventListener("click", function() {
            dropdown.classList.toggle("hidden");
            dropdown.classList.toggle("absolute"); 
            dropdown.classList.toggle("my-2");
        });
        
        btnSbs.innerHTML = "6 - 10";
        listSbs.forEach(element => {
            element.addEventListener("click", function() {
                btnSbs.innerHTML = `${element.innerHTML}`; //set value on buttonSbs

                // close dropdown
                dropdown.classList.toggle("hidden");
                dropdown.classList.toggle("absolute"); 
                dropdown.classList.toggle("my-2");

                // get array data from dropdown
                var arr = element.getAttribute("data-arr");
                var arrData = JSON.parse(arr);
                
                flexi(arrData);
                fixed(arrData);
            });
        });

        function flexi(params) {
            var template1 = `
                <h2 class="text-3xl font-semibold">${params.trx_admin}</h2>
                <h2 class="text-3xl font-semibold">+</h2>
                <h4 class="text-xl font-medium">${params.trx_rate.includes('Call') ? params.trx_rate : params.trx_rate+' / <span class="text-sm font-light">transaction</span>'}</h4>
            `;
            contentFlexi.innerHTML = template1;

            var template2 = `
                <li><i>${params.offering}</i></li>
                <li><i>${params.note}</i></li>
            `;
            flexiOffering.innerHTML = template2;
        }
        function fixed(params) {
            var template = `
                <h2 class="text-3xl font-semibold">${params.subscribtion}</h2>
            `;
            contentFixed.innerHTML = template;

            var template2 = `
                <li><i>${params.offering}</i></li>
                <li><i>${params.note}</i></li>
            `;
            fixedOffering.innerHTML = template2;
        }
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
