@extends('layouts/main')

@section('container')

<div class="h-screen w-full relative">

    <svg
    class="absolute"
    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#CFE6FE" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,186.7C384,192,480,192,576,165.3C672,139,768,85,864,58.7C960,32,1056,32,1152,64C1248,96,1344,160,1392,192L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <svg 
    class="absolute -top-2"
    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#329AFF" fill-opacity="1" d="M0,160L80,165.3C160,171,320,181,480,160C640,139,800,85,960,64C1120,43,1280,53,1360,58.7L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

    <div class="h-screen flex items-center justify-center">
        <div class="flex flex-col items-center text-center px-4">
            <div class="mb-4">
                <img 
                src="http://cyber-counseling-mobile.test/public/img/app/logo.png" 
                alt="logo" 
                class="w-24">
            </div>
            <hr class="my-4 w-full">
            <h1 class="text-gray-700 font-bold text-2xl">Verify Your Email</h1>
            <div class="my-4">
                <div class="py-2.5 rounded-3xl px-20 bg-custom-blue text-white font-semibold text-xl">{{ $otp }}</div>
            </div>
            <div class="text-gray-500">
                This OTP is valid for <strong>10 minutes</strong>. Please do not share this code with anyone. If you did not request this verification, please ignore this email.
            </div>
            <div class="mt-2">
                <div class="text-gray-700 text-lg font-semibold">Thank You</div>
            </div>
        </div>
    </div>  

</div>
@endsection