<!DOCTYPE html>
<html>

<head>
    <title>Proposal PKM</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        table,
        th,
        td {
            border: 1pt solid black;
            padding: 5px;
            font-size: 12pt;
        }

        .page-break {
            page-break-after: always;
        }

        p {
            font-size: 12pt;
        }
    </style>
</head>

<body>

    <p>1. Judul Proposal : {{ $proposal->judul }}</p>
    <p>2. Bidang Fokus : {{ $proposal->bidang_fokus }}</p>
    <p>3. Skema : {{ $proposal->skema }}</p>
    <p>4. Identitas Pengusul</p>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIDN/NUPTK</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proposal->daftarPengusul as $pengusul)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengusul->nama_pengusul ?? '' }}</td>
                    <td>{{ $pengusul->nidn_nuptk ?? '' }}</td>
                    <td>{{ $pengusul->program_studi ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>5. Mitra</p>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Peran / Bidang Kerjasama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proposal->mitra as $partner)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $partner->nama_mitra ?? '' }}</td>
                    <td>{{ $partner->alamat ?? '' }}</td>
                    <td>{{ $partner->peran ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>5. Target SDGs: {{ $proposal->target_sdgs ?? '' }}</p>

    <p>6. Pendahuluan: {{ $proposal->pendahuluan ?? '' }}</p>

    <p>7. Permasalahan dan Solusi: {{ $proposal->permasalahan ?? '' }}</p>

    <p>8. Metode: {{ $proposal->metode ?? '' }}</p>

    <p>9. Gambaran IPTEKS: {{ $proposal->gambaran_ipteks ?? '' }}</p>


</body>

</html>
