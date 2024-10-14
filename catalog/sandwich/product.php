<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products_sandwich WHERE id = $id";
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
          <img src="<?= '/assets/images/catalog/' . $product['image'] ?>" class="img-fluid rounded-start" style="width: 100%; height: 100%;" alt="<?= $product['name'] ?>">
        </div>
        <div class="" style="flex: 1;">
          <div class="card-header">
            <h3><?= $product['name'] . ', ' . $product['pack'] ?></h3>
          </div>
          <div class="card-body">
            <h4 class="card-title"><span class="badge rounded-pill bg-primary"><?= $product['price'] . ' ₽/лист' ?></span></h4>
            <p class="card-text"><span class="badge rounded-pill bg-secondary"><?= 'Оптовая цена: ' . $product['price'] . ' ₽/лист' ?></span></p>
            <p class="card-text"><?= $product['description'] ?></p>

            <h4>Характеристики</h4>
            <p class="card-text"><?= 'Покрытие: ' . $product['surface_1'] ?></p>
            <p class="card-text"><?= 'Поверхность: ' . $product['surface_2'] ?></p>
            <p class="card-text"><?= 'Упаковка: ' . $product['pack'] ?></p>
            <p class="card-text"><?= 'Толщина, мм: ' . $product['thickness'] ?></p>
            <p class="card-text"><?= 'Формат, мм: ' . $product['length'] . 'x' . $product['width'] ?></p>
            <p class="card-text"><?= 'Упаковка: ' . $product['pack'] ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Описание:</h5>
          <?= $product['description_full'] ?>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Основные характеристики сэндвич-панелей (при толщине листа 24 мм):</h5>
          <?= $product['options'] ?>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Рекомендации:</h5>
          <?= $product['recommendations'] ?>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Применение:</h5>
          <?= $product['applying'] ?>
        </div>
      </div>
    </div>

  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>