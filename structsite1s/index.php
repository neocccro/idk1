<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------

// hier komen de instellingen van deze web app
  include 'includes/config.php';

// hier komt de head sectie <head> etc.
  include 'views/standaard/head.php';

// hier komt de header sectie etc.
  include 'views/standaard/header.php';

// hier komt de navigatie
  include 'views/standaard/menu.php';
?>
<br/>
<br/>
<?php
// hier komt de content van de home page
  if(!empty($_GET))
  {
    if(file_exists('views/pages/'.$_GET['page'].'.php'))
    {
      include 'views/pages/'.$_GET['page'].'.php';
    }
    else
    {
      echo '<div class="wrap"><content class="wrap">The page &prime;' . $_GET['page'] . '&prime; does not exist.</content></div>';
    }
  }
  else
  {
    include 'views/pages/home.php';
  }


// hier komt de footer
  include 'views/standaard/footer.php';
?>
