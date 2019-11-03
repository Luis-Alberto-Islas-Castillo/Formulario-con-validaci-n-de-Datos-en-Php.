<?php
echo '<pre>';
var_dump( $_POST );
echo '</pre>';
?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Arrays</title>
    <meta class="foundation-mq"></head>
    <body>
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">Formulario</li>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Arrays</h4>
        <form method="POST">
          <div class="medium-12  columns">
            <label>Nombre</label>
            <input type="text" name="client[name]">
          </div>
          <div class="medium-12  columns">
            <label>Apellido</label>
            <input type="text" name="client[last_name]">
          </div>
          <div class="medium-12  columns">
            <label>Hijo N</label>
            <input type="text" name="child[]">
          </div>
          <div class="medium-12  columns">
            <label>Hijo N</label>
            <input type="text" name="child[]">
          </div>
          <div class="medium-12  columns">
            <label>Hijo N</label>
            <input type="text" name="child[]">
          </div>
          <div class="medium-12  columns">
            <label>Hijo N</label>
            <input type="text" name="child[]">
          </div>
          <div class="medium-12  columns">
            <label>Hijo N</label>
            <input type="text" name="child[]">
          </div>
          <div class="medium-12  columns">
            <input value="SEND" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
    </body>
</html>