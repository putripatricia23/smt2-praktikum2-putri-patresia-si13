<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-4" >
      <?php 
      
      $title = $_GET["judul"];
      $tahun = $_GET["tahun"];
      $genre = $_GET["genre"];
      $rating =$_GET["rating"];

      echo "Judul Game       :" .$title;
      echo "<br/>Tahun Liris :" .$tahun;
      echo "<br/>Genre Game  :" .$genre;
      echo "<br/>Rating      :" .$rating;
      
      
      ?>

    </div>
	</div>
</div>  
</body>
</html>