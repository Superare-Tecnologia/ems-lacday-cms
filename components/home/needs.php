<section class="needs background--secondary-blue pt-60__md pb-30__md py-40 pb-30__lg pt-80__lg">

    <h2 class='ff-brevia px-20 fs-32__lg fs-28 color--white fw-bold tt-uppercase ta-center'>Embalagens para
        atender <span> todas as necessidades</span>
    </h2>
    <aside class="container needs px-20 px-20__md">
        <div id="keen-slider" class="w-full keen-slider needs__slider">
            <?php if (have_rows('needs')): ?>
                <?php while (have_rows('needs')):
                    the_row();
                    $image = get_image_props(get_sub_field('imagem'), '', 'full', false, true);
                    $description = get_sub_field('description');
                    ?>
                    <div class="keen-slider__slide needs__content">
                        <img src="<?= $image->url ?>" alt="<?= $image->alt ?>" class="needs__image">
                        <aside class="needs__description color--white ff-brevia lh-150 fs-16 fs-28__lg">
                            <?= $description ?>
                        </aside>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div id="needs-dots" class="needs__dots"></div>
    </aside>
</section>
<script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = initSlider("#keen-slider");
        const dots = createDots(slider, "needs-dots");

        slider.on("created", () => updateDots(slider, dots));
        slider.on("slideChanged", () => updateDots(slider, dots));
    });

    function initSlider(sliderSelector) {
        return new KeenSlider(sliderSelector, {
            loop: true,
            slides: {
                perView: 1,
                spacing: 16,
            },
        });
    }

    function createDots(slider, dotsContainerId) {
        const dotsContainer = document.getElementById(dotsContainerId);
        const dots = [];

        slider.track.details.slides.forEach((_slide, idx) => {
            const dot = document.createElement("div");
            dot.classList.add("needs__dot");

            if (idx === 0) dot.classList.add("active");

            dot.addEventListener("click", () => slider.moveToIdx(idx));
            dotsContainer.appendChild(dot);
            dots.push(dot);
        });

        return dots;
    }

    function updateDots(slider, dots) {
        const activeIndex = slider.track.details.rel;
        dots.forEach((dot, idx) => {
            dot.classList.toggle("active", idx === activeIndex);
        });
    }
</script>