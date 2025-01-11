<?php 
include 'header.php';
// generate kode material
$kode_produk = $_GET['kode'];
$kode = mysqli_query($conn, "SELECT * from produk where kode_produk = '$kode_produk'");
$data = mysqli_fetch_assoc($kode);

?>


<div class="container">
	<h2 style=" width: 100%; border-bottom: 4px solid gray"><b>Edit Produk</b></h2>

	<form action="proses/edit_produk.php" method="POST" enctype="multipart/form-data">

		<div class="form-group">
			<label for="exampleInputFile"><img src="../image/produk/<?= $data['image']; ?>" width="100"></label>
			<input type="file" id="exampleInputFile" name="files">
			<p class="help-block">Pilih Gambar untuk Produk</p>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Kode Produk</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" disabled value="<?= $data['kode_produk']; ?>">
					<input type="hidden" name="kode" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk"  value="<?= $data['kode_produk']; ?>">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Nama Produk</label>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" name="nama" value="<?= $data['nama']; ?>">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Harga</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="masukkan Harga" name="harga" value="<?= $data['harga']; ?>">
				</div>
			</div>
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Deskripsi</label>
			<textarea name="desk" class="form-control">
				<?= $data['deskripsi']; ?>
			</textarea>
		</div>
		
			</div>

		</div>
		<div class="row">
			
			<div class="col-md-6">
				<button type="submit"  class="btn btn-warning btn-block" ><i class="glyphicon glyphicon-edit"></i> Edit</button>
			</div>	
			<div class="col-md-6">
				<a href="m_produk.php" class="btn btn-danger btn-block">Cancel</a>
			</div>
		</div>

		<br>

	</div>
</form>

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include 'footer.php';
?>