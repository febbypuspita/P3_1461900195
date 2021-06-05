<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Data Transaksi</title>
    <style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
    thead {
        background-color: #f2f2f2;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}

    .tambah{
        padding: 8px 16px ;
        text-decoration: none;
    }

    </style>
</head>

<body>
    <div style="overflow-x:auto;">
        <a class="tambah" href="{{route( 'Transaksi.create')}}">
Tambah Data </a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Id_Pelanggan</th>
                    <th>Id_Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($Transaksi as $transaksi)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$transaksi-id_pelanggan}}</td>
                    <td>{{$transaksi->id_barang}}</td>
                    <td>
                        <a href="">Edit </a>
                        |
                        <a href=""> Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
