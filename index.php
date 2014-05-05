!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../style.css" media="screen, tv, projection" />
  <title>Aplikasi Gaji</title>
</head>

<body>
<div id="bodyDiv">

<!-- ##### Header ##### -->
<div id="header"></div>

<!-- ##### Header Close ##### -->
<div id="headMenu">
	<ul>
	<li>&nbsp;<a href="../index.html">Home</a></li>
	<li><a href="../pns/index.php">PNS</a></li>
	<li><a href="../honorer/index.php">Honorer</a></li>
	<li><a href="../pengaturan/index.php">Pengaturan</a></li>
	<li><a href="../laporan/index.php">Laporan</a></li>
	</ul>
  </div>
<!-- ##### Content ##### -->
<div id="contentDiv">
  	<div id="contentLeft">
	<p align="center">Menu</p>
	<a href="index.php">->&nbsp;&nbsp;&nbsp;Jabatan</a>
	<a href="satker.php">Satuan Kerja</a>
	</div>
		
		<div id="contentMiddle">
		<div id="atur">
		<a href='jabatan.php?status=new'>Tambah Jabatan</a></div><hr>
		<form method=POST action="search_jab.php?mode=search">
&nbsp;<b>Pencarian nama</b><br>&nbsp;<input type=text name=search> <input type=submit name=submit
value=Cari>
</form><hr>
<?
$warnaGenap = "#CCCCCC";   // warna abu-abu
$warnaGanjil = "#FFFFFF";  // warna putih
$warnaHeading = "#00CCFF"; // warna biru untuk heading tabel
$counter = 1;
?>
<table width="600" border="0" cellspacing="0" cellpadding="2" align="center" style="border-collapse: collapse;font-family:arial;font-size:12px;color:black;font-weight:lighter;">
<tr <? echo "bgcolor='".$warnaHeading."'";?>>
<td width="120">&nbsp;</td>
<td width="150">Nama Jabatan</td>
<td width="200">Keterangan</td>
<?
include_once "../connect.php";
$SQL_1="SELECT
IDJabatan,
NamaJabatan,
Keterangan
FROM
jabatan ORDER BY IDJabatan DESC";
$result_1=mysql_query($SQL_1);
while($row=mysql_fetch_object($result_1)){
if ($counter % 2 == 0) $warna = $warnaGenap;
else $warna = $warnaGanjil;?>
<tr <? echo "bgcolor='".$warna."'";?>>
<td><input name="btnHapus" type="submit" class="button" onclick="javaScript:location.href='jabatan.php?status=hapus&id=<? print $row->IDJabatan?>'" value="Hapus">
<input name="btnUbah" type="submit" class="button" onclick="javaScript:location.href='jabatan.php?status=ubah&id=<? print $row->IDJabatan?>'" value="Ubah"></td>
<td><? print $row->NamaJabatan?></td>
<td><? print $row->Keterangan?></td>
</tr>
<? $counter++;} ?>
</table>
</div>
		
		
   <!-- ##### Content Close##### -->

<!-- ##### Footer ##### -->
  <div id="footer"></div>
<!-- ##### Footer Close ##### -->
</div>
</div>
</body>
</html>
<? include "../disconnect.php"; ?>
