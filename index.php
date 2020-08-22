<?php include 'layouts/_header.php';?>

<div class="app">
    <?php
    include 'config/View.php';
    $view = new View();
    $view->setView();
    ?>
</div>

<?php include 'layouts/_footer.php'; ?>
