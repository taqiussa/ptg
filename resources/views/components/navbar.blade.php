<div class="sticky z-30 top-0 p-2 mb-2 shadow-lg bg-gradient-to-r from-yellow-400 via-orange-400 to-red-600 shadow-yellow-300">
    <div class="grid grid-cols-2">
        <button @click="open = true"
            class="flex items-center self-center py-1 pr-2 ml-2 font-bold text-white transition duration-500 transform border-2 border-red-800 rounded-xl bg-red-600 hover:bg-red-500 focus:bg-red-500 place-self-start lg:invisible">
            <svg style="width: 24px; height: 24px" viewBox="0 0 24 24">
                <path fill="currentColor" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
            </svg>
            Menu
        </button>
        <div class="flex items-center justify-end mr-2 space-x-1 place-self-end">
            <img src="{{ asset('images/logoalfa2.png') }}" alt="logo" class="w-12 h-12 lg:w-16 lg:h-16" />
        </div>
    </div>
</div>