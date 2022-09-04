function samobrojevi() {
    var str = document.getElementById('tel').value;
    var novistr= str.slice(0, -1);
    var lastChar = str.charAt(str.length -1);
    var ascii = lastChar.charCodeAt(0);
switch(str.length){
case 1: 
if (ascii != 43 && (ascii < 48 || ascii > 57))
document.getElementById('tel').value =  "";
break;
default:
if (ascii > 27 && (ascii < 48 || ascii > 57))
document.getElementById('tel').value = novistr;
break;  
}
}
function samoslovaime() {
    var str = document.getElementById('ime').value;
    var novistr= str.slice(0, -1);
    var lastChar = str.charAt(str.length -1);
    var ascii = lastChar.charCodeAt(0);
if (!(ascii > 64 && ascii < 91) && !(ascii > 96 && ascii < 123))
document.getElementById('ime').value = novistr;
}
function samoslovaprezime() {
    var str = document.getElementById('prezime').value;
    var novistr= str.slice(0, -1);
    var lastChar = str.charAt(str.length -1);
    var ascii = lastChar.charCodeAt(0);
if (!(ascii > 64 && ascii < 91) && !(ascii > 96 && ascii < 123))
document.getElementById('prezime').value = novistr;
}
