<div class="mt-4 ">
    <div class="flex  justify-between  items-center   md:m-8 m-3 p-3 mb-0 md:p-6 pb-0  ">
        <div class="text-md md:text-3xl  text-black font-bold  mr-12 ">انواع السيارات</div>
        <div class="flex  justify-between items-center gap-3">
            <div class="relative  ">
                <livewire:ui.search />
            </div>
        </div>
    </div>
    <div class=" flex items-center justify-center mx-auto">
        <div
            class="grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-6 items-center justify-center mx-auto px-7 sm:px-15 md:px-15 py-12">
            @forelse ($cars as $car)
            <livewire:pages.car.card :car="$car" key="{{ now() }}" />
            @empty
            <div class="px-2 py-4  mb-4 text-lg md:text-2xl text-gray-700 bg-primary-100 rounded-lg" role="alert">
                لم يتم اضافة سيارات ليتم عرضها
            </div>
            @endforelse
        </div>
    </div>
</div>