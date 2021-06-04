<?php  
	require 'fungsi.php';
//Tampung hadiah di pilih dari index.php
	$hadiah_keluar = $_GET['cbhadiah'];

//Ambil Nama hadiah yang keluar
	$hadiah = query("SELECT * FROM hadiah WHERE no_hadiah = $hadiah_keluar");
	$nm_hadiah = [];
	foreach ($hadiah as $datas) {
		$nm_hadiah = $datas;
	}

//ambil jumlah peserta + acak pemenang
	$peserta = query("SELECT * FROM peserta");
	$jumlah_peserta = count($peserta);
	$no_keluar = mt_rand(1, $jumlah_peserta);

//Ambil Nama Peserta yang nomornya keluar
	$menang = query("SELECT nama_peserta, menang, hadiah FROM peserta WHERE no_urut = $no_keluar");
	$pemenang = [];
	foreach ($menang as $data) {
		$pemenang = $data;
	}

// CEK No peserta sudah pernah keluar belum
	if ($pemenang["menang"] === "T") {
		$menang_hadiah = "Ulang, $pemenang[nama_peserta] Sudah Keluar";
	} else {
		$menang_hadiah = $pemenang["nama_peserta"];
		update("UPDATE peserta SET menang = 'T', hadiah = $hadiah_keluar WHERE no_urut = $no_keluar");
		update("UPDATE hadiah SET sudah_keluar = 'T' WHERE no_hadiah = $hadiah_keluar");
	}	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Pemenang </title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="winner 32.png" rel="icon" sizes="32x32" type="image/png">
<link href="winner 32.png" rel="icon" sizes="32x32" type="image/png">
<link href="winner.png" rel="icon" sizes="64x64" type="image/png">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="undian.css" rel="stylesheet">
<link href="hasil.css" rel="stylesheet">
</head>
<body>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_Text1">
<span style="color:#FFFFFF;font-family:Roboto;font-size:21px;"><strong>PEMENANG</strong></span>
</div>
</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text2">
<span style="color:#4F4F4F;font-family:Roboto;font-size:21px;"><strong>Hadiah</strong></span>
</div>
<div id="wb_Text3">
<span style="color:#4F4F4F;font-family:Roboto;font-size:21px;"><strong><?= $nm_hadiah['nama_hadiah'] ?></strong></span>
</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text4">
<span style="color:#4F4F4F;font-family:Roboto;font-size:21px;"><strong>Nomor</strong></span>
</div>
<div id="wb_Text5">
<span style="color:#4F4F4F;font-family:Roboto;font-size:21px;"><strong><?= $no_keluar ?></strong></span>
</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Text6">
<span style="color:#4F4F4F;font-family:Roboto;font-size:21px;"><strong>Nama</strong></span>
</div>
<div id="wb_Text7">
<span style="color:#4F4F4F;font-family:Roboto;font-size:21px;"><strong><?= $menang_hadiah; ?></strong></span>
</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_Text9">
<span style="color:#FFFFFF;font-family:Roboto;font-size:21px;"><strong><a href="./index.php" class="style1">BACK</a></strong></span>
</div>
</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="row">
<div class="col-1">
<div id="wb_Text8">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Created By Willi Wongky</span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>