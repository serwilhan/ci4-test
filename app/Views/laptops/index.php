<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4">Laptop List</h1>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($laptop as $l) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img class="cover" src="<?= base_url("images/" . $l['cover']); ?>" alt=""></td>
                            <td><?= $l['merk']; ?></td>
                            <td><?= $l['type']; ?></td>
                            <td><?= $l['price']; ?></td>
                            <td>
                                <a href="<?= base_url("laptops/" . $l['slug']); ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>