 <footer>
   <div class="container-fluid text-center">
    <div class="row justify-content-center align-items-center d-flex">
      <div class="col">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/home.png" alt=""></a>
      </div>
      <div class="col">
        <a href="/pesquisar/"><img src="<?php echo get_template_directory_uri(); ?>/img/pesquisar.png" alt=""></a>
      </div>
      <div class="col">
        <a href="/carrinho/"><img src="<?php echo get_template_directory_uri(); ?>/img/carrinho.png" alt=""></a>
      </div>
      <div class="col">
        <a href="/minha-conta/"><img src="<?php echo get_template_directory_uri(); ?>/img/perfil.png" alt=""></a>
      </div>
    </div>
     <!-- <p class="text-center">Todos direitos reservados a APXCRW © <?php echo date('Y'); ?> - WhatsApp contato : <a href="https://api.whatsapp.com/send?phone=5541995287180&text=Ol%C3%A1%20vim%20atrav%C3%A9s%20do%20site%20tirar%20uma%20d%C3%BAvida.">(41) 99528-7180</a></p> -->
   </div>
 </footer>  
<?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
  

let myCarousel = document.querySelector('#myCarousel')
let carousel = new bootstrap.Carousel(myCarousel, {wrap: true})

let slides = document.querySelectorAll('.carousel .carousel-item')

slides.forEach((el) => {
    const minPerSlide = slides.length
    let next = el.nextElementSibling
    for (let i=1; i<minPerSlide; i++) {
        if (!next) {
            next = slides[0]
        }
        let cloneChild = next.cloneNode(true)
        if(cloneChild.children[0].nodeName !== "BUTTON"){
          el.appendChild(cloneChild.children[0])
        }
        next = next.nextElementSibling
    }
})


    $(document).ready(function () {
        $('.sub-menu').addClass('dropdown-menu'); 
        function scrollFunction() {
          if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            $('.navbar').removeClass('menuShort');
          } else {            
            $('.navbar').addClass('menuShort');
          }
        }
        window.onscroll = function() {scrollFunction()};
    });
</script>
</body>
</html>