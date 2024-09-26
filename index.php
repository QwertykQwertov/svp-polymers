  <?
  $title = 'ООО "СВП"';
  $description = 'Продажа и резка полимерных материалов';
  $keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';

  include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

  $slider_json_data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/slider.json");
  $slider_data = json_decode($slider_json_data);

  var_dump($slider_data)
  ?>
  <div class="welcome-section">
    <div class="welcome-overlay"></div>
  </div>

  <!-- Slider -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <? foreach ($item as $key => $slider_data) { ?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $key ?>" aria-label="Слайд <?= $key ?>"></button>
      <? } ?>
    </div>
    <div class="carousel-inner">
      <!-- <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div> -->
      <? foreach ($item as $key => $slider_data) { ?>
        <div class="carousel-item">
          <img src="<?= $item['name']?>" class="d-block w-100" alt="<?= $item['name']?>">
        </div>
      <? } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>
  <!-- End Slider -->

  <? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>