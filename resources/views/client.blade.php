@extends('layouts.base')


@section('content')
<div class="container-text">
    <h3>Klien</h3>
    <p>Kami terus berkomitmen untuk memberikan layanan terbaik kepada setiap klien kami, dan daftar klien ini adalah bukti nyata dari keberhasilan kami dalam menjalankan komitmen tersebut. Teruslah bersama kami dalam perjalanan kesehatan yang penuh kepercayaan dan keamanan.
        Kami ingin mengucapkan terima kasih yang tulus kepada semua klien kami yang telah memilih Ionix sebagai mitra dalam menjaga kesehatan mereka. Setiap nama dalam daftar ini adalah cerminan dari kepercayaan yang diberikan kepada kami untuk memberikan perlindungan kesehatan yang berkualitas tinggi, pelayanan yang berorientasi pada kebutuhan, dan komitmen kami untuk selalu berada di samping Anda dalam setiap langkah perjalanan kesehatan Anda.
    </p>
</div>
{{-- <a href = "/addclient">+ Tambah File Post </a> --}}
<br>
<br>
<p class="d-flex justify-content-center"><a href="/addclient" class="btn btn-primary">Tambah Data Klien</a></p>
<table class="ctable">
    <thead style="border-radius: 10px">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal_Lahir</th>
            <th>Gender</th>
            <th>Opsi Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posting as $p)
        <tr>
            <td>{{ $p -> NIK}}</td>
            <td>{{ $p -> Nama}}</td>
            <td>{{ $p -> Tanggal_Lahir}}</td>
            <td>{{ $p -> Gender}}</td>
            <td>
                <a href="">Edit</a>
                <a href="">Hapus</a>
            </td>

        </tr>
        @endforeach
    </tbody>
    
</table>
@endsection