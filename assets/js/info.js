const image = document.getElementById("imageBig");
const infoAnime = document.getElementById("infoAnime");

let urlA = window.location.href;
console.log(urlA);
let idA = urlA.split("=")[1];

urlID = `https://api.jikan.moe/v4/anime/${idA}`;

async function info(url,image,infoAnime) {

    const reponse = await fetch(url);
    const date = await reponse.json();

    const template = `  
                        <h1>${date.data.title}</h1>
                        <p>${date.data.synopsis}</p>
                        <div class="favori">
                            <span>Ajouter aux Favoris &nbsp;&nbsp; </span>
                            <i class="fa-solid fa-heart fav"></i>
                        </div>
                    `;

    infoAnime.innerHTML = template;

    const templateImg = `
                            <img src="${date.data.images.jpg.large_image_url}" alt="">
                        `;

    image.innerHTML = templateImg;

    const fav = document.querySelector(".favori");

    fav.addEventListener("click",() => {

        const date = {
            name: document.querySelector("h1").innerHTML,
            image: document.querySelector("img").src,
            id: idA
        };

        if(localStorage.getItem("favoris")){
            let savedDate = JSON.parse(localStorage.getItem("favoris"));

            savedDate = savedDate.filter((el) => el.name != date.name);
            savedDate.push(date);

            localStorage.setItem("favoris",JSON.stringify(savedDate));
            window.location.href = `favoris.html`;
        }
        else{
            const favoris = [];
            favoris.push(date);
            localStorage.setItem("favoris",JSON.stringify(favoris));
            window.location.href = `favoris.html`;
        }
    })
}

info(urlID,image, infoAnime);