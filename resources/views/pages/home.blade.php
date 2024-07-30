@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<!-- banner -->
<div class="relative h-screen">
    <img src="{{ asset('images/banner.png') }}" alt="Teman Hotels" class="w-full filter brightness-[80%] max-sm:h-[90vh] max-sm:object-cover">
    <div class="absolute top-0 left-0 w-full h-[93vh]">
        <div class="h-[30%] pt-10">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Teman Hotels" class="h-16 mx-auto drop-shadow-lg">
            </a>
        </div>
        <div class="h-[70%]">
            <div class="">
                <h1 class="text-6xl max-sm:text-5xl font-medium leading-[1.1] max-sm:leading-[1.3] text-white text-center">Best solutions <br>for your hotel bussiness</h1>
            </div>
            <div class="mt-20 text-center">
                <a href="javascript:void(0);" class="btn-subscription py-4 px-9 rounded-full text-md bg-blue-500 text-white hover:bg-blue-600 transition duration-150 ease-out hover:ease-in">Discuss with us!</a>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<div class="w-3/4 mx-auto">
    <div class="text-center">
        <h2 class="text-4xl font-normal">Features</h2>
        <h3 class="text-2xl font-light mt-6">Always supporting your business growth</h3>
    </div>
    <div class="mt-16 flex max-sm:flex-col gap-4 max-sm:gap-10">
        <div class="text-center min-w-[250px]">
            <img src="{{ asset('images/feature-1.png') }}" alt="features 1" class="h-[3.3rem] mx-auto">
            <div class="mt-4 px-8">
                <h5 class="mb-3 font-medium">Visual Friendly</h5>
                <p class="font-light text-[14px]">Visually friendly interface designed for effortless navigation.</p>
            </div>
        </div>
        <div class="text-center min-w-[250px]">
            <img src="{{ asset('images/feature-2.png') }}" alt="features 1" class="h-[3.5rem] mx-auto">
            <div class="mt-4 px-8">
                <h5 class="mb-3 font-medium">Simple Process</h5>
                <p class="font-light text-[14px]">Enjoy a simple process from start to finish.</p>
            </div>
        </div>
        <div class="text-center min-w-[250px]">
            <img src="{{ asset('images/feature-3.png') }}" alt="features 1" class="h-[3.5rem] mx-auto">
            <div class="mt-4 px-8">
                <h5 class="mb-3 font-medium">Cloud based system</h5>
                <p class="font-light text-[14px]">Our cloud-based system ensures data security and accessibility.</p>
            </div>
        </div>
        <div class="text-center min-w-[250px]">
            <img src="{{ asset('images/feature-4.png') }}" alt="features 1" class="h-[3.5rem] mx-auto">
            <div class="mt-4 px-8">
                <h5 class="mb-3 font-medium">Integrated Operator & Finance</h5>
                <p class="font-light text-[14px]">Synergistic approach: Uniting operations and finance for maximum impact.</p>
            </div>
        </div>
    </div>
</div>

<!-- Try For Free -->
<div class="container mx-auto mt-32">
    <div class="flex max-sm:flex-col items-center gap-1 max-sm:gap-8">
        <div class="w-1/2 max-sm:w-full pl-10 max-sm:pl-3 max-sm:pr-3 max-sm:order-2 max-sm:text-center">
            <h2 class="text-[2.5rem] max-sm:text-3xl leading-[1.1] font-normal">Simple way <br>to analyze your hotel business</h2>
            <div class="mt-14">
                <a href="javascript:void(0);" class="btn-subscription py-4 px-12 rounded-full text-md font-medium bg-blue-500 text-white hover:bg-blue-600 transition duration-150 ease-out hover:ease-in">Try For Free</a>
            </div>
        </div>
        <div class="w-1/2 max-sm:w-full max-sm:order-1">
            <img src="{{ asset('images/try-1.png') }}" alt="Try 1" class="w-[95%] object-contain mx-auto">
        </div>
    </div>
    <div class="flex max-sm:flex-col items-center gap-1 max-sm:gap-8 mt-28">
        <div class="w-1/2 max-sm:w-full">
            <img src="{{ asset('images/try-2.png') }}" alt="Try 2" class="w-[95%] object-contain mx-auto">
        </div>
        <div class="w-1/2 max-sm:w-full pl-10 max-sm:pl-3 max-sm:pr-3 max-sm:text-center">
            <h2 class="text-[2.5rem] max-sm:text-3xl leading-[1.1] font-normal">Fastest & simple way <br>to operate your property</h2>
            <div class="mt-14">
                <a href="javascript:void(0);" class="btn-subscription py-4 px-12 rounded-full text-md font-medium bg-blue-500 text-white hover:bg-blue-600 transition duration-150 ease-out hover:ease-in">Try For Free</a>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 max-sm:grid-cols-1 items-center mt-24">
        <div class="pl-10 max-sm:pl-3 max-sm:order-2 max-sm:text-center">
            <h2 class="text-[2.5rem] max-sm:text-3xl leading-[1.1] font-normal">All in one sync <br>in every department</h2>
            <div class="mt-14 max-sm:mt-10">
                <a href="javascript:void(0);" class="btn-subscription py-4 px-12 rounded-full text-md font-medium bg-blue-500 text-white hover:bg-blue-600 transition duration-150 ease-out hover:ease-in">Try For Free</a>
            </div>
        </div>
        <div class="max-sm:order-1">
            <img src="{{ asset('images/try-3.png') }}" alt="Try 3" class="mx-auto h-[380px] max-sm:h-[250px]">
        </div>
    </div>
</div>

<!-- Subscription -->
<div class="bg-[#252B42] py-16 max-sm:mt-20" id="content-subscription">
    <div class="container mx-auto">
        <h2 class="text-7xl max-sm:text-5xl font-sansita text-white text-center">Subscription</h2>

        <div class="flex max-sm:flex-col items-center justify-center gap-10 max-sm:gap-3 mt-16">
            <label for="dropdownDefaultButton" class="text-lg font-light text-white">Select your room needs</label>
            <div class="relative">
                <div class="flex items-center gap-2">
                    <button id="dropdownDefaultButton" class="text-black bg-white hover:opacity-90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                        <div id="btn_sbs">6 - 10</div>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <span class="text-white text-xl font-light">Rooms</span>
                </div>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-24 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton" id="sbs_value">
                        @foreach ($rooms as $room)
                        <li class="block hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer">
                            <div class="px-4 py-2 font-medium text-sm" data-arr="{{ json_encode($room) }}">{{ $room['room'] }}</div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-1/2 h-full mx-auto grid grid-cols-2 max-sm:grid-cols-1 items-center place-items-center gap-4 mt-14">
            <div class="w-[300px] p-5 rounded-lg shadow-lg bg-gray-100">
                <div class="text-center">
                    <h4 class="text-xl font-light">Flexi</h4>
                    <h5 class="text-sm font-light mt-2">Monthly based on transaction</h5>
                    <div class="min-h-[100px] mt-3" id="trx_flexi">
                        <h2 class="text-3xl font-semibold">Rp 390.000</h2>
                        <h2 class="text-3xl font-semibold">+</h2>
                        <h4 class="text-xl font-medium">Rp 12.500 / <span class="text-sm font-light">transaction</span></h4>
                    </div>
                    <a href="javascript:void(0);" class="btn-discuss mt-6 inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-full hover:bg-blue-600 transition duration-150 ease-out hover:ease-in">
                        <i>Discuss with us</i>
                    </a>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-medium">Included:</h4>
                    <ul class="text-xs font-light flex flex-col gap-1 mt-2">
                        <li class="font-normal">Channel Manager</li>
                        <li class="font-normal">Direct booking engine</li>
                        <li class="font-normal">Front desk</li>
                        <li class="font-normal">Insight</li>
                    </ul>
                    <ul class="text-xs font-light flex flex-col gap-1 mt-2" id="flexi_offering"></ul>
                </div>
                <div class="mt-5">
                    <div class="flex gap-1 text-gray-500">
                        <i class='bx bx-message-rounded-dots'></i>
                        <span class="text-xs">Phone, email and 24/7 chat support</span>
                    </div>
                    <div class="flex gap-1 text-gray-500 mt-1">
                        <i class='bx bx-user-circle'></i>
                        <span class="text-xs">Onboarding specialist</span>
                    </div>
                </div>
            </div>
            <div class="w-[300px] h-full p-5 rounded-lg shadow-lg bg-gray-100">
                <div class="text-center">
                    <h4 class="text-xl font-light">Fixed</h4>
                    <h5 class="text-sm font-light mt-2">Monthly based on transaction</h5>
                    <div class="min-h-[100px] mt-3 flex items-center justify-center" id="trx_fixed">
                        <h2 class="text-3xl font-semibold">Rp 1.300.000</h2>
                    </div>
                    <a href="javascript:void(0);" class="btn-discuss mt-6 inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-full hover:bg-blue-600 transition duration-150 ease-out hover:ease-in">
                        <i>Discuss with us</i>
                    </a>
                </div>
                <div class="mt-6">
                    <h4 class="text-xl font-medium">Included:</h4>
                    <ul class="text-xs font-light flex flex-col gap-1 mt-2">
                        <li class="font-normal">Channel Manager</li>
                        <li class="font-normal">Direct booking engine</li>
                        <li class="font-normal">Front desk</li>
                        <li class="font-normal">Insight</li>
                    </ul>
                    <ul class="text-xs font-light flex flex-col gap-1 mt-2" id="fixed_offering"></ul>
                </div>
                <div class="mt-5">
                    <div class="flex gap-1 text-gray-500">
                        <i class='bx bx-message-rounded-dots'></i>
                        <span class="text-xs">Phone, email and 24/7 chat support</span>
                    </div>
                    <div class="flex gap-1 text-gray-500 mt-1">
                        <i class='bx bx-user-circle'></i>
                        <span class="text-xs">Onboarding specialist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form contact us -->
<div class="py-20 min-h-screen" id="content-contactus">
    <div class="container mx-auto">
        <h2 class="text-center text-5xl max-sm:text-3xl font-light">Join <span class="font-medium">FREE</span> for 30 days</h2>

        <div class="w-3/5 max-sm:w-11/12 mx-auto grid grid-cols-2 max-sm:grid-cols-1 gap-2 max-sm:gap-14 my-20">
            <div class="shadow-md rounded-lg p-8 border">
                <h4 class="font-medium text-center mb-8">Contact Us</h4>
                <form name="form-contactus" action="" method="post">
                    <div class="mb-7">
                        <input type="text" id="name" name="Name" require class="bg-gray-100 pl-4 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:pl-5" placeholder="Name" style="transition: all .25s ease-in;"/>
                    </div>
                    <div class="mb-7">
                        <input type="text" id="phone" name="Phone" require class="bg-gray-100 pl-4 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:pl-5" placeholder="Phone Number" maxlength="12" style="transition: all .25s ease-in;"/>
                    </div>
                    <div class="mb-7">
                        <input type="email" id="email" name="Email" require class="bg-gray-100 pl-4 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:pl-5" placeholder="Email" style="transition: all .25s ease-in;"/>
                    </div>
                    <div class="mb-7">
                        <input type="text" id="hotelname" name="Hotel" require class="bg-gray-100 pl-4 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:pl-5" placeholder="Hotel Name" style="transition: all .25s ease-in;"/>
                    </div>
                    <div class="mb-10">
                        <textarea id="message" name="Message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:pl-5" placeholder="Your message" style="transition: all .25s ease-in;"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" id="btn-sumbit" class="">
                            <div id="text-btn" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-10 py-3 me-2 mb-2">Send</div>
                            <div id="loading-btn" class="hidden animate-pulse text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-10 py-3 me-2 mb-2">Loading...</div>
                        </button>
                    </div>
                </form>
            </div>
            <div class="flex items-center justify-center gap-4">
                <div class="flex justify-center items-center flex-col gap-4">
                    <a href="tel:6281219893322" target="_blank">
                        <i class='bx bx-mobile text-4xl text-blue-500'></i>
                    </a>
                    <span class="text-sm text-gray-600">(+62) 81219893322</span>
                </div>
                <div class="flex justify-center items-center flex-col gap-4">
                    <a href="mailto:marketing@temanhotel.com" target="_blank">
                        <i class='bx bx-envelope text-4xl text-blue-500'></i>
                    </a>
                    <span class="text-sm text-gray-600">marketing@temanhotel.com</span>
                </div>
            </div>
        </div>

        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo-color.png') }}" alt="Logo Teman Hotels" class="mx-auto h-16">
            </a>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection