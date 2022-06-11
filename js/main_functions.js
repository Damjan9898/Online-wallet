

let date = new Date();
let month = date.toLocaleString('default', { month: 'long' });
let year = date.getFullYear();

document.getElementById("prikaz_mes").innerHTML = month;

document.getElementById("prikaz_god").innerHTML = year;

document.getElementsByClassName("prikaz_income")[0].style.display = "block";
document.getElementsByClassName("prikaz_expense")[0].style.display = "none";


function prikazIncome(){
    document.getElementsByClassName("prikaz_income")[0].style.display = "block";
    document.getElementsByClassName("prikaz_expense")[0].style.display = "none";
}

function prikazExpense(){
    document.getElementsByClassName("prikaz_income")[0].style.display = "none";
    document.getElementsByClassName("prikaz_expense")[0].style.display = "block";
}