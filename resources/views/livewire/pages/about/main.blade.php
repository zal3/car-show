<div>
    {{-- video --}}
    <div>
        <div class="absolute inset-0 flex items-center justify-center ">
            <video src="{{ asset('img/car.mp4') }}" muted autoplay loop
                class=" mx-auto w-full h-96 object-cover opacity-60"></video></video>
        </div>
        <div>
            <h1 class="flex justify-center  font-bold text-7xl mt-56  ">المعرض الدولي للسيارات </h1>
        </div>
    </div>

    {{-- brand --}}
    <div class="flex gap-12 justify-center items-center mt-52 mb-10">
                <img src="{{ asset('img/about/BMW.png') }}" alt="" >
                                <img src="{{ asset('img/about/Jeep.png') }}" alt="" >
                <img src="{{ asset('img/about/Audi.png') }}" alt="" >
                <img src="{{ asset('img/about/Kia-1.png') }}" alt="" >
                <img src="{{ asset('img/about/Hyundai.png') }}" alt="" >
                <img src="{{ asset('img/about/Ford.png') }}" alt="" >
                <img src="{{ asset('img/about/Jaguar.png') }}" alt="" >

    </div>




    {{-- /* serves */ --}}
    <div class="help-section bg-slate-900">
        <div class="inner-width">
            <h1 class="section-title">الخدمات</h1>
            <div class="border"></div>
            <div class="help-container">
                <div class="help-box">
                    <div class="help-icon text-5xl  ">
<iconify-icon icon="mdi:engine" class="mt-2 -rotate-45 "></iconify-icon>                    </div>
                    <div class="help-title">المحرك </div>
                    <div class="help-desc"> , يمكنك الحصول على احدث المحركات مع سيارتك بارخص الاسعار إن بنية محرك 6
                        سلندر يجعله مناسب للتكامل المستقبلي للدعم الكهربائي في سيارات هايبرد و سيارات بلج ان هايبرد
                    </div>
                </div>
                <div class="help-box">
                    <div class="help-icon text-5xl mt-4">
<iconify-icon icon="game-icons:car-wheel"  class="mt-2"></iconify-icon>                    </div>
                    <div class="help-title">الاطارات</div>
                    <div class="help-desc">إذا كانت رحلتك علي طرق جافة أو رطبة أو غير معبدة إطاراتنا ستساعدك علي المضي
                        قدما دون توقف. لتحصل على أفضل إطارات السيارات</div>
                </div>
                <div class="help-box">
                    <div class="help-icon">
                        {{-- //car fixing icon --}}
                        <i class="fa-solid fa-tools"></i>
                    </div>
                    <div class="help-title">اصلاح</div>
                    <div class="help-desc">قد يحتاج الفرد فقط إلى خدمات من شركة إصلاح السيارات مرة واحدة في السنة
                        ,لدينا
                        قسم إصلاح المحرك و التشخيص الإلكتروني
                    </div>
                </div>
                <div class="help-box">
                    <div class="help-icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="help-title">تاجير سيارة</div>
                    <div class="help-desc">سيارات للإيجار اليومي والشهري وتوصيل لكافة أنحاء العراق مشوارك معنا صار اسهل
                        (مصداقية - موثوقية - امان) <br><a class="text-blue-400">المزيد</a></div>
                </div>
                <div class="help-box">
                    <div class="help-icon">
                        <i class="fa-solid fa-car-battery"></i>
                    </div>
                    <div class="help-title">بطاريات </div>
                    <div class="help-desc">نقدم خدمة تبديل البطاريات في مكانك افضل انواع البطاريات
                        تسريع عمليات الشحن 200 مرة، مقارنةً بمعدلات شحن البطاريات الكلاسيكية الموجودة اليوم.
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- show --}}
    <div class="flex relative  justify-center items-center">
        <div class="grid grid-cols-2  basis-1/2 mx-28 ">
            <div class=" flex gap-5 font-bold  items-center h-16">
                <img src="{{ asset('img/about/1.png') }}" alt="" class="w-10 h-12 ">
                <div>خدمات موثوقة</div>
            </div>

            <div class=" flex gap-5 font-bold  items-center h-16">
                <img src="{{ asset('img/about/2.png') }}" alt="" class="w-10 h-12">
                <div>العمال الموهوبين</div>
            </div>
            <div class=" flex gap-5 font-bold    items-center h-16">
                <img src="{{ asset('img/about/3.png') }}" alt="" class="w-10 h-12">
                <div>دائما مفتوح لك</div>
            </div>
            <div class=" flex gap-5 font-bold    items-center h-16">
                <img src="{{ asset('img/about/4.png') }}" alt="" class="w-10 h-12">
                <div>فنيين خبراء</div>
            </div>
            <div class=" flex gap-5 font-bold    items-center h-16">
                <img src="{{ asset('img/about/5.png') }}" alt="" class="w-10 h-12">
                <div>أسعار لا تقبل المنافسة</div>
            </div>
            <div class=" flex gap-5 font-bold    items-center h-16">
                <img src="{{ asset('img/about/6.png') }}" alt="" class="w-10 h-12">
                <div>مؤهل مهنيا</div>
            </div>
            <div class=" flex gap-5 font-bold    items-center h-16">
                <img src="{{ asset('img/about/7.png') }}" alt="" class="w-10 h-12">
                <div>خدمة احترافية</div>
            </div>
            <div class=" flex gap-5 font-bold    items-center h-16">
                <img src="{{ asset('img/about/8.png') }}" alt="" class="w-10 h-12">
                <div>مراجعات إيجابية</div>
            </div>
        </div>
        <div class="basis-1/2 ml-16">
            <img src="{{ asset('img/car-shoow.jpg') }}" alt="hero" class="h-1/2 ">
        </div>
    </div>

    {{-- contact --}}
    <div class="bg-slate-900 p-12  ">
        <h1 class="flex  justify-center mb-8 text-5xl text-white  "> هل انت مهتم بخدماتنا ؟</h1>
        <button class="flex  justify-center m-auto bg-white rounded-full px-6 py-2  "> اتصل بنا </button>
    </div>
</div>
<style scoped>
    /* show */
    /* serves */
    .help-section {
        padding: 60px 0;
    }

    .inner-width {
        width: 100%;
        max-width: 1200px;
        margin: auto;
        padding: 0 20px;
        overflow: hidden;
    }

    .section-title {
        text-align: center;
        color: #ffffff;
        text-transform: uppercase;
        font-size: 30px;
    }

    .border {
        width: 160px;
        height: 2px;
        background: #82ccdd;
        margin: 10px auto;

    }

    .help-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .help-box {
        max-width: 33.33%;
        padding: 10px;
        text-align: center;
        color: #ddd;
        cursor: pointer;

    }

    .help-icon {
        display: inline-block;
        width: 70px;
        height: 70px;
        border: 3px solid #ffffff;
        transform: rotate(45deg);
        margin-bottom: 30px;
        margin-top: 16px;
        transition: 0.3s linear;
    }

    .help-icon svg {
        width: 50px;
        height: 40px;
        line-height: 40px;
        transform: rotate(-45deg);
        font-size: 26px;
        margin-right: .5rem;
        margin-top: .5rem;
        margin-bottom: .25rem;
    }

    .help-box:hover .help-icon {
        background: #ffffff;
        color: #000000;
    }

    .help-title {
        font-size: 18px;
        text-transform: uppercase;
        margin-bottom: 10px;
        color: #ffffff;

    }

    .help-desc {
        font-size: 14px;
        color: #ffffff;


    }

    @media screen and (max-width:960px) {
        .help-box {
            max-width: 45%;
        }

    }

    @media screen and (max-width:768px) {
        .help-box {
            max-width: 50%;
        }

    }

    @media screen and (max-width:400px) {
        .help-box {
            max-width: 100%;
        }

    }
</style>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
