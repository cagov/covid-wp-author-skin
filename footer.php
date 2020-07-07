<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alpha
 */

?>

	</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="module">class e extends HTMLElement{connectedCallback(){this.expandTargets=this.querySelectorAll(".list-group-item-action"),this.expandTargets.forEach(e=>{let t=e.querySelector(".details");t.setAttribute("data-collapsed","true"),t.style.height="0px",t.setAttribute("aria-hidden","true"),e.addEventListener("click",this.listen)})}listen(){let e=this.querySelector(".details"),t=this.querySelector(".step-description");var i,a;"true"===e.getAttribute("data-collapsed")?(a=(i=e).scrollHeight,i.style.height=a+"px",i.setAttribute("data-collapsed","false"),e.setAttribute("data-collapsed","false"),t.setAttribute("aria-expanded","true"),e.setAttribute("aria-hidden","false"),this.classList.add("list-open")):(!function(e){var t=e.scrollHeight;requestAnimationFrame((function(){e.style.height=t+"px",requestAnimationFrame((function(){e.style.height="0px"}))})),e.setAttribute("data-collapsed","true"),e.setAttribute("aria-hidden","true")}(e),this.classList.remove("list-open"),t.setAttribute("aria-expanded","false"))}}window.customElements.define("cwds-step-list",e);class t extends HTMLElement{connectedCallback(){this.expandTarget=this.querySelector(".card-container"),this.expandButton=this.querySelector(".card-header"),this.expandButton.addEventListener("click",this.listen.bind(this)),this.activateButton=this.querySelector(".card-header")}listen(){if(this.cardBodyHeight||(this.cardBodyHeight=this.querySelector(".card-body").clientHeight),this.expandTarget.clientHeight>0){this.expandTarget.style.height="0px",this.expandTarget.setAttribute("aria-hidden","true"),this.querySelector(".card-header").classList.remove("accordion-alpha-open");let e=this.expandTarget;this.activateButton.setAttribute("aria-expanded","false"),setTimeout((function(){e.style.display="none"}),300)}else this.expandTarget.style.display="block",this.expandTarget.style.height=this.cardBodyHeight+"px",this.expandTarget.setAttribute("aria-hidden","false"),this.querySelector(".card-header").classList.add("accordion-alpha-open"),this.querySelector(".card-container").classList.remove("collapsed"),this.activateButton.setAttribute("aria-expanded","true")}}window.customElements.define("cwds-accordion",t),function(e){var t=new Image;function i(e){e&&"load"===e.type&&1==t.width||document.body.classList.add("no-webp")}t.onerror=i,t.onload=i,t.src=e}("data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA="),window.onload=e=>{!function(){function e(t,i){"undefined"!=typeof ga?ga("send","event","click",t,i):setTimeout((function(){e(t,i)}),500)}function t(e,t){"false"===e[t]&&(e[t]="true"),e[t]="false"}document.querySelectorAll("cwds-accordion").forEach(t=>{t.addEventListener("click",(function(){this.querySelector(".accordion-title")&&e("accordion",this.querySelector(".accordion-title").textContent.trim())}))}),document.querySelectorAll("a").forEach(t=>{t.href.indexOf(window.location.hostname)>-1?t.href.indexOf(".pdf")>-1&&t.addEventListener("click",(function(){e("pdf",this.href.split(window.location.hostname)[1])})):t.addEventListener("click",(function(){e("offsite",this.href)}))}),document.querySelectorAll(".show-all").forEach(e=>{const t=e.classList.contains("d-none");e.addEventListener("click",()=>{let e=0;document.querySelectorAll("cwds-step-list .list-group-item-action"+(t?".list-open":":not(.list-open)")).forEach(t=>setTimeout(()=>t.click(),50*e++)),document.querySelectorAll(".show-all").forEach(e=>e.classList.toggle("d-none"))})}),document.querySelectorAll(".navbar-toggler").forEach((function(e){e.addEventListener("click",(function(i){document.querySelector("#"+e.getAttribute("aria-controls")).classList.toggle("show"),t(this,"aria-expanded")}))})),document.querySelectorAll(".dropdown-toggle").forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault(),document.querySelector('[aria-labelledby="'+this.id+'"]').classList.toggle("show"),t(this,"aria-expanded")}))})),document.body.addEventListener("click",(function(e){document.querySelectorAll(".dropdown-menu.show").forEach(t=>{t.parentNode!==e.target.parentNode&&t.classList.remove("show")})}))}()};






function findAccordions() {
	const headerclass = 'wp-accordion';
  const contentclass = 'wp-accordion-content';
  let elsToRemove = [];
	for(const originalHeader of document.querySelectorAll(`.${headerclass}`)) {

		//create the wrapper element and wrap it around the header
		const cwdscontainer = document.createElement('cwds-accordion');
		cwdscontainer.innerHTML = `<div class="card">
            <button class="card-header accordion-alpha" type="button" aria-expanded="false">
              <div class="accordion-title">
                <p>${originalHeader.outerHTML}</p>
              </div>
            </button>
            <div class="card-container" aria-hidden="true" style="height: 0px;">
              <div class="card-body"></div>
            </div></div>`;
		const cardBody = cwdscontainer.querySelector('.card-body');

		//Add all remaining content classes to the card body, they must be directly after the new container
    let el = originalHeader;
		while (el) {
			el = el.nextSibling;
			if(el && el.classList && el.classList.contains(`${contentclass}`)) {
        let newEl = el.cloneNode(true);
        newEl.classList.remove(contentclass);
        el.classList.remove(contentclass);
        cardBody.appendChild(newEl);
        elsToRemove.push(el);
			}
			if(el && el.classList && el.classList.contains(`${headerclass}`)) {
				el = null;
			}
		}

		originalHeader.parentNode.replaceChild(cwdscontainer, originalHeader);
  }
  elsToRemove.forEach(ele => {
    ele.parentNode.removeChild(ele)
    console.log('eh')
    console.log(ele)
  })
}
findAccordions();
</script>

</body>
</html>
