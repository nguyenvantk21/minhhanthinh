<?php get_header(); ?>
<div class="container">
    <div class="wonderplugin_slider"><?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?></div>


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

    <div class="materials-tab">
        <?php
        $args = array( 'category' => 192, 'post_type' =>  'post' ); 
        $postslist = array_reverse(get_posts( $args ));
        $i = 1;
        foreach ($postslist as $post) :  setup_postdata($post); 
        ?>
            <button id="materials-<?php echo $i; ?>" class="materials-tab" onclick="openMaterial('<?php the_title(); ?>')"><?php the_title(); ?></button>
            <?php $i++; ?>
            <?php endforeach; ?>
    </div>

    <div id="gạch ốp lát" class="material">
        <?php
        $args = array( 'category' => 199, 'post_type' =>  'post' ); 
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post); 
        ?>
        <div class="material-item">
            <a href="">
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'material-attachment']); ?>
                <h5 class="material-title"><?php the_title(); ?></h5>
            </a>
        </div>
        <?php endforeach; ?>
    </div>


    <div id="thiết bị vệ sinh" class="material" style="display:none">
      <h2>Paris</h2>
      <p>Paris is the capital of France.</p> 
    </div>


    <div id="bột sơn hoàn thiện" class="material" style="display:none">
      <h2>Tokyo</h2>
      <p>Tokyo is the capital of Japan.</p>
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
                    <div class="project-image project-image-<?php echo $i; ?>"><?php the_post_thumbnail(); $i++; ?></div>
                </a>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<div class="customer-new-div">
    
</div>
















<div>
    <main>






        

        






<section>
            <div>
                <div>
                    <div>
                        <header>
                            <h3>Ý kiến khách hàng</h3>
                        </header>
                        <div>
                        <?php
                            $args = array( 'category' => 197, 'post_type' =>  'post'); 
                            $i = 1;
                            $postslist = array_reverse(get_posts( $args ));
                            foreach ($postslist as $post) :  setup_postdata($post); 
                            ?>
                            <div>
                                <div>
                                    <div>
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <h5><?php the_title(); ?></h5>
                                        <span><?php the_content(); ?></span>
                                        <blockquote><?php the_excerpt(); ?></blockquote>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <div>
                <header>
                    <h3>Tin nổi bật</h3>
                </header>
                <div>
                    <?php
                    $args = array( 'category' => 198, 'post_type' =>  'post', 'posts_per_page'=> -1, 
                                    'numberposts'=>-1 ); 
                    $postslist = get_posts( $args );
                    foreach ($postslist as $post) :  setup_postdata($post); 
                    ?>
                    <div>
                        <a href="#">
                            <div>
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div>
                                <h3><?php the_title(); ?></h3>
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