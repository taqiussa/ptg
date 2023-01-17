<div>
    <x-card class="flex space-y-4 flex-col ">
        <h2 class="mt-3 text-xl font-bold text-slate-600">Seleksi Wawancara</h2>
        <form wire:submit.prevent="simpan" class="space-y-5">
            <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
                <x-select label="Nama" wire:model="pendaftar_id" placeholder="Pilih Nama" :async-data="route('pendaftar')"
                    option-label="nama" option-value="id" />
                <x-input type="number" wire:model.defer="motivasi" label="Motivasi memilih profesi guru" corner-hint="(skor 1-10)" />
                <x-input type="number" wire:model.defer="kiat" label="Kiat-kiat menjadi guru" corner-hint="(skor 1-10)" />
                <x-input type="number" wire:model.defer="mengatasi" label="Cara Mengatasi siswa bodoh, nakal, dan Malas"
                    corner-hint="(skor 1-10)" />
            </div>
            <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
                <x-input type="number" wire:model.defer="memperlakukan" label="Cara memperlakukan siswa pintar dan kreatif"
                    corner-hint="(skor 1-10)" />
                <x-input type="number" wire:model.defer="bekerja" label="Apa bedanya bekerja dan berjuang" corner-hint="(skor 1-10)" />
                <x-input type="number" wire:model.defer="gaji" label="Apa perbedaan antara gaji dan rizki" corner-hint="(skor 1-10)" />
                <x-input type="number" wire:model.defer="bakat" label="Bakat wajib : Komputer dan Sepeda Motor (punya SIM C). dan Bakat lain" corner-hint="(skor 1-10)" />
            </div>
            <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
                <x-input type="number" wire:model.defer="taat" label="Sanggup mentaati segala peraturan Sekolahan dan menjaga nama baik sekolahan beserta yayasan Al Musyaffa'" corner-hint="(skor 1-10)" />
                <x-input type="number" wire:model.defer="fisik" label="Penampilan FIsik" corner-hint="(skor 1-10)" />
                <x-input type="number" wire:model.defer="kecakapan" label="Kecakapan dalam Menjawab"
                    corner-hint="(skor 1-10)" />
                <x-input wire:model.defer="catatan" label="Catatan" />
            </div>
            <div class="flex justify-end">
                <x-button secondary wire:click.prevent="simpan" type="submit" label="Simpan" />
            </div>
        </form>
    </x-card>
</div>
