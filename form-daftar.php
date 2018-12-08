
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="js/jquery-2.2.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
</head>
<body>
  <nav class="navbar navbar-default" style="font-weight: bold; background-color: #3498db;">
    <div class="container-fluid">
      <div class="navbar-header">
       <a class="menu"><i class="fa fa-bars" id="menu_icon"></i></a>
       <a class="navbar-brand" href="#">Tiket Kreta Van</a>
     </div><!--navbar-header close-->
   </div><!--collapse navbar-collapse drop_menu close-->
 </div><!--container-fluid close-->
</nav>
<div class="container">
  <h2>Tambah data</h3>
  <form action="proses-pendaftaran.php" method="POST">
 <div class="form-group">
      <label for="Name"Name</label>
      <input type="text"  class="form-control"name="nama" placeholder="Masukan Nama anda" />
    </div>
    <div class="form-group">
      <label for="Name">Stasiun Asal</label>
      <input type="text"  class="form-control"name="nama" placeholder="Masukan stasiun Asal" />
    </div>
    <div class="form-group">
      <label for="Email1">Stasiun Tujuan</label>
  <input type="text"  class="form-control"name="alamat" placeholder="Masukan stasiun tujuan" />
    </div> 

    <div class="form-group">
      <label>Tanggal</label>
      <div >  <input class="date-own form-control" name="tanggal" placeholder="pilih tanggal" type="text"> </div>     </div>
      <div class="form-group">


        <div class="form-group">
          <label for="Name">Harga</label>
          <input type="text"  class="form-control"name="harga" placeholder="masukan harga" />
        </div> 
        <div class="text-right">
          <button type="submit" value="Daftar" name="daftar"class="btn btn-success">Simpan</button>
          <input type="button" class="btn btn-danger" onclick="location.href='index.php';" value="Batal" />
        </div>
      </form>
    </div>

    
    
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
