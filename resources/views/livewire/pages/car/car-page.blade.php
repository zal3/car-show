<div>
    <div class="  m-auto justify-center  items-center px-8 pb-8  ">
        <div class=" flex justify-center  items-center">
            {{-- <img class="" src=" {{ asset('img/cars/car6.jpg') }}"> --}}
            <div class="container">
                <img src="{{ asset($car->image_path ?? 'img/cars/car1.jpg') }}" alt=" " class="h-full" />
                <p class="title">{{ $car->type }}</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> {{ $car->sale_price }}$ </a></div>
            </div>
        </div>

        <div
            class="overflow-x-auto w-fit relative shadow-md sm:rounded-lg mt-9  flex justify-center  items-center m-auto">
            <table class="w-6/7 text-sm text-center text-left text-gray-500 dark:text-gray-400 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            نوع السيارة
                        </th>
                        <th scope="col" class="py-3 px-6">
                            الموديل
                        </th>
                        <th scope="col" class="py-3 px-6">
                            الشركة المصنعة
                        </th>
                        <th scope="col" class="py-3 px-6">
                            السعر
                        </th>
                        <th scope="col" class="py-3 px-6">
                            رقم السيارة
                        </th>
                        @admin
                        <th scope="col" class="py-3 px-6">
                            رقم الهيكل
                        </th>
                        @endadmin
                        <th scope="col" class="py-3 px-6">
                            لون السيارة
                        </th>
                        @admin
                        <th scope="col" class="py-3 px-6">
                            سعر الاستيراد </th>
                        @endadmin
                        <th scope="col" class="py-3 px-6">
                            دولة الاستيراد
                        </th>
                        <th scope="col" class="py-3 px-6">
                            تاريخ الاستيراد
                        </th>
                        @admin
                        <th scope="col" class="py-3 px-6">
                            الوصف
                        </th>

                        <th scope="col" class="py-3 px-6">
                            ..
                        </th>
                        @endadmin
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $car->type }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $car->model }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->category }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->sale_price }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->number }}
                        </td>
                        @admin
                        <td class="py-4 px-6">
                            {{ $car->chassis_number }}
                        </td>
                        @endadmin
                        <td class="py-4 px-6">
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
                        </td>@admin
                        <td class="py-4 px-6">

                            {{ $car->import_price }}$
                        </td>
                        @endadmin
                        <td class="py-4 px-6">
                            {{ $car->import_place }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $car->import_date }}
                        </td>
                        @admin
                        <td class="py-4 px-6">
                            {{ $car->note }}
                        </td>
                        <td class="py-4 px-6">
                            <div class="  opacity-70">
                                <button wire:click="confirm({{ $car->id }})"><i
                                        class="fa-solid fa-trash text-gray-600  hover:text-red-700 "></i></button>
                                <a href="{{ route('edit-car', ['car_id' => $car->id]) }}">
                                    <i
                                        class="fa-solid fa-pen-to-square text-gray-600   hover:text-blue-700"></i>
                                </a>
                            </div>
                        </td>
                        @endadmin
                    </tr>
                </tbody>
            </table>
        </div>


        {{-- route sent to next cardpage  --}}
        <a href="{{ route('car-page', ['car_id' => $car->id + 1]) }}">
            <div class="swiper-button-next mr-72 "></div>
        </a>
        <a href="{{ route('car-page', ['car_id' => $car->id - 1]) }}">
            <div class="swiper-button-prev  ml-72"></div>
        </a>
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