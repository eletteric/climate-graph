let graphMax = document.getElementById('maxTemp');


function executeFunction() {
    graphMax.beginElement();
}

// // returns array
// let thePath = document.querySelector('polyline');

// function changeRange() {
//     let bezierLeft = document.getElementById('bezierLeft');
//     let bLVal = bezierLeft.value;
//     console.log(bLVal);

//     // let bezierRight = document.getElementById('bezierRight');
//     // let bRVal = bezierRight.value;
//     // console.log(bRVal);
//     thePath.setAttribute("d", "M0,320 C" + (bLVal * 2) + "," + bLVal + " " + (bLVal * 2) + "," + bLVal + " 320,320");
// }

var tempTable = document.getElementById("tempTable").rows.length;
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


function getTheValues() {
    console.log(jan[0]);
}


let Coordinates = {};

while ()

    for (i = 1; i <= tempTable; i++) {
        let coordinates = {
            year: year[i],
            january: jan[i],
            february: feb[i],
            march: mar[i],
            april: apr[i],
            may: may[i],
            june: jun[i],
            july: jul[i],
            august: aug[i],
            september: sep[i],
            october: oct[i],
            november: nov[i],
            december: dec[i]
        }
        return coordinates.year[0];
    }