<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-4">
        <?php 
      
      $nama_m = $_GET["nama"];
      $Matkul = $_GET["matkul"];
      $UTS = $_GET["uts"];
      $UAS =$_GET["uas"];
      $TUGAS =$_GET["tugas"];

      if($UAS + $UTS + $TUGAS > 200){
        $status = "Lulus";
      }else{
        $status = "tidak Lulus";
      }

      echo "Nama Mahasiswa      :" .$nama_m;
      echo "<br/>Mata kuliah    :" .$Matkul;
      echo "<br/>Nilai UTS      :" .$UTS;
      echo "<br/>Niali UAS      :" .$UAS;
      echo "<br/>Niali Tugas    :" .$TUGAS;
      echo "<br/>Keterangan    :" .$status;
      
      
      ?>
		</div>
	</div>
</div>
</body>
</html>