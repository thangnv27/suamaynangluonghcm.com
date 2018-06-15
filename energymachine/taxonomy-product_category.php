<?php get_header(); ?>
<div class="row cat_sanpham">
    <div class="col-xs-12 col-md-3 filter-cost" id="slidebar">
        <?php get_sidebar() ?>  
    </div>
    <div class="col-xs-12 col-md-9" style="margin:10px 0">
        <div id="content" role="main">
            <div class="breadcrumb">
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </div>
            <h1 class="catproduc-title">
                <span class="glyphicon glyphicon-tasks"></span>
                <?php single_cat_title(); ?>
            </h1>
            <div class="term-description"><p><?php echo category_description();?></p></div>
            <div class="navbar" style="max-height:70px; margin-bottom:0"></div>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                <div class="col-xs-6 col-md-4 motsanpham">
                    <div class="short-product">
                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" style="border:none; box-shadow:none" class="thumbnail">
                            <img class="img-rounded" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url('600x420'); ?>" />
                        </a>
                        <div class="caption">
                            <h2><a itemprop="name" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            <div class="post-price">
                                <div class="price">
                                    <span class="amount" itemprop="price"><?php echo number_format(floatval(get_post_meta(get_the_ID(), "gia_moi", true)), 0, ',', '.'); ?> ₫</span>          
                                </div>
                                <div class="salepercent"><?php echo get_post_meta(get_the_ID(), "ma_sp", true) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>  
                <?php getpagenavi();?> 
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>