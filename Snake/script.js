document.addEventListener('DOMContentLoaded', function () {
    const container = document.querySelector('.game-container');
    const snake = document.getElementById('snake');
    const pellet = document.getElementById('pellet');

    let snakeX = 0;
    let snakeY = 0;
    let snakeSize = 1;
    let direction = 'right';
    let pelletX = 0;
    let pelletY = 0;

    function getRandomPosition() {
        const x = Math.floor(Math.random() * 19) * 20;
        const y = Math.floor(Math.random() * 19) * 20;
        return { x, y };
    }

    function updatePelletPosition() {
        const position = getRandomPosition();
        pelletX = position.x;
        pelletY = position.y;
        pellet.style.left = `${pelletX}px`;
        pellet.style.top = `${pelletY}px`;
    }

    function checkCollision() {
        const headRect = snake.getBoundingClientRect();

        // Check collision with walls
        if (
            snakeX < 0 ||
            snakeX >= container.clientWidth ||
            snakeY < 0 ||
            snakeY >= container.clientHeight
        ) {
            return true;
        }

        // Check collision with itself
        const segments = document.querySelectorAll('.snake');
        for (const segment of segments) {
            const segmentRect = segment.getBoundingClientRect();
            if (
                headRect.left < segmentRect.right &&
                headRect.right > segmentRect.left &&
                headRect.top < segmentRect.bottom &&
                headRect.bottom > segmentRect.top
            ) {
                return true;
            }
        }

        return false;
    }

    function moveSnake() {
        switch (direction) {
            case 'up':
                snakeY -= 20;
                break;
            case 'down':
                snakeY += 20;
                break;
            case 'left':
                snakeX -= 20;
                break;
            case 'right':
                snakeX += 20;
                break;
        }

        snake.style.left = `${snakeX}px`;
        snake.style.top = `${snakeY}px`;
    }

    function growSnake() {
        const newSegment = document.createElement('div');
        newSegment.className = 'snake';
        container.appendChild(newSegment);
        snakeSize++;
    }

    function updateGame() {
        moveSnake();

        // Check collision with pellet
        if (
            snakeX < pelletX + 20 &&
            snakeX + 20 > pelletX &&
            snakeY < pelletY + 20 &&
            snakeY + 20 > pelletY
        ) {
            updatePelletPosition();
            growSnake();
        }

        // Check collision with itself or walls
        if (checkCollision()) {
            // Reset game
            alert('Game Over! Your score: ' + snakeSize);
            snakeX = 0;
            snakeY = 0;
            snakeSize = 1;
            direction = 'right';
            const segments = document.querySelectorAll('.snake');
            segments.forEach(segment => segment.remove());
            container.appendChild(snake);
            updatePelletPosition();
        }

        // Update every 200ms
        setTimeout(updateGame, 200);
    }

    document.addEventListener('keydown', function (event) {
        switch (event.key) {
            case 'ArrowUp':
                if (direction !== 'down') {
                    direction = 'up';
                }
                break;
            case 'ArrowDown':
                if (direction !== 'up') {
                    direction = 'down';
                }
                break;
            case 'ArrowLeft':
                if (direction !== 'right') {
                    direction = 'left';
                }
                break;
            case 'ArrowRight':
                if (direction !== 'left') {
                    direction = 'right';
                }
                break;
        }
    });

    updatePelletPosition();
    updateGame();
});