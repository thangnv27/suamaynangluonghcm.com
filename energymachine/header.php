<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta http-equiv="Cache-control" content="no-store; no-cache"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="author" content="ppo.vn" />
        <meta name="robots" content="index, follow" /> 
        <meta name="googlebot" content="index, follow" />
        <meta name="bingbot" content="index, follow" />
        <meta name="geo.region" content="VN" />
        <meta name="geo.position" content="14.058324;108.277199" />
        <meta name="ICBM" content="14.058324, 108.277199" />
        <meta property="fb:app_id" content="<?php echo get_option(SHORT_NAME . "_appFBID"); ?>" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-theme.css" rel="stylesheet" />
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/dlmenu.css"/>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.css" />
        <?php if(is_page(get_option(SHORT_NAME . "_pageHistoryOrder"))): ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/colorbox/colorbox.css" />
        <?php endif; ?>
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/common.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/wp-default.css" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" /> 
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            var siteUrl = "<?php bloginfo('siteurl'); ?>";
            var themeUrl = "<?php bloginfo('stylesheet_directory'); ?>";
            var no_image_src = themeUrl + "/images/no_image_available.jpg";
            var ajaxurl = '<?php echo admin_url('admin-ajax.php') ?>';
            var cartUrl = "<?php echo get_page_link(get_option(SHORT_NAME . "_pageCartID")); ?>";
            var checkoutUrl = "<?php echo get_page_link(get_option(SHORT_NAME . "_pageCheckoutID")); ?>";
            var lang = "<?php echo getLocale(); ?>";
        </script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr.js"></script>
        <?php
        if (is_singular())
            wp_enqueue_script('comment-reply');

        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="ajax_loading" style="display: none;z-index: 99999" class="ajax-loading-block-window">
            <div class="loading-image"></div>
        </div>
        <!--Alert Message-->
        <div id="nNote" class="nNote" style="display: none;"></div>
        <!--END: Alert Message-->
        <div class="main-header container">
            <div class="row pdt30 pdb30">
                <div class="col-xs-6 col-sm-5 col-md-3 logo-header">
                    <a title="<?php bloginfo('sitename'); ?>" itemprop="url" href="<?php bloginfo('siteurl'); ?>">
                        <img class="logo" title="<?php bloginfo('sitename'); ?>" alt="<?php bloginfo('sitename'); ?>" src="<?php echo get_option('sitelogo'); ?>" itemprop="logo" />
                    </a>
                </div>  <!-- end col-xs-12 col-sm-6 col-md-3 -->
                <div class="col-xs-6 col-sm-7 col-md-9">
                    <div class="header-user t_right">
                        <span class="bold font22" style="color: #6ba40c;">Trung Tâm Bảo Hành Bảo Trì Sửa Chữa Máy Nước Nóng Năng Lượng Mặt Trời</span>
                    </div>
                    <nav id="navigation">
                        <?php
                        wp_nav_menu(array(
                            'container' => '',
                            'theme_location' => 'primary',
                            'menu_class' => 'fancy-rollovers wf-mobile-hidden',
                            'menu_id' => 'main-nav',
                        ));
                        ?>
                        <a href="javascript://" rel="nofollow" id="mobile-menu">
                            <span class="menu-open">DANH MỤC</span>
                            <span class="menu-close">ĐÓNG</span>
                            <span class="menu-back">QUAY LẠI</span>
                            <span class="wf-phone-visible">&nbsp;</span>
                        </a>
                        <div class="clearfix"></div>
                    </nav>
                <div class="clearfix"></div>
                </div>
            </div> 
        </div> <!-- row-->

    </div>
    <div class="container">
        <div class="mobile-search-form">
            <form action="<?php echo home_url(); ?>" id="searchform" role="search">
                <input type="text" placeholder="Tìm kiếm theo sản phẩm, danh mục hay nhãn hàng mong muốn" name="s" value="" class="form-control" />
                <button class="btn btn-default tim_but" type="submit"><span class="glyphicon glyphicon-search"></span><span class="ts">Tìm kiếm</span></button> 
            </form>
        </div>
        <div class="main_menu_header">
            <?php wp_nav_menu(array(
                    'container' => '',
                    "theme_location" => "primary"
                )); ?>
        </div>
