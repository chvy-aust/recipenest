import './bootstrap';
import AOS from 'aos';
import Swiper from 'swiper';

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

//   RECIPE NEST SPECIFIC FUNCTIONS

  /* Toggle/Hide badges */
function loadBadges() {
    document.querySelectorAll('.badge-bar').forEach((bar) => {
        const badges = bar.querySelectorAll('.badge');
        const moreBtn = bar.querySelector('.more-btn');

        let remainingWidth = bar.offsetWidth - (moreBtn.offsetWidth + 5);

        moreBtn.style.display = 'none';
        badges.forEach(badge => {
            badge.style.display = 'inline-block';
        });

        for (let i = 0; i < badges.length; i++) {
            const badgeWidth = badges[i].offsetWidth + 5;

            if (badgeWidth <= remainingWidth) {
                remainingWidth -= badgeWidth;
            } else {
                let moreCount = badges.length - i;

                for (let j = i; j < badges.length; j++) {
                    badges[j].style.display = 'none';
                }
                moreBtn.textContent = `+${moreCount}`;
                moreBtn.style.display = 'inline-block';
                break;
            }
        }
    });
}

    document.addEventListener("DOMContentLoaded",loadBadges);
    window.addEventListener("load", loadBadges);
    window.addEventListener("resize", loadBadges);

const accountMenuToggleBtn = document.querySelector('.account-menu-toggle');
function toggleAccountMenu() {
    const menuOpened = "bi bi-chevron-down";
    const menuClosed = "bi bi-chevron-up";

    if (accountMenuToggleBtn.classList.contains(menuClosed)) {
            accountMenuToggleBtn.classList.replace(menuClosed, menuOpened)
    } else {
            accountMenuToggleBtn.classList.replace(menuOpened, menuClosed)
    };
}

    accountMenuToggleBtn.addEventListener('click', toggleAccountMenu)

})();
