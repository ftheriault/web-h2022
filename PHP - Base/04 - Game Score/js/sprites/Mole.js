class Mole {
    constructor(x, y) {
        this.x = x;
        this.y = y;
        this.active = false;
    }

    isHit(x, y) {
        let hit = false;

        if (this.active) {
            if (this.x <= x && this.x + holeImage.width >= x &&
                this.y <= y && this.y + holeImage.height >= y) {
                hit = true;
            }
        }

        return hit;
    }

    tick() {
        if (!this.active) {
            if (holeImage.complete) {
                ctx.drawImage(holeImage, this.x, this.y);
            }
        }
        else {
            if (moleImage.complete) {
                ctx.drawImage(moleImage, this.x, this.y);
            }
        }
    }
}