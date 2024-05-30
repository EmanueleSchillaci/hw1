<?php
    session_Start();
    session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="indexNotLogged.css"/>
    <script src="index.js" defer>  </script>
    <title> Microsoft account | accedi o crea  il tuo Account oggi - Microsoft</title>
</head>
<body>
<div id="page-wrapper">

  <header>
    <div id="container-header-generale">
        <div id="container-header1">
            <a id="link-logo" class="link" href="https://www.microsoft.com/"> 
                <img id="logo"src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31"/>
             </a>
             <a id="link-account" class="link" href="https://account.microsoft.com/">
                <strong>Account</strong>
             </a>
             <a id="link-guida" class="link" href="https://support.microsoft.com/">
                        Guida
             </a>
        </div>
        <div id="container-header2">
            <img id="ricerca" src="https://banner2.cleanpng.com/20180314/ssw/kisspng-ico-web-search-engine-icon-search-magnifying-glass-5aa970e633c951.7650436615210539262121.jpg"/>
            <a id="link-accedi" class="link" href="login.php">      
             Accedi <img id="accedi" src="data:image/jpeg;base64,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"/>
            </a>
        </div>
    </div>
  </header>

  <div id="main-content">
    <div id="margine-titolo">
      <div id="riquadro-titolo">
        <div id="titolo">
          <h1>E' tutto qui con account </br> Microsoft</h1>
        </div>
      </div>
      <div id="riquadro-sottotitolo">
        <div id="sottotitolo">
            <h3>Il tuo account Microsoft connette tutte le app e i servizi Microsoft.Accedi per gestire il tuo account.</h3>
        </div>
      </div>
      <div id="margini-bottoni">
   <button class="bottone-accedi2">
     <a id="accedi-link" class="link" href="login.php">
      Accedi
     </a>
   </button>
   <button class="bottone-accedi2">
    <a id="accedi-link" class="link" href="Registrazione.php">
     crea un account
    </a>
  </button>
  </div>
    </div>



    <div id="margine-immagine-benvenuto">
      <img id="immagine-benvenuto" src="https://i.blogs.es/b35b58/microsoft-365-1/1366_2000.jpeg"/>
    </div>

    <div class="margine-logo-benvenuto" id="logo-benvenutoM">
      <img class="logo-benvenuto-img" id="logo-benvenuto" src="https://assets.account.microsoft.com/signedout/compassassets/9e4ea4f6-307f-412f-886c-3bd290f54b40.jpg?n=Microsoft%20Logo.jpg"/>
    </div>
  </div>

  <div class="margine-frasi-centrate">
    <div class="riquadro-frasi-centrate-grandi">
      <div class="frasi-centrate-grandi">
        <h1>il meglio di Microsoft</h1>
      </div>
    </div>
    <div class="riquadro-frasi-centrate-piccolo">
      <div class="frasi-centrate-piccole">
          <p>Ottieni di piu' gratuitamente quando accedi con il tuo account Microsoft.</p>
    </div>
  </div>

</div>
<div id="margine-blocco-a-4">
  <div class ="biblocco-a-4" id ="biblocco-a-4-1">
    <div class="blocco-a-4" id="blocco-a-4-1">
      
      <img class="rounded" id="img-blocco-1" src="https://assets.account.microsoft.com/signedout/compassassets/09b044c3-712b-44e7-b95c-12d97113289b.png?n=398x450_m365apps.png"/>
      <div class="parte-scritta-new-base" id="parte-scritta-1">
      <div class="margine-frasi-blocchi-grandiSX" id="margine-frasi-grandi-1">
        <div class="frasi-blocchi-grandiSX" >
         <h2>Microsoft 365 apps</h2>
        </div>
      </div>
      <div class="margine-frasi-blocchi-piccoleSX" id="margine-frasi-piccole-1">
        <div class="frasi-blocchi-piccoleSX">
         <p>Ottieni l'accesso alle versioni online gratuite di Outlook, Word, Excel e PowerPoint.</p>
         <p class="testo-piu-hidden"  id="testo-piu-1"> grazie al quale potrai svolgere al meglio compiti anche in ambito lavorativo, se fai parte di un azienda o un ente affiliato, potresti richiedere un account con vantaggi premium inclusi!</p>
        </div>
      </div>
      <div class="leggi-piu"  id="leggi-piu1"> leggi di più </div>
    </div>
    </div>
    <div class="blocco-a-4" id="blocco-a-4-2">
        <img class="rounded" src="https://assets.account.microsoft.com/signedout/compassassets/f209382f-b378-4a1a-976f-a7cdcf5ba1b6.png?n=398x450_cloud.png"/>
        <div class="parte-scritta-new-base" id="parte-scritta-2">
        <div class="margine-frasi-blocchi-grandiSX">
          <div class="frasi-blocchi-grandiSX">
           <h2>5Gb di spazio di archiviazione nel cloud</h2>
          </div>
        </div>
        <div class="margine-frasi-blocchi-piccoleSX">
          <div class="frasi-blocchi-piccoleSX">
           <p>Salva i file e le foto e accedi da qualsiasi dispositivo, ovunque.</p>
           <p class="testo-piu-hidden"  id="testo-piu-2"> grazie al quale potrai svolgere al meglio compiti anche in ambito lavorativo, se fai parte di un azienda o un ente affiliato, potresti richiedere un account con vantaggi premium inclusi!</p>
          </div>
        </div>
        <div class="leggi-piu" id="leggi-piu2"> leggi di più </div>
        </div>
      </div>
    
   </div>
   <div class="biblocco-a-4" id="biblocco-a-4-2">
    <div class="blocco-a-4" id="blocco-a-4-3">
      <img class="rounded" src="https://assets.account.microsoft.com/signedout/compassassets/c44a2e03-db6b-4c70-9d15-1af4b9066acf.png?n=398x450_rewards.png"/>
      <div class="parte-scritta-new-base" id="parte-scritta-3">
      <div class="margine-frasi-blocchi-grandiSX">
        <div class="frasi-blocchi-grandiSX">
         <h2>Microsoft Rewards</h2>
        </div>
      </div>
      <div class="margine-frasi-blocchi-piccoleSX">
        <div class="frasi-blocchi-piccoleSX">
         <p>Guadagna punti che possono essere riscattati per buoni regalo, donazioni di organizzazioni no profit e premi.</p>
         <p class="testo-piu-hidden"  id="testo-piu-3"> grazie al quale potrai svolgere al meglio compiti anche in ambito lavorativo, se fai parte di un azienda o un ente affiliato, potresti richiedere un account con vantaggi premium inclusi!</p>
        </div>
      </div>
      <div class="leggi-piu" id="leggi-piu3"> leggi di più </div>
      </div>
    </div>
    <div class="blocco-a-4" id="blocco-a-4-4">
        <img class="rounded" src="https://assets.account.microsoft.com/signedout/compassassets/293f9839-1628-4dc5-af6e-971ebdefacb3.png?n=398x450_xbox.png"/>
        <div class="parte-scritta-new-base" id="parte-scritta-4">
        <div class="margine-frasi-blocchi-grandiSX">
          <div class="frasi-blocchi-grandiSX">
           <h2>Rete Xbox</h2>
          </div>
        </div>
        <div class="margine-frasi-blocchi-piccoleSX">
          <div class="frasi-blocchi-piccoleSX">
           <p>Il tuo account ti consente di accedere alla rete Xbox e alla community.</p>
           <p class="testo-piu-hidden"  id="testo-piu-4"> grazie al quale potrai svolgere al meglio compiti anche in ambito lavorativo, se fai parte di un azienda o un ente affiliato, potresti richiedere un account con vantaggi premium inclusi!</p>
          </div>
        </div>
        <div class="leggi-piu" id="leggi-piu4"> leggi di più </div>
        </div>
      </div>
  </div>
  
  <div class="blocco-grigio">
    <div class="margine-frasi-centrate">
      <div class="riquadro-frasi-centrate-grandi">
        <div class="frasi-centrate-grandi">
          <h1>In modo univoco il tuo</h1>
        </div>
      </div>
      <div class="riquadro-frasi-centrate-piccolo">
        <div class="frasi-centrate-piccole">
            <p>Rimani più sicuro con impostazioni di sicurezza e privacy personalizzabili e ottieni consigli personalizzati dalla verifica dell'account.</p>
      </div>
    </div>
  
  </div>
      <div class="blocco-scritta-lateraleSX">
      <img class="rounded-big" src="https://assets.account.microsoft.com/signedout/compassassets/38137ca8-c812-4eb8-bf5e-64242fb1cb08.png?n=592x540_security_v2.png"/>
      <div .class="parte-scritta">
      <div class="margine-frasi-laterali-blocchi-grandiSX">
        <div class="frasi-laterali-blocchi-grandiSX">
         <h2>Sicurezza a modo tuo</h2>
        </div>
      </div>
      <div class="margine-frasi-laterali-blocchi-piccoleSX">
        <div class="frasi-laterali-blocchi-piccoleSX">
         <p>Scegli le impostazioni di sicurezza e privacy che funzionano meglio per te e con avvisi automatici per attività insolite o sospette dell'account.</p>
        </div>
      </div>
    </div>
    </div>
    <div class="blocco-scritta-lateraleDX">
      <img class="rounded-big" src="https://assets.account.microsoft.com/signedout/compassassets/6139e484-7705-4f08-b625-dbf284fef7de.png?n=592x540_password.png"/>
      <div .class="parte-scritta">
      <div class="margine-frasi-laterali-blocchi-grandiSX">
        <div class="frasi-laterali-blocchi-grandiSX">
         <h2>Liberati dalle password</h2>
        </div>
      </div>
      <div class="margine-frasi-laterali-blocchi-piccoleSX">
        <div class="frasi-laterali-blocchi-piccoleSX">
         <p>Rendi il tuo account ancora più sicuro con l'accesso facoltativo senza password.</p>
        </div>
      </div>
    </div>
    </div>
    <div class="blocco-scritta-lateraleSX">
      <img class="rounded-big" src="https://assets.account.microsoft.com/signedout/compassassets/e498939c-8a39-42e7-83da-3292d4249dcd.png?n=592x540_management_v2.png"/>
      <div .class="parte-scritta">
      <div class="margine-frasi-laterali-blocchi-grandiSX">
        <div class="frasi-laterali-blocchi-grandiSX">
         <h2>Un unica posizione da cui gestire tutto</h2>
        </div>
      </div>
      <div class="margine-frasi-laterali-blocchi-piccoleSX">
        <div class="frasi-laterali-blocchi-piccoleSX">
         <p>Gestisci il tuo account da un unico dashboard, tra cui informazioni di pagamento, acquisti, abbonamenti e altro ancora.</p>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div id="blocco-bianco">
    <div class="margine-frasi-centrate">
      <div class="riquadro-frasi-centrate-grandi">
        <div class="frasi-centrate-grandi">
          <h1>Semplifica la tua giornata</h1>
        </div>
      </div>
      <div class="riquadro-frasi-centrate-piccolo">
        <div class="frasi-centrate-piccole">
            <p>Accedi a tutte le app, i servizi e i giochi Microsoft con un unico account.
              Qualunque cosa tu stia facendo, ovunque ti trovi, vai avanti.</p>
      </div>
    </div>
  
  </div>
  <div class="blocco-scritta-lateraleDX">
    <img class="rounded-big" src="https://assets.account.microsoft.com/signedout/compassassets/6139e484-7705-4f08-b625-dbf284fef7de.png?n=592x540_password.png"/>
    <div .class="parte-scritta">
    <div class="margine-frasi-laterali-blocchi-grandiSX">
      <div class="frasi-laterali-blocchi-grandiSX">
       <h2>Accedi e vai</h2>
      </div>
    </div>
    <div class="margine-frasi-laterali-blocchi-piccoleSX">
      <div class="frasi-laterali-blocchi-piccoleSX">
       <p>Il profilo e le preferenze dell'account vengono sincronizzati tra tutti i dispositivi. Ovunque ci si trovi, è tutto qui.</p>
      </div>
    </div>
  </div>
  </div>
  <div class="blocco-scritta-lateraleSX">
    <img class="rounded-big" src="https://assets.account.microsoft.com/signedout/compassassets/5de86244-0a3a-41e5-bb6b-5b5e62b732c7.png?n=592x540_pickup.png"/>
    <div .class="parte-scritta">
    <div class="margine-frasi-laterali-blocchi-grandiSX">
      <div class="frasi-laterali-blocchi-grandiSX">
       <h2>Riprendere da dove si era interrotto</h2>
      </div>
    </div>
    <div class="margine-frasi-laterali-blocchi-piccoleSX">
      <div class="frasi-laterali-blocchi-piccoleSX">
       <p>I dati vengono sincronizzati automaticamente nel cloud, quindi i contatti, il calendario e i file vengono sempre sottoposti a backup, indipendentemente dal dispositivo in uso.</p>
      </div>
    </div>
  </div>
  </div>
  <div class="blocco-scritta-lateraleDX">
    <img class="rounded-big" src="https://assets.account.microsoft.com/signedout/compassassets/295f4081-bbc8-4f38-a5ce-1b2b586573c7.png?n=592x540_family.png"/>
    <div .class="parte-scritta">
    <div class="margine-frasi-laterali-blocchi-grandiSX">
      <div class="frasi-laterali-blocchi-grandiSX">
       <h2>Conservalo nella famiglia</h2>
      </div>
    </div>
    <div class="margine-frasi-laterali-blocchi-piccoleSX">
      <div class="frasi-laterali-blocchi-piccoleSX">
       <p>Crea facilmente un gruppo familiare e imposta il controllo genitori come i limiti di tempo davanti allo schermo e i filtri delle app gratuitamente con Microsoft Family Safety.</p>
      </div>
    </div>
  </div>
  </div>

  </div>
  <div class="margine-logo-finale-img" id="logo-finaleM">
    <img class="logo-benvenuto-img" id="logo-finale" src="https://assets.account.microsoft.com/signedout/compassassets/9e4ea4f6-307f-412f-886c-3bd290f54b40.jpg?n=Microsoft%20Logo.jpg"/>
  </div>
  <div class="riquadro-frasi-centrate-piccolo" id="frasi-centrate-logo">
    <div class="frasi-centrate-piccole">
        <p>Il tuo account Microsoft connette tutte le app e i servizi Microsoft.</p>
  </div>
  </div>
  <div class="blocco-grigio">
    <div class="riquadro-frasi-centrate-grandi">
      <div class="frasi-centrate-grandi">
        <h1>Hai domande? </br> Noi abbiamo le risposte.</h1>
      </div>
    </div>
  <div class="triblocco">
      <div class="blocco-help">
        <div class="margine-frasi-laterali-blocchi-grandiSX">
          <div class="frasi-laterali-blocchi-grandiSX">
           <h3>Un account Microsoft non necessita di un indirizzo di posta elettronica Microsoft</h3>
          </div>
        </div>
       <div class="margine-frasi-laterali-blocchi-piccoleSX">
          <div class="frasi-laterali-blocchi-piccoleSX">
           <p>L'indirizzo di posta elettronica usato per accedere all’account Microsoft può provenire da Outlook.com, Hotmail.com, Gmail, Yahoo o altri provider.</p>
          </div>
        </div>
        <div class="margine-link">
         <a class="link-help" href="Registrazione.php">
          Crea ora
         </a>
        </div>

      </div>
      <div class="blocco-help">
        <div class="margine-frasi-laterali-blocchi-grandiSX">
          <div class="frasi-laterali-blocchi-grandiSX">
           <h3>E' possibile che tu abbia gia un account</h3>
          </div>
        </div>
        <div class="margine-frasi-laterali-blocchi-piccoleSX">
          <div class="frasi-laterali-blocchi-piccoleSX">
           <p>Puoi usare un indirizzo e-mail, un ID Skype o un numero di telefono per accedere al tuo PC Windows, Xbox o servizi Microsoft come Microsoft 365.</p>
          </div>
        </div>
        <div class="margine-link">
         <a class="link-help" href="https://go.microsoft.com/fwlink/?linkid=2215203">
          Verifica se ho un account Microsoft
         </a>
        </div>

      </div>
      <div class="blocco-help">
        <div class="margine-frasi-laterali-blocchi-grandiSX">
          <div class="frasi-laterali-blocchi-grandiSX">
           <h3>Ottieni assistenza per il tuo account Microsoft</h3>
          </div>
        </div>
        <div class="margine-frasi-laterali-blocchi-piccoleSX">
          <div class="frasi-laterali-blocchi-piccoleSX">
           <p>Hai dimenticato il nome utente o la password? Visita Supporto tecnico Microsoft per assistenza e indicazioni sull'account.</p>
          </div>
        </div>
        <div class="margine-link">
         <a class="link-help" href="https://go.microsoft.com/fwlink/?linkid=2214846">
          Ottieni assistenza
         </a>
        </div>

      </div>
  </div>

  </div>

</div>
<footer>
  <div id="paese">
    &#x1F30E <a class="link" href="https://account.microsoft.com/languages?lang=it-it"> italiano (italia)</a>
  </div>
  <div id="privacy">
    <a class="link" href="https://aka.ms/yourcaliforniaprivacychoices">le tue scelte sulla privacy</a>
  </div>
  <div id="elenco-link">
    <a class="link" href="https://go.microsoft.com/fwlink/?LinkID=521839">privacy e cookie</a>
    <a class="link" href="https://go.microsoft.com/fwlink/?LinkID=530144&clcid={CLCID_HEX}">condizioni per l'utilizzo</a>
    <a class="link" href="https://support.microsoft.com/contactus"> contattaci</a>
    <a class="link" href="https://account.microsoft.com/account?lang=it-it#">feedback</a>
    <a class="link" href="https://account.microsoft.com/account?lang=it-it#">gestisci i cookie</a>
    <a class="link" href="https://go.microsoft.com/fwlink/?linkid=2121429"> accessibilità</a>
    <a class="link" href="https://www.microsoft.com/en-ie/eucompliancedoc/default.aspx">DoC di conformità UE</a>
    


  </div>
</footer>



</body>


</html>