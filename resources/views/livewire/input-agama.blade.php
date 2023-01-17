<div>
    <x-card class="flex space-y-4 flex-col ">
        <h2 class="mt-3 text-xl font-bold text-slate-600">Seleksi Agama</h2>
        <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
            <x-select label="Nama" wire:model="pendaftar_id" placeholder="Pilih Nama" :async-data="route('pendaftar')"
                option-label="nama" option-value="id" />
            <x-input type="number" wire:model.defer="tajwid" label="Tajwid Al Qur'an"  corner-hint="(10 - 25)" />
            <x-input type="number" wire:model.defer="kelancaran" label="Kelancaran Al Qur'an" 
                corner-hint="(10 - 25)" />
            <x-input type="number" wire:model.defer="iftitah" label="Do'a Iftitah" 
                corner-hint="(10 - 25)" />
        </div>
        <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
            <x-input type="number" wire:model.defer="qunut" label="Do'a Qunut"  corner-hint="(10 - 25)" />
            <x-input wire:model.defer="catatan" label="Catatan" />
        </div>
    </x-card>
</div>
