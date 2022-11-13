<div>
    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600 mb-3">اضافة سيارة </h2>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <form wire:submit.prevent="add" action="" class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg mb-6">معلومات السيارة </p>
                            <div
                                class=" ml-4 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-900 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48" aria-hidden="true">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer bg-white rounded-md font-medium ml-1 text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span class=""> صورة السيارة</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs text-black">
                                        PNG, JPG, GIF
                                    </p>
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
                                </div>
                                <div class="md:col-span-5">
                                    <label for="category"> فئة السيارة </label>
                                    <input wire:model.lazy="category" type="text" name="category" id="category"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="لاندكروز" />
                                </div>
                                <div class="md:col-span-3">
                                    <label for="model"> موديل السيارة</label>
                                    <input wire:model.lazy="model" type="text" name="model" id="model"
                                        placeholder="2021" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        value="" placeholder="" />
                                </div>
                                <div class="md:col-span-2">
                                    <label for="city">لون السيارة</label>
                                    <select id="countries"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-7 ">
                                        <option selected>اختر لون</option>
                                        <option value="US">احمر</option>
                                        <option value="CA">ابيض</option>
                                        <option value="FR">اسود</option>
                                        <option value="DE">اصفر</option>
                                        <option value="DE">اخضر</option>
                                        <option value="DE">ازرق</option>
                                    </select>
                                </div>
                                <div class="md:col-span-2">
                                    <label for="chassis_number">رقم هيكل السيارة </label>
                                    <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <input wire:model.lazy="chassis_number" name="chassis_number"
                                            id="chassis_number"
                                            class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                            value="" />
                                        <button tabindex="-1"
                                            class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                            <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="md:col-span-2">
                                    <label for="number">رقم السيارة </label>
                                    <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <input wire:model.lazy="number" name="number" id="number"
                                            class="px-4 appearance-none outline-none text-gray-800 w-full bg-transparent"
                                            value="" />
                                        <button tabindex="-1"
                                            class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-red-600">
                                            <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="md:col-span-1">
                                    <label for="color">لون السيارة</label>
                                    <select id="color"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-7 ">
                                        <option selected>اختر لون</option>
                                        <option value="US">احمر</option>
                                        <option value="CA">ابيض</option>
                                        <option value="FR">اسود</option>
                                        <option value="DE">اصفر</option>
                                        <option value="DE">اخضر</option>
                                        <option value="DE">ازرق</option>
                                    </select>
                                </div>
                                <div class="md:col-span-1">
                                    <label for="import_price"> سعر الاستيراد</label>
                                    <input wire:model.lazy="import_price" type="text" name="import_price"
                                        id="import_price"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                <div class="md:col-span-2">
                                    <label for="import_place">دولة الاستيراد </label>
                                    <input wire:model.lazy="import_place" type="text" name="import_place"
                                        id="import_place"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                <div class="input-box ">
                                    <span>تاريخ الاستيراد</span>
                                    <input wire:model.lazy="import_date" type="date" name=""
                                        id="" class="rounded bg-gray-50">
                                </div>
                                <br>
                                <div class="md:col-span-1">
                                    <label for="state"> حالة السياره </label>
                                    <select id="state"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pr-7 ">
                                        <option selected> </option>
                                        <option value="US">مؤجرة</option>
                                        <option value="CA">غير مؤجرة</option>
                                    </select>
                                </div>
                                <div class="md:col-span-1">
                                    <label for="sale_price"> سعر السيارة</label>
                                    <input wire:model.lazy="sale_price" type="text" name="sale_price"
                                        id="sale_price"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                <div class="md:col-span-5 h-10">
                                    <label for="note"> ملاحظة </label>
                                    <textarea wire:model.lazy="note" type="text" name="note" id="note"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder=""
                                        value=""></textarea>
                                </div>
                            </div>
                            <div class="md:col-span-5 text-right mt-8">
                                <div class="inline-flex items-end">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">اضافه
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
