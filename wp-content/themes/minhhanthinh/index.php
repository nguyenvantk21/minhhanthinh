<?php get_header(); ?>
<div class="container">
    <div class="wonderplugin_slider">
        <?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?>
    </div>

    <div class="function-div-outside">
        <div class="function-div">
            <?php
            $args = array( 'category' => 191, 'post_type' =>  'post' ); 
            $postslist = array_reverse(get_posts( $args ));
            $i = 1;
            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>
                <div class="function-child">
                    <div class="function-description">
                        <div class="function-description-title function-description-title-<?php echo $i; ?>"><?php the_title(); ?></div>
                        <div class="function-description-excerpt"><?php the_excerpt(); ?></div>
                    </div>
                    <div>
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'function-image']); $i++;?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<div class="materials-div">
    <h3>vật liệu hoàn thiện</h3>
    <div id="tabs">
        <ul class="materials-header-div">
            <?php
            $args = array( 'category' => 192, 'post_type' =>  'post' ); 
            $postslist = array_reverse(get_posts( $args ));
            $i = 1;
            foreach ($postslist as $post) :  setup_postdata($post); ?>
                <li class="material-header-one"><a href="#tabs-<?php echo $i; ?>" class="material-header"><?php the_title(); ?></a></li>
                <?php $i++; ?>
            <?php endforeach; ?>
        </ul>
        <div id="tabs-1">
            <?php
            $args = array( 'category' => 199, 'post_type' =>  'post' ); 
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); ?>
                <div class="material-item">
                    <a href="">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'material-attachment']); ?>
                        <h5 class="material-title"><?php the_title(); ?></h5>
                    </a>
                </div>
                <?php endforeach; ?>
        </div>
        <div id="tabs-2"></div>
        <div id="tabs-3"></div>
    </div>
</div>





    <div class="project-div-outside">
        <h3>dự án tiêu biểu</h3>
        <div class="project-all-div">
            <?php
            $categories = array(193, 194, 195, 196);
            $i = 1;
            foreach ($categories as $category) :  setup_postdata($post);
            ?>
            <div class="project-div">
                <?php
                $args = array( 'category' => $category, 'post_type' =>  'post', 'posts_per_page'=> -1, 
                                'numberposts'=>-1 ); 
                $postslist = array_reverse(get_posts( $args ));
                foreach ($postslist as $post) :  setup_postdata($post); 
                ?>
                    <a href="">
                        <div class="project-text">đại học bách khoa đà nẵng</div>
                        <div class="project-image project-image-<?php echo $i; ?>"><?php the_post_thumbnail(); $i++; ?></div>
                    </a>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="customer-news-div">
        <div class="customer-div">
            <div class="customer-header">
                <div class="customer-title">ý kiến khách hàng</div>
                <div class="straign-line-1"></div>
            </div>
            <div class="customer-content">
                <?php $args = array( 'category' => 197, 'post_type' =>  'post'); 
                $postslist = array_reverse(get_posts( $args ));
                foreach ($postslist as $post) :  setup_postdata($post);?>
                    <div class="customer-one">
                        <div class="customer-image"><?php the_post_thumbnail(); ?></div>
                        <div class="arrow-left"></div>
                        <div class="customer-comment">
                            <div class="customer-comment-title"><?php the_title(); ?></div>
                            <div class="customer-comment-position"><?php the_content(); ?></div>
                            <div class="customer-comment-content"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="news-div">
            <div class="news-header">
                <div class="news-title">tin nổi bật</div>
                <div class="straign-line-2"></div>
            </div>
            <div class="news-content">
                <?php
                $args = array( 'category' => 198, 'post_type' =>  'post'); 
                $postslist = get_posts( $args );
                foreach ($postslist as $post) :  setup_postdata($post); ?>
                <div class="news-content-one">
                    <div class="news-image"><?php the_post_thumbnail(); ?></div>
                    <div class="news-text">
                        <div class="news-text-title"><?php the_title(); ?></div>
                        <div class="news-text-excerpt"><?php the_excerpt(); ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>