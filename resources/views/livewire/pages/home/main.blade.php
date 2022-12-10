<div class="overflow-hidden ">
    <img src="{{ asset('img/car.png') }}" alt="hero" class="car">
    {{-- home --}}
    <div class="ho w-full relative grid items-center mx-4 px-4">
        <div class="text">
            <h1 class="font-bold " data-aos="fade-up" data-aos-delay="150"><span class="text-orange">معرض</span>
                البصرة<br> للسيارات</h1>
            <h5 class="px-5" data-aos="fade-up" data-aos-delay="300">للحصول على أفضل سيارة في المدينة
                <br> بأفضل سعر وجودة
            </h5>
            {{-- <div class="bttn flex  " data-aos="fade-up" data-aos-delay="400">
                <a href="{{ route('car') }}">
                    <button class="btn w-48   cursor-pointer bg-orange  text-white"> السيارات</button>
                </a>
                <a href="{{ route('rental') }}">
                    <button class="btn w-48   cursor-pointer bg-orange  text-white"> اجر سيارة </button>
                </a>
            </div> --}}
        </div>

    </div>
    {{-- about section  --}}
    <div class="about flex" id="about">
        <div class="video-container" data-aos="fade-left" data-aos-delay="300">
            <video src="{{ asset('img/car.mp4') }}" muted autoplay loop class="video"></video>
        </div>
        <div class="content2" data-aos="fade-right" data-aos-delay="600">
            <span class="aboutspan">لماذا نحن !!</span>
            <h3 class="about">البصرة ,شارع الوفود </h3>
            <p>
                معرضنا عام لنماذج السيارات الحالية، أو الظهور الأول، أو السيارات المبتكرة، <br>أو الكلاسيكيات خارج
                الإنتاج
                لتجارة السيارات الحديثة كل ما هو جديد في عالم السيارات , <br>اسعار تنافسية
            </p>
            <a href="{{ route('about') }}" class="pt-6 text-blue-900 font-bold">اعرف المزيد</a>
        </div>
    </div>
    {{-- last car --}}
    <div class="popular section " id="popular">
        <div class="flex justify-between items-center ">
            <h2 class=" text-5xl text-black font-bold px-4 mx-4">احدث السيارات</h2>
            <a href="{{ route('car') }}">
                <button class="text-blue  text-xl mt-4"> لرؤية المزيد </button>
            </a>
        </div>
        <div class="popular__container container swiper  "data-aos="fade-left">
            <div class="swiper-wrapper">
                @foreach ($cars as $car)
                    <div class="swiper-slide  ss">
                        <a href="{{ route('car-page', ['car_id' => $car->id]) }}">
                            <article class=" popular__card  px-6 py-6   overflow-hidden relative w-56 ">
                                
                                <!-- {{-- <img src="{{ asset('img/cars/popular1.png') }}" alt="" class="popular__img"> --}} -->
                                <img src="{{ asset($car->image_path ?? 'img/cars/car1.jpg') }}" alt=""
                                    class="popular__img">
                                    <div class="shape shape__smaller">dd</div>
                                <h1 class="popular__title text-orange  ">{{ $car->type }}</h1>
                                <h3 class="popular__subtitle">$ {{ $car->sale_price }} </h3>
                                <div class=" text-black left-2 bottom-2 absolute"> </div>

                                <!-- {{-- <div class="popular___data text-black text-md grid grid-cols-2  mb-6">
                                <div class="popular___data-group ">
                                    <i class="fa-solid fa-gauge-high"></i> {{ $car->model }}
                                </div>
                                <div class="popular___data-group ">
                                    <i class="fa-solid fa-bolt"></i> {{ $car->color }}
                                </div>

                            </div> --}} -->
                                <div class="grid grid-cols-2 justify-between">
                                    <button class="button popular__button bg-orange ">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </button>
                                </div>
                            </article>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    {{-- car rate  --}}
    <div class=" rate">
        <h1 class="text-3xl text-black font-bold px-4 mx-4 flex justify-center">أجر سيارة بثلاث خطوات سهلة </h1>
        <div class="flex  justify-center gap-6 m-auto">
            <div class="block p-6 max-w-4xl text-center ">
                <i class="fa-solid fa-location-dot text-4xl text-orange my-4  "></i>
                <h1 class=" text-2xl text-black my-4  ">أختر الموقع </h1>
            </div>
            <div class="flex justify-center items-center text-4xl ">
                <i class="fa-solid fa-arrow-left flex justify-center items-center"></i>
            </div>
            <div class="block p-6 max-w-4xl text-center ">
                <i class="fa-solid fa-calendar-check text-4xl my-4 text-orange "></i>
                <h1 class="text-2xl text-black my-4"> حدد موعد</h1>
            </div>
            <div class="flex justify-center items-center text-4xl ">
                <i class="fa-solid fa-arrow-left "></i>
            </div>
            <div class="block p-6 max-w-4xl text-center ">
                <i class="fa-solid fa-car-side text-4xl my-4 text-orange "></i>
                <h1 class="text-2xl text-black my-4">أجر سيارة </h1>
            </div>
        </div>
        {{-- form-container --}}

        <a href="{{ route('rental') }}" class=" flex justify-center bg-blue  items-center ">
            <button type="submit" id="" class="btnn"> تأجير</button>
        </a>
    </div>

</div>

<style scoped>
    .gg {
        gap: 1rem;
    }





    .banner .content span {
        font-size: 1.5rem;
        color: #29d9d5;
    }

    .banner .content h3 {
        font-size: 3rem;
        color: #fff;
        margin-top: 1rem;
    }

    .banner .content p {
        max-width: 60rem;
        margin: 1rem auto;
        font-size: 1.2rem;
        color: #aaa;
        line-height: 2;
    }

    .continuer {
        padding: 0 5rem;
        margin: 0 auto;
    }

    .ho {
        min-height: 100vh;
    }

    .car {
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        background-inverse: right;
        position: absolute;
        -webkit-transform: scaleX(-1);
        display: grid;
        top: 0;
        display: absolute;
    }

    /* .text {
        margin-bottom: 8rem;
    } */

    .text h1 {
        font-size: 3.5rem;
        letter-spacing: 2px;
    }

    .bttn {
        gap: 1rem;
        margin-top: 30px;
        margin-right: 30px;
    }

    .bttn .btn {
        margin-right: 1rem;
        padding: 15px 20px 15px 20px;
    }

    .bttn .btn:hover {
        border-color: #eb3616;
        background-color: #df3a1d;
        box-shadow: 0 4px 50px #d3543e;
    }

    /* form-container
    .form-container form {
        gap: 1rem;
        bottom: 8rem;
        left: 400px;
        
        padding: 20px;
        border-radius: 0.5rem;
    }

    .input-box {
        flex: 1 1 7rem;
        flex-direction: column;
        display: flex;
    }

    .input-box span {
        font-weight: 500;
    }

    .input-box input {
        padding: 7px;
        outline: none;
        background: #eeeff1;
        border-radius: 0.5rem;
        outline: none;
        font-size: 1rem;
    } */

    .btnn {
        padding: 10px 36px;
        margin-top: 1rem;
        border: none;
        border-radius: 0.5rem;
        background: #474fa0;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
    }

    .btnn:hover {
        background: #ED563B;
    }

    /* about */
    .about {
        margin: 10rem 5rem 5rem 5rem;
    }

    .about .video-container {
        flex: 1 1 30rem;
    }

    .about .video-container video {
        border-radius: 1rem;
        width: 90%;
        margin-left: 2rem;
    }

    .about .content2 {
        flex: 1 1 30rem;
    }

    .about .content2 span {
        color: #ED563B;
        font-weight: bolder;
        font-size: 3vw;
    }

    .about .content2 h3 {
        color: #000000;
        font-size: 2rem;
        margin: .5rem 0 .5rem 0;
    }

    .about .content2 p {
        font-size: 1rem;
        color: rgb(124, 124, 124);
    }

    /* popular */
    .popular__container {
        padding: 2rem;
    }

    .popular__card {
        border-radius: 1rem;
        padding:  0 ;
        margin-bottom: 0;
    }

    .popular__card .shape__smaller {
        position: absolute;
        left: -2.5rem;
    }

    .popular__title,
    .popular__subtitle,
    .popular__img {
        position: relative;
        
    }

    .popular {
        margin: 3rem 4rem;
    }

    .popular__title {
        font-size: 1.5rem;
        margin: .25rem 5rem .2rem 0;
    }

    .popular__subtitle {
        font-size: var(--normal-font-size);
        color: #b8b6b6;
        font-weight: 400;
        margin: .25rem 5rem .2rem 0;
    }

    .popular__img {
        width: 250px;
        height: 160px;
        margin: 0 0 0 0;
        transition: .3s;
    }

    .popular__button {
        border: none;
        outline: none;
        position: absolute;
        bottom: 0;
        right: 0;
        padding: .75rem 1rem;
        border-radius: 1rem 0 1rem 0;
        cursor: pointer;
    }

    .popular__card:hover .popular__img {
        transform: translateY(-.25rem);
    }

    .ss {
        margin: 1rem 4rem 0 0;
    }

    /* car rate */
    .rate {
        margin: 6rem 2rem 2rem;

    }

    .hov:hover {
        transition: .3s;
        transform: translateY(-.5rem);
    }
</style>
