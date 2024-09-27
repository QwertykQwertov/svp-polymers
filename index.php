  <?
  $title = 'ООО "СВП"';
  $description = 'Продажа и резка полимерных материалов';
  $keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';

  include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

  $slider_json_data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/slider.json");
  $slider_data = json_decode($slider_json_data, true);
  ?>
  <!-- <div class="welcome-section">
    <div class="welcome-overlay"></div>
  </div> -->

  <!-- Slider -->
  <div class="container">
    <div class="row mx-auto my-auto justify-content-center">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
          <? foreach ($slider_data as $key => $item) { ?>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="<?= $key ?>" aria-label="Слайд <?= $key ?>" class="<? if ($key == 0) echo 'active' ?>" aria-current="<?= $key == 0 ?>"></button>
          <? } ?>
        </div>
        <div class="carousel-inner" role="listbox">
          <!-- <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div> -->
          <? foreach ($slider_data as $key => $item) {
          ?>
            <div class="carousel-item <? if ($key == 0) echo 'active' ?>">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-img">
                    <img src="/assets/images/slider/<?= $item['name'] ?>" class="img-fluid" alt="<?= $item['name'] ?>" style="width: 100%">
                  </div>
                </div>
              </div>
            </div>
          <? } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>
  </div>
  <!-- End Slider -->

  <script>
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
      const minPerSlide = 4
      let next = el.nextElementSibling
      for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
          // wrap carousel by using first child
          next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
      }
    })
  </script>
  <? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>