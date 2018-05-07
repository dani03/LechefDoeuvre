<?php
session_start();
 require("modeles/model.php");
 require ("vues/headPage.php");
?>

          <div id="contenu_area">
            <?php resultRecherche(); ?>

          </div>
      </div>

      <footer> <h2 style="text-align:center;padding-top:30px">this is the footer &copy;</h2></footer>
    </main>
<script type="text/javascript" src="vues/styles/javascript/script.js"></script>
  </body>
</html>
