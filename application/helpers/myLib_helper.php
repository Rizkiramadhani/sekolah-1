<?php
function cmb_dinamis($name, $table, $field, $pk, $selected = null, $extra = NULL)
{
    $ci = &get_instance();
    $cmb = "<select name='$name'class='form-control'$extra>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $row) {
        $cmb .= "<option value='" . $row->$pk . "'";
        $cmb .= $selected == $row->$pk ? 'selected' : '';
        $cmb .= ">" . $row->$field . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

function fd_hari($val = null)
{
    $option = [

        'Senin' => 'Senin',
        'Selasa' => 'Selasa',
        'Rabu' => 'Rabu',
        'Kamis' => 'Kamis',
        'Jumat' => 'Jumat',
        'Sabtu' => 'Sabtu',
    ];
    if (empty($val)) :
        return $option;
    else :
        return $option[$val];
    endif;
}

function fd_kehadiran($val = null)
{
    $option = [

        '' => 'Pilih Kehadiran',
        'Hadir' => 'Hadir',
        'Izin' => 'Izin',
        'Sakit' => 'Sakit',
        'Alpa' => 'Alpa',

    ];
    if (empty($val)) :
        return $option;
    else :
        return $option[$val];
    endif;
}

function getKehadiran($kodeJadwal, $nisn)
{
    $ci = &get_instance();

    $ci->db->where('nisn', $nisn);
    $ci->db->where('kodeJadwal', $kodeJadwal);
    return $ci->db->get('absensi_siswa')->num_rows();
}

function getKehadiranWhere($kodeJadwal, $nisn, $kehadiran)
{
    $ci = &get_instance();

    $ci->db->where('kehadiran', $kehadiran);
    $ci->db->where('nisn', $nisn);
    $ci->db->where('kodeJadwal', $kodeJadwal);
    return $ci->db->get('absensi_siswa')->num_rows();
}

function getKehadiranHal($nisn, $kehadiran)
{
    $ci = &get_instance();

    $ci->db->where('kehadiran', $kehadiran);
    $ci->db->where('nisn', $nisn);
    return $ci->db->get('absensi_siswa')->num_rows();
}
