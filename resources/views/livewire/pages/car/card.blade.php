<div>
    <article class="hov bg-gray mr-5 pb-2  w-60  bg-gray-200 relative ">
        @if($car->state == 1)
        <a href="{{ route('rental')}}" class="absolute pr-4 z-1 w-16 bg-red-500 p-2  rounded-b-full rounded-l-full ">تاجير</a>
        @endif
        <img src="{{ asset($car->image_path ?? 'img/cars/car1.jpg') }}"
            class="   w-60 h-36    ">
        <!-- {{-- <img src="{{ asset('img/cars/car1.jpg') }}" class=""> --}} -->
        <div class="p-4">
            <h3 class="flex justify-center mb-4 font-bold text-xl">{{ $car->type }}</h3>
            <div class=" flex justify-between">
                <div>
                    <div class="flex justify-between gap-2 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 640 512">
                            <path
                                d="M640 320V368C640 385.7 625.7 400 608 400H574.7C567.1 445.4 527.6 480 480 480C432.4 480 392.9 445.4 385.3 400H254.7C247.1 445.4 207.6 480 160 480C112.4 480 72.94 445.4 65.33 400H32C14.33 400 0 385.7 0 368V256C0 228.9 16.81 205.8 40.56 196.4L82.2 92.35C96.78 55.9 132.1 32 171.3 32H353.2C382.4 32 409.1 45.26 428.2 68.03L528.2 193C591.2 200.1 640 254.8 640 319.1V320zM171.3 96C158.2 96 146.5 103.1 141.6 116.1L111.3 192H224V96H171.3zM272 192H445.4L378.2 108C372.2 100.4 362.1 96 353.2 96H272V192zM525.3 400C527 394.1 528 389.6 528 384C528 357.5 506.5 336 480 336C453.5 336 432 357.5 432 384C432 389.6 432.1 394.1 434.7 400C441.3 418.6 459.1 432 480 432C500.9 432 518.7 418.6 525.3 400zM205.3 400C207 394.1 208 389.6 208 384C208 357.5 186.5 336 160 336C133.5 336 112 357.5 112 384C112 389.6 112.1 394.1 114.7 400C121.3 418.6 139.1 432 160 432C180.9 432 198.7 418.6 205.3 400z" />
                        </svg>
                        {{ $car->category }}
                    </div>
                    <div class="flex justify-between gap-2 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path
                                d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z" />
                        </svg>
                        {{ $car->model }}
                    </div>
                    <div class="flex justify-between gap-2 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                            <title>ionicons-v5-m</title>
                            <path
                                d="M419.1,337.45a3.94,3.94,0,0,0-6.1,0c-10.5,12.4-45,46.55-45,77.66,0,27,21.5,48.89,48,48.89h0c26.5,0,48-22,48-48.89C464,384,429.7,349.85,419.1,337.45Z"
                                style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px" />
                            <path
                                d="M387,287.9,155.61,58.36a36,36,0,0,0-51,0l-5.15,5.15a36,36,0,0,0,0,51l52.89,52.89,57-57L56.33,263.2a28,28,0,0,0,.3,40l131.2,126a28.05,28.05,0,0,0,38.9-.1c37.8-36.6,118.3-114.5,126.7-122.9,5.8-5.8,18.2-7.1,28.7-7.1h.3A6.53,6.53,0,0,0,387,287.9Z"
                                style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:32px" />
                        </svg>
                        <div
                            class=" @if ($car->color == 1) text-red-500 @endif @if ($car->color == 2) text-white @endif @if ($car->color == 3) text-black @endif @if ($car->color == 4) text-yellow-500 @endif @if ($car->color == 5) text-green-500 @endif @if ($car->color == 6) text-blue-500 @endif @if ($car->color == 7) @endif ">

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
                <div>
                    <div class="flex
                            justify-between gap-2 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 384 512">
                            <path
                                d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                        </svg>
                        {{ $car->import_place }}
                    </div>
                    <div class="flex justify-between gap-2 items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                            <title>ionicons-v5-p</title>
                            <path
                                d="M304,32,16,320,192,496,480,208V32Zm80,128a32,32,0,1,1,32-32A32,32,0,0,1,384,160Z" />
                        </svg> {{ $car->sale_price }}$
                    </div>
                </div>


            </div>
        </div>
        <div class="box ">
            <a href="{{ route('car-page', ['car_id' => $car->id]) }}"
                class=" flex justify-between  p-3 bg-black text-white car  ">

                <div class="font-bold">عرض السيارة </div>
            </a>
        </div>
    </article>
</div>
<style scoped>
    .hov:hover {
        animation: pulse 5s linear infinite;
    }

    @import url(" https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap");

    .box {
        width: 440px;
        height: 50px;
        position: relative;
        display: flex;
        margin-right: 0.8rem;
        place-items: center;
        overflow: hidden;
    }

    .car {
        position: absolute;
        width: 190px;
        height:
            90%;
        background: #ffffff;
        z-index: 5;
        display: flex;
        justify-content: center;
        align-items:
            center;
        flex-direction: column;
        text-align: center;
        color: #1f1818;
        overflow: hidden;
        padding: 20px;
        cursor: pointer;
    }

    .car:hover {
        background-color: #000000;
        color: #ffffff;
    }

    .box::before {
        content: "";
        position: absolute;
        width: 40%;
        height: 150%;
        background:
            #40E0D0;
        background: -webkit-linear-gradient(to right, #ff7300, #463117, #bfe6e2);
        background: linear-gradient(to right, #ddd7ce, #e97426, #020a09);
        animation: glowing01 5s linear infinite;
        transform-origin: center;
        animation: glowing 5s linear infinite;
    }

    .hov:hover {
        transform: scale(1.1);
        transition: all 1s;
        /* shadow: rgba(0, 0, 0, 0.4) 0px
                            30px 60px -12px inset, rgba(0, 0, 0, 0.5) 0px 18px 36px -18px inset; */
    }

    @keyframes glowing {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
