{{-- <div>
    <div class="">
        <div class=" overflow-hidden w-full  mx-auto border-primary-400">
            <div class="top h-64 w-full overflow-hidden relative">
                <img src="/img/profile_background.png" alt=""
                    class="bg w-full h-full object-cover object-center absolute z-0 border-2 border-primary-600">
                <div
                    class="flex flex-col justify-center items-center relative h-full bg-gray-200 bg-opacity-50 text-white">
                    <img src="@if ($user->profile_photo_path) {{ asset($user->profile_photo_path) }}@elseif($user->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($user->gender != 1) {{ asset('/img/profile_man.png') }} @endif"

                        class="h-32 w-32 object-cover rounded-full">
                    <h1 class="text-3xl font-semibold text-gray-900">{{ $user->name }}</h1>
                    <h4 class="text-sm mt-2  text-black">انضم منذ {{ date('Y', strtotime($user->created_at)) }}
                    </h4>
                </div>
            </div>
            <div class=" bg-white border-b border-gray-200 ">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-evenly" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent  hover:text-primary-600 hover:border-primary-300 "
                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="false">المعلومات الاساسية</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 bg-white " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @livewire('pages.profile.basic', ['user' => $user])
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class=" p-10">
    <div class="m-8 border bg-gray-200 rounded-md p-6  flex gap-4">
        <div class="basis-1/3 ">
            <div class="flex flex-col items-center gap-2 m-auto  bg-white rounded-md p-6">
                <img class="rounded-full w-40" src="
                @if ($user->profile_photo_path) {{ asset($user->profile_photo_path) }} @else
                {{ asset('/img/man.jpg') }}
                @endif
                ">
                <h1 class="text-xl">{{ $user->name }}</h1>
                    <h4 class="text-sm mt-2  text-black">انضم منذ {{ date('Y', strtotime($user->created_at)) }}
            </div>
        </div>
        @livewire('pages.profile.basic', ['user' => $user])

    </div>
</div>

