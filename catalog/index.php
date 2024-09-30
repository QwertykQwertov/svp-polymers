<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
$catalog_json_data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/catalog/catalog.json");
$catalog_data = json_decode($catalog_json_data, true);
?>

<div class="container my-5">
  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <?php foreach ($catalog_data as $product): ?>
        <div class="col">
          <a href="/catalog/<?= $product['href']; ?>" class="card h-100 ki-card">
            <div style="padding:10px;">
              <img style="width: 100%; height: 300px;" src=<?= '/assets/images/catalog/' . $product['mainImg'] ?> class="card-img-top" alt=<?= $product['name'] ?>>
            </div>
            <div class="card-body text-center">
              <h5 class="card-title"><?= $product['name'] ?></h5>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>