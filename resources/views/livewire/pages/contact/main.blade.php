<div>
    <div class="container my-24 px-6 mx-auto">
        <section class="mb-32 text-gray-800 text-center">
            <div class="px-6  md:px-12">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2  items-center">
                        <div class="bgck md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                            <div class=" block rounded-lg shadow-lg px-6 py-12  lg:-mr-14"
                                style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                                <h2 class="text-3xl font-bold mb-4"> تواصل معنا </h2>
                                <form action="" class="form contact-form" method="post">
                                    <div class="input-group-wrap">
                                        <div class="input-group">
                                            <input type="text" class="input focus:ring-0 " placeholder="الاسم"
                                                required name="name">
                                            <span class="bar"></span>
                                        </div>
                                        <div class="input-group">
                                            <input type="email" class="input focus:ring-0 " placeholder="ايميل"
                                                required name="email">
                                            <span class="bar"></span>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="input  focus:ring-0  " placeholder="العنوان"
                                            required name="titsubject">
                                        <span class="bar"></span>
                                    </div>
                                    <div class="input-group">
                                        <textarea class="input focus:ring-0 " cols="30" rows="8" placeholder="الموضوع" required name="subject"></textarea>
                                        <span class="bar"></span>
                                    </div>
                                    <button type="submit"
                                        class="btn form-btn btn-purple border border-gray-900 items-center px-4 py-2 mt-2 hover:bg-orange-700 hover:text-white hover:border-white ">ارسال
                                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="md:mb-12 lg:mb-0">
                            <div class="map-container relative shadow-lg rounded-lg">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3438.4388778211683!2d47.81268702432562!3d30.48032772327568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc4970dfbc4de5b%3A0x8a81aaa0e4aa3b79!2z2YXYudix2LYg2KfZhNmF2YrZhtin2KEg2YTYqtis2KfYsdipINin2YTYs9mK2KfYsdin2Kog2KfZhNit2K_Zitir2Kk!5e0!3m2!1sen!2siq!4v1667904490860!5m2!1sen!2siq"
                                    class="left-0 top-0 h-96 w-full absolute rounded-lg" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<style>
    .map-container {
        height: 380px;
        /* z-index: -1; */
    }

    .bgck {
        background: linear-gradient(to left, hsl(31, 100%, 95%), #030a0e98);
    }


    .input {
        border: none;
        background-color: transparent;
        border-bottom: black 2px solid;
        font-weight: normal;
        display: block;
        width: 100%;
        border-bottom: 2px solid#fff;
        padding-left: 0;
    }

    .bar {
        display: block;
        position: relative;
    }

    .bar::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 3px;
        background-color: #ed563be8;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform .5s;
    }

    .contact-form .input:focus+.bar::after {
        transform: scaleX(1);
    }
</style>
