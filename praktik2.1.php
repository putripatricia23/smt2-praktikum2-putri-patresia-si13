<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-4" >
            <p><h1>FORM GAME</h1></p>
            <br>
    <form merhod ="GET" action="output.php">
  <div class="form-group row">
    <label for="judul" class="col-4 col-form-label">Judul</label> 
    <div class="col-8">
      <input id="judul" name="judul" placeholder="Masukan Judul" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tahun" class="col-4 col-form-label">Tahun Liris</label> 
    <div class="col-8">
      <input id="tahun" name="tahun" placeholder="Masukan Tahun" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="genre" class="col-4 col-form-label">Genre</label> 
    <div class="col-8">
      <input id="genre" name="genre" placeholder="Masukan Genre" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Rating</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="rating" id="rating_0" type="radio" class="custom-control-input" value="Everyone"> 
        <label for="rating_0" class="custom-control-label">Everyone</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="rating" id="rating_1" type="radio" class="custom-control-input" value="Teen"> 
        <label for="rating_1" class="custom-control-label">Teen</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="rating" id="rating_2" type="radio" class="custom-control-input" value="Mature"> 
        <label for="rating_2" class="custom-control-label">Mature</label>
      </div>
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