<?php /** Template name: Comunicação **/ ?>

<?php load_component('header'); ?>
<?php

$play = '<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" viewBox="0 0 120 120" fill="none">
<rect width="120" height="120" rx="60" fill="#A7CC97"/>
<path d="M47 74.7141V44.2655C47 39.6751 51.9448 36.785 55.9444 39.0377L81.6631 53.5229C85.6383 55.7618 85.7592 61.4426 81.8828 63.8486L56.1642 79.8119C52.1673 82.2927 47 79.4183 47 74.7141Z" fill="white"/>
</svg>';

$close = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M2.75509 0.891775C2.26562 0.399954 1.46954 0.399954 0.980073 0.891775C0.493911 1.38027 0.493911 2.16981 0.980072 2.65831L6.2457 7.94924L0.879042 13.3417C0.39288 13.8302 0.39288 14.6197 0.879042 15.1082C1.36851 15.6 2.16459 15.6 2.65406 15.1082L8.01226 9.72428L13.3459 15.0836C13.8354 15.5754 14.6315 15.5754 15.121 15.0836C15.6071 14.5951 15.6071 13.8056 15.121 13.3171L9.77881 7.94924L15.0199 2.68294C15.5061 2.19444 15.5061 1.40491 15.0199 0.916407C14.5305 0.424586 13.7344 0.424587 13.2449 0.916408L8.01226 6.1742L2.75509 0.891775Z" fill="white"></path>
</svg>';


$url_video = 'https://www.youtube.com/watch?v=EyYb1zPeUII&t';
$url_tumbnail = get_template_directory_uri() . "/assets/img/home/thumb.webp";
$embedUrl = convertToEmbedUrl($url_video);
$urlVideo = 'https://www.youtube.com/watch?v=EyYb1zPeUII&t';
$boolean_video = 'sim'; //true or false


if ($boolean_video == 'sim') {
    $type = 'iframe';
    $video = $embedUrl;
} else {
    $type = 'upload';
    $video = $urlVideo;
}

?>

<main class="view view__comunication">

    <div class="video py-40 pt-125__lg">
        <div class="box-video"
            style="background: url('<?= $url_tumbnail; ?>') no-repeat center; background-size: cover;">
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