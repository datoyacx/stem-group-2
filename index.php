<?php include 'header.php'; ?>
<div class="row">
	<div class="col-md-12 bk-text-center"><h2 class="bk-judulpage"><?php if (isset($_GET['page']) && $_GET['page'] == 'matematika') { echo "Matematika"; } else if (isset($_GET['page']) && $_GET['page'] == 'fisika') { echo "Fisika"; } else { echo "Menu Utama"; } ?></h2></div>
	<?php if (isset($_GET['page']) && $_GET['page'] == 'matematika') { ?>
	<div class="col-1-5 "></div>
	<div class="col-md-3 bk-btn-big">
		<a href="/"><div class="btn-content"><img src="assets/img/icon/kembali.png">Kembali</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="transpose.php"><div class="btn-content"><img src="assets/img/icon/matematika.png">Transpos Matriks</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="operasi.php"><div class="btn-content"><img src="assets/img/icon/matematika.png">Operasi Matriks</div></a>
	</div>
	<div class="col-1-5 "></div>
	<?php } else if (isset($_GET['page']) && $_GET['page'] == 'fisika') { ?>
	<div class="col-md-3 bk-btn-big">
		<a href="/"><div class="btn-content"><img src="assets/img/icon/kembali.png">Kembali</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="periodeget.php"><div class="btn-content"><img src="assets/img/icon/fisika.png">Periode Getaran</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="frekuansiget.php"><div class="btn-content"><img src="assets/img/icon/fisika.png">Frekuensi Getaran</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="getaran.php"><div class="btn-content"><img src="assets/img/icon/fisika.png">Frekuensi & Periode</div></a>
	</div>
	<?php } else { ?>
	<div class="col-md-3 bk-btn-big">
		<a href="?page=matematika"><div class="btn-content"><img src="assets/img/icon/matematika.png">Matematika</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="?page=fisika"><div class="btn-content"><img src="assets/img/icon/fisika.png">Fisika</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="kimia.php"><div class="btn-content"><img src="assets/img/icon/kimia.png">Kimia</div></a>
	</div>
	<div class="col-md-3 bk-btn-big">
		<a href="sitemap.php"><div class="btn-content"><img src="assets/img/icon/sitemap.png">Sitemap</div></a>
	</div>
	<?php } ?>
</div>
<?php include 'footer.php'; ?>