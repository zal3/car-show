<div class="overflow-hidden">
    <div class="px-4 md:px-8 xl:px-12   bg-white text-gray-800 ">
        <div class="flex justify-between mt-6 md:mt-6 pt-9">
            <h2 class="text-center font-semibold text-xl md:text-xl xl:text-4xl">فريق العمل </h2>
            {{-- add committee --}}
            @if (auth()->user()->id == 1)
            <div class="cursor-pointer justify-center xl:mr-4 flex">
                <a href="{{ route('addadmin') }}"
                    class="text-black text-md xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-gray-500 hover:text-primary-500 focus:ring-4 focus:ring-primary-300 rounded-lg px-3 py-2 md:px-5 md:py-2.5">
                    <i class="fa-solid fa-plus"></i>
                    إضافة عضو
                </a>
            </div>
            @endif
        </div>
        <div class="w-5/6 m-auto grid grid-cols-1 lg:grid-cols-2 justify-center items-center  ">
            @forelse($admins as $item)
            <livewire:pages.admins.card :item="$item" key="{{ now() }}" />
            @empty
            <div class="text-2xl font-medium text-gray-700">
                لايوجد فريق
            </div>
            @endforelse
        </div>
    </div>
</div>