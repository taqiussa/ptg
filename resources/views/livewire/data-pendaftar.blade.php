<div>
    <div class="my-3 lg:grid lg:grid-cols-4 space-y-3 lg:space-y-0 space-x-3">
        <x-input wire:model.debounce.500ms="search" icon="search" placeholder="Cari ..." class="text-slate-600" />
        <x-native-select wire:model='mapel'>
            <option value="">Pilih Kategori Pendaftar</option>
            @foreach ($listMapel as $mapel)
                <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
            @endforeach
        </x-native-select>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Jenis Kelamin dan Status
                    </th>
                    <th scope="col" class="py-3 px-6">
                        TTL dan Usia
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Alamat
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Pendidikan dan prodi
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Kampus
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listPendaftar as $pendaftar)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-300 capitalize">
                        <td scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pendaftar->nama }}
                        </td>
                        <td scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $pendaftar->jenis_kelamin }} - {{ $pendaftar->status }}
                        </td>
                        <td scope="row"
                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $pendaftar->tempat_lahir }}, {{ Carbon\Carbon::parse($pendaftar->tanggal_lahir)->translatedFormat('d F Y'); }}
                    </td>
                    <td scope="row"
                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $pendaftar->alamat }}
                    </td>
                    <td scope="row"
                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $pendaftar->pendidikan }} - 
                        {{ $pendaftar->prodi }}
                    </td>
                    <td scope="row"
                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $pendaftar->kampus }}
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
