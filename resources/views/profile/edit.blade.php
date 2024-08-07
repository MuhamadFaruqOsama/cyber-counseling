@extends('layouts/main')


@section('container')

<div class="bg-gray-100 min-h-screen pb-32">

    <div class="bg-custom-blue rounded-bl-3xl">
        <div class="p-4">
            <div class="flex">
                <a href="/profile" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                    <i class="fa-solid fa-arrow-left text-white"></i>
                </a>
                <div class="ms-3 text-white font-semibold flex items-center justify-center align-middle">Edit Profile</div>
            </div>
        </div>
    </div>

    <div class="px-4">
        <div class="flex flex-nowrap my-2">
            <button class="py-1 px-3 me-2 text-sm rounded-lg bg-custom-blue-30 text-custom-blue mt-2">
                Personal
            </button>
            <div class="py-1 px-3 me-2 text-sm rounded-lg bg-gray-300 text-gray-500 mt-2">
                Father's 
            </div>
            <div class="py-1 px-3 me-2 text-sm rounded-lg bg-gray-300 text-gray-500 mt-2">
                Mother's
            </div>
        </div>
    </div>

    <hr class="my-3 text-gray-700">

    <div class="px-4">
        <div id="edit-field"></div>
    </div>

</div> {{-- end of bg-gray-100 --}}\
@endsection