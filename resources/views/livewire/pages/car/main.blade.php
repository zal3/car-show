<div class="mt-4 ">
    <div class="flex  justify-between  items-center   mt-12 p-6  ">
        <div class=" text-3xl  text-black font-bold  mr-20 ">انواع السيارات</div>
        <div class="flex  justify-between items-center gap-3">
            <!-- filter -->
            
            <div>
                @livewire('ui.filter-projects')
            </div>
            
            <!--  ff-->
            <div class="relative  ml-9  ">
                
                <livewire:ui.search />
            </div>

            @admin
            <a href="{{ route('add-car') }}"
                class="text-black text-md xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-gray-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 ml-7  rounded-lg px-3 py-2 md:px-5 md:py-2.5">
                <i class="fa-solid fa-plus"></i>
                إضافة سيارة

            </a>
            @endadmin
        </div>
    </div>
    <div class="grid grid-cols-4 gap-6 items-center justify-center px-24 py-12">
        @forelse ($cars as $car)
        <livewire:pages.car.card :car="$car" key="{{ now() }}" />

        @empty
        <div class="px-2 py-4  mb-4 text-2xl text-gray-700 bg-primary-100 rounded-lg" role="alert">
            لم يتم اضافة سيارات ليتم عرضها
        </div>
        @endforelse
    </div>

</div>