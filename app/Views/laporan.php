<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-6">
        <h3>Laporan Pesanan</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>Tanggal</th>
                <th>No.meja</th>
                <th>Petugas</th>
                <th>Total Harga</th>
                <th>Status</th>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($laporan as $row) :
                ?>
                    <td><?= $no ?></<td>
                    <td><?= $row['nama'] ?></<td>
                    <td><?= $row['tanggal'] ?></<td>
                    <td><?= $row['no_meja'] ?></<td>
                    <td><?= $row['id_user'] ?></<td>
                    <td><?= $row['total_harga'] ?></<td>
                    <td><?= $row['status'] ?></<td>
                        </tr>
                    <?php
                    $no++;
                endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>