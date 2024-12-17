<?php load_component('header') ?>

<main class="view view__not-found relative background--white">
    <section class=" content mt-60 container">
        <h1 class= ff-brevia fw-medium fs-42 fs-42__lg d-block mb-24 color--primary-blue">Ops!
            Algo deu errado.</h1>
        <p class= ff-brevia fs-16 fs-16__lg mb-24 color--primary-navy">Infelizmente, não conseguimos encontrar a
            página
            que você está procurando. Isso pode ter acontecido porque o link está incorreto, a página foi movida ou
            simplesmente deixou de existir.</p>
        <p class= ff-brevia fs-16 fs-16__lg mb-24 color--primary-navy">Mas não se preocupe! Você pode voltar para
            a
            nossa
            página inicial clicando no botão abaixo:</p>

        <a class= ff-brevia fs-18__lg" href="/"> Ir para Home
            <?php inc('/assets/vectors/arrows.svg') ?>
        </a>
    </section>
    <!-- <div class="img__container"> -->
    <img src="<?= get_template_directory_uri(); ?>/assets/img/confeiteira.webp " alt="">
    <!-- </div> -->
</main>

<?php load_component('footer') ?>