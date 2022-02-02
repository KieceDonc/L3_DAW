function changeBackground() {
    let colour = document.getElementsByName("couleur")[0].value
    document.querySelectorAll("fieldset").forEach((element)=>{
        element.style.backgroundColor = colour
    })
}

function calculerSubvention(){
    document.getElementsByName("subventionmax")[0].value = 
    document.getElementsByName("nbmembres")[0].value*3
}