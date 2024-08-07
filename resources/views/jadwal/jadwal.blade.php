@extends('layouts/main')


@section('container')

<div class="bg-gray-100 min-h-screen pb-32">

    <div class="bg-custom-blue-30 pb-5 rounded-bl-3xl">

        <div class="bg-custom-blue rounded-bl-3xl">
            <div class="p-4">
                <div class="flex">
                    <a href="/" class="w-7 h-7 bg-custom-white-30 rounded-full flex items-center justify-center align-middle">
                        <i class="fa-solid fa-arrow-left text-white"></i>
                    </a>
                    <div class="ms-3 text-white font-bold text-base flex items-center justify-center align-middle">Schedule</div>
                </div>
            </div>
        </div>

        <div class="px-4">
            {{-- date ui --}}
            <div class="flex items-center justify-center">
                <div class="max-w-sm w-full">
                    <div class="rounded-t">
                        <div class="flex items-center justify-between py-3">
                            <span  tabindex="0" class="focus:outline-none font-semibold text-gray-700">October 2020</span>
                            <div class="flex items-center">
                                <a href="/" class="w-7 h-7 bg-custom-blue-30 rounded-full flex items-center justify-center align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler text-custom-blue icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="15 6 9 12 15 18" />
                                    </svg>
                                </a>
                                <a href="/" class="w-7 h-7 bg-custom-blue-30 ms-3 rounded-full flex items-center justify-center align-middle">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler text-custom-blue icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="9 6 15 12 9 18" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between bg-white overflow-x-auto rounded-2xl shadow-sm">
                            <table class="w-full calender">
                                <thead class="bg-custom-blue">
                                    <tr class="border-b">
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="font-semibold p-2 text-center text-white dark:text-gray-100">Mo</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="font-semibold p-2 text-center text-white dark:text-gray-100">Tu</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="font-semibold p-2 text-center text-white dark:text-gray-100">We</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="font-semibold p-2 text-center text-white dark:text-gray-100">Th</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="font-semibold p-2 text-center text-white dark:text-gray-100">Fr</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="font-semibold p-2 text-center text-white dark:text-gray-100">Sa</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="font-semibold p-2 text-center text-white dark:text-gray-100">Su</p>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600">
                                    <tr class="border-b">
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">1</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">2</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">3</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">4</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b">
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">5</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">6</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">7</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="cursor-pointer flex w-full justify-center">
                                                <a href="#" class="bg-yellow-300 rounded-full w-full h-full flex items-center align-middle justify-center">
                                                    <span>8</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">9</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">10</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">11</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b">
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">12</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">13</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">14</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">15</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">16</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">17</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">18</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b">
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">19</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">20</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">21</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">22</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">23</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">24</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="">25</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">26</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">27</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">28</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">29</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="font-medium">30</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- date ui --}}

        </div>

    </div> {{-- end of bg-custom-blue --}}

    <div class="px-4">
        {{-- add button --}}
        <div class="flex justify-between my-3">
            <div class="font-semibold text-gray-700 text-md flex items-center align-middle justify-center">Your Schedule</div>
            <a
            data-modal-target="tambah-jadwal" 
            data-modal-toggle="tambah-jadwal"
            data-ripple-light="true"
            class="flex items-center align-middle justify-center w-7 h-7 rounded-full bg-custom-blue-30">
                <i class="fa-solid fa-plus text-custom-blue text-lg"></i>
            </a>
        </div>
        {{-- add button --}}

        <hr class="text-gray-500 mb-3">

        {{-- time line --}}
        <div class="text-start mb-3">
            <div class="text-blue-800 font-semibold">15 Agustus 2024</div>
        </div>
        <ol class="relative border-s border-gray-300 ">                  
            <li class="mb-10 ms-4">
                <a href="/detail-jadwal">
                    <div class="absolute w-3 h-3 bg-custom-blue rounded-full mt-1.5 -start-1.5 border border-white"></div>
                    <time class="mb-1 text-xs font-normal leading-none text-gray-400 dark:text-gray-500">08:00 - 09:00</time>
                    <h3 class="font-semibold text-sm text-gray-900 dark:text-white">Marketing UI design in Figma</h3>
                    <p class="font-normal text-xs text-gray-400 dark:text-gray-400">View More</p>
                </a>
            </li>
        </ol>
        {{-- time line --}}
    </div>

</div> {{-- end of bg-gray-100 --}}

{{-- modal add schedule --}}
<div id="tambah-jadwal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600">
                <h3 class="font-semibold text-gray-900 dark:text-white">
                    Add Your Schedule
                </h3>
                <button 
                type="button" 
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                data-modal-hide="tambah-jadwal">
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