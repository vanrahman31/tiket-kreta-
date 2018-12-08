<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tiket Kreta Van</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="js/jquery-2.2.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
	<?php

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-tiket kreta van.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tiket WHERE id=$id";
$query = mysqli_query($db, $sql);
$tiket = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>



</head>

<body>
	 <nav class="navbar navbar-default" style="font-weight: bold; background-color:warning;">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="menu"><i class="fa fa-bars" id="menu_icon"></i></a>
      <a class="navbar-brand" href="#">Tiket Kreta Van</a>
    </div><!--navbar-header close-->
    </div><!--collapse navbar-collapse drop_menu close-->
  </div><!--container-fluid close-->
</nav>
	<div class="container">
		<h3> Edit Data</h3>
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $tiket['id'] ?>" />
		
		<p>
			<label for="nama">Name: </label>
			<input type="text" name="nama" class="form-control"placeholder="nama lengkap" value="<?php echo $tiket['nama'] ?>" />
		<p>
			<label for="nama">Kota Asal: </label>
			<input type="text" name="nama" class="form-control"placeholder="nama lengkap" value="<?php echo $tiket['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Kota Tujuan: </label>
			<textarea name="alamat" class="form-control"><?php echo $tiket['alamat'] ?></textarea>
		</p>
		
		<p>
			
			
      <label>Tanggal</label>
     <input class="date-own form-control" name="tanggal"  value="<?php echo $Tiket['tanggal'] ?>"type="text"> 
		</p>
		<p>
			<label for="harga">Harga: </label>
			<input type="text" class="form-control" name="harga" placeholder="harga" value="<?php echo $tiket['harga'] ?>" />
		</p>
		<p>
			<div class="text-right">
			<input type="submit" class="btn btn-success" value="Simpan" name="simpan" />
			<input type="button" class="btn btn-danger" onclick="location.href='index.php';" value="Batal" />
		</div>
		</p>
		
		</fieldset>
		
	
	</form>
	 <script type="text/javascript">
        $('.date-own').datepicker({
            format: "yyyy-mm-dd",
            
        }).on('changeDate', function (e) {
            $(this).datepicker('hide');
        });
        $('.date-lahir').datepicker({
            format: "yyyy-mm-dd",
			maxDate: new Date(new Date().setDate(todayDate + 30)),

        }).on('changeDate', function (e) {
            $(this).datepicker('hide');
        });
    </script>
	
	</body>
</html>
