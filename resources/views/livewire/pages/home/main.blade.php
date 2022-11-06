<div class="home" id="home">
    <img src="{{ asset('img/car.png') }}" alt="hero" class="car">hhhhh
    <div class="ho" id="ho">
        <div class="text">
            <h1 data-aos="fade-up" data-aos-delay="150"><span>المعرض</span> الدولي<br> للسيارات</h1>
            <h5 data-aos="fade-up" data-aos-delay="300">للحصول على أفضل سيارة في المدينة
                <br> بأفضل سعر وجودة
            </h5>
            <div class="app-stores" data-aos="fade-up" data-aos-delay="400">
                <button class="btn"> ابدا رحلتك </button>
                <button class="btn"> السيارات </button>
            </div>
        </div>
        {{-- form-container --}}
        <div class="form-container">
            <form action="" data-aos="fade-up" data-aos-delay="200">
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
    <!-- about section -->
    <div class="about" id="about">
        <div class="video-container" data-aos="fade-left" data-aos-delay="300">
            <video src="{{ asset('img/car.mp4') }}" muted autoplay loop class="video"></video>
        </div>
        <div class="content2" data-aos="fade-right" data-aos-delay="600">
            <span class="aboutspan">لماذا نحن !!</span>
            <h3 class="about">البصرة ,شارع الوفود </h3>
            <p>
                معرضنا عام لنماذج السيارات الحالية، أو الظهور الأول، أو السيارات المبتكرة، <br>أو الكلاسيكيات خارج
                الإنتاج
                لتجارة السيارات الحديثة كل ما هو جديد في عالم السيارات ,   <br>اسعار تنافسية
            </p>
            <a href="#" class="pt-6 text-blue-900">اعرف المزيد</a>
        </div>
    </div>
</div>
<style scoped>
    .home{
        width: 100%;

        overflow: hidden;
    }
    .ho {
        width: 100%;
        /* top: 80px; */
        min-height: 130vh;
        position: relative;
        display: grid;
        align-items: center;
        margin-right: 30px;

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
        font-weight: 700;
    }

    .text span {
        color: #ED563B
    }

    .text p {
        margin: 0 0.5rem 0 1rem;
    }

    .app-stores {
        display: flex;
        gap: 1rem;
        margin-top: 30px;
        margin-right: 30px;
    }

    .app-stores .btn {
        width: 10%;
        margin-right: 1rem;
        corsor: pointer;
        background: #ED563B;
        padding: 15px 20px 15px 20px;
        color: rgb(255, 255, 255);
    }

    .app-stores .btn:hover {
        border-color: #eb3616;
        background-color: #df3a1d;
        box-shadow: 0 4px 50px #d3543e;
    }

    /* form-container */
    .form-container form {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 1rem;
        position: absolute;
        bottom: 8rem;
        left: 400px;
        background: #fff;
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
        display: flex;
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
        /* font-weight: bolder; */
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
</style>
