<div>
    <img src="{{ asset('img/car.png') }}" alt="hero" class="car">
    <div class="ho w-full relative grid items-center mx-4 px-4">
        <div class="text">
            <h1 class="font-bold " data-aos="fade-up" data-aos-delay="150"><span class="text-orange">المعرض</span>
                الدولي<br> للسيارات</h1>
            <h5 class="px-5" data-aos="fade-up" data-aos-delay="300">للحصول على أفضل سيارة في المدينة
                <br> بأفضل سعر وجودة
            </h5>
            <div class="bttn flex  " data-aos="fade-up" data-aos-delay="400">
                <button class="btn w-48   cursor-pointer bg-orange  text-white"> ابدا رحلتك </button>
                <button class="btn w-48   cursor-pointer bg-orange  text-white"> السيارات </button>
            </div>
        </div>
        {{-- form-container --}}
        <div class="form-container ">
            <form class=" flex flex-wrap items-center absolute bg-white" action="" data-aos="fade-up"
                data-aos-delay="200">
                <div class="input-box">
                    <span>الموقع</span>
                    <input type="search" name="" id="" placeholder="ابحث عن مدينة">
                </div>
                <div class="input-box">
                    <span>اختر الوقت</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span> وقت الاعادة</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form>
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
            <a href="#" class="pt-6 text-blue-900">اعرف المزيد</a>
        </div>
    </div>
    {{-- last car --}}
    <div class="popular section " id="popular">
        <h2 class=" text-5xl text-black font-bold px-4 mx-4">احدث السيارات</h2>
        <div class="popular__container container swiper ">
            <div class="swiper-wrapper grid grid-cols-4">
                @for ($i = 0; $i < 4; $i++)
                        <article class="swiper-slide popular__card  px-6 py-6 mb-4  overflow-hidden relative w-64 bg-gray-800">
                            <div class="shape shape__smaller"></div>
                            <h1 class="popular__title text-orange ">بورش </h1>
                            <h3 class="popular__subtitle">توربو </h3>
                            <img src="{{ asset('img/cars/popular2.png') }}" alt="" class="popular__img">
                            <div class="popular___data text-white text-md grid grid-cols-2  mb-6">
                                <div class="popular___data-group ">
                                    <i class="fa-solid fa-gauge-high"></i> 3.7 Sec
                                </div>
                                <div class="popular___data-group ">
                                    <i class="fa-solid fa-bolt"></i> 356 Km/h
                                </div>
                                <div class="popular___data-group">
                                    <i class="fa-solid fa-charging-station"></i> Electric
                                </div>
                            </div>
                            <div class="grid grid-cols-2 justify-between">
                                <div class=" text-white left-2 bottom-2 absolute"> $ 1,000,000</div>
                                <button class="button popular__button bg-orange ">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                            </div>
                        </article>
                @endfor
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
        </div>
    </div>

</div>
<style scoped>
    .ho {
        min-height: 130vh;
    }

    .car {
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        background-inverse: right;
        position: absolute;
        -webkit-transform: scaleX(-1);
        display: grid;
    }

    .text {
        margin-top: 90px;
    }

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

    /* form-container */
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
    }

    .form-container form .btn {
        flex: 1 1 7rem;
        padding: 10px 36px;
        margin-top: 1rem;
        border: none;
        border-radius: 0.5rem;
        background: #474fa0;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
    }

    .form-container form .btn:hover {
        background: #ED563B;
    }

    /* about */
    .about {
        margin: 5rem;
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
        padding-top: 1rem;
    }

    .shape__smaller {
        width: 180px;
        height: 180px;
        filter: blur(64px);
    }

    .popular__card {
        border-radius: 1rem;
    }

    .popular__card .shape__smaller {
        position: absolute;
        top: -2.5rem;
        left: -2.5rem;
    }

    .popular__title,
    .popular__subtitle,
    .popular__img {
        position: relative;
    }

    .popular__title {
        font-size: 1.5rem;
        margin-bottom: .25rem;
    }

    .popular__subtitle {
        font-size: var(--normal-font-size);
        color: #b8b6b6;
        font-weight: 400;
    }

    .popular__img {
        width: 160px;
        margin: .75rem 0 1.25rem 1.5rem;
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
</style>
