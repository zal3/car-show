<div>
    <div class="p-9">
        <h2 class="text-xl text-black   flex justify-center mb-3">طريقة التأجير</h2>
        <h1 class="text-xl md:text-3xl text-black text-center font-bold px-4  flex justify-center">أجر سيارة بثلاث خطوات
            سهلة </h1>
        <div class="md:flex  justify-between gap-4 items-center">
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-location-dot md:text-6xl text-3xl text-orange my-4  "></i>
                <h1 class=" text-xl md:text-3xl font-bold text-black my-4 ">أختر الموقع </h1>
                <h1>
                    اختر موقع رحلتك لحجز السيارة التي
                    <br> تود تجربتها في رحلتك مع
                    الانتباه في اختيار الموقع بشكل مضبوط لكي
                    تتابع معنا تكمله حجز سيارتك
                </h1>
            </div>
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-calendar-check md:text-6xl text-3xl my-4 text-orange "></i>
                <h1 class="text-xl md:text-3xl font-bold text-black my-4"> أختر الموعد</h1>
                <h1>
                    حدد وقت حجز السيارة مع وقت انتهاء التأجير والاهتمام بوقت استلام وتسليم السيارة في الوقت الذي تم
                    تحديده
                </h1>
            </div>
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-car-side md:text-6xl text-3xl my-4 text-orange "></i>
                <h1 class="text-xl md:text-3xl font-bold text-black my-4">أجر سيارة </h1>
                <h1>
                    اختر السيارة التي ترغب في تأجيرها لطفاً نرجو الاهتمام
                    بنظافه السيارة ونتمنى لكم وقت ممتع</h1>
            </div>
        </div>
    </div>
    {{-- form-container --}}
    <div class="form-container flex m-auto justify-center items-center  ">
        <form wire:submit.prevent="save" class=" flex-col lg:w-1/2  bg-white">
            <div class="md:grid md:grid-cols-2 gap-y-3 ">
                <div class=" ">
                    <div>الموقع</div>
                    <input wire:model.lazy="location" type="text" class="w-60 h-10 border mt-1 rounded px-4  bg-gray-50"
                        value="" placeholder=" اختر المكان" />
                    @error('location')
                    <div class=" text-sm text-red-700 ">يجب ملئ هذا الحقل</div>
                    @enderror
                </div>
                <div class=" ">
                    <div>رقم الهاتف</div>
                    <input wire:model.lazy="phone_num" type="text"
                        class="w-60 h-10 border mt-1 rounded px-4  bg-gray-50" value="" placeholder=" " />
                    @error('phone_num')
                    <div class=" text-sm text-red-700 ">يجب ملئ هذا الحقل</div>
                    @enderror
                </div>
                <div class="flex-col">
                    <div>وقت التأجير</div>
                    <input wire:model.lazy="rent_date" class="w-60 h-10 border mt-1 rounded px-4  bg-gray-50" value=""
                        type="date" />
                    @error('rent_date')
                    <div class=" text-sm text-red-700 ">يجب تحديد تاريخ</div>
                    @enderror
                </div>
                <div class="flex-col">
                    <div> وقت الاعادة</div>
                    <input wire:model.lazy="return_date" class="w-60 h-10 border mt-1 rounded px-4  bg-gray-50" value=""
                        type="date" />
                    @error('return_date')
                    <div class=" text-sm text-red-700 ">يجب تحديد تاريخ</div>
                    @enderror
                </div>
                <div class="lable">
                    <label for="city">نوع السيارة</label>
                    <select wire:model="car_id" id="{{ $car_id }}" name="car_id"
                        class=" w-60 bg-gray-50 border border-black-200 text-gray-900 text-sm rounded-lg focus:ring-blue-700 focus:border-blue-700 block pl-14     mt-2  ">
                        <option selected> أختر نوع السياره</option>
                        @foreach ($cars as $car)
                        <option value="{{$car->id}}" class="text-black">{{$car->type}} </option>
                        @endforeach
                    </select>
                </div>
                <div class=" flex flex-col-2 mt-10">
                    <div>رخصة القيادة</div>
                    <div class="">
                        <label
                            class="    @if ($image_path) bg-primary-700 text-black @else bg-white text-primary-700 @endif rounded-lg tracking-wide   cursor-pointer hover:bg-primary-700 hover:text-black">
                            <div wire:target="image_path">
                            </div>
                            <div wire.remove wire:target="image_path">
                                @if ($image_path)
                                <i class="fa-solid fa-check text-xl"></i>
                                @else
                                <i class="fa-solid fa-upload text-xl"></i>
                                @endif
                            </div>
                            <input wire:model.lazy="image_path" type="file" class="hidden" />
                        </label>
                        @error('image_path')
                        <div class="error text-sm text-primary-600 bg-primary-100 rounded-lg  text-xs">لم
                            يتم تحميل
                            الصورة</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" id="" class="btn w-full "> تأجير</button>
        </form>
    </div>
</div>

<style scoped>
/* car rate */
.rate {
    margin: 4rem 4rem;

}


/* form-container */
.form-container form {
    gap: 2rem;
    bottom: 1rem;
    left: 400px;
    border-radius: 0.9rem;
    margin-bottom: 2rem;
    margin-top: 40px;
    display: flex;
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