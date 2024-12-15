<?php  
include "config.php";
$id = $_GET['id'];  
$query = "DELETE from penduduk_daftar WHERE id='$id'";  
$delete = mysql_query($query)  or die(mysql_error());
?>

<script language="JavaScript">
alert('Data Berhasil dihapus.');
document.location.href="?pages=lihatdata";
</script>
