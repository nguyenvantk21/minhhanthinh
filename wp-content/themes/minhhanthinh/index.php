
<?php get_header(); ?>
<div id="content" class="site-content">
    <div class="mui-container-fluid">
        <div class="mui-row">
                <div><?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?></div>
        </div>
    </div>
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="section-1">
            <div class="mui-container">
                <div class="mui-row">
                <?php
                $args = array( 'category' => 191, 'post_type' =>  'post' ); 
                $postslist = array_reverse(get_posts( $args ));
                $i = 0;
                foreach ($postslist as $post) :  setup_postdata($post); 
                ?>
                    <div class="card-layout fadeInUp delay-<?php $i; ?> has-animation">
                        <a href="#" title="tư vấn xây dựng">
                            <div class="card-content">
                                <header>
                                    <h3 class="front-page-title"><?php the_title(); ?></h3>
                                </header>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-image">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => '<?php the_title(); ?>']); $i = $i + 500; ?>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
  


        <section class="section-2">
            <div class="mui-container">
                <div class="mui-row">
                    <div id="product_cat_widget-2" class="widget-1 widget-first widget-last widget-odd slideInDown delay-0 has-animation smooth front-section widget_product_cat_widget">
                        <div class="front-title">
                            <?php
                                $args = array( 'category' => 192, 'post_type' =>  'post' ); 
                                $postslist = array_reverse(get_posts( $args ));
                                $i = 'mui--is-active';
                            ?>  
                            <h3 class="front-page-title">vật liệu hoàn thiện</h3>
                        </div>
                        <div class="product-tabs">
                            <ul class="mui-tabs__bar">
                                <?php
                                foreach ($postslist as $post) :  setup_postdata($post); 
                                ?>
                                <li class="<?php echo $i; ?>">
                                    <a data-mui-toggle="tab" data-mui-controls="child-cat--<?php strtolower(the_title()); ?>"><?php the_title(); ?></a>
                                </li>
                                <?php $i = ''; ?>
                                <?php endforeach; ?>
                            </ul>

                            <div class="mui-tabs__pane mui--is-active" id="child-cat--gach-op-lat">
                                <div class="owl-carousel pro-cat-carousel">
                                    <?php
                                    $args = array( 'category' => 199, 'post_type' =>  'post' ); 
                                    $postslist = get_posts( $args );
                                    foreach ($postslist as $post) :  setup_postdata($post); 
                                    ?>
                                        <div class="item">
                                            <a href="">
                                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'attachment-post-carousel size-post-carousel wp-post-image']); ?>
                                                
                                                <h5><?php the_title(); ?></h5>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="mui-container">
                <div class="mui-row">
                    <div id="news_template_widget-2" class="widget-1 widget-first widget-last widget-odd front-section news-template">      
                        <header class="widget-header">
                            <h3 class="front-page-title">dự án tiêu biểu</h3>      
                        </header>
                        <div class="news-gallery">
                            <?php
                            $args = array( 'category' => 201, 'post_type' =>  'post', 'posts_per_page'=> -1, 
                                            'numberposts'=>-1 ); 
                            $i = 1;
                            $postslist = array_reverse(get_posts( $args ));
                            foreach ($postslist as $post) :  setup_postdata($post); 
                            ?>
                                <div class="news-gallery-item item-<?php echo $i; ?>">
                                    <a href="#">
                                        <div class="thumb-container">
                                            <?php the_post_thumbnail(); $i++; ?>
                                        </div>
                                        <div class="news-container">
                                            <h3 class="news-title">đại học bách khoa đà nẵng</h3>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <section class="section-4">
            <div class="mui-container">
                <div class="mui-row">
                    <div id="news_template_widget-3" class="widget-1 widget-first widget-odd testimonials-section has-animation delay-0 flipInY smooth front-section news-template">      
                        <header class="widget-header">
                            <h3 class="front-page-title">Ý kiến khách hàng</h3>      
                        </header>
                        <div class="testimonals">
                        <?php
                            $args = array( 'category' => 197, 'post_type' =>  'post'); 
                            $i = 1;
                            $postslist = array_reverse(get_posts( $args ));
                            foreach ($postslist as $post) :  setup_postdata($post); 
                            ?>
                            <div class="testimonial-item">
                                <div class="thumb">
                                    <div class="frame">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <div class="author">
                                    <div class="text">
                                        <h5 class="job-title"><?php the_title(); ?></h5>
                                        <span class="company"><?php the_content(); ?></span>
                                        <blockquote><?php the_excerpt(); ?></blockquote>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>


<script type="text/javascript">
jQuery(document).ready(function($){
    $(".testimonals").slick({
        autoplay: true,
        autoplaySpeed: 750,
        swipeToSlide: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        vertical: true,
        infinite: true
    });
});
</script>
</div>



            <div id="news_template_widget-4" class="widget-2 widget-last widget-even has-animation delay-0 flipInY smooth front-section news-template">      
                <header class="widget-header">
                    <h3 class="front-page-title">Tin nổi bật</h3>      
                </header>
                <div class="news-featured-list">
                    <?php
                    $args = array( 'category' => 198, 'post_type' =>  'post', 'posts_per_page'=> -1, 
                                    'numberposts'=>-1 ); 
                    $postslist = get_posts( $args );
                    foreach ($postslist as $post) :  setup_postdata($post); 
                    ?>
                    <div class="news-featured-item">
                        <a href="#">
                            <div class="thumb-container">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="news-container">
                                <h3 class="news-title"><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>



        </main>
    </div>
</div>
<?php get_footer(); ?>
