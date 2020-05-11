<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=content-width">
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <aside class="mdc-drawer mdc-drawer--dismissible">
        <div class="mdc-drawer__content">
            <div class="mdc-list">
                <a class="mdc-list-item mdc-list-item--activated" href="#" aria-current="page">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>
                    <span class="mdc-list-item__text">Inbox</span>
                </a>
                <a class="mdc-list-item" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">send</i>
                    <span class="mdc-list-item__text">Outgoing</span>
                </a>
                <a class="mdc-list-item" href="#">
                    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">drafts</i>
                    <span class="mdc-list-item__text">Drafts</span>
                </a>
            </div>
        </div>
    </aside>

    <div class="mdc-drawer-app-content">
        <header class="mdc-top-app-bar app-bar" id="app-bar">
            <div class="mdc-top-app-bar__row">
                <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                    <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button">menu</button>
                    <span class="mdc-top-app-bar__title">Dismissible Drawer</span>
                </section>
            </div>
        </header>

        <main class="main-content" id="main-content">
            <div class="mdc-top-app-bar--fixed-adjust">
                App Content
            </div>
        </main>
    </div>
</body>

<?php wp_footer(); ?>

</html>