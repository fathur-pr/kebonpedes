<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=laporanmutasi.xls");
 
// Tambahkan table

?>
    <table>
      <tr>
        <td colspan="11" align="center" style="font-weight: bold;">Data Penduduk rw Kebon Pedes</td>
      </tr>
    </table>
    <br>
    <table class="table table-striped table-bordered" border="1" cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th rowspan="2">No</th>
              <th rowspan="2">Kelurahan</th>
              <th colspan="3">Data Penduduk Pindah</th>
              <th colspan="3">Data Penduduk Datang</th>
              <th colspan="3">Data Penduduk</th>
            </tr>
            <tr>
              <th>L</th>
              <th>P</th>
              <th>L + P</th>
              <th>L</th>
              <th>P</th>
              <th>L + P</th>
              <th>L</th>
              <th>P</th>
              <th>L + P</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include "config.php";
              $data = mysql_query("select * from data_rw");
              $no = 1;
              while ($d= mysql_fetch_array($data)){ ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_rw'];?></td>
                <?php //data pindah ?>
                <td align="center">
                  <?php 
                    $data_laki_laki_kem = mysql_query("select * from data_pindah where jenis_kelamin='Laki-Laki' && rw='$d[nama_rw]'");
                    $baris_laki_laki_kem = mysql_num_rows($data_laki_laki_kem);
                    echo "$baris_laki_laki_kem";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_perempuan_kem = mysql_query("select * from data_pindah where jenis_kelamin='Perempuan' && rw='$d[nama_rw]'");
                    $baris_perempuan_kem = mysql_num_rows($data_perempuan_kem);
                    echo "$baris_perempuan_kem";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_all_kem = mysql_query("select * from data_pindah where rw='$d[nama_rw]'");
                    $baris_kem = mysql_num_rows($data_all_kem);
                    echo "$baris_kem";
                  ?>
                </td>
                <?php //data datang ?>
                <td align="center">
                  <?php 
                    $data_laki_laki_kel = mysql_query("select * from data_datang where jenis_kelamin='Laki-Laki' && rw='$d[nama_rw]'");
                    $baris_laki_laki_kel = mysql_num_rows($data_laki_laki_kel);
                    echo "$baris_laki_laki_kel";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_perempuan_kel = mysql_query("select * from data_datang where jenis_kelamin='Perempuan' && rw='$d[nama_rw]'");
                    $baris_perempuan_kel = mysql_num_rows($data_perempuan_kel);
                    echo "$baris_perempuan_kel";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_all_kel = mysql_query("select * from data_datang where rw='$d[nama_rw]'");
                    $baris_kel = mysql_num_rows($data_all_kel);
                    echo "$baris_kel";
                  ?>
                </td>
                <?php //data penduduk ?>
                <td align="center">
                  <?php 
                    $data_laki_laki_pen = mysql_query("select * from data_penduduk where jenis_kelamin='Laki-Laki' && rw='$d[nama_rw]'");
                    $baris_laki_laki_pen = mysql_num_rows($data_laki_laki_pen);
                    echo "$baris_laki_laki_pen";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_perempuan_pen = mysql_query("select * from data_penduduk where jenis_kelamin='Perempuan' && rw='$d[nama_rw]'");
                    $baris_perempuan_pen = mysql_num_rows($data_perempuan_pen);
                    echo "$baris_perempuan_pen";
                  ?>
                </td>
                <td align="center">
                  <?php 
                    $data_all_pen = mysql_query("select * from data_penduduk where rw='$d[nama_rw]'");
                    $baris_pen = mysql_num_rows($data_all_pen);
                    echo "$baris_pen";
                  ?>
                </td>
              </tr>
            <?php } ?>  
            <tr>
              <td colspan="2" align="center">Jumlah</td>
              <?php // data pindah ?>
              <td align="center">
                  <?php 
                    $jumlah_kem_laki = mysql_query("select COUNT(jenis_kelamin) as total_jk_laki from data_pindah where jenis_kelamin='Laki-Laki'");
                    while($kem_laki= mysql_fetch_array($jumlah_kem_laki)){
                      echo $kem_laki['total_jk_laki'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_kem_pere = mysql_query("select COUNT(jenis_kelamin) as total_jk_pere from data_pindah where jenis_kelamin='Perempuan'");
                    while($kem_pere= mysql_fetch_array($jumlah_kem_pere)){
                      echo $kem_pere['total_jk_pere'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_kem_all = mysql_query("select COUNT(jenis_kelamin) as total_jk_all from data_pindah");
                    while($kem_all= mysql_fetch_array($jumlah_kem_all)){
                      echo $kem_all['total_jk_all'];
                    }
                  ?>
              </td>
              <?php // data datang ?>
              <td align="center">
                  <?php 
                    $jumlah_kel_laki = mysql_query("select COUNT(jenis_kelamin) as total_jk_laki from data_datang where jenis_kelamin='Laki-Laki'");
                    while($kel_laki= mysql_fetch_array($jumlah_kel_laki)){
                      echo $kel_laki['total_jk_laki'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_kel_pere = mysql_query("select COUNT(jenis_kelamin) as total_jk_pere from data_datang where jenis_kelamin='Perempuan'");
                    while($kel_pere= mysql_fetch_array($jumlah_kel_pere)){
                      echo $kel_pere['total_jk_pere'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_kel_all = mysql_query("select COUNT(jenis_kelamin) as total_jk_all from data_datang");
                    while($kel_all= mysql_fetch_array($jumlah_kel_all)){
                      echo $kel_all['total_jk_all'];
                    }
                  ?>
              </td>
              <?php // data penduduk ?>
              <td align="center">
                  <?php 
                    $jumlah_all_laki = mysql_query("select COUNT(jenis_kelamin) as total_jk_all_laki from data_penduduk where jenis_kelamin='Laki-Laki'");
                    while($all_laki= mysql_fetch_array($jumlah_all_laki)){
                      echo $all_laki['total_jk_all_laki'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_all_pere = mysql_query("select COUNT(jenis_kelamin) as total_jk_all_pere from data_penduduk where jenis_kelamin='Perempuan'");
                    while($all_pere= mysql_fetch_array($jumlah_all_pere)){
                      echo $all_pere['total_jk_all_pere'];
                    }
                  ?>
              </td>
              <td align="center">
                  <?php 
                    $jumlah_all = mysql_query("select COUNT(jenis_kelamin) as total_jk_all from data_penduduk");
                    while($all= mysql_fetch_array($jumlah_all)){
                      echo $all['total_jk_all'];
                    }
                  ?>
              </td>
            </tr>
          </tbody>
        </table>