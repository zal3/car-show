<div>
    <div>
        <img src="{{ asset('img/car.png') }}" alt="hero" class="car">
        <section class="home" id=home>
            <div class="text">
                <h1><span>المعرض</span> الدولي<br> للسيارات</h1>
                <h5>للحصول على أفضل سيارة في المدينة
                    <br> بأفضل سعر وجودة

                </h5>
                <div class="app-stores">
                    <button class="btn"> ابدا رحلتك </button>
                    <button class="btn"> السيارات </button>
                </div>
            </div>
            {{-- form-container --}}
            <div class="form-container">
                <form action="">
                    <div class="input-box">
                        <span>الموقع</span>
                        <input type="search" name="" id="" placeholder="ابحث عن مدينة">
                    </div>
                    <div class="input-box">
                        <span>اختر الوقت</span>
                        <input type="date" name="" id="" >
                    </div>
                    <div class="input-box">
                        <span> وقت الاعادة</span>
                        <input type="date" name="" id="" >
                    </div>
                    <input type="submit" name="" id="" class="btn">
                </form>
            </div>
        </section>
    </div>
</div>
<style scoped>
    .home {
        width: 100%;
        top: 80px;
        min-height: 115vh;
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
        -webkit-transform:scaleX(-1);
        display: grid;
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
        padding: 15px 20px 15px 20px  ;
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
        flex : 1 1 7rem;
        padding: 10px 36px;
        margin-top: 1rem;
        border: none;
        border-radius: 0.5rem;
        background: #474fa0;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;

    }
    .form-container form .btn:hover{
        background: #ED563B;
    }
</style>
