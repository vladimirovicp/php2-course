<div class="card m-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $title ?></h5>
    <p class="card-text">Цена книги: <?= $price ?>руб.</p>
    <a href="/lab7/addbasket?id=<?= $idBook ?>" class="btn btn-primary">В корзину</a>
  </div>
</div>