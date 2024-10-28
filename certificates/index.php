<?
$title = 'Сертификаты';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'certificates';
include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

$dir = $_SERVER['DOCUMENT_ROOT'] . '/assets/certificates'; // убедитесь, что директория указана правильно

// foreach (glob($dir . '/*') as $fileName) { 
//   echo $url . '/' . basename($fileName) ;
//   echo "\n";
// }
// return
?>



<div class="container mt-5 mb-5">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php foreach (array_diff(scandir($dir), array('..', '.')) as $fileName): ?>
      <div class="col">
        <a href="<?= '/assets/certificates/' . $fileName; ?>" class="card h-100 ki-card" target="_blank">
          <div style="padding:10px; position: relative;">
            <img src=<?= '/assets/certificates/' . $fileName ?> class="card-img-top" alt="Сертификат">
          </div>
          <div class="card-body text-center">
            <h5 class="card-title"><?= $fileName ?></h5>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>


<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>