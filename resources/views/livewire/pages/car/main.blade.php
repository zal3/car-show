<div class="popular section  ">
    <div class="flex justify-between items-center  ">
        <h2 class=" text-3xl  text-black font-bold pt-8 mr-10 pb-2">انواع السيارات</h2>
        <a href="{{ route('add-car') }}" class=" px-6 py-3 rounded-md bg-gray-900   focus:ring-0 text-white text-sm">
            <p class="">إضافة سيارة</p>
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
    <div class="grid grid-cols-4 gap-6 items-center justify-center p-9">
        @foreach ($cars as $car)
            <livewire:pages.car.card :car="$car" key="{{ now() }}" />
        @endforeach
    </div>

</div>
