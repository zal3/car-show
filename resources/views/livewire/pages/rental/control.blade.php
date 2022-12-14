<div class="p-12">
    <div class="flex w-full grow">
        @foreach ($tabs as $tab)
        <button @click="updatedSelectedTab" class="p-3 border border-opacity-40  text-gray-700">
            {{ $tab }}
        </button>
        @endforeach
    </div>
   

</div>