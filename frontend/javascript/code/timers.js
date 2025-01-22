let timer = document.getElementById("timer");
let startButton = document.getElementById("start");
let stopButton = document.getElementById("stop");
let resetButton = document.getElementById("reset");

let count = 0;
let interval;

startButton.addEventListener("click", () => {
    if (!interval) {
        interval = setInterval(() => {
            count++;
            timer.textContent = count;
        }, 1000);
    }
})

stopButton.addEventListener("click", () => {
    clearInterval(interval);
    interval = null;
})

resetButton.addEventListener("click", () => {
    clearInterval(interval);
    interval = null;
    count = 0;
    timer.textContent = count;
})