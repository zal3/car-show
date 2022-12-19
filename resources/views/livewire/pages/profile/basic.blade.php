<section class="w-full p-6 mx-auto bg-white rounded-md shadow-md  ">
    <h1 class="text-xl font-bold text-black capitalize "> اعدادات الحساب </h1>
    <form wire:submit.prevent="edit">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-black ">الاسم</label>
                <input wire:model="name" type="text" value="{{ $name }}"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  focus:border-gray-500  focus:outline-none focus:ring-1">
                @error('name')
                <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-black "> الايميل </label>
                <input wire:model="email" type="email" disabled
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  focus:border-gray-500  focus:outline-none focus:ring-1">
                @error('email')
                <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-black ">رقم الهاتف</label>
                <input wire:model="phone_number" type="text"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  focus:border-gray-500  focus:outline-none focus:ring-1">
                @error('phone_number')
                <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="text-black "> معرف التليكرام</label>
                <input wire:model="telegram_username" type="text"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  focus:border-gray-500  focus:outline-none focus:ring-1">
                @error('telegram_username')
                <span class="text-red-500 error">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <div class="mt-1 flex justify-center px-6  border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">
                        <label
                            class=" pt-5 h-30   flex flex-col items-center px-2 py-6  @if ($profile_photo) bg-primary-700 text-black @else bg-white text-primary-700 @endif rounded-lg tracking-wide cursor-pointer hover:bg-primary-700 hover:text-black">
                            <div wire:loading wire:target="profile_photo">
                            </div>
                            <div wire:loading.remove wire:target="profile_photo">
                                @if ($profile_photo)
                                <i class="fa-solid fa-check text-base md:text-2xl"></i>
                                @else
                                <i class="fa-solid fa-upload text-base md:text-2xl"></i>
                                @endif
                            </div>
                            <span class="mt-2 text-base leading-normal">
                                @if ($profile_photo)
                                تم اختيار الصورة
                                @else
                                إختر صورة
                                @endif
                            </span>
                            <input type='file' class="hidden" wire:model="profile_photo" />
                        </label>
                        @error('profile_photo')
                        <span class="error text-primary-600 bg-primary-100 rounded-lg py-1 px-2 text-xs">لم يتم تحميل
                            الصورة</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-black rounded-md hover:bg-orange-700 focus:outline-none focus:bg-gray-600">حفظ</button>
        </div>
    </form>
</section>