@extends('layouts/main')


@section('container')

<div class="bg-gray-100 min-h-screen">

    <div class="bg-custom-blue-30 pb-4 rounded-bl-3xl">

        <div class="bg-custom-blue rounded-bl-3xl shadow-sm">
            <div class="p-4">
                <div class="flex">
                    <a href="/" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                        <i class="fa-solid fa-arrow-left text-white"></i>
                    </a>
                    <div class="ms-3 text-white font-bold flex items-center text-base justify-center align-middle">Counselor</div>
                </div>
            </div>
        </div>

        <div class="px-4 pt-3">
            {{-- search form --}}
            <form action="" method="post">
                <div class="w-full">
                    <div class="relative w-full min-w-[200px] h-10">
                        <button type="submit" class="absolute grid w-5 h-5 place-items-center text-blue-gray-500 top-2/4 right-3 -translate-y-2/4">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <input
                        type="search"
                        class="peer w-full h-full bg-transparent rounded-xl text-blue-gray-700 font-sans font-normal outline-none disabled:bg-blue-gray-50 transition-all placeholder-shown:border-blue-gray-100 border border-blue-gray-100 focus:border-custom-blue text-sm px-3 py-2.5 bg-white shadow-sm"
                        placeholder="Find counselor..."
                        required
                        autocomplete="on"
                        />
                    </div>
                </div> 
            </form>
            {{-- search form --}}
        </div>
    </div> {{-- end of bg-custom-blue-30 --}}

    <div class="px-4">
        {{-- list konselor --}}
        <div class="mt-5">
            <a href="/chat" class="flex justify-between">
                <div class="profile flex">
                    <div class="relative inline-block h-11 w-11 !rounded-full overflow-hidden border object-cover object-center">
                        <img
                        src="https://avatar.iran.liara.run/public/job/operator/male"
                        alt="avatar"
                        class="w-full h-full"
                        />
                    </div>
                    <div class="flex justify-center items-start align-middle flex-col ms-3">
                        <div class="font-semibold text-gray-700">Dr. Konselor, S.T</div>
                        <div class="text-xs text-gray-500">Lorem ipsum dolor sit amet.</div>
                    </div>
                </div>
                <div class="flex items-center justify-center align-middle">
                    <div class="w-7 h-7 bg-custom-blue-30 rounded-full flex items-center justify-center align-middle">
                        <i class="fa-solid fa-angle-right text-custom-blue"></i>
                    </div>
                </div>
            </a>
            <hr class="my-2">
            <a href="/chat" class="flex justify-between">
                <div class="profile flex">
                    <div class="relative inline-block h-11 w-11 !rounded-full overflow-hidden border object-cover object-center">
                        <img
                        src="https://avatar.iran.liara.run/public/job/operator/female"
                        alt="avatar"
                        class="w-full h-full"
                        />
                    </div>
                    <div class="flex justify-center items-start align-middle flex-col ms-3">
                        <div class="font-semibold text-gray-700">Dr. Konselor, S.T</div>
                        <div class="text-xs text-gray-500">Lorem ipsum dolor sit amet.</div>
                    </div>
                </div>
                <div class="flex items-center justify-center align-middle">
                    <div class="w-7 h-7 bg-custom-blue-30 rounded-full flex items-center justify-center align-middle">
                        <i class="fa-solid fa-angle-right text-custom-blue"></i>
                    </div>
                </div>
            </a>
        </div>
        {{-- list konselor --}}

    </div>
    
</div> {{-- end of bg-gray-100 --}}
@endsection