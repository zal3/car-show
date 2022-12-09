<nav class=" bg-white fixed z-10 w-full">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between  h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button data-collapse-toggle="mobile-menu-2" type="button" aria-controls="mobile-menu-2"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
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
            </div>
            <div class=" flex-1 flex items-center justify-center sm:items-stretch sm:justify-between ml-24">
                <div class="">
                    <a href="/" >
                        <img src="{{ asset('/img/lg.png') }}" class="h-12 w-40 mx-4 ">
                    </a>
                </div>
                <div class="hidden md:block sm:ml-6">
                    <div class="flex  gap-3 ">
                        @foreach ($menu->items as $item)
                            <a href="{{ route($item->route) }}"
                                @if ($item->active) class=" text-orange-600 px-3  border-b border-orange-600
                            py-2  text-xl font-medium "
                            @else class="text-gray-700   hover:text-orange-600 hover:border-b  hover:border-orange-600 px-3 py-2
                            text-xl font-medium" @endif style="transition: 0.4s;">
                                {{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                @auth
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        {{-- Button --}}
                        <div>
                            <button type="button"
                                class=" flex text-sm rounded-full border-2 border-primary-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-500 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-10 w-10 rounded-full"
                                    src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                            </button>
                        </div>
                        {{-- content --}}
                        <div id="dropdown" data-popper-reference-hidden="" data-popper-escaped=""
                            data-popper-placement="top"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow items-center w-24 ">
    
                            <ul class=" text-center text-sm text-gray-700" aria-labelledby="dropdownInformationButton">
                                <li>
                                    <a href="{{ route('profile') }}" class="block px-4 py-2  hover:bg-orange-500 hover:text-white ">
                                        <i class="fa-solid fa-user text-primary-500"></i>
                                         {{ auth()->user()->name }}</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" class="" x-data>
                                        @csrf
                                        <button type="submit" class="block px-4 py-2 w-full text-right text-red-500 hover:bg-orange-500 hover:text-white ">
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
                                class="bt text-xs md:text-sm py-1 pl-3 pr-4 lg:mx-2 text-primary-700 @if ($item->route == 'login') border border-primary-500 @else  lg:inline @endif rounded-lg">
                                {{ $item->name }}
                                {{-- <i class="fa-solid fa-{{ $item->icon }}"></i> --}}

                            </a>
                        @endforeach
                    </div>



                @endauth
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden hidden" id="mobile-menu-2">
        <div class="bt  items-center ">
            @foreach ($menu->items as $item)
                <a href="{{ route($item->route) }}"
                    class=" bg-primary-500 m-auto  items-center text-center text-white py-2 rounded-md text-base font-medium">
                    {{ $item->name}}</a>
            @endforeach
        </div>
    </div>

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
