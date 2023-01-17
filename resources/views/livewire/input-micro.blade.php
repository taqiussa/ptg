<div>
    <x-card class="flex space-y-4 flex-col ">
        <h2 class="mt-3 text-xl font-bold text-slate-600">Seleksi Micro Teaching</h2>
        <form wire:submit.prevent="simpan" class="space-y-5">
            <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
                <x-select label="Nama" wire:model="pendaftar_id" placeholder="Pilih Nama" :async-data="route('pendaftar')"
                    option-label="nama" option-value="id" />
                <x-input type="number" wire:model.defer="rpp" label="Tajwid Al Qur'an" corner-hint="(1 - 25)" />
                <x-input type="number" wire:model.defer="materi" label="Kelancaran Al Qur'an"
                    corner-hint="(1 - 25)" />
                <x-input type="number" wire:model.defer="metode" label="Do'a Iftitah" corner-hint="(1 - 25)" />
            </div>
            <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
                <x-input type="number" wire:model.defer="kelas" label="Tajwid Al Qur'an" corner-hint="(1 - 25)" />
                <x-input type="number" wire:model.defer="rpp_detail" label="Tajwid Al Qur'an"
                    corner-hint="(1 - 20)" />
                <x-input type="number" wire:model.defer="sistematika" label="Kelancaran Al Qur'an"
                    corner-hint="(1 - 10)" />
                <x-input type="number" wire:model.defer="tujuan" label="Do'a Iftitah" corner-hint="(1 - 20)" />
            </div>
            <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
                <x-input type="number" wire:model.defer="karakter" label="Tajwid Al Qur'an" corner-hint="(1 - 10)" />
                <x-input type="number" wire:model.defer="inovatif" label="Tajwid Al Qur'an" corner-hint="(1 - 20)" />
                <x-input type="number" wire:model.defer="kegiatan_inti" label="Kelancaran Al Qur'an"
                    corner-hint="(1 - 20)" />
                <x-input wire:model.defer="catatan" label="Catatan" />
            </div>
            <div class="flex justify-end">
                <x-button secondary wire:click.prevent="simpan" type="submit" label="Simpan" />
            </div>
        </form>
    </x-card>
</div>
