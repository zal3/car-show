<div>
    <div class=" flex   justify-center gap-4 items-center px-8 pb-8  mx-16 ">
        <div class="">
            {{-- <img class="" src=" {{ asset('img/cars/car6.jpg') }}"> --}}
            <div class="container">
                <img src="{{ asset($car->image_path ?? 'img/cars/car1.jpg') }}" alt=" " class="h-full" />
                <p class="title">{{ $car->type }}</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> {{ $car->sale_price }}$ </a></div>
            </div>
        </div>
        <div class="text-lg p-6 grid grid-cols-1 mt-9">
            <div>
                <span>نوع السيارة :</span>
                <span>{{ $car->type }}</span>
            </div>
            <div>
                <span>الموديل :</span>
                <span>{{ $car->model }}</span>
            </div>
            <div>
                <span>الشركة المصنعة :</span>
                <span>{{ $car->category }}</span>
            </div>
            <div>
                <span>السعر :</span>
                <span>{{ $car->sale_price }}</span>
            </div>
            <div>
                <span>رقم السيارة :</span>
                <span>{{ $car->number }}</span>
            </div>
            <div>
                <span>رقم الهيكل :</span>
                <span>{{ $car->chassis_number }}</span>
            </div>
            <div>
                <span>لون السيارة :</span>
                <span>@if ($car->color == 1)
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
                            @endif</span>
            </div>
            <div>
                <span>سعر الاستيراد :</span>
                <span>{{ $car->import_price }}$</span>
            </div>
            <div>
                <span>دولة الاستيراد :</span>
                <span>{{ $car->import_place }}</span>
            </div>
            <div>
                <span>تاريخ الاستيراد :</span>
                <span>{{ $car->import_date }}</span>
            </div>
            <div>
                <span>الوصف :</span>
                <span>{{ $car->note }}</span>
            </div>
        </div>
        {{-- route sent to next cardpage  --}}
        <a href="{{ route('car-page', ['car_id' => $car->id +1]) }}">
            <div class="swiper-button-next"></div>
        </a>
        <a href="{{ route('car-page', ['car_id' => $car->id - 1]) }}">
            <div class="swiper-button-prev"></div>
        </a>

    </div>
    <div class="flex justify-center items-center m-auto gap-6 mb-8 opacity-70">
        <button wire:click="confirm({{ $car->id }})"><i class="fa-solid fa-trash text-gray-600 h-10 w-10 hover:text-red-700 "></i></button>
<button >
        <i class="fa-solid fa-pen-to-square text-gray-600 h-10 w-10  hover:text-blue-700"></i>
</button>
    </div>

</div>
<style scoped>
    .container {
        position: relative;
        margin-top: 50px;
        width: 500px;
        height: 300px;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0);
        transition: background 0.5s ease;
    }

    .container:hover .overlay {
        display: block;
        background: rgba(0, 0, 0, .3);
    }

    img {
        position: absolute;
        width: 500px;
        height: 250px;
        left: 0;
    }

    .title {
        position: absolute;
        width: 500px;
        left: 0;
        top: 120px;
        font-weight: 700;
        font-size: 30px;
        text-align: center;
        text-transform: uppercase;
        color: white;
        z-index: 1;
        transition: top .5s ease;
    }

    .container:hover .title {
        top: 90px;
    }

    .button {
        position: absolute;
        width: 500px;
        left: 0;
        top: 180px;
        text-align: center;
        opacity: 0;
        transition: opacity .35s ease;
    }

    .button a {
        width: 200px;
        padding: 12px 48px;
        text-align: center;
        color: white;
        z-index: 1;
    }

    .container:hover .button {
        opacity: 1;
    }
</style>
