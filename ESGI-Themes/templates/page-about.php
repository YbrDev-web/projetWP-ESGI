<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<main class="about-us-page container">

  <h1>About us.</h1>

  <section class="intro">
    <img src="<?php echo get_template_directory_uri(); ?>images/png/1.png" alt="About Hero">
    <p>Born to be loud.<br>We’re a passionate team of event creators, designers and developers.</p>
  </section>

  <section class="team">
    <h2>Our Team</h2>
    <div class="team-grid">
      <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>images/partner1.svg" alt="Member 1">
        <p>Anna Smith<br><span>Designer</span></p>
      </div>
      <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>images/parter2.svg" alt="Member 2">
        <p>Lucas Martin<br><span>Developer</span></p>
      </div>
      <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/member3.jpg" alt="Member 3">
        <p>Olivia Green<br><span>Photographer</span></p>
      </div>
      <div class="member">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/member4.jpg" alt="Member 4">
        <p>John Doe<br><span>Producer</span></p>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
?>
