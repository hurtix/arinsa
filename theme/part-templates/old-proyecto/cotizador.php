<?php

/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<?php
    $precio = get_field('proyecto-precio');
    setlocale(LC_MONETARY, 'es_CO');
    $precio = money_format('%!.0n', $precio);
?>
<!-- Cotización -->

    <div id="cotizacion" class="<?php if(wp_is_Mobile()) echo 'w-100';else echo 'w-50'?> mx-auto">
        <h3 class="text-center display-5 blanco mb-0">Cotización del inmueble</h3>
        <div id="circulo" class="blanco flex-center flex-column text-center">
            <div class="row w-100">
                <div class="col2">
                    <label class="blanco small" >Ingrese el valor a calcular sin puntos ni espacios.</label>
                    <label class="d-block text-center lead pt-4">Actualmente desde $<?php echo $precio; ?> COP</label>
                    
                    <input class="h4 p-2 my-3 rounded border" type="text" name="income" min="0" id="income" placeholder="Ejm: <?php the_field('proyecto-precio'); ?>" required><br>
                </div>
                <div class="col1">
                   <label class="blanco lead" for="income">Valor propiedad:</label>
                    <h3 class="print_income blanco">$0</h3>
                </div>
            </div>
            <div class="row w-100">
                <div class="col1">
                   <label class="blanco lead" for="separacion">Cuota de separación (<?php the_field('separacion'); ?>%)</label>
                    <h3 class="print_separacion blanco">$0</h3>
                </div>
                <div class="col2" style="display:none;">
                    <input class="inputClear" type="text" name="separacion" min="0" id="separacion" disabled>
                </div>
            </div>
            <div class="row w-100">
                <div class="col1">
                   <label class="blanco lead" for="inicial">Cuota inicial (<?php the_field('inicial'); ?>%)</label>
                    <h3 class="print_inicial blanco">$0</h3>
                </div>
                <div class="col2" style="display:none;">
                    <input class="inputClear" type="text" name="inicial" min="0" id="inicial" disabled>
                </div>
            </div>

            <div class="row w-100">
                <div class="col1">
                   <label class="blanco lead" for="financiacion">Financiación (<?php the_field('financiacion'); ?>%)</label>
                    <h3 class="print_financiacion blanco">$0</h3>
                </div>
                <div class="col2" style="display:none;">
                    <input class="inputClear" type="text" name="financiacion" min="0" id="financiacion" disabled>
                </div>
            </div>
        </div>
    </div>
<script>
var incomeEl = document.getElementById('income');
// var wealthEl = document.getElementById('wealth')
var taxEl    = document.getElementById('inicial');
var sepEl    = document.getElementById('separacion');
var finEl    = document.getElementById('financiacion');

function calculate() {  
  var incomeTax = 0.<?php the_field('inicial'); ?> * incomeEl.value;
  // var wealthTax = 0.25 * wealthEl.value;
  var sepTax = 0.<?php the_field('separacion'); ?> * incomeEl.value;
  var finTax = 0.<?php the_field('financiacion'); ?> * incomeEl.value;
  var tax =  incomeTax;
  var sep =  sepTax;
  var fin =  finTax;

  // round with 2 decimal places
  taxEl.value = Math.round(tax * 100) / 100;
  sepEl.value = Math.round(sep * 100) / 100;
  finEl.value = Math.round(fin * 100) / 100;
}

incomeEl.addEventListener('input', calculate);
// wealthEl.addEventListener('input', calculate);

income.addEventListener("input", format, false)
function format (){
  let val1 = +income.value;
  document.querySelector(".print_income").textContent =  val1.toLocaleString('es-CO', {maximumFractionDigits:0, style:'currency', currency:'COP', useGrouping:true}) 
  let val2 = +inicial.value;
  document.querySelector(".print_inicial").textContent =  val2.toLocaleString('es-CO', {maximumFractionDigits:0, style:'currency', currency:'COP', useGrouping:true}) 
  let val3 = +separacion.value;
  document.querySelector(".print_separacion").textContent =  val3.toLocaleString('es-CO', {maximumFractionDigits:0, style:'currency', currency:'COP', useGrouping:true})
  let val4 = +financiacion.value;
  document.querySelector(".print_financiacion").textContent =  val4.toLocaleString('es-CO', {maximumFractionDigits:0, style:'currency', currency:'COP', useGrouping:true})
}
</script>
<!-- Fin cotización -->