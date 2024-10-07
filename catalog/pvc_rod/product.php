<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products WHERE id = $id";
} else {
  // 404
}

$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $product = $result->fetch_assoc();
}
?>

<div class="container my-5">
  <div class="container my-5">

    <div class="card my-5">
      <div class="row g-0">
        <div class="" style="max-width: 30%; border-right: 1px solid var(--bs-border-color-translucent);">
          <img src="<?= '/assets/images/catalog/' . $product['image'] ?>" class="img-fluid rounded-start" style="width: 100%;" alt="<?= $product['name'] ?>">
        </div>
        <div class="" style="flex: 1;">
          <div class="card-header">
            <h3><?= $product['name'] . ', ' . $product['pack'] ?></h3>
          </div>
          <div class="card-body">
            <h4 class="card-title"><?= $product['price'] . ' ₽/бухта' ?></h4>
            <p class="card-text"><?= 'Оптовая цена: ' . $product['price'] . ' ₽/бухта' ?></p>
            <p class="card-text"><?= $product['description'] ?></p>

            <h4>Характеристики</h4>
            <p class="card-text"><?= 'Цвет: ' . $product['color'] . ' ₽/бухта' ?></p>
            <p class="card-text"><?= 'Диаметр: ' . $product['diameter'] . ' мм' ?></p>
            <p class="card-text"><?= 'Упаковка: ' . $product['pack'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>