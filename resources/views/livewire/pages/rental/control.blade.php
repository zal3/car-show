<div class="p-12">
    <div class="flex w-full grow">
        @foreach ($tabs as $tab)
        <button @click="updatedSelectedTab" class="p-3 border border-opacity-40  text-gray-700">
            {{ $tab }}
        </button>
        @endforeach
    </div>
    <div>
        <div
            class="overflow-x-auto w-fit relative  sm:rounded-lg mt-9  flex justify-center  items-center m-auto">
            <table class="w-6/7 text-sm text-center text-left text-gray-500  ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            الموقع </th>
                        <th scope="col" class="py-3 px-6">
                            تاريخ التاجير </th>
                        <th scope="col" class="py-3 px-6">
                            تاريخ الاعادة </th>
                        <th scope="col" class="py-3 px-6">
                            رقم الهاتف </th>
                        <th scope="col" class="py-3 px-6">
                            رخصة القيادة </th>
                    </tr>
                </thead>
                @foreach ($rents as $rent)
                <tbody>
                    <tr class="bg-white border-b  ">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                            {{ $rent->location }}
                        </th>
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
                            {{ $rent->image_path }}
                        </td>

                    </tr>
                </tbody>
                @endforeach
                <!-- {{$rents->car()->type}} -->
            </table>
        </div>
    </div>
</div>