<div>
    <div class=" rate">
        <h2 class="text-xl text-black  mx-0 my-4 flex justify-center">طريقة التأجير</h2>
        <h1 class="text-3xl text-black font-bold px-4 mx-4 flex justify-center">أجر سيارة بثلاث خطوات سهلة </h1>
        <div class="flex  justify-center gap-6 m-auto">
            <div class="block p-6 max-w-4xl text-center ">
                <i class="fa-solid fa-location-dot text-4xl text-orange my-4  "></i>
                <h1 class=" text-2xl text-black my-4  ">أختر الموقع </h1>
            </div>
            <div class="flex justify-center items-center text-4xl">
                <i class="fa-solid fa-arrow-left flex justify-center items-center"></i>
            </div>
            <div class="block p-6 max-w-4xl text-center ">
                <i class="fa-solid fa-calendar-check text-4xl my-4 text-orange "></i>
                <h1 class="text-2xl text-black my-4"> حدد موعد</h1>
            </div>
            <div class="flex justify-center items-center text-4xl">
                <i class="fa-solid fa-arrow-left "></i>
            </div>
            <div class="block p-6 max-w-4xl text-center ">
                <i class="fa-solid fa-car-side text-4xl my-4 text-orange "></i>
                <h1 class="text-2xl text-black my-4">أجر سيارة </h1>
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
                <span>اختر الوقت</span>
                <input type="date" name="" id="">
            </div>
            <div class="input-box">
                <span> وقت الاعادة</span>
                <input type="date" name="" id="">
            </div>
            <button type="submit" id="" class="btn w-full"> تأجير</button>
        </form>
    </div>
</div>




<style scoped>
    /* car rate */
    .rate {
        margin: 6rem 2rem 2rem;
    }

    /* form-container */
    .form-container form {
        gap: 2rem;
        bottom: 1rem;
        left: 400px;
        border-radius: 0.9rem;
        margin-bottom: 2rem;
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
