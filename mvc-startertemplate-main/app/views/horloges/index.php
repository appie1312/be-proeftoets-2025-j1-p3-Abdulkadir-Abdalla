
<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">

        <div class="col-2"> 
            <a href="<?= URLROOT; ?>/homepages/index">Homepage</a></div>
        <div class="col-8">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- begin tabel -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Prijs</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['horloges'] as $horloges) : ?>
                        <tr>
                            <td><?= $horloges->Merk; ?></td>
                            <td><?= $horloges->Model; ?></td>
                            <td><?= $horloges->Prijs; ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- eind tabel -->

<?php require   APPROOT . '/views/includes/footer.php'; ?>