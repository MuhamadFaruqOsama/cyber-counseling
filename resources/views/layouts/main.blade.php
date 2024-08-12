<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        {{-- meta --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cyber Konseling adalah aplikasi konseling online 24/7 yang menghubungkan Anda dengan profesional kesehatan mental. Konsultasi aman, nyaman, dan privat dari rumah Anda. Daftar sekarang!">

        @if ($title == "Verify Otp" || $title == "Forgot Password OTP")
            <meta name="csrf-token" content="{{ csrf_token() }}">
        @endif

        {{-- title --}}
        <title>Cyber Counseling | {{ $title }}</title>

        {{-- font awesome (icon) --}}
        <script src="https://kit.fontawesome.com/910e994c98.js" crossorigin="anonymous"></script>

        {{-- local style --}}
        <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">

        {{-- date picker --}}
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

        {{-- flowbite --}}
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

        {{-- filepond --}}
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />

        {{-- images edit --}}
        <link
            href="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.css"
            rel="stylesheet"
        />
        
        {{-- preview --}}
        <link
            href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
            rel="stylesheet"
        />

        {{-- izi Toast --}}
        <link rel="stylesheet" href="{{ secure_asset('vendor/izitoast/css/iziToast.min.css') }}">

        {{-- material tailwind css --}}
        @vite('resources/css/app.css')
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    </head>
    <body class="antialiased" 
    @if ($title !== 'YOUR OTP')
        onload="hideLoader()"
    @endif
    >

        @if ($title !== "YOUR OTP") 
            <div id="loader">
                <div class="fixed w-full max-w-[576px] h-full bg-custom-blue-30 loader-page z-50 left-1/2 transform -translate-x-1/2">
                    <div class="loader-2 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
                </div>        
            </div>
        @endif

        <div class="app-body none">

            @yield('container')

        </div>

        {{-- izi Toast --}}
        <script src="{{ secure_asset('vendor/izitoast/js/iziToast.min.js') }}"></script>

        {{-- show password --}}
        @if ($title == "Login" || $title == "Register" || $title == "Change Password")
            <script src="{{ secure_asset('js/toast.js') }}"></script>
            <script src="{{ secure_asset('js/auth.js') }}"></script>
        @endif

        {{-- OTP --}}
        @if ($title == "Verify Otp" || $title == "Forgot Password OTP") 
            <script src="{{ secure_asset('js/otp.js') }}"></script>
            <script src="{{ secure_asset('js/resend-otp.js') }}"></script>
        @endif

        {{-- EDIT PROFILE --}}
        @if ($title == "Edit Profile")
            <script src="{{ secure_asset('js/edit-data.js') }}"></script>
        @endif

        <!-- FilePond scripts -->
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

        {{-- validate type --}}
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        {{-- EXIF Orientation --}}
        <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
        {{-- images edit --}}
        <script src="https://unpkg.com/filepond-plugin-image-edit/dist/filepond-plugin-image-edit.js"></script>
        {{-- preview --}}
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        {{-- crop --}}
        <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
        {{-- resize --}}
        <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
        {{-- transform --}}
        <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>

        {{-- profile --}}
        @if ($title == "Profile") 
            <script src="{{ secure_asset('js/profile.js') }}"></script>
        @endif

        {{-- ripple --}}
        <script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>

        {{-- flowbite --}}
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

        {{-- main local js --}}
        <script src="{{ secure_asset('js/main.js') }}"></script>

        <script>
            @if(session('toast'))
            let toastData = @json(session('toast'));
            
            if (toastData.status === 'error') {

                let messages = ''

                if (typeof toastData.msg === 'object' && toastData.msg !== null) {
                    messages = Object.values(toastData.msg).join(', ')
                } else {
                    messages = toastData.msg
                }

                iziToast.error({
                    title: "Error",
                    message: `${messages}`,
                    position: 'topRight',
                    icon: 'fa-solid fa-ban'
                });
            } else if (toastData.status === 'success') {
                iziToast.success({
                    title: 'Success',
                    message: `${toastData.msg}`,
                    position: 'topRight',
                    icon: 'fa-solid fa-check'
                });
            }
            @endif
        </script>
    </body>
</html>