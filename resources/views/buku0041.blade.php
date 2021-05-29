<!DOCTYPE html>
<html>
<head>
<title>Buku</title>
</head>
<body>
    <h2>Gito Pramana Karya</h2>
    <h3>Buku</h3>
    <table border="1">
<tr>
<th>Id Buku</th>
<th>Judul Buku</th>
<th>Kategori</th>
<th>Deskripsi</th>
<th>Jumlah Buku</th>
<th>Cover</th>
</tr>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->buku_id }}</td>
    <td>{{ $p->buku_judul }}</td>
    <td>{{ $p->kategori_id }}</td>
    <td>{{ $p->buku_deskripsi }}</td>
    <td>{{ $p->buku_jumlah }}</td>
    <td>{{ $p->buku_cover }}</td>
    </tr>
@endforeach
</table>
</body>
</html>