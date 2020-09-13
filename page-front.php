
<header id="wrapper_header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <?php if ($logo): ?>

                <img src="<?php echo $logo; ?>" alt="Logo site" class="img-responsive logo">
            <?php endif; ?>

            <h1><?php echo $title; ?></h1>
            <?php if (!empty($section[ 'header' ])): ?>

                <div class="col-md-12">
                    <?php echo $section[ 'header' ]; ?>

                </div>
            <?php endif; ?>

            </div>
        </div>
    </div>
</header>
<nav id="nav_main" role="navigation">
    <div class="container">
        <div class="row">
            <ul>
                <li>
                    <span id="toogle_menu"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> Menu</span>
                    <?php echo $section[ 'main_menu' ]; ?>

                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="wrapper_main">
    <div class="container">
        <div class="row">
            <?php if (!empty($section[ 'messages' ])): ?>

            <div class="col-md-12">
                <?php echo $section[ 'messages' ]; ?>

            </div>
            <?php endif; ?>
            <?php if (!empty($section[ 'sidebar' ])): ?>

            <div class="col-md-4">
                <?php echo $section[ 'sidebar' ]; ?>

            </div>
            <?php endif; ?>
            <?php if (!empty($section[ 'sidebar' ])): ?>

            <div class="col-md-8">
            <?php else: ?>

            <div class="col-sm-12">
            <?php endif; ?>
            <?php if (!empty($section[ 'content_header' ])): ?>

                <?php echo $section[ 'content_header' ]; ?>
            <?php endif; ?>

            <?php echo $section[ 'content' ]; ?>
            <?php if (!empty($section[ 'content_footer' ])): ?>

                <?php echo $section[ 'content_footer' ]; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<footer id="wrapper_footer" role="contentinfo">
    <?php if (!empty($section[ 'footer_first' ]) || !empty($section[ 'footer_second' ])): ?>

    <div id="pre_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php if (!empty($section[ 'footer_first' ])): ?>

                        <?php echo $section[ 'footer_first' ]; ?>
                    <?php endif; ?>

                </div>
                <div class="col-md-6">
                    <?php if (!empty($section[ 'footer_second' ])): ?>

                        <?php echo $section[ 'footer_second' ]; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($section[ 'footer' ])): ?>

                    <?php echo $section[ 'footer' ]; ?>
                <?php endif; ?>

                <?php echo $section[ 'second_menu' ]; ?>

            </div>
        </div>
    </div>
</footer>