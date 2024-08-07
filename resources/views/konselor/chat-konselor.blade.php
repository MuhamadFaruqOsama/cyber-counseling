@extends('layouts/main')


@section('container')
<div class="overflow-y-auto">
    <div class="bg-custom-blue fixed w-full z-20">
        <div class="p-4">
            <div class="flex">
                <div class="flex items-center justify-center align-middle">
                    <a href="/konselor" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                        <i class="fa-solid fa-arrow-left text-white"></i>
                    </a>
                </div>
                <div class="ms-3 text-white font-semibold flex items-center justify-center align-middle">
                    <div class="relative inline-block h-9 w-9 !rounded-full overflow-hidden border object-cover object-center">
                        <img
                        src="https://avatar.iran.liara.run/public/job/operator/female"
                        alt="avatar"
                        class="w-full h-full"
                        />
                    </div>
                    <div class="ms-3">
                        <div class="text-white">Dr. Konselor, S.T</div>
                        <small class="text-gray-200">online</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 min-h-screen z-10">
        <div class="px-4 relative pt-20">
            {{-- chat field --}}
            <div id="chat-field" class="py-2">
                <div class="w-full items-start">
                    <div class="chat-bubble-left shadow-sm w-fit py-1.5 rounded-xl bg-white px-3 mb-2 relative">
                        <div class="flex justify-between">
                            <div class="text-gray-700 text-xs">Hallo !!</div>
                            <small class="text-gray-400 ms-2 text-end self-end" style="font-size: 0.67em;">19:00</small>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <div class="chat-bubble-right shadow-sm w-fit py-1.5 rounded-xl bg-custom-blue px-3 mb-1 relative items-end">
                        <div class="flex justify-between">
                            <div class="text-white text-xs">Hallo !!</div>
                            <small class="text-gray-200 ms-2 text-end self-end" style="font-size: 0.67em;">19:00</small>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <div class="chat-bubble-right-continue shadow-sm w-fit py-1.5 rounded-xl bg-custom-blue px-3 mb-1 relative items-end">
                        <div class="flex justify-between">
                            <div class="text-white text-xs">Hallo !!</div>
                            <small class="text-gray-200 ms-2 text-end self-end" style="font-size: 0.67em;">19:00</small>
                        </div>
                    </div>
                </div>
            </div>
            {{-- chat field --}}
        </div>
    </div>

    {{-- chat kolom --}}
    <div class="text-center fixed bottom-0 mb-3 px-4 w-full">
        <form action="" method="post">
            <div class="w-full">
                <div class="relative w-full min-w-[200px] h-10 bg-white">
                <button type="submit" class="absolute grid w-5 h-5 place-items-center text-custom-blue top-2/4 right-3 -translate-y-2/4">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
                <input
                        type="search"
                        class="peer w-full h-full bg-transparent rounded-xl text-blue-gray-700 font-sans font-normal outline-none disabled:bg-blue-gray-50 transition-all placeholder-shown:border-blue-gray-100 border border-blue-gray-100 focus:border-blue-900 text-sm px-3 py-2.5 bg-white shadow-sm"
                        placeholder="Type something..."
                        required
                        autocomplete="on"
                    />
                </div>
            </div> 
        </form>
    </div>
    {{-- chat kolom --}}

</div>
@endsection