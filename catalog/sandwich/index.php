<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

var_dump($_GET);

if ($_GET['width'] || $GET['length'] || $GET['thickness']) {
  $sql = "SELECT * FROM products_sandwich WHERE ";
  foreach ($_GET as $parameter => $value):
    // echo ($parameter);
    $sql = $sql . $parameter . ' = ' . $value . ' AND ';
  endforeach;
  echo ($sql);
} else {
  $sql = "SELECT * FROM products_sandwich ORDER BY name";
}

// $sql = "SELECT * FROM products_sandwich ORDER BY name";
$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $products = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
      <label for="width">Ширина</label>
      <select id="width" class="form-control">
        <option value="null" selected>Не выбрано</option>
        <option value="3000">3000</option>
      </select>
    </div>
    <div class="col">
      <label for="length1">Длина</label>
      <select id="length1" class="form-control">
        <option value="null" selected>Не выбрано</option>
        <option value="1500">1500</option>
        <option value="2000">2000</option>
      </select>
    </div>
    <div class="col">
      <label for="thickness">Толщина</label>
      <select id="thickness" class="form-control">
        <option value="null" selected>Не выбрано</option>
        <option value="10">10 мм</option>
        <option value="24">24 мм</option>
        <option value="32">32 мм</option>
        <option value="36">36 мм</option>
        <option value="40">40 мм</option>
        <option value="44">44 мм</option>
        <option value="46">46 мм</option>
      </select>
    </div>
    <div class="col d-flex align-items-end">
      <button class="btn btn-dark" onclick="setFilter()">Применить</button>
    </div>
  </div>

  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
      <?php foreach ($products as $product): ?>
        <div class="col">
          <a href="/catalog/sandwich/product?id=<?= $product['id']; ?>" class="card h-100 ki-card">
            <div style="padding:10px;">
              <img style="width: 100%; height: 300px;" src=<?= '/assets/images/catalog/' . $product['image'] ?> class="card-img-top" alt=<?= $product['name'] ?>>
            </div>
            <div class="card-body d-flex flex-column ">
              <h5 class="card-title"><?= $product['name'] ?></h5>
              <p class="card-text" style="flex:1;">
                Покрытие: <?= $product['surface_1'] ?><br>
                Поверхность: <?= $product['surface_2'] ?><br>
                Упаковка: <?= $product['pack'] ?><br>
                Толщина, мм: <?= $product['thickness'] ?><br>
                Формат, мм: <?= $product['length'] . 'x' . $product['width'] ?><br>
                <!-- <p class="card-text" style="flex: 1;"><small class="text-body-secondary"><?= $product['description'] ?></small></p> -->
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

<script>
  function setFilter() {
    let filterString = ''

    const filterValues = {
      width: width.value,
      length: length1.value,
      thickness: thickness.value
    }

    for (let key in filterValues) {
      if (filterValues[key] != 'null') {
        filterString += `${key}=${filterValues[key]}&`
      }
    }

    if (filterString) {
      window.location.search = filterString.slice(0, -1)
    }

  }
</script>