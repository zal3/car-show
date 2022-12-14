<div>
                <button id="filterHome" data-dropdown-toggle="dropdownFilterHome" data-dropdown-placement="right"
                    class="p-2 py-1 duration-150 ease-in delay-75 rounded-lg  text-gray-600 hover:text-gray-900">
                    <i class="text-xl fa-solid fa-filter"></i>
                </button>

                <div id="dropdownFilterHome" class="hidden   rounded-lg     ">
                    <div>
                        <div class="grid grid-cols-2   gap-2 ">
                            <select wire:model="model"
                                class=" py-2   border border-gray-900 focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                                <option value="0" >الموديل </option>
                                <option value="1">2023  </option>
                                <option value="2"> 2022</option>
                                <option value="3"> 2021</option>
                                <option value="4"> 2020</option>
                                <option value="5"> 2019</option>
                                <option value="6"> 2018</option>
                            </select>

                            <select wire:model="color"
                                class=" py-2   border border-gray-900 focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
                                <option value="0" >اللون</option>
                                <option value="1">احمر  </option>
                                <option value="2"> ابيض</option>
                                <option value="3"> اسود</option>
                                <option value="4"> اصفر</option>
                                <option value="5"> اخضر</option>
                                <option value="6"> ازرق</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>