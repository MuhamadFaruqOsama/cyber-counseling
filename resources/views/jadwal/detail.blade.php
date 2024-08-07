@extends('layouts/main')


@section('container')

<div class="bg-gray-100 min-h-screen pb-32">

    <div class="p-4">
        <div class="flex justify-between">
            <div class="">
                <a href="/jadwal" class="w-7 h-7 rounded-full flex items-center justify-start align-middle">
                    <i class="fa-solid fa-arrow-left text-gray-700"></i>
                </a>
            </div>
            <div class="flex items-end">
                <a
                data-modal-target="edit-jadwal" 
                data-modal-toggle="edit-jadwal"
                data-ripple-light="true"
                class="w-7 h-7 bg-custom-blue-30 rounded-full flex items-center justify-center align-middle">
                    <i class="fa-regular fa-pen-to-square text-custom-blue"></i>
                </a>
                <a  class="w-7 h-7 bg-red-200 ms-3 rounded-full flex items-center justify-center align-middle">
                    <i class="fa-regular fa-trash-can text-red-500"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="px-4">
        <div class="text-end">
            <small class="text-gray-500">Pukul  08:00 - 09:00</small>
        </div>
        <div class="text-gray-700 font-semibold text-lg">
            Ini Judul Tugas
        </div>
        <div class="text-gray-500 text-xs">15 Agustus 2024</div>
        <hr class="my-3">
        <p class="text-sm text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolores cupiditate quo facere dolor fuga natus blanditiis, voluptas, possimus ea veniam consequatur eum animi veritatis doloribus porro obcaecati recusandae quas nesciunt ad non! Perspiciatis voluptate possimus maiores unde asperiores, earum quia error, illo assumenda eaque animi fugit illum voluptates obcaecati?
        </p>
    </div>

</div> {{-- end of bg-gray-100 --}}


{{-- modal edit schedule --}}
<div id="edit-jadwal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                <h3 class="font-semibold text-gray-900 dark:text-white">
                    Change Your Schedule
                </h3>
                <button 
                type="button" 
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                data-modal-hide="edit-jadwal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                {{-- aktivitas --}}
                <div class="relative">
                    <input 
                    type="text" 
                    id="aktivitas" 
                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " />
                    <label for="aktivitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Your Activity</label>
                </div>
                {{-- aktivitas --}}

                {{-- tanggal --}}
                <div class="relative">
                    <input 
                    type="date" 
                    id="aktivitas" 
                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" " />
                    <label for="aktivitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Select Date</label>
                </div>
                {{-- tanggal --}}

                {{-- jam mulai - selesai --}}
                <div>
                    <label for="start-time" class="block mb-2 text-sm font-medium text-gray-500">Start time:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <input type="time" id="start-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
                <div>
                    <label for="end-time" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">End time:</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <input type="time" id="end-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
                {{-- jam mulai --}}

                {{-- catatan --}}
                <div class="relative">
                    <textarea
                    id="catatan" 
                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                    placeholder=" "></textarea>
                    <label for="catatan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Description (optional)</label>
                </div>
                {{-- catatan --}}

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button 
                type="submit" 
                class="rounded-3xl py-3 w-full mt-3 bg-custom-blue text-white"
                >Add Schedule</button>
            </div>
        </div>
    </div>
</div>
{{-- modal --}}

@endsection