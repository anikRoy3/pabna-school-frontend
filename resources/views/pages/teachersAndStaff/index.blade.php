@extends('layouts.main')
@section('content')
    <section class="container mx-auto">
        <section>
            <h3 class="p-4 text-center text-[1.5em]">শিক্ষক ও কর্মচারী (দিবা শাখা)</h3>
            <div id="teachers_day_container" class="grid grid-cols-2 lg:grid-cols-5 gap-3"
                style="flex: 70%;
                                                   border-radius: 5px;
                                                   border: 1px solid #F1F1F1;
                                                   background: var(--white, #FFF);
                                                   padding: 1em;
        ">

                @foreach ($teachers as $teacher)
                    @if ($teacher['section'] == 'day')
                        <div class=" bg-base-100 shadow-xl  flex flex-col items-center justify-between"
                            style="border-radius: 5px;
                                   border: 0.5px solid var(--blue-1, #0C1167);
                                   background: var(--white, #FFF);
                                   height: 400px">
                            <img style="height: 230px;" src="{{ env('LOCAL_SERVER_BASE_URL') }}/storage/{{ $teacher['image'] }}" alt="teacher_image"
                                class="p-2 rounded-xl" />
                            <h2 class="">{{$teacher['name']}}</h2>
                            <small>{{$teacher['designation']}}</small>
                            <small>{{$teacher['lastDegree']}}</small>
                            <div class="flex justify-between items-center w-full p-3">
                                <button
                                    style="border-radius: 5px; padding: 5px; background: var(--blue-1, #0C1167); color: white; display: flex; height: 30px; justify-content: center; align-items: center; gap: 5px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                        viewBox="0 0 21 21" fill="none">
                                        <path
                                            d="M17.175 13.3167C16.15 13.3167 15.1583 13.15 14.2333 12.85C14.0884 12.8009 13.9326 12.7936 13.7837 12.829C13.6349 12.8643 13.499 12.9409 13.3917 13.05L12.0833 14.6917C9.725 13.5667 7.51667 11.4417 6.34167 9L7.96667 7.61667C8.19167 7.38333 8.25833 7.05833 8.16667 6.76667C7.85833 5.84167 7.7 4.85 7.7 3.825C7.7 3.375 7.325 3 6.875 3H3.99167C3.54167 3 3 3.2 3 3.825C3 11.5667 9.44167 18 17.175 18C17.7667 18 18 17.475 18 17.0167V14.1417C18 13.6917 17.625 13.3167 17.175 13.3167Z"
                                            fill="white" />
                                    </svg>
                                    <span>{{$teacher['phone']}}</span>
                                </button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="43" viewBox="0 0 44 43"
                                    fill="none">
                                    <path
                                        d="M36.333 7.1665H7.66634C5.69551 7.1665 4.10092 8.779 4.10092 10.7498L4.08301 32.2498C4.08301 34.2207 5.69551 35.8332 7.66634 35.8332H36.333C38.3038 35.8332 39.9163 34.2207 39.9163 32.2498V10.7498C39.9163 8.779 38.3038 7.1665 36.333 7.1665ZM36.333 14.3332L21.9997 23.2915L7.66634 14.3332V10.7498L21.9997 19.7082L36.333 10.7498V14.3332Z"
                                        fill="#0C1167" />
                                </svg>
                            </div>
                        </div>
                    @else
                    @endif
                @endforeach




            </div>
            <p class="text-center my-4 text-[#0C1167] flex items-center justify-center gap-1">
                <span> আরো</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03013 9.99981C2.03013 9.83405 2.09598 9.67508 2.21319 9.55787C2.3304 9.44066 2.48937 9.37481 2.65513 9.37481H17.3964L13.4626 5.44231C13.4045 5.3842 13.3584 5.31522 13.327 5.23929C13.2955 5.16337 13.2793 5.08199 13.2793 4.99981C13.2793 4.91763 13.2955 4.83626 13.327 4.76033C13.3584 4.68441 13.4045 4.61542 13.4626 4.55731C13.5207 4.4992 13.5897 4.45311 13.6657 4.42166C13.7416 4.39021 13.823 4.37402 13.9051 4.37402C13.9873 4.37402 14.0687 4.39021 14.1446 4.42166C14.2205 4.45311 14.2895 4.4992 14.3476 4.55731L19.3476 9.55731C19.4058 9.61537 19.452 9.68434 19.4835 9.76027C19.515 9.8362 19.5312 9.9176 19.5312 9.99981C19.5312 10.082 19.515 10.1634 19.4835 10.2394C19.452 10.3153 19.4058 10.3843 19.3476 10.4423L14.3476 15.4423C14.2895 15.5004 14.2205 15.5465 14.1446 15.578C14.0687 15.6094 13.9873 15.6256 13.9051 15.6256C13.823 15.6256 13.7416 15.6094 13.6657 15.578C13.5897 15.5465 13.5207 15.5004 13.4626 15.4423C13.4045 15.3842 13.3584 15.3152 13.327 15.2393C13.2955 15.1634 13.2793 15.082 13.2793 14.9998C13.2793 14.9176 13.2955 14.8363 13.327 14.7603C13.3584 14.6844 13.4045 14.6154 13.4626 14.5573L17.3964 10.6248H2.65513C2.48937 10.6248 2.3304 10.559 2.21319 10.4418C2.09598 10.3245 2.03013 10.1656 2.03013 9.99981Z"
                        fill="#0C1167" />
                </svg>
            </p>
        </section>


        <section class="mt-9"
            style="border-radius: 5px;
                   border: 1px solid #F1F1F1;
                   background: var(--white, #FFF);
                   box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.25);">
            <h3 class="p-4 text-center text-[1.5em]">শিক্ষক ও কর্মচারী (প্রভাতী শাখা)</h3>
            <div id="teachers_morning_container" class="grid grid-cols-2 lg:grid-cols-5 gap-3"
                style="flex: 70%;
                                                   border-radius: 5px;
                                                   border: 1px solid #F1F1F1;
                                                   background: var(--white, #FFF);
                                                   padding: 1em;
        ">
                @foreach ($teachers as $teacher)
                    @if ($teacher['section'] == 'morning')
                    <div class=" bg-base-100 shadow-xl  flex flex-col items-center justify-between"
                    style="border-radius: 5px;
                           border: 0.5px solid var(--blue-1, #0C1167);
                           background: var(--white, #FFF);
                           height: 400px">
                    <img style="height: 230px;" src="{{ env('LOCAL_SERVER_BASE_URL') }}/storage/{{ $teacher['image'] }}" alt="teacher_image"
                        class="p-2 rounded-xl" />
                    <h2 class="">{{$teacher['name']}}</h2>
                    <small>{{$teacher['designation']}}</small>
                    <small>{{$teacher['lastDegree']}}</small>
                    <div class="flex justify-between items-center w-full p-3">
                        <button
                            style="border-radius: 5px; padding: 5px; background: var(--blue-1, #0C1167); color: white; display: flex; height: 30px; justify-content: center; align-items: center; gap: 5px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                viewBox="0 0 21 21" fill="none">
                                <path
                                    d="M17.175 13.3167C16.15 13.3167 15.1583 13.15 14.2333 12.85C14.0884 12.8009 13.9326 12.7936 13.7837 12.829C13.6349 12.8643 13.499 12.9409 13.3917 13.05L12.0833 14.6917C9.725 13.5667 7.51667 11.4417 6.34167 9L7.96667 7.61667C8.19167 7.38333 8.25833 7.05833 8.16667 6.76667C7.85833 5.84167 7.7 4.85 7.7 3.825C7.7 3.375 7.325 3 6.875 3H3.99167C3.54167 3 3 3.2 3 3.825C3 11.5667 9.44167 18 17.175 18C17.7667 18 18 17.475 18 17.0167V14.1417C18 13.6917 17.625 13.3167 17.175 13.3167Z"
                                    fill="white" />
                            </svg>
                            <span>{{$teacher['phone']}}</span>
                        </button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="43" viewBox="0 0 44 43"
                            fill="none">
                            <path
                                d="M36.333 7.1665H7.66634C5.69551 7.1665 4.10092 8.779 4.10092 10.7498L4.08301 32.2498C4.08301 34.2207 5.69551 35.8332 7.66634 35.8332H36.333C38.3038 35.8332 39.9163 34.2207 39.9163 32.2498V10.7498C39.9163 8.779 38.3038 7.1665 36.333 7.1665ZM36.333 14.3332L21.9997 23.2915L7.66634 14.3332V10.7498L21.9997 19.7082L36.333 10.7498V14.3332Z"
                                fill="#0C1167" />
                        </svg>
                    </div>
                </div>
                    @else
                    @endif
                @endforeach


            </div>
            <p class="text-center my-4 text-[#0C1167] flex items-center justify-center gap-1">
                <span> আরো</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.03013 9.99981C2.03013 9.83405 2.09598 9.67508 2.21319 9.55787C2.3304 9.44066 2.48937 9.37481 2.65513 9.37481H17.3964L13.4626 5.44231C13.4045 5.3842 13.3584 5.31522 13.327 5.23929C13.2955 5.16337 13.2793 5.08199 13.2793 4.99981C13.2793 4.91763 13.2955 4.83626 13.327 4.76033C13.3584 4.68441 13.4045 4.61542 13.4626 4.55731C13.5207 4.4992 13.5897 4.45311 13.6657 4.42166C13.7416 4.39021 13.823 4.37402 13.9051 4.37402C13.9873 4.37402 14.0687 4.39021 14.1446 4.42166C14.2205 4.45311 14.2895 4.4992 14.3476 4.55731L19.3476 9.55731C19.4058 9.61537 19.452 9.68434 19.4835 9.76027C19.515 9.8362 19.5312 9.9176 19.5312 9.99981C19.5312 10.082 19.515 10.1634 19.4835 10.2394C19.452 10.3153 19.4058 10.3843 19.3476 10.4423L14.3476 15.4423C14.2895 15.5004 14.2205 15.5465 14.1446 15.578C14.0687 15.6094 13.9873 15.6256 13.9051 15.6256C13.823 15.6256 13.7416 15.6094 13.6657 15.578C13.5897 15.5465 13.5207 15.5004 13.4626 15.4423C13.4045 15.3842 13.3584 15.3152 13.327 15.2393C13.2955 15.1634 13.2793 15.082 13.2793 14.9998C13.2793 14.9176 13.2955 14.8363 13.327 14.7603C13.3584 14.6844 13.4045 14.6154 13.4626 14.5573L17.3964 10.6248H2.65513C2.48937 10.6248 2.3304 10.559 2.21319 10.4418C2.09598 10.3245 2.03013 10.1656 2.03013 9.99981Z"
                        fill="#0C1167" />
                </svg>
            </p>
        </section>
    </section>
@endsection
