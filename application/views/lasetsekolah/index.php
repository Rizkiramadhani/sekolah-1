<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
$no = 1;
$now = date('Y-m-d');
ob_start();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
</head>

<body>

    <p align="center">
        <img src="assets/images/tutwurihanda.png" alt="logo" style="position: absolute; width: 80px; height: auto; ">
        <b>

            <font size="4">Sekolah Menengah Pertama Negeri 2 Muara Uya</font> <br>
            <font size="2">Jln. Bukti Utama No.7 Desa Ribang RT.08 Muara Uya Kabupaten Tabalong Kalimantan Selatan </font><br>
            <font size="2">Telp. (0511)1234567, Website : www.smpn2muarauya.sch.id</font><br>
            <hr size="2px" color="black">
        </b>
    </p>
    <h4>
        <center>
            <u>Laporan Aset Sekolah</u><br>
        </center>
    </h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" cellpadding="6" width="100%">
                    <thead>
                        <tr bgcolor="#C2C2C2">
                            <th style="text-align: center; font-size: 12px;">No</th>
                            <!-- <th style="text-align: center; font-size: 12px;">Foto</th> -->
                            <th style="text-align: center; font-size: 12px;">Nama Barang</th>
                            <th style="text-align: center; font-size: 12px;">Kategori Barang</th>
                            <th style="text-align: center; font-size: 12px;">Jumlah Barang</th>
                            <th style="text-align: center; font-size: 12px;">Kondisi</th>
                            <th style="text-align: center; font-size: 12px;">Sumber Dana</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td align="center"><?= $no++; ?></td>
                                <!-- <td align="center"><img src="<?= base_url() ?>/assets/images/aset/<?= $row->foto ?>"></td> -->
                                <td><?= $row->namaBarang ?></td>
                                <td align="center"><?= $row->kategoriBarang ?></td>
                                <td align="center"><?= $row->jumlahBarang ?></td>
                                <td align="center"><?= $row->kondisi ?></td>
                                <td align="center"><?= $row->sumberDana ?></td>

                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
                <br><br><br>
                <table width='40%' style='float:right'>
                    <tr>
                        <td>Muara Uya, <?= tgl_indo($now) ?> <br>
                            Kepala Sekolah,<br><br><br><br>


                            <b> <?= $guru->namaGuru ?> <br>
                                NIP : <?= $guru->nip ?></b>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br>
    <br>

    <br>


</body>

</html>
<?=
$html = ob_get_clean();
?>