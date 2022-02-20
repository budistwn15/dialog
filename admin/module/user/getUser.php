<div class="box-table">
		<div class="box-header">
			<div class="search">
						<input type="text" id="myInput" onkeyup="liveSearch()" >
						<i class="fa fa-search"></i>
			</div>
		</div>
		<table>
			<thead>
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Username</td>
					<td>Email</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<tbody id="myTable">
				<?php 
					require_once '../config/connection.php';
					$query = $DBCONNECTION->prepare("SELECT * FROM `user` WHERE `level` = 'pengunjung'");
					$query->execute();
					$no=1;
					while($data = $query->fetch(PDO::FETCH_LAZY)){ 
						$query2 = $DBCONNECTION->prepare("SELECT * FROM `pengunjung` WHERE `id_user` = '$data[id_user]'");
						$query2->execute();
						while($data2 = $query2->fetch(PDO::FETCH_LAZY)){ ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $data2["nama"]; ?></td>
								<td><?= $data["username"]; ?></td>
								<td><?= $data2["email"]; ?></td>
								<td><a href="?module=pengunjung&act=delete&user_id=<?= $data['id_user']; ?>" style='background-color:red;'>Delete</a></td>
							</tr>
					<?php $no++; }
						
					}
				 ?> 
				

			</tbody>
		</table>
		<div class="box-footer"></div>
	</div>