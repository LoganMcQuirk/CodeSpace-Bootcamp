document.addEventListener('DOMContentLoaded', () => {
    const doorBtnA = document.getElementById('doorBtnA');
    const doorBtnB = document.getElementById('doorBtnB');
    const doorBtnC = document.getElementById('doorBtnC');
    const resultEl = document.getElementById('result');


    const playGame = (door) => {
        const doorsArray = ['A', 'B', 'C'];
        const treasureDoor = doorsArray[Math.floor(Math.random() * doorsArray.length)];
        const playerDoor = doorsArray[door];
        let result = " ";
        if (treasureDoor === playerDoor) {
            result = "Congrats, you win!";
        } else {
            result = "Sorry, you lose.";
        }

        resultEl.innerHTML = `You chose: Door ${playerDoor}. The treasure was in: Door ${treasureDoor}. ${result}`;
        
    }

    // Clicked button sends corresponding input to play game function
    doorBtnA.addEventListener('click', () => playGame(0));
    doorBtnB.addEventListener('click', () => playGame(1));
    doorBtnC.addEventListener('click', () => playGame(2));
});