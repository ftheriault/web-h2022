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
            if (res.data.length < 50) {
                let parent = document.querySelector("#result");
                // let node = document.createElement("div");
                parent.innerText = res.data;
                // parent.append(node);
            }
        });
    }
    
})