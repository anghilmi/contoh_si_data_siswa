<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Data_siswa List</h2>
        <table class="word-table" style="margin-bottom: 10px">
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
		
            </tr><?php
            foreach ($data_siswa_data as $data_siswa)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
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
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>