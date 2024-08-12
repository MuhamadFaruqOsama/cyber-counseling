@extends('layouts/main')

@section('container')

    <div class="bg-gray-50 min-h-screen">

        <div class="bg-custom-blue px-4 py-3" style="border-radius: 0px 0px 0px 30px;">
            {{-- title --}}
            <div class="flex justify-between">
                <img src="{{ asset('img/app/logo.png') }}" alt="Logo" class="w-8">
                <div class="title-content ms-4 flex items-start align-middle justify-center flex-col">
                    <div class="relative inline-block h-8 w-8 !rounded-full overflow-hidden border object-cover object-center">
                        <img
                        src="https://avatar.iran.liara.run/public/job/operator/male"
                        alt="avatar"
                        class="w-full h-full"
                        />
                    </div>
                </div>
            </div>

            <div class="text-start my-1">
                <div class="text-lg font-bold text-white">Hallo User</div>
                <div class="text-xs text-gray-200">Selamat datang di SIUNNES</div>
            </div>
            {{-- title --}}

            <div id="default-carousel" class="w-full relative overflow-hidden rounded-xl" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-40 overflow-hidden rounded-xl md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/app/1.png') }}" class="absolute block rounded-xl overflow-hidden w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{ asset('img/app/1.png') }}" class="absolute block rounded-xl overflow-hidden w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            {{-- konten --}}
        </div>

        <div class="py-3 ps-4">
            <div class="text-start text-gray-700 font-semibold">
                Features for you
            </div>
            <div class="list-features mt-2">
                <a href="/konselor" class="bg-custom-blue p-2 w-full flex justify-between rounded-s-3xl mb-2 shadow-sm">
                    <div class="flex">
                        <div class="w-10 h-10 rounded-full shadow-sm flex items-center align-middle justify-center bg-white">
                            <img 
                            src="{{ asset('img/app/advisor.png') }}" 
                            alt=""
                            class="w-8 h-8 object-cover overflow-hidden rounded-full"
                            >
                        </div>
                        <div class="flex flex-col items-start align-middle justify-center ms-3">
                            <div class="font-semibold text-white">Counselor</div>
                            <small class="text-gray-200">Find a professional counselor</small>
                        </div>
                    </div>
                    <div class="flex items-center justify-center align-middle">
                        <div class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                            <i class="fa-solid fa-angle-right text-white"></i>
                        </div>
                    </div>
                </a>
                <a href="/jadwal" class="bg-custom-blue-30 p-2 w-full flex justify-between rounded-s-3xl shadow-sm mb-2">
                    <div class="flex">
                        <div class="w-10 h-10 rounded-full shadow-sm flex items-center align-middle justify-center bg-white">
                            <img 
                            src="{{ asset('img/app/date.png') }}" 
                            alt=""
                            class="w-8 h-8 object-cover overflow-hidden rounded-full"
                            >
                        </div>
                        <div class="flex flex-col items-start align-middle justify-center ms-3">
                            <div class="font-semibold text-gray-700">Schedule</div>
                            <small class="text-gray-500">Organize your schedule</small>
                        </div>
                    </div>
                    <div class="flex items-center justify-center align-middle">
                        <div class="w-7 h-7 bg-custom-blue rounded-full flex items-center justify-center align-middle">
                            <i class="fa-solid fa-angle-right text-white"></i>
                        </div>
                    </div>
                </a>
                <div class="bg-white p-2 w-full flex justify-between rounded-s-3xl shadow-sm">
                    <div class="flex">
                        <div class="w-10 h-10 rounded-full shadow-sm flex items-center align-middle justify-center bg-white">
                            <img 
                            src="{{ asset('img/app/trophy.png') }}" 
                            alt=""
                            class="w-8 h-8 object-cover overflow-hidden rounded-full"
                            >
                        </div>
                        <div class="flex flex-col items-start align-middle justify-center ms-3">
                            <div class="font-semibold text-gray-700">Goals</div>
                            <small class="text-gray-500">achieve your goals</small>
                        </div>
                    </div>
                    <div class="flex items-center justify-center align-middle">
                        <div class="w-7 h-7 bg-custom-blue-30 rounded-full flex items-center justify-center align-middle">
                            <i class="fa-solid fa-angle-right text-custom-blue"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white px-4 py-3 mb-32">
            <div class="text-start text-gray-700 font-semibold mb-2">
                Your schedule for today
            </div>

            <div class="list-notification">
                <a 
                href="/detail-jadwal"
                class="bg-white shadow-sm px-3 py-2 mb-1 rounded-md">
                    <div class="grid grid-cols-12 gap-3">
                        <div class="col-span-1">
                            <i class="fa-solid fa-calendar-days text-green-500"></i>
                        </div>
                        <div class="col-span-11">
                            <div class="flex justify-between">
                                <div class="">
                                    <div class="text-gray-700 font-semibold">Jadwal Konseli</div>
                                    <div class="text-gray-500 text-xs">jadwal untuk hari..</div>
                                </div>
                                <small class=" text-gray-500">24/02/2023</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    {{-- navbar --}}
    @include('utils/navbar')
    {{-- navbar --}}

@endsection