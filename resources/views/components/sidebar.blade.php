<div class="w-[250px] z-40 h-full py-5 px-0 fixed overflow-x-hidden overflow-y-scroll myscroll top-0 left-0 shadow-md transition duration-500 lg:translate-x-0 bg-white"
    :class="open ? 'translate-x-0 ease-in' : '-translate-x-64 ease-out'">
    <div class="px-4 space-y-2">
        <button @click="open = false"
            class="absolute p-1 text-white transition duration-500 transform border-2 rounded-full shadow-md bg-slate-600 right-5 top-5 border-slate-700 hover:bg-slate-500 focus:bg-slate-500 lg:invisible">
            <svg style="width: 24px; height: 24px" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
            </svg>
        </button>
        <h1 class="block py-8 text-2xl font-bold text-slate-500">{{ auth()->user()->name }}</h1>

        <x-sidebar-link :href="__('dashboard')" :label="__('dashboard')" />
        <x-sidebar-link :href="__('data-pendaftar')" :label="__('data pendaftar')" />
        <x-sidebar-link :href="__('input-pendaftar')" :label="__('input pendaftar')" />
        <x-sidebar-link :href="__('input-agama')" :label="__('input agama')" />
        <x-sidebar-link :href="__('input-micro')" :label="__('input micro teaching')" />
        <x-sidebar-link :href="__('input-wawancara')" :label="__('input wawancara')" />
        <x-sidebar-link :href="__('hasil')" :label="__('hasil seleksi')" />

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button
                class="relative font-bold flex items-center p-2 space-x-2 rounded-md text-slate-600 cursor-pointer hover:bg-slate-400 hover:text-white hover:shadow-lg hover:shadow-slate-300 hover:border-white hover:border"
                type="submit">Log Out</button>
        </form>

    </div>
</div>
