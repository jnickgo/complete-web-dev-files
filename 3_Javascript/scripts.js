

var clickedTime; var createdTime; var reactionTime;

/**
 * creates a variable to create a color out of the num/letters
 * for loop gets first 5 characters to create a color
 */
function getRandomColor() {
    var letters = '0123456789ANCDEF'.split('');
    var color = '#';

    for (var i = 0; i < 6; i++) {
        color += letters[Math.round(Math.random() * 15)];
    }
    return color;
}

/**
 * Makes a box to click on
 */
function makeBox() {

    createdTime = Date.now();

    var time = Math.random();
    time = time * 5000;


    setTimeout(function () {

        if (Math.random() > 0.5) {
            document.getElementById("box").style.borderRadius = "100px";
        } else {
            document.getElementById("box").style.borderRadius = "0px"; s
        }

        var top = Math.random();
        top = top * 300;

        var left = Math.random();
        left = left * 500;
        
        document.getElementById("box").style.top = top + "px";
        document.getElementById("box").style.left = left + "px";

        document.getElementById("box").style.backgroundColor = getRandomColor();
        document.getElementById("box").style.display = "block";
        createdTime = Date.now();
    }, time);

}


document.getElementById("box").onclick = function () {

    clickedTime = Date.now();

    reactionTime = (clickedTime - createdTime) / 1000;

    document.getElementById("time").innerHTML = reactionTime; // Output the reactionTime

    this.style.display = "none";

    makeBox();
}

makeBox();