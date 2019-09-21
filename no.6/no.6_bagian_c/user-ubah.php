<?php
include_once 'header.php';
include_once 'includes/work.inc.php';
include_once 'includes/salary.inc.php';
$pgn1 = new Work($db);
$pgn2 = new Salary($db);

$iw = isset($_GET['iw']) ? $_GET['iw'] : die('ERROR: missing ID.');
$is = isset($_GET['is']) ? $_GET['is'] : die('ERROR: missing ID.');

include_once 'includes/user.inc.php';
$eks = new User($db);

$eks->iw = $iw;
$eks->is = $is;

$eks->readOne();

if($_POST){

	$eks->n = $_POST['n'];
	$eks->iw = $_POST['iw'];
	$eks->is = $_POST['is'];
	
	if($eks->update()){
		echo "<script>location.href='index.php'</script>";
	} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-12 col-md-8">
		  	<div class="page-header">
			  <h5>Ubah User</h5>
			</div>
			
			    <form method="post">
				<div class="form-group">
				    <label for="ia">Name</label>
				    <input type="text" class="form-control" id="ia" name="ia" required>
				  </div>
				  <div class="form-group">
				    <label for="ik">Work</label>
				    <select class="form-control" id="ik" name="ik">
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
				    <label for="nn">Salary</label>
				    <select class="form-control" id="nn" name="nn">
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