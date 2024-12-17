<?php
$icon_close = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M2.75509 0.891775C2.26562 0.399954 1.46954 0.399954 0.980073 0.891775C0.493911 1.38027 0.493911 2.16981 0.980072 2.65831L6.2457 7.94924L0.879042 13.3417C0.39288 13.8302 0.39288 14.6197 0.879042 15.1082C1.36851 15.6 2.16459 15.6 2.65406 15.1082L8.01226 9.72428L13.3459 15.0836C13.8354 15.5754 14.6315 15.5754 15.121 15.0836C15.6071 14.5951 15.6071 13.8056 15.121 13.3171L9.77881 7.94924L15.0199 2.68294C15.5061 2.19444 15.5061 1.40491 15.0199 0.916407C14.5305 0.424586 13.7344 0.424587 13.2449 0.916408L8.01226 6.1742L2.75509 0.891775Z" fill="white"/>
  </svg>';

?>

<div class="popup-video">
  <div class="popup-video_box">
    <span class="close-video top-5 right-4 text-white flex gap-4 justify-end absolute top-4 right-4 cursor-pointer font-bold">
      <?= $icon_close; ?>
      FECHAR
    </span>
    <div class="video-iframe"></div>
  </div>
</div>