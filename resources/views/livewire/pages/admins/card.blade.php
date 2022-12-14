{{-- <div >
    <div class="py-4 px-2 rounded-xl transition duration-300 mx-auto border border-gray-300 hover:shadow-md hover:bg-gray-50">
        <div class="">
            <img src="@if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }}@elseif($item->gender == 1) {{ asset('/img/profile_woman.png') }} @elseif($item->gender != 1) {{ asset('/img/profile_man.png') }} @endif"
                class="mx-auto h-48" />
        </div>
        <div class="text-center">
            <h3 class="text-center text-3xl font-semibold mt-4">{{ $item->name }}</h3>
            <span class="text-sm">
                @if ($item->type == 1)
                طالب - @if ($item->student->department == 1)
                علوم
                @else
                نظم
                @endif
                - @if ($item->student->study_type == 1)
                صباحي
                @else
                مسائي
                @endif
                - @if ($item->student->stage == 1)
                أولى
                @elseif($item->student->stage == 2)
                ثانية
                @elseif($item->student->stage == 3)
                ثالثة
                @else
                رابعة
                @endif
                - @if ($item->student->division == 1)
                A
                @elseif($item->student->stage == 2)
                B
                @elseif($item->student->stage == 3)
                C
                @elseif($item->student->stage == 4)
                D
                @else
                E
                @endif
                @elseif($item->type == 2)
                تدريسي
                @elseif($item->type == 3)
                موظف
                @elseif($item->type == 4)
                من خارج الكلية
                @endif
            </span>
        </div>
        <ul class="mt-12 mb-8 flex justify-evenly text-center text-2xl">
            <li class="flex flex-col"><span class="mb-2">سهم</span> {{ $item->get_shares }}</li>
            <li class=" flex flex-col"><span class="mb-2">مبلغ</span> {{ $item->get_shares * 2000}}</li>

        </ul>
        @superAdmin
        <div class="text-center">
            <button wire:click="confirm_downgrade()" type="button"
                class="rounded-xl mb-2  bg-gradient-to-r from-red-400 to-red-500 hover:bg-gradient-to-br px-20 py-2 text-white">تخفيض
                المدير</button>
        </div>
        @endsuperAdmin
    </div>

</div> --}}





<div class="center">
    <div class="card green">
        <div class="additional">
            <div class="user-card">
                
                <img width="110" height="110" class="absolute top-16 right-3 rounded-full imm"
                    src="
                @if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }} @else
                {{ asset('/img/man.jpg') }} @endif
                " />
            </div>
            <div class="more-info">
                <button wire:click="confirm_downgrade()" type="button"
                    class="rounded-xl  text-xl  w-full px-20 py-2 text-white">تخفيض
                    الموظف</button>
            </div>
        </div>
        <div class="general" class="">
            <h1 class="text-2xl mt-12 mb-4">{{ $item->name }}</h1>
            <div class="coords ">
                <h1> تليكرام {{ $item->telegram_username }}</h1>
                <h1> الهاتف {{ $item->phone_number }} </h1>
            </div>
            <div class="coords ">
                <h1> الايميل {{ $item->email }}</h1>
                <h1>انضم منذ {{ $item->created_at }} </h1>
            </div>
        </div>
    </div>
</div>
<style scoped>
    .center {
        position: relative;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
    }

    .card {
        width: 450px;
        height: 250px;
        background-color: #fff;
        background: linear-gradient(#f8f8f8, #fff);
        box-shadow: 0 8px 16px -8px rgba(0, 0, 0, 0.4);
        border-radius: 6px;
        overflow: hidden;
        position: relative;
        margin: 1.5rem;
    }

    .card h1 {
        text-align: center;
    }

    .card .additional {
        position: absolute;
        width: 150px;
        height: 100%;
        background: linear-gradient(#dE685E, #EE786E);
        transition: width 0.4s;
        overflow: hidden;
        z-index: 2;
    }

    .card.green .additional {
        background: linear-gradient(#df3a1dd5, #dE685E);
    }


    .card:hover .additional {
        width: 100%;
        border-radius: 0 5px 5px 0;
    }

    .card .additional .user-card {
        width: 150px;
        height: 100%;
        position: relative;
        float: left;
    }

    .card .additional .user-card::after {
        content: "";
        display: block;
        position: absolute;
        top: 10%;
        right: -2px;
        height: 80%;
        border-left: 2px solid rgba(0, 0, 0, 0.025);
        */
    }

    .card .additional .user-card .level,
    .card .additional .user-card .points {
        top: 15%;
        color: #fff;
        text-transform: uppercase;
        font-size: 0.75em;
        font-weight: bold;
        background: rgba(0, 0, 0, 0.15);
        padding: 0.125rem 0.75rem;
        border-radius: 100px;
        white-space: nowrap;
    }

    .card .additional .user-card .points {
        top: 85%;
    }

    .card .additional .user-card svg {
        top: 50%;
    }

    .card .additional .more-info {
        width: 300px;
        float: left;
        top: 90px;
        position: absolute;
        left: 150px;
        height: 10%;
    }


    .card .additional .coords {
        margin: 0 1rem;
        color: #fff;
        font-size: 1rem;
    }

    .card.green .additional .coords {
        color: #325C46;
    }

    .card .additional .coords span+span {
        float: right;
    }

    .card .additional .stats {
        font-size: 2rem;
        display: flex;
        position: absolute;
        bottom: 1rem;
        left: 1rem;
        right: 1rem;
        top: auto;
        color: #fff;
    }

    .card.green .additional .stats {
        color: #325C46;
    }

    .card .additional .stats>div {
        flex: 1;
        text-align: center;
    }

    .card .additional .stats i {
        display: block;
    }

    .card .additional .stats div.title {
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .card .additional .stats div.value {
        font-size: 1.5rem;
        font-weight: bold;
        line-height: 1.5rem;
    }

    .card .additional .stats div.value.infinity {
        font-size: 2.5rem;
    }

    .card .general {
        width: 300px;
        height: 100%;
        position: absolute;
        justify-items: center;
        align-items: center;
        top: 10px;
        left: 0;
        z-index: 1;
        box-sizing: border-box;
        padding: 1rem;
        padding-top: 0;
    }

    .card .general .more {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        font-size: 0.9em;
    }
</style>
