<?php
$this->db->where('username', $this->session->userdata('username'));
$user = $this->db->get('user')->row();
?>
<div class="row">
    <div class="col">

        <div class="card">

            <div class="card-body p-0">

                <h6 class="card-title border-bottom p-3 mb-0 header-title"><?= $title; ?> <i> </i>di Website SMP Negeri 2 Muara Uya</h6>
                <div class="row py-1">
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 1 -->

                        <div class="media p-3">
                            <i data-feather="users" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0"><?= $totalSiswa  ?></h4>
                                <span class="text-muted font-size-13">Total Siswa</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 2 -->
                        <div class="media p-3">
                            <i data-feather="users" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0"><?= $totalGuru  ?></h4>
                                <span class="text-muted">Total Guru</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 3 -->
                        <div class="media p-3">
                            <i data-feather="grid" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0"><?= $totalMapel  ?></h4>
                                <span class="text-muted">Total Mata Pelajaran</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <!-- stat 3 -->
                        <div class="media p-3">
                            <i data-feather="check-square" class="align-self-center icon-dual icon-lg mr-4"></i>
                            <div class="media-body">
                                <h4 class="mt-0 mb-0"><?= $totalJadwal  ?></h4>
                                <span class="text-muted">Jadwal Pelajaran Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inbox-rightbar p-4">
                    <div class="mt-2">
                        <hr>

                        <div class="media mb-4 mt-1">
                            <img class="d-flex mr-2 rounded-circle avatar-sm" src="<?= base_url() ?>assets/images/users/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <span class="float-right">
                                    <p><span id="tanggalwaktu"></span></p>
                                </span>
                                <script>
                                    var tw = new Date();
                                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                                    else(a = tw.getTime());
                                    tw.setTime(a);
                                    var tahun = tw.getFullYear();
                                    var hari = tw.getDay();
                                    var bulan = tw.getMonth();
                                    var tanggal = tw.getDate();
                                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
                                </script>

                                <h6 class="m-0 font-14"><?= $user->nama ?></h6>
                                <small class="text-muted"><?= $user->email ?></small>
                            </div>
                        </div>


                        <div class="text-muted">
                            <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                penatibus et magnis dis parturient montes, nascetur ridiculus
                                mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                                aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                                imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                elementum semper nisi.</p>
                            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                                Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies
                                nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                                condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                                pulvinar,</p> -->
                        </div>

                        <hr>


                    </div> <!-- end reply-box -->
                </div> <!-- end media-body -->
            </div> <!-- end medi-->



        </div>
    </div>
</div>
</div>
</div>