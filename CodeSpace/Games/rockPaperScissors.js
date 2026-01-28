
document.addEventListener('DOMContentLoaded', () => {

const rockBtn = document.getElementById("rockBtn");
const paperBtn = document.getElementById("paperBtn");
const scissorsBtn = document.getElementById("scissorsBtn");
const result = document.getElementById("result");

let playGame = (userInput) => {
    let computedIndex = Math.floor(Math.random() * 3);
    const options = ['Rock', 'Paper', 'Scissors']

    if (userInput === computedIndex) {
        result.innerHTML = `Draw - Both players chose ${options[userInput]}`;
    } else if (
                (options[userInput] === 'Rock' && options[computedIndex] === 'Paper') ||
                (options[userInput] === 'Paper' && options[computedIndex] === 'Scissors') ||
                (options[userInput] === 'Scissors' && options[computedIndex] === 'Rock')) { 
        result.innerHTML =  `You lose... Computer chose <strong>${options[computedIndex]}</strong> which beats your ${options[userInput]}`; 
    } else {
        result.innerHTML =  `You win! Your ${options[userInput]} beats Computer's ${options[computedIndex]}`;
    }
    return;
    console.log('User Input: ' + userInput);
    console.log('Computed Input: ' + computerChoice);
};

rockBtn.addEventListener('click', () => playGame(0));
paperBtn.addEventListener('click', () => playGame(1)); 
scissorsBtn.addEventListener('click', () => playGame(2)); 

});
