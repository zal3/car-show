<div class="p-12">
    <div class="flex w-full grow">
        @foreach ($tabs as $tab)
        <button @click="updatedSelectedTab" class="p-3 border border-opacity-40  text-gray-700">
            {{ $tab }}
        </button>
        @endforeach
    </div>
    <div>
        <div class="overflow-x-auto w-fit  relative   mt-9  flex justify-center  items-center m-auto">
            <table class="w-6/7 text-sm text-center text-left text-gray-500 p-4  ">
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
                                src="@if (auth()->user()->profile_photo_path) {{ asset(auth()->user()->profile_photo_path) }} @else {{ asset('/img/man.jpg') }} @endif"></th>
                            <td class="py-4 px-6">
                            {{ $rent->location }}                        </td>
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
                            <button class="border p-3 bg-blue-600 ">
                                قبول 
                            </button>
                            <button class="border p-3 bg-red-600">
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