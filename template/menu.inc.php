<div class="r-menu-overlay">
    <div class="r-menu-overlay__top">
        <div class="r-menu-overlay__close js-close-menu">
            <span class="c-close-btn">&nbsp;</span>
        </div>
    </div>

    <div class="c-overlay-branding">
        <div class="c-overlay-branding__title"><?php site_name(); ?></div>

        <div class="c-overlay-branding__logo">
            <a class="c-overlay-branding__link" href="index.php">
                <img src="../dist/images/logo.png" alt="">
            </a>
        </div>

    </div>

    <div class="r-menu-overlay__list">
        <ul class="r-menu-overlay__items">
            <?php nav_menu(); ?>
        </ul>
    </div>

</div>