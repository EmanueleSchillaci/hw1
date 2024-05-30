function controlloCredenziali(event){

    if(form.IDuser.value===""||form.password.value===""){
        alert("INSERIRE TUTTE LE CREDENZIALI");
        event.preventDefault();
    }
}


const form=document.querySelector("#form");
form.addEventListener("submit",controlloCredenziali);
