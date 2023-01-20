<div class="flex justify-center items-center mx-auto w-3/4">
    <body class="flex items-center justify-center ">
        <div class="container">
            <table class="text-center w-full flex flex-row flex-no-wrap sm:bg-white  overflow-hidden  my-5">
                <thead class="text-white">
                    <tr class="bg-gray-900 flex flex-col flex-no wrap sm:table-row   justify-center  items-center  text-center mb-2 sm:mb-0">
                        <th class="p-1">
                            no </th>
                        <th class="p-1">
                            الاسم </th>
                        <th class="p-1">
                            الايميل </th>
                        <th class="p-1">
                            العنوان </th>
                        <th class="p-1">
                            الموضوع </th>
                    </tr>
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @foreach ($contacts as $contact)
                    <tr class="flex flex-col flex-no     wrap border-b sm:table-row  hover:bg-gray-200">
                        <td class="py-4 "> {{ $contact->id }} </td>
                        <td class=""> {{ $contact->name }} </td>
                        <td class=""> {{ $contact->email }} </td>
                        <td class=""> {{ $contact->title }} </td>
                        <td class=""> {{ $contact->subject }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</div>
<style scoped>
    .overlay {
        background: rgba(0, 0, 0, 0);
        transition: background 0.5s ease;
    }

    .container:hover .overlay {
        display: block;
        background: rgba(0, 0, 0, .3);
    }

    .title {

        text-align: center;
        text-transform: uppercase;
        z-index: 1;
        transition: top .5s ease;
    }

    .container:hover .title {
        top: 90px;
    }

    .button {
        transition: opacity .35s ease;
    }

    .button a {
        z-index: 1;
    }

    .container:hover .button {
        opacity: 1;
    }


    @media (min-width: 640px) {
        table {
            display: inline-table !important;
        }

        thead tr:not(:first-child) {
            display: none;
        }
    }
</style>