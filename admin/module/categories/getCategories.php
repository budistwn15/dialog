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
					<td>Nama</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody id="myTable">
				<?php 
					require_once '../config/connection.php';
					$query = $DBCONNECTION->prepare("SELECT * FROM kategori");
					$query->execute();
					$no=1;
					while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $data["nama"]; ?></td>
							<td><a href="?module=kategori&act=edit&categories_id=<?= $data["id_kategori"]; ?>"">Edit</a> <a href="?module=kategori&act=delete&categories_id=<?= $data["id_kategori"]; ?>" style="background-color: #ff6969;">remove</a></td>
						</tr>
				<?php $no++;	}
				 ?> 
				

			</tbody>
		</table>
		<div class="box-footer"></div>
	</div>