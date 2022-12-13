const favo = document.getElementById("favoris");

if(localStorage.getItem("favoris")){

    let savedDate = JSON.parse(localStorage.getItem("favoris"));

    savedDate.forEach((fav) => {

        const template = `  
                            <div class="col mb-4">
                                <a href="infoanime.html?id=${fav.id}">
                                    <div class="card card-animation">
                                        <img src="${fav.image}" class="card-img-top" alt="${fav.name}">
                                        <div class="card-body">
                                            <h5 class="card-title">${fav.name}</h5>
                                        </div>
                                        
                                    </div>
                                </a>
                                <button class="del" id="${fav.id}">x</button>
                            </div>
                        `;

        favo.innerHTML += template;
       
        document.querySelectorAll(".del").forEach((el) => {

            el.addEventListener("click",(e)=>{

                let savedDate = JSON.parse(localStorage.getItem("favoris"));
                const deleted = savedDate.filter((fav) => fav.id != e.target.id);

                if(deleted.length != 0){
                    localStorage.setItem("favoris",JSON.stringify(deleted));
                }
                else{
                    localStorage.removeItem('favoris');
                }
               
                location.reload();

            })
        })
    })
}
else{
    document.querySelector("h1").innerHTML = "Vous n'avez pas encore d'animes préférés";
}