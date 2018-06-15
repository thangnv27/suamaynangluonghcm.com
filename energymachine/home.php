<?php get_header(); ?>
<?php get_template_part('template', 'hometop'); ?>
<div class="row module_sanpham">
    <div class="tieude_home">
        <h3 class="title_link">
            <a class="title_link_a"><span class="glyphicon glyphicon-th-list"></span>DỊCH VỤ SỬA MÁY NĂNG LƯỢNG TẠI HỒ CHÍ MINH</a>
        </h3>
        <div class="link-cat"></div>
    </div>
    <div class="full_home_sanpham pdt15">
        <?php getpagenavi();?> 
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-sm-3 motsanpham">
            <?php get_template_part('template', 'product_item'); ?>  
        </div>
        <?php endwhile;?>
        <?php getpagenavi();?> 
    </div>
</div>
<?php get_footer(); ?>
