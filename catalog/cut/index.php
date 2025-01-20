<?
$category_id = 10;
$folder = 'cut';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
?>
<div class="container my-5">
  <h2 class="text-center">Резка пластика</h2>
  <p class="h5 mt-5" style="line-height: 1.5em"> Предоставляем услуги резки материала на форматно-раскроечном станке по заданным размерам, погрещность составляет 3-4мм,
    спил 2мм. Стоимость 1 погонного метра составляет 80₽.<br>
    Также произовдим резку на станке ЧПУ по индивидуальным чертежам клиента. Цена 1 погонного метра составляет 150₽.</p>
  <div class="container mt-5 mb-5 d-flex flex-column g-3" style="gap: 1rem">
    <div class="row g-3">
      <div class="col-7">
        <img class="image-cut" src="../../assets/images/catalog/cut/cnc2.jpg" alt="">
      </div>
      <div class="col-5">
        <img class="image-cut" src="../../assets/images/catalog/cut/cnc1.jpg" alt="">
      </div>
    </div>

    <div class="row g-3">
      <div class="col-5">
        <img class="image-cut" src="../../assets/images/catalog/cut/cnc3.jpg" alt="">
      </div>
      <div class="col-7">
        <img class="image-cut" src="../../assets/images/catalog/cut/cnc4.jpg" alt="">
      </div>
    </div>

    <div class="row g-3">
      <div class="col-7">
        <img class="image-cut" src="../../assets/images/catalog/cut/cnc5.jpg" alt="">
      </div>
      <div class="col-5">
        <img class="image-cut" src="../../assets/images/catalog/cut/cnc6.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>