<?php /* Template Name: Home Page */ ?>
<?php get_header() ?>


<?php $hero = get_field('hero') ?>
<section class="hero">
    <div class="wrapper">
        <div class="content">
            <h1 class="main-title"><?= $hero['main_title'] ?></h1>
            <p class="main-description"><?= $hero['main_deckreption'] ?></p>
            <a href="<?= $hero['main_button']['url']?>" class="primary-button"><?= $hero['main_button']['title']?></a>
        </div>
    </div>
</section>


<?php $brands = get_field('brands') ?>
<section class="brands">
    <div class="wrapper-brands">
        <div class="content-brands">
            <p class="main-description-brands"><?= $brands['main_title'] ?></p>
            <div class="brands-items">
                <?php foreach($brands['main_brands'] as $brand):?>
                    <div class="brand-item">
                        <img src="<?= $brand['brand'] ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<?php $chekings = get_field('chekings') ?>
<section class="chekings">
    <div class="wrapper-chekings">
        <div class="content-chekings">
            <div class="left-section">
            <h2 class="main-title-chekings"><?= $chekings['main_title'] ?></h2>
            <p class="main-description-chekings"><?= $chekings['main_description'] ?></p>
            </div>
        </div>
        <div class="chekings-items">
            <ul class="right-section">
            <?php foreach($chekings['items'] as $cheking):?>
                <li class="cheking-item">
                    <img src="<?= $cheking['item_icon'] ?>" alt="">
                    <span class="cheking-title"><?= $cheking['item_title'] ?></span>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<?php get_footer() ?>
