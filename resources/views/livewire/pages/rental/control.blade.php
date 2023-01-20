<div class="p-12 ">
    <div class="mb-4 border-b border-gray-200 ">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 " id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                    طلبات التاجير</button>
            </li>
            <li class="mr-2" role="presentation">
                <button @click="accebted" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 " id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">
                    المقبولة</button>
            </li>
            <li role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 " id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">
                    المرفوضة</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden px-4   " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <body class="flex items-center justify-center">
                <div class="container">
                    <table class="w-full text-center flex flex-row flex-no-wrap sm:bg-white  overflow-hidden my-5">
                        <thead class="text-white text-center">
                            @foreach ($rents as $rent)
                            <tr class="bg-black border flex flex-col text-center  flex-no wrap sm:table-row   mb-2 sm:mb-0">
                                <th class="p-3 "> .. </th>
                                <th class="p-3 ">الموقع</th>
                                <th class="p-3 ">السيارة</th>
                                <th class="p-3 ">الاسم</th>
                                <th class="p-3 ">الايميل</th>
                                <th class="p-3 "> تاريخ التاجير
                                </th>
                                <th class="p-3 "> تاريخ الاعادة
                                </th>
                                <th class="p-3 "> رقم الهاتف
                                </th>
                                <th class="p-3 ">
                                    رخصة القيادة
                                </th>
                                <th class="p-3 "> ..
                                </th>
                            </tr>
                            @endforeach
                        </thead>
                        <tbody class="flex-1 sm:flex-none">
                            @forelse ($rents as $rent)
                            <tr class="flex flex-col flex-no wrap border sm:table-row mb-2 sm:mb-0">
                                <td class="border-grey-light border hover:bg-gray-100 p-3"><img class="h-10 w-10 rounded-full" src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                                </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $rent->location }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->car->type}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->user->name}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->user->email}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $rent->rent_date }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $rent->return_date }}
                                </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $rent->phone_num }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">
                                    <div class="square relative">
                                        <img class="hidden" src="{{ asset($rent->image_path) }}">
                                        <div class="">
                                            <a href="{{ asset($rent->image_path) }}" target="_blank">
                                                <i class="fa-solid fa-file-image"></i>
                                            </a>
                                        </div>
                                </td>
                                <td class="border-grey-light border text-white hover:bg-gray-100 p-3"> <button wire:click="accebted({{ $rent->id }})" class="border p-3 bg-blue-600 ">
                                        قبول
                                    </button>
                                    <button wire:click="rejected({{ $rent->id }})" class="border p-3 bg-red-600">
                                        رفض
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="border-grey-light border hover:bg-gray-100 p-3">لا يوجد
                                    اي تاجيرات</td>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </body>
        </div>
        <div class="hidden px-4 " id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <body class="flex items-center justify-center">
                <div class="container">
                    <table class="w-full text-center flex flex-row flex-no-wrap sm:bg-white  overflow-hidden my-5">
                        <thead class="text-white text-center">
                            @foreach ($rents1 as $rent)
                            <tr class="bg-black flex border flex-col text-center  flex-no wrap sm:table-row   mb-2 sm:mb-0">
                                <th class="p-3 "> .. </th>
                                <th class="p-3 ">الموقع</th>
                                <th class="p-3 ">السيارة</th>
                                <th class="p-3 ">الاسم</th>
                                <th class="p-3 ">الايميل</th>
                                <th class="p-3 "> تاريخ التاجير
                                </th>
                                <th class="p-3 "> تاريخ الاعادة
                                </th>
                                <th class="p-3 "> رقم الهاتف
                                </th>
                                <th class="p-3 ">
                                    رخصة القيادة
                                </th>
                                <th class="p-3 "> ..
                                </th>
                            </tr>
                            @endforeach
                        </thead>
                        <tbody class="flex-1 sm:flex-none">
                            @forelse ($rents1 as $rent)
                            <tr class="flex flex-col border flex-no wrap sm:table-row mb-2 sm:mb-0">
                                <td class="border-grey-light border hover:bg-gray-100 p-3"><img class="h-10 w-10 rounded-full" src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                                </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $rent->location }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->car->type}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->user->name}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->user->email}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $rent->rent_date }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $rent->return_date }}
                                </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $rent->phone_num }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">
                                    <div class="square relative">
                                        <img class="hidden" src="{{ asset($rent->image_path) }}">
                                        <div class="">
                                            <a href="{{ asset($rent->image_path) }}" target="_blank">
                                                <i class="fa-solid fa-file-image"></i>
                                            </a>
                                        </div>
                                </td>
                                <td class="border-grey-light border text-white hover:bg-gray-100 p-3">
                                    <button wire:click="rejected({{ $rent->id }})" class="border p-3 bg-red-600">
                                        رفض
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="border-grey-light border hover:bg-gray-100 p-3">لا يوجد
                                    اي تاجيرات</td>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </body>
        </div>
        <div class="hidden px-4 " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <body class="flex items-center justify-center">
                <div class="container">
                    <table class="w-full text-center flex flex-row flex-no-wrap sm:bg-white  overflow-hidden my-5">
                        <thead class="text-white text-center">
                            @foreach ($rents2 as $rent)
                            <tr class="bg-black flex flex-col text-center  flex-no wrap sm:table-row   mb-2 sm:mb-0">
                                <th class="p-3 "> .. </th>
                                <th class="p-3 ">الموقع</th>
                                <th class="p-3 ">السيارة</th>
                                <th class="p-3 ">الاسم</th>
                                <th class="p-3 ">الايميل</th>
                                <th class="p-3 "> تاريخ التاجير
                                </th>
                                <th class="p-3 "> تاريخ الاعادة
                                </th>
                                <th class="p-3 "> رقم الهاتف
                                </th>
                                <th class="p-3 ">
                                    رخصة القيادة
                                </th>
                                <th class="p-3 "> ..
                                </th>
                            </tr>
                            @endforeach
                        </thead>
                        <tbody class="flex-1 sm:flex-none">
                            @forelse ($rents2 as $rent)
                            <tr class="flex flex-col border flex-no wrap sm:table-row mb-2 sm:mb-0">
                                <td class="border-grey-light border hover:bg-gray-100 p-3"><img class="h-10 w-10 rounded-full" src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif">
                                </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $rent->location }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->car->type}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->user->name}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{$rent->user->email}} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $rent->rent_date }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">{{ $rent->return_date }}
                                </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3"> {{ $rent->phone_num }} </td>
                                <td class="border-grey-light border hover:bg-gray-100 p-3">
                                    <div class="square relative">
                                        <img class="hidden" src="{{ asset($rent->image_path) }}">
                                        <div class="">
                                            <a href="{{ asset($rent->image_path) }}" target="_blank">
                                                <i class="fa-solid fa-file-image"></i>
                                            </a>
                                        </div>
                                </td>
                                <td class="border-grey-light border text-white hover:bg-gray-100 p-3"> <button wire:click="no({{ $rent->id }})" class="border p-3 bg-blue-600 ">
                                        استرجاع </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="10" class="border-grey-light  border hover:bg-gray-100 p-3">لا يوجد
                                    اي تاجيرات</td>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </body>
        </div>
    </div>
</div>

<style scoped>
    html,
    body {
        height: 100%;
    }

    @media (min-width: 640px) {
        table {
            display: inline-table !important;
        }

        thead tr:not(:first-child) {
            display: none;
        }
    }

    td:not(:last-child) {
        border-bottom: 0;
    }

    th:not(:last-child) {
        border-bottom: 2px solid rgba(0, 0, 0, .1);
    }
</style>