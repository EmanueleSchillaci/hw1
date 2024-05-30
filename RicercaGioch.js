console.log("ciao mondo");

console.log("Script loaded");


function onResponse(response) {
    console.log(response);
    return response.json();
  }

  function generateRandomIndexes(max, count) {
    const indexes = [];
    while (indexes.length < count) {
      const randomIndex = Math.floor(Math.random() * max);
      if (!indexes.includes(randomIndex)) {
        indexes.push(randomIndex);
      }
    }
    return indexes;
  }
  

  
  function onjson(json) {
    console.log(json);
    const elenco_giochi = document.querySelector('#pers');
    elenco_giochi.innerHTML = "";
  
    // Genera un array casuale di 9 indici univoci
    const randomIndexes = generateRandomIndexes(json.length, 8);
  
    // Mostra solo i giochi con gli indici casuali generati
    for (let index of randomIndexes) {

      const gamePassGames = json[index];
      const container = document.createElement('div');
      const containerTesto = document.createElement('div');
      
      const sfondo = document.createElement('div');
      const image = document.createElement('img');
      const title = document.createElement('h1');
      const link_store = document.createElement('a');
      const developer = document.createElement('h1');
      const releaseDate = document.createElement('h1');
      const genre = document.createElement('h1');

      image.classList.add("immagine_copertina");
      title.classList.add("titolo_gioco");
      link_store.classList.add("link");
      developer.classList.add("developer");
      releaseDate.classList.add("releaseDate");
      genre.classList.add("genre");
      container.classList.add("container");
      sfondo.classList.add("sfondo");

      containerTesto.classList.add("containerTesto");


  
      title.textContent = gamePassGames.title;
      image.src = gamePassGames.image;
      developer.textContent = gamePassGames.developer;
      releaseDate.textContent = gamePassGames.release_date;
      link_store.textContent = "link per store ufficiale";
      link_store.href = gamePassGames.link_store;
      genre.textContent = gamePassGames.genre;
  
      container.appendChild(title);
      container.appendChild(genre);
      container.appendChild(image);
      container.appendChild(sfondo);
      containerTesto.appendChild(developer);
      containerTesto.appendChild(releaseDate);
      containerTesto.appendChild(link_store);
      container.appendChild(containerTesto);
  
      const preferiti = document.createElement("button");
      preferiti.classList.add("preferiti");
  
      if (gamePassGames.preferiti == true) {
        preferiti.textContent = "Rimuovi dai preferiti";
        preferiti.addEventListener('click', rimuoviPreferiti);
  
      } else {
        preferiti.textContent = "Aggiungi ai preferiti";
        preferiti.addEventListener('click', aggiungiPreferiti);
      }
  
      container.appendChild(preferiti);
  
      elenco_giochi.appendChild(container);
    }

  };
  


  fetch("ApiPreferitiPhp.php")
    .then(onResponse)
    .then(onjson)
    .catch(error => {
        console.error('Error:', error);
    });



    const btnRicerca = document.getElementById("btn-ricerca");
    const barraRicerca = document.getElementById("barra-ricerca");
    const risultatiDiv = document.getElementById("risultati");
    
    btnRicerca.addEventListener("click", function() {
      const searchTerm = barraRicerca.value;
      searchItem(searchTerm);
    });
    
    function onResponse(response) {
      console.log(response);
      return response.json();
    }
    
    function searchItem(searchTerm) {
      risultatiDiv.innerHTML = "";
    
      if (searchTerm.trim() === "") {
        const noCerca = document.createElement("p");
        noCerca.setAttribute("id", "nessun_risultato");
        noCerca.textContent = "Cerca un gioco";
        risultatiDiv.appendChild(noCerca);
        return;
      }
    
      fetch("ApiPreferitiPhp.php")
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          const results = data.filter(function(item) {
            return (
              item.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
              item.genre.toLowerCase().includes(searchTerm.toLowerCase()) ||
              item.developer.toLowerCase().includes(searchTerm.toLowerCase())
            );
          });
    
          if (results.length > 0) {
            for (let i = 0; i < results.length; i++) {
              const gamePassGames = results[i];
    
              const itemDiv = document.createElement("div");
              itemDiv.classList.add("risultati");
    
              const container = document.createElement('div');
              const containerTesto = document.createElement('div');
    
              const sfondo = document.createElement('div');
              const image = document.createElement('img');
              const title = document.createElement('h1');
              const link_store = document.createElement('a');
              const developer = document.createElement('h1');
              const releaseDate = document.createElement('h1');
              const genre = document.createElement('h1');
          
              title.textContent = gamePassGames.title;
              image.src = gamePassGames.image;
              developer.textContent = gamePassGames.developer;
              releaseDate.textContent = gamePassGames.release_date;
              link_store.textContent = "link per store ufficiale";
              link_store.href = gamePassGames.link_store;
              genre.textContent = gamePassGames.genre;
          
              image.classList.add("immagine_copertina");
              title.classList.add("titolo_gioco");
              link_store.classList.add("link");
              developer.classList.add("developer");
              releaseDate.classList.add("releaseDate");
              genre.classList.add("genre");
              container.classList.add("container");
              sfondo.classList.add("sfondo");
        
              containerTesto.classList.add("containerTesto");

              container.appendChild(title);
              container.appendChild(genre);
              container.appendChild(image);
              container.appendChild(sfondo);
              containerTesto.appendChild(developer);
              containerTesto.appendChild(releaseDate);
              containerTesto.appendChild(link_store);
              container.appendChild(containerTesto);
    
              
        const preferiti = document.createElement("button");
        preferiti.classList.add("preferiti");
    
        if (gamePassGames.preferiti == true) {
          preferiti.textContent = "Rimuovi dai preferiti";
          preferiti.addEventListener('click', rimuoviPreferiti);
    
        } else {
          preferiti.textContent = "Aggiungi ai preferiti";
          preferiti.addEventListener('click', aggiungiPreferiti);
        }
    
        container.appendChild(preferiti);
    
    
              
          
              risultatiDiv.appendChild(container);
            }
          } else {
            const noResultsElement = document.createElement("p");
            noResultsElement.setAttribute("id", "nessun_risultato");
            noResultsElement.textContent = "Nessun risultato trovato.";
            risultatiDiv.appendChild(noResultsElement);
          }
        })
        .catch(function(error) {
          console.log("Si è verificato un errore nella fetch del Final_fantasy.json:", error);
        });
    }

