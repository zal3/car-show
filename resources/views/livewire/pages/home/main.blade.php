<div>
    <div>
        <img src="{{ asset('img/car.png') }}" alt="hero" class="car">
        <section class="home" id=home>
            <div class="text">
                <h1><span>المعرض</span> الدولي<br> للسيارات</h1>
                <h5>للحصول على أفضل سيارة في المدينة</h5>
                <div class="app-stores">
                    <img src="{{ asset('img/ios.png') }}" alt="">
                    <img src="{{ asset('img/play.png') }}" alt="">
                </div>
            </div>
        </section>
    </div>
</div>
<style scoped>
    .home {
        width: 100%;
        min-height: 100vh;
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
    }

    .app-stores img {
        width: 100px;
        margin-right: 1rem corsor: pointer;
    }
</style>
