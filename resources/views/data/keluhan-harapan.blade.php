@extends('layouts/main')

@section('container')

    {{--  --}}
    <div class="h-sreen bg-custom-blue">
        {{-- title --}}
        <div class="text-center py-3.5">
            <div class="text-gray-100 text-sm">step 4 of 5</div>
            <div class="font-bold text-md text-white">Complain and Hopes</div>
        </div>
        {{-- title --}}

        {{-- body --}}
        <div class="w-full h-full px-4 pt-7 bg-white" style="border-radius: 30px 30px 0px 0px">

            <form 
                action="{{ $data_keluhan_harapan ? route('update-keluhan-harapan') : route('keluhan-harapan') }}" 
                method="post" 
                enctype="multipart/form-data" class="submit-form">
            
                    @csrf
            
                    {{-- keluhan --}}
                    <div class="mb-2 relative block">
                        <label 
                        for="keluhan" 
                        class="block mb-2 text-sm font-medium text-gray-700">Your Complaint</label>
                        <textarea 
                        id="keluhan" 
                        rows="4" 
                        required
                        name="keluhan"
                        class="block rounded-t-2xl px-2.5 py-2.5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder="Write your complaint here...">{{ old('keluhan', $data_keluhan_harapan->keluhan ?? '') }}</textarea>
                    </div>

                    {{-- harapan --}}
                    <div class="mb-2 relative block">
                        <label 
                        for="harapan" 
                        class="block mb-2 text-sm font-medium text-gray-700">Your hope</label>
                        <textarea 
                        id="harapan" 
                        rows="4" 
                        required
                        name="harapan"
                        class="block rounded-t-2xl px-2.5 py-2.5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder="Write your hope here...">{{ old('harapan', $data_keluhan_harapan->harapan ?? '') }}</textarea>
                    </div>

                    <div class="block pb-10 mt-4">
                        {{-- button-submit --}}
                        <div class="grid grid-cols-4 gap-3 pt-4">
                            <div class="col-span-1">
                                <a href="/data-ibu"
                                class="flex items-center justify-center align-middle w-full h-full border-2 border-custom-blue rounded-3xl text-custom-blue"
                                data-ripple-light="true">
                                    <i class="fa-solid fa-angles-left text-lg"></i>
                                </a>
                            </div>
                            <div class="col-span-3">
                                <button 
                                type="submit"
                                data-ripple-light="true"
                                data-text="Next"
                                class="w-full py-3.5 font-bold rounded-3xl text-white bg-custom-blue btn-submit-form">Next</button>
                            </div>
                        </div>
                        {{-- button-submit --}}
                    </div>
            
            </form>

        </div>        
        {{-- body --}}

    </div>
    {{--  --}}
    
@endsection