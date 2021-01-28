<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alpha
 */

?>

<header class="header fixed relative-position" role="banner">

  <div class="header-wrap">
    
    <a class="header-logo" href="/">
      <div class="header-logo-grid">
        <div class="header-logo-mark">
          <svg class="logo-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 140"><title>California for All</title><g class="mark-ca"><path class="logo-mark-orange" d="M48.2,83l-13.2,28.6h25.2L48.2,83z M66.7,126.9H28.1l-6,13H0.2l48.7-99.8l44.6,99.8H72.1L66.7,126.9z"/><polygon class="logo-mark-orange" points="117,42.9 117,122.4 146.9,122.4 146.9,139.9 97.1,139.9 97.1,42.9"/><polygon class="logo-mark-orange" points="170.2,42.9 170.2,122.4 200,122.4 200,139.9 150.2,139.9 150.2,42.9"/></g>
          <g class="mark-all"><path class="logo-mark-white" d="M21,8.7c-2-2.2-4.3-3.3-7.1-3.3c-4.6,0-8.4,3.9-8.4,8.7c0,4.8,3.7,8.7,8.4,8.7c2.9,0,5.3-1.2,7.4-3.6l3.4,3.4 c-2.8,3.1-6.6,5.1-10.8,5.1C6.2,27.8,0,21.7,0,14.1C0,6.5,6.2,0.4,13.9,0.4c4.2,0,8.1,2,10.8,5.1L21,8.7z"/><path class="logo-mark-white" d="M37,11.8l-3.6,7.9h6.9L37,11.8z M42,23.9H31.4l-1.6,3.6h-6L37.1,0l12.3,27.5h-5.9L42,23.9z"/><polygon class="logo-mark-white" points="56.1,0.8 56.1,22.7 64.3,22.7 64.3,27.5 50.6,27.5 50.6,0.8"/><rect class="logo-mark-white" x="66" y="0.8" width="5.5" height="26.7"/><polygon class="logo-mark-orange" points="74.6,27.5 74.6,0.8 89.1,0.8 89.1,5.6 80.1,5.6 80.1,11.1 87.6,11.1 87.6,15.9 80.1,15.9 80.1,27.5"/><path class="logo-mark-orange" d="M95.1,14.1c0,4.8,3.7,8.7,8.4,8.7c4.6,0,8.4-3.9,8.4-8.7c0-4.8-3.8-8.7-8.4-8.7C98.8,5.4,95.1,9.3,95.1,14.1 M117.4,14.1c0,7.6-6.2,13.7-13.9,13.7c-7.7,0-13.9-6.1-13.9-13.7c0-7.6,6.2-13.7,13.9-13.7C111.2,0.4,117.4,6.5,117.4,14.1"/><path class="logo-mark-orange" d="M125.3,5.6v6.7h2.9c2.3,0,3.9-1.1,3.9-3.4c0-2.2-1.6-3.3-3.9-3.3H125.3z M125.3,16.8v10.6h-5.5V0.8h8.8 c4.9,0,9,3.1,9,8c0,3.1-1.7,5.7-4.2,7l5,11.6h-6L128,16.8H125.3z"/><polygon class="logo-mark-white" points="159.4,0.8 164.9,0.8 164.9,28.2 145.9,11.6 145.9,27.5 140.4,27.5 140.4,0 159.4,16.6"/><rect x="167.3" y="0.8" class="logo-mark-white" width="5.5" height="26.7"/><path class="logo-mark-white" d="M187.2,11.8l-3.6,7.9h6.9L187.2,11.8z M192.3,23.9h-10.6l-1.6,3.6h-6L187.4,0l12.3,27.5h-5.9L192.3,23.9z"/></g></svg>
        </div>
        <div class="header-logo-text">
          <div class="header-logo-text-url">COVID19.CA.GOV</div>
          <div class="header-logo-text-title">Your Actions Save Lives</div>
        </div>
      </div>
    </a>

    <div class="header-search" role="search">
      <form class="header-search-form" action="/search/">
        <label class="header-search-label" for="header-search-site">Search</label>
        <input name="q" id="header-search-site" class="header-search-field" type="search" data-placeholder-wide="Search this site" data-placeholder-mobile="Search">
        <button class="header-search-button" aria-label="Submit Search">
          <svg class="header-search-button-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title></title><path d="M13.8,8.5c0-3-2.4-5.4-5.4-5.4c-3,0-5.4,2.4-5.4,5.4s2.4,5.4,5.4,5.4C11.4,13.8,13.8,11.4,13.8,8.5z M20,18.5 c0,0.8-0.7,1.5-1.5,1.5c-0.4,0-0.8-0.2-1.1-0.5l-4.1-4.1c-1.4,1-3.1,1.5-4.8,1.5C3.8,16.9,0,13.1,0,8.5S3.8,0,8.5,0
            c4.7,0,8.5,3.8,8.5,8.5c0,1.7-0.5,3.4-1.5,4.8l4.1,4.1C19.8,17.7,20,18.1,20,18.5z"/></svg>
        </button>
      </form>
    </div>

    <div class="dropdown">
      <button
        class="translate dropdown-toggle border-0 rounded-50 ml-3"
        type="button"
        aria-expanded="false"
        aria-haspopup="true"
        data-toggle="dropdown"
        id="dropdown-menu-button"
      >
          <span id="dropdown-text" data-label-wide="Select language" data-label-mobile="Language"></span>
          <svg aria-hidden="true" class="header-language-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 19"><path d="M0.7,2.2l1.5-1.4C2.7,0.2,3.2,0,3.9,0s1.2,0.2,1.7,0.7L15,10l9.4-9.3c0.5-0.5,1-0.7,1.8-0.7
            c0.7,0,1.3,0.2,1.8,0.7l1.4,1.4C29.8,2.7,30,3.2,30,3.9s-0.2,1.3-0.7,1.8L16.7,18.2c-0.5,0.5-1.1,0.7-1.8,0.7s-1.3-0.2-1.8-0.7
            L0.7,5.7C0.2,5.2,0,4.6,0,3.9S0.2,2.7,0.7,2.2z"></path></svg>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdown-menu-button">
          
            <a class="dropdown-item" rel="alternate" lang="es" hreflang="es" href="/es/industry-guidance/">Español</a>
          
            <a class="dropdown-item" rel="alternate" lang="tl" hreflang="tl" href="/tl/industry-guidance/">Tagalog</a>
          
            <a class="dropdown-item" rel="alternate" lang="ar" hreflang="ar" href="/ar/industry-guidance/">العربية</a>
          
            <a class="dropdown-item" rel="alternate" lang="ko" hreflang="ko" href="/ko/industry-guidance/">한국어</a>
          
            <a class="dropdown-item" rel="alternate" lang="vi" hreflang="vi" href="/vi/industry-guidance/">Tiếng Việt</a>
          
            <a class="dropdown-item" rel="alternate" lang="zh-Hans" hreflang="zh-Hans" href="/zh-hans/industry-guidance/">中文</a>
          
            <a class="dropdown-item" rel="alternate" lang="zh-Hant" hreflang="zh-Hant" href="/zh-hant/industry-guidance/">文言</a>
          
          <a class="dropdown-item" href="/translate/">More …</a>
        </div>
      </div>
      <cagov-navoverlay 
        data-json="/menu--en.json"
        data-search="/search/"
        data-label-home="Home"
        data-label-menu="Menu"
        data-label-menu-close="Close"
        data-label-search="Search"
        data-label-placeholder="What are you looking for?"></cagov-navoverlay>
  </div>

</header>

<main id="main">

<div id="top" class="container-fluid jumbotron inverse-hyperlink ">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
              <h1>		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
			?></h1>
              <p class="lead">Coronavirus COVID-19 in California - Updated <?php alpha_posted_on(); ?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">     
          <?php
          the_content( sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'alpha' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            get_the_title()
          ) );
          ?>
      </div>
    </div>
  </div>

</main>

<footer-section>

<footer class="footer-section">
	<div class="footer-section-grid">

		<div class="footer-section-col footer-section-col-nav trigger">
			<nav class="footer-section-nav" role="navigation" aria-label="Footer navigation">
				
					<a class="footer-section-nav-link" href="/stay-home-except-for-essential-needs/">About COVID-19 restrictions</a>
				
					<a class="footer-section-nav-link" href="/safer-economy/">Blueprint for a Safer Economy</a>
				
					<a class="footer-section-nav-link" href="/vaccines/">Vaccines</a>
				
					<a class="footer-section-nav-link" href="/industry-guidance/">Industry guidance</a>
				
					<a class="footer-section-nav-link" href="/get-local-information/">Local info and alerts</a>
				
			</nav>
		</div>

		<div class="footer-section-col footer-section-col-logo trigger">
			<a class="footer-section-logo" href="/">
				<svg class="logo-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 140"><title>California for All</title><g class="mark-ca"><path class="logo-mark-orange" d="M48.2,83l-13.2,28.6h25.2L48.2,83z M66.7,126.9H28.1l-6,13H0.2l48.7-99.8l44.6,99.8H72.1L66.7,126.9z"/><polygon class="logo-mark-orange" points="117,42.9 117,122.4 146.9,122.4 146.9,139.9 97.1,139.9 97.1,42.9"/><polygon class="logo-mark-orange" points="170.2,42.9 170.2,122.4 200,122.4 200,139.9 150.2,139.9 150.2,42.9"/></g><g class="mark-all"><path class="logo-mark-white" d="M21,8.7c-2-2.2-4.3-3.3-7.1-3.3c-4.6,0-8.4,3.9-8.4,8.7c0,4.8,3.7,8.7,8.4,8.7c2.9,0,5.3-1.2,7.4-3.6l3.4,3.4 c-2.8,3.1-6.6,5.1-10.8,5.1C6.2,27.8,0,21.7,0,14.1C0,6.5,6.2,0.4,13.9,0.4c4.2,0,8.1,2,10.8,5.1L21,8.7z"/><path class="logo-mark-white" d="M37,11.8l-3.6,7.9h6.9L37,11.8z M42,23.9H31.4l-1.6,3.6h-6L37.1,0l12.3,27.5h-5.9L42,23.9z"/><polygon class="logo-mark-white" points="56.1,0.8 56.1,22.7 64.3,22.7 64.3,27.5 50.6,27.5 50.6,0.8"/><rect class="logo-mark-white" x="66" y="0.8" width="5.5" height="26.7"/><polygon class="logo-mark-orange" points="74.6,27.5 74.6,0.8 89.1,0.8 89.1,5.6 80.1,5.6 80.1,11.1 87.6,11.1 87.6,15.9 80.1,15.9 80.1,27.5"/><path class="logo-mark-orange" d="M95.1,14.1c0,4.8,3.7,8.7,8.4,8.7c4.6,0,8.4-3.9,8.4-8.7c0-4.8-3.8-8.7-8.4-8.7C98.8,5.4,95.1,9.3,95.1,14.1 M117.4,14.1c0,7.6-6.2,13.7-13.9,13.7c-7.7,0-13.9-6.1-13.9-13.7c0-7.6,6.2-13.7,13.9-13.7C111.2,0.4,117.4,6.5,117.4,14.1"/><path class="logo-mark-orange" d="M125.3,5.6v6.7h2.9c2.3,0,3.9-1.1,3.9-3.4c0-2.2-1.6-3.3-3.9-3.3H125.3z M125.3,16.8v10.6h-5.5V0.8h8.8 c4.9,0,9,3.1,9,8c0,3.1-1.7,5.7-4.2,7l5,11.6h-6L128,16.8H125.3z"/><polygon class="logo-mark-white" points="159.4,0.8 164.9,0.8 164.9,28.2 145.9,11.6 145.9,27.5 140.4,27.5 140.4,0 159.4,16.6"/><rect x="167.3" y="0.8" class="logo-mark-white" width="5.5" height="26.7"/><path class="logo-mark-white" d="M187.2,11.8l-3.6,7.9h6.9L187.2,11.8z M192.3,23.9h-10.6l-1.6,3.6h-6L187.4,0l12.3,27.5h-5.9L192.3,23.9z"/></g></svg>
			</a>
		</div>

		<div class="footer-section-col footer-section-col-hotline trigger">
			<div class="footer-section-hotline">
				<div class="footer-section-hotline-label">COVID-19 hotline</div>
				<a class="footer-section-hotline-number" href="tel:8334224255">1-833-422-4255</a>
				<div class="footer-section-hotline-hours">M-F 8AM-8PM, Sa-Su 8AM-5PM</div>
			</div>
		</div>

	</div>

	<nav class="social trigger" role="navigation" aria-label="California Department of Public Health on Social Media">
		<a class="social-link" href="https://www.facebook.com/CAPublicHealth/" title="California Department of Public Health on Facebook"><svg class="social-icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>California Department of Public Health on Facebook</title><path d="M304 96h80V0h-80c-61.757 0-112 50.243-112 112v48h-64v96h64v256h96V256h80l16-96h-96v-48c0-8.673 7.327-16 16-16z"></path></svg></a>
    <a class="social-link" href="https://twitter.com/CAPublicHealth" title="California Department of Public Health on Twitter"><svg class="social-icon" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><title>California Department of Public Health on Twitter</title><path d="M512 113.2c-18.8 8.4-39.1 14-60.3 16.5 21.7-13 38.3-33.6 46.2-58.1-20.3 12-42.8 20.8-66.7 25.5C412 76.7 384.7 64 354.5 64c-58 0-105 47-105 105 0 8.2.9 16.2 2.7 23.9-87.3-4.4-164.7-46.2-216.5-109.8-9 15.5-14.2 33.6-14.2 52.8 0 36.4 18.5 68.6 46.7 87.4-17.2-.5-33.4-5.3-47.6-13.1v1.3c0 50.9 36.2 93.4 84.3 103-8.8 2.4-18.1 3.7-27.7 3.7-6.8 0-13.3-.7-19.8-1.9 13.4 41.7 52.2 72.1 98.1 73-36 28.2-81.2 45-130.5 45-8.5 0-16.8-.5-25.1-1.5C46.5 462.7 101.7 480 161 480c193.2 0 298.9-160.1 298.9-298.9 0-4.6-.1-9.1-.3-13.6 20.5-14.7 38.3-33.2 52.4-54.3z"></path></svg></a>
	</nav>


	<div class="footer-section footer-section-grid footer-section-utility logo-flanked">
		
		<div class="trigger mx-auto">
			<nav class="footer-section-utility-nav" role="navigation" arial-label="Other State of California Resources">
				
				<a class="footer-section-utility-nav-link" href="https://www.ca.gov">CA.gov</a>
				
				<a class="footer-section-utility-nav-link" href="https://www.cdph.ca.gov/Programs/CID/DCDC/Pages/Immunization/ncov2019.aspx">Department of Public Health</a>
				
				<a class="footer-section-utility-nav-link" href="https://www.gov.ca.gov/newsroom/">Governor’s Newsroom</a>
				
				<a class="footer-section-utility-nav-link" href="https://www.ca.gov/accessibility/">Accessibility</a>
				
				<a class="footer-section-utility-nav-link" href="https://www.ca.gov/privacy-policy/">Privacy Policy</a>
				
				<a class="footer-section-utility-nav-link" href="https://www.surveymonkey.com/r/COVID19CAGOV">Feedback</a>
				
				<a class="footer-section-utility-nav-link" href="https://registertovote.ca.gov">Register to vote</a>
				
			</nav>
			<span class="footer-section-utility-official">Official California State Government Website</span>
		</div>
		


<div class="mx-auto ca-gov">
	<a href="https://ca.gov" class="logo-cagov">
			<?xml version="1.0" encoding="UTF-8"?>
			<svg enable-background="new 0 0 81.6 60" version="1.1" viewBox="0 0 81.6 60" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
			<title>CA.Gov Logo White</title>
			<path class="st0" d="m49.7 25c0.2-0.7 0.8-2.6 1.7-5.8 0.2-0.8 0.8-2.4 1.7-4.9s1.6-4.5 2.2-6c-1.8 1.2-3.4 2.6-4.8 4.2-5.9 6.3-12.7 14-15.1 18 0.9-0.2 2.8-2.1 8.6-4.2 1.8-0.7 3.7-1.2 5.7-1.3zm-1.1 4c-18.4 0-26.5 29.5-39.3 29.5-2.9 0-5.2-1.3-6.7-3.9-1-1.7-1.6-3.7-1.5-5.7 0-5.4 2.6-12.1 7.6-20.3 4.3-7 8.9-12.6 13.7-16.8 4.1-3.8 7.6-5.6 10.6-5.6 1.5-0.1 3 0.6 3.9 1.8 0.7 1 1.1 2.2 1.1 3.4 0 2.4-0.8 5.2-2.4 8.2-1.4 2.6-3.2 5.1-5.3 7.2-1.4 1.4-2.5 2.1-3.3 2.1-0.6 0-1.1-0.3-1.4-0.8-0.3-0.3-0.5-0.8-0.5-1.3 0-0.9 0.8-1.9 2.3-3 2-1.4 3.7-3.2 5.1-5.2 1.8-2.8 2.8-5.1 2.8-7 0.1-0.6-0.1-1.2-0.5-1.7-0.4-0.4-0.9-0.6-1.5-0.6-1.4 0-3.3 1-5.8 3-3.3 2.7-6.4 5.8-9.1 9.1-3.8 4.5-6.9 9.4-9.4 14.6-2.2 4.9-3.3 9.1-3.3 12.6 0 1.5 0.5 3 1.4 4.2 0.9 1.3 2.4 2 3.9 2 5.9-0.2 13.2-13.6 15.4-16.7 22.5-30.8 24.2-30.9 27.6-34.1 2-1.9 3.5-2.8 4.5-2.8 0.6 0 1.3 0.3 1.7 0.8 0.4 0.4 0.6 1 0.6 1.6-0.2 1.3-0.5 2.5-1 3.7-1.2 3.1-2.3 6.3-3.4 9.8-1 3.1-1.6 5.5-1.9 7.1h0.9 1.8c1.4 0 2.2 0.5 2.2 1.6 0 0.5-0.2 1-0.5 1.4-0.2 0.4-0.6 0.7-1.1 0.8h-1.3c-1.1 0-2.1 0.1-3.2 0.3-0.3 0.8-0.9 7.4-1.9 7.7-3.1 2.6-2.9-6.1-2.8-7z"/>
			<path class="st1" d="m30.4 49.1c0.8 0 1.5 0.3 2.1 0.9 0.6 0.5 0.9 1.3 0.9 2.1 0 1.6-1.3 2.9-2.9 2.9s-2.9-1.3-2.9-2.9c-0.2-1.6 1.1-2.9 2.8-3-0.1 0 0 0 0 0z"/>
			<path class="st1" d="m48.4 41.3-2.1 2c-1.2-1.3-2.8-2.1-4.6-2.1-1.4 0-2.8 0.5-3.8 1.5s-1.6 2.3-1.5 3.7c0 1.4 0.6 2.8 1.6 3.8s2.5 1.6 3.9 1.5c0.9 0 1.8-0.2 2.6-0.6 0.7-0.5 1.3-1.2 1.7-2h-4.5v-2.7h7.7v0.7c0 1.3-0.4 2.7-1.1 3.8-0.6 1.1-1.6 2.1-2.7 2.8-1.2 0.7-2.5 1-3.9 1-1.5 0-3-0.3-4.3-1s-2.3-1.7-3-3-1.1-2.7-1.1-4.2c0-2 0.7-3.9 2-5.3 1.6-1.8 3.9-2.8 6.3-2.7 1.3 0 2.6 0.2 3.7 0.7 1.3 0.5 2.2 1.2 3.1 2.1z"/>
			<path class="st1" d="m58.4 38.4c2.1 0 4.2 0.8 5.6 2.4 1.5 1.5 2.4 3.6 2.3 5.8 0 2.1-0.8 4.2-2.3 5.7-3.1 3.1-8.2 3.1-11.4 0-3.1-3.2-3.1-8.3 0.1-11.4 1.6-1.6 3.6-2.5 5.7-2.5zm0 2.9c-1.3 0-2.6 0.5-3.6 1.5s-1.5 2.4-1.4 3.8c-0.1 1.6 0.6 3.1 1.8 4 0.9 0.8 2.1 1.2 3.3 1.2 1.3 0 2.6-0.5 3.5-1.5 2-2.1 2-5.3 0-7.4-1-1.1-2.3-1.6-3.6-1.6z"/>
			<polygon class="st1" points="65.9 38.8 68.9 38.8 72.7 49.8 76.7 38.8 79.7 38.8 74.1 54.2 71.3 54.2"/>
			</svg>
		</a>	
</div>
	</div>

</footer>

</footer-section>
