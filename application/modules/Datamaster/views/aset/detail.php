<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
?>

<head>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/tutwurihanda.png">
</head>

<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <!-- <ol class="breadcrumb">
                <li><a href="<?= base_url($linkin . '/add') ?>" class="btn btn-success">Tambah Data</a></li>
            </ol> -->
        </nav>
        <h4 class="mb-1 mt-0">Detail Data <?= $title ?></h4>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-activity-tab" data-toggle="pill" href="#pills-activity" role="tab" aria-controls="pills-activity" aria-selected="true">
                                Detail Barang <?= $data->namaBarang ?>
                            </a>

                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-activity" role="tabpanel" aria-labelledby="pills-activity-tab">
                            <h5 class="mt-1"></h5>

                            <form class="row g-3">

                                <div class="card mb-2" style="width: 1200px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="<?= base_url('upload/' . $data->foto) ?>" class="card-img">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <dt>Kode Barang</dt>
                                                        <input type="text" class="form-control" value="<?= $data->kodeBarang ?>" placeholder="" disabled>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <dt>Nama Barang</dt>
                                                        <input type="text" class="form-control" value="<?= $data->namaBarang ?>" placeholder="" disabled>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <dt>Jumlah Barang</dt>
                                                        <input type="text" class="form-control" value="<?= $data->jumlahBarang ?>" placeholder="" disabled>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <dt>Kategori Barang</dt>
                                                        <input type="text" class="form-control" value="<?= $data->kategoriBarang ?>" placeholder="" disabled>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <dt>Tanggal Terima</dt>
                                                        <input type="text" class="form-control" value="<?= $data->tanggalTerima ?>" placeholder="" disabled>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <dt>Sumber Dana</dt>
                                                        <input type="text" class="form-control" value="<?= $data->sumberDana ?>" placeholder="" disabled>
                                                    </div>
                                                    <div class="col-md-6 mt-2">
                                                        <dt>Kondisi</dt>
                                                        <input type="text" class="form-control" value="<?= $data->kondisi ?>" placeholder="" disabled>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <dt>Keterangan</dt>
                                                        <input type="text" class="form-control" value="<?= $data->keterangan ?>" placeholder="" disabled>
                                                    </div>
                                                </div>
                                                <a href="<?= base_url($linkin) ?>" class="btn btn-danger mt-3">Kembali</a>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>


                        </div>

                        <!-- messages -->


                        <!-- end attachments -->
                    </div>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->
</div> <!-- container-fluid -->
</div>

<script>
    function cekUser() {
        var user = $("#username").val();
        $.ajax({
            type: 'GET',
            url: '<?= base_url("datamaster/users/cekUser") ?>',
            data: "user=" + user,
            success: function(data) {
                $('#info').html(data)
            }
        })
    }
</script>