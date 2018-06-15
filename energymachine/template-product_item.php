<div class="short-product">
    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" style="border:none; box-shadow:none" class="thumbnail">
        <img class="img-rounded" alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url('600x420'); ?>" />
    </a>
    <div class="caption">
        <h2><a itemprop="name" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php echo get_short_content(get_the_title(), 70); ?></a></h2>
        <div class="post-price">
            <div class="price">
                <span itemprop="price" class="amount"><?php echo number_format(floatval(get_post_meta(get_the_ID(), "gia_moi", true)), 0, ',', '.'); ?> ₫</span>          
            </div>
            <div class="salepercent"><?php echo get_post_meta(get_the_ID(), "ma_sp", true) ?></div>
        </div>
    </div> <!-- end caption -->
</div>