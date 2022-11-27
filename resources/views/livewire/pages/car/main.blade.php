<div class="popular section  ">
    <div class="flex justify-between  items-center  ">
        <h2 class=" text-3xl  text-black font-bold pt-8 mr-10 pb-2">انواع السيارات</h2>
        <div class="flex flex-col-2 justify-between items-center space-y-4">

            <div class="relative mt-3 ml-9  ">
                <div class="absolute inset-y-0 left-3 flex items-center pl-4  pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-black " fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full border border-gray-500  text-sm text-white   px-6  py-3  rounded-md   placeholder-black "
                    placeholder="بحث" required>
            </div>
            @admin
                <a href="{{ route('add-car') }}"
                class="text-black text-md xl:text-2xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-gray-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 ml-7  rounded-lg px-3 py-2 md:px-5 md:py-2.5">
                <i class="fa-solid fa-plus"></i>
                إضافة سيارة

        </a>
            @endadmin
        </div>
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
