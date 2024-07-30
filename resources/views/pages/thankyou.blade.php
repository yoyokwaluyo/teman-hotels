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
        </div>
    </div>
</div>

<div class="container mx-auto max-sm:px-4" id="thankyou">
    <div class="flex flex-col justify-between min-h-screen max-h-[900px] pt-20 pb-10">
        <div class="text-center">
            <h2 class="text-8xl max-sm:text-5xl font-sansita font-semibold text-gray-600">Thank You!</h2>
            <p class="text-2xl max-sm:text-xl max-sm:leading-[1.7] font-medium mt-14 text-gray-600">We look forward <br> to meeting you soon...</p>
        </div>
        <div class="flex items-center justify-center flex-col gap-14">
            <div class="text-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-color.png') }}" alt="Logo Teman Hotels" class="mx-auto h-16">
                </a>
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
    </div>
</div>



@endsection

@section('scripts')
@endsection