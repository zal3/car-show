<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
        <div>
            <h2 class="font-semibold text-xl text-gray-600 mb-3">تعديل سيارة </h2>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <form wire:submit.prevent="edit" action=""
                    class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg mb-6">معلومات السيارة </p>
                        <div
                            class=" ml-4 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-900 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <label
                                    class="w-full flex flex-col items-center px-2 py-6  @if ($image_path) bg-primary-700 text-black @else bg-white text-primary-700 @endif rounded-lg tracking-wide   cursor-pointer hover:bg-primary-700 hover:text-black">
                                    <div wire:target="image_path">
                                    </div>
                                    <div wire.remove wire:target="image_path">
                                        @if ($image_path)
                                        <i class="fa-solid fa-check text-2xl"></i>
                                        @else
                                        <i class="fa-solid fa-upload text-2xl"></i>
                                        @endif
                                    </div>
                                    <span class="mt-2 text-base leading-normal">
                                        @if ($image_path)
                                        تم اختيار الصورة
                                        غيرها
                                        @else
                                        إختر صورة
                                        @endif
                                    </span>
                                    <input wire:model.lazy="new_image" type="file" class="hidden" />
                                </label>
                                @error('image_path')
                                <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم
                                    يتم تحميل
                                    الصورة</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="full_name">نوع السيارة</label>
                                <input wire:model.lazy="type" type="text" name="full_name" id="full_name"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="جكسارة" />
                                    @error('type')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <div class="md:col-span-5">
                                <label for="category"> فئة السيارة </label>
                                <input wire:model.lazy="category" type="text" name="category" id="category"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                    placeholder="لاندكروز" />
                                    @error('category')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <div class="md:col-span-3">
                                <label for="model"> موديل السيارة</label>
                                <input wire:model.lazy="model" type="text" name="model" id="model" placeholder="2021"
                                    class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />
                                    @error('model')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror</div>
                            <div class="md:col-span-2">
                                <label for="city">حالة السيارة </label>
                                <select name="" wire:model.lazy="state" id="rent"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-7 ">
                                    <option selected> </option>
                                    <option value="1">مؤجرة</option>
                                    <option value="0">غير مؤجرة</option>
                                </select>
                                @error('state')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <div class="md:col-span-2">
                                <label for="chassis_number">رقم هيكل السيارة </label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input wire:model.lazy="chassis_number" name="chassis_number" id="chassis_number"
                                        class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                        value="" />
                                    
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label for="number">رقم السيارة </label>
                                <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                    <input wire:model.lazy="number" name="number" id="number"
                                        class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                        value="" />
                                    
                                </div>
                            </div>
                            <div class="md:col-span-1">
                                <label for="color">لون السيارة</label>
                                <select id="color" wire:model.lazy="color"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-7 ">
                                    <option selected>اختر لون</option>
                                    <option value="1">احمر</option>
                                    <option value="2">ابيض</option>
                                    <option value="3">اسود</option>
                                    <option value="4">اصفر</option>
                                    <option value="5">اخضر</option>
                                    <option value="6">ازرق</option>
                                </select>
                                @error('color')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <div class="md:col-span-1">
                                <label for="import_price"> سعر الاستيراد</label>
                                <input wire:model.lazy="import_price" type="text" name="import_price" id="import_price"
                                    class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="" value="" />@error('import_price')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <div class="md:col-span-2">
                                <label for="import_place">دولة الاستيراد </label>
                                <input wire:model.lazy="import_place" type="text" name="import_place" id="import_place"
                                    class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="" value="" />@error('import_place')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <div class="input-box ">
                                <span>تاريخ الاستيراد</span>
                                <input wire:model.lazy="import_date" type="date" name="" id=""
                                    class="rounded bg-gray-50">@error('import_date')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <br>
                            <div class="md:col-span-1">
                                <label for="sale_price"> سعر السيارة</label>
                                <input wire:model.lazy="sale_price" type="text" name="sale_price" id="sale_price"
                                    class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="" value="" />@error('sale_price')
                                    <span class="error text-red-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">هذا الحقل مطلوب </span>
                                    @enderror
                            </div>
                            <div class="md:col-span-5 h-10">
                                <label for="note"> ملاحظة </label>
                                <textarea wire:model.lazy="note" type="text" name="note" id="note"
                                    class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    placeholder="" value=""></textarea>
                            </div>
                        </div>
                        <div class="md:col-span-5 text-right mt-8">
                            <div class="inline-flex items-end">
                                <a href="{{ route('car') }}"
                                    class="w-auto bg-white ml-5 text-primary-600  border border-primary-600 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium  px-4 py-2">الرجوع</a>
                                <button type="submit"
                                    class="w-auto bg-blue-500 ml-5 text-white border border-primary-600 rounded-lg shadow-md hover:shadow-xl hover:scale-105 font-medium  px-4 py-2">
                                    تعديل
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>