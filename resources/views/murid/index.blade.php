@include('layout.header')
        <h3>Data Siswa</h3>
        <a href="{{ route('murid.create') }}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Tahun Masuk</th>
                    <th>Nama Wali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allMurid as $murid)
                    <tr>
                        <td>
                            {{ $murid->id_murid }}
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
                        <td>
                            <form action="{{ route('murid.destroy', $murid->id_murid) }}" method="POST">
                                <a href="{{ route('murid.edit', $murid->id_murid) }}" class="tombol">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="tombol">Hapus</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@include('layout.footer')        