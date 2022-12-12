const urlChapitre = "https://api.jikan.moe/v4/watch/episodes";
const chapitre = document.getElementById("chapitre");

async function episodes(url, grid) {

    const reponse = await fetch(url);
    const dateEp = await reponse.json();
    const episodes = dateEp.data;

    episodes.forEach((episode,index) =>{

        if(index < 20){

            const info = {
                image: episode.entry.images.jpg.image_url,
                titre: episode.entry.title,
                episodes: episode.episodes[0].mal_id
            };
    
            const template = `
                                <div class="col mb-4">
                                    <div class="card">
                                    <img src="${info.image}" class="card-img-top img-card-chapitre" alt="${info.titre}">
                                    <div class="card-body">
                                        <h3 class="numEpisode rounded-pill mt-2">episode ${info.episodes}</h3>
                                        <h5 class="card-title">${info.titre}</h5>
                                    </div>
                                    </div>
                                </div>
                            `;
    
            grid.innerHTML += template;

        }
    })
}

episodes(urlChapitre, chapitre);