<?php include_once('../_header.php'); ?>
<script type="text/javascript" src="../_assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
  function printArea(area) {
    var printPage = document.getElementById(area).innerHTML;
    var oriPage = document.body.innerHTML;
    document.body.innerHTML = printPage;
    window.print();
    document.body.innerHTML = oriPage;
  }
</script>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Hasil
      <small>Hasil</small>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success box-solid">
          <div class="box-header">
            <h3 class="box-title">Data Bobot</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive m-t-40">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $qr = mysqli_query($con, "SELECT * FROM tb_kriteria ") or die(mysqli_error($con));
                  $i = 1;
                  $total = 0;
                  while ($data = mysqli_fetch_array($qr)) {
                    $angka[$i] = $data['nilai_kriteria'];
                    $total = $total + $angka[$i];
                    $i++;
                  }
                  $j = 1;
                  $total_w = 0;
                  $qr2 = mysqli_query($con, "SELECT * FROM tb_kriteria ") or die(mysqli_error($con));
                  while ($dt2 = mysqli_fetch_array($qr2)) {
                    $w[$j] = 0;
                    $w[$j] = $angka[$j] / $total;
                    $total_w = $total_w + $w[$j];
                    $j++;
                  }
                  ?>
                  <tr>
                    <td>bobot</td>
                    <td><?php echo $angka[1]; ?></td>
                    <td><?php echo $angka[2]; ?></td>
                    <td><?php echo $angka[3]; ?></td>
                    <td><?php echo $total; ?></td>
                  </tr>
                  <tr>
                    <td>W</td>
                    <td><?php echo $w[1]; ?></td>
                    <td><?php echo $w[2]; ?></td>
                    <td><?php echo $w[3]; ?></td>
                    <td><?php echo $total_w; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-success box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Data Alternatif</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pendaftar</th>
                  <th>K1</th>
                  <th>K2</th>
                  <th>K3</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                if (mysqli_num_rows($sql_a) > 0) {
                  while ($data = mysqli_fetch_array($sql_a)) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['k1'] ?></td>
                      <td><?= $data['k2'] ?></td>
                      <td><?= $data['k3'] ?></td>
                    </tr>
                <?php
                  }
                } else {
                  echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-success box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Hasil Utility</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <div class="table-responsive m-t-40">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pendaftar</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $bb = 1;
                  $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                  if (mysqli_num_rows($sql_a) > 0) {
                    while ($data = mysqli_fetch_array($sql_a)) {
                  ?>
                      <?php $a[$bb] = (($data['k1'] - 50) / (100 - 50)) ?>
                      <?php $b[$bb] = (($data['k2'] - 50) / (100 - 50)) ?>
                      <?php $c[$bb] = (($data['k3'] - 60) / (100 - 60)) ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?php echo number_format($a[$bb], 2); ?></td>
                        <td><?php echo number_format($b[$bb], 2); ?></td>
                        <td><?php echo number_format($c[$bb], 2); ?></td>
                      </tr>
                  <?php
                      $bb++;
                    }
                  } else {
                    echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-success box-solid">
          <div class="box-header">
            <h3 class="box-title">Hasil Utility X</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive m-t-40">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pendaftar</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>Hasil Akhir</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $qr = mysqli_query($con, "SELECT * FROM tb_alternatif ") or die(mysqli_error($con));
                  while ($data = mysqli_fetch_array($qr)) {

                    $sa = $a[$no] * $w[1];
                    $sb = $b[$no] * $w[2];
                    $sc = $c[$no] * $w[3];
                  ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?php echo number_format($sa, 2); ?></td>
                      <td><?php echo number_format($sb, 2); ?></td>
                      <td><?php echo number_format($sc, 2); ?></td>
                      <td><?php $re = $sa + $sb + $sc;
                          echo number_format($re, 4); ?></td>
                    </tr>
                  <?php $no++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-success box-solid">
          <div class="box-header">
            <h3 class="box-title">Hasil Akhir</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive m-t-40" id="area">
              <table id="example2" class="table table-bordered table-striped">
                <a id="area" onclick="printArea('area')" class="btn btn-danger pull-right"> <i class="fa fa-print"></i></a>
                <thead>
                  <tr>
                    <th>Nama Pendaftar</th>
                    <th>Rank</th>
                    <th>Keputusan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $qr = mysqli_query($con, "SELECT * FROM tb_alternatif ") or die(mysqli_error($con));
                  while ($data = mysqli_fetch_array($qr)) {
                    $sa = $a[$no] * $w[1];
                    $sb = $b[$no] * $w[2];
                    $sc = $c[$no] * $w[3];
                  ?>
                    <tr>
                      <td><?= $data['nama'] ?></td>
                      <td><?php $re = $sa + $sb + $sc;
                          echo number_format($re, 4); ?></td>
                      <td><?php
                          if ($re >= 0.5) {
                            $i = 'layak';
                          } else {
                            $i = 'Tidak Layak';
                          } ?><?php echo $i; ?></td>
                    </tr>
                  <?php $no++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <a href="http://localhost/kpri-kogussel/"><span>
        < Back</span></a> -->
  </section>
</div>
<?php include_once('../_footer.php'); ?>