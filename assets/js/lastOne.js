const urlLastOne = "https://api.jikan.moe/v4/seasons/now"
const LastOne = document.getElementById("LastOneAnimes")

LastOneAnimes(urlLastOne, LastOne);

async function LastOneAnimes(url, LastOne){

    const reponse = await fetch(url);
    const date = await reponse.json();

    const LastOneA = date.data;

    LastOneA.forEach((anime,index) =>{
        if(index < 20){
           
            const info = {
                image: anime.images.jpg.image_url,
                title: anime.title,
                id: anime.mal_id
            };
    
            const template = `
                                <div class="col mb-4">
                                    <a href="templates/infoanime.html?id=${info.id}">
                                        <div class="card card-animation">
                                        <img src="${info.image}" class="card-img-top" alt="${info.title}">
                                        <div class="card-body">
                                            <h5 class="card-title">${info.title}</h5>
                                        </div>
                                        </div>
                                    </a>
                                </div>
                            `;
            
            LastOne.innerHTML += template;

        }
    })
}