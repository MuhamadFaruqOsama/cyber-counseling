@extends('layouts/main')


@section('container')

<div class="bg-gray-100 min-h-screen pb-32">

    <div class="bg-custom-blue-30 pb-5 rounded-bl-3xl">

        <div class="bg-custom-blue rounded-bl-3xl">
            <div class="p-4">
                <div class="flex justify-between">
                    <div class="flex">
                        <a href="/" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                            <i class="fa-solid fa-arrow-left text-white"></i>
                        </a>
                        <div class="ms-3 text-white font-bold text-base flex items-center justify-center align-middle">Schedule</div>
                    </div>
                    <div class="flex">
                        <a
                        data-modal-target="tambah-jadwal" 
                        data-modal-toggle="tambah-jadwal"
                        data-ripple-light="true"
                        class="flex items-center align-middle cursor-pointer justify-center w-fit px-2 h-7 rounded-full bg-custom-white-30 text-white">
                            Add new <i class="fa-solid fa-plus text-lg ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div> {{-- end of bg-custom-blue --}}

    <div class="px-4">
        {{-- add button --}}
        <div class="flex justify-between my-4">
            <div class="flex items-center align-middle justify-center">
                <div class="font-semibold text-gray-700 text-md">Your Schedule for today</div>
            </div>
        </div>
        {{-- add button --}}

        {{-- time line --}}
        <ol class="relative border-s border-gray-300 mb-4">
            @foreach ($data_jadwal as $item)

                <li class="mb-2 ms-4">
                    <a href="/detail-jadwal">
                        <div class="border border-gray-300 rounded-2xl bg-white shadow-sm relative py-2 px-3">
                            <div class="absolute w-3 h-3 bg-custom-blue rounded-full mt-1.5 -start-[23px] border border-white"></div>
                            <div class="p-2">
                                <div class="flex justify-between">
                                    <h3 class="font-semibold capitalize text-gray-700">{{ $item->aktivitas }}</h3>
                                    <div class="flex items-center justify-center align-middle">
                                        <time class="text-xs font-normal leading-none text-gray-500">{{ $item->waktu_mulai }} - {{ $item->waktu_selesai }}</time>
                                    </div>
                                </div>
                                <p class="font-normal text-sm mt-2 text-gray-600">{{ $item->deskripsi }}</p>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ol>
        {{-- time line --}}

    </div>

</div> {{-- end of bg-gray-100 --}}

{{-- modal add schedule --}}
<div id="tambah-jadwal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t bg-custom-blue-30">
                <h3 class="font-semibold text-lg text-custom-blue">
                    Add Your Schedule
                </h3>
                <button 
                type="button" 
                class="text-custom-blue bg-transparent hover:bg-custom-white-30 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" 
                data-modal-hide="tambah-jadwal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('jadwal') }}" method="post">

            @csrf

            <div class="p-4 md:p-5 space-y-4">

                {{-- aktivitas --}}
                <div class="relative">
                    <input 
                    type="text" 
                    id="aktivitas" 
                    name="aktivitas"
                    required
                    value="{{ old('aktivitas', $data_diri->aktivitas ?? '') }}"
                    autocomplete="on"
                    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                    placeholder=" " />
                    <label 
                    for="aktivitas" 
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Your Activity</label>
                </div>

                {{-- tanggal --}}
                <div class="relative">
                    <input 
                    type="date" 
                    id="tanggal" 
                    required
                    value="{{ old('tanggal', $data_diri->tanggal ?? '') }}"
                    name="tanggal"
                    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                    placeholder=" " />
                    <label 
                    for="tanggal" 
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Select Date</label>
                </div>

                {{-- waktu_mulai --}}
                <div>
                    <label for="waktu_mulai" class="block mb-2 text-sm font-medium text-gray-500">Start time:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <input 
                        type="time" 
                        value="{{ old('waktu_mulai', $data_diri->waktu_mulai ?? '00:00') }}"
                        id="waktu_mulai"
                        name="waktu_mulai" 
                        class="block rounded-t-2xl px-2.5 py-2.5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue"  
                        min="00:00" 
                        max="23:59"
                        required />
                    </div>
                </div>

                {{-- waktu_selesai --}}
                <div>
                    <label for="waktu_selesai" class="block mb-2 text-sm font-medium text-gray-500">End time:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <input 
                        type="time" 
                        id="waktu_selesai" 
                        name="waktu_selesai"
                        class="block rounded-t-2xl px-2.5 py-2.5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue"  
                        min="00:00" 
                        max="23:59" 
                        value="{{ old('waktu_selesai', $data_diri->waktu_selesai ?? '00:00') }}"
                        required />
                    </div>
                </div>

                {{-- deskripsi --}}
                <div class="relative">
                    <textarea
                    id="deskripsi" 
                    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                    placeholder=" " 
                    name="deskripsi"
                    autocomplete="on"
                    required>{{ old('aktivitas', $data_diri->aktivitas ?? '') }}</textarea>
                    <label 
                    for="deskripsi" 
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Description (optional)</label>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b">
                <button 
                type="submit" 
                class="rounded-3xl py-3 w-full mt-3 bg-custom-blue text-white text-semibold"
                >Add Schedule</button>
            </div>

            </form>

        </div>
    </div>
</div>
{{-- modal --}}
@endsection