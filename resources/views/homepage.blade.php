@extends('layouts.base')


@section('content')

<!-- Jumbotron  -->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4"><span class="font-weight-bold"><br>Ionix Corporation</span></h1>
      <p class="lead font-weight-bold"><br> 
        Save your life, save the world!</p>
    </div>
  </div>
<!-- Akhir Jumbotron -->

<!-- Konten  -->
<div class="container text-center pt-4">
    {{-- Selamat Datang {{ auth()->user()->name }} --}}
</div>
<div class="container text-center">
    <div class="introduction">
        <h5>Miliki asuransi kesehatan terbaik dengan solusi lengkap untuk perlindungan Anda, keluarga dan masa tua dari Ionix Indonesia.</h5>
        <p>Selamat datang di Ionix, mitra andalan Anda dalam perlindungan kesehatan yang komprehensif! Sebagai perusahaan asuransi kesehatan terkemuka, Ionix telah berkomitmen untuk melindungi kesejahteraan Anda dan keluarga Anda dengan layanan berkualitas tinggi dan solusi yang dapat diandalkan. Dengan tim profesional yang berpengalaman dan berbagai pilihan polis yang dirancang khusus untuk memenuhi kebutuhan Anda, Ionix siap menjadi pelindung kesehatan Anda yang terpercaya. Kami hadir untuk memberikan kedamaian pikiran dan perawatan terbaik, sehingga Anda dapat fokus pada apa yang benar-benar penting dalam hidup Anda. Sambut masa depan yang sehat bersama Ionix!</p>
    </div>
    <div class="row align-items-center">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.prudential.co.id/export/sites/prudential-id/id/.galleries/images/cards/category/AsuransiKesehatan2_366x206.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Perlindungan Komprehensif</h5>
                <p class="card-text">Memberi perlindungan yang komprehensif untuk berbagai kondisi kritis.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.prudential.co.id/export/sites/prudential-id/id/.galleries/images/cards/category/AsuransiKesehatan3_366x206.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Perlindungan Lengkap</h5>
                <p class="card-text">Memberikan perlindungan terlengkap sebagai antisipasi berbagai insiden dan kecelakaan.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://www.prudential.co.id/export/sites/prudential-id/id/.galleries/images/cards/category/AsuransiKesehatan1_366x206.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Fleksibel</h5>
                <p class="card-text">Memberikan fleksibiltas dalam menentukan layanan asuransi untuk menjamin kesejahteraan masa tua.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center pt-4">
    {{-- Selamat Datang {{ auth()->user()->name }} --}}
    <div class="div">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-danger" value="Logout">
        </form>
    </div>
</div>


<!-- Akhir Konten  -->
@endsection
