<head>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Data User</title>
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
        <a class="tambah" href="{{route( 'User.create')}}">
Tambah Data </a>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>username</th>
                    <th>password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($User as $User)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$user-nama}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->password}}</td>
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
