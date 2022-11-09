<div class="help-section">
            <div class="inner-width">
                <h1 class="section-title">الخدمات</h1>
                <div class="border"></div>
                    <div class="help-container">
                        <div class="help-box">
                            <div class="help-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div class="help-title">Editing errors</div>
                            <div class="help-desc">Our website makes regular changes to the websiteso be sure to contact us if you encounter any problems</div>
                        </div>


                        <div class="help-box">
                            <div class="help-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="help-title">Android</div>
                            <div class="help-desc">You can log in and browse the site through mobile devices</div>
                        </div>

                        <div class="help-box">
                            <div class="help-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <div class="help-title">Database</div>
                            <div class="help-desc">Update site databases every year to accommodate passenger tickets within one year</div>
                        </div>

                        <div class="help-box">
                            <div class="help-icon">
                                <i class="fas fa-object-ungroup"></i>
                            </div>
                            <div class="help-title">Professional Correspondent</div>
                            <div class="help-desc">If you need any help, you can contact our team</div>
                        </div>

                        <div class="help-box">
                            <div class="help-icon">
                                <i class="fas fa-brush"></i>
                            </div>
                            <div class="help-title">full scan</div>
                            <div class="help-desc">Conducting a full site survey may avoid any problems while browsing the site</div>
                        </div>

                        <div class="help-box">
                            <div class="help-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="help-title">Web developement</div>
                            <div class="help-desc">Our site is making periodic developments on the site, so be sure to contact us if you encounter any problems</div>
                        </div>

                    </div>
                
            </div>
        </div>

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
   /* serves */
  
.help-section{
    padding: 60px 0;
}
.inner-width{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    overflow: hidden;
}
.section-title{
    text-align: center;
    color: #000000;
    text-transform: uppercase;
    font-size: 30px;
}
.border{
    width: 160px;
    height: 2px;
    background: #82ccdd;
    margin: 10px auto;

}
.help-container{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.help-box{
    max-width: 33.33%;
    padding: 10px;
    text-align: center;
    color: #ddd;
    cursor: pointer;
    
}
.help-icon{
    display: inline-block;
    width: 70px;
    height: 70px;
    border: 3px solid  #ED563B;
    transform: rotate(45deg);
    margin-bottom: 30px;
    margin-top: 16px;
    transition: 0.3s linear;
}
.help-icon i{
    line-height: 70px;
    transform: rotate(-45deg);
    font-size: 26px;
    
    
}
.help-box:hover .help-icon{
background:  #ED563B;
color: #fff;
}
.help-title{
    font-size: 18px;
    text-transform: uppercase;
    margin-bottom:10px ;
    color: #000000;

}
.help-desc{
    font-size: 14px;
    color: #000000;


}

@media  screen and (max-width:960px) {
    .help-box{
        max-width: 45%;
    }
    
}
@media  screen and (max-width:768px) {
    .help-box{
        max-width: 50%;
    }
    
}
@media  screen and (max-width:400px) {
    .help-box{
        max-width: 100%;
    }
    
}

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
