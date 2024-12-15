<h2 align="center">Data Penduduk Pindah Kelurahan Kebon Pedes</h2>
<div class="row">
  <div class="col-md-12">
    <div class="btn-group">
      
                                    <div class="table-toolbar">
                                                                      

    <div class="panel panel-default">
      <div class="panel-body">
        <table class="table table-striped table-bordered" border="1" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th rowspan="2">No</th>
              <th rowspan="2">Kelurahan</th>
              <th colspan="3">Data Penduduk Pindah</th>
            </tr>
            <tr>
              <th>L</th>
              <th>P</th>
              <th>L + P</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include "config.php";
              $data = mysql_query("select *from data_rw");
              $no = 1;
              while ($d= mysql_fetch_array($data)){ ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_rw'];?></td>
                <td align="center">
                  <?php 
                    $data_laki_laki = mysql_query("select * from data_pindah where jenis_kelamin='Laki-Laki' && kelurahan='$d[nama_rw]'");
                    $baris_laki_laki = mysql_num_rows($data_laki_laki);
                    echo "$baris_laki_laki";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_perempuan = mysql_query("select * from data_pindah where jenis_kelamin='Perempuan' && kelurahan='$d[nama_rw]'");
                    $baris_perempuan = mysql_num_rows($data_perempuan);
                    echo "$baris_perempuan";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_all = mysql_query("select * from data_pindah where kelurahan='$d[nama_rw]'");
                    $baris = mysql_num_rows($data_all);
                    echo "$baris";
                  ?>
                </td>
              </tr>
            <?php } ?>  
            <tr>
              <td colspan="2" align="center">Jumlah</td>
              <td align="center">
                  <?php 
                    $jumlah_kel_laki = mysql_query("select COUNT(jenis_kelamin) as total_jk_laki from data_pindah where jenis_kelamin='Laki-Laki'");
                    while($kel_laki= mysql_fetch_array($jumlah_kel_laki)){
                      echo $kel_laki['total_jk_laki'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_kel_pere = mysql_query("select COUNT(jenis_kelamin) as total_jk_pere from data_pindah where jenis_kelamin='Perempuan'");
                    while($kel_pere= mysql_fetch_array($jumlah_kel_pere)){
                      echo $kel_pere['total_jk_pere'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_kel_all = mysql_query("select COUNT(jenis_kelamin) as total_jk_all from data_pindah");
                    while($kel_all= mysql_fetch_array($jumlah_kel_all)){
                      echo $kel_all['total_jk_all'];
                    }
                  ?>
              </td>
            </tr>
          </tbody>
        </table>