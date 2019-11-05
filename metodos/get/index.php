<?php

echo '<pre>';
var_dump( $_GET );
echo '</pre>';

$search_terms = isset( $_GET['search_terms'] ) ? $_GET['search_terms']:'';

?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Get</title>
    <body>
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">Get</li>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Busqueda</h4>
        <form>
          <div class="medium-8  columns">
            <input type="text" placeholder="Search terms" name="search_terms" value="<?php echo $search_terms; ?>">
          </div>
          <div class="medium-12  columns">
            <input value="Enviar" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
    </body>
</html>