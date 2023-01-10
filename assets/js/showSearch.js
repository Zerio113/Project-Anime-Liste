let urlA = window.location.href;
let idA = urlA.split("=")[1];
const grid = document.getElementById("Recherche");

const urlRecherche = `https://api.jikan.moe/v4/anime?q=${idA}&order_by=popularity`;

Recherche(urlRecherche, grid);

async function Recherche(url, Recherche){

    const reponse = await fetch(url);
    const date = await reponse.json();

    const results = date.data;

    results.forEach((result) => {

        const info = {
            image: result.images.jpg.image_url,
            title: result.title,
            id: result.mal_id,
            genres: result.genres

        };
        const genres = info.genres.map((genre) => genre.name).join(" ");
    
        const template = `
                            <div class="col mb-4" data-category="${genres}">
                                <a href="infoanime.html?id=${info.id}">
                                    <div class="card card-animation">
                                    <img src="${info.image}" class="card-img-top" alt="${info.title}">
                                    <div class="card-body">
                                        <h5 class="card-title">${info.title}</h5>
                                    </div>
                                    </div>
                                </a>
                            </div>
                        `;
        
        Recherche.innerHTML += template;

    })
}