<div>
    <section class="home img" id=home >
        <div class="text">
            <h1><span>المعرض</span> الدولي<br> للسيارات</h1>
            <p> sssssss</p>
            <div class="app-stores">
                <img src="{{ asset('img/ios.png') }}" alt="">
                <img src="{{ asset('img/play.png') }}" alt="">
            </div>
        </div>
    </section>
</div>
<style scoped>
    .home {
        width: 100%;
        min-height: 100vh;
        position: relative;
        display: grid ;
        align-items: center;
    }
    .home img {
        background: url({{ asset('img/car.png') }});
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        -webkit-transform:scaleY(-1);
    }

    .text h1 {
        font-size: 3.5rem;
        letter-spacing: 2px;
    }

    .text span {
        color: var(--main-color);
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
