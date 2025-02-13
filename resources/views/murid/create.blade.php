@include('layout.header')
        <h3>Buat Data Siswa</h3>
        <form action="{{ route( 'murid.store' ) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="no_murid">No Murid</label>
                <input type="text" name="id_murid" id="id_murid" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="tahun_masuk">Tahun Masuk</label>
                <input type="text" name="tahun_masuk" id="tahun_masuk" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_wali">Nama Wali</label>
                <input type="text" name="nama_wali" id="nama_wali" class="form-control">
            </div>
            <button type="submit" class="tombol">Simpan</button>

        </form>
@include('layout.footer')        