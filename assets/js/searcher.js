const form = document.querySelector("form");

form.addEventListener("submit",(e)=>{

    e.preventDefault();
    const Recherche = document.querySelector("input").value;

    if(window.location.href.split("/").includes("templates")){
        window.location.href = `Recherche.html?value=${Recherche}`;
    }
    else{
        window.location.href = `templates/Recherche.html?value=${Recherche}`;
    }
})