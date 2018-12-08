<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tiket Kreta Van</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "berhasil!";
			} else {
				echo "gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	

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
  <h2>Form Tiket kreta</h2>
 
   <p>Berikut adalah Form tiket Kreta Van Beserta Harga</p>   
  <input type="button" class="btn btn-success" onclick="location.href='form-daftar.php';" value="Tambah" />
  <p></p>
          
<table table class="table table-bordered" id="aku">	
	<thead>
		<tr>
			<th>Nama</th>
			<th>Stasiun awal</th>
			<th>Stasiun Tujuan</th>
			
			<th>Tanggal</th>
			<th>Harga (Rp)</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM tiket";
		$query = mysqli_query($db, $sql);
		
		while($tiket = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$tiket['id']."</td>";
			echo "<td>".$tiket['nama']."</td>";
			echo "<td>".$tiket['alamat']."</td>";
		
			echo "<td>".$tiket['tanggal']."</td>";
			$harga=$tiket['harga'];

			echo "<td>" .number_format($harga,2,',','.')."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$tiket['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$tiket['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	
	<script>
	$(document).ready( function () {
    $('#aku').DataTable();
} );
	</script>
	
	</body>
</html>
