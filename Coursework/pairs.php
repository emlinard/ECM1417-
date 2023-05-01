<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li a {
    font-family: Verdana;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #0000FF;
}

body {
  background-image: url('arcade-unsplash.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

body {
    font-family: monospace, Verdana;
    color: white;
}

ol, ul {
    list-style: none;
}

em {
    font-style: italic;
}

.black-button {
	background-color: #ffffff;
	border-radius: 0.3em;
	border: 1px solid #000000;
	font-size: 1.2em;
	font-weight: bold;
}

h1 {
    text-align: center;
    font-size: 2em;
    padding: 0.6em;
    text-decoration: underline;
    color: black;
}

.game-status-details {
    display: flex;
    flex-wrap: wrap;
    max-width: 50%;
    margin-left: auto;
    margin-right: auto;   
    padding: 0.3em;
    text-align: center;
}

.move-counter,
.timer,
.restart-btn {
    width: 100%;
}

.move-counter, .timer {
    font-size: 1.3em;
}

.restart-btn {
    background: none;
    border: none;
    color: #000000;
    font-size: 1.6em;
    font-weight: 900;
}

.start-btn {
    background: none;
    border: none;
    color: #000000;
    font-size: 1.6em;
    font-weight: 900;
}

.game-board {
    max-width: 50%;
    margin-left: auto;
    margin-right: auto;
    background-color: #A9A9A9;
    border-radius: 0.3em;
    box-shadow: 0 5px 5px #A9A9A9;
}

.game-grid-row {
    display: flex;
    flex-wrap: nowrap;
}

.game-card {
    width: 4.5em;
    height: 4.5em;
    background-color: #212121;
    border-radius: 0.3em;
    margin: 0.8em;
    box-shadow: 2px 0 10px #212121;
    cursor: pointer;
}





.game-card-img {
    visibility: hidden;
    object-fit: cover;
    width: 4.5em;
    height: 4.5em;
}

.game-card-features {
    visibility: hidden;
    object-fit: cover;
    width: 4.5em;
    height: 4.5em;
}


.start-button-div {
    max-width: 50%;
    margin: 1.5em auto;
    text-align: center;
}

.start-button { 
	padding: 0.7em 1.4em;
}

.restart-button-div {
    max-width: 50%;
    margin: 1.5em auto;
    text-align: center;
}

.restart-button { 
	padding: 0.7em 1.4em;
}

/* Game Over Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    width: 80%;
    margin: auto;
    padding: 0;
    position: relative;
    background-color: #EFEBE9;
    border: 1px solid #808080;
    border-radius: 0.5em;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.modal-header {
    border-bottom: 1px solid #D7CCC8;
    padding: 0.6em 1em;
    font-size: 1.5em;
    font-weight: bold;
}

.modal-body {
    padding: 1.6em 0.3em 1em;
}

.modal-body .message {
    text-align: center;
}

.modal-body .message p {
    margin-bottom: 0.5em;
}


.modal-footer {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    padding: 0 1em 1.5em;
}

.modal-footer button {
    padding: 0.3em 1em;
    width: 50%;
}

.close {
    font-size: 2em;
    float: right;
    margin-right: 0.8em;
    font-weight: bold;
    color: #3E2723;
    position: relative;
    animation: animateCloseIcon 5s linear 2s infinite;
}

.show-img {
    visibility: visible;
    animation: animateShowImage 0.4s linear alternate;
}

.disabled {
    pointer-events: none;
}

.show-modal {
    display: block;
}

/* Animations */

@keyframes animateCloseIcon {
    0% { top: 0em; }
    40% { top: 0em; }
    43% { top: -0.2em; }
    46% { top: 0em; }
    48% { top: 0.2em; }
    50% { top: 0em; }
    100% { top: 0em; }
}

@keyframes animateShowImage {
    0% { transform: rotateY(90deg); opacity: 0;}
    100%{ transform: rotateY(0); opacity: 1; }
}

/* Media Queries */
@media only screen and (max-width: 600px) {
    .modal-footer button {
        padding: 0.3em 0.3em;
        width: 50%;
    }
}

@media only screen and (min-width: 600px) and (max-width: 767px) {
    .game-card, .game-card-img, .game-card-features {
        width: 5em;
        height: 5em;
    }

}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .game-card, .game-card-img, .game-card-features {
        width: 5.5em;
        height: 5.5em;
    }
}

@media only screen and (min-width: 992px) {
    .game-status-details {
        display: block;
    }

    .move-counter,
    .timer,
    .restart-btn {
        width: initial;
    }

    .game-card, .game-card-img, .game-card-features {
        width: 6em;
        height: 6em;
    }

}

</style>
</head>
<body>

<div class = "main">
    <ul>
        <li style="float:left"><a href="index.php">Home</a></li>
        <li style="float:left"></listyle><a href="registration.php">Register</a></li>
        <li style="float: right"><?php
                if(isset($_COOKIE["avatar"])&& $_COOKIE["avatar"] == "blue"){
                    echo '<img src="avatar-blue.png" width="48" height="48">';
                }
            ?>
        <?php
                if(isset($_COOKIE["avatar"])&& $_COOKIE["avatar"] == "orange"){
                    echo '<img src="avatar-orange.png" width="48" height="48">';
                }
            ?>
        <?php
                if (isset($_COOKIE["avatar"])&& $_COOKIE["avatar"] == "green"){
                    echo '<img src="avatar-green.png" width="48" height="48">';
                }
            ?></li>
        <li style="float:right"><?php
                if(isset($_COOKIE["user"])){
                    echo "<a href=pairs.php> Play pairs </a>";              
                }
            ?></li>
        <li style="float:right"><a class="active" href="leaderboard.php">Leaderboard</a></li>
      </ul>
</div>
</body>

<head>
    <title>Pairs Game</title>
</head>
<body>
    <header>
        <h1>Pairs Game <span></h1>
    </header>
    <main>
        <section>
            <div class="start-button-div">
                <button class="start-button black-button" id="startButton" onClick="startGame(); startTimer(); hide()">Press to start!</button>
            </div> 
            <div class="game-status-details">
                <span class="move-counter" id="moveCounter"></span>
                <span class="timer" id="timer">0 mins 0 secs</span>
            </div>
            <table class="game-board">
                <tbody class="game-grid">
                    <tr class="game-grid-row">
                        <td class="game-card">
                            <img class="game-card-img" src="nerd-face.png" src="confetti.png" alt="nerd">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="thinking-face.png" alt="thinking">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="heart-face.png" alt="heart">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="smile-face.png" alt="smile">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="sad-face.png" alt="sad">
                        </td>
                    </tr>
                    <tr class="game-grid-row">
                        <td class="game-card">
                            <img class="game-card-img" src="sunglasses.png" alt="sunglasses">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="hat.png" alt="hat">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="heart.png" alt="heart">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="flowers.png" alt="flowers">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="confetti.png" alt="confetti">
                        </td>
                    </tr>
                    <tr class="game-grid-row">
                    <td class="game-card">
                            <img class="game-card-img" src="nerd-face.png" src="confetti.png" alt="nerd">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="thinking-face.png" alt="thinking">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="heart-face.png" alt="heart">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="smile-face.png" alt="smile">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="sad-face.png" alt="sad">
                        </td>
                    </tr>
                    <tr class="game-grid-row">
                    <td class="game-card">
                            <img class="game-card-img" src="sunglasses.png" alt="sunglasses">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="hat.png" alt="hat">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="heart.png" alt="heart">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="flowers.png" alt="flowers">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="confetti.png" alt="confetti">
                        </td>
                    </tr>
                </tbody>               
            </table>
        </section>
        
        <!--Modal on game over -->
        <div class="modal" id="gameOverModal">
            <div class="modal-content">
                <span aria-label="close" role="button" class="close" id="closeModal">&times;</span>
                <div class="modal-header">
                    <h2>Game Over</h2>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <p>Congratulations! You successfully completed the game.</p>
                        <p>You completed the game using <span id="totalGameMoves"></span> moves
                            <br>in <span id="totalGameTime"></span>
                        </p>
                        <p>Do you want to submit your score? If not, press play again!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <form id="leaderboard" name="leaderboard" action="leaderboard.php" method="post">
                        <input type="hidden" name="totalgametime" id="totalgametime" value="">
                        <input type="hidden" name="totalgamemove" id="totalgamemove" value="">
                        <a href="#" onclick="setValue();">Click to submit</a>
                    </form>          
                </div>
                <div class="modal-footer">
                    <button class="black-button" onClick="playAgain()">Play Again </button>
                </div>
            </div>
        </div>   
    <script>
        // Main Game Play
        let cardElements = document.getElementsByClassName('game-card');
        let cardElementsArray = [...cardElements];
        let imgElements = document.getElementsByClassName('game-card-img');
        let imgElementsArray = [...imgElements];
        let imgFeatures = document.getElementsByClassName('game-card-features');
        let imgFeaturesArray = [...imgFeatures];
        let counter = document.getElementById('moveCounter');
        let timer = document.getElementById('timer');
        let modalElement = document.getElementById('gameOverModal');
        let totalGameMovesElement = document.getElementById('totalGameMoves');
        let totalGameTimeElement = document.getElementById('totalGameTime');
        let closeModalIcon = document.getElementById('closeModal');
        let openedCards = [];
        let matchedCards =  [];
        let moves;
        let second = 0,
            minute = 0,
            hour = 0,
            interval,
            totalGameTime;
        const leaderboardList = [];

        function shuffle(array) {
            let currentIndex = array.length,
                temporaryValue,
                randomIndex;

            while (currentIndex !==0) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }

            return array;
        }

        function startGame() {
            //shuffle cards
        //  let shuffledFeatures = shuffle(imgFeaturesArray);
            let shuffledImages = shuffle(imgElementsArray);


            for(i=0; i<shuffledImages.length; i++) {
                //remove all images from previous games from each card (if any)
                cardElements[i].innerHTML = "";
                //imgElements[i].innerHTML = "";

                //add the shuffled images to each card
        //     imgElements[i].appendChild(shuffledFeatures[i]);
        //     imgElements[i].type = `${shuffledFeatures[i].alt}`;
                cardElements[i].appendChild(shuffledImages[i]);
                cardElements[i].type = `${shuffledImages[i].alt}`;

                //remove all extra classes for game play
                cardElements[i].classList.remove("show", "open", "match", "disabled");
                cardElements[i].children[0].classList.remove("show-img");
            }

            //listen for events on the cards
            for(let i = 0; i < cardElementsArray.length; i++) {
                cardElementsArray[i].addEventListener("click", displayCard)
            }

            //reset moves
            moves = 0;
            counter.innerText = `${moves} move(s)`;

            //Reset Timer on game reset
            timer.innerHTML = '0 mins 0 secs';
            clearInterval(interval);
        }

        function displayCard() {
            this.children[0].classList.toggle('show-img');
            this.classList.toggle("open");
            this.classList.toggle("show");
            this.classList.toggle("disabled");
            cardOpen(this);
        }

        function cardOpen(card) {
            openedCards.push(card);
            let len = openedCards.length;
            if(len === 2) {
                moveCounter();
                if(openedCards[0].type === openedCards[1].type) {
                    matched();
                } else {
                    unmatched();
                }
            }
        }

        function matched() {
            openedCards[0].classList.add("match");
            openedCards[1].classList.add("match");
            openedCards[0].classList.remove("show", "open");
            openedCards[1].classList.remove("show", "open");
            matchedCards.push(openedCards[0]);
            matchedCards.push(openedCards[1]);
            openedCards = [];
            if(matchedCards.length == 20) {
                endGame();
            }
        }

        function unmatched() {
            openedCards[0].classList.add("unmatched");
            openedCards[1].classList.add("unmatched");
            disable();
            setTimeout(function() {
                openedCards[0].classList.remove("show", "open", "unmatched");
                openedCards[1].classList.remove("show", "open", "unmatched");
                openedCards[0].children[0].classList.remove('show-img');
                openedCards[1].children[0].classList.remove('show-img');
                enable();
                openedCards = [];
                
            }, 1100)
        }

        function disable() {
            cardElementsArray.filter((card, i, cardElementsArray) => {
                card.classList.add('disabled');
            })
        }

        function enable() {
            cardElementsArray.filter((card, i, cardElementsArray) => {
                card.classList.remove('disabled');
                for(let i=0; i<matchedCards.length; i++) {
                    matchedCards[i].classList.add('disabled');
                }
            })
        }

        function moveCounter() {
            moves++;
            counter.innerHTML = `${moves} move(s)`;
        }

        function startTimer() {
            interval = setInterval(function(){
                timer.innerHTML = `${minute} mins ${second} secs`;
                second++;
                if(second == 60) {
                    minute++;
                    second = 0;
                }
                if(minute == 60) {
                    hour++;
                    minute = 0;
                }
            }, 1000)
        }

        function endGame() {
            clearInterval(interval);
            totalGameTime = timer.innerHTML;

            //show modal on game end
            modalElement.classList.add("show-modal");
            
            //show totalGameTime, moves in Modal
            totalGameTimeElement.innerHTML = totalGameTime;
            totalGameMovesElement.innerHTML = moves;
            
            matchedCards = [];
            closeModal();
        }


        function closeModal() {
            closeModalIcon.addEventListener("click", function() {
                modalElement.classList.remove("show-modal");
                startGame();
            })
        }

        function playAgain() {
            modalElement.classList.remove("show-modal");
            startGame();
        }


        function hide(){
            document.getElementById("startButton").style.display = "none";
        }

        function setValue(){
            totalGameTime = timer.innerHTML;
            totalGameTimeElement.innerHTML = totalGameTime;
            totalGameMovesElement.innerHTML = moves;
            document.leaderboard.totalgametime.value = totalGameTime;
            document.forms["leaderboard"].submit();
            document.leaderboard.totalgamemove.value = moves;
            document.forms["leaderboard"].submit();
        }


    </script> 
    
</body>
</html>