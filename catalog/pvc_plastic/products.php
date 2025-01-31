<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$url_params = $_GET;
$sql = '';

if ($url_params['subcategory'] || $url_params['length'] || $url_params['width'] || $url_params['thickness']) {
  $sql = "SELECT * FROM products_pvc_plastic WHERE ";

  foreach ($_GET as $parameter => $value):
    $sql = $sql . $parameter . ' = ' . $value . ' AND ';
  endforeach;

  $sql = trim($sql, ' AND ');
  $sql = $sql . ' ORDER BY name';
} else {
  $sql = "SELECT * FROM products WHERE category = 2 ORDER BY name";
}
$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
  $products = [];
}
?>

<div class="container my-5" style="flex: 1">
  <div class="row row-cols-1 row-cols-md-4 g-4 ki-filter-panel">
    <div class="col ki-filter-item">
      <label for="width">Ширина</label>
      <select id="width" class="form-control">
        <option value="null" <?php if (!$_GET['width']) echo ('selected') ?>>Не выбрано</option>
        <option value="3050" <?php if ($_GET['width'] == '3050') echo ('selected') ?>>3050</option>
        <option value="3000" <?php if ($_GET['width'] == '3000') echo ('selected') ?>>3000</option>
      </select>
    </div>
    <div class="col ki-filter-item">
      <label for="length1">Длина</label>
      <select id="length1" class="form-control">
        <option value="null" <?php if (!$_GET['length']) echo ('selected') ?>>Не выбрано</option>
        <option value="1500" <?php if ($_GET['length'] == '1500') echo ('selected') ?>>1500</option>
        <option value="2000" <?php if ($_GET['length'] == '2000') echo ('selected') ?>>2000</option>
        <option value="2030" <?php if ($_GET['length'] == '2030') echo ('selected') ?>>2030</option>
      </select>
    </div>
    <div class="col ki-filter-item">
      <label for="thickness">Толщина</label>
      <select id="thickness" class="form-control">
        <option value="null" <?php if (!$_GET['thickness']) echo ('selected') ?>>Не выбрано</option>
        <option value="0.6" <?php if ($_GET['thickness'] == '0.6') echo ('selected') ?>>0.6 мм</option>
        <option value="0.7" <?php if ($_GET['thickness'] == '0.7') echo ('selected') ?>>0.7 мм</option>
        <option value="1.4" <?php if ($_GET['thickness'] == '1.4') echo ('selected') ?>>1.4 мм</option>
        <option value="2" <?php if ($_GET['thickness'] == '2') echo ('selected') ?>>2 мм</option>
        <option value="3" <?php if ($_GET['thickness'] == '3') echo ('selected') ?>>3 мм</option>
        <option value="4" <?php if ($_GET['thickness'] == '4') echo ('selected') ?>>4 мм</option>
        <option value="5" <?php if ($_GET['thickness'] == '5') echo ('selected') ?>>5 мм</option>
        <option value="8" <?php if ($_GET['thickness'] == '8') echo ('selected') ?>>8 мм</option>
        <option value="10" <?php if ($_GET['thickness'] == '10') echo ('selected') ?>>10 мм</option>
        <option value="15" <?php if ($_GET['thickness'] == '15') echo ('selected') ?>>15 мм</option>
        <option value="18" <?php if ($_GET['thickness'] == '18') echo ('selected') ?>>18 мм</option>
        <option value="19" <?php if ($_GET['thickness'] == '19') echo ('selected') ?>>19 мм</option>

      </select>
    </div>
    <div class="col d-flex align-items-end ki-filter-item" style="gap: 10px">
      <button class="btn btn-dark" onclick="setFilter()">Применить</button>
      <button class="btn btn-danger" onclick="clearFilter()">Сбросить</button>
    </div>
  </div>

  <div class="container mt-5 mb-5">
    <?php if ($products) { ?>
      <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
        <?php foreach ($products as $product): ?>
          <div class="col">
            <a href="/catalog/pvc_plastic/product?id=<?= $product['id']; ?>" class="card h-100 ki-card">
              <div style="padding:10px;">
                <img style="width: 100%; height: 300px;" src=<?= '/assets/images/catalog/' . $product['image'] ?> class="card-img-top" alt=<?= $product['name'] ?>>
              </div>
              <div class="card-body d-flex flex-column ">
                <h5 class="card-title"><?= $product['name'] ?></h5>
                <p class="card-text" style="flex:1;">
                  <?php if ($product['thickness']) { ?>
                    Толщина, мм: <?= $product['thickness'] ?><br>
                  <? } ?>
                  <?php if ($product['surface']) { ?>
                    Поверхность: <?= $product['surface'] ?><br>
                  <? } ?>
                  Формат, мм: <?= $product['length'] . 'x' . $product['width'] ?><br>
                  Производитель: <?= $product['manufacturer'] ?><br>
                <div class="card-footer bg-transparent d-flex justify-content-center px-0">
                  <p>Цена от: <strong class="text-danger"><?= number_format($product['opt_price'], 0, '.', ' '); ?> ₽/лист</strong></p>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    <?php } else { ?>
      <div class="" style="text-align: center">
        <h2>С заданными параметрами ничего не найдено</h2>
      </div>
    <?php }; ?>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>

<script>
  function setFilter() {
    const params = (new URL(document.location)).searchParams
    const subcategory = params.get("subcategory")

    let filterString = subcategory ? `subcategory=${subcategory}` + '&' : ''

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

  function clearFilter() {
    const params = (new URL(document.location)).searchParams
    const subcategory = params.get("subcategory")

    if (subcategory) {
      window.location.search = `subcategory=${subcategory}`
    }
  }
</script>