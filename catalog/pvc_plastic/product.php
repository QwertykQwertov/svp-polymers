<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products_pvc_plastic WHERE id = $id";
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
          <img src="<?= '/assets/images/catalog/' . $product['image'] ?>" class="img-fluid rounded-start" style="width: 100%; height: 100%" alt="<?= $product['name'] ?>">
        </div>
        <div class="" style="flex: 1;">
          <div class="card-header">
            <h3><?= $product['name'] . ', ' . $product['pack'] ?></h3>
          </div>
          <div class="card-body">
            <h4 class="card-title">
              <span class="badge rounded-pill bg-primary">
                <?= number_format($product['price'], 0, '.', ' ') . ' ₽/лист' ?>
              </span>
            </h4>
            <p class="card-text">
              <span class="badge rounded-pill bg-secondary">
                <?= 'Оптовая цена: ' . number_format($product['opt_price'], 0, '.', ' ') . ' ₽/лист' ?>
              </span>
            </p>
            <p class="card-text"><?= $product['description'] ?></p>

            <h4>Характеристики</h4>
            <p class="card-text"><?= 'Формат: ' . $product['length'] . 'x' . $product['width'] ?></p>
            <p class="card-text"><?= 'Толщина, мм: ' . $product['thickness'] ?></p>
            <p class="card-text"><?= 'Поверхность: ' . $product['surface'] ?></p>
            <p class="card-text"><?= 'Цвет: ' . $product['color'] ?></p>
            <p class="card-text"><?= 'Упаковка: ' . $product['pack'] ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Описание:</h5>
          <p class="card-text">Поливинилхлорид (ПВХ) был одним из первых искусственных материалов, созданных учеными. Его впервые синтезировали в 1835 году, а с 1912 года начались исследования по его промышленному производству. Массовое производство ПВХ стартовало в 1931 году благодаря корпорации BASF.
            ПВХ относится к категории термопластов.</p>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Состав материала:</h5>
          <p class="card-text">Поливинилхлорид (ПВХ) был одним из первых искусственных материалов, созданных учеными. Его впервые синтезировали в 1835 году, а с 1912 года начались исследования по его промышленному производству. Массовое производство ПВХ стартовало в 1931 году благодаря корпорации BASF.
            ПВХ относится к категории термопластов.</p>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Свойства материала:</h5>
          <ol>
            <li class="card-text">Пластики на основе ПВХ обладают высокой механической прочностью, устойчивостью к химическим веществам и влаге, а также низкой электропроводностью.</li>
            <li class="card-text">Они не растворяются в бензине и керосине, а воздействие кислот и щелочей на них минимально.</li>
            <li class="card-text">Кроме того, ПВХ-пластики имеют привлекательный внешний вид и удобны в работе — их легко резать, сваривать и склеивать, а также придавать нужные формы.</li>
            <li class="card-text">Жесткие листовые пластики ПВХ имеют плотность 1,4 г/см³ и характеризуются высокой жесткостью и стойкостью к ударам.</li>
            <li class="card-text">Максимальная эксплуатационная температура для таких пластиков достигает 700–750 градусов Цельсия, однако при температурах ниже 0 градусов их ударопрочность снижается.</li>
            <li class="card-text">Поверхность листов может быть гладкой, матовой или глянцевой, и они долго сохраняют свои свойства, несмотря на воздействие внешней среды.</li>
            <li class="card-text">В зависимости от добавок, жесткие листовые пластики могут оставаться неизменными при использовании на открытом воздухе до 15 лет.</li>
            <li class="card-text">На ровную поверхность листов удобно наносить трафаретную печать и ламинировать их.</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="card my-3">
      <div class="row g-0">
        <div class="card-body">
          <h5>Применение:</h5>
          <ul>
            <li class="card-text">Жесткий поливинилхлорид широко используется в строительстве для внутренней отделки стен и окон, а также для производства пластиковых сэндвич-панелей.</li>
            <li class="card-text">Корпуса оргтехники также изготавливаются из ПВХ.</li>
            <li class="card-text">В промышленности он применяется для воздуховодов и емкостей, где требуется высокая инертность к химическим реакциям.</li>
            <li class="card-text">Выставочные стенды, рекламные конструкции и формованные изделия часто производятся из жесткого поливинилхлорида.</li>
            <li class="card-text">Жесткий ПВХ не поддерживает горение, а его листы легко пилятся, фрезеруются и формуются без предварительной сушки.</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>