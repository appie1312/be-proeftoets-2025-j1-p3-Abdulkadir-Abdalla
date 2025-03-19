<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <!-- begin tabel -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Merk</th>
                        <th>Model</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['sneakers'] as $sneaker) : ?>
                        <?php if ($sneaker->IsActief) : ?> 
                            <tr>
                                <td><?= $sneaker->Merk; ?></td>
                                <td><?= $sneaker->Model; ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- eind tabel -->

<?php require APPROOT . '/views/includes/footer.php'; ?>
