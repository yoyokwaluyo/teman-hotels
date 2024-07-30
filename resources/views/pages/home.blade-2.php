@extends('layouts.app')

@section('style')
<!-- import another style file -->
@endsection

@section('main')

<!-- Subscription -->
<div class="bg-[#252B42] py-16 h-screen max-sm:h-auto max-sm:mt-20" id="content-subscription">
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

@endsection

@section('scripts')
@endsection