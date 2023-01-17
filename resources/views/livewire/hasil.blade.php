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
                        Agama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Micro Teaching
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Wawancara
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Total
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listPendaftar as $pendaftar)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-300">
                        <td scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex flex-col justify-center items-center">
                                <div>
                                    <img src="{{ asset('storage/' . $pendaftar->foto) }}" alt="foto"
                                    class=" h-20 w-20">
                                </div>
                                <div class="font-bold capitalize">
                                    ({{ $pendaftar->nama }})
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            @foreach ($pendaftar->agama as $agama)
                                Nilai : {{ $agama->nilai }} <br>
                                Catatan : {{ $agama->catatan }} <br>
                                Penilai : {{ $agama->user->name }} <br> <br>
                            @endforeach
                        </td>
                        <td class="py-4 px-6">
                            @foreach ($pendaftar->micro as $micro)
                                Nilai : {{ $micro->nilai }} <br>
                                Catatan : {{ $micro->catatan }} <br>
                                Penilai : {{ $micro->user->name }} <br> <br>
                            @endforeach
                        </td>
                        <td class="py-4 px-6">
                            @foreach ($pendaftar->wawancara as $wawancara)
                                Nilai : {{ $wawancara->nilai }} <br>
                                Catatan : {{ $wawancara->catatan }} <br>
                                Penilai : {{ $wawancara->user->name }} <br> <br>
                            @endforeach
                        </td>
                        <td class="py-4 px-6 flex flex-col space-y-3 items-center">
                            {{ $pendaftar->total }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
