<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/includes/_header.php" ?>

<div class="p-5">
  <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-5">
    <?php
    foreach ($items as $item) {
      include $_SERVER["DOCUMENT_ROOT"] . "/pages/cards/card.php";
    }
    ?>
  </div>
</div>

<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/includes/_footer.php" ?>