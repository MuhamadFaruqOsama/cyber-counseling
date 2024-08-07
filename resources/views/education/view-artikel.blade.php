@extends('layouts/main')

@section('container')
<div class="bg-custom-blue">
    <div class="p-4">
        <div class="flex">
            <a onclick="back()" class="cursor-pointer w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                <i class="fa-solid fa-arrow-left text-white"></i>
            </a>
        </div>
    </div>
</div>

<div class="bg-gray-100 min-h-screen">
    <div class="px-4 my-2">
        <div class="text-gray-700 font-semibold">Belajar Konseling Episode 1 : Perbedaan Bimbingan, Konseling, Psikoterapi dan Coaching</div>
        <div class="my-2 w-full">
            <img 
            src="{{ asset('img/app/2.png') }}" 
            alt=""
            class="w-full object-cover"
            >
        </div>
        <div class="text-end">
            <small class="text-gray-400">By Dr. Gian S. Sugara, Kons</small>
        </div>
        <div class="py-2 text-sm text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae accusamus voluptate perferendis eum ipsa temporibus asperiores distinctio alias doloremque, tempore amet, ullam ad sapiente impedit dolorum reiciendis rerum possimus, error ab qui quisquam. Ab, odio, laboriosam magnam reprehenderit exercitationem facilis vel sit ipsam beatae dolore rem laborum neque at necessitatibus?
        </div>
    </div>
</div>
@endsection