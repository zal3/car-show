<div class="popular section  ">
    <div class="flex justify-between items-center items-center  ">
        <h2 class=" text-3xl  text-black font-bold pt-8 mr-10 pb-2">انواع السيارات</h2>
        @admin
        <a href="{{ route('add-car') }}" class="flex justify-center items-center  mx-6 px-6 py-3 rounded-md bg-gray-900   focus:ring-0 text-white text-sm">
            <i class="fa-solid fa-plus mx-1"></i>
            <p class="">إضافة سيارة</p>

        </a>
       @endadmin
    </div>
    <div class="grid grid-cols-4 gap-6 items-center justify-center px-24 py-16">
        @forelse ($cars as $car)
            <livewire:pages.car.card :car="$car" key="{{ now() }}" />

        @empty
        <div class="px-2 py-4  mb-4 text-2xl text-gray-700 bg-primary-100 rounded-lg" role="alert">
            لم يتم اضافة سيارات  ليتم عرضها
            </div>
        @endforelse
    </div>

</div>
