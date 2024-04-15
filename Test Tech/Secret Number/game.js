
// Three variables to hold the secret number, the numbers of guesses and the maximun of guess oof the game
let secretNumber;
let guessCount;
let maxGuesses = 3;


// -----------------------------------Function to start the game and display the first information---------------------


// first i create a function start the game, where like i did with th RPS i will use a Math.random to generate a number from 1 to 10
// and show all the information i want to display at the beggining of the game
function startGame() {
    // Generate a random number between 1 and 10 (inclusive) and holding the information on the variable
    secretNumber = Math.floor(Math.random() * 10) + 1;
    // making sure the Variable ot guest count starts from 0
    guessCount = 0;
    updateHearts(maxGuesses);
    // Display a message to show the player the game has started !!!
    document.getElementById("info").value = "lets Play";
    // Display a message to tell the player what to do !
    document.getElementById("numbers").value = "Guess a number!!";
}

// -------------------------------------Funtion for displaying the numbers------------------------------------------

// Show the number entered by the player in the "numbers" input field
function displayNumbers(number) {

    var enteredNumberDisplay = document.getElementById("numbers");
    // Update the value of the "numbers" input field with the entered number
    enteredNumberDisplay.value = number;
}

//--------------------------------------- function to play the game -----------------------------------------------

// function to proccess all the information and play the game
function makeGuess() {
    // Retrieve and change the string into int, the number entered by the player
    var enteredNumber = parseInt(document.getElementById("numbers").value, 10);
    // Validate the entered number (must be a number between 1 and 10)
    if (isNaN(enteredNumber) || enteredNumber < 1 || enteredNumber > 10) {
        // If invalid, display an error message and exit the function
        document.getElementById("info").value = "Invalid Number. Try again!";
        return;
    }

    // Increment the guess count and update the UI to show the remaining tries
    guessCount++;
    updateHearts(maxGuesses - guessCount);

    // Check if the player still has guesses left
    if (guessCount <= maxGuesses) {
        if (enteredNumber === secretNumber) {
            // If the guess is correct, display a success message
            document.getElementById("info").value = "Correct! The number was " + secretNumber + ".";
        } else if (guessCount === maxGuesses) {
            // If this was the last guess and it was incorrect, display a game over message
            document.getElementById("info").value = "Game over! The number was " + secretNumber + ".";
        } else if (enteredNumber < secretNumber) {
            // If the guess was too low, tell the player to guess higher
            document.getElementById("info").value = "Higher!";
        } else {
            // If the guess was too high, tell the player to guess lower
            document.getElementById("info").value = "Lower!";
        }
    } else {
        // If no guesses are left, inform the player and suggest resetting the game
        document.getElementById("info").value = "No more guesses allowed. Press Reset.";
    }
}

function updateHearts(triesLeft) {
    let hearts = '❤️'.repeat(triesLeft) + '🖤'.repeat(maxGuesses - triesLeft);
    document.getElementById("lifesLeft").innerHTML = hearts;
}

// Resets the game by re-initializing the game state
function resetGame() {
    startGame(); // Call startGame to reset everything
}

// Assign the startGame function to run when the window finishes loading, initializing the game automatically
window.onload = startGame;
