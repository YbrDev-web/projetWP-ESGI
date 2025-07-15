<?php
/**
 * Template Name: Services
 */
get_header();
?>

<main class="services-page container">
  <h1>Our Services</h1>
  <p>See what we can offer to support your events.</p>

  <div class="services-grid">
    <img src="<?php echo get_template_directory_uri(); ?>/images/png/12.png" alt="Partner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/png/11.png" alt="Partner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/png/3.png" alt="Partner">
  </div>

  <a class="btn-link" href="<?php echo site_url('/contact'); ?>">Private Parties</a>
</main>

<?php
get_footer();
?>
