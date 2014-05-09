<!-- Contact form 7 -->
<div class="boxes-full">
    <div class="contacttitle">
        <h2><?php if (yer_get_meta('contactsub')) { echo yer_get_meta('contactsub'); } else { echo "Contact" ; } ?></h2>
    </div>
    <div class="boxes-padding fullpadding">
        <div id="contactwarning"></div>
        <div id="contactajax"></div>
        <?php echo do_shortcode('[contact-form-7 id="30" title="Contactform"]'); ?>
    </div>
    <span class="box-arrow"></span>
</div>
<!-- End contact form 7 -->