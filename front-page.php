<?php get_header() ?>
<section class="banner">
        <div class="container">
            <div class="banner__wrapper">
                <div class="banner__text">
                    <h1><?php echo get_field('banner_title')?></h1>
                    <p><?php echo get_field('banner_paragraph')?></p>
                    <a href="" class="btn yellow"><?php echo get_field('banner_btn')?></a>
                </div>
                
                <img src="<?php echo get_field('banner_image') ?>" alt="">
            </div>
        </div>
    </section>

    <section class="hm-services">
        <div class="container">
            <div class="hm-services__wrapper">
            <?php 
                            $args = array(
                            'post_type' => 'ServicePost', 
                            'posts_per_page' => -1,
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                <div class="hm-services__item">
                    <i class="fa-solid fa-globe"></i>
                    <h4><?php the_title()?></h4>
                    <p><?php the_excerpt()?></p>
                    <a href="" class="btn yellow"><?php echo get_field('service_post_btn') ?></a>
                </div>
                <?php echo get_the_post_thumbnail() ?>
                    <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
            ?>
            </div>
        </div>
    </section>

    <section class="abt">
        <div class="container">
            <div class="abt__wrapper">
                <img src="<?php echo get_field('about_image') ?>" alt="">
                <div class="abt__text">
                    <h3><?php echo get_field('about_title')?></h3>
                    <p><?php echo get_field('about_paragraph_1')?></p>
                    <p><?php echo get_field('about_paragraph_2')?></p>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="ltrends">
        <div class="container">
            <div class="ltrends__title">
                <h2><?php echo get_field('latest_trends_title')?></h2>
                <p><?php echo get_field('latest_trends_paragraph')?></p>
            </div>
            <div class="ltrends__wrapper">
                    <?php 
                            $args = array(
                            'post_type' => 'LatestPost', 
                            'posts_per_page' => -1,
                            );
                            $newQuery = new WP_Query($args)
                        ?>

                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                <div class="ltrends__card">
                        <img src="<?php echo get_field('latest_card_image')?>" alt="">
                        <div class="ltrends__card__text">
                            <h4><?php the_title()?></h4>
                            <p><?php the_excerpt()?></p>
                            <a href=""><?php echo get_field('latest_card_btn')?></a>
                        </div>
                </div>
                <?php echo get_the_post_thumbnail() ?>
                        <?php
                            endwhile;
                            else :
                                echo "no available content yet";
                            endif;
                            wp_reset_postdata();
                        ?>
            </div>
        </div>
    </section>

    <section class="free">
        <div class="container">
            <div class="free__wrapper">
                <h2><?php echo get_field('free_title')?></h2>
                <p><?php echo get_field('free_paragraph')?></p>
                <a href="" class="btn dark"><?php echo get_field('free_btn')?></a>
            </div>
        </div>
    </section>

<?php get_footer() ?>