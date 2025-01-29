<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products_pnd WHERE id = $id";
} else {
  // 404
}

$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $product = $result->fetch_assoc();
}
?>

<div class="container my-5">

  <div class="card my-5">
    <div class="row g-0">
    <div class="" style="max-width: 30%; border-right: 1px solid var(--bs-border-color-translucent);" onclick="onImageClick(event)">
        <button class="ki-modal-trigger product-image-wrapper d-flex justify-content-center align-items-center" data-toggle="modal" data-target="#modalCenter">
          <img src="<?= '/assets/images/catalog/' . $product['image'] ?>" data-images="<?= $product['other_images'] ?>" class="img-fluid rounded-start" style="width: 100%; height: 100%" alt="<?= $product['name'] ?>">
        </button>
      </div>
      <div class="" style="flex: 1;">
        <div class="card-header">
          <h3><?= $product['name'] . ', ' . $product['pack'] ?></h3>
        </div>
        <div class="card-body">
          <div class="card-text">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">Розница</th>
                  <th scope="col">Опт*</th>
                  <th scope="col">Дилер**</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?= number_format($product['price'], 0, '.', ' ') . ' ₽/лист' ?></td>
                  <td><?= number_format($product['opt_price'], 0, '.', ' ') . ' ₽/лист' ?></td>
                  <td><?= number_format($product['diler_price'], 0, '.', ' ') . ' ₽/лист' ?></td>
                </tr>
              </tbody>
            </table>
            </h4>
          </div>
          <p><em><strong>*</strong> Оптовая цена действует от 20 листов</em></p>
          <p><em><strong>**</strong> Дилерская цена действует от 100 листов</em></p>

          <p class="card-text"><?= $product['description'] ?></p>


          <h4>Характеристики</h4>
          <p class="card-text"><?= 'Формат, мм: ' . $product['length'] . 'x' . $product['width'] ?></p>
          <p class="card-text"><?= 'Толщина, мм: ' . $product['thickness'] ?></p>
          <p class="card-text"><?= 'Плотность: ' . $product['density'] ?></p>
          <p class="card-text"><?= 'Цвет: ' . $product['color'] ?></p>
          <p class="card-text"><?= 'Упаковка: ' . $product['pack'] ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>