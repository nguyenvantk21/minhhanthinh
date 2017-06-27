<?php get_header(); ?>
<div class="container">
    <div class="wonderplugin_slider"><?php echo do_shortcode('[wonderplugin_slider id="1"]'); ?></div>









<div>
    <main>




        <section>
            <div>
                <div>
                <?php
                $args = array( 'category' => 191, 'post_type' =>  'post' ); 
                $postslist = array_reverse(get_posts( $args ));
                $i = 0;
                foreach ($postslist as $post) :  setup_postdata($post); 
                ?>
                    <div>
                        <a href="#" title="tư vấn xây dựng">
                            <div>
                                <header>
                                    <h3><?php the_title(); ?></h3>
                                </header>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div>
                            <?php the_post_thumbnail('post-thumbnail', ['class' => '<?php the_title(); ?>']); $i = $i + 500; ?>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
  


        <section>
            <div>
                <div>
                    <div>
                        <div>
                            <?php
                                $args = array( 'category' => 192, 'post_type' =>  'post' ); 
                                $postslist = array_reverse(get_posts( $args ));
                                $i = 'mui--is-active';
                            ?>  
                            <h3>vật liệu hoàn thiện</h3>
                        </div>
                        <div>
                            <ul>
                                <?php
                                foreach ($postslist as $post) :  setup_postdata($post); 
                                ?>
                                <li class="<?php echo $i; ?>">
                                    <a data-mui-toggle="tab" data-mui-controls="child-cat--<?php strtolower(the_title()); ?>"><?php the_title(); ?></a>
                                </li>
                                <?php $i = ''; ?>
                                <?php endforeach; ?>
                            </ul>

                            <div>
                                <div>
                                    <?php
                                    $args = array( 'category' => 199, 'post_type' =>  'post' ); 
                                    $postslist = get_posts( $args );
                                    foreach ($postslist as $post) :  setup_postdata($post); 
                                    ?>
                                        <div class="item">
                                            <a href="">
                                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'attachment']); ?>
                                                
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

        <section>
            <div>
                <div>
                    <div>
                        <header>
                            <h3>dự án tiêu biểu</h3>
                        </header>
                        <div>
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