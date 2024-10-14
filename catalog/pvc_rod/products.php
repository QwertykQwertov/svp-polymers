<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$subcategory = $_GET['sub'];

if ($subcategory) {
  $sql = "SELECT * FROM products_pvc_rod WHERE subcategory = $subcategory";
} else {
  $sql = "SELECT * FROM products_pvc_rod";
}

$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $products = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class="container my-5">
  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
      <?php foreach ($products as $product): ?>
        <div class="col">
          <a href="/catalog/pvc_rod/product?id=<?= $product['id']; ?>" class="card h-100 ki-card">
            <div style="padding:10px;">
              <img style="width: 100%; height: 300px;" src=<?= '/assets/images/catalog/' . $product['image'] ?> class="card-img-top" alt=<?= $product['name'] ?>>
            </div>
            <div class="card-body d-flex flex-column ">
              <h5 class="card-title"><?= $product['name'] ?></h5>
              <p class="card-text">
                <?php if ($product['diameter']) { ?>
                  Диаметр: <?= $product['diameter'] ?><br>
                <? } ?>
                Цвет: <?= $product['color'] ?><br>
                Упаковка: <?= $product['pack'] ?><br>
              <p class="card-text" style="flex: 1;"><small class="text-body-secondary"><?= $product['description'] ?></small></p>
              <div class="card-footer bg-transparent d-flex justify-content-between px-0">
                <p><span class="badge rounded-pill bg-primary"><?= $product['price']; ?> руб/бухта</span></p>
                <p>Опт: <span class="badge rounded-pill bg-secondary"><?= $product['opt_price']; ?> руб/бухта</span></p>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>