<div>
    <article class="hov bg-gray mr-5   w-65  bg-gray-100">
        <img src="{{ asset($car->image_path ?? 'img/cars/popular1.png') }}"
                    class="popular__img p-3   hover:translate-y-1 ">
        {{-- <img src="{{ asset('img/cars/car1.jpg') }}" class=""> --}}
        <div class="p-4">
            <h3 class="flex justify-center mb-4 font-bold text-xl">{{ $car->type }}</h3>
            <div class=" flex justify-between">
                <div>
                    <div class="flex ">
                        <i class="fas fa-star"></i>
                        {{$car->category}}
                    </div>
                    <div class="flex ">
                        <i class="fas fa-star"></i>
                        {{$car->model}}
                    </div>
                    <div class="flex ">
                        <i class="fas fa-star"></i>
                        {{$car->color}}
                    </div>
                </div>
                <div>
                    <div class="flex ">
                        <i class="fas fa-star"></i>
                        {{$car->import_place}}
                    </div>
                </div>

            </div>
        </div>
        <a href="{{ route('car-page', ['car_id' => $car->id]) }}"
                class=" flex justify-between  p-3 bg-black text-white ">
                <div class="">{{ $car->sale_price }}$</div>
                <div class="">عرض السيارة </div>
            </a>
    </article>
</div>
<style scoped>
    

</style>

