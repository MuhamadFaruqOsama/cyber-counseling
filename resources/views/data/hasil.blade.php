@extends('layouts/main')

@section('container')

<div class="w-full bg-custom-blue h-min-screen pt-12">
    <div class="h-screen w-full pt-12" style="background-color: #77BCFF; border-radius: 0px 30px 0px 0px">
        <div class="w-full bg-white" style="border-radius: 0px 30px 0px 0px">
            {{--  --}}
            <div class="flex justify-center items-center h-screen">
                <div class="form-login w-full max-w-md px-4">
                    <form action="">
                        {{-- title --}}
                        <div class="">
                            <h3 class="text-custom-blue font-bold text-xl">Result</h3>
                            <div class="text-gray-400">Your results according to your questionnaire</div>
                        </div>
                        {{-- title --}}

                        <hr class="mt-4 mb-5">

                        <!-- Button register -->
                        <a
                        href="/"
                        data-ripple-light="true"
                        class="w-full bg-custom-blue border py-3.5 text-white font-semibold text-center rounded-3xl block"
                        >
                        Enter The App
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