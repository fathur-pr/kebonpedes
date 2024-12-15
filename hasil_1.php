<?php include "config.php"; ?>

<h2>DATA PENDUDUK PINDAH</h2>
<?php
  echo "KELURAHAN <br>";
  $data = mysql_query("select * from data_pindah where jenis_kelamin='Laki-Laki'");
  $baris_laki_laki = mysql_num_rows($data);
  while($d= mysql_fetch_array($data)){
    echo "<li>$d[kelurahan]</li><br>";
  }
    echo "Jumlah Laki-Laki : $baris_laki_laki";
?> 
<br><br>
<?php
  echo "KELURAHAN <br>";
  $data = mysql_query("select * from data_pindah where jenis_kelamin='Perempuan'");
  $baris_perempuan = mysql_num_rows($data);
  while($d= mysql_fetch_array($data)){
    echo "<li>$d[kelurahan]</li><br>";
  }
    echo "Jumlah Perempuan : $baris_perempuan";
?>

<h2>DATA PENDUDUK DATANG</h2>
<?php
  echo "KELURAHAN <br>";
  $data = mysql_query("select * from data_datang where jenis_kelamin='Laki-Laki'");
  $baris_laki_laki = mysql_num_rows($data);
  while($d= mysql_fetch_array($data)){
    echo "<li>$d[kelurahan]</li><br>";
  }
    echo "Jumlah Laki-Laki : $baris_laki_laki";
?> 
<br><br>
<?php
  echo "KELURAHAN <br>";
  $data = mysql_query("select * from data_datang where jenis_kelamin='Perempuan'");
  $baris_perempuan = mysql_num_rows($data);
  while($d= mysql_fetch_array($data)){
    echo "<li>$d[kelurahan]</li><br>";
  }
    echo "Jumlah Perempuan : $baris_perempuan";
?> 


<h2>DATA JUMLAH PENDUDUK</h2>
<?php
  echo "KELURAHAN <br>";
  $data = mysql_query("select * from data_penduduk where jenis_kelamin='Laki-Laki'");
  $baris_laki_laki = mysql_num_rows($data);
  while($d= mysql_fetch_array($data)){
    echo "<li>$d[kelurahan]</li><br>";
  }
    echo "Jumlah Laki-Laki : $baris_laki_laki";
?> 
<br><br>
<?php
  echo "KELURAHAN <br>";
  $data = mysql_query("select * from data_penduduk where jenis_kelamin='Perempuan'");
  $baris_perempuan = mysql_num_rows($data);
  while($d= mysql_fetch_array($data)){
    echo "<li>$d[kelurahan]</li><br>";
  }
    echo "Jumlah Perempuan : $baris_perempuan";
?> 