<?= $this->extend('admin/home/layout') ?>

<?= $this->section('isi') ?>
<h1>Selamat Datang di Sekoenol System</h1>
<div class="card">
    <div class="card-header card-sm">User Info</div>
    <div class="card-body"><?= session()->iduser ?></div>
    <div class="card-footer">Footer</div>
</div>
<?= $this->endSection('isi') ?>