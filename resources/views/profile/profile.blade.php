@extends('layouts/main')

@section('container')

    <div class="bg-gray-100 pb-20 min-h-screen">

        <div class="bg-custom-blue relative h-16 pt-5">
            <div class="absolute left-1/2 -translate-x-1/2 mt-1">
                <div class="inline-block h-20 w-20 !rounded-full overflow-hidden object-cover object-center " style="border: 4px solid #fff;">
                    <img
                    src="https://avatar.iran.liara.run/public/job/operator/female"
                    alt="avatar"
                    class="w-full h-full"
                    />
                    <button
                        type="button"
                        class="bg-custom-blue w-8 h-8 z-20 absolute top-1/2 translate-x-2 right-0 flex items-center align-middle justify-center rounded-full"
                        data-modal-target="edit-foto" 
                        data-modal-toggle="edit-foto"
                    >
                        <i class="fa-solid fa-pen-to-square text-white"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="w-full flex items-center align-bottom justify-center">
            <div class="bg-custom-blue-30 w-fit px-3 mt-14 rounded-xl">
                <small class="text-custom-blue">email@gmail.com</small>
            </div>
        </div>

        {{-- profile section --}}
        <div class="profile px-4 py-4">

            <div class="bg-white p-3 shadow-sm mb-2 rounded-xl">
                <div class="items flex">
                    <div class="flex items-center align-middle justify-center w-8 h-8 rounded-full bg-green-400">
                        <i class="fa-solid fa-phone text-md text-white"></i>
                    </div>
                    <div class="text-gray-600 flex items-center align-middle justify-center ms-3">098988978678</div>
                </div>
                <hr class="my-2">
                <div class="items flex">
                    <div class="flex items-center align-middle justify-center w-8 h-8 rounded-full bg-red-500">
                        <i class="fa-solid fa-location-dot text-md text-white"></i>
                    </div>
                    <div class="text-gray-600 flex items-center align-middle justify-center ms-3">Jl xxxxxx</div>
                </div>
            </div>

            {{-- progress --}}
            <div class="bg-white shadow-sm p-3 rounded-xl mb-2">
                <div class="text-center">
                    <div class="font-bold text-custom-blue text-lg">80%</div>
                    <div class="text-gray-500 text-xs">Tujuan minggu ini tercapai</div>
                </div>
                <div class="w-full bg-yellow-100 mt-3 rounded-full h-2.5 ">
                    <div class="bg-custom-blue h-2.5 rounded-full" style="width: 80%"></div>
                </div>
            </div>
            {{-- progress --}}

            {{-- edit profile --}}
            <a 
            href="/edit-profile"
            class="bg-white rounded-xl shadow-sm p-3 flex justify-between mb-2">
                <div class="flex">
                    <i class="fa-solid fa-pencil text-lg text-custom-blue"></i>
                    <div class="flex items-center align-middle justify-center text-gray-500 ms-3">Edit Profile</div>
                </div>
                <div class="flex items-center justify-center align-middle">
                    <div class="w-7 h-7 bg-custom-blue-30 rounded-full flex items-center justify-center align-middle">
                        <i class="fa-solid fa-angle-right text-custom-blue"></i>
                    </div>
                </div>
            </a>
            {{-- edit profile --}}

            {{-- edit profile --}}
            {{-- <a onclick="logout()" class="bg-red-100 rounded-xl shadow-sm p-3 flex justify-between"> --}}
            <a href="/logout" class="bg-red-100 rounded-xl shadow-sm p-3 flex justify-between">
                <div class="flex">
                    <i class="fa-solid fa-arrow-right-from-bracket text-lg text-red-500"></i>
                    <div class="flex items-center align-middle justify-center text-red-500 ms-3">Logout</div>
                </div>
            </a>
            {{-- edit profile --}}

        </div>
        {{-- profile section --}}

    </div>
    {{-- navbar --}}
    @include('utils/navbar')
    {{-- navbar --}}

@endsection

{{-- modal edit foto --}}
<div id="edit-foto" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="font-semibold text-gray-700">
                    Edit Your Photo
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-foto">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form action="" method="post">
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <input 
                    type="file" 
                    name="" 
                    id="input-profile"
                    accept="image/*" 
                    required>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5rounded-b ">
                    <button 
                    type="submit"
                    class="w-full bg-custom-blue py-3.5 rounded-xl text-white">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>