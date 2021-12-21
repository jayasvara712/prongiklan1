<?= $this->extend("layout/home"); ?>
<?= $this->section('content')  ?>
<div class="banner">
    <img src="<?= base_url('assets/img/Banner-prongiklan.png') ?>" alt="" srcset="" class="banner">
</div>

<?= $this->include("home/beranda/list_kategori") ?>
<div class="row list-iklan">
    <h1 class="title">PRONGIKLAN Cara Gampang Jual Cepat</h1>
    <?= $this->include("home/beranda/list_iklan") ?>
</div>
<?= $this->endsection()  ?>