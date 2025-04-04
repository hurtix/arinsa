<?php
/**
 * This is a part template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


    <div class="<?php if(wp_is_Mobile()) echo 'grilla-3';else echo 'section'?>">
      <?php $galeria_urls = get_field( 'galeria' ); ?>
      <?php if ( $galeria_urls ) :  
      $x = 1;
      ?>
      <?php foreach ( $galeria_urls as $galeria_url ): ?>
          <img class="m-0 border hover-shadow cursor" onclick="openModal();currentSlide(<?php echo $x;?>)"  src="<?php echo esc_url( $galeria_url ); ?>" />
      <?php 
      $x++;
      endforeach; ?>
          <!-- The Modal/Lightbox -->
      <div id="galeriaModal" class="modal">
        <span class="close cursor" onclick="closeModal()"><i class="bi bi-x-lg"></i></span>
        <div class="flex-center minh-100">
        <div class="modal-content">
        <?php foreach ( $galeria_urls as $galeria_url ): ?>
          <div class="mySlides">
            <img src="<?php echo esc_url( $galeria_url ); ?>">
          </div>
          <?php endforeach; ?>
          <!-- Next/previous controls -->
          <a class="prev" onclick="plusSlides(-1)"><i class="bi bi-chevron-left"></i></a>
          <a class="next" onclick="plusSlides(1)"><i class="bi bi-chevron-right"></i></a>
        </div>
        </div>
      </div>
      <?php endif; ?>
    </div>



<style>
.section{
  column-width: 250px;
  column-gap: 0;
}
.section img{
  width: 100%; 
  cursor: pointer;
}
.modal img {
  cursor: unset;
border: 10px solid var(--blanco);
box-shadow: var(--sombra);
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 10;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: var(--azul-arinsa);
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: transparent;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
  border: none;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: var(--amarillo-arinsa);
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: var(--azul-arinsa);
  font-weight: bold;
  font-size: 3em;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: transparent;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<script>
// Open the Modal
function openModal() {
  document.getElementById("galeriaModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("galeriaModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>