<div class="pencarian">
    <div class="pencarian__title">
        <h1>Pencarian</h1>
    </div>
    <div class="search-result">

        <div class="row iklans">
            <?php
            if (!$iklan) {
                echo "<h1 class='text-center mt-5'>Hasil Pencarian Tidak Ditemukan</h1>";
            }
            ?>
            <?php foreach ($iklan as $key => $list_iklan) :
                $gambar = explode(",", $list_iklan->list_gambar)
            ?>
                <div class="col-6 col-sm-4 col-lg-3 list-iklan mb-4">
                    <a href="<?= site_url("iklan-detail/") . $list_iklan->slug_iklan ?>" class="text-reset">
                        <div class="card">
                            <img src="<?= base_url('/uploads/iklan/' . $gambar[0]) ?>" class="list-iklan__thumbnail p-2">
                            <div class="card-body ">
                                <p class="list-iklan__judul"><?= $list_iklan->judul_iklan ?></p>
                                <p class="list-iklan__harga">Rp.<?= $list_iklan->harga_iklan ?></p>
                                <p class="list-iklan__deskripsi"><?= $list_iklan->deskripsi_iklan ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>