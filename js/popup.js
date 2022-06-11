document.getElementById("transakcija_main").addEventListener("click", () => {
    document.getElementsByClassName("popup")[0].style.display = "block";
})

document.getElementsByClassName("popup")[0].addEventListener("click", () => {
    document.getElementsByClassName("popup")[0].style.display = "none";
})