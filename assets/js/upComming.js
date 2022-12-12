const upcommingUrl = "https://api.jikan.moe/v4/top/anime?filter=upcoming";
const upcommingList = document.getElementById("Upcomming");

upcommingAnime(upcommingUrl, upcommingList);

async function upcommingAnime(url, upcommingList) {

    const reponse = await fetch(url);
    const date = await reponse.json();

    const animesTop = date.data.slice(0,8);

    animesTop.forEach((anime) => {

        const info = {
            title: anime.title,
            image: anime.images.jpg.small_image_url,
        };

        const template = `
                            <a href="#" class="list-group-item list-group-item-action d-flex">
                                <div class="d-flex align-items-center">
                                    <img src="${info.image}"  alt="">
                                </div>
                                <div class="pl-3">
                                    <p class="text-success mb-2">${info.title}</p>
                                </div>
                            </a>
                        `;

        upcommingList.innerHTML += template;

    })
}