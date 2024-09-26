<?
$title = 'Статьи';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/articles/articles_info.php";
?>

<? if ($_GET['article'] && file_exists($_SERVER['DOCUMENT_ROOT'] . '/articles/' . $_GET['article'] . '.php')) {
  include_once $_SERVER['DOCUMENT_ROOT'] . '/articles/' . $_GET['article'] . '.php';
} else {
  include_once $_SERVER['DOCUMENT_ROOT'] . "/articles/list.php";
}
?>



<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>