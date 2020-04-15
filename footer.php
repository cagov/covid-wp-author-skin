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

<script type="module">class e extends HTMLElement{connectedCallback(){this.expandTargets=this.querySelectorAll(".list-group-item-action"),this.expandTargets.forEach(e=>{let t=e.querySelector(".details");t.setAttribute("data-collapsed","true"),t.style.height="0px",t.setAttribute("aria-hidden","true"),e.addEventListener("click",this.listen)})}listen(){let e=this.querySelector(".details"),t=this.querySelector(".step-description");var i,s;"true"===e.getAttribute("data-collapsed")?(s=(i=e).scrollHeight,i.style.height=s+"px",i.setAttribute("data-collapsed","false"),e.setAttribute("data-collapsed","false"),t.setAttribute("aria-expanded","true"),e.setAttribute("aria-hidden","false"),this.classList.add("list-open")):(!function(e){var t=e.scrollHeight;requestAnimationFrame((function(){e.style.height=t+"px",requestAnimationFrame((function(){e.style.height="0px"}))})),e.setAttribute("data-collapsed","true"),e.setAttribute("aria-hidden","true")}(e),this.classList.remove("list-open"),t.setAttribute("aria-expanded","false"))}}window.customElements.define("cwds-step-list",e);class t extends HTMLElement{connectedCallback(){this.expandTarget=this.querySelector(".card-container"),this.expandButton=this.querySelector(".card-header"),this.expandButton.addEventListener("click",this.listen.bind(this)),this.activateButton=this.querySelector(".card-header")}listen(){if(this.cardBodyHeight||(this.cardBodyHeight=this.querySelector(".card-body").clientHeight),this.expandTarget.clientHeight>0){this.expandTarget.style.height="0px",this.expandTarget.setAttribute("aria-hidden","true"),this.querySelector(".card-header").classList.remove("accordion-alpha-open");let e=this.expandTarget;this.activateButton.setAttribute("aria-expanded","false"),setTimeout((function(){e.style.display="none"}),300)}else this.expandTarget.style.display="block",this.expandTarget.style.height=this.cardBodyHeight+"px",this.expandTarget.setAttribute("aria-hidden","false"),this.querySelector(".card-header").classList.add("accordion-alpha-open"),this.querySelector(".card-container").classList.remove("collapsed"),this.activateButton.setAttribute("aria-expanded","true")}}window.customElements.define("cwds-accordion",t),document.querySelectorAll(".show-all").forEach(e=>{const t=e.classList.contains("d-none");e.addEventListener("click",()=>{let e=0;document.querySelectorAll(`cwds-step-list .list-group-item-action${t?".list-open":":not(.list-open)"}`).forEach(t=>setTimeout(()=>t.click(),50*e++)),document.querySelectorAll(".show-all").forEach(e=>e.classList.toggle("d-none"))})});
</script>

</body>
</html>
