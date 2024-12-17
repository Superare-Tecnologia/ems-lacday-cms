<section class="drugstore background--secondary-blue">
    <article class="container h-full flex--force flex--column flex--aic pt-40 py-80__md py-80__lg">
        <h2 class="fw-bold fs-18__lg fs-20 ta-center px-40 ff-brevia color--white mb-20__md mb-20 mb-30__lg">Confira nas
            farmácias disponíveis abaixo:
        </h2>

        <ul class="flex--force drugstore__container flex--jcc px-20 pb-80 flex--wrap flex--gap-20">
            <?php if (have_rows('drugstore')): ?>
                <?php while (have_rows('drugstore')):
                    the_row();
                    $link = get_sub_field('link');
                    $image = get_image_props(get_sub_field('logo'), '', 'full', false, true);
                    ?>
                    <a href="<?= $link ?>">
                        <li class="drugstore__content background--white flex--force flex--aic flex--jcc">
                            <img src="<?= $image->url ?>" alt="<?= $image->alt ?>" />
                        </li>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </article>
</section>