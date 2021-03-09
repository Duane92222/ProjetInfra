const express = require('express');
const app = express();
const path = require('path');
const port = 3000;

app.get('/', function(req, res) {
    res.sendFile(path.join(__dirname + '/index.html'));
});

app.listen(port, () => console.log(`url-shortener listening on port ${port}!`));

const bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.urlencoded());

app.post('/url', function(req, res) {
    const url = req.body.url;

    res.send(url);
});
const urlShortener = require('node-url-shortener');

app.post('/url', function(req, res) {
    const url = req.body.url;

    urlShortener.short(url, function(err, shortUrl) {
        res.send(shortUrl);
    });
});

// const buttons = document.querySelectorAll("button");
// let scorej1 = 0;
// let scorej2 = 0;
// for (let i = 0; i < buttons.length; i++) {
//     buttons[i].addEventListener('click', function() {
//         const joueur = buttons[i].innerHTML;
//         const robot = buttons[Math.floor(Math.random() * buttons.length)].innerHTML;
//         let result = "";
//         if (joueur === robot) {
//             result = "No WINNER";
//         } else if ((joueur === "Rock" && robot === "Scissor") || (joueur === "Scissor" && robot === "Paper") || (joueur === "Paper") && (robot === "Rock")) {
//             result = "You WIN";
//             scorej1++
//         } else {
//             result = "You LOOSE";
//             scorej2++
//         }
//         if (robot === "Rock") {
//             document.getElementById("ibrock").style.opacity = "100%"
//             document.getElementById("ibpaper").style.opacity = "0"
//             document.getElementById("ibscissor").style.opacity = "0"
//         } else if (robot === "Scissor") {
//             document.getElementById("ibpaper").style.opacity = "0"
//             document.getElementById("ibrock").style.opacity = "0"
//             document.getElementById("ibscissor").style.opacity = "100%"
//         } else {
//             document.getElementById("ibscissor").style.opacity = "0"
//             document.getElementById("ibpaper").style.opacity = "100%"
//             document.getElementById("ibrock").style.opacity = "0"

//         }
//         if (scorej1 === 3) {
//             result = "You Win with " + scorej1 + " points ! \nThe Bot Loose with " + scorej2 + " point(s) !"
//         } else if (scorej2 === 3) {
//             result = "You Loose with " + scorej1 + " point(s) ! \nThe Bot Win with " + scorej2 + " points !"
//         }


//         document.querySelector(".result").innerHTML = `
//     Player : ${joueur} </br>
//     Bot : ${robot} <br/>
//     ScorePlayer1 : ${scorej1} /
//     ScorePlayer2 : ${scorej2} </br>
//     Result : ${result} </br>

//     `;
//     });
// }

// function p() {
//     document.getElementById("irock").style.opacity = "100%"
//     document.getElementById("ipaper").style.opacity = "0"
//     document.getElementById("iscissor").style.opacity = "0"
// }

// function f() {
//     document.getElementById("ipaper").style.opacity = "100%"
//     document.getElementById("irock").style.opacity = "0"
//     document.getElementById("iscissor").style.opacity = "0"

// }

// function c() {
//     document.getElementById("iscissor").style.opacity = "100%"
//     document.getElementById("ipaper").style.opacity = "0"
//     document.getElementById("irock").style.opacity = "0"
// }

// function r() {
//     document.getElementById("ibrock").style.opacity = "0"
//     document.getElementById("ibpaper").style.opacity = "0"
//     document.getElementById("ibscissor").style.opacity = "0"
//     document.getElementById("iscissor").style.opacity = "0"
//     document.getElementById("ipaper").style.opacity = "0"
//     document.getElementById("irock").style.opacity = "0"
//     result = "New Game"
//     scorej1 = 0
//     scorej2 = 0
//     document.querySelector(".result").innerHTML = `
//     ScorePlayer1 : ${scorej1} /
//     ScorePlayer2 : ${scorej2} </br>
//     Result : ${result} </br>

//     `;

// }