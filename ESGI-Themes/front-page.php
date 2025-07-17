<?php
get_header();
?>

<main class="home-page">
  <!-- About Us Section -->
  <h1><p>A really professionnal structure for all your events</p></h1>
  <section class="about-us container">
  <img src="<?php echo get_template_directory_uri(); ?>/images/png/1.png" alt="Camera Operator">
    <h2>About Us</h2>
    <p>Specializing in the creation of exceptional events, for private and corporate clients, we design, plan and manage every project from conception to execution.</p>
    <a href="<?php echo get_page_url_by_title('About Us'); ?>" class="btn-link">About Us</a>
  </section>

  <!-- Bloc 2 colonnes texte + image -->
  <section class="about-columns container">
    <div class="column-left">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/2.png" alt="Camera Operator">
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
        <p>Deliver immersive experiences for all projects & goals. Adapt and respond to each client’s needs, thanks to our creative skills, technical know-how, and teamwork.</p>
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section class="services container">
    <h2>Our Services</h2>
    <div class="services-grid">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/12.png" alt="Service 1">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/11.png" alt="Service 2">
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/3.png" alt="Service 3">
    </div>
    <a href="<?php echo get_page_url_by_title('Service'); ?>" class="btn-link">Services</a>
  </section>

  <!-- Our Partners -->
  <!-- Our Partners -->
<section class="partners container">
  <h2>Our Partners</h2>
  <div class="logos">
    <?php $partners_url = get_page_url_by_title('Partners'); ?>
    <?php
      $partners = ['partner-1.svg', 'partner-2.svg', 'partner-3.svg', 'partner-4.svg', 'partner-5.svg', 'partner-6.svg'];
      foreach ($partners as $partner) :
    ?>
      <a href="<?php echo $partners_url; ?>">
        <img src="<?php echo get_template_directory_uri() . '/images/svg/' . $partner; ?>" alt="Partner">
      </a>
    <?php endforeach; ?>
  </div>
</section>


</main>

<?php get_footer(); ?>
