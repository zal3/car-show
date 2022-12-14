<div class="m-4 md:m-40">
    <div class="relative flex justify-between gap-3 mb-6 ">
        <h1 class="text-md md:text-2xl font-bold">السيارات المتاحة للتاجير</h1>
        <livewire:ui.search />
    </div>
    @forelse ($cars as $car)
    <div class="p-4 mb-3 flex justify-between items-center gap-10   hover:bg-black hover:bg-opacity-70 hover:text-white   transition duration-500 ease-in-out">
        <div>
            <img src="{{ asset($car->image_path ?? 'img/cars/encar3.png') }}" class="   w-40 h-26 ">
        </div>
        <div class=" text-center ">
            <div>
                <h>{{ $car->type }}</h>
                <h1>{{ $car->model }}</h1>
                <div class=" @if ($car->color == 1) text-red-500 @endif @if ($car->color == 2) text-white @endif @if ($car->color == 3) text-black @endif @if ($car->color == 4) text-yellow-500 @endif @if ($car->color == 5) text-green-500 @endif @if ($car->color == 6) text-blue-500 @endif @if ($car->color == 7) @endif ">
                    @if ($car->color == 1)
                    احمر
                    @elseif($car->color == 2)
                    ابيض
                    @elseif($car->color == 3)
                    اسود
                    @elseif($car->color == 4)
                    اصفر
                    @elseif($car->color == 5)
                    اخضر
                    @elseif($car->color == 6)
                    ازرق
                    @endif
                </div>
            </div>
        </div>
        <a href="{{ route('rental') }}" class="ml-6">تاجير</a>
    </div>
    <hr>
    @empty
    <div class="text-center">
        <h1 class="text-2xl font-bold">لا يوجد سيارات متاحة للتاجير</h1>
        @endforelse
    </div>