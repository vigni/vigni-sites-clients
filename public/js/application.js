const clientsButton = document.getElementById("button-clients");
const sitesButton = document.getElementById("button-sites");

function activeSiteButton() {
    console.log("site")
    sitesButton.classList.add("active");
    clientsButton.classList.remove("active");
}

function activeClientButton()  {
    console.log("client")
    sitesButton.classList.remove("active");
    clientsButton.classList.add("active");
}