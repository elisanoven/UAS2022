<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/menu">UKDW</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16"><path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mahasiswa">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"><path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
              Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dosen">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
              Dosen
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/skripsi">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16"><path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/><path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg>
              Skripsi
            </a>
          </li>
        </ul>
        <ul class="nav flex-column mb-2">
          </ul>
      </div>
    </nav>
    <div class="col-lg-10 vh-100">
        <div class="card mt-4">
            <div class="card-header">
    </div>
            <div class="card-body">
            <div class="container-fluid rounded mt-4 ">
                <?php
                $bidang_minat = explode(',', $mahasiswa->bidang_minat);
                ?>
        <form action="/dosen/updatemahasiswa/{{ $mahasiswa->id}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group w-25">
                <label>NIM</label>
                <input type="number" name="nim" class="form-control" value="{{$mahasiswa -> nim}}" readonly>
            </div>
            <div class="form-group w-25">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa -> nama}}">
            </div>
            <label>Gender</label>
            <div class="form-Check w-25">
                <input type="radio" name="gender" value="Pria" value="Pria" {{ $mahasiswa -> status='Pria' ? 'checked' :'' }}  class="form-check-input">
                <label>Pria</label>
            </div>
            <div class="form-Check w-25">
                <input type="radio" name="gender" value="Wanita" value="Pria" {{ $mahasiswa -> status='Wanita' ? 'checked' :'' }} class="form-check-input">
                <label>Wanita</label>
            </div>
            <div class="form-group w-25">
                <label>Jurusan</label>
               <select name="jurusan" class="form-control">
                   <option value="0" >----PILIH JURUSAN----</option>
                   <option value="Teologi" {{ $mahasiswa -> jurusan='Teologi' ? 'selected':''}}>Teologi</option>
                   <option value="Arsitek" {{ $mahasiswa -> jurusan='Arsitek' ? 'selected':''}}>Arsitek</option>
                   <option value="Design Produk"{{ $mahasiswa -> jurusan='Design Produk' ? 'selected':''}}>Design Produk</option>
                   <option value="Manajemen"{{ $mahasiswa -> jurusan='Manajemen' ? 'selected':''}}>Manajemen</option>
                   <option value="Akutansi"{{ $mahasiswa -> jurusan='Akutansi' ? 'selected':''}}>Akutansi</option>
                   <option value="Biotek"{{ $mahasiswa -> jurusan='Biotek' ? 'selected':''}}>Biotek</option>
                   <option value="Teknologi Informasi"{{ $mahasiswa -> jurusan='Teknologi Informasi' ? 'selected':''}}>Teknologi Informasi</option>
                   <option value="Sistem Informasi"{{ $mahasiswa -> jurusan='Sistem Informasi' ? 'selected':''}}>Sistem Informasi</option>
                   <option value="Pendidikan Bahasa Inggris" {{ $mahasiswa -> jurusan='Pendidikan Bahasa Inggris' ? 'selected':''}}>Pendidikan Bahasa Inggris</option>
</select>
            </div>
            <label>Bidang Minat</label>
            <div class="form-group w-25">
                <input type="checkbox" name="bidang_minat[]" value="Seni_Rupa" {{in_array('Seni_Rupa', $bidang_minat) ? 'checked' : '' }} class="form-check-input">
                <label>Seni Rupa</label>
            </div>
            <div class="form-group w-25">
                <input type="checkbox" name="bidang_minat[]" value="Gapala"{{in_array('Gapala', $bidang_minat) ? 'checked' : '' }} class="form-check-input">
                <label>Gapala</label>
            </div>
            <div class="form-group w-25">
                <input type="checkbox" name="bidang_minat[]" value="Paduan_Suara" {{in_array('Paduan_Suara', $bidang_minat) ? 'checked' : '' }} class="form-check-input">
                <label>Paduan Suara</label>
            </div>
            <div class="form-group w-25">
                <input type="checkbox" name="bidang_minat[]" value="photographi" {{in_array('photographi', $bidang_minat) ? 'checked' : '' }} class="form-check-input">
                <label>Photographi</label>
            </div>
            <div class="form-group w-25">
                <input type="checkbox" name="bidang_minat[]" value="Cinematographi" {{in_array('Cinematographi', $bidang_minat) ? 'checked' : '' }}  class="form-check-input">
                <label>Cinematographi</label>
            </div>
            <div class="form-group pt-4">
                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
</div>
        </form>
</div>

</div>
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>