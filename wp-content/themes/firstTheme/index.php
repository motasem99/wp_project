<?php get_header(); ?>

<?php

    $array = array(
        'post_type' => 'post',
    );

$post = new WP_Query($array);
// print_r($post->posts);

?>

<?php foreach($post->posts as $row) {
    $m = get_post_meta($row->ID, 'show', true) +1 ;
        update_post_meta($row->ID, 'show', $m);
    ?>
    <div style="margin: 60px; width: 80%;height: 200px; background-color: #ccc; padding: 10px; ">
        <?php echo $row->post_title ?>
        <br>
        <?php echo $row->post_content ?>
        <br>
            عدد المشاهدات :
        <?php print_r(get_post_meta($row->ID, 'show', true)); ?>

    </div>
<?php } ?>

<?php get_footer(); ?>
