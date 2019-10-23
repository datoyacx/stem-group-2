<?php include 'header.php'; ?>
		<div class="row">
			<div class="col-md-3">
				<h2 class="bk-judulpage">Menu</h2>
				<ul class="bk-menu-list">
					<li>
						<a href="index.php"><img src="assets/img/icon/kembali.png">Kembali</a>
					</li>
					<li>
						<a href="periodeget.php"><img src="assets/img/icon/fisika.png">Periode Getaran</a>
					</li>				
					<li>
						<a href="frekuansiget.php"><img src="assets/img/icon/fisika.png">Frekuensi Getaran</a>
					</li>
					<li>
						<a href="getaran.php"><img src="assets/img/icon/fisika.png">Frekuensi & Periode</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<h2 class="bk-judulpage">Periode Getaran</h2>
			
				<form method="post">
				<table>
					<tr> <td colspan="9"> 
					<b> Periode</b> memiliki rumus T = t / n <br>
					T = periode <br>
					t = waktu <br>
					n = jumlah getaran
					</td>
					</tr>
					<tr height="50px">
						<td class="tulis"> CARI </td>
						<td class="tulis"> <center> : </center> </td>
						<td> 
							<select name='pilrum1'class="fis">
							<option > Select Rumus
							<option value='Periode01'> Periode (T)
							<option value='Waktu01'> Waktu (t)
							<option value='Jumlah Getaran01'>	Jumlah Getaran (n)
						</select>
						</td>
						<td colspan="3"> <center> <input type="submit" name="oke1" value="Tampilkan"> </center> </td>
					</tr>
					<?PHP					
					if (isset($_POST['oke1'])) {
						$sha = $_POST['pilrum1'];
						if ($sha == "Periode01") {
							echo "
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'> Periode T = t/n </center> </td>
								</tr>
								<tr width='50px'>										
									<td class='tulis'> <center> Waktu (t) </center> </td>
									<td width='20px'> </td>
									<td class='tulis'> Jumlah Getaran (n) </td>
								</tr>
								<tr>
									<td> <center> <input type='text' name='waktuper'> </center> </td>
									<td width='20px'> </td>
									<td> <center> <input type='text' name='getaranper'> </center> </td>
									<td> <input type='submit' name='htgper' Value='HITUNG'> </td>
								</tr>
						";
						} else if($sha == "Waktu01") {
							echo "
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'> Waktu t=T*n </center> </td>
								</tr>
								<tr width='50px'>										
									<td class='tulis'> <center> Periode (T) </center> </td>
									<td width='20px'> </td>
									<td class='tulis'> Jumlah Getaran (n) </td>
								</tr>
								<tr>
									<td> <center> <input type='text' name='periodewak'> </center> </td>
									<td width='20px'> </td>
									<td> <center> <input type='text' name='getaranwak'> </center> </td>
									<td> <input type='submit' name='htgwak' Value='HITUNG'> </td>
								</tr>
						";
						} else if ($sha == "Jumlah Getaran01") {
							echo "
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'> Jumlah Getaran n=t/T </center> </td>
								</tr>
								<tr width='50px'>			
									<td class='tulis'> Waktu (t) </td>					
									<td width='20px'> </td>		
									<td class='tulis'> <center> Periode (T) </center> </td>
								</tr>
								<tr>
									<td> <center> <input type='text' name='waktuget'> </center> </td>
									<td width='20px'> </td>
									<td> <center> <input type='text' name='periodeget'> </center> </td>
									<td> <input type='submit' name='htgget' Value='HITUNG'> </td>
								</tr>	
						";
						} else {
							echo "<td colspan='6'> <center class='notif'> ISI RUMUS TERLEBIH DAHULU </center> </td>";
						}
						
					}
					if (isset($_POST['htgper'])) {
						$waktuper = $_POST['waktuper'];
						$getaranper = $_POST['getaranper'];
						$hslper = $waktuper / $getaranper;
						echo"
						
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'> Periode T = t/n </center> </td>
								</tr>
						<tr height='40px'>
							<td class='tulis'> <center> Waktu (t) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> Jml Getaran (n) </td>
							<td width='20px'> </td>
							<td class='tulis'>Periode (T=t/n) </td>
						</tr>
						<tr>
							<td class='my'> $waktuper </td>
							<td width='20px'> </td>
							<td class='my'> $getaranper </td>
							<td width='20px'> </td>
							
						";
						?>
						<td class='my'> <?php echo(round($hslper,2)); ?></td>
						</tr>
						<?php
					}
					if (isset($_POST['htgwak'])) {
						$periodewak = $_POST['periodewak'];
						$getaranwak = $_POST['getaranwak'];
						$hslwak = $periodewak * $getaranwak;
						echo"
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'> Waktu t=T*n </center> </td>
								</tr>
						<tr height='40px'>
							<td class='tulis'> <center> Periode (T) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Jml Getaran (n) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Waktu (t=T*n) </center> </td>
						</tr>
						<tr>
							<td class='my'> $periodewak </td>
							<td width='20px'> </td>
							<td class='my'> $getaranwak </td>
							<td width='20px'> </td>
							
						";
						?>
						<td class='my'> <?php echo(round($hslwak,2)); ?></td>
						</tr>
						<?php
					}
					if (isset($_POST['htgget'])) {
						$periodeget = $_POST['periodeget'];
						$waktuget = $_POST['waktuget'];
						$hslget = $waktuget / $periodeget;
						echo"
								<tr width='50px'>										
									<td colspan='9'> <center class='notif'> Jumlah Getaran n=t/T </center> </td>
								</tr>
						<tr height='40px'>
							<td class='tulis'> <center> Waktu (t) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Periode (T) </center> </td>
							<td width='20px'> </td>
							<td class='tulis'> <center> Jml Getaran (n=t/T) </center> </td>
						</tr>
						<tr>
							<td class='my'> $waktuget </td>
							<td width='20px'> </td>
							<td class='my'> $periodeget </td>
							<td width='20px'> </td>
							
						";
						?>
						<td class='my'> <?php echo(round($hslget,2)); ?></td>
						</tr>
						<?php
					}
					?>					
				</table>
				</form>
			</div>
		</div>
<?php include 'footer.php'; ?>