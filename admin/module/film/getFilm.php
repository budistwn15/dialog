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
					<td>Judul</td>
					<td>Tanggal rilis</td>
					<td>Tanggal tayang</td>
					<td>Sutradara</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody id="myTable">
				<?php 
					require_once '../config/connection.php';
					$query = $DBCONNECTION->prepare("SELECT * FROM `film`");
					$query->execute();
					$no=1;
					while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $data["judul"]; ?></td>
							<td><?= $data["tgl_rilis"]; ?></td>
							<td><?= $data["tgl_tayang"]; ?></td>
							<td><?= $data["sutradara"]; ?></td>
							<td><a href="?module=film&act=edit&film_id=<?= $data["id_film"]; ?>"">Edit</a> <a href="?module=film&act=delete&film_id=<?= $data["id_film"]; ?>" style="background-color: #ff6969;">remove</a></td>
						</tr>
				<?php $no++;}
				 ?> 
				

			</tbody>
		</table>
		<div class="box-footer"></div>
	</div>