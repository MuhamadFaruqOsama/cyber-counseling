@extends('layouts/main')

@section('container')

    {{--  --}}
    <div class="h-sreen bg-custom-blue">
        {{-- title --}}
        <div class="text-center py-3.5">
            <div class="text-gray-100 text-sm">step 3 of 5</div>
            <div class="font-bold text-md text-white">Mother's Personal Data</div>
        </div>
        {{-- title --}}

        {{-- body --}}
        <div class="w-full h-full px-4 pt-7 bg-white" style="border-radius: 30px 30px 0px 0px">

            <form 
                action="{{ $data_ibu ? route('update-data-ibu') : route('data-ibu') }}" 
                method="post" 
                enctype="multipart/form-data" class="submit-form">
            
                    @csrf
            
                    {{-- nama --}}
                    <div class="mb-3 block relative">
                        <input 
                        required
                        type="text" 
                        name="nama"
                        id="nama" 
                        value="{{ old('nama', $data_ibu->nama ?? '') }}"
                        autocomplete="on"
                        autofocus
                        class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder=" " />
                        <label 
                        for="nama"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Mother's Name</label>
                    </div>

                    {{-- alamat --}}
                    <div class="mb-3 block relative">
                        <input 
                        required
                        type="text" 
                        name="alamat"
                        id="alamat" 
                        value="{{ old('alamat', $data_ibu->alamat ?? '') }}"
                        autocomplete="on"
                        autofocus
                        class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder=" " />
                        <label 
                        for="alamat"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Mother's Address</label>
                    </div>

                    {{-- pekerjaan --}}
                    <div class="mb-3 block relative">
                        <input 
                        required
                        type="text" 
                        name="pekerjaan"
                        id="pekerjaan" 
                        value="{{ old('pekerjaan', $data_ibu->pekerjaan ?? '') }}"
                        autocomplete="on"
                        autofocus
                        class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder=" " />
                        <label 
                        for="pekerjaan"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Mother's Job</label>
                    </div>

                    {{-- telp --}}
                    <div class="mb-3 block relative">
                        <input 
                        required
                        type="text" 
                        inputmode="numeric"
                        name="telp"
                        id="telp" 
                        autocomplete="on"
                        value="{{ old('telp', $data_ibu->telp ?? '') }}"
                        class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder=" " />
                        <label 
                        for="telp"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Mother's Phone Number</label>
                    </div>

                    {{-- status --}}
                    <div class="mb-3 block relative border-b-2 border-gray-300 pb-2">
                        <label 
                        for="jenis-kelamin"
                        class="text-gray-700">Status</label>
                        
                        <div class="flex pt-3" id="jenis-kelamin">
                            <div class="flex items-center">
                                <input 
                                id="masih-hidup" 
                                type="radio" 
                                value="masih hidup" 
                                name="status" 
                                class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                {{ old('status', $data_ibu->status ?? '') == 'masih hidup' ? 'checked' : '' }}>
                                <label 
                                for="masih-hidup" 
                                class="ml-2 text-sm font-medium text-gray-600">Still Alive</label>
                            </div>
                            <div class="flex items-center ms-3">
                                <input 
                                id="meninggal" 
                                type="radio" 
                                value="meninggal" 
                                name="status" 
                                class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                {{ old('status', $data_ibu->status ?? '') == 'meninggal' ? 'checked' : '' }}>
                                <label 
                                for="meninggal" 
                                class="ml-2 text-sm font-medium text-gray-600">Deceased</label>
                            </div>
                        </div>
                    </div>

                    {{-- tempat_lahir --}}
                    <div class="mb-3 block relative">
                        <input 
                        required
                        type="text" 
                        name="tempat_lahir"
                        id="tempat_lahir" 
                        autocomplete="on"
                        value="{{ old('tempat_lahir', $data_ibu->tempat_lahir ?? '') }}"
                        class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder=" " />
                        <label 
                        for="tempat_lahir"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Place of birth</label>
                    </div>

                    {{-- tanggal_lahir --}}
                    <div class="mb-3 block relative">
                        <input 
                        required
                        type="date" 
                        name="tanggal_lahir"
                        id="tanggal_lahir" 
                        autocomplete="on"
                        value="{{ old('tanggal_lahir', $data_ibu->tanggal_lahir ?? '') }}"
                        class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
                        placeholder=" " />
                        <label 
                        for="tanggal_lahir"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Date of birth</label>
                    </div>

                    <div class="block pb-10 mt-4">
                        {{-- button-submit --}}
                        <div class="grid grid-cols-4 gap-3 pt-4">
                            <div class="col-span-1">
                                <a href="/data-ayah"
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