<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alpha
 */

?>
  <link href="https://california.azureedge.net/cdt/statetemplate/6.0.0/css/cagov.font-only.min.css" rel="stylesheet" />

<header>
<a class="skippy sr-only-focusable text-center" href="#main">
      <span class="skippy-text">Skip to main content</span>
 </a>

	<nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar navbar-inverse px-0">
  <div class="container flex-wrap flex-md-nowrap py-0 px-3">
    <a href="/"><img src="https://california.azureedge.net/cdt/statetemplate/global/images/Ca-Gov-Logo-White.svg" alt="ca.gov"></a><div class="navbar-brand docs-brand navbar-left mr-3 ml-3 navbar-inverse"><a href="/" aria-label="home">California Coronavirus COVID-19 Response</a></div>
    <ul class="navbar-nav mobile ml-sm-auto ">
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/CAPublicHealth/" target="_blank" rel="noopener" aria-label="Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="23" height="23" class="navbar-nav-svg" viewBox="0 0 50 50" >    <path fill="currentColor" d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path></svg>

        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://twitter.com/CAPublicHealth" target="_blank" rel="noopener" aria-label="Twitter">
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" class="navbar-nav-svg" viewBox="0 0 512 416.32" role="img"><title>Twitter</title><path fill="currentColor" d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"></path></svg>
        </a>
      </li>
      <li class="nav-item">
      <a href="/translate/" class="btn translate">Translate</a>
      </li>
    </ul>

  </div>
</nav>

</header>

<main id="main">

<div id="top" class="container-fluid jumbotron inverse-hyperlink ">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
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
  <div class="row flex-md-row-reverse">
  	<div class="col-lg-4">
		<div class="aside p-0">
			<div class="list-group pb-5">

        <a href="/what-you-can-do/" class="list-group-item list-group-item-action guide {{page | pageActive('what-you-can-do')}}"><span class="ca-gov-icon-arrow-next"></span> What you can do</a>
        
        <div class="list-group-item list-group-item-action guide pl-3">
          <ul class="list-unstyled">
            <li><a href="/what-you-can-do/#stay-home"><span class="ca-gov-icon-caret-right"></span> Stay home</a></li>
            <li><a href="/what-you-can-do/#avoid-group-events"><span class="ca-gov-icon-caret-right"></span> Avoid group events</a></li>
            <li><a href="/what-you-can-do/#testing"> <span class="ca-gov-icon-caret-right"></span> Testing and treatment</a></li>
          </ul>
        </div>
        
				<a href="/education/#content-begin" class="list-group-item list-group-item-action guide {{page | pageActive('education')}}"><span class="ca-gov-icon-arrow-next"></span> Education </a>
				<a href="/employment/#content-begin" class="list-group-item list-group-item-action guide {{page | pageActive('employment')}}"><span class="ca-gov-icon-arrow-next"></span> Employment </a>
				<a href="/healthcare/#content-begin" class="list-group-item list-group-item-action guide {{page | pageActive('healthcare')}}"><span class="ca-gov-icon-arrow-next"></span> Healthcare </a>
				<a href="/safety-in-public-places/#content-begin" class="list-group-item list-group-item-action guide {{page | pageActive('safety-in-public-places')}}"><span class="ca-gov-icon-arrow-next"></span> Safety in public places</a>
				<a href="/psa/#content-begin" class="list-group-item list-group-item-action guide {{page | pageActive('taxes')}}"><span class="ca-gov-icon-arrow-next"></span> Public safety announcements</a>
        <a href="/state-local-resources/#content-begin" class="list-group-item list-group-item-action guide {{page | pageActive('state-local-resources')}}"><span class="ca-gov-icon-arrow-next"></span> State and local resources</a>
			</div>
			</div>
		</div>
    <div class="col-lg-8">      

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

<div class="footer alpha-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-12">
          <ul class="list-group list list-group-horizontal-lg flex-fill list-group-flush">
            <li class="list-group-item alpha-footer"><a href="https://www.cdph.ca.gov/Programs/CID/DCDC/Pages/Immunization/ncov2019.aspx" target="_blank">Department of Public Health</a></li>
            <li class="list-group-item alpha-footer"><a href="https://www.gov.ca.gov/newsroom/" target="_blank">Governor's Newsroom</a></li>
            <li class="list-group-item alpha-footer"><a href="https://www.ca.gov/accessibility/" target="_blank">Accessibility</a></li>
            <li class="list-group-item alpha-footer"><a href="https://www.ca.gov/privacy-policy/" target="_blank">Privacy Policy</a></li>
          </ul>
          <p class="text-secondary">Official California State Government Website</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="alphabar">
  <div class="container text-right">
    <p><a class="pr-3" href="#top">Back to top</a><a href="/">Home</a></p>
  </div>
</div>