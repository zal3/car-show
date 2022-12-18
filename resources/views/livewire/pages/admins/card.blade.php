<div class=" relative">
    <div class="card green w-[220px] md:w-[450px] h-[220px] md:h-[250px] bg-[#fff] rounded-md overflow-hidden relative my-6">
        <div class="additional absolute w-[150px] h-[100%] overflow-hidden z-2">
            <div class="user-card w-[150px] h-[100%] relative float-left">
                <img width="110" height="110" class="absolute top-16 right-3 rounded-full imm" src="
                @if ($item->profile_photo_path) {{ asset($item->profile_photo_path) }} @else
                {{ asset('/img/man.jpg') }} @endif
                " />
            </div>
            <div class="more-info w-[300px] float-left top-[90px] absolute left-[150px] h-[10%] ">
                <button wire:click="confirm_downgrade()" type="button"
                    class="rounded-xl  text-xl  w-full px-20 py-2 text-white">تخفيض
                    الموظف</button>
            </div>
        </div>
        <div class="general w-[300px] h-[100%] absolute items-center text-center top-[10px] left-0 z-1 p-6 pt-0">
            <h1 class="text-2xl mt-12 text-center mb-4">{{ $item->name }}</h1>
            <div class="mx-[1em] text-black">
                <h1 class=" text-center"> تليكرام {{ $item->telegram_username }}</h1>
                <h1 class=" text-center"> الهاتف {{ $item->phone_number }} </h1>
            </div>
            <div class="mx-[1em] text-black">
                <h1 class="text-center"> الايميل {{ $item->email }}</h1>
                <h1 class="text-center">انضم منذ {{ $item->created_at }} </h1>
            </div>
        </div>
    </div>
</div>
<style scoped>

.card {
    background: linear-gradient(#f8f8f8, #fff);
    box-shadow: 0 8px 16px -8px rgba(0, 0, 0, 0.4);
}

.card .additional {
    background: linear-gradient(#dE685E, #EE786E);
    transition: width 0.4s;
    z-index: 2;
}

.card.green .additional {
    background: linear-gradient(#df3a1dd5, #dE685E);
}

.card:hover .additional {
    width: 100%;
    border-radius: 0 5px 5px 0;
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
</style>