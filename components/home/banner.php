<section class="carousel mt-100__md mt-100 mt-135__lg">
    <div id="banner-slider" class="w-full keen-slider carousel__slider">
        <picture class="keen-slider__slide">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/img/home/banner.webp"
                media="(min-width: 767px) and (max-width: 1400px)">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/img/home/banner_mobile.webp"
                media="(max-width: 767px)">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/home/banner.webp" alt="Imagem 1"
                class="carousel__image">
        </picture>


        <picture class="keen-slider__slide">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/img/home/banner.webp"
                media="(min-width: 767px) and (max-width: 1400px)">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/img/home/banner_mobile.webp"
                media="(max-width: 767px)">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/home/banner.webp" alt="Imagem 1"
                class="carousel__image">
        </picture>

        <picture class="keen-slider__slide">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/img/home/banner.webp"
                media="(min-width: 767px) and (max-width: 1400px)">
            <source srcset="<?= get_template_directory_uri(); ?>/assets/img/home/banner_mobile.webp"
                media="(max-width: 767px)">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/home/banner.webp" alt="Imagem 1"
                class="carousel__image">
        </picture>
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
                spacing: 0,
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