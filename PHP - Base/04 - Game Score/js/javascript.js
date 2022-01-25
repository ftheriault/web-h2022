let spriteList = [];
let ctx = null;
let canvas = null;
const backgroundImage = new Image();
const holeImage = new Image();
const moleImage = new Image();
const tractorImage = new Image();
let timeoutId = null;
let startTime = new Date();
let totalTime = null;

window.addEventListener("load", () => {
    canvas = document.querySelector("canvas");

    if (canvas != null) {
        ctx = canvas.getContext("2d");

        backgroundImage.src = "images/game-background.jpg";
        holeImage.src = "images/hole.png";
        moleImage.src = "images/mole.png";
        tractorImage.src = "images/tractor.png";

        start();
        tick();
    }
});

const start = () => {
    spriteList = [];
    startTime = new Date();
    totalTime = null;
    timeoutId = null;

    spriteList.push(new Mole(150, 400));
    spriteList.push(new Mole(300, 200));
    spriteList.push(new Mole(450, 400));
    spriteList.push(new Mole(600, 200));
    spriteList.push(new Mole(750, 400));

    document.querySelector("canvas").onclick = evt => {
        if (totalTime == null) {
            for (let i = 0; i < spriteList.length; i++) {
                const element = spriteList[i];

                if (element.isHit(evt.offsetX, evt.offsetY)) {
                    spriteList.splice(i, 1);
                    i--;

                    activateMole();
                    break;
                }
            }
        }
    }

    activateMole();
}

const activateMole = () => {
    if (spriteList.length > 0) {
        if (timeoutId != null) {
            clearTimeout(timeoutId);
        }

        for (let i = 0; i < spriteList.length; i++) {
            const element = spriteList[i];
            element.active = false;
        }

        setTimeout(() => {
            spriteList[Math.floor(spriteList.length * Math.random())].active = true;

            timeoutId = setTimeout(activateMole, 1000);    
        }, 500);
    }    
    else if (totalTime == null) {
        totalTime = new Date() - startTime;
        spriteList.push(new Tractor(totalTime));
    }
}

const tick = () => {
    ctx.clearRect(0, 0, 960, 576);
    
    if (backgroundImage.complete) {
        ctx.drawImage(backgroundImage, 0, 0);
    }

    for (let i = 0; i < spriteList.length; i++) {
        const element = spriteList[i];
        element.tick();
    }    

    window.requestAnimationFrame(tick);
}