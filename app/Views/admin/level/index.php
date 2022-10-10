<?= $this->extend('admin/home/layout') ?>

<?= $this->section('isi') ?>
<div class="card">
    <div class="card-header card-sm">Data Level</div>
    <div class="card-body"><?= session()->iduser ?></div>
    <div class="card-footer"></div>
</div>
<?= $this->endSection('isi') ?>