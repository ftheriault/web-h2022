<?php
    $tab = array("Crayon", "Efface", "Clavier", "test" => "asdf");
    // echo $tab[0];
    $tab = json_encode($tab);
    $newTab = json_decode($tab);
    echo $newTab->test; // Depuis php 7, un json_decode fait un objet (si {})
?>

<script>
    let tab = <?= $tab ?>;
    console.log(tab.test);
</script>