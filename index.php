<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: black;
      }
	  </style>
</head>
<body>	
	<div class="container" style="margin-top:20px">
		<h1>DATA HANDPHONE</h1>
		<a href="tambah_produk.php"><button class="btn btn-outline-primary">+Tambah Data HP</button></a>
        <hr>
	  <table class="table table-striped table-hover table-sm table-bordered">
	  <tr>
			<th>NO.</th>
					<th>Merk Handphone</th>
					<th>Harga</th>
					<th>Spesifikasi</th>
                    <th>Gambar</th>
					<th>AKSI</th>
				</tr>
			<tbody>
				 <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM toko_hp ORDER BY id_hp ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
	 ?>
       <tr>
          <td width="10"><?php echo $no; ?></td>
          <td width="40"><?php echo $row['merk_hp']; ?></td>
          <td width="120">Rp <?php echo number_format($row['harga'],0,',','.'); ?></td>
          <td><?php echo $row['spesifikasi']; ?></td>
          <td style="text-align: center;" width="50"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 50px;"></td>
          <td width="150">
              <a href="edit_produk.php?id=<?php echo $row['id_hp']; ?>"><button class="btn btn-warning">Edit</button></a>
              <a href="proses_hapus.php?id=<?php echo $row['id_hp']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')"><button class="btn btn-danger">Hapus</button></a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
			<tbody>
	  </table>
		
	</div>
    	
</body>
</html>