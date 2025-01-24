<x-app-layout>
    <div class="container border mx-auto my-5 bg-white rounded-xl p-4">
        <div class="flex items-center justify-between mb-4">
            <div class="flex flex-col">
                <h1 class="font-semibold text-2xl">Buat Proposal PKM</h1>
                <span class="text-slate-500 text-sm">Silahkan isi form berikut untuk membuat laporan PKM.</span>
            </div>
        </div>

        <form action="{{ route('proposal-pkm-save') }}" method="POST">
            @csrf
            <div class="grid grid-cols-4 gap-4">
                <!-- Judul Proposal -->
                <div class="col-span-4">
                    <label for="judul" class="block text-sm font-medium mb-2 dark:text-white">Judul Proposal</label>
                    <input type="text" name="judul" id="judul"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        placeholder="Judul Proposal...">
                </div>

                <!-- Bidang Fokus -->
                <div class="col-span-2">
                    <label for="bidang_fokus" class="block text-sm font-medium mb-2 dark:text-white">Bidang
                        Fokus</label>
                    <input type="text" name="bidang_fokus" id="bidang_fokus"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Bidang Fokus...">
                </div>

                <!-- Skema -->
                <div class="col-span-2">
                    <label for="skema" class="block text-sm font-medium mb-2 dark:text-white">Skema</label>
                    <input type="text" name="skema" id="skema"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Skema...">
                </div>

                <!-- Identitas Pengusul -->
                <div class="col-span-4">
                    <div class="flex justify-between items-center">
                        <label class="block text-sm font-medium mb-2 dark:text-white">Identitas
                            Pengusul</label>
                        <button type="button" onclick="addRow('#tablePengusul', 'elementPengusul')"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-2 py-1 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 flex gap-2 items-center">
                            <span>Tambah Pengusul</span>
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="border rounded-lg overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200" id="tablePengusul">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    No</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                    Nama</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                    NIDN/NUPTK</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                    Program Studi</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    1</td>
                                                <td class=" whitespace-nowrap text-sm font-medium text-gray-800">
                                                    <input type="text" name="nama_pengusul[]" id="nama"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                                        placeholder="nama...">
                                                </td>
                                                <td class=" whitespace-nowrap text-sm text-gray-800">
                                                    <input type="text" name="nidn_nuptk[]" id="NIDN/UPTK"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                                        placeholder="NIDN/UPTK...">
                                                </td>
                                                <td class=" whitespace-nowrap text-sm text-gray-800">
                                                    <input type="text" name="program_studi[]" id="program_studi"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                                        placeholder="program studi...">
                                                </td>
                                                <td class=" whitespace-nowrap text-end text-sm font-medium">
                                                    <div class="flex items-center justify-center">

                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mitra -->
                <div class="col-span-4">
                    <div class="flex justify-between items-center">
                        <label class="block text-sm font-medium mb-2 dark:text-white">Mitra</label>
                        <button type="button" onclick="addRow('#tableMitra', 'elementMitra')"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-2 py-1 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700 flex gap-2 items-center">
                            <span>Tambah Mitra</span>
                            <ion-icon name="add-circle-outline"></ion-icon>
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="border rounded-lg overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200" id="tableMitra">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    No</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                    Nama</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                    Alamat</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                    Peran / Bidang Kerjasama</th>
                                                <th scope="col"
                                                    class="text-start text-xs font-medium text-gray-500 uppercase">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    1</td>
                                                <td class=" whitespace-nowrap text-sm font-medium text-gray-800">
                                                    <input type="text" name="nama_mitra[]" id="namamitra"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                                        placeholder="nama mitra...">
                                                </td>
                                                <td class=" whitespace-nowrap text-sm text-gray-800">
                                                    <input type="text" name="alamat[]" id="Alamat"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                                        placeholder="Alamat...">
                                                </td>
                                                <td class=" whitespace-nowrap text-sm text-gray-800">
                                                    <input type="text" name="peran[]" id="perankerjasamamitra"
                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                                                        placeholder="Peran/ Bidang Kerjasama Mitra...">
                                                </td>
                                                <td class=" whitespace-nowrap text-end text-sm font-medium">
                                                    <div class="flex items-center justify-center">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Target SDGs -->
                <div class="col-span-4">
                    <label for="target_sdgs" class="block text-sm font-medium mb-2 dark:text-white">Target
                        SDGs</label>
                    <input type="text" name="target_sdgs" id="target_sdgs"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Target SDGs...">
                </div>

                <!-- Pendahuluan -->
                <div class="col-span-4">
                    <label for="pendahuluan"
                        class="block text-sm font-medium mb-2 dark:text-white">Pendahuluan</label>
                    <textarea name="pendahuluan" id="pendahuluan"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukkan Pendahuluan..."></textarea>
                </div>

                <!-- Permasalahan dan Solusi -->
                <div class="col-span-4">
                    <label for="permasalahan" class="block text-sm font-medium mb-2 dark:text-white">Permasalahan dan
                        Solusi</label>
                    <textarea name="permasalahan" id="permasalahan"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukkan Permasalahan dan Solusi..."></textarea>
                </div>

                <!-- Metode -->
                <div class="col-span-4">
                    <label for="metode" class="block text-sm font-medium mb-2 dark:text-white">Metode</label>
                    <textarea name="metode" id="metode"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukkan Metode..."></textarea>
                </div>

                <!-- Gambaran IPTEKS -->
                <div class="col-span-4">
                    <label for="gambaran_ipteks" class="block text-sm font-medium mb-2 dark:text-white">Gambaran
                        IPTEKS</label>
                    <textarea name="gambaran_ipteks" id="gambaran_ipteks"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Masukkan Gambaran IPTEKS..."></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-span-4 flex justify-end">
                    <button
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Simpan
                        & Buat PDF</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        const element = {
            elementPengusul: `
        <tr>
            <td
                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                1</td>
            <td class=" whitespace-nowrap text-sm font-medium text-gray-800">
                <input type="text" name="nama_pengusul[]" id="nama"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="nama...">
            </td>
            <td class=" whitespace-nowrap text-sm text-gray-800">
                <input type="text" name="nidn_nuptk[]" id="NIDN/UPTK"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="NIDN/UPTK...">
            </td>
            <td class=" whitespace-nowrap text-sm text-gray-800">
                <input type="text" name="program_studi[]" id="program_studi"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="program studi...">
            </td>
            <td class=" whitespace-nowrap text-end text-sm font-medium">
                <div class="flex items-center justify-center">
                    <button type="button" onclick="removeRow(this, '#tablePengusul')"
                        class="w-8 h-8 rounded-full bg-red-200 text-red-600 text-xl flex items-center justify-center">
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </button>
                </div>
            </td>
        </tr>`,
            elementMitra: `
        <tr>
            <td
                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                1</td>
            <td class=" whitespace-nowrap text-sm font-medium text-gray-800">
                <input type="text" name="nama_mitra[]" id="namamitra"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="nama mitra...">
            </td>
            <td class=" whitespace-nowrap text-sm text-gray-800">
                <input type="text" name="alamat[]" id="Alamat"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Alamat...">
            </td>
            <td class=" whitespace-nowrap text-sm text-gray-800">
                <input type="text" name="peran[]" id="perankerjasamamitra"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Peran/ Bidang Kerjasama Mitra...">
            </td>
            <td class=" whitespace-nowrap text-end text-sm font-medium">
                <div class="flex items-center justify-center">
                    <button type="button" onclick="removeRow(this, '#tableMitra')"
                        class="w-8 h-8 rounded-full bg-red-200 text-red-600 text-xl flex items-center justify-center">
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </button>
                </div>
            </td>
        </tr>
        `
        }

        function addRow(tabelId, ketElement) {
            $(`${tabelId} tbody`).append(element[ketElement]);
            updateNumberTable('#tablePengusul')
        }

        function updateNumberTable(tabelId) {
            const rows = document.querySelector(tabelId).querySelectorAll('tr');
            rows.forEach((row, index) => {
                const firstTd = row.querySelector('td');
                if (firstTd) {
                    firstTd.textContent = index;
                }
            });
        }

        function removeRow(button, tabelId) {
            const td = button.closest('td');
            const tr = td.closest('tr');
            tr.remove();
            updateNumberTable(tabelId)
        }
    </script>
</x-app-layout>
