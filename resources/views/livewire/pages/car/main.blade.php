<div class="mt-4 ">
    <div class="flex  justify-between  items-center   md:m-8 m-3 p-3 mb-0 md:p-6 pb-0  ">
        <div class="text-md md:text-3xl  text-black font-bold  mr-12 ">انواع السيارات</div>
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
    <div  class=" flex items-center justify-center mx-auto">
    <div class="grid  grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-6 items-center justify-center mx-auto px-7 sm:px-15 md:px-15 py-12">
       
    
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