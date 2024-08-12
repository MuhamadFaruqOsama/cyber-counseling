@extends('layouts/main')

@section('container')

<div class="w-full bg-custom-blue h-min-screen pt-12">
    <div class="h-screen w-full pt-12" style="background-color: #77BCFF; border-radius: 0px 30px 0px 0px">
        <div class="w-full bg-white" style="border-radius: 0px 30px 0px 0px">
            {{--  --}}
            <div class="flex justify-center items-center h-screen">
                <div class="form-login w-full max-w-md px-4">
                    {{-- title --}}
                    <div class="">
                        <h3 class="text-custom-blue font-bold text-xl">OTP</h3>
                        <div class="text-gray-400">Enter the OTP Code that has been sent via your email</div>
                    </div>
                    {{-- title --}}

                    <hr class="mt-4 mb-5">

                    <form action="{{ $title == "Verify Otp" ?  route('verify-otp') : route('forgot-password-otp') }}" method="POST" id="form-otp" class="submit-form">

                        @csrf

                        {{-- form input --}}
                        <div class="grid grid-cols-5 mb-9 gap-4">
                            <div class="col-span-1 items-center">
                                <input 
                                type="number"
                                id="otp-1" 
                                min="0" max="9" 
                                class="w-full h-10 outline-custom text-gray-700 rounded-2xl border-b-2 transition-all border-none text-center" 
                                autofocus
                                required
                                maxlength="1">
                            </div>
                            <div class="col-span-1 items-center">
                                <input 
                                type="number" 
                                id="otp-2" 
                                min="0" max="9" 
                                class="w-full h-10 outline-custom text-gray-700 rounded-2xl border-b-2 transition-all border-none text-center" 
                                required
                                maxlength="1">
                            </div>
                            <div class="col-span-1 items-center">
                                <input 
                                type="number"
                                id="otp-3" 
                                min="0" max="9" 
                                class="w-full h-10 outline-custom text-gray-700 rounded-2xl border-b-2 transition-all border-none text-center" 
                                required
                                maxlength="1">
                            </div>
                            <div class="col-span-1 items-center">
                                <input 
                                type="number"
                                id="otp-4" 
                                min="0" max="9" 
                                class="w-full h-10 outline-custom text-gray-700 rounded-2xl border-b-2 transition-all border-none text-center" 
                                required
                                maxlength="1">
                            </div>
                            <div class="col-span-1 items-center">
                                <input 
                                type="number"
                                id="otp-5" 
                                min="0" max="9" 
                                class="w-full h-10 outline-custom text-gray-700 rounded-2xl border-b-2 transition-all border-none text-center" 
                                required
                                maxlength="1">
                            </div>
                        </div>
                        {{-- form-input --}}
                        
                        <input type="hidden" name="otp" id="final-otp">

                        {{-- button submit --}}
                        <button 
                        type="submit"
                        data-ripple-light="true"
                        class="w-full bg-custom-blue py-3.5 text-white font-semibold rounded-3xl btn-submit-form"
                        id="btn-confirm"
                        data-text="Confirm"
                        >Confirm</button>
                        {{-- button submit --}}

                    </form>

                    <div class="relative my-6 flex items-center justify-center">
                        <hr class="w-full border-gray-300">
                        <div class="absolute bg-white px-2 text-gray-700 left-1/2 transform -translate-x-1/2 text-nowrap">Haven't received the code yet?</div>
                    </div>

                    <div class="block mt-3 text-gray-600 text-center" id="countdown">
                        <a id="{{ $title == 'Verify Otp' ? 'resend' : 'resend-forgot' }}" class="text-custom-blue cursor-pointer">Resend OTP</a>
                    </div>

                </div>
            </div>
            {{--  --}}
        </div>
    </div>
</div>
    
@endsection