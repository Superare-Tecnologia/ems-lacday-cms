<?php
global $component_customClass;

$menuItems = array(
    array(
        'name' => "Produto",
        "link" => '/'
    ),
    array(
        'name' => "Mundo Lac",
        "link" => 'mundo'
    ),
    array(
        'name' => "Comunicação",
        "link" => 'comunicacao'
    ),
    array(
        'name' => "Programa LacLovers",
        "link" => 'programa'
    ),
    array(
        'name' => "Perguntas Frequentes",
        "link" => 'sac'
    ),
    array(
        'name' => "Fale Conosco",
        "link" => 'contato'
    )
)
    ?>

<?php
$title = get_the_title();
?>

<nav id="navbar" class="navbar w-full px-30 px-0__lg background--primary-blue" data-script="Navbar">

    <div class="container px-20">
        <div class="flex flex--force w-full flex--jcsb flex--aic flex--gap-45">
            <a href="<?php echo get_site_url() ?>">
                <img class="logo" src="<?= get_template_directory_uri(); ?>/assets/img/logo.webp" alt="">
            </a>

            <a class="menu__handler d-none__lg" href="javascript:void(0);">
                <span></span>
                <span></span>
                <span></span>
            </a>

            <ul class="items w-full flex--gap-25 flex flex--aic ff-brevia fs-16 fs-16__lg fw-bold color--white d-none__sm">
                <?php $count = 0;
                foreach ($menuItems as $item): ?>
                    <li class="item <?php echo $title == $item['name'] ? 'fw-bold active' : "fw-normal" ?> ">
                        <a href=<?php echo home_url() . '/' . $item['link'] ?>>
                            <?php echo $item['name'] ?></a>
                    </li>
                    <?php $count++;
                endforeach; ?>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar__mobile d-none__lg">

    <div class="nav-head flex--force flex--jcsb background--primary-blue">
        <span>
        <img class="logo" src="<?= get_template_directory_uri(); ?>/assets/img/logo.webp" alt="">
        </span>

        <a class="menu__handler" href="javascript:void(0);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
                <path d="M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
        </a>

    </div>

    <ul class="items background--primary-blue w-full ff-brevia fs-20 color--primary-navy">
        <?php foreach ($menuItems as $item): ?>
            <li class="item">
                <a class='ff-brevia fs-18 fw-medium color--white' href=<?php echo home_url() . '/' . $item['link'] ?>>
                    <?php echo $item['name'] ?></a>
            </li>
            <?php endforeach; ?>
    </ul>

    <div class="navbar__mobile-backdrop"></div>
</nav>