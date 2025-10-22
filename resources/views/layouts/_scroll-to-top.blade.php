<style>
    .scroll-top {
    width: 55px;
    height: 55px;
    line-height: 55px;
    position: fixed;
    bottom: 105%;
    right: 30px;
    font-size: 24px;
    z-index: 99;
    color: #fff;
    text-align: center;
    cursor: pointer;
    transition: 1s ease;
    cursor: pointer;
    background: #ab273a;
}

button#scroll-to-top.open {
    bottom: 50px;
}
</style>
<button id="scroll-to-top" title="Scroll To Top" class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-long-arrow-up"></span> 
</button>
<script type='text/javascript'>
$(function(){
     const button = $('#scroll-to-top');
     $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
          button.addClass('open');
        } else {
          button.removeClass('open');
        }
      });
       button.on('click', function() {
        $('html, body').animate({ scrollTop: 0 }); // Smooth scroll
      });
    });
    
     
</script>