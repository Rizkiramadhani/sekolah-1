<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
?>

<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <!-- <ol class="breadcrumb">
                <li><a href="<?= base_url($ctrl . '/add') ?>" class="btn btn-success">Tambah Data</a></li>
            </ol> -->
        </nav>
        <h4 class="mb-1 mt-0">Edit Data <?= $title ?></h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= base_url($linkin . '/editAction/' . $this->uri->segment(4)) ?>" enctype="multipart/form-data" method="post">

                    <div class="form-group mb-3">
                        <label for="validationCustom01">Kode Barang</label>
                        <input type="text" class="form-control" name="kodeBarang" id="" value="<?= $row->kodeBarang ?>" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Nama Barang <small id="info"></small></label>
                        <input type="text" class="form-control" name="namaBarang" id="" value="<?= $row->namaBarang ?>" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom01">Kategori Barang</label>
                        <?= cmb_dinamis('idKategoriBarang', 'kategori_barang', 'kategoriBarang', 'idKategoriBarang', $selected = $row->idKategoriBarang, '') ?>
                        </select>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom01">Tanggal Terima</label>
                        <input type="date" class="form-control" name="tanggalTerima" id="" value="<?= $row->tanggalTerima ?>" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Sumber Dana</label>
                        <select class="form-control" name="sumberDana">

                            <option value="Dana Bos" <?php if ($row->sumberDana == 'Dana Bos') {
                                                            echo 'selected';
                                                        } ?>>Dana Bos</option>
                            <option value="Dana Masyarakat" <?php if ($row->sumberDana == 'Dana Masyarakat') {
                                                                echo 'selected';
                                                            } ?>>Dana Masyarakat</option>
                            <option value="Dana Swadaya" <?php if ($row->sumberDana == 'Dana Swadaya') {
                                                                echo 'selected';
                                                            } ?>>Dana Swadaya</option>
                            <option value="Sumber Lain" <?php if ($row->sumberDana == 'Sumber Lain') {
                                                            echo 'selected';
                                                        } ?>>Sumber Lain</option>
                        </select>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Jumlah Barang</label>
                        <input type="text" class="form-control" name="jumlahBarang" id="" value="<?= $row->jumlahBarang ?>" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Kondisi</label>
                        <input type="text" class="form-control" name="kondisi" id="" value="<?= $row->kondisi ?>" required>
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="" value="<?= $row->keterangan ?>">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Cantumkan Foto</label>
                        <input type="file" class="form-control" name="foto">
                        <div class="invalid-feedback">
                            Harus diisi!
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="<?= base_url($linkin) ?>" class="btn btn-danger">Kembali</a>
                </form>
            </div> <!-- end card-body-->
        </div>
    </div>
</div>