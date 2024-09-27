<?
$title = 'Статьи';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page= 'articles';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/articles/articles_info.php";
?>

<div class="container mt-5 mb-5">
  <div class="row row-cols-1 row-cols-md-4 g-4">
    <?php foreach ($articles as $article): ?>
      <div class="col">
        <a href="/articles/<?= $article['href']; ?>" class="card h-100 ki-card">
          <div style="padding:10px; position: relative;">
            <img src=<?= $article['src'] ?> class="card-img-top" alt=<?= $article['name'] ?>>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title"><?= $article['name'] ?></h5>
            <p class="card-text"><?= $article['dsc'] ?></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>