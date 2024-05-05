<?php
error_reporting(0);
?>
<html>

<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="<?= base_url('assets/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script src="<?= base_url('assets/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <title>Cetak Raport</title>
    <style>
    table.table-bordered {
        border: 1px solid black !important;
        margin-top: 20px;
    }

    table.table-bordered>thead>tr>th {
        border: 1px solid black !important;
        ;
        padding-top: 0;
        padding-bottom: 0;
        margin-top: 0;
        margin-bottom: 0;
    }

    table.table-bordered>tbody>tr>td {
        border: 1px solid black !important;
        ;
        padding-top: 0;
        padding-bottom: 0;
        margin-top: 0;
        margin-bottom: 0;
    }
    </style>
</head>

<?php
function pengetahuan($grade)
{
    if ($grade == "A") {
        return "Menguasai Semua Kompetensi";
    } elseif ($grade == "B") {
        return "Menguasai Sebagian Besar Kompetensi";
    } elseif ($grade == "C") {
        return "Cukup Menguasai Sebagian Besar Kompetensi";
    } else {
        return "Mulai Menguasai Sebagian Kompetensi";
    }
}

function ketrampilan($grade)
{
    if ($grade == "A") {
        return "Terampil Pada Semua Aspek";
    } elseif ($grade == "B") {
        return "Terampil Sebagian Besar Aspek";
    } elseif ($grade == "C") {
        return "Cukup Terampil Pada Sebagian Aspek";
    } else {
        return "Mulai Terampil Pada Sebagian Aspek";
    }
}
?>

<body>
    <div style="page-break-after:always;">
        <!-- <br />
        <img src="<?= base_url('uploads/') . _school_profile()->logo; ?>" alt="Logo Sekolah"
            style="width:70px;height:70px;float:left;margin-bottom:10px;">
        <h3 style="line-height:5px;text-align:right;"><?= _school_profile()->nama; ?></h3>
        <h3 style="line-height:5px;text-align:right;">Akreditasi <?= _school_profile()->akreditasi; ?></h3>
        <hr style="border:1px solid;margin-right:0px;width:800px;">
        <hr style="border:0.5px solid;margin-top:-15px;margin-right:0px;width:750px;">
        <p style="line-height:5px;text-align:right;margin-top:-10px;">Alamat : <?= _school_profile()->alamat; ?> RT
            <?= _school_profile()->rt; ?> / RW
            <?= _school_profile()->rw; ?>
            <?= _school_profile()->dusun; ?>, Kel. <?= _school_profile()->kelurahan; ?>,
            <?= _school_profile()->kecamatan; ?>,
            <?= _school_profile()->kabupaten; ?> - <?= _school_profile()->provinsi; ?></p>
        <br> -->
        <h3 class="text-center"><b>PENCAPAIAN KOMPETENSI SISWA PENILAIAN AKHIR SEMESTER</b></h3>
        <br>
        <table style="padding:15px;">
            <tr>
                <td width="150"><b>NAMA SEKOLAH</b></td>
                <td width="20">:</td>
                <td width="350"><b><?= _school_profile()->nama; ?></b></td>
                <td width="125"><b>TAHUN PELAJARAN</b></td>
                <td width="20">:</td>
                <td><b><?= $raport_data['tahun_akademik']; ?></b></td>
            </tr>
            <tr>
                <td width="150"><b>ALAMAT SEKOLAH</b></td>
                <td width="20">:</td>
                <td width="350"><b><?= _school_profile()->alamat; ?> RT
                        <?= _school_profile()->rt; ?> / RW
                        <?= _school_profile()->rw; ?></b></td>
                <td width="125"><b>Semester</b></td>
                <td width="20">:</td>
                <td><b><?= $raport_data['semester']; ?></b></td>
            </tr>
            <tr>
                <td width="150"><b>NIS/NISN</b></td>
                <td width="20">:</td>
                <td width="350"><b><?= $raport_data['nis'] . ' / ' . $raport_data['nisn']; ?></b></td>
            </tr>
            <tr>
                <td width="150"><b>NAMA</b></td>
                <td width="20">:</td>
                <td width="350"><b><?= $raport_data['nama']; ?></b></td>
            </tr>
            <tr>
                <td width="150"><b>KELAS</b></td>
                <td width="20">:</td>
                <td width="350"><b><?= $raport_data['kelas_kd'] . ' - ' . $raport_data['kelas_nama']; ?></b></td>
            </tr>
        </table>
        <br>
        <h4><b>A. KOMPETENSI SIKAP</b></h4>
        <table class="table table-bold table-bordered" style="font-size:12pt;">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center;padding:0px;">DESKRIPSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sikap Spiritual</td>
                    <td>Selalu bersyukur, selalu berdoa sebelum melakukan kegiatan,dan toleran pada pemeluk agama yang
                        berbeda; ketaatan beribadah mulai berkembang</td>
                </tr>
                <tr>
                    <td>Sikap Santun</td>
                    <td>Sangat santun, peduli, dan percaya diri; kejujuran, kedisiplinan, dan tanggungjawab meningkat
                    </td>
                </tr>
            </tbody>
        </table>
        <h4><b>B. KOMPETENSI PENGETAHUAN DAN KETRAMPILAN</b></h4>
        <table class="table table-bold table-bordered" style="font-size:12pt;">
            <thead>
                <tr>
                    <th rowspan="2" style="text-align:center;line-height:30px;padding:0px 0px 15px 0px;">MATA PELAJARAN
                    </th>
                    <th colspan="3" style="text-align:center;padding:0px;">PENGETAHUAN</th>
                    <th colspan="3" style="text-align:center;padding:0px;">KETRAMPILAN</th>
                </tr>
                <tr>
                    <th style="text-align:center;line-height:30px;padding:5px;">ANGKA</th>
                    <th style="text-align:center;line-height:30px;padding:5px;">PREDIKAT</th>
                    <th style="text-align:center;line-height:30px;padding:0px;">DESKRIPSI</th>
                    <th style="text-align:center;line-height:30px;padding:5px;">ANGKA</th>
                    <th style="text-align:center;line-height:30px;padding:5px;">PREDIKAT</th>
                    <th style="text-align:center;line-height:30px;padding:0px;">DESKRIPSI</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($raport_nilai as $row) : ?>
                <? $i = 1; ?>
                <?php if (count($row['data']) > 0) : ?>
                <tr>
                    <td colspan="7">
                        <h5><b><?= ++$i . '. ' . $row['kategori']; ?></b></h5>
                    </td>
                </tr>
                <?php foreach ($row['data'] as $data) : ?>
                <tr>
                    <td><?= $data['mapel_nama']; ?></td>
                    <td class="text-center"><?= $data['nilai_pts']; ?></td>
                    <td class="text-center"><?= $data['nilai_huruf']; ?></td>
                    <td class="text-left"><?= pengetahuan($data['nilai_huruf']); ?></td>
                    <td class="text-center"><?= $data['nilai_uas']; ?></td>
                    <td class="text-center"><?= $data['nilai_huruf_ketrampilan']; ?></td>
                    <td class="text-left"><?= ketrampilan($data['nilai_huruf_ketrampilan']); ?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h4><b>C. EKSTRAKURIKULER</b></h4>
        <table class="table table-bold table-bordered" style="font-size:12pt;">
            <thead>
                <tr>
                    <th style="text-align:center;padding:0px;">NO</th>
                    <th style="text-align:center;padding:0px;">KEGIATAN EKSTRAKURIKULER</th>
                    <th style="text-align:center;padding:0px;">NILAI</th>
                    <th style="text-align:center;padding:0px;">DESKRIPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $n = 1;
                foreach ($raport_eskul as $row) : ?>
                <tr>
                    <td style="text-align:center;padding:0px;"><?= $n++ . '.'; ?></td>
                    <td style="text-align:center;padding:0px;"><?= $row['mapel_nama']; ?></td>
                    <td style="text-align:center;padding:0px;"><?= $row['nilai_huruf']; ?></td>
                    <td style="text-align:center;padding:0px;"><?= $row['deskripsi']; ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                </tr>
            </tbody>
        </table>
        <h4><b>D. PRESTASI</b></h4>
        <table class="table table-bold table-bordered" style="font-size:12pt;">
            <thead>
                <tr>
                    <th style="text-align:center;padding:0px;">NO</th>
                    <th style="text-align:center;padding:0px;">JENIS PRESTASI</th>
                    <th style="text-align:center;padding:0px;">DESKRIPSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <h4><b>E. KETIDAKHADIRAN</b></h4>
        <table class="table table-bold table-bordered" style="font-size:12pt;">
            <thead>
                <tr>
                    <th colspan="2" style="text-align:center;padding:0px;">KETIDAKHADIRAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sakit</td>
                    <td>.... Hari</td>
                </tr>
                <tr>
                    <td>Izin</td>
                    <td>.... Hari</td>
                </tr>
                <tr>
                    <td>Tanpa Keterangan</td>
                    <td>.... Hari</td>
                </tr>
            </tbody>
        </table>
        <h4><b>F. CATATAN WALI KELAS</b></h4>
        <table class="table table-bold table-bordered" style="font-size:12pt;">
            <tbody>
                <tr>
                    <td>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>
        <h4><b>G. TANGGAPAN ORANG TUA/WALI</b></h4>
        <table class="table table-bold table-bordered" style="font-size:12pt;">
            <tbody>
                <tr>
                    <td>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>
        <p style="text-align:right;margin-right:125px;"><?= $raport_data['tempat']; ?>,
            <?= date('d M Y', strtotime($raport_data['tanggal'])); ?></p>
        <table>
            <tr>
                <td class="text-center" width="500">
                    Kepala Sekolah
                    <br>
                    <?= _school_profile()->nama; ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <u><?= _school_profile()->nama_kepsek; ?></u>
                    <br>
                    NIP. <?= _school_profile()->nip_kepsek; ?>
                </td>
                <td class="text-center" width="500">
                    Wali Kelas
                    <br>
                    <br>
                    <br>
                    <br>
                    <u><?= $raport_wali['nama']; ?></u>
                    <br>
                    NIP. <?= $raport_wali['nip']; ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>

<script>
window.print();
</script>