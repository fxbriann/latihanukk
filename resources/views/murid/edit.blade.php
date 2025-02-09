@include('layout.header')
<h3>Edit Data Siswa</h3>
<form action="{{ route('murid.update', $murid->id_murid) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="no_murid">No Murid</label>
        <input type="text" name="id_murid" id="no_murid" value="{{ $murid->id_murid }}">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{ $murid->nama }}">
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas" value="{{ $murid->kelas }}">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="{{ $murid->alamat }}">
    </div>
    <div class="form-group">
        <label for="tahun_masuk">Tahun Masuk</label>
        <input type="text" name="tahun_masuk" id="tahun_masuk" value="{{ $murid->tahun_masuk }}">
    </div>
    <div class="form-group">
        <button type="submit" class="tombol">Update</button>
    </div>
</form>
@include('layout.footer')
