<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Medic
 */
?>
<!--Header slider block-->
<?php $header_slides = get_field('home_header_slides');
foreach($header_slides as $header_slide):?>
<?php echo $header_slide['home_header_slide_background_image'];?>
<?php echo $header_slide['home_header_slide_hero_tagline'];?>
<?php $header_cta_minor = $header_slide['home_header_slide_cta_minor'];
echo $header_cta_minor['home_header_slide_cta_minor_text'];?>
<?php echo $header_cta_minor['home_header_slide_cta_minor_link'];?>
<?php $header_cta_major = $header_slide['home_header_slide_cta_major'];
echo $header_cta_major['home_header_slide_cta_major_text'];?>
<?php echo $header_cta_major['home_header_slide_cta_major_link'];?>
<?php endforeach;?>
<!-- Tagline panel block -->
<?php $tagline_panel = get_field('home_tagline_panel');
echo $tagline_panel['home_tagline_panel_header'];
echo $tagline_panel['home_tagline_panel_content'];?>
<!-- Features block -->
<?php $features_panels = get_field('home_features_panels');
foreach($features_panels as $features_panel):?>
<?php echo $features_panel['home_feature_panel_icon'];?>
<?php echo $features_panel['home_feature_panel_header'];?>
<?php echo $features_panel['home_feature_panel_content']; ?>
<?php $features_panel_cta = $features_panel['home_feature_panel_cta'];?>
<?php echo $features_panel_cta['home_feature_panel_cta_text'];?>
<?php echo $features_panel_cta['home_feature_panel_cta_link'];?>
<?php endforeach;?>
<!-- People panel block -->
<?php $people_panel = get_field('home_people_panel');?>
<?php echo $people_panel['home_people_panel_header'];?>
<?php echo $people_panel['home_people_panel_subheader']; ?>
<!-- Featured topic  block-->
<?php $featured_topic_panel = get_field('home_featured_topic_panel');?>
<?php echo $featured_topic_panel['home_featured_topic_panel_image']; ?>
<?php echo $featured_topic_panel['home_featured_topic_panel_header']; ?>
<?php echo $featured_topic_panel['home_featured_topic_panel_content'];?>
<?php $featured_topic_panel_cta = $featured_topic_panel['home_featured_topic_panel_cta'];?>
<?php echo $featured_topic_panel_cta['home_featured_topic_panel_cta_text'];?>
<?php echo $featured_topic_panel_cta['home_featured_topic_panel_cta_link'];?>
<!-- Services block -->
<?php $services_panel = get_field('home_services_panel');?>
<?php echo $services_panel['home_services_panel_header'];?>
<!-- Testimonials block -->
<?php $testimonials_panel = get_field('home_testimonials_panel');?>
<?php echo $testimonials_panel['home_testimonials_panel_header'];?>
<?php echo $testimonials_panel['home_testimonials_panel_subheader'];?>
<?php //here goes relationship field echo $testimonials_panel ?>
<!-- Tagline 2 block -->
<?php $tagline_second_panel = get_field('home_tagline_2_panel');?>
<?php echo $tagline_second_panel['home_tagline_2_panel_main_image'];?>
<?php echo $tagline_second_panel['home_tagline_2_panel_background_image'];?>
<?php echo $tagline_second_panel['home_tagline_2_panel_header'];?>
<?php echo $tagline_second_panel['home_tagline_2_panel_subheader'];?>
<?php $tagline_second_panel_cta = $tagline_second_panel['home_tagline_2_panel_cta'];?>
<?php echo $tagline_second_panel_cta['home_tagline_2_panel_cta_text'];?>
<?php echo $tagline_second_panel_cta['home_tagline_2_panel_cta_link'];?>
<!-- Video panel block -->
<?php $video_panel = get_field('home_video_panel');?>
<?php echo $video_panel['home_video_panel_video_url'];?>
<?php echo $video_panel['home_video_panel_video_background'];?>
<?php echo $video_panel['home_video_panel_video_header']; ?>
<?php echo $video_panel['home_video_panel_video_content'];?>
<?php $video_panel_cta = $video_panel['home_video_panel_video_cta'];?>
<?php echo $video_panel_cta['home_video_panel_video_cta_text'];?>
<?php echo $video_panel_cta['home_video_panel_video_cta_link'];?>
