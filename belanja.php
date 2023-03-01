<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mt-4">
        <form method = "POST" action= "belanja.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci"> 
        <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="text1" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php 
$proses= $_POST["proses"];
$nama_customer = $_POST["customer"];
$mata_produk = $_POST["produk"];
if($mata_produk == "tv"){
    $harga = 4000000;
}elseif($mata_produk =="kulkas"){
    $harga = 3000000;
}
else{
    $harga = 2000000;
}
$jumlah = $_POST["jumlah"];
$total_bayar = $harga * $jumlah;

echo " proses : ".$proses;
echo " <br/> Nama :".$nama_customer;
echo " <br/> Produk :".$mata_produk;
echo " <br/> Jumlah :".$jumlah;
echo " <br/> total bayar :".$total_bayar;
?>

		</div>
		<div class="col-md-6 mt-4">
			<table class="table" border= 1 ;color="red">
				<thead>
					<tr>
						<th>
							Produk
						</th>
						<th>
							Harga
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							TV
						</td>
						<td>
							Rp 4.000.000
						</td>
					</tr>
					<tr class="table">
						<td>
							Kulkas
						</td>
						<td>
							Rp 3.000.000
						</td>
					</tr>
					<tr class="table">
						<td>
							Mesin Cuci
						</td>
						<td>
							Rp 2.000.000
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>