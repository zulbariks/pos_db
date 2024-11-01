<?php
require_once __DIR__ . '/../DB/Conection.php';
require_once __DIR__ . '/../Model/Model.php';
require_once __DIR__ . '/../Model/Category.php';

$keyword = $_GET['keyword'];
$kategori = "";
$categories = new Category();

$limit = 2;
$page = (isset($_GET['page']) ? $_GET["page"] : 1);
$start = ($page * $limit) - $limit;
$totalData = count($categories->all());
$totalPages = ceil($totalData / $limit);



if (isset($keyword)) {
    $kategori = $categories->search($keyword, $start, $limit);
} else {
    $kategori = $categories->paginate($start, $limit);
}

?>


<div id="content" class="table-responsive">
    <?php if ($kategori == null): ?>
        <div class="alert alert-danger" role="alert">
            Data tidak ditemukan!!
        </div>
    <?php else: ?>
        <table class="table table-striped">
            <tr>
                <th>
                    <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                    </div>
                </th>
                <th>Nama Categori</th>
                <th>Action</th>
            </tr>
            <?php foreach ($kategori as $category) : ?>
                <tr>
                    <td class="">
                        <div class="custom-checkbox custom-control">
                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                        </div>
                    </td>
                    <td>
                        <?= $category['name'] ?>
                    </td>
                    <td class="justify-content-end">
                        <a href="detail-category.php?id=<?= $category["id"] ?>" class="btn btn-primary mr-1"><i class="far fa-eye"></i> Detail</a>
                        <a href="edit-category.php?id=<?= $category["id"] ?>" class="btn btn-success mr-1"> <i class="far fa-edit"></i> Edit</a>
                        <a href="delete-category.php?id=<?= $category["id"] ?>" class="btn btn-danger mr-1"><i class="far fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    <?php endif; ?>
    <div class="col-12 col-md-6 col-lg-6">
        <ul class="pagination">

            <?php if ($page > 1): ?>
                <a class="page-link" href="?page=<?= $page - 1 ?>" tabindex="-1">Previous</a>
            <?php else: ?>
                <a class="page-link" href="" tabindex="-1">Previous</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $$totalPages; $i++) : ?>
                <button><a href=""><?= $i ?></a></button>
            <?php endfor; ?>

            <?php if ($page < $$totalPages): ?>
                <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
            <?php else: ?>
                <a class="page-link" href="">Next</a>
            <?php endif; ?>
            </li>
        </ul>
    </div>
</div>