const favolist = document.getElementById("favolist");


if(localStorage.getItem("favoris")){

    let savedDate = JSON.parse(localStorage.getItem("favoris"));

    savedDate.forEach((fav) => {

        const template = `  
                            <a href="infoanime.html?id=${fav.id}" class="list-group-item list-group-item-action d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="${fav.image}"  alt="Image" height="80" width="50">
                                </div>
                                <div class="pl-3">
                                    <p class="text-success mb-2">${fav.name}</p>
                                </div>
                            </a>
                        `;
        favolist.innerHTML += template;
       
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