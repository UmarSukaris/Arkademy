<?php
include_once 'header.php';
include_once 'includes/work.inc.php';
$pgn1 = new Work($db);
include_once 'includes/salary.inc.php';
$pgn2 = new Salary($db);
if($_POST){
	
	include_once 'includes/user.inc.php';
	$eks = new User($db);

	$eks->n = $_POST['n'];
	$eks->iw = $_POST['iw'];
	$eks->is = $_POST['is'];
	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="index.php">lihat semua data</a>.
</div>
<?php
	}
	
	else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-8">
		  	<div class="page-header">
			  <h5>Tambah Data</h5>
			</div>
			
			    <form method="post">
				<div class="form-group">
				    <label for="n">Name</label>
				    <input type="text" class="form-control" id="n" name="n" required>
				  </div>
				  <div class="form-group">
				    <label for="iw">Work</label>
				    <select class="form-control" id="iw" name="iw">
				    	<?php
						$stmt3 = $pgn1->readAll();
						while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
							extract($row3);
							echo "<option value='{$id_work}'>{$name}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="is">Salary</label>
				    <select class="form-control" id="is" name="is">
				    	<?php
						$stmt2 = $pgn2->readAll();
						while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
							extract($row2);
							echo "<option value='{$id_salary}'>{$salary}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <button type="button" onclick="location.href='index.php'" class="btn btn-success">Kembali</button>
				</form>
			  
		  </div>
		  
		</div>
		<?php
include_once 'footer.php';
?>