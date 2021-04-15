<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css" >

    <title></title>
  </head>
  <body>
  <br>
  <div class="container-fluid">
        <h3 style="margin-top:0px">Baca Data_siswa</h3>
        <br>
        <table class="table">
	    <tr><td>Timestamp</td><td><?php echo $timestamp; ?></td></tr>
	    <tr><td>Ra Md</td><td><?php echo $ra_md; ?></td></tr>
	    <tr><td>Nm Siswa</td><td><?php echo $nm_siswa; ?></td></tr>
	    <tr><td>Tmpt Lhr</td><td><?php echo $tmpt_lhr; ?></td></tr>
	    <tr><td>Ttl</td><td><?php echo $ttl; ?></td></tr>
	    <tr><td>Jk</td><td><?php echo $jk; ?></td></tr>
	    <tr><td>Nik Siswa</td><td><?php echo $nik_siswa; ?></td></tr>
	    <tr><td>Sklh Umum</td><td><?php echo $sklh_umum; ?></td></tr>
	    <tr><td>Kelas Sklh</td><td><?php echo $kelas_sklh; ?></td></tr>
	    <tr><td>Tgl Masuk</td><td><?php echo $tgl_masuk; ?></td></tr>
	    <tr><td>Kelas Mad</td><td><?php echo $kelas_mad; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Desa</td><td><?php echo $desa; ?></td></tr>
	    <tr><td>Kec</td><td><?php echo $kec; ?></td></tr>
	    <tr><td>Kab</td><td><?php echo $kab; ?></td></tr>
	    <tr><td>Prov</td><td><?php echo $prov; ?></td></tr>
	    <tr><td>No Kk</td><td><?php echo $no_kk; ?></td></tr>
	    <tr><td>Nm Ayah</td><td><?php echo $nm_ayah; ?></td></tr>
	    <tr><td>Nik Ayah</td><td><?php echo $nik_ayah; ?></td></tr>
	    <tr><td>Pend Ayah</td><td><?php echo $pend_ayah; ?></td></tr>
	    <tr><td>Kerja Ayah</td><td><?php echo $kerja_ayah; ?></td></tr>
	    <tr><td>Nm Ibu</td><td><?php echo $nm_ibu; ?></td></tr>
	    <tr><td>Nik Ibu</td><td><?php echo $nik_ibu; ?></td></tr>
	    <tr><td>Pend Ibu</td><td><?php echo $pend_ibu; ?></td></tr>
	    <tr><td>Kerja Ibu</td><td><?php echo $kerja_ibu; ?></td></tr>
	    <tr><td>Gol Ekonomi</td><td><?php echo $gol_ekonomi; ?></td></tr>
	    <tr><td>Status Siswa</td><td><?php echo $status_siswa; ?></td></tr>
	</table>
<a href="<?php echo site_url('data_siswa') ?>" class="btn btn-primary">Tutup</a>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</body>
</html>