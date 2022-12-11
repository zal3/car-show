<div class="mt-4 ">
    <div class="flex  justify-between  items-center   m-8 mb-0 p-6 pb-0  ">
        <div class=" text-3xl  text-black font-bold  mr-12 ">انواع السيارات</div>
        <div class="flex  justify-between items-center gap-3">
            <!-- filter -->
            
            <div>
                @livewire('ui.filter-projects')
            </div>
            
            <!--  ff-->
            <div class="relative  ">
                
                <livewire:ui.search />
            </div>

            @admin
            <a href="{{ route('add-car') }}"
                class="text-black  text-md xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-gray-500 hover:text-primary-500 focus:ring-2 focus:ring-gray-900 ml-7  rounded-lg px-3 py-1 md:px-4 md:py-1">
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