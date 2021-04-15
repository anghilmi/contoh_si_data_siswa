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
        <h3 style="margin-top:0px"><?php echo $button ?> Data_siswa</h3>
        <hr>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
            <label for="timestamp">Timestamp <?php echo form_error('timestamp') ?></label>
            <input type="text" class="form-control" name="timestamp" id="timestamp" placeholder="Timestamp" autocomplete="off" value="<?php echo $timestamp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ra Md <?php echo form_error('ra_md') ?></label>
            <input type="text" class="form-control" name="ra_md" id="ra_md" placeholder="Ra Md" autocomplete="off" value="<?php echo $ra_md; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Siswa <?php echo form_error('nm_siswa') ?></label>
            <input type="text" class="form-control" name="nm_siswa" id="nm_siswa" placeholder="Nm Siswa" autocomplete="off" value="<?php echo $nm_siswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tmpt Lhr <?php echo form_error('tmpt_lhr') ?></label>
            <input type="text" class="form-control" name="tmpt_lhr" id="tmpt_lhr" placeholder="Tmpt Lhr" autocomplete="off" value="<?php echo $tmpt_lhr; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ttl <?php echo form_error('ttl') ?></label>
            <input type="text" class="form-control" name="ttl" id="ttl" placeholder="Ttl" autocomplete="off" value="<?php echo $ttl; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jk <?php echo form_error('jk') ?></label>
            <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" autocomplete="off" value="<?php echo $jk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik Siswa <?php echo form_error('nik_siswa') ?></label>
            <input type="text" class="form-control" name="nik_siswa" id="nik_siswa" placeholder="Nik Siswa" autocomplete="off" value="<?php echo $nik_siswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sklh Umum <?php echo form_error('sklh_umum') ?></label>
            <input type="text" class="form-control" name="sklh_umum" id="sklh_umum" placeholder="Sklh Umum" autocomplete="off" value="<?php echo $sklh_umum; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelas Sklh <?php echo form_error('kelas_sklh') ?></label>
            <input type="text" class="form-control" name="kelas_sklh" id="kelas_sklh" placeholder="Kelas Sklh" autocomplete="off" value="<?php echo $kelas_sklh; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tgl Masuk <?php echo form_error('tgl_masuk') ?></label>
            <input type="text" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="Tgl Masuk" autocomplete="off" value="<?php echo $tgl_masuk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelas Mad <?php echo form_error('kelas_mad') ?></label>
            <input type="text" class="form-control" name="kelas_mad" id="kelas_mad" placeholder="Kelas Mad" autocomplete="off" value="<?php echo $kelas_mad; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" autocomplete="off" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Desa <?php echo form_error('desa') ?></label>
            <input type="text" class="form-control" name="desa" id="desa" placeholder="Desa" autocomplete="off" value="<?php echo $desa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kec <?php echo form_error('kec') ?></label>
            <input type="text" class="form-control" name="kec" id="kec" placeholder="Kec" autocomplete="off" value="<?php echo $kec; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kab <?php echo form_error('kab') ?></label>
            <input type="text" class="form-control" name="kab" id="kab" placeholder="Kab" autocomplete="off" value="<?php echo $kab; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Prov <?php echo form_error('prov') ?></label>
            <input type="text" class="form-control" name="prov" id="prov" placeholder="Prov" autocomplete="off" value="<?php echo $prov; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">No Kk <?php echo form_error('no_kk') ?></label>
            <input type="text" class="form-control" name="no_kk" id="no_kk" placeholder="No Kk" autocomplete="off" value="<?php echo $no_kk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Ayah <?php echo form_error('nm_ayah') ?></label>
            <input type="text" class="form-control" name="nm_ayah" id="nm_ayah" placeholder="Nm Ayah" autocomplete="off" value="<?php echo $nm_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik Ayah <?php echo form_error('nik_ayah') ?></label>
            <input type="text" class="form-control" name="nik_ayah" id="nik_ayah" placeholder="Nik Ayah" autocomplete="off" value="<?php echo $nik_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pend Ayah <?php echo form_error('pend_ayah') ?></label>
            <input type="text" class="form-control" name="pend_ayah" id="pend_ayah" placeholder="Pend Ayah" autocomplete="off" value="<?php echo $pend_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kerja Ayah <?php echo form_error('kerja_ayah') ?></label>
            <input type="text" class="form-control" name="kerja_ayah" id="kerja_ayah" placeholder="Kerja Ayah" autocomplete="off" value="<?php echo $kerja_ayah; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nm Ibu <?php echo form_error('nm_ibu') ?></label>
            <input type="text" class="form-control" name="nm_ibu" id="nm_ibu" placeholder="Nm Ibu" autocomplete="off" value="<?php echo $nm_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik Ibu <?php echo form_error('nik_ibu') ?></label>
            <input type="text" class="form-control" name="nik_ibu" id="nik_ibu" placeholder="Nik Ibu" autocomplete="off" value="<?php echo $nik_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pend Ibu <?php echo form_error('pend_ibu') ?></label>
            <input type="text" class="form-control" name="pend_ibu" id="pend_ibu" placeholder="Pend Ibu" autocomplete="off" value="<?php echo $pend_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kerja Ibu <?php echo form_error('kerja_ibu') ?></label>
            <input type="text" class="form-control" name="kerja_ibu" id="kerja_ibu" placeholder="Kerja Ibu" autocomplete="off" value="<?php echo $kerja_ibu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gol Ekonomi <?php echo form_error('gol_ekonomi') ?></label>
            <input type="text" class="form-control" name="gol_ekonomi" id="gol_ekonomi" placeholder="Gol Ekonomi" autocomplete="off" value="<?php echo $gol_ekonomi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status Siswa <?php echo form_error('status_siswa') ?></label>
            <input type="text" class="form-control" name="status_siswa" id="status_siswa" placeholder="Status Siswa" autocomplete="off" value="<?php echo $status_siswa; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_siswa') ?>" class="btn btn-default">Batal</a>
	</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</div>
</body>
</html>