<section class="carousel mt-135__md mt-100 mt-135__lg">

    <div id="banner-slider" class="w-full keen-slider carousel__slider">
        <?php if (have_rows('header')): ?>
            <?php while (have_rows('header')):
                the_row();
                $image_desktop = get_image_props(get_sub_field('banner_desktop'), '', 'full', false, true);
                $image_mobile = get_image_props(get_sub_field('banner_mobile'), '', 'full', false, true);
                ?>
                <picture class="keen-slider__slide">
                    <source srcset="<?= $image_desktop->url ?>" media="(min-width: 767px) and (max-width: 1400px)">
                    <source srcset="<?= $image_mobile->url ?>" media="(max-width: 767px)">
                    <img src="<?= $image_desktop->url ?>" alt="<?= $image_desktop->alt ?>" class="carousel__image">
                </picture>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div id="carousel-dots" class="carousel__dots"></div>
</section>

<script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = initSlider("#banner-slider");
        const dots = createDots(slider, "carousel-dots");

        slider.on("created", () => updateDots(slider, dots));
        slider.on("slideChanged", () => updateDots(slider, dots));
    });

    function initSlider(sliderSelector) {
        return new KeenSlider(sliderSelector, {
            loop: true,
            slides: {
                perView: 1,
                spacing: 10,
            },
        });
    }

    function createDots(slider, dotsContainerId) {
        const dotsContainer = document.getElementById(dotsContainerId);
        const dots = [];

        slider.track.details.slides.forEach((_slide, idx) => {
            const dot = document.createElement("div");
            dot.classList.add("carousel__dot");

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