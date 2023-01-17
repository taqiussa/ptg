<div>
    <x-card class="flex space-y-4 flex-col">
        <h2 class="mt-3 text-xl font-bold text-slate-600">Input Data Calon Guru / Karyawan</h2>
        <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
            <x-input wire:model.defer="nama" label="Nama Calon Guru / Karyawan" />
            <x-native-select wire:model.defer='mata_pelajaran_id' label="Sebagai Guru / Karyawan">
                <option value="">Pilih</option>
                @foreach ($listMapel as $mapel)
                    <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
                @endforeach
            </x-native-select>
            <x-native-select wire:model.defer='jenis_kelamin' label="Jenis Kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </x-native-select>
            <x-input wire:model.defer="usia" label="Usia" />
        </div>
        <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
            <x-input wire:model.defer="tempat_lahir" label="Tempat Lahir" />
            <x-input wire:model.defer="tanggal_lahir" label="Tanggal Lahir" type="date" />
            <x-native-select wire:model.defer='status' label="Status">
                <option value="">Pilih Status</option>
                <option value="kawin">Kawin</option>
                <option value="belum kawin">Belum Kawin</option>
            </x-native-select>
            <x-input wire:model.defer="alamat" label="Alamat" />
        </div>
        <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
            <x-input wire:model.defer="pendidikan" label="Pendidikan Terakhir" />
            <x-input wire:model.defer="prodi" label="Program Studi" />
            <x-input wire:model.defer="jurusan" label="Jurusan" />
            <x-input wire:model.defer="kampus" label="Nama Kampus" />
        </div>
        <div class="lg:grid lg:grid-cols-4 lg:gap-2 lg:space-y-0 flex flex-col space-y-4">
            <x-input wire:model.defer="foto" label="Upload Foto" class="font-bold" type="file" />
            @if ($foto)
                <div class="h-36 border border-slate-400 flex justify-center">
                    <img src="{{ $foto->temporaryUrl() }}" alt="logo">
                </div>
            @endif
        </div>
        <div wire:loading.remove wire:target="foto" class="flex justify-end">
            <x-button wire:click.prevent="simpan" secondary label="simpan" spinner="simpan" loading-delay="short"
                class="w-auto" />
        </div>
    </x-card>
</div>
