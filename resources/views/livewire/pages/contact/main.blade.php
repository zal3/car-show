<div>
    <div class="container my-24 px-6 mx-auto">
        <section class="mb-32 text-gray-800 text-center">
            <div class="px-6  md:px-12">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2  gap-10 items-center">
                        <div class="bgck md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                            <div class=" block rounded-lg shadow-lg px-6 py-12  lg:-mr-14" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                                <h2 class="text-3xl font-bold mb-4"> تواصل معنا </h2>
                                <form wire:submit.prevent="add" action="" class="form contact-form" method="post">
                                    <input wire:model.lazy="name" type="text" class="input border-r-0 border-l-0 border-t-0 w-full  bg-transparent border-b-black font-normal block pl-0 focus:ring-0 " placeholder="الاسم" required name="name">
                                    <span class="bar"></span>
                                    <input wire:model.lazy="email" type="email" class="input border-r-0 border-l-0 border-t-0 w-full  bg-transparent border-b-black font-normal block pl-0 focus:ring-0 " placeholder="ايميل" required name="email">
                                    <span class="bar"></span>
                                    <input wire:model.lazy="title" type="text" class="input border-r-0 border-l-0 border-t-0 w-full  bg-transparent border-b-black font-normal block pl-0 focus:ring-0 " placeholder="العنوان" required name="titsubject">
                                    <span class="bar"></span>
                                    <textarea wire:model.lazy="subject" class="input border-r-0 border-l-0 border-t-0 w-full  bg-transparent border-b-black font-normal block pl-0 focus:ring-0 " cols="30" rows="8" placeholder="الموضوع" required name="subject"></textarea>
                                    <span class="bar"></span>
                                    <button type="submit" class="btn form-btn btn-purple border border-gray-900 items-center px-4 py-2 mt-2 hover:bg-orange-700 hover:text-white hover:border-white ">ارسال
                                        <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="md:mb-12 lg:mb-0">
                            <div class="map-container relative shadow-lg rounded-lg">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3438.4388778211683!2d47.81268702432562!3d30.48032772327568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc4970dfbc4de5b%3A0x8a81aaa0e4aa3b79!2z2YXYudix2LYg2KfZhNmF2YrZhtin2KEg2YTYqtis2KfYsdipINin2YTYs9mK2KfYsdin2Kog2KfZhNit2K_Zitir2Kk!5e0!3m2!1sen!2siq!4v1667904490860!5m2!1sen!2siq" class="left-0 top-0  w-full absolute rounded-lg hh" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                    @admin
                    <a href="{{ route('contact-info') }}" class="text-black flex justify-center   items-center gap-3 mt-9 mx-auto text-md xl:text-xl duration-200 bg-gray-300 hover:bg-white border border-transparent hover:border-gray-500 hover:text-primary-500 focus:ring-2 focus:ring-gray-900 ml-7  rounded-lg px-3 py-1 md:px-4 md:py-1">
                        <div class=""> عرض التواصل</div>
                    </a>
                    @endadmin
                </div>
            </div>


        </section>
    </div>
</div>
<style>
    .map-container {
        height: 500px;
    }

    .hh {
        height: 500px;
    }

    .bgck {
        background: linear-gradient(to left, hsl(31, 100%, 95%), #030a0e98);
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