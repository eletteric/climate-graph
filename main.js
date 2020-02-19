let graphMax = document.getElementById('maxTemp');

function executeFunction() {
    graphMax.beginElement();
}

var thePath = document.querySelector('polyline');

var nmbrRows = document.getElementById("tempTable").rows.length-1; 
console.log(nmbrRows);

var year = document.getElementsByClassName("year");
var jan = document.getElementsByClassName("january");
var feb = document.getElementsByClassName("february");
var mar = document.getElementsByClassName("march");
var apr = document.getElementsByClassName("april");
var may = document.getElementsByClassName("may");
var jun = document.getElementsByClassName("june");
var jul = document.getElementsByClassName("july");
var aug = document.getElementsByClassName("august");
var sep = document.getElementsByClassName("september");
var oct = document.getElementsByClassName("october");
var nov = document.getElementsByClassName("november");
var dec = document.getElementsByClassName("december");

var temps = [];
// make a fresh array with nmbr of rows
for (let i = 0; i < nmbrRows; i++) {
   temps[i] = [
   				year[i].innerText,
   				jan[i].innerText,
   				feb[i].innerText,
   				mar[i].innerText,
   				apr[i].innerText,
   				may[i].innerText,
   				jun[i].innerText,
   				jul[i].innerText,
   				aug[i].innerText,
   				sep[i].innerText,
   				oct[i].innerText,
   				nov[i].innerText,
   				dec[i].innerText
   				]
}

var currentYear = 0;

function getTheValues() {

if(currentYear>=nmbrRows){currentYear=0}

	thePath.setAttribute("points", "0,"
					+parseInt(temps[currentYear][1])*-1+" 10,"
					+parseInt(temps[currentYear][2])*-1+" 20,"
					+parseInt(temps[currentYear][3])*-1+" 30,"
					+parseInt(temps[currentYear][4])*-1+" 40,"
					+parseInt(temps[currentYear][5])*-1+" 50,"
					+parseInt(temps[currentYear][6])*-1+" 60,"
					+parseInt(temps[currentYear][7])*-1+" 70,"
					+parseInt(temps[currentYear][8])*-1+" 80,"
					+parseInt(temps[currentYear][9])*-1+" 90,"
					+parseInt(temps[currentYear][10])*-1+" 100,"
					+parseInt(temps[currentYear][11])*-1+" 110,"
					+parseInt(temps[currentYear][12])*-1);
					// last number is integer, so no need for quotes

	if(currentYear<nmbrRows){currentYear++}

}







