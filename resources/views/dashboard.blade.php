<x-app-layout>
    <div class="container border mx-auto my-5 bg-white rounded-xl p-4">
        <div class="flex items-center justify-between mb-4">
            <div class="flex flex-col">
                <h1 class="font-semibold text-2xl">Data Template Laporan & Proposal</h1>
                <span class="text-slate-500 text-sm">Data Template Laporan & Proposal.</span>
            </div>
            <a href="{{ route('choose-template') }}"
                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Buat
                Document</a>
        </div>

        @if ($data->isEmpty())
            <p class="text-slate-300 font-semibold text-2xl">Tidak ada data pengusul.</p>
        @else
            <table id="pagination-table">
                <thead>
                    <tr>
                        <th>
                            <span class="flex items-center">
                                No
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Judul
                            </span>
                        </th>
                        <th data-type="date" data-format="Month YYYY">
                            <span class="flex items-center">
                                Bidang Fokus
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Skema
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                Action
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                        <tr>
                            <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->bidang_fokus }}</td>
                            <td>{{ $item->skema }}</td>
                            <td>
                                <a href="{{ route('proposal-pkm-pdf', ['id' => $item->id]) }}"
                                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ">
                                    <ion-icon name="document-text-outline" class=" text-base mr-3"></ion-icon>
                                    Print
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
        <script>
            if (document.getElementById("pagination-table") && typeof simpleDatatables.DataTable !== 'undefined') {
                const dataTable = new simpleDatatables.DataTable("#pagination-table", {
                    paging: true,
                    perPage: 5,
                    perPageSelect: [5, 10, 15, 20, 25],
                    sortable: false
                });
            }
        </script>
    </div>
</x-app-layout>
