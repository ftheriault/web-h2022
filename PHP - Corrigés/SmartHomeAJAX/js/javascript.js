window.addEventListener("load", () => {
    updateLights();
})

const updateLights = () => {
    fetch("ajax.php", {})
    .then(response => response.json())
    .then(response => {
        response.forEach(light => {
            document.querySelector("#light" + light.id).src = "img/light-" + (light.status == "1" ? "on" : "off") + ".png";
        })
    });

    setTimeout(updateLights, 5000);
}