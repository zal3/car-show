<div>
    <div class="p-9">
        <h2 class="text-xl text-black   flex justify-center mb-3">طريقة التأجير</h2>
        <h1 class="text-3xl text-black font-bold px-4  flex justify-center">أجر سيارة بثلاث خطوات سهلة </h1>
        <div class="flex  justify-between gap-4 items-center">
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-location-dot text-6xl text-orange my-4  "></i>
                <h1 class=" text-3xl text-black my-4 ">أختر الموقع </h1>
                <h1>
                    اختر موقع رحلتك لحجز السيارة التي
                    <br> تود تجربتها في رحلتك مع
                    الانتباه في اختيار الموقع بشكل مضبوط لكي
                    تتابع معنا تكمله حجز سيارتك
                </h1>
            </div>
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-calendar-check text-6xl my-4 text-orange "></i>
                <h1 class="text-3xl text-black my-4"> أختر الموعد</h1>
                <h1>
                    حدد وقت حجز السيارة مع وقت انتهاء التأجير والاهتمام بوقت استلام وتسليم السيارة في الوقت الذي تم
                    تحديده
                </h1>
            </div>
            <div class="block p-6 max-w-4xl text-center hov">
                <i class="fa-solid fa-car-side text-6xl my-4 text-orange "></i>
                <h1 class="text-3xl text-black my-4">أجر سيارة </h1>
                <h1>
                    اختر السيارة التي ترغب في تأجيرها لطفاً نرجو الاهتمام
                    بنظافه السيارة ونتمنى لكم وقت ممتع</h1>
            </div>
        </div>
    </div>
    {{-- form-container --}}
    <div class="form-container flex m-auto justify-center items-center  ">
        <form wire:submit.prevent="save" class=" flex flex-wrap w-1/2  bg-white">
            <div class="input-box">
                <span>الموقع</span>
                <input wire:model.lazy="location" type="text" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                    value="" placeholder="ابحث عن مدينة" />
            </div>
            @error('location')
                            <span class="error text-red-700 rounded-lg mt-3">يجب ملئ هذا الحقل</span>
                            @enderror
            <div class="input-box ">
                <span>رقم الهاتف</span>
                <input wire:model.lazy="phone_num" type="text" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                    value="" placeholder=" " />
            </div>
            @error('phone_num')
                            <span class="error text-red-700 rounded-lg mt-3">يجب ملئ هذا الحقل</span>
                            @enderror
            <div class="input-box">
                <span>وقت التأجير</span>
                <input wire:model.lazy="rent_date" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                    type="date" />
            </div>
            @error('rent_date')
                            <span class="error text-red-700 rounded-lg mt-3">يجب ملئ هذا الحقل</span>
                            @enderror
            <div class="input-box">
                <span> وقت الاعادة</span>
                <input wire:model.lazy="return_date" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                    type="date" />
            </div>
           
            
            <div class="lable">
                <label for="city">نوع السيارة</label>
                <select wire:model="car_id" id="{{ $car_id }}" name="car_id"
                    class=" bg-gray border border-black-200 text-gray-900 text-sm rounded-lg focus:ring-blue-700 focus:border-blue-700 block pl-14    w-full mt-2  ">
                    <option selected> أختر نوع السياره</option>
                    @foreach ($cars as $car)
                    <option value="{{$car->id}}"
                    class="text-black">{{$car->type}} </option>
                    @endforeach
                </select>
            </div>
            <div class="input-box flex flex-col-2 mt-10">
                <span>رخصة القيادة</span>
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
                    <span class="error text-primary-600 bg-primary-100 rounded-lg  text-xs">لم
                        يتم تحميل
                        الصورة</span>
                    @enderror
                </div>
                @error('image_path')
                            <span class="error text-red-700 rounded-lg mt-3">يجب ملئ هذا الحقل</span>
                            @enderror
            </div>

            <button type="submit" id="" class="btn w-full"> تأجير</button>
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
}

.input-box {
    
    
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