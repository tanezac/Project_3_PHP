function noStyles() {
    document.styleSheets[0].disabled = true;
    document.styleSheets[1].disabled = true;
    document.styleSheets[2].disabled = true;
    document.styleSheets[3].disabled = true;
}

function reStyle(n) {
    noStyles();
    document.styleSheets[n].disabled = false;
}

function closeBlackdiv() {
    var blackdiv, stylediv;
    blackdiv = document.getElementById("blackdiv");
    blackdiv.parentNode.removeChild(blackdiv);
    stylediv = document.getElementById("stylediv");
    stylediv.parentNode.removeChild(stylediv);
}

function showStyle(n) {
    var div, text, blackdiv;
    blackdiv = document.createElement("DIV");
    blackdiv.setAttribute("style","background-color:#000000;position:absolute;width:100%;height:100%;top:0;opacity:0.5;margin-left:-20px;");
    blackdiv.setAttribute("id","blackdiv");
    blackdiv.setAttribute("onclick","closeBlackdiv()");
    document.body.appendChild(blackdiv);
    div = document.createElement("DIV");
    div.setAttribute("id","stylediv");
    div.setAttribute("style","background-color:#ffffff;padding-left:5px;position:absolute;width:auto;height:auto;top:100px;bottom:50px;left:200px;right:200px;overflow:auto;font-family: monospace; white-space: pre;line-height:16px;");
    text = document.createTextNode(document.getElementsByTagName("STYLE")[n].innerHTML);
    div.appendChild(text);
    document.body.appendChild(div);
    //alert(document.getElementsByTagName("STYLE")[n].innerHTML);
}
reStyle(0);
function myFunction() {

    var x = document.getElementById("demo");

    if (x.className.indexOf("w3-show") == -1) {

        x.className += " w3-show";

    } else {

        x.className = x.className.replace(" w3-show", "");

    }
}


window.addEventListener("load", function(){
    var delay = 2;
    var nodes = document.querySelectorAll
    (".animate");
    for(var i=0; i<nodes.length; i++){
        var words = nodes[i].innerText.split(" ");
        nodes[i].innerHTML = "";
        for(var i2=0; i2<words.length; i2++){
            var item = document.createElement("span");
            item.innerText = words[i2];
            var calc = (delay+((nodes.length + i2)/3));
            item.style.animationDelay = calc+"s";
            nodes[i].appendChild(item);
        }
    }
});