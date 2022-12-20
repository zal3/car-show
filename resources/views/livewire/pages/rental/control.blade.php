<div class="p-12 ">
    <div class="mb-4 border-b border-gray-200 ">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
            role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 "
                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                    aria-selected="false">
                    طلبات التاجير</button>
            </li>
            <li class="mr-2" role="presentation">
                <button @click="accebted"
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 "
                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                    aria-selected="false">
                    المقبولة</button>
            </li>
            <li role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 "
                    id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                    aria-selected="false">
                    المرفوضة</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden px-4  rounded-lg " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div>
                <div class="      mt-9  flex justify-center  items-center ">
                    <table class="  text-sm text-center text-left text-gray-500 p-4  ">
                        <thead class="text-xs text-gray-100 uppercase bg-black ">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    الموقع </th>
                                <th scope="col" class="py-3 px-6">
                                    السيارة </th>
                                <th scope="col" class="py-3 px-6">
                                    الاسم </th>
                                <th scope="col" class="py-3 px-6">
                                    الايميل </th>
                                <th scope="col" class="py-3 px-6">
                                    تاريخ التاجير </th>
                                <th scope="col" class="py-3 px-6">
                                    تاريخ الاعادة </th>
                                <th scope="col" class="py-3 px-6">
                                    رقم الهاتف </th>
                                <th scope="col" class="py-3 px-6">
                                    رخصة القيادة </th>
                                <th scope="col" class="py-3 px-6">
                                    ..</th>
                            </tr>
                        </thead>
                        @foreach ($rents as $rent)
                        <tbody>
                            <tr class="bg-white border-b  ">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                    <img class="h-10 w-10 rounded-full"
                                        src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                                </th>
                                <td class="py-4 px-6">
                                    {{ $rent->location }} </td>
                                <td class="py-4 px-6">
                                    {{$rent->car->type}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$rent->user->name}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$rent->user->email}}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $rent->rent_date }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $rent->return_date }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $rent->phone_num }}
                                </td>
                                <td class="py-4 px-6">
                                    <!-- {{ $rent->image_path }} -->
                                </td>
                                <td class="py-4 px-6 flex text-white">
                                    <button wire:click="accebted({{ $rent->id }})" class="border p-3 bg-blue-600 ">
                                        قبول
                                    </button>
                                    <button wire:click="rejected({{ $rent->id }})" class="border p-3 bg-red-600">
                                        رفض
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="hidden px-4 " id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="      mt-9  flex justify-center  items-center ">
                <table class="  text-sm text-center text-left text-gray-500 p-4  ">
                    <thead class="text-xs text-gray-100 uppercase bg-black ">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                            </th>
                            <th scope="col" class="py-3 px-6">
                                الموقع </th>
                            <th scope="col" class="py-3 px-6">
                                السيارة </th>
                            <th scope="col" class="py-3 px-6">
                                الاسم </th>
                            <th scope="col" class="py-3 px-6">
                                الايميل </th>
                            <th scope="col" class="py-3 px-6">
                                تاريخ التاجير </th>
                            <th scope="col" class="py-3 px-6">
                                تاريخ الاعادة </th>
                            <th scope="col" class="py-3 px-6">
                                رقم الهاتف </th>
                            <th scope="col" class="py-3 px-6">
                                رخصة القيادة </th>
                            <th scope="col" class="py-3 px-6">
                                ..</th>
                        </tr>
                    </thead>
                    @foreach ($rents1 as $rent)
                    <tbody>
                        <tr class="bg-white border-b  ">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                <img class="h-10 w-10 rounded-full"
                                    src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                            </th>
                            <td class="py-4 px-6">
                                {{ $rent->location }} </td>
                            <td class="py-4 px-6">
                                {{$rent->car->type}}
                            </td>
                            <td class="py-4 px-6">
                                {{$rent->user->name}}
                            </td>
                            <td class="py-4 px-6">
                                {{$rent->user->email}}
                            </td>
                            <td class="py-4 px-6">
                                {{ $rent->rent_date }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $rent->return_date }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $rent->phone_num }}
                            </td>
                            <td class="py-4 px-6">
                                <!-- {{ $rent->image_path }} -->
                            </td>
                            <td class="py-4 px-6 flex text-white">
                                <button wire:click="rejected({{ $rent->id }})" class="border p-3 bg-red-600">
                                    رفض
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="hidden px-4 " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <div class="      mt-9  flex justify-center  items-center ">
                <table class="  text-sm text-center text-left text-gray-500 p-4  ">
                    <thead class="text-xs text-gray-100 uppercase bg-black ">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                            </th>
                            <th scope="col" class="py-3 px-6">
                                الموقع </th>
                            <th scope="col" class="py-3 px-6">
                                السيارة </th>
                            <th scope="col" class="py-3 px-6">
                                الاسم </th>
                            <th scope="col" class="py-3 px-6">
                                الايميل </th>
                            <th scope="col" class="py-3 px-6">
                                تاريخ التاجير </th>
                            <th scope="col" class="py-3 px-6">
                                تاريخ الاعادة </th>
                            <th scope="col" class="py-3 px-6">
                                رقم الهاتف </th>
                            <th scope="col" class="py-3 px-6">
                                رخصة القيادة </th>
                            <th scope="col" class="py-3 px-6">
                                ..</th>
                        </tr>
                    </thead>
                    @foreach ($rents2 as $rent)
                    <tbody>
                        <tr class="bg-white border-b  ">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                <img class="h-10 w-10 rounded-full"
                                    src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                            </th>
                            <td class="py-4 px-6">
                                {{ $rent->location }} </td>
                            <td class="py-4 px-6">
                                {{$rent->car->type}}
                            </td>
                            <td class="py-4 px-6">
                                {{$rent->user->name}}
                            </td>
                            <td class="py-4 px-6">
                                {{$rent->user->email}}
                            </td>
                            <td class="py-4 px-6">
                                {{ $rent->rent_date }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $rent->return_date }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $rent->phone_num }}
                            </td>
                            <td class="py-4 px-6">
                                <!-- {{ $rent->image_path }} -->
                            </td>
                            <td class="py-4 px-6 flex text-white">
                                <button wire:click="no({{ $rent->id }})" class="border p-3 bg-blue-600 ">
                                    استرجاع
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>