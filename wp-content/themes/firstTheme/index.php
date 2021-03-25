<?php get_header(); ?>

<?php
// update_post_meta(14, 'auth_name', 'mutasem kwaik');
// add_post_meta(14, 'auth_name', 'noor');

    $array = array(
        'post_type' => 'post',
    );

$the_query = new WP_Query($array);
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();

            $show = get_post_meta(get_the_ID(), 'show', true);
            $num = absint($show)+1;
            update_post_meta(get_the_ID(), 'show', $num); ?>
    <div style="margin: 60px; width: 80%;height: 200px; background-color: #ccc; padding: 10px; ">
        <?php $pic = get_the_post_thumbnail_url(get_the_ID(), 'image_index_news'); ?>
        <?php print_r($pic); ?>
        <img src="<?php echo $pic; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
        <?php the_title(); ?>
        <?php the_post_thumbnail(array(100, 100)); ?>
        <br>
        <?php the_content(); ?>
        <br>
            <?php echo __('عدد المشاهدات :'); ?>
            <?php _e('عدد المشاهات'); ?>
            <?php echo $num ?>
            <a href="<?php the_permalink(); ?>"> <?php _e('المزيد'); ?> </a>
    </div>
    <?php
        }
    } else {
        echo __('no posts');
    }

?>
<?php get_footer(); ?>
