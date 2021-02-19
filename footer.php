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

<script type="module" src="https://staging.covid19.ca.gov/css/build/built.js"></script>
<script type="module">
// adding dark accordion classes
// Dark accorion is generated by eleventuy.js

let acc = document.querySelector(".dark-accordion-bg"); 
if(acc) {
    let nextSibling = acc.nextElementSibling;
    nextSibling.classList.add("dark-accordion-sibling");
    
    let firstChild = acc.firstElementChild;
    firstChild.classList.add("dark-accordion-first");
  }

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
                  ${originalHeader.outerHTML}
                  </div><div class="plus-munus"><cagov-plus></cagov-plus><cagov-minus></cagov-minus><</div>
                </button>
                <div class="card-container" aria-hidden="true">
                  <div class="card-body">
                  </div>
                </div>
              </div>`;
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
  })
}
findAccordions();
</script>
<script type="module" src="https://d3js.org/d3.v6.min.js"></script>
<script type="module" src="https://staging.covid19.ca.gov/css/build/vaccines.js"></script>

</body>
</html>
