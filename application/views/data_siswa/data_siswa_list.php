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

        <h2 style="margin-top:0px">Daftar Data_siswa</h2>
        <hr>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('data_siswa/create'),'Tambah Data', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('data_siswa/index'); ?>" class="form-inline" method="get">
                <div class="input-group">
                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                <div class="input-group-append">
            
                
                    <?php 
                        if ($q <> '')
                        {
                            ?>
                            <a href="<?php echo site_url('data_siswa'); ?>" class="btn btn-outline-secondary">X</a>
                            <?php
                        }
                    ?>
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </div>
                </form>
            </div>
        </div>
        <div class="table-responsive-sm">

        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Timestamp</th>
		<th>Ra Md</th>
		<th>Nm Siswa</th>
		<th>Tmpt Lhr</th>
		<th>Ttl</th>
		<th>Jk</th>
		<th>Nik Siswa</th>
		<th>Sklh Umum</th>
		<th>Kelas Sklh</th>
		<th>Tgl Masuk</th>
		<th>Kelas Mad</th>
		<th>Alamat</th>
		<th>Desa</th>
		<th>Kec</th>
		<th>Kab</th>
		<th>Prov</th>
		<th>No Kk</th>
		<th>Nm Ayah</th>
		<th>Nik Ayah</th>
		<th>Pend Ayah</th>
		<th>Kerja Ayah</th>
		<th>Nm Ibu</th>
		<th>Nik Ibu</th>
		<th>Pend Ibu</th>
		<th>Kerja Ibu</th>
		<th>Gol Ekonomi</th>
		<th>Status Siswa</th>
		<th>Aksi</th>
            </tr><?php
            foreach ($data_siswa_data as $data_siswa)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $data_siswa->timestamp ?></td>
			<td><?php echo $data_siswa->ra_md ?></td>
			<td><?php echo $data_siswa->nm_siswa ?></td>
			<td><?php echo $data_siswa->tmpt_lhr ?></td>
			<td><?php echo $data_siswa->ttl ?></td>
			<td><?php echo $data_siswa->jk ?></td>
			<td><?php echo $data_siswa->nik_siswa ?></td>
			<td><?php echo $data_siswa->sklh_umum ?></td>
			<td><?php echo $data_siswa->kelas_sklh ?></td>
			<td><?php echo $data_siswa->tgl_masuk ?></td>
			<td><?php echo $data_siswa->kelas_mad ?></td>
			<td><?php echo $data_siswa->alamat ?></td>
			<td><?php echo $data_siswa->desa ?></td>
			<td><?php echo $data_siswa->kec ?></td>
			<td><?php echo $data_siswa->kab ?></td>
			<td><?php echo $data_siswa->prov ?></td>
			<td><?php echo $data_siswa->no_kk ?></td>
			<td><?php echo $data_siswa->nm_ayah ?></td>
			<td><?php echo $data_siswa->nik_ayah ?></td>
			<td><?php echo $data_siswa->pend_ayah ?></td>
			<td><?php echo $data_siswa->kerja_ayah ?></td>
			<td><?php echo $data_siswa->nm_ibu ?></td>
			<td><?php echo $data_siswa->nik_ibu ?></td>
			<td><?php echo $data_siswa->pend_ibu ?></td>
			<td><?php echo $data_siswa->kerja_ibu ?></td>
			<td><?php echo $data_siswa->gol_ekonomi ?></td>
			<td><?php echo $data_siswa->status_siswa ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('data_siswa/read/'.$data_siswa->id),'Baca'); 
				echo ' | '; 
				echo anchor(site_url('data_siswa/update/'.$data_siswa->id),'Ubah'); 
				echo ' | '; 
				?>
        
        <!-- Button trigger modal -->
<a href="" data-toggle="modal" data-target="#hapus">
  Hapus
</a>

<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusLabel">Hapus Data?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin ingin menghapus ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <?php echo anchor(site_url('data_siswa/delete/'.$data_siswa->id),'Hapus','class="btn btn-danger"')?>
      </div>
    </div>
  </div>
</div>
		</tr>
                <?php
            }
            ?>
        </table>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Data : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('data_siswa/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('data_siswa/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
      </div>
        </body>
    </html>