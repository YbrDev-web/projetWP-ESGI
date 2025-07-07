<?php
get_header();
?>

<main class="home-page">

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>A really professional structure <br> for all your events</h1>

      <!-- ✅ Correction : chemin d’image avec des slashs "/" -->
      <img src="<?php echo get_template_directory_uri(); ?>/images/png/5.png" alt="Hero Image">
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about-us">
    <div class="container">
      <h2>About Us</h2>
      <p>Discover who we are and what we stand for.</p>

      <!-- ✅ Lien vers page statique "About Us" -->
      <a href="<?php echo site_url('/about-us'); ?>">Learn more</a>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services">
    <div class="container">
      <h2>Our Services</h2>
      <p>See what we can offer to support your events.</p>

      <!-- ✅ Lien vers page statique "Services" -->
      <a href="<?php echo site_url('/services'); ?>">View services</a>
    </div>
  </section>

  <!-- Partners Section -->
  <section class="partners">
    <div class="container">
      <h2>Our Partners</h2>
      <p>They trust us.</p>

      <!-- ✅ Lien vers page statique "Partners" -->
      <a href="<?php echo site_url('/partners'); ?>">Meet our partners</a>
    </div>
  </section>

</main>

<?php
get_footer();
?>
