<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>faq-google</title>
    <style media="screen">
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      ul{
        list-style: none;
      }
      header{
        position: fixed;
        background-color: white;
        width: 100%;
        border-bottom: 1px grey solid;
      }
      .titolo{
        display: flex;
        align-items: center;
        padding-left: 24px;
      }
      img{
        width: 90px;
      }
      h1{
        font-size: 20px;
        padding-left: 6px;
        padding-bottom: 24px;
        padding-top: 24px;
      }
      .navbar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-bottom: 6px;
        position: relative;
      }
      .navbar ul li{
        display: inline-block;
        padding-left: 24px;
      }
      .blue{
        color: blue;
      }
      .linea{
        position: absolute;
        top: 94%;
        left: 28%;
        background-color: blue;
        height: 5px;
        width: 152px;

      }
      .menu{
        display: flex;
        align-items: center;
      }
      .account{
        padding-right: 24px;
      }
      main{
        padding-top: 144px;
      }
      .centratura{
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 978px;
        margin: 0 auto;
        padding-bottom: 48px;
      }
      footer{
        width: 100%;
        background-color: grey;
      }
      .flex{
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 978px;
        margin: 0 auto;
      }
      .flex ul li{
        display: inline-block;
        padding-left: 6px;
      }
      .info{
        padding-top: 24px;
        padding-bottom: 24px;
      }
      .info select{
        width: 200px;
      }
    </style>
    <?php
    $faq = [
      [
          'ask' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?
          <br>
          <br>
          ",
          'answer' => "La recente <a href='#'> decisione della Corte di giustizia dell'Unione europea </a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
          <br>
          <br>
          Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
          <br>
          <br>
          Per presentare una richiesta di rimozione, compila questo <a href='#'> modulo web. </a> Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.
          <br>
          <br>
          Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
          <br>
          <br>
          Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
      ],
      [
          'ask' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?
          <br>
          <br>
          ",
          'answer' => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.
          <br>
          <br>
          Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.
          <br>
          <br>
          Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='#'> Centro Google per la sicurezza online. </a>
          <br>
          <br>
          <a href='#'> Scopri </a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."
      ],
      [
          'ask' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?
          <br>
          <br>
          ",
            'answer' => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='#'> contattare il webmaster </a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='#'> fai clic qui. </a> Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='#'> visitare la nostra pagina di assistenza per avere ulteriori informazioni. </a>"
      ],
      [
          'ask' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?
          <br>
          <br>
          ",
          'answer' => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='#'> URL referrer. </a> Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='#'> qui. </a> Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."
      ],

    ];
     ?>
  </head>
  <body>
    <header>
      <div class="titolo">
        <img src="img/google.jpg" alt="">
        <h1>Privacy e termini</h1>
      </div>
      <div class="navbar">
        <div class="menu">
          <ul>
            <li>Introduzione</li>
            <li>Norme sulla Privacy</li>
            <li>Termini di Servizio</li>
            <li>Tecnologie</li>
            <li class="blue">Domande Frequenti</li>
            <div class="linea"></div>
          </ul>
        </div>
        <div class="account">
          <ul>
            <li>Account Google</li>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <?php
        foreach ($faq as $faqUnique) {
          echo "<div class='centratura'>";
          echo "<h2>";
          echo $faqUnique["ask"];
          echo "</h2>";
          echo "<p>";
          echo $faqUnique["answer"];
          echo "</p>";
          echo "</div>";
        }
      ?>
    </main>
    <footer>
      <div class="flex">
        <div class="info">
          <ul>
            <li>Google</li>
            <li>Tutto su Google</li>
            <li>Privacy</li>
            <li>Termini</li>
          </ul>
        </div>
        <div class="info">
          <select>
            <option value="ita">Italiano</option>
            <option value="eng">Inglese</option>
            <option value="esp">Spagnolo</option>
            <option value="fr">Francese</option>
          </select>
        </div>
      </div>
    </footer>
  </body>
</html>
