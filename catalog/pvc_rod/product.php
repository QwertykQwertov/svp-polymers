<?
$title = 'Каталог';
$description = 'Продажа и резка полимерных материалов';
$keywords = 'ПВХ сэндвич-панели, оргстекло литое, оргстекло экструзионное, ПВХ лист, клеи и очистители, поликарбонат сотовый, резка полимеров, теплицы ';
$page = 'catalog';

include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/header.php";

require($_SERVER['DOCUMENT_ROOT'] . '/database/db.php');

$id = $_GET['id'];

if ($id) {
  $sql = "SELECT * FROM products WHERE id = $id";
} else {
  // 404
}

$result = $conn->query($sql);

if ($result->num_rows != 0) {

  $products = $result->fetch_assoc();
}
?>

<div class="container my-5">
  <div class="container mt-5 mb-5">

  </div>
</div>

<? include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"; ?>