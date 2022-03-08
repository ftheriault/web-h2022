window.addEventListener("load", () => {
    document.querySelector("#texte").onkeyup = function () {
        let val = this.value;
        
        let formData = new FormData();
        formData.append("chuck", val); // <input type="text" name="chuck" value="aaa" />

        fetch("ajax.php", {
            method : "POST",
            body : formData
        })
        .then(res => res.json())
        .then(res => {
            let parent = document.querySelector("#result");
            let node = document.createElement("div");
            node.innerText = res;
            parent.append(node);
        });
    }
    
})