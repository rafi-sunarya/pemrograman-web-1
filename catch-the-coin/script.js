class GameObject {
  constructor(x, y, width, height) {
    this.x = x;
    this.y = y;
    this.width = width;
    this.height = height;
  }

  setPosition(element) {
    element.style.left = this.x + "px";
    element.style.top = this.y + "px";
  }
}

class Player extends GameObject {
  constructor(x, y) {
    super(x, y, 50, 50);
    this.speed = 20;
  }

  moveLeft() {
    if (this.x > 0) this.x -= this.speed;
  }

  moveRight() {
    if (this.x < 550) this.x += this.speed;
  }
}

class Coin extends GameObject {
  constructor(x, y) {
    super(x, y, 30, 30);
    this.speed = 2;
  }

  fall() {
    this.y += this.speed;
  }

  reset() {
    this.x = Math.floor(Math.random() * 570);
    this.y = -30;
  }
}

const gameArea = document.getElementById("game-area");
const playerElement = document.getElementById("player");
const scoreElement = document.getElementById("score");

const player = new Player(275, 340);
let coins = [];
let score = 0;
let gameSpeed = 2;

function buatCoin() {
  const coinElement = document.createElement("div");
  coinElement.classList.add("coin");
  gameArea.appendChild(coinElement);

  const coin = new Coin(Math.floor(Math.random() * 570), -30);
  coin.element = coinElement;
  coin.speed = gameSpeed;

  coins.push(coin);
}

function cekTabrakan(coin) {
  return (
    coin.x < player.x + player.width &&
    coin.x + coin.width > player.x &&
    coin.y < player.y + player.height &&
    coin.y + coin.height > player.y
  );
}

function updateGame() {
  player.setPosition(playerElement);

  coins.forEach((coin) => {
    coin.fall();

    if (cekTabrakan(coin)) {
      score++;
      scoreElement.textContent = score;
      coin.reset();

      if (score % 5 === 0) {
        gameSpeed += 1;
        buatCoin();
      }
    }

    if (coin.y > 400) {
      coin.reset();
    }

    coin.speed = gameSpeed;
    coin.setPosition(coin.element);
  });

  requestAnimationFrame(updateGame);
}

document.addEventListener("keydown", function (event) {
  if (event.key === "ArrowLeft") {
    player.moveLeft();
  }

  if (event.key === "ArrowRight") {
    player.moveRight();
  }
});

buatCoin();
updateGame();