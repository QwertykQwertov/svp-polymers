<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$subcategory = $_GET['sub'];

if ($subcategory) {
  $sql = "SELECT * FROM products_pnd WHERE subcategory = $subcategory";
} else {
  $sql = "SELECT * FROM products WHERE category = 5";
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
          <a href="/catalog/pnd/product?id=<?= $product['id']; ?>" class="card h-100 ki-card">
            <div style="padding:10px;">
              <img style="width: 100%; height: 300px;" src=<?= '/assets/images/catalog/' . $product['image'] ?> class="card-img-top" alt=<?= $product['name'] ?>>
            </div>
            <div class="card-body d-flex flex-column ">
              <h5 class="card-title"><?= $product['name'] ?></h5>
              <p class="card-text" style="flex:1;">
                Толщина: <?= $product['thickness'] ?><br>
                Формат, мм: <?= $product['length'] . 'x' . $product['width'] ?><br>
                Плотность: <?= $product['density'] ?><br>
                Цвет: <?= $product['color'] ?><br>
              </p>
              <div class="card-footer bg-transparent d-flex justify-content-center px-0">
                <p>Цена от: <strong class="text-danger"><?= number_format($product['opt_price'], 0, '.', ' '); ?> ₽/лист</strong></p>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>