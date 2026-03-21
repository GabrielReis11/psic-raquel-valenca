<?php
// CDNS de Estilo Base (Head)
?>
<!-- Bootstrap 5.3.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Google Fonts: Montserrat & Playfair Display -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<?php 
// Plugins Condicionais (Configurados no infos.php)

// 1. AOS (Animações)
if ($plugins['aos']): ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php endif; ?>

<?php 
// 2. Lightbox (Galeria de Fotos)
if ($plugins['lightbox']): ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
<?php endif; ?>

<?php 
// 3. Swiper (Carrossel/Slider)
if ($plugins['swiper']): ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<?php endif; ?>
