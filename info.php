



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTPUT SATU FILE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
   <h1>NILAI MAHSISWA</h1>
   <hr>
   
<form method="GET" action="info.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NAMA LENGKAP</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">matkul</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="Pemrograman web">PW</option>
        <option value="Sistem Operasi">SO</option>
        <option value="Jaringan Komputer">JK</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">NILAI UTS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa "></i>
          </div>
        </div> 
        <input id="text1" name="nilai_uts" type="number" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa "></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">NILAI UAS</label> 
    <div class="col-8">
      <input id="text2" name="nilai_uas" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">NILAI PRAKTIKUM</label> 
    <div class="col-8">
      <input id="text3" name="nilai_tugas" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php 
$proses= $_GET["proses"];
$nama_siswa = $_GET["nama"];
$mata_kuliah = $_GET["matkul"];
$nilai_uts = $_GET["nilai_uts"];
$nilai_uas = $_GET["nilai_uas"];
$nilai_tugas = $_GET["nilai_tugas"];

echo " proses : ".$proses;
echo " <br/> Nama         :".$nama_siswa;
echo " <br/> Mata Kuliah :".$mata_kuliah;
echo " <br/> Nilai UTS :".$nilai_uts;
echo " <br/> Nilai UAS :".$nilai_uas;
echo " <br/> Nilai Tugas Praktikum :".$nilai_tugas;
?>

    </div>

</body>
</html>