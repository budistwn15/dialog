<div class="welcome-notification">
			<p class="title">Hi, <b >Administrator</b> ! Selamat datang di halaman dashboard	 .</p>
			<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt. <a href="" style="text-decoration: underline; color:whitesmoke; ">View users .</a></p>
			<br>
			<br>
			<a href="?module=setting" class="btn-action">Ubah Password</a>
			<a href="logout.php" class="btn-action">Keluar</a>
			<br>

</div>
		<div class="widget-overview">
			<div  class="body-box-widget" style="margin-left: 80px;">
				<div class="box-widget">
					<div class="icon">
							<img src="../assets/img/multitask.png">
							<a href="" class="amount">
								<?php
									require_once '../config/connection.php';
									$query = $DBCONNECTION->prepare("SELECT count(*) AS amountPengunjung FROM pengunjung");
									$query->execute();
									while ($data = $query->fetch(PDO::FETCH_LAZY)) {
										echo $data["amountPengunjung"];
									}
								 ?>
							</a>
					</div>
					<div class="desc">
						<ul>
							<li><a href="">Pengunjung</a></li>
						</ul>
						<br>
						<a href="?module=users" class="btn-view"> Lihat Pengunjung</a>
					</div>
				</div>



				<div class="box-widget">
					<div class="icon">
							<img src="../assets/img/online-question.png">
							<a href="" class="amount">
								<?php
									require_once '../config/connection.php';
									$query = $DBCONNECTION->prepare("SELECT count(*) AS amountFilm FROM film");
									$query->execute();
									while ($data = $query->fetch(PDO::FETCH_LAZY)) {
										echo $data["amountFilm"];
									}
								 ?>
							</a>
					</div>
					<div class="desc">
						<ul>
							<li><a href="">Film</a></li>
						</ul>
						<br>
						<a href="?module=question" class="btn-view"> Lihat Film</a>
					</div>
				</div>

				<div class="box-widget">
					<div class="icon">
							<img src="../assets/img/multitask.png">
							<a href="" class="amount">
								<?php
									require_once '../config/connection.php';
									$query = $DBCONNECTION->prepare("SELECT count(*) AS amountCategories FROM kategori");
									$query->execute();
									while ($data = $query->fetch(PDO::FETCH_LAZY)) {
										echo $data["amountCategories"];
									}
								 ?>
							</a>	
					</div>
					<div class="desc">
						<ul>
							<li><a href="">Kategori</a></li>
						</ul>
						<br>
						<a href="?module=categories" class="btn-view"> Lihat Kategori</a>
					</div>
				</div>
			</div>
		</div>
		<div style="clear: both;"></div>
	<div class="widget-user">
		<div class="user-suggestion">
				<p style="margin-left: 120px; margin-top: 20px; margin-bottom: 20px;">Request Film </p>

			<div class="user-box-suggestion">
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
										<td>Judul</td>
										<td>Aksi</td>
								</tr>
						</thead>
						<tbody  id="myTable">	
							<?php 
									$query = $DBCONNECTION->prepare("SELECT * FROM request_film");
									$query->execute();
									$no = 1;
									while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
										<tr>
											<td><?= $no; ?></td>
											<td>
												<?php 
													$query2 = $DBCONNECTION->prepare("SELECT * FROM pengunjung WHERE id_pengunjung = '$data[id_pengunjung]'");
													$query2->execute();
													$data2  = $query2->fetch(PDO::FETCH_LAZY);
												 	echo $data2["nama"];													
												 ?>
											</td>
											<td><?= $data["judul_film"]; ?></td>
											<td><a href="module/film/delUserRequest.php?request_id=<?= $data["id_request_film"]; ?>">Delete</a></td>
										</tr>
								<?php	 }
							 ?>
						</tbody>
				</table>
				<div class="box-footer"></div>
			</div>
		</div>
		<div class="user-online">
			<p class="caption" >Online User</p>
			<div class="box-user-online">
				<div class="box-header"></div>
				<?php

					$onlineUser  = $DBCONNECTION->prepare("SELECT * FROM `user` WHERE `online` ='true'");
					$onlineUser->execute();
					if($onlineUser->rowCount() >= 1){
							while($data =  $onlineUser->fetch(PDO::FETCH_LAZY)){ 
							$query = $DBCONNECTION->prepare("SELECT * FROM `pengunjung` WHERE `id_user` = '$data[id_user]'");
							$query->execute();
							while($dataPengunjung = $query->fetch(PDO::FETCH_LAZY)){ ?>
									<div class="user">
										<div class="img-user">
										<?php 
											if($dataPengunjung["foto"] == ""){
												echo "<img src='../upload/pic_profile/pic_default.png'/>";
											}else{
												echo "<img src='../upload/pic_profile/".$dataPengunjung[foto]."'>";
											}
										?>
										</div>
										<div class="desc-user">
											<p><?= $data["username"]; ?></p>
											<span class="time">
												<?php 
													getTimeAgo($data["terakhir_login"]);
												?>
											</span>
										</div>
									</div>	
						<?php	}			
						}
					}else{
						echo "tidak ada user yang online";
					}

				 ?>
						
			</div>	
		</div>
	</div>
