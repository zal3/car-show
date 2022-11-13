<div>
    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl text-gray-600 mb-3">اضافة سيارة </h2>
                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
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
                                                <span class="">أضف صورة السيارة</span>
                                                <input id="file-upload" name="file-upload" type="file"
                                                    class="sr-only">
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
                                    <label for="full_name">أسم السيارة</label>
                                    <input type="text" name="full_name" id="full_name"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5">
                                    <label for="email">نموذج السيارة </label>
                                    <input type="text" name="email" id="email"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        />
                                </div>

                                <div class="md:col-span-3">
                                    <label for="address"> فئة السيارة</label>
                                    <input type="text" name="address" id="address"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="city">لون السيارة</label>
                                    <input type="text" name="city" id="city"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value=""
                                        placeholder="" />
                                </div>

                                <div class="md:col-span-2">
                                    <label for="country">سعر استيراد السيارة</label>
                                    <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <input name="country" id="country" placeholder="Country"
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
                                        <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                            <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="18 15 12 9 6 15"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="md:col-span-2">
                                    <label for="state">سعر بيع السيارة</label>
                                    <div class="h-10 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <input name="state" id="state" placeholder="State"
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
                                        <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-300 hover:text-blue-600">
                                            <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="18 15 12 9 6 15"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="md:col-span-1">
                                    <label for="zipcode">رقم السيارة</label>
                                    <input type="text" name="zipcode" id="zipcode"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="zipcode">رقم هيكل السيارة</label>
                                    <input type="text" name="zipcode" id="zipcode"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="zipcode">دولةاستيرادالسيارة </label>
                                    <input type="text" name="zipcode" id="zipcode"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                <div class="input-box ">
                                   <span>تاريخ الاستيراد</span>
                                   <input type="date" name="" id="" class="rounded bg-gray-50">
                                </div>
                                <br>
                                <div class="md:col-span-1">
                                    <label for="zipcode">  حالة السياره </label>
                                    <input type="text" name="zipcode" id="zipcode"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                <div class="md:col-span-1">
                                    <label for="zipcode"> ملاحظه عن السيارة</label>
                                    <input type="text" name="zipcode" id="zipcode"
                                        class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                        placeholder="" value="" />
                                </div>
                                </div>
                               
                                <div class="md:col-span-5">
                                    <div class="inline-flex items-center">
                                        <input type="checkbox" name="billing_same" id="billing_same"
                                            class="form-checkbox" />
                                        <label for="billing_same" class="ml-2">My billing address is different than
                                            above.</label>
                                    </div>
                                    
                                </div>

                                <div class="md:col-span-2">
                                    <label for="soda">How many soda pops?</label>
                                    <div
                                        class="h-10 w-28 bg-gray-50 flex border border-gray-200 rounded items-center mt-1">
                                        <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-r border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <input name="soda" id="soda" placeholder="0"
                                            class="px-2 text-center appearance-none outline-none text-gray-800 w-full bg-transparent"
                                            value="0" />
                                        <button tabindex="-1" for="show_more"
                                            class="cursor-pointer outline-none focus:outline-none border-l border-gray-200 transition-all text-gray-500 hover:text-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-2 fill-current"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="md:col-span-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">اضافه
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="https://www.buymeacoffee.com/dgauderman" target="_blank"
                class="md:absolute bottom-0 right-0 p-4 float-right">
                <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee"
                    class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
            </a>
        </div>
    </div>
</div>
