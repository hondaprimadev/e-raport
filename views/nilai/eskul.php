<script>
    $(document).ready(function() {})

    function ptsval(x) {
        $('[name="pts' + x + '"]').prop('readonly', true);
        $('[name="uas' + x + '"]').val("");
    }

    function nilai1(s, x) {
        let n1 = parseInt($('[name="' + s + '1' + x + '"]').val());
        $('[name="rata_' + s + '' + x + '"]').val(n1);
        $('[name="' + s + '2' + x + '"]').val("");
        dropreadonly(s + '2' + x);
        $('[name="' + s + '1' + x + '"]').prop('readonly', true);
    }

    function nilai2(s, x) {
        let n1 = parseInt($('[name="' + s + '1' + x + '"]').val());
        let n2 = parseInt($('[name="' + s + '2' + x + '"]').val());
        let hasil = (n1 + n2) / 2;

        $('[name="rata_' + s + '' + x + '"]').val(hasil);
        $('[name="' + s + '3' + x + '"]').val("");
        dropreadonly(s + '3' + x);
        $('[name="' + s + '2' + x + '"]').prop('readonly', true);
    }

    function nilai3(s, x) {
        let n1 = parseInt($('[name="' + s + '1' + x + '"]').val());
        let n2 = parseInt($('[name="' + s + '2' + x + '"]').val());
        let n3 = parseInt($('[name="' + s + '3' + x + '"]').val());
        let hasil = (n1 + n2 + n3) / 3;

        $('[name="rata_' + s + '' + x + '"]').val(hasil);
        $('[name="' + s + '4' + x + '"]').val("");
        dropreadonly(s + '4' + x);
        $('[name="' + s + '3' + x + '"]').prop('readonly', true);
    }

    function nilai4(s, x) {
        let n1 = parseInt($('[name="' + s + '1' + x + '"]').val());
        let n2 = parseInt($('[name="' + s + '2' + x + '"]').val());
        let n3 = parseInt($('[name="' + s + '3' + x + '"]').val());
        let n4 = parseInt($('[name="' + s + '4' + x + '"]').val());
        let hasil = (n1 + n2 + n3 + n4) / 4;

        $('[name="rata_' + s + '' + x + '"]').val(hasil);
        $('[name="' + s + '5' + x + '"]').val("");
        dropreadonly(s + '5' + x);
        $('[name="' + s + '4' + x + '"]').prop('readonly', true);
    }

    function nilai5(s, x) {
        let n1 = parseInt($('[name="' + s + '1' + x + '"]').val());
        let n2 = parseInt($('[name="' + s + '2' + x + '"]').val());
        let n3 = parseInt($('[name="' + s + '3' + x + '"]').val());
        let n4 = parseInt($('[name="' + s + '4' + x + '"]').val());
        let n5 = parseInt($('[name="' + s + '5' + x + '"]').val());
        let hasil = (n1 + n2 + n3 + n4 + n5) / 5;

        $('[name="rata_' + s + '' + x + '"]').val(hasil);
        $('[name="' + s + '6' + x + '"]').val("");
        dropreadonly(s + '6' + x);
        $('[name="' + s + '5' + x + '"]').prop('readonly', true);
    }

    function nilai6(s, x) {
        let n1 = parseInt($('[name="' + s + '1' + x + '"]').val());
        let n2 = parseInt($('[name="' + s + '2' + x + '"]').val());
        let n3 = parseInt($('[name="' + s + '3' + x + '"]').val());
        let n4 = parseInt($('[name="' + s + '4' + x + '"]').val());
        let n5 = parseInt($('[name="' + s + '5' + x + '"]').val());
        let n6 = parseInt($('[name="' + s + '6' + x + '"]').val());
        let hasil = (n1 + n2 + n3 + n4 + n5 + n6) / 6;

        $('[name="rata_' + s + '' + x + '"]').val(hasil);
        $('[name="' + s + '7' + x + '"]').val("");
        dropreadonly(s + '7' + x);
        $('[name="' + s + '6' + x + '"]').prop('readonly', true);
    }

    function nilai7(s, x) {
        let n1 = parseInt($('[name="' + s + '1' + x + '"]').val());
        let n2 = parseInt($('[name="' + s + '2' + x + '"]').val());
        let n3 = parseInt($('[name="' + s + '3' + x + '"]').val());
        let n4 = parseInt($('[name="' + s + '4' + x + '"]').val());
        let n5 = parseInt($('[name="' + s + '5' + x + '"]').val());
        let n6 = parseInt($('[name="' + s + '6' + x + '"]').val());
        let n7 = parseInt($('[name="' + s + '7' + x + '"]').val());
        let hasil = (n1 + n2 + n3 + n4 + n5 + n6 + n7) / 7;

        $('[name="rata_' + s + '' + x + '"]').val(hasil);
        $('[name="' + s + '7' + x + '"]').prop('readonly', true);
    }

    function nilaiAkhir(x) {
        let kkm = parseInt($('[name="kkm"]').val());
        let rtp = parseInt($('[name="rata_tp' + x + '"]').val() || 0);
        let rnu = parseInt($('[name="rata_uh' + x + '"]').val() || 0);
        let pts = parseInt($('[name="pts' + x + '"]').val() || 0);
        let uas = parseInt($('[name="uas' + x + '"]').val() || 0);
        // let na = (rtp + rnu + pts + uas) / 4;
        let na = (rnu + pts + uas) / 3;


        $('[name="akhir' + x + '"]').val(na.toFixed());
        let selisih_kkm = (100 - kkm) / 3;
        if (parseInt(na) < kkm) {
            $('[name="grade' + x + '"]').val("D");
            $('[name="deskripsi' + x + '"]').val("Kurang Baik");
        } else if (parseInt(na) >= kkm && parseInt(na) <= Math.round(kkm + selisih_kkm) - 1) {
            $('[name="grade' + x + '"]').val("C");
            $('[name="deskripsi' + x + '"]').val("Cukup Baik");
        } else if (parseInt(na) >= Math.round(kkm + selisih_kkm) && parseInt(na) <= Math.round(kkm + (selisih_kkm * 2)) -
            1) {
            $('[name="grade' + x + '"]').val("B");
            $('[name="deskripsi' + x + '"]').val("Baik");
        } else if (parseInt(na) >= Math.round(kkm + (selisih_kkm * 2)) && parseInt(na) <= (kkm + (selisih_kkm *
                3))) {
            $('[name="grade' + x + '"]').val("A");
            $('[name="deskripsi' + x + '"]').val("Sangat Baik");
        }
    }

    function infoKKM() {
        let kkm = parseInt($('[name="kkm"]').val());
        let selisih_kkm = (100 - kkm) / 3;
        let html = 'Predikat : [D = < ' + kkm + '] [C = ' + kkm + ' - ' + Math.round(kkm + (selisih_kkm - 1)) + '] [B = ' +
            Math.round(kkm + selisih_kkm) + ' - ' + Math.round(kkm + (selisih_kkm * 2) - 1) + '] [A = ' + Math.round(kkm + (
                selisih_kkm * 2)) + ' - ' + (kkm + (selisih_kkm * 3)) + ']';
        $('#infoKKM').html(html);
    }

    function dropreadonly(value) {
        $('[name="' + value + '"]').prop('readonly', false);
    }

    function minmax(value, min, max) {
        if (parseInt(value) < min)
            return min;
        else if (parseInt(value) > max)
            return max;
        else return value;
    }
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Input Nilai
    </h1>
    <?php if (__session('access') == 'super_user') : ?>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li><a href="<?= base_url('nilai'); ?>">Nilai</a></li>
            <li class="active">Input Nilai</li>
        </ol>
    <?php endif; ?>
</section>

<!-- Main content -->
<section class="content">
    <div class="info-box bg-green">
        <a href="#modal-info" data-toggle="modal" style="color:white;">
            <span class="info-box-icon"><i class="fa fa-edit"></i></span>
        </a>
        <div class="info-box-content">
            <span class="info-box-text"><?= $rowI->kelas_kd . ' - ' . $rowI->kelas_nama; ?></span>
            <span class="info-box-number"><?= $rowI->mapel_nama; ?></span>
            <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
            </div>
            <span class="progress-description">
                <?= $rowI->nama; ?>
            </span>
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="pull-left">
                <form class="form-horizontal" action="<?= base_url('nilai/save_kkm/') . $rowI->idmengajar; ?>" method="post">
                    <div class="form-group">
                        <!-- <label for="kkm" class="col-xs-2 control-label">KKM</label> -->
                        <div class="col-xs-4">
                            <input type="hidden" name="current_url" value="<?= base_url('nilai/input/') . $rowI->kelas_kd . '/' . $rowI->mapel_kd; ?>">
                            <input type="hidden" name="idkelas" value="<?= $rowI->idkelas; ?>">
                            <input type="hidden" name="idmapel" value="<?= $rowI->idmapel; ?>">
                            <!-- <input type="hidden" class="form-control" id="kkm" name="kkm" value="<?= $rowI->kkm; ?>" max="100" placeholder="0" onkeyup="this.value = minmax(this.value,0,100)"> -->
                        </div>
                        <button type="submit" class="btn btn-success btn-flat">Mulai</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="box-body" style="overflow-x:scroll;">
            <form action="<?= base_url('nilai/save/') . $rowI->kelas_kd; ?>" method="post">
                <table class="table table-bordered table-hover" style="table-layout:fixed;">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center" width="35" style="line-height:55px;">NO</th>
                            <th rowspan="2" class="text-center" width="85" style="line-height:55px;">NIS</th>
                            <th rowspan="2" class="text-center" width="300" style="line-height:55px;">NAMA LENGKAP</th>
                            <!-- <th colspan="3" class="text-center" width="300">MODUL</th>
                            <th rowspan="2" class="text-center" width="95" style="line-height:55px;">NA</th> -->
                            <th rowspan="2" class="text-center" width="85" style="line-height:55px;">GRADE</th>
                            <th rowspan="2" class="text-center" width="250" style="line-height:55px;">DESKRIPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 1;
                        foreach (siswa_by_kelas(_active_years()->idtahun_akademik, _active_years()->semester, $rowI->idkelas) as $row) : ?>
                            <?php foreach (nilai_by_siswa(_active_years()->idtahun_akademik, _active_years()->semester, $rowI->idkelas, $rowI->idmapel, $row->idsiswa) as $nilai) : ?>
                                <input type="hidden" name="idnilai<?= $row->idsiswa; ?>" value="<?= $nilai->idnilai; ?>">
                                <tr>
                                    <td><?= $n++ . '.'; ?></td>
                                    <td><?= $row->nis; ?></td>
                                    <td><?= $row->nama; ?></td>
                                    <!-- <td>
                                        <input type="number" class="form-control" id="rata_uh" name="rata_uh<?= $row->idsiswa; ?>" min="0" max="100" placeholder="0" value="<?= $nilai->rata_uh; ?>" onkeyup="this.value = minmax(this.value,0,100)" onchange="nilaiAkhir(<?= $row->idsiswa; ?>)">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="pts" name="pts<?= $row->idsiswa; ?>" min="0" max="100" placeholder="0" value="<?= $nilai->nilai_pts; ?>" onkeyup="this.value = minmax(this.value,0,100)" onchange="nilaiAkhir(<?= $row->idsiswa; ?>)">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="uas" name="uas<?= $row->idsiswa; ?>" min="0" max="100" placeholder="0" value="<?= $nilai->nilai_uas; ?>" onkeyup="this.value = minmax(this.value,0,100)" onchange="nilaiAkhir(<?= $row->idsiswa; ?>)">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="akhir" name="akhir<?= $row->idsiswa; ?>" min="0" max="100" placeholder="0" value="<?= $nilai->nilai_akhir; ?>" readonly>
                                    </td> -->
                                    <td>
                                        <input type="text" class="form-control" id="grade" name="grade<?= $row->idsiswa; ?>" value="<?= $nilai->nilai_huruf; ?>">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi<?= $row->idsiswa; ?>" value="<?= $nilai->deskripsi; ?>">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success btn-sm btn-flat" style="float:right;"><i class="fa fa-save"></i> SIMPAN NILAI</button>
            </form>
        </div>
    </div>
</section>