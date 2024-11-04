<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products_abs WHERE id = $id";
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
                <!-- <tr>
                      <td>От 1 листа</td>
                      <td>От 20 листов</td>
                      <td>От 100 листов</td>
                    </tr> -->
              </tbody>
            </table>
            <!-- <h4 class="card-title">
              <span class="badge rounded-pill bg-primary">
                <?= number_format($product['price'], 0, '.', ' ') . ' ₽/лист' ?>
              </span>
            </h4>
            <span class="badge rounded-pill bg-secondary">
              <?= 'Оптовая цена: ' . number_format($product['opt_price'], 0, '.', ' ') . ' ₽/лист' ?>
            </span> -->

            <p><em><strong>*</strong> Оптовая цена действует от 20 единиц</em></p>
            <p><em><strong>**</strong> Дилерская цена действует от 100 единиц</em></p>

            <h4>Характеристики</h4>
            <p class="card-text"><?= 'Покрытие: ' . $product['surface_1'] ?></p>
            <p class="card-text"><?= 'Поверхность: ' . $product['surface_2'] ?></p>
            <p class="card-text"><?= 'Упаковка: ' . $product['pack'] ?></p>
            <p class="card-text"><?= 'Толщина, мм: ' . $product['thickness'] ?></p>
            <p class="card-text"><?= 'Формат, мм: ' . $product['length'] . 'x' . $product['width'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>