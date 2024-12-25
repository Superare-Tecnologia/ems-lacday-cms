<?php
/** Template name: Dùvidas Frequentes (SAC) **/
?>

<?php load_component('header'); ?>

<main class="view view__sac background--secondary-blue">

    <section class="container flex--force flex--gap-60 duvidas py-90 py-125__lg py-125__md">
        <ul
            class="duvidas__links py-90__lg py-90__md py-60 ff-brevia fw-medium fs-20__lg color--white flex--force flex--column flex--gap-24">
            <li data-id="uso" class="active">Modo de uso</li>
            <li data-id="efeitos">Efeitos</li>
            <li data-id="restricao">Restrições</l>
            <li data-id="producao">Produção</li>
            <li data-id="intolerancia">Intolerância</li>
        </ul>
        <article class="py-90__lg py-90__md pt-60 px-20 px-20__md duvidas__content">
            <h4 class="color--white ff-brevia fw-bold fs-26 ta-center fs-32__lg"> Olá, aqui você encontra as dúvidas
                mais
                comuns: </h4>
            <ul class="duvidas__links__mobile ff-brevia fs-16">
                <li data-id="uso" class="active">Modo de uso</li>
                <li data-id="efeitos">Efeitos</li>
                <li data-id="restricao">Restrições</l>
                <li data-id="producao">Produção</li>
                <li data-id="intolerancia">Intolerância</li>
            </ul>
            <ul id="uso" class="pt-50__lg pt-30__md pt-20">
                <?php if (have_rows('sac_uso')): ?>
                    <?php while (have_rows('sac_uso')):
                        the_row(); ?>
                        <?php
                        $post_related = get_sub_field('post_related');
                        $post_excerpt = '';
                        $post_title = '';
                        if ($post_related && isset($post_related['url'])) {
                            $url = $post_related['url'];
                            $post_id = url_to_postid($url);

                            if ($post_id && get_post_type($post_id) === 'post') {
                                $post_title = get_the_title($post_id);
                                $post_excerpt = get_the_excerpt($post_id);
                            }
                        }
                        ?>
                        <li class="duvidas__accordion-container">
                            <button class="ff-brevia color--white lh-120 fw-semibold fs-20__lg fs-16 duvidas__accordion">
                                <p><?= get_sub_field('question'); ?></p>
                            </button>
                            <div class="duvidas__panel color--white lh-150 ff-brevia fs-14 fs-16__lg">
                                <p> <?= get_sub_field('answer'); ?> </p>
                                <div class="duvidas__panel__more">
                                    <p class='ff-brevia fs-20__lg fw-bold color--white pb-16__lg'>Veja mais no Mundo Lac</p>
                                    <?php if (!empty($post_id)): ?>
                                        <a href="<?= esc_url($url); ?>" target="_blank">
                                            <h2 class="ff-brevia fs-20__lg fs-14 fw-bold"><?= esc_html($post_title); ?></h2>
                                            <p class="ff-brevia fs-14 fs-16__lg"><?= esc_html($post_excerpt); ?> LER MAIS.</p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>
            <ul id="efeitos" class="pt-50__lg pt-30__md pt-20 flex--none">
                <?php if (have_rows('sac_efeitos')): ?>
                    <?php while (have_rows('sac_efeitos')):
                        the_row(); ?>
                        <?php
                        $post_related = get_sub_field('post_related');
                        $post_excerpt = '';
                        $post_title = '';
                        if ($post_related && isset($post_related['url'])) {
                            $url = $post_related['url'];
                            $post_id = url_to_postid($url);

                            if ($post_id && get_post_type($post_id) === 'post') {
                                $post_title = get_the_title($post_id);
                                $post_excerpt = get_the_excerpt($post_id);
                            }
                        }
                        ?>
                        <li class="duvidas__accordion-container">
                            <button class="ff-brevia color--white lh-120 fw-semibold fs-20__lg fs-16 duvidas__accordion">
                                <p><?= get_sub_field('question'); ?></p>
                            </button>
                            <div class="duvidas__panel color--white lh-150 ff-brevia fs-14 fs-16__lg">
                                <p> <?= get_sub_field('answer'); ?> </p>
                                <div class="duvidas__panel__more">
                                    <p class='ff-brevia fs-20__lg fw-bold color--white pb-16__lg'>Veja mais no Mundo Lac</p>
                                    <?php if (!empty($post_id)): ?>
                                        <a href="<?= esc_url($url); ?>" target="_blank">
                                            <h2 class="ff-brevia fs-20__lg fs-14 fw-bold"><?= esc_html($post_title); ?></h2>
                                            <p class="ff-brevia fs-14 fs-16__lg"><?= esc_html($post_excerpt); ?> LER MAIS.</p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>
            
            <ul id="efeitos" class="pt-50__lg pt-30__md pt-20 flex--none">
                <?php if (have_rows('sac_efeitos')): ?>
                    <?php while (have_rows('sac_efeitos')):
                        the_row(); ?>
                        <?php
                        $post_related = get_sub_field('post_related');
                        $post_excerpt = '';
                        $post_title = '';
                        if ($post_related && isset($post_related['url'])) {
                            $url = $post_related['url'];
                            $post_id = url_to_postid($url);

                            if ($post_id && get_post_type($post_id) === 'post') {
                                $post_title = get_the_title($post_id);
                                $post_excerpt = get_the_excerpt($post_id);
                            }
                        }
                        ?>
                        <li class="duvidas__accordion-container">
                            <button class="ff-brevia color--white lh-120 fw-semibold fs-20__lg fs-16 duvidas__accordion">
                                <p><?= get_sub_field('question'); ?></p>
                            </button>
                            <div class="duvidas__panel color--white lh-150 ff-brevia fs-14 fs-16__lg">
                                <p> <?= get_sub_field('answer'); ?> </p>
                                <div class="duvidas__panel__more">
                                    <p class='ff-brevia fs-20__lg fw-bold color--white pb-16__lg'>Veja mais no Mundo Lac</p>
                                    <?php if (!empty($post_id)): ?>
                                        <a href="<?= esc_url($url); ?>" target="_blank">
                                            <h2 class="ff-brevia fs-20__lg fs-14 fw-bold"><?= esc_html($post_title); ?></h2>
                                            <p class="ff-brevia fs-14 fs-16__lg"><?= esc_html($post_excerpt); ?> LER MAIS.</p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>

            <ul id="restricao" class="pt-50__lg pt-30__md pt-20 flex--none">
                <?php if (have_rows('sac_restricao')): ?>
                    <?php while (have_rows('sac_restricao')):
                        the_row(); ?>
                        <?php
                        $post_related = get_sub_field('post_related');
                        $post_excerpt = '';
                        $post_title = '';
                        if ($post_related && isset($post_related['url'])) {
                            $url = $post_related['url'];
                            $post_id = url_to_postid($url);

                            if ($post_id && get_post_type($post_id) === 'post') {
                                $post_title = get_the_title($post_id);
                                $post_excerpt = get_the_excerpt($post_id);
                            }
                        }
                        ?>
                        <li class="duvidas__accordion-container">
                            <button class="ff-brevia color--white lh-120 fw-semibold fs-20__lg fs-16 duvidas__accordion">
                                <p><?= get_sub_field('question'); ?></p>
                            </button>
                            <div class="duvidas__panel color--white lh-150 ff-brevia fs-14 fs-16__lg">
                                <p> <?= get_sub_field('answer'); ?> </p>
                                <div class="duvidas__panel__more">
                                    <p class='ff-brevia fs-20__lg fw-bold color--white pb-16__lg'>Veja mais no Mundo Lac</p>
                                    <?php if (!empty($post_id)): ?>
                                        <a href="<?= esc_url($url); ?>" target="_blank">
                                            <h2 class="ff-brevia fs-20__lg fs-14 fw-bold"><?= esc_html($post_title); ?></h2>
                                            <p class="ff-brevia fs-14 fs-16__lg"><?= esc_html($post_excerpt); ?> LER MAIS.</p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>

            <ul id="producao" class="pt-50__lg pt-30__md pt-20 flex--none">
                <?php if (have_rows('sac_producao')): ?>
                    <?php while (have_rows('sac_producao')):
                        the_row(); ?>
                        <?php
                        $post_related = get_sub_field('post_related');
                        $post_excerpt = '';
                        $post_title = '';
                        if ($post_related && isset($post_related['url'])) {
                            $url = $post_related['url'];
                            $post_id = url_to_postid($url);

                            if ($post_id && get_post_type($post_id) === 'post') {
                                $post_title = get_the_title($post_id);
                                $post_excerpt = get_the_excerpt($post_id);
                            }
                        }
                        ?>
                        <li class="duvidas__accordion-container">
                            <button class="ff-brevia color--white lh-120 fw-semibold fs-20__lg fs-16 duvidas__accordion">
                                <p><?= get_sub_field('question'); ?></p>
                            </button>
                            <div class="duvidas__panel color--white lh-150 ff-brevia fs-14 fs-16__lg">
                                <p> <?= get_sub_field('answer'); ?> </p>
                                <div class="duvidas__panel__more">
                                    <p class='ff-brevia fs-20__lg fw-bold color--white pb-16__lg'>Veja mais no Mundo Lac</p>
                                    <?php if (!empty($post_id)): ?>
                                        <a href="<?= esc_url($url); ?>" target="_blank">
                                            <h2 class="ff-brevia fs-20__lg fs-14 fw-bold"><?= esc_html($post_title); ?></h2>
                                            <p class="ff-brevia fs-14 fs-16__lg"><?= esc_html($post_excerpt); ?> LER MAIS.</p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>

            <ul id="intolerancia" class="pt-50__lg pt-30__md pt-20 flex--none">
                <?php if (have_rows('sac_intolerancia')): ?>
                    <?php while (have_rows('sac_intolerancia')):
                        the_row(); ?>
                        <?php
                        $post_related = get_sub_field('post_related');
                        $post_excerpt = '';
                        $post_title = '';
                        if ($post_related && isset($post_related['url'])) {
                            $url = $post_related['url'];
                            $post_id = url_to_postid($url);

                            if ($post_id && get_post_type($post_id) === 'post') {
                                $post_title = get_the_title($post_id);
                                $post_excerpt = get_the_excerpt($post_id);
                            }
                        }
                        ?>
                        <li class="duvidas__accordion-container">
                            <button class="ff-brevia color--white lh-120 fw-semibold fs-20__lg fs-16 duvidas__accordion">
                                <p><?= get_sub_field('question'); ?></p>
                            </button>
                            <div class="duvidas__panel color--white lh-150 ff-brevia fs-14 fs-16__lg">
                                <p> <?= get_sub_field('answer'); ?> </p>
                                <div class="duvidas__panel__more">
                                    <p class='ff-brevia fs-20__lg fw-bold color--white pb-16__lg'>Veja mais no Mundo Lac</p>
                                    <?php if (!empty($post_id)): ?>
                                        <a href="<?= esc_url($url); ?>" target="_blank">
                                            <h2 class="ff-brevia fs-20__lg fs-14 fw-bold"><?= esc_html($post_title); ?></h2>
                                            <p class="ff-brevia fs-14 fs-16__lg"><?= esc_html($post_excerpt); ?> LER MAIS.</p>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>
        </article>
    </section>

</main>

<?php load_component('footer') ?>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const link_mobile = document.querySelectorAll('.duvidas__links__mobile li[data-id]');
        const link_desktop = document.querySelectorAll('.duvidas__links li[data-id]');
        const links = [...link_desktop, ...link_mobile];
        const sections = document.querySelectorAll('.duvidas__content ul[id]');

        links.forEach(link => {
            link.addEventListener('click', () => {
                const targetId = link.getAttribute('data-id');


                links.forEach(item => item.classList.remove('active'));

                link.classList.add('active');

                sections.forEach(section => {
                    section.style.display = 'none';
                });

                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }
            });
        });
    });

</script>