@extends('layouts/main')

@section('container')

    <div class="bg-gray-100 pb-20 min-h-screen">

        <div class="bg-custom-blue relative h-20 pt-5">

            <div class="px-4 flex">
                <a href="/education" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                    <i class="fa-solid fa-arrow-left text-white"></i>
                </a>
                <div class="ms-2 flex items-center align-middle justify-center">
                    <div class="font-semibold text-white text-md">Educational Video</div>
                </div>
            </div>

            {{-- search form --}}
            <div class="absolute w-full px-4 mt-5">
                <form action="" method="post">
                    <div class="w-full">
                        <div class="relative w-full min-w-[200px] h-10">
                            <button type="submit" class="absolute grid w-5 h-5 place-items-center text-blue-gray-500 top-2/4 right-3 -translate-y-2/4">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                            <input
                            type="search"
                            class="peer w-full h-full bg-transparent rounded-xl text-blue-gray-700 font-sans font-normal outline-none disabled:bg-blue-gray-50 transition-all placeholder-shown:border-blue-gray-100 border border-blue-gray-100 focus:border-blue-900 text-sm px-3 py-2.5 bg-white shadow-sm"
                            placeholder="Find video..."
                            required
                            autocomplete="on"
                            />
                        </div>
                    </div> 
                </form>
            </div>
            {{-- search form --}}

        </div>

            <div class="px-4 overflow-hidden mt-8 pt-2">
                <a href="/view-video" class="content mb-2">
                    <iframe 
                        src="https://www.youtube.com/embed/VxCJpjCQHCs?rel=0" 
                        frameborder="0"
                        class="w-full rounded-lg overflow-hidden"
                    >
                    </iframe>
                    <div class="font-semibold text-xs my-1 w-full truncate text-ellipsis overflow-hidden whitespace-nowrap text-gray-700">Tidak perlu takut</div>
                    <div class="text-xs max-w-full text-gray-400 truncate text-ellipsis overflow-hidden whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, a?</div>
                </a>
                <a href="/view-video" class="content mb-2">
                    <iframe 
                        src="https://www.youtube.com/embed/PE3OQ3yMuBg?rel=0" 
                        frameborder="0"
                        class="w-full rounded-lg overflow-hidden"
                    >
                    </iframe>
                    <div class="font-semibold text-xs my-1 w-full truncate text-ellipsis overflow-hidden whitespace-nowrap text-gray-700">Tidak perlu takut</div>
                    <div class="text-xs max-w-full text-gray-400 truncate text-ellipsis overflow-hidden whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, a?</div>
                </a>
                <a href="/view-video" class="content mb-2">
                    <iframe 
                        src="https://www.youtube.com/embed/VxCJpjCQHCs?rel=0" 
                        frameborder="0"
                        class="w-full rounded-lg overflow-hidden"
                    >
                    </iframe>
                    <div class="font-semibold text-xs my-1 w-full truncate text-ellipsis overflow-hidden whitespace-nowrap text-gray-700">Tidak perlu takut</div>
                    <div class="text-xs max-w-full text-gray-400 truncate text-ellipsis overflow-hidden whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, a?</div>
                </a>
                <a href="/view-video" class="content mb-2">
                    <iframe 
                        src="https://www.youtube.com/embed/PE3OQ3yMuBg?rel=0" 
                        frameborder="0"
                        class="w-full rounded-lg overflow-hidden"
                    >
                    </iframe>
                    <div class="font-semibold text-xs my-1 w-full truncate text-ellipsis overflow-hidden whitespace-nowrap text-gray-700">Tidak perlu takut</div>
                    <div class="text-xs max-w-full text-gray-400 truncate text-ellipsis overflow-hidden whitespace-nowrap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, a?</div>
                </a>
            </div>
    </div>

@endsection