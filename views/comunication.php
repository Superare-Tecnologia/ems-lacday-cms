<?php /** Template name: Comunicação **/ ?>

<?php load_component('header'); ?>
<?php

    $play = '<svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="57" cy="57" r="57" fill="white" fill-opacity="0.3"/>
        <path d="M76 57L46.75 74.3205L46.75 39.6795L76 57Z" fill="white" fill-opacity="0.6"/>
    </svg>';

    $close = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <path d="M2.75509 0.891775C2.26562 0.399954 1.46954 0.399954 0.980073 0.891775C0.493911 1.38027 0.493911 2.16981 0.980072 2.65831L6.2457 7.94924L0.879042 13.3417C0.39288 13.8302 0.39288 14.6197 0.879042 15.1082C1.36851 15.6 2.16459 15.6 2.65406 15.1082L8.01226 9.72428L13.3459 15.0836C13.8354 15.5754 14.6315 15.5754 15.121 15.0836C15.6071 14.5951 15.6071 13.8056 15.121 13.3171L9.77881 7.94924L15.0199 2.68294C15.5061 2.19444 15.5061 1.40491 15.0199 0.916407C14.5305 0.424586 13.7344 0.424587 13.2449 0.916408L8.01226 6.1742L2.75509 0.891775Z" fill="white"></path>
    </svg>';

    $videoACF = get_field('video');
    $isYoutube = $videoACF['is_youtube'];
    $youtube = convertToEmbedUrl($videoACF['youtube']);
    $thumbnail = get_image_props($videoACF['thumbnail_do_video'], '', 'full', false, true);

    $type = ($isYoutube == 'sim') ? 'iframe' : 'upload';
    $video = ($isYoutube == 'sim') ? $youtube : $videoACF['video']['url'];


?>

<main class="view view__comunication">



    <div class="video pt-90 pt-125__md pt-125__lg">
        <div class="box-video">
            <img src="<?= $thumbnail->url; ?>" alt="<?= $thumbnail->alt; ?>" width="<?= $thumbnail->width; ?>"
                height="<?= $thumbnail->height; ?>">
            <div class="play" data-src="<?= $video; ?>" data-type="<?= $type; ?>">
                <?= $play; ?>
            </div>
        </div>
    </div>


    <div class="popup-video">
        <div class="close">
            <div class="flex--force flex--aic flex--jcc flex--gap-7">
                <?= $close; ?>
                <span class="ff-brevia color--white fs-16 fw-medium">fechar</span>
            </div>
        </div>
        <div class="container">
            <div class="video">
            </div>
        </div>
    </div>


</main>

<?php load_component('footer') ?>