<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
    <h1>Gagner une nuitée au château Frontenac</h1>
    <div class="half-width">
        <form action="" method="post">
            <?php
                if (!empty($data["successMessage"])) {
                    ?>
                    <div class="success-message"><?= $data["successMessage"] ?></div>
                    <?php
                }
                if (!empty($data["errorMessage"])) {
                    ?>
                    <div class="error-message"><?= $data["errorMessage"] ?></div>
                    <?php
                }
            ?>
            <div>
                <input type="text" name="name" placeholder="Nom complet" required>
            </div>
            <div>
                <select name="type" required>
                    <option value="">Type de chambre souhaité</option>
                    <option>Simple</option>
                    <option>Double</option>
                    <option>Suite</option>
                </select>
            </div>
            <div>
                <button>Confirmer l'inscription</button>
            </div>
        </form>
    </div>
<?php
    require_once("partial/footer.php");