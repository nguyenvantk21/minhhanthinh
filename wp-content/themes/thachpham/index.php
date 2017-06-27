<?php get_header(); ?>

<div id="slideshow">
<?php 
echo do_shortcode('[smartslider3 slider=1]');
?>
</div>





<div class="vatlieuhoanthien">
    <h2>VẬT LIỆU HOÀN THIỆN</h2>
    <div class="bakhoivatlieu">
        <?php
            $args = array( 'category' => 192, 'post_type' =>  'post' ); 
            $postslist = array_reverse(get_posts( $args ));
            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
        <div class="vatlieu"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div> 
        <?php endforeach; ?> 
    </div>
</div>






<div class="bonsanpham">
    <?php
    $args = array( 'category' => 199, 'post_type' =>  'post' ); 
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post); 
    ?>  
    <div class="khoi_sanpham">
        <div class="anh_sanpham"><?php the_post_thumbnail(); ?></div>
        <div class="ten_sanpham"><?php the_title(); ?></div>
    </div>
    <?php endforeach; ?> 
</div>


<div style="clear: both;"></div>


<div class="khoi-3">
    <div>
        <div>
            <div>
                <header>
                    <h3 class="du-an-tieu-bieu">dự án tiêu biểu</h3>
                </header>
                <div class="album-anh">
                    <?php 
                    $categories  = array(201);
                    $i = 1;
                    foreach ($categories as $category) {
                        $args = array( 'category' => $category, 'post_type' =>  'post',    'posts_per_page'=> -1, 
    'numberposts'=>-1 ); 
                        $postslist = get_posts( $args );
                        foreach ($postslist as $post) :  setup_postdata($post);  ?>
                            <div class="thu-tu-anh anh-thu-<?php echo $i; ?>">
                                <a href="">
                                    <div class="khoi-anh">
                                        <?php the_post_thumbnail() ?>
                                       <?php $i++; ?>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php  }   ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="clear: both;"></div>


<div id="khoidoi">
    <div class="khoidoi">
        <h2>Ý KIẾN KHÁCH HÀNG</h2>
            <?php
                $args = array( 'category' => 197, 'post_type' =>  'post' ); 
                $postslist = array_reverse(get_posts( $args ));
                foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <div class="canhan">
                <div class="anhcanhan"><?php the_post_thumbnail(); ?></div>
                <div class="arrow-left"></div>
                <div class="ykien"><?php the_excerpt(); ?></div>
            </div>
        <?php endforeach; ?> 
    </div>

    <div class="khoidoi">
        <h2>TIN NỔI BẬT</h2>
        <?php
            $args = array( 'category' => 198, 'post_type' =>  'post' ); 
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); 
        ?>  
        <div class="baivietnoibat">
            <div class="tinnoibat_image"><?php the_post_thumbnail(); ?></div>
            <div class="tinnoibat_chu">
                <a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a>
                <div class="tinnoibat_noidung"><?php the_excerpt(); ?></div>
            </div> 
        </div>
        <?php endforeach; ?> 
    </div>
</div>

<div style="clear: both;"></div>


<?php get_footer(); ?>
