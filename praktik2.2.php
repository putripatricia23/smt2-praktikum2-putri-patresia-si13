<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktik2.2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-4">
        
            <form method="GET" action="output2.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Mata Kuliah</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="matkul" id="matkul_0" type="radio" class="custom-control-input" value="dasar-dasar pemrograman"> 
                        <label for="matkul_0" class="custom-control-label">DDP</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="matkul" id="matkul_1" type="radio" class="custom-control-input" value="Statistika"> 
                        <label for="matkul_1" class="custom-control-label">Statistik</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="matkul" id="matkul_2" type="radio" class="custom-control-input" value="Jaringan Komputer"> 
                        <label for="matkul_2" class="custom-control-label">Jarkom</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="uts" name="uts" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="uas" name="uas" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                    <div class="col-8">
                    <input id="tugas" name="tugas" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

		</div>
	</div>
</div>
</body>
</html>