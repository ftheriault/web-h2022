<?php
    require_once("action/coursAction.php");

    $data = execute();

    $pageTitle = "Cours";
    require_once("partial/header.php");
?>
    <div class="course-list">
        <div>
            <h2>L'art des cartes</h2>
            <div class="img-container">
                <img src="img/cards.jpg" alt="Cartes">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati, accusantium quos numquam beatae sapiente. Facere amet accusamus id quos dolorum inventore esse excepturi autem ut ullam! Perferendis, libero laborum.
            </p>
        </div>
        <div>
            <h2>La triche</h2>
            <div class="img-container">
                <img src="img/hand2.jpg" alt="Triche">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati, accusantium quos numquam beatae sapiente. Facere amet accusamus id quos dolorum inventore esse excepturi autem ut ullam! Perferendis, libero laborum.
            </p>
        </div>
        <div>
            <h2>L'hypnose</h2>
            <div class="img-container">
                <img src="img/hand3.jpg" alt="Hypnose">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure obcaecati, accusantium quos numquam beatae sapiente. Facere amet accusamus id quos dolorum inventore esse excepturi autem ut ullam! Perferendis, libero laborum.
            </p>
        </div>
    </div>            
<?php
    require_once("partial/footer.php");