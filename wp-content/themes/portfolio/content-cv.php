<!-- Start Personal info -->        
<!-- Retrieve variables -->
<div>
<?php 
    // persoonlijke gegevens
    $labels = rwmb_meta('yer_perslabels', 'type=text');
    $content = rwmb_meta('yer_perscontent', 'type=text');

    $length = count($labels);
    if (count($labels) > count($content)){
        $length = count($content);
    } else if (count($labels) < count($content)){
        $length = count($labels);
    }

    // vrije tijds gegevens
    $hobbys = rwmb_meta('yer_hobbys')
?>

<div class="boxes-half boxes-first persHeight printPers">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('perstitle')) echo yer_get_meta('perstitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <?php for ($i=0; $i < $length; $i++) { ?>
                        <li class="cvLabel"><a><?php echo $labels[$i]; ?></a></li>
                        <li class="cvContent"><a><?php echo $content[$i]; ?></a></li>
                        <li class="divider"></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
<div class="boxes-half boxes-half-last persHeight">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('hobbystitle')) echo yer_get_meta('hobbystitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <?php foreach ($hobbys as $hobby) { ?>
                        <li class="cvLabel"><a><?php echo $hobby; ?></a></li>
                        <li class="divider"></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
</div>
<!-- End Personal Info -->


<!-- Start Knowledge and skills -->        
<!-- Retrieve variables -->
<div>
<?php 
    // Labels en content
    $labels = rwmb_meta('yer_kennislabels', 'type=text');
    $content = rwmb_meta('yer_kenniscontent', 'type=text');

    $length = count($labels);
    if (count($labels) > count($content)){
        $length = count($content);
    } else if (count($labels) < count($content)){
        $length = count($labels);
    }

    // Taal gegevens
    // Titels
    $nedTitle = rwmb_meta( 'yer_nedtitle');
    $fransTitle = rwmb_meta( 'yer_franstitle');
    $engTitle = rwmb_meta( 'yer_engtitle');

    // content
    $nedcontent = rwmb_meta('yer_nedcontent');
    $franscontent = rwmb_meta('yer_franscontent');
    $engcontent = rwmb_meta('yer_engcontent');
?>
<!-- Start Knowledge and skills titles -->
<div class="boxes-full">
    <div class="boxes-padding fullpadding">
        <h1><?php if (yer_get_meta('kennistitle', 'type=text')) { echo yer_get_meta('kennistitle', 'type=text'); } ?></h1>
    </div>
    <span class="box-arrow"></span>
</div>
<!-- End Knowledge and skills titles -->

<div class="boxes-half boxes-first kennisHeight">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('spectitle')) echo yer_get_meta('spectitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <?php for ($i=0; $i < $length; $i++) { ?>
                        <li class="cvLabel"><a><?php echo $labels[$i]; ?></a></li>
                        <li class="cvContent"><a><?php echo $content[$i]; ?></a></li>
                        <li class="divider"></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
<div class="boxes-half boxes-half-last kennisHeight">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('langtitle')) echo yer_get_meta('langtitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <li class="cvLabel"><a><?php echo $nedTitle; ?></a></li>
                    <?php foreach ($nedcontent as $lang) { ?>
                        <li class="cvContent"><a><?php echo $lang; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>

                    <li class="cvLabel"><a><?php echo $engTitle; ?></a></li>
                    <?php foreach ($engcontent as $lang) { ?>
                        <li class="cvContent"><a><?php echo $lang; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>

                    <li class="cvLabel"><a><?php echo $fransTitle; ?></a></li>
                    <?php foreach ($franscontent as $lang) { ?>
                        <li class="cvContent"><a><?php echo $lang; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>

                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
</div>
<!-- End Knowledge and skills -->


<!-- Start Experiences -->        
<!-- Retrieve variables -->
<div>
<?php 
    // labels en content
    $labels = rwmb_meta('yer_kennislabels', 'type=text');
    $content = rwmb_meta('yer_kenniscontent', 'type=text');

    $length = count($labels);
    if (count($labels) > count($content)){
        $length = count($content);
    } else if (count($labels) < count($content)){
        $length = count($labels);
    }  

    // Opleiding gegevens
    // Titels
    $midTitle = rwmb_meta( 'yer_midtitle');
    $hogerTitle = rwmb_meta( 'yer_hogertitle');

    // content
    $midcontent = rwmb_meta('yer_midcontent');
    $hogercontent = rwmb_meta('yer_hogercontent');

    // Werkervaring gegevens
    // Titels
    $vakTitle = rwmb_meta( 'yer_vaktitle');
    $stageTitle = rwmb_meta( 'yer_stagetitle');

    // content
    $vakcontent = rwmb_meta('yer_vakcontent');
    $stagecontent = rwmb_meta('yer_stagecontent');
?>
<!-- Start Experiences titles -->
<div class="boxes-full">
    <div class="boxes-padding fullpadding">
        <h1><?php if (yer_get_meta('exptitle', 'type=text')) { echo yer_get_meta('exptitle', 'type=text'); } ?></h1>
    </div>
    <span class="box-arrow"></span>
</div>
<!-- End Experiences titles -->

<div class="boxes-half boxes-first expHeight">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('opltitle')) echo yer_get_meta('opltitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <li class="cvLabel"><a><?php echo $midTitle; ?></a></li>
                    <?php foreach ($midcontent as $content) { ?>
                        <li class="cvContent"><a><?php echo $content; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>

                    <li class="cvLabel"><a><?php echo $hogerTitle; ?></a></li>
                    <?php foreach ($hogercontent as $content) { ?>
                        <li class="cvContent"><a><?php echo $content; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>

                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
<div class="boxes-half boxes-half-last expHeight">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('ervtitle')) echo yer_get_meta('ervtitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <li class="cvLabel"><a><?php echo $vakTitle; ?></a></li>
                    <?php foreach ($vakcontent as $lang) { ?>
                        <li class="cvContent"><a><?php echo $lang; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>

                    <li class="cvLabel"><a><?php echo $stageTitle; ?></a></li>
                    <?php foreach ($stagecontent as $lang) { ?>
                        <li class="cvContent"><a><?php echo $lang; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>
                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
</div>
<!-- End Experiences -->

<!-- Start Varia -->        
<!-- Retrieve variables -->
<div>
<?php 
    // labels en content
    $reflabels = rwmb_meta('yer_reflabels', 'type=text');
    $refcontent = rwmb_meta('yer_refcontent', 'type=text');

    $length = count($reflabels);
    if (count($reflabels) > count($refcontent)){
        $length = count($refcontent);
    } else if (count($reflabels) < count($refcontent)){
        $length = count($reflabels);
    }  

    // Rijbewijs gegevens
    // Titels
    $rijTitle = rwmb_meta( 'yer_rijtitle');

    // content
    $rijcontent = rwmb_meta('yer_rijcontent');

    // SIN gegevens
    // Titels
    $sinTitle = rwmb_meta( 'yer_sintitle');

    // content
    $sincontent = rwmb_meta('yer_sincontent');
    
?>
<!-- Start Varia titles -->
<div class="boxes-full">
    <div class="boxes-padding fullpadding">
        <h1><?php if (yer_get_meta('variatitle', 'type=text')) { echo yer_get_meta('variatitle', 'type=text'); } ?></h1>
    </div>
    <span class="box-arrow"></span>
</div>
<!-- End Varia titles -->

<div class="boxes-half boxes-first variaHeight">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('opmtitle')) echo yer_get_meta('opmtitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <li class="cvLabel"><a><?php echo $rijTitle; ?></a></li>
                    <?php foreach ($rijcontent as $content) { ?>
                        <li class="cvContent"><a><?php echo $content; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>

                    <li class="cvLabel"><a><?php echo $sinTitle; ?></a></li>
                    <?php foreach ($sincontent as $content) { ?>
                        <li class="cvContent"><a><?php echo $content; ?></a></li>
                    <?php } ?>
                    <li class="divider"></li>
                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
<div class="boxes-half boxes-half-last variaHeight">
    <div class="boxes-padding">
        <div class="bti">
            <div class="cv-titles"><?php if (yer_get_meta('reftitle')) echo yer_get_meta('reftitle'); ?></div>
            <div class="cv-text cvbody">
                <ul>
                    <?php for ($i=0; $i < $length; $i++) { ?>
                        <li class="cvLabel"><a><?php echo $reflabels[$i]; ?></a></li>
                        <li class="cvContent"><a><?php echo $refcontent[$i]; ?></a></li>
                        <li class="divider"></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        
    </div>
    <span class="box-arrow"></span>
</div>
</div>
<!-- End Experiences -->