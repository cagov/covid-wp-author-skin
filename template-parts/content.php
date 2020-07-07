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
  <div class="js-survey-display"></div>
  <script type="module">
    function e(e){localStorage.setItem("surveyInteraction3",(new Date).getTime()),function e(t){"undefined"!=typeof gtag?ga("send","event","click","survey",t):setTimeout((function(){e(t)}),500)}(e)}!function(){if(function(){if(!localStorage.getItem("surveyInteraction3")&&Math.random()<.1)return!0;return!1}()){e("surveyDisplay");let t='<div role="alert">\n    <div class="container">\n      <div class="row">\n        <div class="col-md-12 alert-left js-disclaimer">\n          <p class="lead bold">Please take 2 minutes to complete our COVID-19 survey</p>\n          <button class="btn btn-secondary js-dismiss-survey" type="button" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">Dismiss</span></button>\n          <a href="https://www.surveymonkey.com/r/covid19california" target="_new" class="js-goto-survey"><button class="btn btn-primary" type="button" aria-label="Open survey" data-dismiss="alert"><span aria-hidden="true">OK</span></button></a>\n        </div>\n      </div>\n    </div>\n  </div>',n=document.querySelector(".js-survey-display");n.innerHTML=t,function(t){t.querySelector(".js-goto-survey").addEventListener("click",(function(){e("openSurvey")})),t.querySelector(".js-dismiss-survey").addEventListener("click",(function(n){n.preventDefault(),e("dismissSurvey"),t.remove()}))}(n)}}();

  </script>
  <nav id="top" class="navbar navbar-expand navbar-dark bd-navbar navbar-inverse px-0 pt-2 pb-3">
    <div class="container flex-wrap flex-lg-nowrap py-0 px-3 pr-0">
      <a href="https://covid19.ca.gov/"><img class="pr-3" src="https://covid19.ca.gov/img/Ca-Gov-Logo-White.svg" alt="ca.gov"></a>
      <div class="navbar-brand docs-brand navbar-left mr-3 ml-3 navbar-inverse bold">
        <a href="https://covid19.ca.gov/" aria-label="home">COVID19.CA.GOV</a>
      </div>
      <ul class="navbar-nav ml-sm-auto mobile ">
        <li class="nav-item pl-2">
          <a class="nav-link mr-0 pr-0" href="https://www.facebook.com/CAPublicHealth/" target="_blank" rel="noopener" aria-label="California public health Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="23" height="23" class="navbar-nav-svg" viewBox="0 0 50 50" alt="">
              <path fill="currentColor" d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path>
            </svg>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-0 pr-0" href="https://twitter.com/CAPublicHealth" target="_blank" rel="noopener" aria-label="California public health Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" class="navbar-nav-svg" viewBox="0 0 512 416.32" role="presentation" alt="">
              <title>Twitter</title>
              <path fill="currentColor" d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"></path>
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a rel="nofollow" href="/search/" class="btn translate">Search</a>
        </li>
        <li class="nav-item mr-0 pr-0">
          <div class="dropdown">
            <button
            class="btn translate dropdown-toggle"
            type="button"
            aria-expanded="false"
            aria-haspopup="true"
            data-toggle="dropdown"
            id="dropdown-menu-button"
          >
              Select language
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdown-menu-button">
              
                <a class="dropdown-item" rel="alternate" lang="es" hreflang="es" href="/es/">Español</a>
              
                <a class="dropdown-item" rel="alternate" lang="tl" hreflang="tl" href="/tl/">Tagalog</a>
              
                <a class="dropdown-item" rel="alternate" lang="ar" hreflang="ar" href="/ar/">العربية</a>
              
                <a class="dropdown-item" rel="alternate" lang="ko" hreflang="ko" href="/ko/">한국어</a>
              
                <a class="dropdown-item" rel="alternate" lang="vi" hreflang="vi" href="/vi/">Tiếng Việt</a>
              
                <a class="dropdown-item" rel="alternate" lang="zh-Hans" hreflang="zh-Hans" href="/zh-hans/">中文</a>
              
                <a class="dropdown-item" rel="alternate" lang="zh-Hant" hreflang="zh-Hant" href="/zh-hant/">文言</a>
              
              <a class="dropdown-item" href="/translate/">More…</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>

<div class="container-fluid bg-secondary-covid">
<nav class="container navbar navbar-expand-md navbar-light">
  
  <button class="navbar-toggler px-0 w-100" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <div class="navbar-brand d-sm-block d-md-none float-left ml-0 text-primary text-larger bold" href="#" style="">Menu</div><div class="ca-gov-icon-menu h1 text-primary text-right mr-0 float-right display-4"></div>
  </button>
  <div class="collapse navbar-collapse art-menu-full" id="navbarNavDropdown">
    <ul class="navbar-nav flex-row text-primary text-larger justify-content-between top-nav"><li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
            href="#"
            type="button" 
            aria-expanded="false" 
            aria-haspopup="true" 
            data-toggle="dropdown" 
            id="dropdown-menu-button-2">
            Get help
          </a>
          <div class="dropdown-menu" id="dropdown-2" aria-labelledby="dropdown-menu-button-2"><a class="dropdown-item" href="/get-financial-help/#top">Financial help</a><a class="dropdown-item" href="/food-resources/#top">Food and food assistance</a><a class="dropdown-item" href="/workers/#top">Workers</a><a class="dropdown-item" href="/business-and-employers/#top">Businesses and employers</a><a class="dropdown-item" href="/guide-immigrant-californians/#top">Immigrant communities</a><a class="dropdown-item" href="/housing-and-homelessness/#top">Housing and homelessness</a><a class="dropdown-item" href="/resources-for-emotional-support-and-well-being/#top">Emotional support</a><a class="dropdown-item" href="/manage-stress-for-health/#top">Manage your stress</a><a class="dropdown-item" href="/childcare/#top">Childcare</a></div>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
            href="#"
            type="button" 
            aria-expanded="false" 
            aria-haspopup="true" 
            data-toggle="dropdown" 
            id="dropdown-menu-button-3">
            Health information
          </a>
          <div class="dropdown-menu" id="dropdown-3" aria-labelledby="dropdown-menu-button-3"><a class="dropdown-item" href="/symptoms-and-risks/#top">Symptoms and risks</a><a class="dropdown-item" href="/testing-and-treatment/#top">Testing sites</a><a class="dropdown-item" href="/contact-tracing/#top">Contact tracing</a><a class="dropdown-item" href="/telehealth/#top">Telehealth</a><a class="dropdown-item" href="/healthcare/#top">Health care</a><a class="dropdown-item" href="/masks-and-ppe/#top">Masks</a><a class="dropdown-item" href="/hotline/#top">COVID-19 Hotline</a></div>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
            href="#"
            type="button" 
            aria-expanded="false" 
            aria-haspopup="true" 
            data-toggle="dropdown" 
            id="dropdown-menu-button-4">
            Working and living safely
          </a>
          <div class="dropdown-menu" id="dropdown-4" aria-labelledby="dropdown-menu-button-4"><a class="dropdown-item" href="/stay-home-except-for-essential-needs/#open">What&#39;s open</a><a class="dropdown-item" href="/stay-home-except-for-essential-needs/#top">Stay home Q&amp;A</a><a class="dropdown-item" href="/roadmap-counties/#top">County variance and map</a><a class="dropdown-item" href="/roadmap/#top">Reopening roadmap</a><a class="dropdown-item" href="/industry-guidance/#top">Industry guidance</a><a class="dropdown-item" href="/get-local-information/#top">Local info and alerts</a><a class="dropdown-item" href="/education/#top">Education</a><a class="dropdown-item" href="/care-in-senior-facilities/#top">Senior living</a><a class="dropdown-item" href="/public-recreation/#top">Public recreation</a><a class="dropdown-item" href="/contracts/#top">Contracts</a><a class="dropdown-item" href="/taxes/#top">Taxes</a><a class="dropdown-item" href="/hotel-rooms-for-california-healthcare-workers/#top">Hotels for health workers</a></div>
        </li><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" 
            href="#"
            type="button" 
            aria-expanded="false" 
            aria-haspopup="true" 
            data-toggle="dropdown" 
            id="dropdown-menu-button-5">
            How you can help
          </a>
          <div class="dropdown-menu" id="dropdown-5" aria-labelledby="dropdown-menu-button-5"><a class="dropdown-item" href="/discrimination/#top">Fighting discrimination</a><a class="dropdown-item" href="/plasma/#top">Plasma donation</a><a class="dropdown-item" href="/recovery-input/#top">Resilience roadmap survey</a><a class="dropdown-item" href="/healthcorps/#top">California Health Corps</a><a class="dropdown-item" href="https://state-of-california-agency.forms.fm/great-plates-delivered-food-provider-interest-form/forms/7917/">Great Plates provider form</a><a class="dropdown-item" href="https://toolkit.covid19.ca.gov/">Social media sharing</a><a class="dropdown-item" href="/more-ways-to-help/#top">More ways to help</a></div>
        </li></ul>
  </div>
</nav>
</div>

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
    <div class="col-lg-10">      

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