@extends('layouts/main')

@section('container')

<div class="w-full bg-custom-blue h-min-screen pt-12">
    <div class="h-screen w-full pt-12" style="background-color: #77BCFF; border-radius: 0px 30px 0px 0px">
        <div class="w-full bg-white" style="border-radius: 0px 30px 0px 0px">
            {{--  --}}
            <div class="flex justify-center items-center h-screen">
                <div class="form-login w-full max-w-md px-4">
                    <form action="{{ route('register') }}" method="POST" id="register-form" class="submit-form">

                        @csrf

                        {{-- title --}}
                        <div class="">
                            <h3 class="text-custom-blue font-bold text-xl">Sign Up</h3>
                            <div class="text-gray-400">See a professional counselor</div>
                        </div>
                        {{-- title --}}

                        <hr class="mt-4 mb-5">
        
                        {{-- form input --}}
                        <div class="relative mb-3">
                            <input 
                            type="email" 
                            id="email" 
                            name="email"
                            class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                            placeholder=" " 
                            autofocus
                            required
                            autocomplete="on"
                            value="{{ old('email') }}"
                            />
                            <label 
                            for="email" 
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
                        </div>
                        <div class="relative mb-3">
                            <div class="absolute grid w-5 h-5 place-items-center text-blue-gray-500 top-1/2 right-3 -translate-y-1/4">
                                <a class="cursor-pointer " id="show-password">
                                    <i class="fa-regular fa-eye" aria-hidden="true"></i>
                                </a>
                            </div>
                            <input 
                            type="password" 
                            id="password-input" 
                            name="password"
                            class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                            placeholder=" " 
                            autofocus
                            required
                            autocomplete="off"
                            value="{{ old('password') }}"
                            />
                            <label 
                            for="password-input" 
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password</label>
                        </div>
                        <div class="relative">
                            <div class="absolute grid w-5 h-5 place-items-center text-blue-gray-500 top-1/2 right-3 -translate-y-1/4">
                                <a class="cursor-pointer " id="show-confirm-password">
                                    <i class="fa-regular fa-eye" aria-hidden="true"></i>
                                </a>
                            </div>
                            <input 
                            type="password" 
                            id="confirm-password-input" 
                            name="password_confirmation"
                            class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                            placeholder=" " 
                            autofocus
                            required
                            autocomplete="off"
                            value="{{ old('password_confirmation') }}"
                            />
                            <label 
                            for="confirm-password-input" 
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Confirm Password</label>
                        </div>
                        {{-- form-input --}}

                        {{-- agreement --}}
                        <div class="inline-flex items-center my-2">
                            <label class="relative -ml-2.5 flex cursor-pointer items-center rounded-full p-3" for="remember">
                            <input type="checkbox"
                                class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-custom-blue-30 checked:bg-custom-blue checked:before:bg-custom-blue hover:before:opacity-10"
                                id="remember" />
                            <span
                                class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                                stroke="currentColor" stroke-width="1">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </label>
                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none" for="remember">
                            <p class="flex items-center font-sans text-sm antialiased font-normal leading-normal">
                                <div class="text-gray-500">
                                    I have read and agree
                                    <a href="/persetujuan" class="font-semibold transition-colors text-gray-700">
                                        Terms and Conditions
                                    </a>
                                </div>
                            </p>
                            </label>
                        </div>
                        {{-- agreement --}}
        
                        {{-- button submit --}}
                        <button 
                        type="submit"
                        data-ripple-light="true"
                        id="btn-register"
                        data-text="Register"
                        class="w-full bg-custom-blue my-0 py-3.5 text-white font-semibold rounded-3xl disabled:bg-custom-blue-30 btn-submit-form"
                        disabled>Register</button>
                        {{-- button submit --}}

                        <div class="relative my-6 flex items-center justify-center">
                            <hr class="w-full border-gray-300">
                            <div class="absolute bg-white px-2 text-gray-700 left-1/2 transform -translate-x-1/2 text-nowrap">Aleready Have an Account?</div>
                        </div>

                        <!-- Button register -->
                        <a
                        href="/login"
                        data-ripple-dark="true"
                        class="w-full border-custom-blue border py-3.5 text-custom-blue font-semibold text-center rounded-3xl block"
                        >
                        Login
                        </a>
                        <!-- Button register -->

                    </form>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>
</div>
    
@endsection