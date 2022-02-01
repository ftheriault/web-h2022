<?php
    require_once("action/priveAction.php");

    $data = execute();

    require_once("partial/header.php");
?>
<h1>Page privée!</h1>

<?php
    foreach($data["spyList"] as $spy) {
        ?>
        <div>
            - <?= $spy ?>
        </div>
        <?php
    }
?>

<?php	
	require_once("partial/footer.php");
        