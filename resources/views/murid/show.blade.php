@include('layout.header')
<h3>Detail Data Siswa</h3>
<a href="{{ route('murid.create') }}" class="tombol">Tambah</a>
<table>
    <tbody>
        <tr>
            <td widht="100px">No Murid</td>
            <td width="3px">:</td>
            <td widht="100px">Nama</td>
            <td width="3px">:</td>
            <td widht="100px">Kelas</td>
            <td width="3px">:</td>
            <td widht="100px">Alamat</td>
            <td width="3px">:</td>
            <td widht="100px">Tahun Masuk</td>
            <td width="3px">:</td>
            <td widht="100px">Nama Wali</td>
            <td width="3px">:</td>

            <td>
                {{ $murid->no_murid }}
            </td>
            <td>
                {{ $murid->nama }}
            </td>
            <td>
                {{ $murid->kelas }}
            </td>
            <td>
                {{ $murid->alamat }}
            </td>
            <td>
                {{ $murid->tahun_masuk }}
            </td>
            <td>
                {{ $murid->nama_wali }}
            </td>
        </tr>
    </tbody>
</table>
@include('layout.footer')
