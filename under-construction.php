<?php
$currentPage = 'under-construction';

include ($_SERVER['DOCUMENT_ROOT']."/includes/components/header.php");

$_POST['name'];
?>

<!-- <div style="height: 100vh;">
    <img src="/img/under-construction.jpg" alt="" style="width: 100%; object-fit: stretch; position: absolute; top: 0;">
</div> -->

<?= $_POST['name']; ?>

<?php
include ($_SERVER['DOCUMENT_ROOT']."/includes/components/footer.php");
?>