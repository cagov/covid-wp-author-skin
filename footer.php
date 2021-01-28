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
class CWDSStepList extends HTMLElement {
  connectedCallback() {
    this.expandTargets = this.querySelectorAll('.list-group-item-action');
    this.expandTargets.forEach( (item) => {
      let detailsEl = item.querySelector('.details');
      detailsEl.setAttribute('data-collapsed', 'true');
      detailsEl.style.height = '0px';
      detailsEl.setAttribute('aria-hidden','true');
      item.addEventListener('click', this.listen);
    });
  }

  listen() {
    let section = this.querySelector('.details');
    let activeButton = this.querySelector('.step-description');

    let isCollapsed = section.getAttribute('data-collapsed') === 'true';
      
    if(isCollapsed) {
      expandSection(section);
      section.setAttribute('data-collapsed', 'false');
      activeButton.setAttribute('aria-expanded','true');
      section.setAttribute('aria-hidden', 'false');
      this.classList.add('list-open');      
    } else {
      collapseSection(section);
      this.classList.remove('list-open');
      activeButton.setAttribute('aria-expanded','false');
    }
  }
}

window.customElements.define('cwds-step-list', CWDSStepList);

/* expand, collapse thanks to: https://css-tricks.com/using-css-transitions-auto-dimensions/ */
function collapseSection(element) {
  var sectionHeight = element.scrollHeight;

  requestAnimationFrame(function() {
    element.style.height = sectionHeight + 'px';
    
    requestAnimationFrame(function() {
      element.style.height = 0 + 'px';
    });
  });
  
  element.setAttribute('data-collapsed', 'true');
  element.setAttribute('aria-hidden', 'true');
}

function expandSection(element) {
  var sectionHeight = element.scrollHeight;
  element.style.height = sectionHeight + 'px';
  element.setAttribute('data-collapsed', 'false');
}

class CaGovAccordion extends window.HTMLElement {
  connectedCallback () {
    this.classList.add('prog-enhanced');
    this.expandTarget = this.querySelector('.card-container');
    this.expandButton = this.querySelector('.card-header');
    this.expandButton.addEventListener('click', this.listen.bind(this));
    this.activateButton = this.querySelector('.card-header');
  }

  listen () {
    if (!this.cardBodyHeight) {
      this.cardBodyHeight = this.querySelector('.card-body').clientHeight;
    }
    if (this.expandTarget.clientHeight > 0) {
      this.expandTarget.style.height = '0px';
      this.expandTarget.setAttribute('aria-hidden', 'true');
      this.querySelector('.card-header').classList.remove('accordion-alpha-open');
      const expando = this.expandTarget;
      this.activateButton.setAttribute('aria-expanded', 'false');
      setTimeout(function () {
        expando.style.display = 'none';
      }, 300);
    } else {
      this.expandTarget.style.display = 'block';
      this.expandTarget.style.height = this.cardBodyHeight + 'px';
      this.expandTarget.setAttribute('aria-hidden', 'false');
      this.querySelector('.card-header').classList.add('accordion-alpha-open');
      this.querySelector('.card-container').classList.remove('collapsed');
      this.activateButton.setAttribute('aria-expanded', 'true');
    }
  }
}
window.customElements.define('cagov-accordion', CaGovAccordion);

/*
  The classList supplied to the component should include at least the following four utility classes.
  1. A size class. (ex: cwdsarrow-size-sm)
  2. An idle-state class. (example: cwdsarrow-idle-orange)
  3. An on-hover class. (example: cwdsarrow-hover-darkblue)
  4. An on-focus class. (example: cwdsarrow-focus-darkblue)
  Maybe consider providing a default set via Javascript here.
*/
class CWDSArrow extends window.HTMLElement {
  connectedCallback () {
    const { classPrefix, classList } = this.dataset;
    this.innerHTML = `<figure class="cwdsarrow ${classPrefix}-cwdsarrow ${classList}" aria-hidden="true">
      <span class="cwdsarrow-circle"></span>
      <span class="cwdsarrow-arrow-wrapper">
        <span class="cwdsarrow-arrow">
          <span class="cwdsarrow-arrow-svg">
            <svg class="cwdsarrow-arrow-svg-art" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 15"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="2"><path d="M13.1506849 1.02215525l6.5753425 6.57534247-6.5753425 6.57534248M0 7.59749772h19.7260274"></path></g></svg>
          </span>
        </span>
        <span class="cwdsarrow-arrow">
          <span class="cwdsarrow-arrow-svg">
            <svg class="cwdsarrow-arrow-svg-art" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 15"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="2"><path d="M13.1506849 1.02215525l6.5753425 6.57534247-6.5753425 6.57534248M0 7.59749772h19.7260274"></path></g></svg>
          </span>
        </span>
      </span>
    </figure>`;
  }

}
window.customElements.define('cwds-arrow', CWDSArrow);

// This is just the arrow icons
class CWDSArrowIcon extends window.HTMLElement {
  connectedCallback () {
    const { classPrefix, classList } = this.dataset;
    this.innerHTML = `<div class="link-arrow-icon" aria-hidden="true"><svg class="link-arrow-icon-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 60.3 16.1" style="enable-background:new 0 0 60.3 16.1;" xml:space="preserve">
    <path class="arrow1" d="M51.5,2.3L56.1,7H38.6C38,7,37.5,7.4,37.5,8s0.5,1.1,1.1,1.1h17.5l-4.6,4.6c-0.4,0.4-0.4,1.1,0,1.5
      s1.1,0.4,1.5,0l6.5-6.5c0,0,0,0,0,0c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.3,0.1-0.6,0-0.8c-0.1-0.1-0.1-0.2-0.2-0.4L53,0.8
      c-0.4-0.4-1.1-0.4-1.5,0C51.1,1.2,51.1,1.9,51.5,2.3z"/>
    <path class="arrow2" d="M13.9,2.3L18.6,7H1.1C0.5,7,0,7.4,0,8s0.5,1.1,1.1,1.1h17.5l-4.6,4.6c-0.4,0.4-0.4,1.1,0,1.5s1.1,0.4,1.5,0
      l6.5-6.5c0,0,0,0,0,0c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.3,0.1-0.6,0-0.8c-0.1-0.1-0.1-0.2-0.2-0.4l-6.5-6.5c-0.4-0.4-1.1-0.4-1.5,0
      S13.5,1.9,13.9,2.3z"/>
    </svg></div>`;
  }

}
window.customElements.define('cagov-arrow', CWDSArrowIcon);

function navTemplate (data, dataset) {
  return `<nav class="expanded-menu" role="navigation" aria-label="Site Navigation" aria-hidden="true" id="main-menu" tabindex="-1">

    <div class="expanded-menu-grid">

      <div class="expanded-menu-search" role="search">
        <form class="expanded-menu-search-form" action="${dataset.search}">
          <label class="expanded-menu-search-label" for="search-site">${dataset.labelSearch}</label>
          <input name="q" id="search-site" class="expanded-menu-search-field" type="search" placeholder="${dataset.labelPlaceholder}">
          <button class="expanded-menu-search-button" aria-label="Search the Website">
            <svg class="expanded-menu-search-button-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13.8,8.5c0-3-2.4-5.4-5.4-5.4c-3,0-5.4,2.4-5.4,5.4s2.4,5.4,5.4,5.4C11.4,13.8,13.8,11.4,13.8,8.5z M20,18.5 c0,0.8-0.7,1.5-1.5,1.5c-0.4,0-0.8-0.2-1.1-0.5l-4.1-4.1c-1.4,1-3.1,1.5-4.8,1.5C3.8,16.9,0,13.1,0,8.5S3.8,0,8.5,0
              c4.7,0,8.5,3.8,8.5,8.5c0,1.7-0.5,3.4-1.5,4.8l4.1,4.1C19.8,17.7,20,18.1,20,18.5z"/></svg>
          </button>
        </form>
      </div>
      <div class="expanded-menu-section mobile-only">
        <strong class="expanded-menu-section-header">
          <a class="expanded-menu-section-header-link js-event-hm-menu" href="/">${dataset.labelHome}</a>
        </strong>
      </div>
      ${data.sections.map(section => {
        return `<div class="expanded-menu-col section-${section.title.toLowerCase().replace(/ /g,'-')}">
          <div class="expanded-menu-section">
            <strong class="expanded-menu-section-header">
              <a class="expanded-menu-section-header-link js-expandable-mobile js-event-hm-menu" href="#">${section.title}</a>
              <span class="expanded-menu-section-header-arrow js-expandable-mobile"><svg class="expanded-menu-section-header-arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M16,5.1c0,0.4-0.1,0.7-0.4,0.9l-6.7,6.7C8.7,13,8.4,13.1,8,13.1c-0.4,0-0.7-0.1-0.9-0.4L0.4,6C0.1,5.8,0,5.5,0,5.1	c0-0.4,0.1-0.7,0.4-0.9l0.8-0.8C1.4,3.1,1.7,3,2.1,3C2.4,3,2.8,3.1,3,3.4l5,5l5-5C13.2,3.1,13.6,3,13.9,3c0.4,0,0.7,0.1,0.9,0.4
    l0.8,0.8C15.9,4.4,16,4.7,16,5.1z"></path></svg></span>
            </strong>
            <div class="expanded-menu-dropdown">
              ${section.links.map(link => {
                return `<a class="expanded-menu-dropdown-link js-event-hm-menu" href="${link.url}">${link.name}</a>`;
              }).join(' ')}
            </div>
          </div>
        </div>
        `;
      }).join(' ')}
    </div>
  </nav>
  <div class="mobile-menu-close"></div>

  <div>
    <button class="menu-trigger open-menu" aria-label="Open Menu" aria-haspopup="true" aria-expanded="false" aria-owns="mainMenu" aria-controls="mainMenu">
      <div class="hamburger">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
      <div class="menu-trigger-label menu-label" data-openlabel="${dataset.labelMenu}" data-closelabel="${dataset.labelMenuClose}">${dataset.labelMenu}</div>
    </button>
  </div>`;
}

class CAGOVOverlayNav extends window.HTMLElement {
  connectedCallback () {
    this.menuContentFile = this.dataset.json;
    window.fetch('https://staging.covid19.ca.gov'+this.menuContentFile)
      .then(response => response.json())
      .then(data => {
        this.innerHTML = navTemplate(data, this.dataset);
        this.querySelector('.open-menu').addEventListener('click', this.toggleMainMenu.bind(this));
        // this.querySelector('.expanded-menu-close-mobile').addEventListener('click', this.toggleMainMenu.bind(this));
        if (window.innerWidth < 1024) {
          this.expansionListeners(); // everything is expanded by default on big screens
        }
      });
  }

  toggleMainMenu () {
    if (this.querySelector('.hamburger').classList.contains('is-active')) {
      this.closeMainMenu();
    } else {
      this.openMainMenu();
    }
  }

  openMainMenu () {
    this.classList.add('display-menu');
    this.querySelector('.hamburger').classList.add('is-active');
    this.querySelector('.menu-trigger').classList.add('is-fixed');
    var menLabel = this.querySelector('.menu-trigger-label');
    menLabel.innerHTML = menLabel.getAttribute('data-closelabel');
    this.querySelector('#main-menu').setAttribute('aria-hidden', 'false');
    document.addEventListener('keydown', this.escapeMainMenu.bind(this));
    setTimeout(
      function () {
        this.classList.add('reveal-items');
        this.querySelector('#search-site').focus();
      }.bind(this),
      300
    );
  }

  closeMainMenu () {
    this.classList.remove('display-menu');
    this.classList.remove('reveal-items');
    this.querySelector('.hamburger').classList.remove('is-active');
    this.querySelector('.menu-trigger').classList.remove('is-fixed');
    var menLabel = this.querySelector('.menu-trigger-label');
    menLabel.innerHTML =  menLabel.getAttribute('data-openlabel');
    // what should we apply aria-expanded to?
    this.querySelector('#main-menu').setAttribute('aria-hidden', 'true');
    document.removeEventListener('keydown', this.escapeMainMenu.bind(this));
  }

  escapeMainMenu (event) {
    // Close the menu if user presses escape key.
    if (event.keyCode === 27) { this.closeMainMenu(); }
  }

  expansionListeners () {
    const allMenus = this.querySelectorAll('.js-expandable-mobile');
    allMenus.forEach(menu => {
      const nearestMenu = menu.closest('.expanded-menu-section');
      if (nearestMenu) {
        const nearestMenuDropDown = nearestMenu.querySelector('.expanded-menu-dropdown');
        if (nearestMenuDropDown) {
          nearestMenuDropDown.setAttribute('aria-hidden', 'true');
          menu.closest('.expanded-menu-col').setAttribute('aria-expanded', 'false');
        }
      }
      menu.addEventListener('click', function (event) {
        event.preventDefault();
        this.closest('.expanded-menu-section').classList.toggle('expanded');
        this.closest('.expanded-menu-col').setAttribute('aria-expanded', 'true');
        const closestDropDown = this.closest('.expanded-menu-section').querySelector('.expanded-menu-dropdown');
        if (closestDropDown) {
          closestDropDown.setAttribute('aria-hidden', 'false');
        }
      });
    });
  }
}
window.customElements.define('cagov-navoverlay', CAGOVOverlayNav);

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
                  </div><div class="plus-munus"></div>
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

</body>
</html>
