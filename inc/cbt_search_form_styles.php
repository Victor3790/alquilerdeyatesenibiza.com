<?php
function cbt_search_form_styles(){
  if(is_front_page() || is_singular('yate') || is_post_type_archive('yate')){
    $cbt_uri = get_template_directory_uri();
?>
<style type="text/css">
  .cbt-form {
    background: #fff url("<?php echo $cbt_uri; ?>/imgs/form-backgroundSmall.jpg") center;
    background-position: center;
    background-size: cover;
    padding: 80px 0; }

  @media (min-width: 768px){
    .cbt-form{
      background-image: url("<?php echo get_template_directory_uri(); ?>/imgs/form-background.jpg");
    }
  }
</style>
<?php
  }
}
?>
