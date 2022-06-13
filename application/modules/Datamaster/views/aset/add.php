<?php
$linkin = $this->uri->segment(1) . '/' . $this->uri->segment(2);
?>

<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <!-- <ol class="breadcrumb">
                <li><a href="<?= base_url($linkin . '/add') ?>" class="btn btn-success">Tambah Data</a></li>
            </ol> -->
        </nav>
        <h4 class="mb-1 mt-0">Tambah Data <?= $title ?></h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="<?= base_url($linkin . '/addAction') ?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Kode Barang</label>
                                <input type="text" class="form-control" name="kodeBarang" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Nama Barang <small id="info"></small></label>
                                <input type="text" class="form-control" name="namaBarang" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Kategori Aset</label>
                                <select class="form-control" name="idKategoriBarang">
                                    <option value="">---Pilih Kategori Aset---</option>
                                    <?php foreach ($data as $aset) { ?>
                                        <option value="<?php echo $aset->idKategoriBarang; ?>"><?= $aset->kategoriBarang ?> </option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="validationCustom01">Tanggal Terima</label>
                                <input type="date" class="form-control" name="tanggalTerima" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                            <!-- <div class="form-group mb-3">
                                <label for="validationCustom01">Sumber Dana</label>
                                <div class="col">
                                    <?= form_dropdown('sumberDana', array('Dana Bos' => 'Dana Bos', 'Dana Masyarakat' => 'Dana Masyarakat', 'Dana Swadaya' => 'Dana Swadaya', 'Sumber Lain' => 'Sumber Lain'), '', 'class="form-control"'); ?>
                                </div>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div> -->
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Sumber Dana</label>
                                <select class="form-control" name="sumberDana">
                                    <option value="">---Pilih Sumber Dana---</option>
                                    <option value="Dana Bos">Dana Bos</option>
                                    <option value="Dana Masyarakat">Dana Masyarakat</option>
                                    <option value="Dana Swadaya">Dana Swadaya</option>
                                    <option value="Sumber Lain">Sumber Lain</option>

                                </select>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Jumlah Barang <small id="info"></small></label>
                                <input type="text" class="form-control" name="jumlahBarang" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Kondisi</label>
                                <input type="text" class="form-control" name="kondisi" id="validationCustom01" required>
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="validationCustom01">
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">Foto</label>
                                <input type="file" class="form-control" name="foto" id="validationCustom01">
                                <div class="invalid-feedback">
                                    Harus diisi!
                                </div>
                            </div>
                    </div>



                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="<?= base_url($linkin) ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div> <!-- end card-body -->
    </form>