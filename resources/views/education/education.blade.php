@extends('layouts/main')

@section('container')

<div class="bg-gray-100 min-h-screen">

    <div class="bg-custom-blue-30 pb-4 rounded-bl-3xl">

        <div class="bg-custom-blue rounded-bl-3xl shadow-sm">
            <div class="p-4">
                <div class="flex">
                    {{-- <a href="/" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                        <i class="fa-solid fa-arrow-left text-white"></i>
                    </a> --}}
                    <div class="ms-3 text-white font-bold text-base flex items-center justify-center align-middle">Educational Content</div>
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
                        placeholder="Find educational video or article"
                        required
                        autocomplete="on"
                        />
                    </div>
                </div> 
            </form>
            {{-- search form --}}
        </div>
    </div> {{-- end of bg-custom-blue-30 --}}

            {{-- title video --}}
            <div class="flex justify-between px-4 pt-3 mb-3">
                <div class="text-gray-800 font-semibold">
                    Video
                </div>
                <a href="/video" class="text-blue-800 text-xs font-semibold">
                    View more
                </a>
            </div>
            {{-- title video --}}

            {{-- video content --}}
            <div class="px-4 overflow-hidden">
                <div class="overflow-x-scroll flex space-x-4">
                    <a href="/view-video" class="content">
                        <iframe 
                            src="https://www.youtube.com/embed/VxCJpjCQHCs?rel=0" 
                            frameborder="0"
                            class="w-56 rounded-lg overflow-hidden"
                        >
                        </iframe>
                        <div class="font-semibold text-xs my-1 w-full truncate text-ellipsis overflow-hidden whitespace-nowrap text-gray-700">Tidak perlu takut</div>
                        <div class="text-xs max-w-56 text-gray-400 truncate text-ellipsis overflow-hidden whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, a?</div>
                    </a>
                    <a href="/view-video" class="content">
                        <iframe 
                            src="https://www.youtube.com/embed/PE3OQ3yMuBg?rel=0" 
                            frameborder="0"
                            class="w-56 rounded-lg overflow-hidden"
                        >
                        </iframe>
                        <div class="font-semibold text-xs my-1 w-full truncate text-ellipsis overflow-hidden whitespace-nowrap text-gray-700">Tidak perlu takut</div>
                        <div class="text-xs max-w-56 text-gray-400 truncate text-ellipsis overflow-hidden whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, a?</div>
                    </a>
                </div>
            </div>
            {{-- video content --}}

            {{-- hr --}}
            <div class="px-4">
                <hr class="my-3">
            </div>
            {{-- hr --}}

            {{-- article title --}}
            <div class="flex justify-between px-4 mb-3">
                <div class="text-gray-800 font-semibold">
                    Article
                </div>
                <a href="/artikel" class="text-blue-800 text-xs font-semibold">
                    View more
                </a>
            </div>
            {{-- article title --}}


            {{-- article content --}}
            <div class="px-4 pb-32">
                <a href="/view-artikel" class="mb-2">
                    <div class="flex mb-2">
                        <div class="relative h-8 w-8 !rounded-full overflow-hidden border object-cover object-center flex items-start justify-cener align-middle">
                            <img
                            src="https://avatar.iran.liara.run/public/job/operator/male"
                            alt="avatar"
                            class="w-full h-full"
                            />
                        </div>
                        <div class="flex items-start justify-cener align-middle ms-3 flex-col"> 
                            <div class="text-gray-700 text-sm font-semibold">
                                Dr. Konselor S.T
                            </div>
                            <div class="font-normal text-gray-500 text-xs">23 minutes ago</div>
                        </div>
                    </div>
                    <div class="bg-white border-gray-300 border rounded-xl">
                        <img 
                        src="{{ asset('img/app/2.png') }}" 
                        alt="" 
                        class="w-full object-cover object-center rounded-t-xl h-32">
                        <div class="p-2">
                            <div class="text-gray-700 w-full">Cara mengatasi rasa takut saat berbicara didepan banyak orang</div>
                            <div class="mt-2">
                                <small class="bg-custom-blue-30 rounded text-custom-blue px-1 py-0.5">belajar</small>
                                <small class="bg-custom-blue-30 rounded text-custom-blue px-1 py-0.5">mantap</small>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                </a>
                <a href="/view-artikel" class="mb-2">
                    <div class="flex mb-2">
                        <div class="relative h-8 w-8 !rounded-full overflow-hidden border object-cover object-center flex items-start justify-cener align-middle">
                            <img
                            src="https://avatar.iran.liara.run/public/job/operator/male"
                            alt="avatar"
                            class="w-full h-full"
                            />
                        </div>
                        <div class="flex items-start justify-cener align-middle ms-3 flex-col"> 
                            <div class="text-gray-700 text-sm font-semibold">
                                Dr. Konselor S.T
                            </div>
                            <div class="font-normal text-gray-500 text-xs">23 minutes ago</div>
                        </div>
                    </div>
                    <div class="bg-white border-gray-300 border rounded-xl">
                        <img 
                        src="{{ asset('img/app/2.png') }}" 
                        alt="" 
                        class="w-full object-cover object-center rounded-t-xl h-32">
                        <div class="p-2">
                            <div class="text-gray-700 w-full">Cara mengatasi rasa takut saat berbicara didepan banyak orang</div>
                            <div class="mt-2">
                                <small class="bg-custom-blue-30 rounded text-custom-blue px-1 py-0.5">belajar</small>
                                <small class="bg-custom-blue-30 rounded text-custom-blue px-1 py-0.5">mantap</small>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                </a>
            </div>
            {{-- article content --}}

    </div>

    {{-- navbar --}}
    @include('utils/navbar')
    {{-- navbar --}}

@endsection