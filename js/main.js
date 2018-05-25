function main() {

    document.getElementById("click").addEventListener("click", ajaxrequest);
    addCom();

}


function ajaxrequest() {

    var xhr2 = new XMLHttpRequest();

    //xhr2.addEventListener("load", responseReceived);

    xhr2.open('GET', 'addComment.php?=comment' + comment + '&user=' + currUser);


    xhr2.send();

}

function addCom() {
    var xhr2 = new XMLHttpRequest();

    xhr2.addEventListener("load", responseReceived);

    xhr2.open('GET', 'showComment.php');

    xhr2.send();

}

function responseReceived() {
    document.getElementById("showComments").innerHTML = target.responseText;
}