<nav class=" bg-white fixed z-10 w-full">

    <nav
        class="bg-white px-2 sm:px-4 py-2 md:py-0  fixed w-full z-20 top-0 left-0 md:border-b md:border-gray-200 ">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <img src="{{ asset('/img/lg.png') }}" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
            </a>
            <div class="flex md:order-2">
                <div >
                @auth
                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                    {{-- Button --}}
                    <div>
                        <button type="button"
                            class=" flex text-sm rounded-full md:border-2 md:border-primary-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-500 focus:ring-white"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            <img class=" h-7 w-7 sm:h-10 sm:w-10 rounded-full"
                                src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                        </button>
                    </div>
                    {{-- content --}}
                    <div id="dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                        data-popper-placement="top"
                        class="z-10 hidden bg-white divide-y divide-gray-100  items-center w-24 ">
                        <ul class=" text-center text-sm text-gray-700" aria-labelledby="dropdownInformationButton">
                            <li>
                                <a href="{{ route('profile') }}"
                                    class="block px-4 py-2  hover:bg-orange-500 hover:text-white ">
                                    <i class="fa-solid fa-user text-primary-500"></i>
                                    {{ auth()->user()->name }}</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="" x-data>
                                    @csrf
                                    <button type="submit"
                                        class="block px-4 py-2 w-full text-right text-red-500 hover:bg-orange-500 hover:text-white ">
                                        <i class="fa-solid fa-person-walking-arrow-right   "></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="">
                    @foreach ($leftMenu->items as $item)
                    <a href="{{ route($item->route) }}"
                        class="bt text-xs md:text-sm py-1 pl-3 pr-4 lg:mx-2 text-primary-700 @if ($item->route == 'login') md:border md:border-primary-500 @else  lg:inline @endif rounded-lg">
                        {{ $item->name }}
                        {{-- <i class="fa-solid fa-{{ $item->icon }}"></i> --}}
                    </a>
                    @endforeach
                </div> 
                @endauth
                </div>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4   md:flex-row md:space-x-3 md:mt-0 md:text-sm md:font-medium  md:bg-white ">
                    @foreach ($menu->items as $item)
                        @if ($item->id == 1)
                        <a href="{{ route($item->route) }}" @if ($item->active) class=" text-orange-600 px-3 md:border-b
                        md:border-orange-600
                            py-2 font-medium "
                            @else class="text-gray-700 hover:text-orange-600 hover:md:border-b hover:md:border-orange-600 px-3
                            py-2
                            font-medium" @endif style="transition: 0.4s;">
                            {{ $item->name }}</a>
                        @endif
                        @endforeach
                        @foreach ($menu->items as $item)
                        @if ($item->id == 2)
                        <div href="{{ route($item->route) }}" @if ($item->active) class=" text-orange-600 px-3 md:border-b
                        md:border-orange-600
                            py-2 font-medium "
                            @else class="text-gray-700 hover:text-orange-600 hover:md:border-b hover:md:border-orange-600 px-3
                            py-2
                            font-medium" @endif style="transition: 0.4s;">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center gap-2">
                                {{ $item->name }}
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{ route($item->route) }}"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">تأجير سيارة
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('available-rental') }}"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">السيارات
                                            المتاحة للتأجير</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('unavailable-rental') }}"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">السيارات
                                            المؤجرة </a>
                                    </li>
                                    @admin
                                    <li>
                                        <a href="{{ route('control') }}"
                                            class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">
                                            أدارة التأجير</a>
                                    </li>
                                    @endadmin
                                </ul>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @foreach ($menu->items as $item)
                        @if ($item->id == 3)
                        <a href="{{ route($item->route) }}" @if ($item->active) class=" text-orange-600 px-3 md:border-b
                        md:border-orange-600
                            py-2 font-medium "
                            @else class="text-gray-700 hover:text-orange-600 hover:md:border-b hover:md:border-orange-600 px-3
                            py-2
                            font-medium" @endif style="transition: 0.4s;">
                            {{ $item->name }}</a>
                        @endif
                        @endforeach
                </ul>
            </div>
        </div>
    </nav>

</nav>

<style scoped>
.bt {

    border-radius: 4px;
    font-weight: 600;
    padding: 10 5;
    transition: 0.4s;
}

.bt:hover {
    color: white;
    background-color: rgb(207, 103, 18);
}
</style>