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
				<h2 class="bk-judulpage">Hubungan Periode & Getaran</h2>
				<form method="post">
				<table>
					<tr> <td colspan="9"> 
						Hubungan antara Frekuensi dan Periode adalah f = 1/T dan T = 1/f
					</td>
					<tr height="50px">
						<td class="tulis"> Frekuensi (f) </td>
						<td width="100px"> <center> <input type="text" name="frekuensi"> </center> </td>
						<td width="20px"> </td>
						<td class="tulis"> <center> T = 1/f </center> </td>
						<td width="20px"> </td>					
						<td> <center> <input type="submit" name="htgsep" value="HITUNG"> </center> </td>
						<td width="30px"> </td>
						</tr>
						<tr height="50px">
						<?PHP							
							if (isset($_POST['htgsep'])) {
								$frekuensi = $_POST['frekuensi'];
								$hasilfrek = 1/$frekuensi;
								$yes = round($hasilfrek,2);
								echo "	
									<td class='tulis' colspan='8'> <center>  Frekuensi (f=1/f)							
									<input type='text' name='frek3' disabled='disabled' value='$yes'> </center> </td>
								";
							}
						?>
					</tr>
					<tr height="40px">
						<td class="tulis"> Periode (T) </td>
						<td width="100px"> <center> <input type="text" name="periode"> </center> </td>
						<td width="20px"> </td>
						<td class="tulis"> <center> f = 1/T </center> </td>
						<td width="20px"> </td>	
						<td> <center> <input type="submit" name="htgtir" value="HITUNG"></td>
						<td width="30px"> </td>
						</tr>
						<tr height="50px">
						<?PHP
							if (isset($_POST['htgtir'])) { 
								$periode = $_POST['periode'];
								$hasilperiode = 1/$periode;
								$yess = round($hasilperiode,2);
								echo "
									<td class='tulis' colspan='7'> <center> Periode (T=1/T)
									<input type='text' name='per3' disabled='disabled' value='$yess'> </center> </td>
								";
							}
						?>						
					</tr>
				</table>	
			</form>				
			</div>
		</div>
<?php include 'footer.php'; ?>