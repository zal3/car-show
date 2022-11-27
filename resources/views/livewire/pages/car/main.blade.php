<div class="popular section  ">
    <div class="flex justify-between  items-center  ">
        <h2 class=" text-3xl  text-black font-bold pt-8 mr-10 pb-2">انواع السيارات</h2>
       <div class="flex flex-col space-y-4">
        <a href="{{ route('add-car') }}" class="flex justify-center items-center  mx-6 px-6 py-3 rounded-md bg-gray-900   focus:ring-0 text-white text-sm">
            <i class="fa-solid fa-plus mx-1"></i>
            <p class="">إضافة سيارة</p>
            
        </a>
    
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative  ">
        <div class="absolute inset-y-0 left-5 flex items-center pl-4  pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white dark:text-white " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </div>
        <input type="search" id="default-search" class="block w-full   text-sm text-white dark:text-white   px-6  py-3  rounded-md   bg-gray-900  placeholder-white dark:placeholder-white  " placeholder="بحث" required>
    </div>
    </div>
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
