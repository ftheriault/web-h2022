<?php
	require_once("action/AdminIndexAction.php");

	$action = new AdminIndexAction();
	$data = $action->execute();

	$pageTitle = "Accueil";
	require_once("partial/header.php");
?>
<div id="page-admin-index">
    <?php 
        if ($data["savedSuccessfully"]) {
            ?>
            <div class="success-div"><strong>Succès : </strong>Sauvegarde effectuée</div>
            <?php
        }
    ?>
        
    <form action="admin-index.php" method="post">
        <textarea name="text" cols="30" rows="10"><?= $data["indexText"] ?></textarea>
        <div class="text-center mt-large">
            <button>Sauvegarder</button>
        </div>
    </form>
</div>
<?php
	require_once("partial/footer.php");