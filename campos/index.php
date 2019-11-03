<?php

echo '<pre>';
var_dump( $_REQUEST );
echo '</pre>';

?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Campos</title>
    <meta class="foundation-mq"></head>
    <body>
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">Campos de PHP</li>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Tipo de Campos</h4>
        <form method="POST">
          <div class="row">
            <div class="medium-4  columns">
              <label>Select</label>
              <select name="title">
                <option value="1">Mr.</option>
                <option value="2">Ms.</option>
                <option value="3">Mrs.</option>
                <option value="4">Dr.</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Text</label>
              <input type="text" name="name">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Text Area</label>
              <textarea cols="30" rows="3" name="description"></textarea>
            </div>
          </div>
          
          <div class="row">
            <div class="medium-4  columns">
              <label>Checkbox</label>
              <input type="checkbox" name="options" value="3">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Radio</label>
              1 <input name="radio" type="radio" value="1">
              2 <input name="radio" type="radio" value="2">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Hidden</label>
              <input type="hidden" name="hidden" value="hidden data">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <input value="Enviar" class="button success hollow" type="submit">
            </div>
          </div>
        </form>
      </div>
    </div>
    </body>
</html>