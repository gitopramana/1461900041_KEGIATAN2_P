<!DOCTYPE html>
<html>
<head>
<title>Kegiatan 2</title>
</head>
<body>
<h2>TUGAS KEGIATAN 2</h2>
<h3>Menampilkan Daftar Anggota Perpustakaan</h3>
<p>Cari anggota :</p>
<form action="/anggota/cari" method="GET">
<input type="text" name="lihat" placeholder="Masukan disini .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<p>Cek Tanggal Peminjaman:</p>
<form action="/anggota/lain" method="GET">
<input type="text" name="lihat" placeholder="Klik disini .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<p>Cari Peminjam :</p>
<form action="/anggota/lainnya" method="GET">
<input type="text" name="lihat" placeholder="Cari disini .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<table border="1">
<tr>
<th>Id</th>
<th>Nama Anggota</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Telepon</th>
</tr>
@foreach($anggota as $t)
<tr>
<td>{{ $t->anggota_id}}</td>
<td>{{ $t->anggota_nama}}</td>
<td>{{ $t->anggota_alamat}}</td>
<td>{{ $t->anggota_jk}}</td>
<td>{{ $t->anggota_telp}}</td>
</tr>
@endforeach
</table>
</body>
</html>