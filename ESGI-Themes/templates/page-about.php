<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<main class="about-us-page container">

  <h1>About us.</h1>

  <!-- Image principale -->
  <div class="about-banner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/png/1.png" alt="Event Banner">
  </div>

  <!-- Sky's the limit + texte -->
  <section class="about-intro">
    <h2>Sky’s the limit</h2>
    <p>
      Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.
    </p>
  </section>

  <!-- Bloc deux colonnes -->
  <section class="about-columns">
    <div class="column-left">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/2.png" alt="Photographer">
    </div>
    <div class="column-right">
      <div class="sub-section">
        <h3>Who are we?</h3>
        <p>Learn more about our work, connections, storytelling skills, & specialized services for events and brand strategies.</p>
      </div>
      <div class="sub-section">
        <h3>Our vision</h3>
        <p>To lead the audiovisual future. Our goal: help our clients produce and broadcast the most impactful content possible. We believe in authenticity, meaning, and stories that resonate.</p>
      </div>
      <div class="sub-section">
        <h3>Our mission</h3>
        <p>Deliver immersive experiences for all projects & goals. Adapt and respond to each client’s needs, thanks to our creative skills, technical know-how, and teamwork. One team, one goal: stunning audiovisual stories.</p>
      </div>
    </div>
  </section>

  <!-- Bloc équipe dynamique (Customizer) -->
  <section class="team">
    <h2>Our Team</h2>
    <div class="team-grid">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/5.png" alt="Photographer">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/6.png" alt="Photographer">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/7.png" alt="Photographer">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/8.png" alt="Photographer">
    </div>
  </section>

</main>

<?php
get_footer();
?>
