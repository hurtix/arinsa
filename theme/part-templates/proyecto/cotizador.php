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
    $separacion = get_field('separacion');
    $inicial = get_field('inicial');
    $financiacion = get_field('financiacion');
    setlocale(LC_MONETARY, 'es_CO');
    $show_precio = money_format('%!.0n', $precio);
    // $separacion = money_format('%!.0n', $separacion);
    // $inicial = money_format('%!.0n', $inicial);
    // $financiacion = money_format('%!.0n', $separacion);
?>
<!-- Cotización -->

    <div id="cotizacion" class="w-100 h-100">
        <div class="sombra h-100 flex-center flex-column bg-blanco border <?php if(wp_is_Mobile()) echo 'py-5';?>">
        <h3 class="text-center display-5 mb-0 text-uppercase text-decoration-underline ls-2 amarillo">Cotización</h3>
        <span class="titulo text-uppercase small ls-2">Actualmente desde</span>
        <div id="circulo" class="flex-center flex-column text-center">
            <div class="row w-100">
                <div class="col2">
                    <!-- <label class="small" >Ingrese el valor a calcular sin puntos ni espacios.</label> -->
                    <div class="d-block text-center">
                        <label class="lead">$<?php echo $show_precio; ?> COP</label>
                    </div>
                    
                    
                    <input class="h4 p-2 my-3 rounded border w-75" type="text" name="income" min="0" id="income" placeholder="Ejm: <?php the_field('proyecto-precio'); ?>" required><br>
                </div>
                <div class="col1">
                   <label class="titulo text-uppercase ls-1" for="income">Valor propiedad:</label>
                    <span class="d-block lead print_income azul">$<?php echo $show_precio; ?></span>
                </div>
            </div>
            <div class="row w-100">
                <div class="py-2">
                   <label class="titulo text-uppercase ls-1" for="separacion">Cuota de separación (<?php the_field('separacion'); ?>%)</label>
                    <span class="d-block lead print_separacion azul">
                        <? 
                        $calc_separacion = ($precio * $separacion)/100;
                        echo '$'.money_format('%!.0n', $calc_separacion);
                        ?>
                    </span>
                </div>
                <div class="py-2" style="display:none;">
                    <input class="inputClear" type="text" name="separacion" min="0" id="separacion" disabled>
                </div>
            </div>
            <div class="row w-100">
                <div class="py-2">
                   <label class="titulo text-uppercase ls-1" for="inicial">Cuota inicial (<?php the_field('inicial'); ?>%)</label>
                    <span class="d-block lead print_inicial azul">
                        <? 
                        $calc_inicial = ($precio * $inicial)/100;
                        echo '$'.money_format('%!.0n', $calc_inicial);
                        ?>
                    </span>
                </div>
                <div class="col2" style="display:none;">
                    <input class="inputClear" type="text" name="inicial" min="0" id="inicial" disabled>
                </div>
            </div>

            <div class="row w-100">
                <div class="col1">
                   <label class="titulo text-uppercase ls-1" for="financiacion">Financiación (<?php the_field('financiacion'); ?>%)</label>
                    <span class="d-block lead print_financiacion azul">
                        <? 
                        $calc_financiacion = ($precio * $financiacion)/100;
                        echo '$'.money_format('%!.0n', $calc_financiacion);
                        ?>
                    </span>
                </div>
                <div class="col2" style="display:none;">
                    <input class="inputClear" type="text" name="financiacion" min="0" id="financiacion" disabled>
                </div>
            </div>
        </div>
    </div>
    <?php //get_template_part('part-templates/compartir') ?>
    </div>



    
    
<script>
var incomeEl = document.getElementById('income');
var taxEl    = document.getElementById('inicial');
var sepEl    = document.getElementById('separacion');
var finEl    = document.getElementById('financiacion');

function calculate() {  
  var incomeTax = 0.<?php the_field('inicial'); ?> * incomeEl.value;
  var sepTax = 0.<?php the_field('separacion'); ?> * incomeEl.value;
  var finTax = 0.<?php the_field('financiacion'); ?> * incomeEl.value;
  var tax =  incomeTax;
  var sep =  sepTax;
  var fin =  finTax;
  taxEl.value = Math.round(tax * 100) / 100;
  sepEl.value = Math.round(sep * 100) / 100;
  finEl.value = Math.round(fin * 100) / 100;
}

window.onload = function () {
calculate();
};

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