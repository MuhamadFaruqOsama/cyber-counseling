@extends('layouts/main')

@section('container')

    {{--  --}}
    <div class="h-sreen bg-custom-blue">
        {{-- title --}}
        <div class="text-center py-3.5">
            <div class="text-gray-100 text-sm">step 2 of 5</div>
            <div class="font-bold text-md text-white">Father's Personal Data</div>
        </div>
        {{-- title --}}

        <form action="" method="post">

        {{-- body --}}
        <div class="w-full h-full px-4 pt-7 bg-white" style="border-radius: 30px 30px 0px 0px">
            <div class="relative h-11 w-full min-w-[200px] mb-4">
                <div class="relative">
                    <input 
                    type="text" 
                    id="floating_filled" 
                    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                    placeholder=" " />
                    <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Floating filled</label>
                </div>
            </div>

            {{-- button-submit --}}
            <div class="grid grid-cols-4 gap-3 pt-4">
                <div class="col-span-1">
                    <a href="/data-diri"
                    class="flex items-center justify-center align-middle w-full h-full border-2 border-custom-blue rounded-3xl text-custom-blue"
                    data-ripple-light="true">
                        <i class="fa-solid fa-angles-left text-lg"></i>
                    </a>
                </div>
                <div class="col-span-3">
                    <button 
                    type="submit"
                    data-ripple-light="true"
                    class="w-full py-3.5 font-bold rounded-3xl text-white bg-custom-blue">Next</button>
                </div>
            </div>
            {{-- button-submit --}}

        </div>        
        {{-- body --}}
        </form>

    </div>
    {{--  --}}
    
@endsection