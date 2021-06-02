var test = 1;
var test2 = 2;
console.log(test + test2);


var sData = document.location.search.substring(1);
var sPos = sData.indexOf( "url=" ) + 4;
var ePos = sData.indexOf( "&" , sPos);
var newURL;
if (ePos< 0) {
newURL = sData.substring(sPos);
} else {
newURL = sData.substring(sPos, ePos);
}
window.location.href = newURL;
