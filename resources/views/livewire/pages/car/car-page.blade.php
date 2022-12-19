<div class=" m-auto  items-center px-8 pb-8 ">
    <div class=" flex justify-center  items-center">
        <a href="{{ route('car-page', ['car_id' => $car->id + 1]) }}">
            <div class="swiper-button-next lg:w-1/2 md:3/4 "></div>
        </a>
        <div class="container relative mt-[50px] w-[500px] h-[300px] ">
            <img src="{{ asset($car->image_path ?? 'img/cars/car1.jpg') }}" alt=" "
                class="h-full absolute left-0 w-[500px] " />
            <p class="title absolute  left-0 w-[500px] top-[120px] text-white ">{{ $car->type }}</p>
            <div class="overlay absolute top-0 left-0 w-[100%] h-[100%] "></div>
            <div class="button absolute w-[500px] left-0 text-center opacity-0 top-[180px]">
                <a href="#" class="w-[200px] px-[48px] py-[12px] text-center text-white"> {{ $car->sale_price }}$ </a>
            </div>
        </div>
        <a href="{{ route('car-page', ['car_id' => $car->id - 1]) }}">
            <div class="swiper-button-prev  lg:w-1/2 md:3/4"></div>
        </a>
    </div>
    <body class="flex items-center justify-center">
        <div class="container">
            <table class="w-full flex flex-row flex-no-wrap sm:bg-white  overflow-hidden sm:shadow-lg my-5">
                <thead class="text-white">
                    <tr
                        class="bg-gray-900 flex flex-col flex-no wrap sm:table-row shadow-lg  justify-center  items-center  text-center mb-2 sm:mb-0">
                        <th class="p-3 text-left">
                            نوع السيارة
                        </th>
                        <th class="p-3 text-left">
                            الموديل
                        </th>
                        <th class="p-3 text-left">
                            الشركة المصنعة
                        </th>
                        <th class="p-3 text-left">
                            السعر
                        </th>
                        <th class="p-3 text-left">
                            رقم السيارة
                        </th>
                        @admin
                        <th class="p-3 text-left">
                            رقم الهيكل
                        </th>
                        @endadmin
                        <th class="p-3 text-left">
                            لون السيارة
                        </th>
                        @admin
                        <th class="p-3 text-left">
                            سعر الاستيراد </th>
                        @endadmin
                        <th class="p-3 text-left">
                            دولة الاستيراد
                        </th>
                        <th class="p-3 text-left">
                            تاريخ الاستيراد
                        </th>
                        @admin
                        <th class="p-3 text-left">
                            الوصف
                        </th>
                        <th class="p-3 text-left">
                            ..
                        </th>
                        @endadmin
                    </tr>
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->type }} </td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->model }} </td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $car->category }} </td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->sale_price }} </td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $car->number }} </td>
                        @admin
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->chassis_number }} </td>
                        @endadmin
                        <td class="border-grey-light border hover:bg-gray-100 p-3">@if ($car->color == 1)
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
                            @endif</td>
                        @admin
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->import_price }}$</td>
                        @endadmin
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->import_place }}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->import_date }}</td>
                        @admin
                        <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $car->note }}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3">
                            <div class="  opacity-70">
                                <button wire:click="confirm({{ $car->id }})"><i
                                        class="fa-solid fa-trash text-gray-600  hover:text-red-700 "></i></button>
                                <a href="{{ route('edit-car', ['car_id' => $car->id]) }}">
                                    <i class="fa-solid fa-pen-to-square text-gray-600   hover:text-blue-700"></i>
                                </a>
                            </div>
                        </td>
                        @endadmin
                </tbody>
            </table>
        </div>
    </body>
</div>
<style scoped>
.overlay {
    background: rgba(0, 0, 0, 0);
    transition: background 0.5s ease;
}

.container:hover .overlay {
    display: block;
    background: rgba(0, 0, 0, .3);
}

.title {
    font-weight: 700;
    font-size: 30px;
    text-align: center;
    text-transform: uppercase;
    z-index: 1;
    transition: top .5s ease;
}

.container:hover .title {
    top: 90px;
}

.button {
    transition: opacity .35s ease;
}

.button a {
    z-index: 1;
}

.container:hover .button {
    opacity: 1;
}


@media (min-width: 640px) {
    table {
        display: inline-table !important;
    }

    thead tr:not(:first-child) {
        display: none;
    }
}

td:not(:last-child) {
    border-bottom: 0;
}

th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
}
</style>