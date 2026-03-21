<?php
// SCRIPTS Base (Final do Body)
?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap 5.3.3 Bundle (JS + Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Navbar Script -->
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });
</script>

<?php 
// Plugins Condicionais (Configurados no infos.php)

// 1. AOS (Animações)
if ($plugins['aos']): ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true, // Animação acontece apenas uma vez
            offset: 100
        });
    </script>
<?php endif; ?>

<?php 
// 2. Lightbox (Galeria de Fotos)
if ($plugins['lightbox']): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true,
          'albumLabel': "Imagem %1 de %2"
        })
    </script>
<?php endif; ?>

<?php 
// 3. Swiper (Carrossel/Slider)
if ($plugins['swiper']): ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.feedback-carousel', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
            },
            breakpoints: {
                640: { slidesPerView: 1 },
                1024: { slidesPerView: 1 }
            }
        });
    </script>
<?php endif; ?>
