 
@extends('layouts.base')

@section('content')
<div class="container">
    <form class="form" action="/addclient/store" method="post" >
        {{ csrf_field() }}
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label" style="justify-content: left">NIK</label>
          <input type="text" class="form-control" id="validationDefault01" name="NIK" required>
        </div>
        <br>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="validationDefault02" name="Nama" required>
        </div>
        <br>
        <div class="col-md-4">
            <label for="validationDefault04" class="form-label">Tanggal Lahir</label><br>
            <input type="date" class="form-control col-md-4" name="Tanggal_Lahir">
        </div>
        <br>
        <div class="col-md-4">
            <label for="validationDefault03" class="form-label">Jenis Kelamin</label><br>
            <div class="container-opsi" style="align-items: flex-start">
                <input type="radio" name="Gender" id="flexRadio" value="L">
                <label class="form-check-label" for="flexRadio">
                    Laki - laki
                </label><br>
                <input type="radio" name="Gender" id="flexRadio" value="P">
                <label class="form-check-label" for="flexRadio">
                    Perempuan
                </label>
            </div>
        </div>
        <br>
        <div class="col-md-2">
            <label for="validationDefault04" class="form-label">Kategori</label>
            <select class="form-select" name="Kategori" required>
                <option disabled selected>Pilih kategori asuransi!</option>    
                <option name="Kategori" value="1">1</option>
                <option name="Kategori" value="2">2</option>
                <option name="Kategori" value="3">3</option>
            </select>
        </div>
        <br>
        <br>
        <div class="col-4">
          <button class="btn btn-primary" type="submit" value="Tambah post">Submit form</button>
        </div>
    </form>
      
    {{-- <form class="form" action="/addclient/store" method="post">
        {{ csrf_field() }}
        NIK :
        <input type="text" name="NIK"><br>
        Nama :
        <input type="text" name="Nama"><br>
        Tanggal Lahir :
        <input type="date" name="Tanggal_Lahir"><br>
        Gender :
        <label>
            <input type="radio" name="Gender" value="L"> Laki-laki
        </label>
        <br>
        <label>
            <input type="radio" name="Gender" value="P"> Perempuan
        </label>

        Kategori :
        <label>
            <input type="radio" name="Kategori" value="1"> Laki-laki
        </label>
        <br>
        <label>
            <input type="radio" name="Kategori" value="2"> Perempuan
        </label>
        <br>
        <label>
            <input type="radio" name="Kategori" value="3"> Perempuan
        </label>
        
        <br>
        <br><input type="submit" value="Tambah post">
    </form> --}}
</div>
@endsection

<!-- inheritance -->
            