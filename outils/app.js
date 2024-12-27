// client page:
const clientForm = document.querySelector("#clientForm");
function addClient(){
    clientForm.classList.remove("hidden");
}
function closeForm(){
    clientForm.classList.add("hidden");
}

//Cars page : 
const carForm = document.getElementById("carForm");
function addCars(){
    carForm.classList.remove("hidden");
}
function closeForm(){
    carForm.classList.add("hidden")
}

// contrat page:
const contratForm = document.getElementById("contratForm");
function addContrat(){
    contratForm.classList.remove("hidden");
}
function closeForm(){
    contratForm.classList.add("hidden");
}