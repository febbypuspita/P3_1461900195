<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Data Barang</title>
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
        <a class="tambah" href="{{route( 'Barang.create')}}">
Tambah Data </a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($Barang as $barang)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$barang->nama}}</td>
                    <td>{{$barang->harga}}</td>
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
