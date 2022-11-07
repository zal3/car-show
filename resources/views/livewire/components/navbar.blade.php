<nav class="">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Mobile menu button-->
            {{-- <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button data-collapse-toggle="mobile-menu-2" type="button" aria-controls="mobile-menu-2"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-900 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div> --}}
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start ">
                <div class="flex-shrink-0 flex items-center ">
                    <a href="/" class="flex items-center text-xl">
                        <img src="{{ asset('/img/logo.png') }}" class="h-12 mx-4 ">
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex  gap-3">
                        @foreach ($menu->items as $item)
                            <a href="{{ route($item->route) }}"
                                @if ($item->active) class="bg-gray-700  text-black px-3
                            py-2 rounded-md text-sm font-medium "
                            @else class="text-gray-700  hover:bg-gray-500 hover:text-white px-3 py-2 rounded-md
                            text-sm font-medium" @endif>
                                {{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                {{-- @auth --}}
                    <!-- Profile dropdown -->
                    {{-- <div class="ml-3 relative"> --}}
                       <!-- Button-->
                        {{-- <div>
                            <button type="button"
                                class=" flex text-sm rounded-full border-2 border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-500 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-10 w-10 rounded-full"
                                    src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }}@elseif(auth()->user()->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif(auth()->user()->gender != 1) {{ asset('/img/profile_man.png') }} @endif">
                            </button>
                        </div> --}}
                        {{-- content --}}
                        {{-- <div id="dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                            data-popper-placement="top"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                            <div class="px-4 py-3 text-sm text-gray-900 ">
                                <div>{{ auth()->user()->name }}</div>
                            </div>
                            <ul class=" text-sm text-gray-700" aria-labelledby="dropdownInformationButton">
                                <li>
                                    <a href="{{ route('profile') }}" class="block px-4 py-2  hover:bg-gray-100 ">
                                        <i class="fa-solid fa-user text-gray-500"></i>
                                        حسابك </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="" x-data>
                                        @csrf
                                        <button type="submit" class="block px-4 py-2 w-full text-right hover:bg-gray-100 ">
                                            <i class="fa-solid fa-person-walking-arrow-right text-red-500"></i>
                                            الخروج </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="">
                        @foreach ($leftMenu->items as $item)
                            <a href="{{ route($item->route) }}"
                                class=" text-xs md:text-sm py-1 pl-3 pr-4 lg:mx-2 text-gray-700 @if ($item->route == 'login') border border-gray-500 @else hidden lg:inline @endif rounded-lg">
                                {{ $item->name }}
                                <i class="fa-solid fa-{{ $item->icon }}"></i>
                            </a>
                        @endforeach
                    </div>
                @endauth --}}
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden hidden" id="mobile-menu-2">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @foreach ($menu->items as $item)
                <a href="{{ route($item->route) }}"
                    @if ($item->active) class="bg-gray-500 text-white block px-3 py-2
                rounded-md text-base font-medium"
                @else class="text-gray-900 bg-gray-100 hover:text-black block px-3 py-2 rounded-md text-base
                font-medium" @endif>
                    {{ $item->name }}</a>
            @endforeach

        </div>
    </div>

</nav>
{{-- <nav class="bg-gray w-full fixed  px-2 sm:px-4 py-2.5 z-10">
    <div class="container flex justify-center-gap mx-auto  ">
        <a href="" class="flex items-center ">
            <img src="{{ asset('img/logo.png') }}" class="mr-4 h-6 sm:h-10" alt="Flowbite Logo">
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col p-4 mt-4 bg-gray-20 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-500">
                <li>
                    <a href="#"
                        class="block py-4 pr-8 pl-7 ml-6 text-white bg- rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                        aria-current="page">الرئيسية</a>
                </li>

                <li>
                    <a href="#"
                        class="block py-4 pr-8 pl-7 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">السيارات</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-4 pr-8 pl-7 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">من
                        نحن</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-4 pr-8 pl-7 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">تسجيل</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-4 pr-8 pl-7 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">تواصل
                        معنا</a>
                </li>
            </ul>

        </div>

        <form class="flex items-center  justify-center-gap mx-auto  pl-0 ml-6">
            <label for="simple-search" class="sr-only">serch</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-orange dark:text-orange" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-orange border border-orange-500 text-orange-500 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full pl-10 p-2.5  dark:bg-orange-500 dark:border-orange-500 dark:placeholder-orange-500 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500"
                    placeholder="بحث" required="">
            </div>
        </form>
    </div>
</nav> --}}
