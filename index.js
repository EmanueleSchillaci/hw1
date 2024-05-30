const leggi1 = document.getElementById("leggi-piu1");
const leggi2 = document.getElementById("leggi-piu2");
const leggi3 = document.getElementById("leggi-piu3");
const leggi4 = document.getElementById("leggi-piu4"); 

const testo1 = document.getElementById("testo-piu-1");
const testo2 = document.getElementById("testo-piu-2");
const testo3 = document.getElementById("testo-piu-3");
const testo4 = document.getElementById("testo-piu-4"); 


const biblocco1 = document.getElementById("biblocco-a-4-1");
const biblocco2 = document.getElementById("biblocco-a-4-2");

const blocco1 = document.getElementById("blocco-a-4-1");
const blocco2 = document.getElementById("blocco-a-4-2");
const blocco3 = document.getElementById("blocco-a-4-3");
const blocco4 = document.getElementById("blocco-a-4-4");

const parteScritta1 = document.getElementById("parte-scritta-1");
const parteScritta2 = document.getElementById("parte-scritta-2");
const parteScritta3 = document.getElementById("parte-scritta-3");
const parteScritta4 = document.getElementById("parte-scritta-4");

leggi1.addEventListener("click" , leggi_piu1);

leggi2.addEventListener("click", leggi_piu2);
leggi3.addEventListener("click" , leggi_piu3);
leggi4.addEventListener("click", leggi_piu4);

var statoBib1 = 0;
var statoBib2 = 0;

var stato1 = 0;
var stato2 = 0;
var stato3 = 0;
var stato4 = 0;

function leggi_piu1 (event) {
    if (stato1 === 0) {
    testo1.classList.remove("testo-piu-hidden");
    testo1.classList.add("testo-piu-show");

    blocco1.classList.remove("blocco-a-4");
    blocco1.classList.add("blocco-a-4-leggi-piu");

    parteScritta1.classList.remove("parte-scritta-new-base");
    parteScritta1.classList.add("parte-scritta-new-show");

    leggi1.textContent = "leggi meno";
    stato1 = 1;

    } else {
        testo1.classList.remove("testo-piu-show");
        testo1.classList.add("testo-piu-hidden");

        blocco1.classList.remove("blocco-a-4-leggi-piu");
        blocco1.classList.add("blocco-a-4");

        parteScritta1.classList.remove("parte-scritta-new-show");
        parteScritta1.classList.add("parte-scritta-new-base");

        leggi1.textContent = "leggi di più";
        stato1 = 0;

    }

    if (stato1 === 1 || stato2 === 1) {
        biblocco1.classList.remove("biblocco-a-4");
        biblocco1.classList.add("biblocco-a-4-leggi-piu");
    }

    if (stato1 === 0 && stato2 === 0) {
        biblocco1.classList.remove("biblocco-a-4-leggi-piu");
        biblocco1.classList.add("biblocco-a-4");
    }
    
}

function leggi_piu2 (event) {
    if (stato2 === 0) {
    testo2.classList.remove("testo-piu-hidden");
    testo2.classList.add("testo-piu-show");

    blocco2.classList.remove("blocco-a-4");
    blocco2.classList.add("blocco-a-4-leggi-piu");

    parteScritta2.classList.remove("parte-scritta-new-base");
    parteScritta2.classList.add("parte-scritta-new-show");

    leggi2.textContent = "leggi meno";
    stato2 = 1;

    } else {
        testo2.classList.remove("testo-piu-show");
        testo2.classList.add("testo-piu-hidden");

        blocco2.classList.remove("blocco-a-4-leggi-piu");
        blocco2.classList.add("blocco-a-4");

        parteScritta2.classList.remove("parte-scritta-new-show");
        parteScritta2.classList.add("parte-scritta-new-base");

        leggi2.textContent = "leggi di più";
        stato2 = 0;

    }

    if (stato1 === 1 || stato2 === 1) {
        biblocco1.classList.remove("biblocco-a-4");
        biblocco1.classList.add("biblocco-a-4-leggi-piu");
    }

    if (stato1 === 0 && stato2 === 0) {
        biblocco1.classList.remove("biblocco-a-4-leggi-piu");
        biblocco1.classList.add("biblocco-a-4");
    }
    
}

function leggi_piu3 (event) {
    if (stato3 === 0) {
    testo3.classList.remove("testo-piu-hidden");
    testo3.classList.add("testo-piu-show");

    blocco3.classList.remove("blocco-a-4");
    blocco3.classList.add("blocco-a-4-leggi-piu");

    parteScritta3.classList.remove("parte-scritta-new-base");
    parteScritta3.classList.add("parte-scritta-new-show");

    leggi3.textContent = "leggi meno";
    stato3 = 1;

    } else {
        testo3.classList.remove("testo-piu-show");
        testo3.classList.add("testo-piu-hidden");

        blocco3.classList.remove("blocco-a-4-leggi-piu");
        blocco3.classList.add("blocco-a-4");

        parteScritta3.classList.remove("parte-scritta-new-show");
        parteScritta3.classList.add("parte-scritta-new-base");

        leggi3.textContent = "leggi di più";
        stato3 = 0;


    }
    if (stato3 === 1 || stato4 === 1) {
        biblocco2.classList.remove("biblocco-a-4");
        biblocco2.classList.add("biblocco-a-4-leggi-piu");
    }

    if (stato3 === 0 && stato4 === 0) {
        biblocco2.classList.remove("biblocco-a-4-leggi-piu");
        biblocco2.classList.add("biblocco-a-4");
    }
}

function leggi_piu4 (event) {
    if (stato4 === 0) {
    testo4.classList.remove("testo-piu-hidden");
    testo4.classList.add("testo-piu-show");

    blocco4.classList.remove("blocco-a-4");
    blocco4.classList.add("blocco-a-4-leggi-piu");

    parteScritta4.classList.remove("parte-scritta-new-base");
    parteScritta4.classList.add("parte-scritta-new-show");

    leggi4.textContent = "leggi meno";
    stato4 = 1;

    } else {
        testo4.classList.remove("testo-piu-show");
        testo4.classList.add("testo-piu-hidden");

        blocco4.classList.remove("blocco-a-4-leggi-piu");
        blocco4.classList.add("blocco-a-4");

        parteScritta4.classList.remove("parte-scritta-new-show");
        parteScritta4.classList.add("parte-scritta-new-base");

        leggi4.textContent = "leggi di più";
        stato4 = 0;

    }

    if (stato3 === 1 || stato4 === 1) {
        biblocco2.classList.remove("biblocco-a-4");
        biblocco2.classList.add("biblocco-a-4-leggi-piu");
    }

    if (stato3 === 0 && stato4 === 0) {
        biblocco2.classList.remove("biblocco-a-4-leggi-piu");
        biblocco2.classList.add("biblocco-a-4");
    }
    


    
}

const logo = document.getElementById("logo-benvenuto");
var LogoStato = 0;

logo.addEventListener("click", cambioLogo);

function cambioLogo(event) {
    if (LogoStato === 0) {
        event.currentTarget.src = "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/6278c658-59f1-4319-ac90-e48cf9f8f1c1/d8sruud-04312d46-8b78-409d-ac90-cd1034a0521d.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzYyNzhjNjU4LTU5ZjEtNDMxOS1hYzkwLWU0OGNmOWY4ZjFjMVwvZDhzcnV1ZC0wNDMxMmQ0Ni04Yjc4LTQwOWQtYWM5MC1jZDEwMzRhMDUyMWQuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.dM2UwD7Z6MCmvsXtvVMrSGBE-wuYJhxsYuuvwK6rHi0";
        LogoStato = 1;
        event.currentTarget.classList.remove("logo-benvenuto-img");
        event.currentTarget.classList.add("logo-benvenuto-gif");

    }
    else {
        event.currentTarget.src = "https://assets.account.microsoft.com/signedout/compassassets/9e4ea4f6-307f-412f-886c-3bd290f54b40.jpg?n=Microsoft%20Logo.jpg";
        LogoStato = 0;
        event.currentTarget.classList.remove("logo-benvenuto-gif");
        event.currentTarget.classList.add("logo-benvenuto-img");
    }
}


const logo2 = document.getElementById("logo-finale");
var Logo2Stato = 0;

const margineLogoF = document.getElementById("logo-finaleM")

logo2.addEventListener("click", cambioLogo);

function cambioLogo(event) {
    if (Logo2Stato === 0) {
        event.currentTarget.src = "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/6278c658-59f1-4319-ac90-e48cf9f8f1c1/d8sruud-04312d46-8b78-409d-ac90-cd1034a0521d.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzYyNzhjNjU4LTU5ZjEtNDMxOS1hYzkwLWU0OGNmOWY4ZjFjMVwvZDhzcnV1ZC0wNDMxMmQ0Ni04Yjc4LTQwOWQtYWM5MC1jZDEwMzRhMDUyMWQuZ2lmIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.dM2UwD7Z6MCmvsXtvVMrSGBE-wuYJhxsYuuvwK6rHi0";
        Logo2Stato = 1;
        event.currentTarget.classList.remove("logo-benvenuto-img");
        event.currentTarget.classList.add("logo-benvenuto-gif");
        margineLogoF.classList.remove("margine-logo-finale-img");
        margineLogoF.classList.add("margine-logo-finale-gif");

    }
    else {
        event.currentTarget.src = "https://assets.account.microsoft.com/signedout/compassassets/9e4ea4f6-307f-412f-886c-3bd290f54b40.jpg?n=Microsoft%20Logo.jpg";
        Logo2Stato = 0;
        event.currentTarget.classList.remove("logo-benvenuto-gif");
        event.currentTarget.classList.add("logo-benvenuto-img");
        margineLogoF.classList.remove("margine-logo-finale-gif");
        margineLogoF.classList.add("margine-logo-finale-img");
    }
}
