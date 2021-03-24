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
        <?php the_title(); ?>
        <br>
        <?php the_content(); ?>
        <br>
            <?php echo __('عدد المشاهدات :'); ?>
            <?php _e('عدد المشاهات'); ?>
            <?php echo $num ?>

    </div>
    <?php
        }
    } else {
        echo __('no posts');
    }

?>
<?php get_footer(); ?>
