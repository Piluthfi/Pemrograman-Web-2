<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <h1>Pendaftaran Online</h1>
    </header>
    <div class="container">
    <form action="simpan-pendaftaran.php" method="post">
    <div class="daftar">
      <div class="form-group">
      <label>Nama Lengkap:</label>
      <input type="text" name="nama" placeholder="ISI NAMA LENGKAP ANDA" />
      </div>
      <div class="form-group">
      <label for="">Email:</label>
      <input type="email" name="email" placeholder="email@domain.com" />
      </div>
      <div class="form-group">
      <label for="">Password:</label>
      <input type="password" name="password" placeholder="*******" />
      </div>
      <div class="form-group"> 
      <label for="">No. HP:</label>
      <input type="phone" name="no_hp" placeholder="081234567890" />
      </div>
      <div class="form-group">
      <label>Jalur Seleksi:</label>
      <select class="form-control" name="seleksi">
        <option value="PMB-RAPOR">PMB - REGULER RAPOR</option>
        <option value="PMB-PERINGKAT">PMB - REGULER PERINGKAT KELAS</option>
        <option value="PMB-SARINGAN-MASUK">PMB - REGULER UJIAN SARINGAN MASUK</option>
        <option value="PMB-ANAK-KARYAWAN-TETAP-JAYA-GRUP">PMB - REGULER ANAK KARYAWAN TETAP JAYA GRUP</option>
        <option value="PMB-ANAK-KARYAWAN-TETAP-YAYASAN-JAYA">PMB-ANAK KARYAWAN TETAP YAYASAN PENDIDIKAN JAYA</option>
        <option value="BEASISWA-PENUH">BEASISWA PENUH - BEASISWA UPJ UNTUK NEGERI (ASAK)</option>
      </select>
      </div>

      <div class="form-group">
      <label for="">Alamat:</label>
      <textarea rows="10" name="alamat" placeholder="ISI ALAMAT LENGKAP"></textarea>
      </div>
      <button>Submit</button>
    </form>
    </div>
  </body>
</html>