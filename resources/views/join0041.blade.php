<a href="/anggota" class="text-sm text-gray-700 underline">Klik disini</a>
    <body>
    <h3>Gito Pramana Karya</h3>
    <h3>Dengan Inner Join</h3>
    <p>Cari anggota :</p>
    <form action="/anggota/cari" method="GET">
    <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
    <input type="submit" value="CARI">
    </form>
    <p>Daftar Peminjaman:</p>
    <form action="/anggota/lain" method="GET">
    <input type="text" name="lihat" placeholder="langsung klik tampilkan" value="{{ old('cari') }}">
    <input type="submit" value="Tampilkan">
    </form>
    <p>Cari Peminjam :</p>
    <form action="/anggota/lainnya" method="GET">
    <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
    <input type="submit" value="CARI">
    </form>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Peminjaman</th>
                    <th>No. Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($anggota as $p)
                    <tr>
                    <td>{{ $p->anggota_id }}</td>
                    <td>{{ $p->anggota_nama }}</td>
                    <td>{{ $p->anggota_alamat }}</td>
                    <td>{{ $p->tgl_pinjam}}</td>
                    <td>{{ $p->anggota_telp}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>