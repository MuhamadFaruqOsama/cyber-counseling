@extends('layouts/main')

@section('container')
    <div class="px-4 pt-4 pb-10">
        <div class="flex justify-between">
            <a 
            onclick="back()"
            class="text-lg text-gray-700"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="text-center">
            <div class="text-gray-700 text-base font-bold">Terms And Conditions</div>
        </div>
        <hr class="my-3">
        <ol class="relative border-s border-custom-blue-30">                  
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-custom-blue rounded-full mt-1.5 -start-1.5 border border-custom-blue"></div>
                <div class="mb-2">
                    <div class="text-md text-gray-600 font-semibold">Benefits of Counseling</div>
                    <div class="text-sm text-gray-500">
                        The benefits of counseling include but are not limited to: a greater ability to relate to others, increased self-understanding and positive self-esteem, and a greater ability to solve problems or stressors from daily life. These things are not a guarantee that the counseling goals will definitely be achieved. The benefits of counseling that the client gets really depend on the client's motivation to change.
                    </div>
                </div>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-custom-blue rounded-full mt-1.5 -start-1.5 border border-custom-blue"></div>
                <div class="mb-2">
                    <div class="text-md text-gray-600 font-semibold">Counseling Risks</div>
                    <div class="text-sm text-gray-500">
                        Counseling has the potential to result in (but is not limited to) periods of increased anxiety, confusion, or frustration that impact relationships with others, the course, and oneself. Because counseling usually works in areas that cause discomfort, it is important to view the process as an opportunity to explore ways to overcome negative emotions. Understanding these explorations will help increase awareness of the beliefs, feelings, and behaviors that are causing problems in your life. It is important for you to work with your counselor throughout the counseling process to maximize the benefits of counseling.
                    </div>
                </div>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-custom-blue rounded-full mt-1.5 -start-1.5 border border-custom-blue"></div>
                <div class="mb-2">
                    <div class="text-md text-gray-600 font-semibold">Confidentiality</div>
                    <div class="text-sm text-gray-500">
                        All data provided before, during and after the counseling process is confidential, and will be kept confidential in accordance with the applicable provisions in the Counselor Professional Code of Ethics and applicable laws and regulations. The use of data is only directed for the benefit of the client. The use of data for research or other things is only done as non-identifying information.
                    </div>
                </div>
            </li>
            <li class="mb-10 ms-4">
                <div class="absolute w-3 h-3 bg-custom-blue rounded-full mt-1.5 -start-1.5 border border-custom-blue"></div>
                <div class="mb-2">
                    <div class="text-md text-gray-600 font-semibold mb-4">Counselor Rights</div>
                    <div class="text-sm text-gray-500">
                        <ul class="list-disc list-inside space-y-2">
                            <li>
                                Know the counselor's credentials (such as educational or professional background) of the counselor, including the limitations of individual counseling services
                            </li>
                            <li>
                                Obtain information about the goals, techniques, procedures, limitations, potential risks, and benefits of counseling
                            </li>
                            <li>
                                Request termination of the counseling relationship and obtain counseling services from another party, if you are not satisfied with the counselor's services
                            </li>
                            <li>
                                Get fair counseling treatment
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ol>
    </div>

@endsection

