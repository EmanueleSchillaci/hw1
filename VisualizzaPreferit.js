

fetch("RitornaPreferiti.php").then(onResponse).then(onJson);

function onResponse(response){
    return response.json();
}

function onJson(json){
    console.log(json);
    const giochi_preferiti=document.querySelector('#giochi_preferiti');
    giochi_preferiti.innerHTML="";
    

    for(let result of json){
        const Container=document.createElement('div');
        const title=document.createElement('h1');
        const image=document.createElement('img');
        const bottone=document.createElement("button");
        const sfondo=document.createElement("div");
        
        bottone.textContent="Rimuovi dai preferiti";
        bottone.classList.add("preferiti");
        bottone.addEventListener("click",rimuoviPreferiti);

        image.src=result.image;
        title.textContent=result.titolo;

        image.classList.add("immagine_copertina");
        title.classList.add("titolo_gioco");
        sfondo.classList.add("sfondo");
        Container.classList.add("container");

        Container.appendChild(sfondo);
        Container.appendChild(title);
        Container.appendChild(image);
        Container.appendChild(bottone);
        giochi_preferiti.appendChild(Container);
    }
    
}

function rimuoviPreferiti(event){

    const titolo=event.currentTarget.parentNode.querySelector("h1");
    fetch("rimuoviPreferiti.php?title="+encodeURIComponent(titolo.textContent)).then(onResponse).then(json); 

}

function onResponse(response){
    return response.json();
}

function json(json){
    fetch("RitornaPreferiti.php").then(onResponse).then(onJson);
    
}