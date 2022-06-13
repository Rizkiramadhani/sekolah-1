<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
$no = 1;
ob_start();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Laporan</title>
</head>

<body>

    <p align="center">
        <img src="assets/images/lppm1.png" alt="logo" style="position: absolute; width: 100px; height: auto; ">
        <b>

            <font size="4">Lembaga Penelitian dan Pengabdian kepada Masyarakat </font> <br>
            <font size="5">Universitas Sari Mulia</font><br>
            <font size="2">Jln. Pramuka No. 2 Banjarmasin (0511)3268105, Fax. (0511)3270134, Website : lppm.unism.ac.id</font><br>
            <hr size="2px" color="black">
        </b>
    </p>
    <h4>
        <center>
            <u>Laporan Data Hibah Proposal yang di Terima</u><br>
        </center>
    </h4>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" cellpadding="6" width="100%">
                    <thead>
                        <tr bgcolor="#C2C2C2">
                            <th style="text-align: center; font-size: 12px;">No</th>
                            <th style="text-align: center; font-size: 12px;">Nama Lengkap</th>
                            <th style="text-align: center; font-size: 12px;">Judul</th>
                            <th style="text-align: center; font-size: 12px;">Skema</th>
                            <th style="text-align: center; font-size: 12px;">Periode</th>
                            <th style="text-align: center; font-size: 12px;">Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- <?php foreach ($seleksi as $row) : ?>
                            <tr>
                                <td align="center"><?= $no++; ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->judulProposal ?></td>
                                <td align="center">
                                    <?= $row->jenisHibah == '1' ? 'Penelitian' : 'Pengabdian kepada Masyarakat' ?>

                                </td>
                                <td align="center"><?= $row->tahun ?></td>
                                <td align="center"><?= $row->statusProposal ?></td>
                            </tr>
                        <?php endforeach ?> -->
                    </tbody>

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