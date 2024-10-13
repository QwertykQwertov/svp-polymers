<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$sql = 'SELECT * FROM subcategories WHERE category = ' . $category_id;
$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $subcategories = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<div class="container my-5" style="flex: 1">
  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
      <?php foreach ($subcategories as $subcategory): ?>
        <div class="col">
          <a href="<?= '/catalog/' . $folder . '/products?sub=' . $subcategory['id']; ?>" class="card h-100 ki-card">
            <div style="padding:10px;">
              <img style="width: 100%; height: 300px;" src=<?= '/assets/images/subcategories/' . $subcategory['image'] ?> class="card-img-top" alt=<?= $subcategory['name'] ?>>
            </div>
            <div class="card-body text-center">
              <h5 class="card-title"><?= $subcategory['name'] ?></h5>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>