<?php include 'header.php'; ?>
		<div class="row">
			<div class="col-md-3">
				<h2 class="bk-judulpage">Menu</h2>
				<ul class="bk-menu-list">
					<li>
						<a href="index.php"><img src="assets/img/icon/kembali.png">Kembali</a>
					</li>
					<li>
						<a href="transpose.php"><img src="assets/img/icon/matematika.png">Transpos Matriks</a>
					</li>					
					<li>
						<a href="operasi.php"><img src="assets/img/icon/matematika.png">Operasi Matriks</a>
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
					<li>
						<a href="kimia.php"><img src="assets/img/icon/kimia.png">Kimia</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9">
				<h2 class="bk-judulpage">Konfigurasi Dan Struktur Atom</h2>

				<ul>
					<li>
						<b><a href="/?page=matematika">Matematika</a></b>
						<ul>
							<li>- <a href="/transpose.php">Transpose Matriks</a></li>
							<li>- <a href="/operasi.php">Operasi Matriks</a></li>
						</ul>
					</li>
					<li>
						<b><a href="/?page=fisika">Fisika</a></b>
						<ul>
							<li>- <a href="/frekuansiget.php">Frekuensi Getaran</a></li>
							<li>- <a href="/periodeget.php">Periode Getaran</a></li>
							<li>- <a href="/getaran.php">Hubungan Periode & Frekuensi Getaran</a></li>
						</ul>
					</li>
					<li>
						<b><a href="/kimia.php">Kimia</a></b>
						<ul>
							<li>- <a href="/kimia.php">Konfigurasi & Struktur Atom</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
<?php include 'footer.php'; ?>