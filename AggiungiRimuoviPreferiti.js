function rimuoviPreferiti(event){
    const bottone=event.currentTarget;
    bottone.classList.add("buttonCurrent");
    const title=event.currentTarget.parentNode.querySelector("h1");

    fetch("rimuoviPreferiti.php?title="+encodeURIComponent(title.textContent)).then(onResponsePref).then(onJsonRim);
}

function aggiungiPreferiti(event){
    const bottone=event.currentTarget;
    bottone.classList.add("buttonCurrent");
    const img=event.currentTarget.parentNode.querySelector("img");
    const title=event.currentTarget.parentNode.querySelector("h1");
    fetch("aggiungiPreferiti.php?image="+encodeURIComponent(img.src)+"&title="+encodeURIComponent(title.textContent)).then(onResponsePref).then(onJsonAgg);
}

function onResponsePref(response){
    return response.json();
}

function onJsonAgg(json){
    
    if(json.aggiunto===true){
        console.log(json);
        const bottone=document.querySelector(".buttonCurrent");
        bottone.textContent="Rimuovi preferiti";
        bottone.removeEventListener("click",aggiungiPreferiti);
        bottone.addEventListener("click",rimuoviPreferiti);
        bottone.classList.remove("buttonCurrent");
    }
}

function onJsonRim(json){
    
    if(json.rimosso===true){
        console.log(json);
        const bottone=document.querySelector(".buttonCurrent");
        bottone.textContent="Aggiungi preferiti";
        bottone.removeEventListener("click",rimuoviPreferiti);
        bottone.addEventListener("click",aggiungiPreferiti);
        bottone.classList.remove("buttonCurrent");
    }
}