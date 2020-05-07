<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="mystyle.css">
    <title>GOOGLE FAQ</title>
    <?php
    include_once "db-faq.php"
     ?>
  </head>
  <body>
    <!-- sezione header -->
    <header>
      <div class="top-header">

        <div class="logo">
          <img alt="Google" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" srcset="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_74x24dp.png 2x" >
        </div>
        <div class="policies top-title-text">
          Privacy e Termini
        </div>
      </div>

      <div class="bottom-header nav-bar-text">

        <nav>
          <ul>
            <li class="">Introduzione</li>
            <li class="">Norme sulla privacy</li>
            <li class="">Termini di servizio</li>
            <li class="">Tecnologie</li>
            <li class="nav-menu-selected">Domande frequenti</li>
          </ul>
        </nav>
        <div class="myaccount">
          Account Google
        </div>

      </div>

    </header>
    <!-- sezione contenuti testuali -->
    <section>

       <!-- gestione del print delle domande e risposte in pagina -->
       <div class="container">

         <?php
         foreach ($faqs as $faq) {
           foreach ($faq as $domanda => $risposta) {

             echo
             '<div class="domanda faq-question-text">
             <h1>' . $domanda . '</h1>
             </div>';

             echo '<br>';

             echo
             '<div class="risposta faq-answare-text">
             <p>' . $risposta . '</p>
             </div>';

             echo '<br>';
           }
         };
         ?>
       </div>


    </section>

    <footer>

      <div class="container">
        <div class="footer-sx-menu">
          <span>Google</span>
          <span>Tutto su Google</span>
          <span>Privacy</span>
          <span>Termini</span>
        </div>

        <div class="footer-sx-lingua">
          <div class="icona-mondo">
            
          </div>
          <div class="selettore-lingua">

          </div>
        </div>
      </div>

    </footer>



  </body>
</html>
