<?
$title = 'Производители';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/manufacturers/manufacturers_info.php";
?>

<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php foreach ($manufacturers as $manufacturer): ?>
      <div class="col">
        <div class="card h-100">
          <div style="padding:10px;">
            <img src=<?= $manufacturer['src'] ?> class="card-img-top" alt=<?= $manufacturer['name'] ?>>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title"><?= $manufacturer['name'] ?></h5>
            <p class="card-text"><?= $manufacturer['dsc'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>