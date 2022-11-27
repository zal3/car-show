<div class="popular section  ">
    <div class="flex justify-between items-end  ">
        <h2 class=" text-3xl  text-black font-bold pt-8 mr-10 pb-2">انواع السيارات</h2>
        @admin
            <a href="{{ route('add-car') }}"
                class="text-black text-md xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-gray-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 ml-7  rounded-lg px-3 py-2 md:px-5 md:py-2.5">
                <i class="fa-solid fa-plus"></i>
                إضافة سيارة 

            </a>
        @endadmin
    </div>
    <div class="grid grid-cols-4 gap-6 items-center justify-center px-24 py-16">
        @forelse ($cars as $car)
            <livewire:pages.car.card :car="$car" key="{{ now() }}" />

        @empty
            <div class="px-2 py-4  mb-4 text-2xl text-gray-700 bg-primary-100 rounded-lg" role="alert">
                لم يتم اضافة سيارات ليتم عرضها
            </div>
        @endforelse
    </div>

</div>
