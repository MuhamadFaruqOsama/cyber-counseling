@extends('layouts/main')


@section('container')

<div class="bg-gray-100 min-h-screen pb-10">

    <form action="{{ route('edit-profile') }}" method="POST" class="submit-form-edit" enctype="multipart/form-data">

        @csrf

        <div class="bg-custom-blue rounded-bl-3xl">
            <div class="p-4">
                <div class="flex justify-between">
                    <div class="ms-3 text-white font-semibold flex items-center justify-center align-middle">Edit Profile</div>
                    <button type="submit" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle submit-btn-edit">
                        <i class="fa-solid fa-check text-white"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="px-4">
            <div class="flex flex-nowrap my-2 overflow-x-scroll text-nowrap">
                <button id="personal" type="button" class="py-1 px-3 me-2 text-sm rounded-lg bg-custom-blue-30 text-custom-blue mt-2">
                    Personal
                </button>
                <button id="ayah" type="button" class="py-1 px-3 me-2 text-sm rounded-lg bg-gray-300 text-gray-500 mt-2">
                    Father's 
                </button>
                <button id="ibu" type="button" class="py-1 px-3 me-2 text-sm rounded-lg bg-gray-300 text-gray-500 mt-2">
                    Mother's
                </button>
                <button id="btn-keluhan-harapan" type="button" class="py-1 px-3 me-2 text-sm rounded-lg bg-gray-300 text-gray-500 mt-2">
                    complaints and hopes
                </button>
            </div>
        </div>

        <hr class="my-3 text-gray-700">

        <div class="px-4">
            <div id="data-diri" class="block">
                @include('profile.diri')
            </div>
            <div id="data-ayah" class="hidden">
                @include('profile.ayah')
            </div>
            <div id="data-ibu" class="hidden">
                @include('profile.ibu')
            </div>
            <div id="keluhan-harapan" class="hidden">
                @include('profile.keluhan-harapan')
            </div>
        </div>

    </form>

</div> {{-- end of bg-gray-100 --}}\
@endsection