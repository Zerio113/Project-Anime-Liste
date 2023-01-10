const urlTop = "https://api.jikan.moe/v4/top/anime";
const listTop = document.getElementById("animesTop");

topAnime(urlTop, listTop);

async function topAnime(url, listTop){

    const reponse = await fetch(url);
    const date = await reponse.json();

    const animesTop = date.data.slice(0,5);

    animesTop.forEach((anime) => {

        const info = {
            title: anime.title,
            image: anime.images.jpg.small_image_url,
            score: anime.score,
            id: anime.mal_id
        };

        const template = `
                            <a href="infoanime.html?id=${info.id}" class="list-group-item list-group-item-action d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="${info.image}"  alt="">
                                </div>
                                <div class="pl-3">
                                    <p class="text-success mb-2">${info.title}</p>
                                    <p class="m-0">Score: ${info.score}</p>
                                </div>
                            </a>
                        `;

        listTop.innerHTML += template;

    })
}