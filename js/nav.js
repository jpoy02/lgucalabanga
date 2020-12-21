if ($(document).ready()) {
  if (location.href.split('/').pop() != 'index.php') {
    $('header').addClass('scrolled');
  }

  $('[data-toggle="popover"]').popover();

}

// window.onbeforeunload = function () {
//   return "Data will be lost if you leave the page, are you sure?";
// }

// Variable Selectors
const navItem = document.querySelectorAll('.nav-item');
const header = document.querySelector('header');
const input = document.querySelectorAll('input');

// PLUGINS
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin);

//Defaults
ScrollTrigger.defaults({
  // markers: true
});

//FUNCTIONS
function checkInputBeforeReload() {
  input.forEach(input => {
    if (input && input.value) {
      window.onbeforeunload = function () {
        return "Data will be lost if you leave the page, are you sure?";
      }
    }
  });
}


function addInactive() {
  $('.nav-item').each(() => {
    if (!$('.nav-item').hasClass('active')) {
      $('.nav-item').addClass('inactive')
    } else {
      $('.nav-item').removeClass('inactive');
    }
  })
}

function dropdownCalcTop() {
  const headerHeight = header.offsetHeight
  $('.nav-item-dropdown').css('top', headerHeight + 3);
}

function navItemAnim() {
  let tl = gsap.timeline();
  tl.to('.nav-item.hide', {
      duration: .3,
      opacity: 0,
      stagger: .05
    })
    .to('.nav-item.hide', {
      duration: .01,
      display: 'none'
    })
    .set('aside li', {
      opacity: 0
    })
    .to('aside li', {
      duration: .01,
      display: 'flex'
    })
    .fromTo('aside h1', {
      opacity: 0
    }, {
      display: 'block',
      opacity: 1,
      duration: .1
    })
    .to('aside', {
      duration: .5,
      maxHeight: '400px',
    })
    .to('aside li', {
      duration: .1,
      opacity: 1,
      stagger: .3
    })

  if (!tl.reversed()) {
    tl.play();
  } else {
    tl.reverse();
  }

}

function clearActiveDropdown() {
  const navItemDropdown = document.querySelectorAll('.nav-item-dropdown')

  navItemDropdown.forEach(navItemDropdown => {
    if ($(navItemDropdown).is(':visible')) {
      $(navItemDropdown).slideUp(100);
    }

  });
}

window.addEventListener('click', (e) => {
  e.stopImmediatePropagation();
  clearActiveDropdown();
  // $('header').removeClass('scrolled');
})


window.addEventListener("scroll", (e) => {

  // header.scrollHeight
  if (this.scrollY > 0) {

    if (!$('header').hasClass('scrolled')) {

      $('header').addClass('scrolled');
      gsap.set('header', {
        background: '#fff'
      })
      gsap.from('header', {
        duration: .5,
        background: 'transparet',
        opacity: 0
      });
    } else {
      return true
    }
  } else if (this.scrollY == 0) {


    if (location.href.split('/').pop() != 'index.php') { // CHECK IF LOCATION IS NOT INDEX
      $('header').addClass('scrolled');
    } else {
      if ($('header').hasClass('scrolled')) {

        $('header').removeClass('scrolled');
        gsap.to('header', {
          duration: .3,
          background: 'transparent',
          opacity: 1
        });
      } else {
        return true
      }
    }








    clearActiveDropdown();
  }
})


const navItemClicked = () => {

  navItem.forEach((navItem, index) => {
    navItem.addEventListener('click', (e) => {
      // e.preventDefault(); 
      e.stopImmediatePropagation();
      var thisDropdown = navItem.querySelector('.nav-item-dropdown');

      // FIXED CSS PROPERTIES
      $(header).addClass('scrolled');
      $(header).css('background', '#fff');


      // REMOVE VISIBLE DROPDOWN
      clearActiveDropdown()

      $(thisDropdown).slideToggle(300);

      gsap.fromTo('.nav-item-dropdown li', 1, {
        opacity: 0,
      }, {
        opacity: 1,
        // stagger: .04
      })

    });
  });
}

navItemClicked();
dropdownCalcTop();
checkInputBeforeReload();
// navClicked();




/*
const navItemActive = document.querySelector('navI');

    addInactive();
    navItem.classList.remove('inactive');
    navItem.classList.add('active');


    if($(navItem).children('.nav-item-dropdown').hasClass('active')){

      var tl = gsap.timeline();
      tl.set('.nav-item-dropdown', {height: 'auto'})
      .to('.nav-item-dropdown', {height: 0 })
      .to('.nav-item-dropdown', {visibility: 'hidden' })
      $(navItem).find('.nav-item-dropdown').removeClass('active');
      $(navItem).removeClass('active');

    }

    else if (!navItem.querySelector('.nav-item-dropdown').classList.contains('active')){
      
      $(navItem).find('.nav-item-dropdown').addClass('active');
      var tl = gsap.timeline();
      tl.set('.nav-item-dropdown', {height: 'auto', visibility: 'visible'})
      .from('.nav-item-dropdown', {height: 0 });
    }
  })
*/