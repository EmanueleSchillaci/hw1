function onJson2(json) {
  console.log("info profilo ricevute");
  console.log(json);
  const info = json[0];
  const UsernameData = info.Username;
  const VeroNomeData = info.VeroNome;
  const EmailData = info.email;
  const UserIDData = info.userID;
  // const PasswordData = info.Password;


  const Container = document.createElement("div");
  const Sezione = document.getElementById("Info-Profilo");

  const Username = document.createElement("h2");
  const VeroNome = document.createElement("h2");
  const Email = document.createElement("h2");
  const UserID = document.createElement("h2");
 // const Password = document.createElement("h1");

  Username.textContent = "Username:  " + UsernameData;
  VeroNome.textContent = "Identita:  " + VeroNomeData;
  Email.textContent = "Email:  " + EmailData;
  UserID.textContent = "ID:  " +UserIDData;
  // Password.textContent = PasswordData;

  Container.appendChild(Username);
  Container.appendChild(VeroNome);
  Container.appendChild(Email);
  Container.appendChild(UserID);
  // Container.appendChild(Password);
  Sezione.appendChild(Container);

  // Password.classList.add("Password");
  Container.classList.add("Container");

}



function onResponse2(response) {
  console.log('Risposta ricevuta');
  return response.json();
}



fetch("RitornaInfoProfilo.php")
.then(onResponse2)
.then(onJson2)
.catch(error => {
    console.error('Error:', error);
});








// SPOTIFY

function onJson1(json) {
  console.log('Credenziali Ricevute');
  
  const Client_ID = json[0].ClientID ;
  const Client_secret = json[0].ClientSecret;
  
 
  // All'apertura della pagina, richiediamo il token
  fetch("https://accounts.spotify.com/api/token",
  {
 method: "post",
 body: 'grant_type=client_credentials',
 headers:
 {
  'Content-Type': 'application/x-www-form-urlencoded',
  'Authorization': 'Basic ' + btoa(Client_ID + ':' + Client_secret)
 }
}
).then(onTokenResponse).then(onTokenJson); 
}

function onResponse1(response) {
  console.log('Risposta ricevuta');
  return response.json();
}


fetch("RitornaCredenziali.php")
.then(onResponse1)
.then(onJson1)
.catch(error => {
    console.error('Error:', error);
});
 
 function onJson(json) {
    console.log('JSON ricevuto');
    
    // Svuotiamo la libreria
    const library = document.querySelector('#container-risultati');
    library.innerHTML = '';
    // Leggi il numero di risultati
    const results = json.albums.items;
    let num_results = results.length;
    // Mostriamone al massimo 8
    if(num_results > 8)
      num_results = 8;
    // Processa ciascun risultato
    for(let i=0; i<num_results; i++)
    {
      // Leggi il documento
      const album_data = results[i]
      // Leggiamo info
      const title = album_data.name;
      const selected_image = album_data.images[0].url;
      // Creiamo il div che conterrà immagine e didascalia
      const album = document.createElement('div');
      album.classList.add('album');
      // Creiamo l'immagine
      const img = document.createElement('img');
      img.src = selected_image;
      // Creiamo la didascalia
      const caption = document.createElement('span');
      caption.textContent = title;
      // Aggiungiamo immagine e didascalia al div
      album.appendChild(img);
      album.appendChild(caption);
      // Aggiungiamo il div alla libreria
      library.appendChild(album);
    } 
  }

 function onResponse(response) {
    console.log('Risposta ricevuta');
    return response.json();
  }

 function Ricerca(event)
{
  // Impedisci il submit del form
  console.log("siamo qui");
  event.preventDefault();
  // Leggi valore del campo di testo
  const album_input = document.querySelector('#barra-scrittura');
  const album_value = encodeURIComponent(album_input.value);
  console.log('Eseguo ricerca: ' + album_value);
  // Esegui la richiesta
  fetch("https://api.spotify.com/v1/search?type=album&q=" + album_value,
    {
      headers:
      {
        'Authorization': 'Bearer ' + token
      }
    }
  ).then(onResponse).then(onJson);
}

function onTokenJson(json)
{
  // Imposta il token global
  console.log("token ricevuto");
  token = json.access_token;
}

function onTokenResponse(response)
{
  return response.json();
}

let token;


const bottoneRicerca = document.getElementById("barra-ricerca");
bottoneRicerca.addEventListener('submit', Ricerca);




