<?php 
 require 'fungsi.php';
//Isi Cobo box hadiah
	$hadiah = query("SELECT * FROM hadiah WHERE sudah_keluar = 'F'");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GA RTAR</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="icon 32.png" rel="icon" sizes="32x31" type="image/png">
<link href="icon 32.png" rel="icon" sizes="32x31" type="image/png">
<link href="icon 64.png" rel="icon" sizes="64x62" type="image/png">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="undian.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
</head>
<body>
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:0;">
<img src="images/logo.png" id="Image1" alt="">
</div>
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<form name="hadiah" method="get" action="hasil.php" >
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
</div>
<form name="hadiah" method="get" action="hasil.php" >
<div class="col-2">
<div id="wb_Text1">
<span style="color:#696969;font-family:Roboto;font-size:20px;"><strong>PILIH HADIAH</strong></span>
</div>
<select name="cbhadiah" size="1" id="Combobox1" style="display:block;width: 100%;height:36px;z-index:2;">
	<?php foreach ($hadiah as $item) :?> 
        <option value=<?= $item["no_hadiah"] ?>> <?= $item["nama_hadiah"] ?> </option>
    <?php endforeach?>
</select>
<input type="submit" id="Button1" name="acaksubmit" value="Acak Nomor" style="display:inline-block;width:148px;height:50px;z-index:3;">
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
</form>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="row">
<div class="col-1">
<div id="wb_Text2">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Created By Willi Wongky</span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>