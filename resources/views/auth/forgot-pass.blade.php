@extends('layouts/main')

@section('container')

<div class="w-full bg-custom-blue h-min-screen pt-12">
    <div class="h-screen w-full pt-12" style="background-color: #77BCFF; border-radius: 0px 30px 0px 0px">
        <div class="w-full bg-white" style="border-radius: 0px 30px 0px 0px">
            {{--  --}}
            <div class="flex justify-center items-center h-screen">
                <div class="form-login w-full max-w-md px-4">
                    <form action="{{ route('forgot-password') }}" method="POST" class="submit-form">

                        @csrf

                        {{-- title --}}
                        <div class="">
                            <h3 class="text-custom-blue font-bold text-xl">Forgot Password</h3>
                            <div class="text-gray-400">Enter your registered email</div>
                        </div>
                        {{-- title --}}

                        <hr class="mt-4 mb-5">
        
                        {{-- form input --}}
                        <div class="relative mb-3">
                            <input 
                            type="text" 
                            id="email" 
                            name="email"
                            class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                            placeholder=" " 
                            autofocus
                            required/>
                            <label 
                            for="email" 
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email</label>
                        </div>
                        {{-- form-input --}}
        
                        {{-- button submit --}}
                        <button 
                        type="submit"
                        data-ripple-light="true"
                        data-text="Continue"
                        class="w-full bg-custom-blue my-0 py-3.5 text-white font-semibold rounded-3xl btn-submit-form">Continue</button>
                        {{-- button submit --}}

                        <div class="relative my-6 flex items-center justify-center">
                            <hr class="w-full border-gray-300">
                        </div>

                        <!-- Button register -->
                        <a
                        href="/login"
                        data-ripple-dark="true"
                        class="w-full border-custom-blue border py-3.5 text-custom-blue font-semibold text-center rounded-3xl block"
                        >
                        Back
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
