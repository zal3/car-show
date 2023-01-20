<div class=" p-10">
    <div class="md:m-8 border bg-gray-200 rounded-md p-6  md:flex gap-4">
        <div class="basis-1/3 ">
            <div class="flex flex-col items-center gap-2 m-auto  bg-white rounded-md p-6">
                <img class="rounded-full w-20 h-20 md:w-40 md:h-40" src="{{ asset($user->profile_photo_path ?? 'img/man.jpg') }}">
                <h1 class="text-xl">{{ $user->name }}</h1>
                <h4 class="text-sm mt-2  text-black">انضم منذ {{ date('Y', strtotime($user->created_at)) }}
            </div>
        </div>
        @livewire('pages.profile.basic', ['user' => $user])
    </div>
</div>