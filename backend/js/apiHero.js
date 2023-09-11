const marvel = {
    render: () => {
        
      //use apikey
      const urlAPI = 'https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=c23f2cb6aafbe01db12c3eaa08636adb&hash=da1a0743c22ae13c4cce1ca67a4af423';
      const container = document.querySelector('#marvel-row'); //where the data upload
      let contentHTML = '';
      fetch(urlAPI)
        .then(res => res.json())
        .then((json) => {
          //list the data
            for (const hero of json.data.results) {
                let urlHero = hero.urls[0].url;
                contentHTML += `
                <div id = card class="card">
                    <div class="col-md-4">
                            <img src="${hero.thumbnail.path}.${hero.thumbnail.extension}" alt="${hero.name}" class="imgCard">
                            <h3 id = "name" class="name" name = "nombre">${hero.name}</h3>
                            <button id ="inactivate" class="inactivate" type="button" name="btnInactivate">Inactivate👍</button>
                            
                    </div>
                  </div>`;
              }
              container.innerHTML = contentHTML;
        })
    }
  };
  marvel.render();//run
