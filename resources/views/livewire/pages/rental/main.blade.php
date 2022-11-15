<div>
    <div class="p-9">
        <h2 class="text-xl text-black   flex justify-center mb-3">طريقة التأجير</h2>
        <h1 class="text-3xl text-black font-bold px-4  flex justify-center">أجر سيارة بثلاث خطوات سهلة </h1>
        <div class="flex  justify-between gap-4 items-center">
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-location-dot text-6xl text-orange my-4  "></i>
                <h1 class=" text-3xl text-black my-4 ">أختر الموقع </h1>
                <h1>
                    اختر موقع رحلتك لحجز السيارة التي
                    <br> تود تجربتها في رحلتك مع
                    الانتباه في اختيار الموقع بشكل مضبوط لكي
                    تتابع معنا تكمله حجز سيارتك
                </h1>
            </div>
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-calendar-check text-6xl my-4 text-orange "></i>
                <h1 class="text-3xl text-black my-4"> أختر الموعد</h1>
                <h1>
                    حدد وقت حجز السيارة مع وقت انتهاء التأجير والاهتمام بوقت استلام وتسليم السيارة في الوقت الذي تم
                    تحديده
                </h1>
            </div>
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-car-side text-6xl my-4 text-orange "></i>
                <h1 class="text-3xl text-black my-4">أجر سيارة </h1>
                <h1>
                    اختر السيارة التي ترغب في تأجيرها لطفاً نرجو الاهتمام
                    بنظافه السيارة ونتمنى لكم وقت ممتع</h1>
            </div>
        </div>
    </div>
{{-- form-container --}}
    <div class="form-container flex m-auto justify-center items-center  ">
        <form class=" flex flex-wrap w-1/2  bg-white">
            <div class="input-box">
                <span>الموقع</span>
                <input type="search" name="" id="" placeholder="ابحث عن مدينة">
            </div>
            <div class="input-box">
                <span>وقت التأجير</span>
                <input type="date" name="" id="">
            </div>
            <div class="input-box">
                <span> وقت الاعادة</span>
                <input type="date" name="" id="">
            </div>
            <div class="input-box">
                <span>رقم الهاتف</span>
                <input type="search" name="" id="" placeholder="أكتب الرقم ">
            </div>
            <div class="input-box">
                <span>رخصة القيادة</span>
                <input type="search" name="" id="" placeholder=" أضف صورة الرخصة">
            </div>
            <div class="lable">
                <label for="city">لون السيارة</label>
                                    <select id="countries"
                                        class=" bg-gray border border-black-200 text-gray-900 text-sm rounded-lg focus:ring-blue-700 focus:border-blue-700 block pl-14   w-full mt-2  ">
                                        <option selected> أختر نوع السياره</option>
                                        <option value="US">سايبه</option>
                                        <option value="CA">سنتافي</option>
                                        <option value="FR">تاكسي</option>
                                        <option value="DE">سايبه</option>
                                        
                                    </select>
            </div>
           
            <button type="submit" id="" class="btn w-full"> تأجير</button>
        </form>
    </div>
</div>
<style scoped>
    /* car rate */
    .rate {
        margin: 4rem 4rem;
        
    }


    /* form-container */
    .form-container form {
        gap: 2rem;
        bottom: 1rem;
        left: 400px;
        border-radius: 0.9rem;
        margin-bottom: 2rem;
        margin-top: 40px;
    }

    .input-box {
        flex: 1 1 7rem;
        flex-direction: column;
        display: flex;
        gap: .5rem;
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

    .btn {
        padding: 10px 36px;
        margin-top: 1rem;
        border: none;
        border-radius: 0.5rem;
        background: #474fa0;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;

    }

    .btn:hover {
        background: #ED563B;
    }
</style>
