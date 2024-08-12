{{-- nama --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    name="nama"
    id="nama" 
    value="{{ old('nama', $data_diri->nama ?? '') }}"
    autocomplete="on"
    autofocus
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="nama"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Name</label>
</div>

{{-- jenis_kelamin --}}
<div class="mb-3 block relative border-b-2 border-gray-300 pb-2">
    <label 
    for="jenis-kelamin"
    class="text-gray-700">Gender</label>
    
    <div class="flex pt-3" id="jenis-kelamin">
        <div class="flex items-center">
            <input 
            id="laki-laki" 
            type="radio" 
            value="laki-laki" 
            name="jenis_kelamin" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('jenis_kelamin', $data_diri->jenis_kelamin ?? '') == 'laki-laki' ? 'checked' : '' }}>
            <label 
            for="laki-laki" 
            class="ml-2 text-sm font-medium text-gray-600">Male</label>
        </div>
        <div class="flex items-center ms-3">
            <input 
            id="perempuan" 
            type="radio" 
            value="perempuan" 
            name="jenis_kelamin" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('jenis_kelamin', $data_diri->jenis_kelamin ?? '') == 'perempuan' ? 'checked' : '' }}>
            <label 
            for="perempuan" 
            class="ml-2 text-sm font-medium text-gray-600">Female</label>
        </div>
    </div>
</div>

{{-- nim --}}
<div class="mb-3 block relative">
    <input 
    type="text" 
    name="nim"
    id="nim" 
    required
    autocomplete="on"
    value="{{ old('nim', $data_diri->nim ?? '') }}"
    autofocus
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="nim"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">NIM</label>
</div>

{{-- jurusan --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    name="jurusan"
    id="jurusan" 
    autocomplete="on"
    value="{{ old('jurusan', $data_diri->jurusan ?? '') }}"
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="jurusan"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Major</label>
</div>  

{{-- fakultas --}}
<div class="mb-3 block relative border-b-2 border-gray-300 pb-2">
    <label 
    for="jenis-kelamin"
    class="text-gray-700">Faculty</label>
    
    <div class="flex pt-3 flex-col" id="jenis-kelamin">
        <div class="flex items-center mb-2">
            <input 
            id="FIPP" 
            type="radio" 
            value="FIPP" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FIPP' ? 'checked' : '' }}>
            <label 
            for="FIPP" 
            class="ml-2 text-sm font-medium text-gray-600">FIPP</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FBS" 
            type="radio" 
            value="FBS" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FBS' ? 'checked' : '' }}>
            <label 
            for="FBS" 
            class="ml-2 text-sm font-medium text-gray-600">FBS</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FISIP" 
            type="radio" 
            value="FISIP" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FISIP' ? 'checked' : '' }}>
            <label 
            for="FISIP" 
            class="ml-2 text-sm font-medium text-gray-600">FISIP</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FMIPA" 
            type="radio" 
            value="FMIPA" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FMIPA' ? 'checked' : '' }}>
            <label 
            for="FMIPA" 
            class="ml-2 text-sm font-medium text-gray-600">FMIPA</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FEB" 
            type="radio" 
            value="FEB" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FEB' ? 'checked' : '' }}
            <label 
            for="FEB" 
            class="ml-2 text-sm font-medium text-gray-600">FEB</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FT" 
            type="radio" 
            value="FT" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FT' ? 'checked' : '' }}>
            <label 
            for="FT" 
            class="ml-2 text-sm font-medium text-gray-600">FT</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FIK" 
            type="radio" 
            value="FIK" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FIK' ? 'checked' : '' }}>
            <label 
            for="FIK" 
            class="ml-2 text-sm font-medium text-gray-600">FIK</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FH" 
            type="radio" 
            value="FH" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FH' ? 'checked' : '' }}>
            <label 
            for="FH" 
            class="ml-2 text-sm font-medium text-gray-600">FH</label>
        </div>
        <div class="flex items-center mb-2">
            <input 
            id="FK" 
            type="radio" 
            value="FK" 
            name="fakultas" 
            class="w-4 h-4 text-custom-blue bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2"
            {{ old('fakultas', $data_diri->fakultas ?? '') == 'FK' ? 'checked' : '' }}>
            <label 
            for="FK" 
            class="ml-2 text-sm font-medium text-gray-600">FK</label>
        </div>
    </div>
</div>

{{-- semester --}}
<div class="mb-3 block relative">
    <input 
    required
    type="number" 
    min="0"
    max="14"
    name="semester"
    id="semester" 
    autocomplete="on"
    value="{{ old('semester', $data_diri->semester ?? '') }}"
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="semester"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Semester</label>
</div>

{{-- telp --}}
<div class="mb-3 block relative">
    <input 
    required
    type="tel"
    name="telp"
    id="telp" 
    autocomplete="on"
    value="{{ old('telp', $data_diri->telp ?? '') }}"
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="telp"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Phone Number</label>
</div>

{{-- tempat_lahir --}}
<div class="mb-3 block relative">
    <input 
    required
    type="text" 
    name="tempat_lahir"
    id="tempat_lahir" 
    autocomplete="on"
    value="{{ old('tempat_lahir', $data_diri->tempat_lahir ?? '') }}"
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
    value="{{ old('tanggal_lahir', $data_diri->tanggal_lahir ?? '') }}"
    class="block rounded-t-2xl px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300 peer focus:border-b-2 focus:border-b-custom-blue" 
    placeholder=" " />
    <label 
    for="tanggal_lahir"
    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Date of birth</label>
</div>

{{-- bukti_identitas --}}
@if ($data_diri)
    @if ($data_diri->bukti_identitas !== null)
        <img 
        src="{{ asset($data_diri->bukti_identitas) }}" 
        alt=""
        loading="lazy"
        class="w-40 rounded-lg my-3">
    @endif
@endif
<div class="mb-3 block relative pb-3">
    <label 
    class="block text-sm font-medium text-gray-700 pb-0 mb-0" 
    for="file_input">Upload you proof of identity (KTM ) </label>
    @if ($data_diri)
        @if ($data_diri->bukti_identitas !== null)
            <small class="text-red-500 mt-0 pt-0">*Leave the input blank if you don't want to change your identity</small>
        @endif
    @endif
    <input 
    {{ $data_diri ? 
        $data_diri->bukti_identitas === null  ? 'required' : '' : 
    'required'}}
    name="bukti_identitas"
    value="{{ old('bukti_identitas', $data_diri->bukti_identitas ?? '')  }}"
    class="block w-full text-sm text-gray-900 mt-3 rounded-t-xl border-gray-300 border-b-2 cursor-pointer bg-transparent custom-file-input" 
    aria-describedby="bukti_identitas" 
    id="file_input" 
    type="file"
    accept="images/*">
    <small 
    class="mt-1 text-gray-500" 
    id="bukti_identitas">Scan PNG, JPG, PDF</small>
</div>