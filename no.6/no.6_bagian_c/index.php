<?php
include_once 'header.php';
include_once 'includes/user.inc.php';
$pro = new User($db);
$stmt = $pro->readKhusus();
?>
	<br/>
	<div>
	
	  <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="lihat">
	    	<br/>
	    	<div class="row">
				<div class="col-md-6 text-left">
					<h4>Data User</h4>
				</div>
				<div class="col-md-6 text-right">
					<button onclick="location.href='user-baru.php'" class="btn btn-primary">Tambah Data</button>
				</div>
			</div>
			<br/>
			<table width="100%" class="table table-striped table-bordered" id="tabeldata">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Work</th>
		                <th>Salary</th>
		                <th width="100px">Aksi</th>
		            </tr>
		        </thead>
		
		        <tbody>
		<?php
		$no=1;
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		?>
		            <tr>
		                <td><?php echo $row['name'] ?></td>
		                <td><?php echo $row['work'] ?></td>
		                <td><?php echo $row['salary'] ?></td>
		                <td class="text-center">
							<a href="user-ubah.php?iw=<?php echo $row['id_work'] ?>&is=<?php echo $row['id_salary'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a href="user-hapus.php?iw=<?php echo $row['id_work'] ?>&is=<?php echo $row['id_salary'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					    </td>
		            </tr>
		<?php
		}
		?>
		        </tbody>
		
		    </table>
		    		
	    </div>
	  </div>
	
	</div>
<?php
include_once 'footer.php';
?>