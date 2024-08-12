{{-- nama_ayah --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    name="nama_ayah"
    id="nama_ayah" 
    value="{{ old('nama_ayah', $data_ayah->nama ?? '') }}"
    autocomplete="on"
    autofocus
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="nama_ayah"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Father's Name</label>
</div>

{{-- alamat_ayah --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    name="alamat_ayah"
    id="alamat_ayah" 
    value="{{ old('alamat_ayah', $data_ayah->alamat ?? '') }}"
    autocomplete="on"
    autofocus
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="alamat_ayah"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Father's Address</label>
</div>

{{-- pekerjaan_ayah --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    name="pekerjaan_ayah"
    id="pekerjaan_ayah" 
    value="{{ old('pekerjaan_ayah', $data_ayah->pekerjaan ?? '') }}"
    autocomplete="on"
    autofocus
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="pekerjaan_ayah"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Father's Job</label>
</div>

{{-- telp_ayah --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    inputmode="numeric"
    name="telp_ayah"
    id="telp_ayah" 
    autocomplete="on"
    value="{{ old('telp_ayah', $data_ayah->telp ?? '') }}"
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="telp_ayah"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Father's Phone Number</label>
</div>

{{-- status_ayah --}}
<div class="mb-3 block relative border-b-2 border-gray-300 pb-2">
    <label 
    for="jenis-kelamin"
    class="text-gray-700">Status</label>
    
    <div class="flex pt-3" id="jenis-kelamin">
        <div class="flex items-center">
            <input 
            id="ayah-masih-hidup" 
            type="radio" 
            value="masih hidup" 
            name="status_ayah" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('status_ayah', $data_ayah->status ?? '') == 'masih hidup' ? 'checked' : '' }}>
            <label 
            for="ayah-masih-hidup" 
            class="ml-2 text-sm font-medium text-gray-600">Still Alive</label>
        </div>
        <div class="flex items-center ms-3">
            <input 
            id="ayah-meninggal" 
            type="radio" 
            value="meninggal" 
            name="status_ayah" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('status_ayah', $data_ayah->status ?? '') == 'meninggal' ? 'checked' : '' }}>
            <label 
            for="ayah-meninggal" 
            class="ml-2 text-sm font-medium text-gray-600">Deceased</label>
        </div>
    </div>
</div>

{{-- tempat_lahir_ayah --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    name="tempat_lahir_ayah"
    id="tempat_lahir_ayah" 
    autocomplete="on"
    value="{{ old('tempat_lahir_ayah', $data_ayah->tempat_lahir ?? '') }}"
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="tempat_lahir_ayah"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Place of birth</label>
</div>

{{-- tanggal_lahir_ayah --}}
<div class="mb-3 block relative">
    <input 
    required
    type="date" 
    name="tanggal_lahir_ayah"
    id="tanggal_lahir_ayah" 
    autocomplete="on"
    value="{{ old('tanggal_lahir_ayah', $data_ayah->tanggal_lahir ?? '') }}"
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="tanggal_lahir_ayah"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Date of birth</label>
</div>