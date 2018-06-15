<?php get_header(); ?>
<div class="row chitietsanphamfull">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </div>
        <div id="content" role="main">
            <?php while (have_posts()) : the_post(); ?>
            <div class="row chitietsanpham_full">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="images">
                        <a title="<?php the_title(); ?>" class="woocommerce-main-image zoom" href="<?php get_image_url(); ?>" rel="example_group">
                            <img title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="attachment-shop_single wp-post-image img-responsive" src="<?php get_image_url(); ?>"></a>
                        <div class="thumbnails columns-3">
                            <?php
                            $images = rwmb_meta('product_hinhanh', 'type=image_advanced');
                            foreach ($images as $image) {
                                ?>
                            <a href="<?php echo $image['full_url']; ?>" rel="example_group">
                                <img class="attachment-shop_thumbnail img-thumbnail img-responsive" width="80" height="80" src="<?php echo $image['full_url']; ?>"   />
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h1 itemprop="name" class="mt0"><?php the_title(); ?></h1>
                    <div class="product_meta mb10">
                        <?php 
                        $ma_sp = get_post_meta(get_the_ID(), "ma_sp", true);
                        if(!empty($ma_sp)):
                        ?>
                        <p>
                            <span itemprop="productID">Mã sản phẩm: <span class="sku"><b><?php echo $ma_sp; ?></b></span></span> 
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="giasanph mb10">
                        <p class="price" itemprop="price"><span class="amount"><?php echo number_format(floatval(get_post_meta(get_the_ID(), "gia_moi", true)), 0, ',', '.'); ?> ₫</span></p>
                        <meta content="₫" itemprop="priceCurrency" />
                    </div>
                    <div class="giohang mb10">
                        <div class="quantity">
                            Số lượng: <select name="quantity" style="width: 80px;">
                            <?php
                                $maxQuantity = intval(get_option(SHORT_NAME . '_maxQuantity'));
                                for ($i = 1; $i <= $maxQuantity; $i++) {
                                    echo "<option value=\"{$i}\">{$i}</option>";
                                }
                            ?>
                            </select>
                        </div>
                    <a class="btn btn-danger" href="javascript://" onclick="AjaxCart.addToCart(<?php the_ID(); ?>, '<?php get_image_url(); ?>', '<?php the_title(); ?>', <?php echo get_post_meta(get_the_ID(), "gia_moi", true); ?>, document.getElementsByName('quantity')[0].value, '');">Đặt hàng ngay <span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </div> <!-- end gio hang -->
                    <div class="product_meta">
                        <?php echo stripslashes(get_post_meta(get_the_ID(), "product_short", true)); ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 lienhe_single_full">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <span class="label label-success font14">Chia sẻ sản phẩm này</span>
                            <div class="hrviet"></div>
                            <?php show_share_socials(); ?>
                            <div class="hrviet"></div>
                            <div class="camket">
                                <p><span class="glyphicon glyphicon-thumbs-up"></span> Đảm bảo 100% hàng chính hãng</p>
                                <p><span class="glyphicon glyphicon-refresh"></span> Đổi trả hàng trong 7 ngày</p>
                                <p><span class="glyphicon glyphicon-heart"></span> Dịch vụ khách hàng tốt nhất</p>
                            </div>
                            <div class="hrviet"></div>
                            <div class="hotlie">
                                <p class="sft"><span class="glyphicon glyphicon-phone-alt"></span><b> <?php echo get_option(SHORT_NAME . "_hotline"); ?> </b>(Hotline)</p>
                                <p class="sft"><span class="glyphicon glyphicon-phone-alt"></span> <b>  0169 309 3357 </b> (Kinh doanh)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row thongtinchitesanpham">
                <div class="col-xs-12 col-md-8">
                    <div class="page-header">
                        <h4 class="font20">THÔNG TIN SẢN PHẨM</h4>
                    </div>
                    <div class="thongtinsinpp">
                        <div class="post-content"><?php the_content(); ?></div>
                        <div class="post-tags">
                            <?php the_tags( '<span class="glyphicon glyphicon-tags"></span> Tags: ', ', ' ); ?>
                        </div>
                        <div class="panel panel-default">
                            <div class="binhlan"><span class="glyphicon glyphicon-user"></span>NHẬN XÉT SẢN PHẨM</div>
                            <div class="panel-body binhliansanp">
                                <div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="5" data-colorscheme="light"></div>               
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
                <div class="col-xs-12 col-md-4" id="slidebar">
                    <?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>