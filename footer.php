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

<script type="module">
function findAccordions() {
	const headerclass = 'wp-accordion';
  const contentclass = 'wp-accordion-content';
  let elsToRemove = [];
	for(const originalHeader of document.querySelectorAll(`.${headerclass}`)) {

		//create the wrapper element and wrap it around the header
		const cwdscontainer = document.createElement('cagov-accordion');
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
