<div>
    <article
        class=" popular__card bg-gray px-6 py-6 mr-5 overflow-hidden relative w-65  bg-gray rounded-3xl hover:bg-yellow-300   ">
        <div class="shape shape__smaller"></div>
        <img src="{{ asset('img/cars/car1.jpg') }}" alt="" class="popular__img rounded-3xl  hover:translate-y-1 ">
        <div class="content">
            <h3 class="new flex justify-center">{{ $car->type }}</h3>
            <div class="stars flex justify-center  text-orange pt-4">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price flex justify-center pt-4 pb-4">{{ $car->sale_price }}$</div>
            <a href="#"
                class="btn flex justify-center font-bold bg-orange hover:bg-orange-700   rounded-full ">check out</a>
        </div>
    </article>
</div>
