<div class="m-4 md:m-40">
    <div class="relative flex justify-between gap-3 mb-6 ">
        <h1 class="text-md md:text-2xl font-bold">السيارات المؤجرة</h1>
        <livewire:ui.search />
    </div>
    @forelse ($rents as $rent)
    <div class="p-4 mb-3 flex justify-between items-center gap-10  hover:bg-black hover:bg-opacity-70 hover:text-white  transition duration-500 ease-in-out">
        <div>
            <img src="{{ asset($rent->car->image_path ?? 'img/cars/encar3.png') }}" class="   w-40 h-26 ">
        </div>
        <div class="  text-center ">
            <div class="md:flex md:gap-4  items-center ">
                <h>{{ $rent->car->type}}</h>
                <h1>{{ $rent->car->model }}</h1>
                <div class=" @if ($rent->car->color == 1) text-red-500 @endif @if ($rent->car->color == 2) text-white @endif @if ($rent->car->color == 3) text-black @endif @if ($rent->car->color == 4) text-yellow-500 @endif @if ($rent->car->color == 5) text-green-500 @endif @if ($rent->car->color == 6) text-blue-500 @endif @if ($rent->car->color == 7) @endif ">
                    @if ($rent->car->color == 1)
                    احمر
                    @elseif($rent->car->color == 2)
                    ابيض
                    @elseif($rent->car->color == 3)
                    اسود
                    @elseif($rent->car->color == 4)
                    اصفر
                    @elseif($rent->car->color == 5)
                    اخضر
                    @elseif($rent->car->color == 6)
                    ازرق
                    @endif
                </div>
            </div>
        </div>
        <div>
            {{ $rent->car->rent->return_date }}
        </div>
    </div>
    @empty
    <div class="text-center">
        <h1 class="text-2xl font-bold">لا يوجد سيارات مؤجرة</h1>
        @endforelse
    </div>