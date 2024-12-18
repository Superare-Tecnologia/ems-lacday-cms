<section class="container benefits background--white py-40 px-20 py-40__md px-20__md py-100__lg">
    <h2 class="ff-brevia fw-bold fs-42__lg fs-28 tt-uppercase color--secondary-blue ta-center mb-40__md mb-24 mb-40__lg">
        Benefícios Lacday</h2>
    <ul class="benefits__container">
        <?php if (have_rows('benefits')): ?>
            <?php while (have_rows('benefits')):
                the_row();
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $image = get_image_props(get_sub_field('image'), '', 'full', false, true);
                ?>
                <li class="benefits__content">
                    <img src="<?= $image->url; ?>" alt="<?= $image->alt ?>">
                    <h2 class="ff-brevia fs-20__lg fs-20 fw-bold py-12__lg py-12__md py-20 color--secondary-blue">
                        <?= $title ?>
                    </h2>
                    <p class="ff-brevia fs-16__lg fw-medium lh-150 color--secondary-blue"> <?= $description ?></p>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</section>