<div class="box-table">
		<div class="box-header">
			<div class="search">
				<input type="text" id="myInput" onkeyup="liveSearch()">
				<i class="fa fa-search"></i>
			</div>
		</div>
		<table>
			<thead>
				<tr>
					<td>No</td>
					<td>Judul Film</td>
					<td>Url Video</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody id="myTable">
				<?php 
					require_once '../config/connection.php';
					$query = $DBCONNECTION->prepare("SELECT * FROM trailer");
					$query->execute();
					$no=1;
					while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
						<tr>
							<td><?= $no;  ?></td>
							<td>
								<?php
									$query2 = $DBCONNECTION->prepare("SELECT * FROM film WHERE `id_film` = '$data[id_film]'");
								 	$query2->execute();
								 	while($data2 = $query2->fetch(PDO::FETCH_LAZY)){
								 		echo $data2["judul"];
								 	}
								 ?>

							</td>
							<td><embed src="../upload/trailer/<?= $data['video']; ?>"></embed></td>
							<td><a href="?module=trailer&act=delete&id_trailer=<?= $data[id_trailer]; ?>" style="background-color: red;">Hapus</a> <a href="?module=trailer&act=formEdit&id_trailer=<?= $data[id_trailer]; ?>">Ubah</a></td>
						</tr>
				   <?php $no++;	}	
					?>	

			</tbody>
		</table>
		<div class="box-footer"></div>
	</div>