<div>
    {{-- video --}}
    <div>
        <div class="absolute inset-0 flex items-center justify-center ">
            <video src="{{ asset('img/car.mp4') }}" muted autoplay loop
                class=" mx-auto w-full h-96 object-cover opacity-60"></video></video>
        </div>
        <div>
            <h1 class="aa flex justify-center  font-bold text-7xl mt-56  ">معرض البصرة للسيارات </h1>
        </div>
    </div>

    {{-- brand --}}
    <div class="flex gap-12 justify-center items-center mt-60 mb-8">
        <img src="{{ asset('img/about/BMW.png') }}" alt="">
        <img src="{{ asset('img/about/Jeep.png') }}" alt="">
        <img src="{{ asset('img/about/Audi.png') }}" alt="">
        <img src="{{ asset('img/about/Kia-1.png') }}" alt="">
        <img src="{{ asset('img/about/Hyundai.png') }}" alt="">
        <img src="{{ asset('img/about/Ford.png') }}" alt="">
        <img src="{{ asset('img/about/Jaguar.png') }}" alt="">

    </div>

    {{-- /* serves */ --}}
    <div class="p-16 bg-slate-900">
        <div class=" m-auto px-12 overflow-hidden ">
            <h1 class="text-center p-4 text-white mb-4 mx-auto flex justify-center text-3xl w-fit  border-b-2  ">الخدمات
            </h1>
            {{-- <div class="help-container">
                <div class="help-box">
                    <div class="help-icon text-5xl  ">
                        <iconify-icon icon="mdi:engine" class="mt-2 -rotate-45 "></iconify-icon>
                    </div>
                    <div class="help-title">المحرك </div>
                    <div class="help-desc">
                        , يمكنك الحصول على احدث المحركات مع سيارتك بارخص الاسعار إن بنية محرك 6
                        سلندر يجعله مناسب للتكامل المستقبلي للدعم الكهربائي في سيارات هايبرد و سيارات بلج ان هايبرد
                    </div>
                </div>
                <div class="help-box">
                    <div class="help-icon text-5xl mt-4">
                        <iconify-icon icon="game-icons:car-wheel" class="mt-2"></iconify-icon>
                    </div>
                    <div class="help-title">الاطارات</div>
                    <div class="help-desc">
                        إذا كانت رحلتك علي طرق جافة أو رطبة أو غير معبدة إطاراتنا ستساعدك علي المضي
                        قدما دون توقف. لتحصل على أفضل إطارات السيارات
                    </div>
                </div>
                <div class="help-box">
                    <div class="help-icon">
                        <i class="fa-solid fa-tools"></i>
                    </div>
                    <div class="help-title">اصلاح</div>
                    <div class="help-desc">
                        قد يحتاج الفرد فقط إلى خدمات من شركة إصلاح السيارات مرة واحدة في السنة
                        ,لدينا
                        قسم إصلاح المحرك و التشخيص الإلكتروني
                    </div>
                </div>
                <div class="help-box">
                    <div class="help-icon">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <div class="help-title">تاجير سيارة</div>
                    <div class="help-desc">
                        سيارات للإيجار اليومي والشهري وتوصيل لكافة أنحاء العراق مشوارك معنا صار اسهل
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
            </div> --}}
        </div>
    </div>
    {{-- /* serves */ --}}
    <main class="main">

        <section class="card-area">

            <!-- Card: City -->
            <section class="card-section ">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--city">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-engine"
                                        width="48" height="48" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M3 10v6" />
                                        <path d="M12 5v3" />
                                        <path d="M10 5h4" />
                                        <path d="M5 13h-2" />
                                        <path
                                            d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z" />
                                    </svg>

                                    <h2 class="card-front__heading">
                                        المحرك
                                    </h2>

                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--city">
                                        عرض
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="{{ asset('img/about/engin.webp') }}" alt="engines" class="h-full">
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">

                            <p class="inside-page__text mt-8">

                                , يمكنك الحصول على احدث المحركات مع سيارتك بارخص الاسعار إن بنية محرك 6
                                سلندر يجعله مناسب للتكامل المستقبلي للدعم الكهربائي في سيارات هايبرد و سيارات بلج ان
                                هايبرد
                            </p>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Ski -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--ski">
                                    <svg width="48" height="48" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.877075 7.49985C0.877075 3.84216 3.84222 0.877014 7.49991 0.877014C11.1576 0.877014 14.1227 3.84216 14.1227 7.49985C14.1227 11.1575 11.1576 14.1227 7.49991 14.1227C3.84222 14.1227 0.877075 11.1575 0.877075 7.49985ZM3.78135 3.21565C4.68298 2.43239 5.83429 1.92904 7.09998 1.84089V6.53429L3.78135 3.21565ZM3.21567 3.78134C2.43242 4.68298 1.92909 5.83428 1.84095 7.09997H6.5343L3.21567 3.78134ZM6.5343 7.89997H1.84097C1.92916 9.16562 2.43253 10.3169 3.21579 11.2185L6.5343 7.89997ZM3.78149 11.7842C4.6831 12.5673 5.83435 13.0707 7.09998 13.1588V8.46566L3.78149 11.7842ZM7.89998 8.46566V13.1588C9.16559 13.0706 10.3168 12.5673 11.2184 11.7841L7.89998 8.46566ZM11.7841 11.2184C12.5673 10.3168 13.0707 9.16558 13.1588 7.89997H8.46567L11.7841 11.2184ZM8.46567 7.09997H13.1589C13.0707 5.83432 12.5674 4.68305 11.7842 3.78143L8.46567 7.09997ZM11.2185 3.21573C10.3169 2.43246 9.16565 1.92909 7.89998 1.8409V6.53429L11.2185 3.21573Z"
                                            fill="currentColor" />
                                    </svg>
                                    <h2 class="card-front__heading">
                                        الاطارات
                                    </h2>

                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--ski">
                                        عرض
                                    </p>
                                </div>
                            </div>

                            <div class="card-back">
                                <img src="{{ asset('img/about/tire.jpg') }}" alt="engines" class="h-full">
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <p class="inside-page__text mt-8">
                                إذا كانت رحلتك علي طرق جافة أو رطبة أو غير معبدة إطاراتنا ستساعدك علي المضي
                                قدما دون توقف. لتحصل على أفضل إطارات السيارات
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Beach -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--beach">
                                    <svg style="color: white" width="48" height="48"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M14.47986,18.70978a3.99559,3.99559,0,0,1-5.163-5.27155L11.93561,16.057l2.12127-2.12134L11.43823,11.317a3.98842,3.98842,0,0,1,5.19989,5.30847l1.9328,1.9328A7.95941,7.95941,0,0,0,20,14,17.11481,17.11481,0,0,0,13.5.67a21.49375,21.49375,0,0,1,.74,4.8A3.47026,3.47026,0,0,1,10.83,9.2,3.63978,3.63978,0,0,1,7.2,5.47l.03-.36A13.76839,13.76839,0,0,0,4,14a7.99909,7.99909,0,0,0,12.43042,6.6604Z"
                                            fill="white"></path>
                                    </svg>
                                    <h2 class="card-front__heading">
                                        اصلاح
                                    </h2>

                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--beach">
                                        عرض
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="{{ asset('img/about/fix.jpg') }}" alt="engines" class="h-full">
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">

                            <p class="inside-page__text mt-8">

                                قد يحتاج الفرد فقط إلى خدمات من شركة إصلاح السيارات مرة واحدة في السنة
                                ,لدينا
                                قسم إصلاح المحرك و التشخيص الإلكتروني
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Camping -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--camping">
                                    <svg style="color: white" xmlns="http://www.w3.org/2000/svg" id="car-rental"
                                        width="48" height="48" viewBox="0 0 15 15">
                                        <path
                                            d="M12.6,8.7,11.5,6.5a1.05,1.05,0,0,0-.9-.5H4.4a1.05,1.05,0,0,0-.9.5L2.4,8.7,1.16,9.852a.5.5,0,0,0-.16.367V14.5a.5.5,0,0,0,.5.5h2c.2,0,.5-.2.5-.4V14h7v.5c0,.2.2.5.4.5h2.1a.5.5,0,0,0,.5-.5V10.219a.5.5,0,0,0-.16-.367ZM4.5,7h6l1,2h-8ZM5,11.6c0,.2-.3.4-.5.4H2.4c-.2,0-.4-.3-.4-.5V10.4c.1-.3.3-.5.6-.4l2,.4c.2,0,.4.3.4.5Zm8-.1c0,.2-.2.5-.4.5H10.5c-.2,0-.5-.2-.5-.4v-.7c0-.2.2-.5.4-.5l2-.4c.3-.1.5.1.6.4ZM13.5,0H11a1,1,0,0,0-1,1H2L1,2V3L2,4,3.5,2.5,5,4,6.5,2.5,8,4h2a1,1,0,0,0,1,1h2.5a.5.5,0,0,0,.5-.5V.5A.5.5,0,0,0,13.5,0ZM13,3.5a.5.5,0,0,1-1,0v-2a.5.5,0,0,1,1,0Z"
                                            fill="white"></path>
                                    </svg>
                                    <h2 class="card-front__heading">
                                        تاجير سيارة
                                    </h2>

                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--camping">
                                        عرض
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <img src="{{ asset('img/about/reet.webp') }}" alt="engines" class="h-full">

                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">

                            <p class="inside-page__text mt-8">

                                سيارات للإيجار اليومي والشهري وتوصيل لكافة أنحاء العراق مشوارك معنا صار اسهل
                                (مصداقية - موثوقية - امان) <br><a class="text-blue-400">المزيد</a> </p>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>

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
        <a href="{{ route('contact') }}">
            <button class="flex  font-bold justify-center m-auto bg-white rounded-full px-6 py-2  "> اتصل بنا </button>
        </a>
    </div>

</div>

<style scoped>
    .aa{
        animation: pulse 5s infinite;
    }
    
@keyframes pulse {
  0% {
    color: #001F3F;
  }
  100% {
    color: #FF4136;
  }
}
    /* serves */
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

    /* ////////////////////////////////////////// */

    /* Typography =======================*/

    /* Headings */

    /* Main heading for card's front cover */
    .card-front__heading {
        font-size: 1.5rem;
        margin-top: .25rem;
    }

    /* Main heading for inside page */
    .inside-page__heading {
        padding-bottom: 1rem;
        width: 100%;
    }

    /* Mixed */

    /* For both inside page's main heading and 'view me' text on card front cover */
    .inside-page__heading,
    .card-front__text-view {
        font-size: 1.3rem;
        font-weight: 800;
        margin-top: .2rem;
    }

    .inside-page__heading--city,
    .card-front__text-view--city {
        color: #ff62b2;
    }

    .inside-page__heading--ski,
    .card-front__text-view--ski {
        color: #2aaac1;
    }

    .inside-page__heading--beach,
    .card-front__text-view--beach {
        color: #fa7f67;
    }

    .inside-page__heading--camping,
    .card-front__text-view--camping {
        color: #00b97c;
    }

    /* Front cover */

    .card-front__tp {
        color: #fafbfa;
    }

    /* For pricing text on card front cover */
    .card-front__text-price {
        font-size: 1.2rem;
        margin-top: -.2rem;
    }

    /* Back cover */

    /* For inside page's body text */
    .inside-page__text {
        color: #333;
    }

    /* Icons ===========================================*/

    .card-front__icon {
        fill: #fafbfa;
        font-size: 3vw;
        height: 3.25rem;
        margin-top: -.5rem;
        width: 3.25rem;
    }

    /* Buttons =================================================*/





    /* Layout Structure=========================================*/

    .main {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 80vh;
        width: 100%;
    }

    /* Container to hold all cards in one place */
    .card-area {
        align-items: center;
        display: flex;
        flex-wrap: nowrap;
        height: 100%;
        justify-content: space-evenly;
        padding: 1rem;
    }

    /* Card ============================================*/

    /* Area to hold an individual card */
    .card-section {
        align-items: center;
        display: flex;
        height: 100%;
        justify-content: center;
        width: 100%;
    }

    /* A container to hold the flip card and the inside page */
    .card {
        background-color: rgba(0, 0, 0, .05);
        height: 15rem;
        position: relative;
        transition: all 1s ease;
        width: 15rem;
    }

    /* Flip card - covering both the front and inside front page */

    /* An outer container to hold the flip card. This excludes the inside page */
    .flip-card {
        height: 15rem;
        perspective: 100rem;
        position: absolute;
        right: 0;
        transition: all 1s ease;
        visibility: hidden;
        width: 15rem;
        z-index: 100;
    }

    /* The outer container's visibility is set to hidden. This is to make everything within the container NOT set to hidden  */
    /* This is done so content in the inside page can be selected */
    .flip-card>* {
        visibility: visible;
    }

    /* An inner container to hold the flip card. This excludes the inside page */
    .flip-card__container {
        height: 100%;
        position: absolute;
        right: 0;
        transform-origin: left;
        transform-style: preserve-3d;
        transition: all 1s ease;
        width: 100%;
    }

    .card-front,
    .card-back {
        backface-visibility: hidden;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }

    /* Styling for the front side of the flip card */

    /* container for the front side */
    .card-front {
        background-color: #fafbfa;
        height: 15rem;
        width: 15rem;
    }

    /* Front side's top section */
    .card-front__tp {
        align-items: center;
        clip-path: polygon(0 0, 100% 0, 100% 90%, 57% 90%, 50% 100%, 43% 90%, 0 90%);
        display: flex;
        flex-direction: column;
        height: 12rem;
        justify-content: center;
        padding: .75rem;
    }

    .card-front__tp--city {
        background: linear-gradient(to bottom,
                #ff73b9,
                #ff40a1);
    }

    .card-front__tp--ski {
        background: linear-gradient(to bottom,
                #47c2d7,
                #279eb2);
    }

    .card-front__tp--beach {
        background: linear-gradient(to bottom,
                #fb9b88,
                #f86647);
    }

    .card-front__tp--camping {
        background: linear-gradient(to bottom,
                #00db93,
                #00b97d);
    }

    /* Front card's bottom section */
    .card-front__bt {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    /* Styling for the back side of the flip card */

    .card-back {
        background-color: #fafbfa;
        transform: rotateY(180deg);
    }

    /* Specifically targeting the <video> element */
    .video__container {
        clip-path: polygon(0% 0%, 100% 0%, 90% 50%, 100% 100%, 0% 100%);
        height: auto;
        min-height: 100%;
        object-fit: cover;
        width: 100%;
    }

    /* Inside page */

    .inside-page {
        background-color: #fafbfa;
        box-shadow: inset 20rem 0px 5rem -2.5rem rgba(0, 0, 0, 0.25);
        height: 100%;
        padding: 1rem;
        position: absolute;
        right: 0;
        transition: all 1s ease;
        width: 15rem;
        z-index: 1;
    }

    .inside-page__container {
        align-items: center;
        display: flex;
        flex-direction: column;
        height: 100%;
        text-align: center;
        width: 100%;
    }

    /* Functionality ====================================*/

    /* This is to keep the card centered (within its container) when opened */
    .card:hover {
        box-shadow:
            -.1rem 1.7rem 6.6rem -3.2rem rgba(0, 0, 0, 0.75);
        width: 30rem;
    }

    /* When the card is hovered, the flip card container will rotate */
    .card:hover .flip-card__container {
        transform: rotateY(-180deg);
    }

    /* When the card is hovered, the shadow on the inside page will shrink to the left */
    .card:hover .inside-page {
        box-shadow: inset 1rem 0px 5rem -2.5rem rgba(0, 0, 0, 0.1);
    }
</style>
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
