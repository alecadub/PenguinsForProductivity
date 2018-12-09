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

function printCheckboxes() {
    for (let i = 0; i < 6; i++) {
        document.write("<div class=\"input-group mb-3\">\n" +
            "                        <div class=\"input-group-prepend\">\n" +
            "                            <div class=\"input-group-text\">\n" +
            "                                <input type=\"checkbox\" name='task' a-label=\"Checkbox for following text input\">\n" +
            "                            </div>\n" +
            "                        </div>\n" +
            "                        <input type=\"text\" class=\"form-control\" aria-label=\"Text input with checkbox\">\n" +
            "                    </div>" + "<br>");
    }
}