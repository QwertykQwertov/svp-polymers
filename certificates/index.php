<?
$title = 'Сертификаты';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'certificates';
include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$sql = "SELECT * FROM certificates";

$result = $conn->query($sql);

if ($result->num_rows != 0) {
  $certificates = $result->fetch_all(MYSQLI_ASSOC);
} else {
  $certificates = [];
}
?>



<div class="container mt-5 mb-5">
  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
    <?php foreach ($certificates as $certificate): ?>
      <div class="col">
        <a href="<?= '/assets/certificates/' . $certificate['file']; ?>" class="card h-100 ki-card" target="_blank">
          <div style="padding:10px; position: relative;">
            <img src=<?= '/assets/certificates/images/' . $certificate['preview']; ?> class="card-img-top" alt="<?= $certificate['name'] ?>">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title"><?= $certificate['name'] ?></h5>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>