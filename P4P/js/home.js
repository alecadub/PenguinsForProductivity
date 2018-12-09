// Function that return the number of checkboxes checked

function getNumberOfCheckboxesChecked() {
    return $('input[name="task"]:checked').length;
}

//Function to update the gif displayed

function updateGIF() {
    if (getNumberOfCheckboxesChecked() === 6) {
        document.getElementById("eggImage").src = "style/gif/eggOpen.gif";
        document.getElementById("taskLeft").innerHTML = "CONGRATS, you are a rockstar <3 "
    } else {
        document.getElementById("taskLeft").innerHTML = "Keep up the good work, only " + (6 - getNumberOfCheckboxesChecked()) + " task left!";
    }
}