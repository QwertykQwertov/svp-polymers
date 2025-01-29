<?
$title = 'Доставка';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'services';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
?>

<div class="container mt-5">

  <div class="card my-5">
    <div class="row g-0">
      <div class="ki-services-image-wrapper" style="max-width: 30%; border-right: 1px solid var(--bs-border-color-translucent);">
        <img src="/assets/images/formatno-raskroy.webp" class="img-fluid rounded-start" style="width: 100%; height: 100%" alt="Изображение станка">
      </div>
      <div class="" style="flex: 1;">
        <div class="card-header">
          <h3><img src="/assets/images/saw.svg" alt="Изображение пилы" style="width: 32px; height: 32px"> Резка материала</h3>
        </div>
        <div class="card-body">
          <div class="card-text">
            <ul class="delivery-list">
              <li>Резка материала осуществляется на <b>форматно-раскроечном станке</b> по заданным размерам</li>
              <li>Погрешность составляет <b>3-4мм</b></li>
              <li>Спил <b>2мм</b></li>
              <li>Стоимость 1 погонного метра <b>80₽</b></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card my-5">
    <div class="row g-0">
      <div class="ki-services-image-wrapper" style="max-width: 30%; border-right: 1px solid var(--bs-border-color-translucent);">
        <img src="/assets/images/rezka_cnc.webp" class="img-fluid rounded-start" style="width: 100%; height: 100%" alt="Изображение станка">
      </div>
      <div class="" style="flex: 1;">
        <div class="card-header">
          <h3><img src="/assets/images/saw.svg" alt="Изображение пилы" style="width: 32px; height: 32px"> Резка материала на станке ЧПУ</h3>
        </div>
        <div class="card-body">
          <div class="card-text">
            <ul class="delivery-list">
              <li>Резка по индивидуальным чертежам клиента на <b>станках ЧПУ</b></li>
              <li>Стоимость 1 погонного метра <b>150₽</b></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card my-5">
    <div class="row g-0">
      <div class="ki-services-image-wrapper" style="max-width: 30%; border-right: 1px solid var(--bs-border-color-translucent);">
        <img src="/assets/images/delivery_img.jpg" class="img-fluid rounded-start" style="width: 100%; height: 100%" alt="Изображение станка">
      </div>
      <div class="" style="flex: 1;">
        <div class="card-header">
          <h3><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
              <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg> Услуги доставки</h3>
        </div>
        <div class="card-body">
          <div class="card-text">
            <ol class="delivery-list">
              <li>Доставка по г. Москва осуществляется по фиксированной цене <b>3000₽</b></li>
              <li>Доставка За пределы Москвы от <b>5000₽</b></li>
              <li>Доставка производится в течении <b>2-3</b> рабочих дней после оплаты материала</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>