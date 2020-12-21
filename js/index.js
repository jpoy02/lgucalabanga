// PLUGINS
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollToPlugin);


// FUNCTIONS
function goToSection(section, anim) {
  gsap.to(window, {
    scrollTo: {
      y: section,
      autoKill: false
    },
    duration: .5
  });

  if (anim) {
    anim.restart();
  }
}

// PANEL SNAPPING
document.querySelectorAll(".panel").forEach(section => {

  ScrollTrigger.create({
    trigger: section,
    start: "25% bottom",
    id: "Enter",
    // markers: true,
    scrub: 1,
    snap: 1 / (section.length - 1),
    onEnter: () => goToSection(section),
  });

  // ScrollTrigger.create({
  //     trigger: section,
  //     start: "top center",
  //     // end: "center center",
  //     id: "EnterBack",
  // markers: true,
  //     onEnterBack: () => goToSection(section),
  // });
});

// ANIMATIONS
const mayorSection = () => {
  let tl = gsap.timeline({
      scrollTrigger: {
        trigger: '.mayor-anim',
        // markers: true,
        start: '10% 70%',
        toggleActions: "restart none none reset"
      }
    })

    .from('.mayor-anim-img', {
      opacity: 0,
      y: 100,
      duration: 1
    })
    .from('.message-1', {
      opacity: 0,
      y: 100,
    }, '-=.5')
    .from('.message-2', {
      opacity: 0,
      y: 100,
    }, '-=.3')
    .from('.mayor-title', {
      opacity: 0,
      y: 100,
    }, '-=.2')
    .from('.mom', {
      opacity: 0,
      y: 100,
    }, '1')
}

const featuredSection = () => {
  let tl = gsap.timeline({
      scrollTrigger: {
        trigger: '.featured-anim',
        // markers: true,
        start: '10% 70%',
        toggleActions: "restart none none reset"
      }
    })
    .from('.featured', {
      duration: 1,
      opacity: 0,
      y: 100
    })
}

const newsSection = () => {

  $('.news-updates .line').css('background', 'lime');

  let tl = gsap.timeline({
      scrollTrigger: {
        trigger: '.news-anim',
        // markers: true,
        start: '10% 70%',
        toggleActions: "restart none none reset"
      }
    })
    .from('.news-anim-title', {
      opacity: 0,
      y: 100
    })
    .from('.news-updates .line', {
      duration: 3,
      height: '50px',
      opacity: 0,
      x: '-100%',
      background: 'lime'
    })
    .from('.news-card', {
      duration: 1,
      stagger: .2,
      opacity: 0,
      y: 100,
    }, '-=3')
    // .set('.news-updates .line', {
    //   background: 'lime'
    // })

}


const annSection = () => {
  let tl = gsap.timeline({
      scrollTrigger: {
        trigger: '.ann-anim',
        // markers: true,
        start: '10% 70%',
        toggleActions: "restart none none reset"
      }
    })
    .from('.ann-anim-title', {
      opacity: 0,
      y: 100
    })
    .from('.announcement-sec .line', {
      duration: 3,
      height: '50px',
      opacity: 0,
      x: '-100%',
      background: 'tomato'
    })
    .from('.ann-item', {
      duration: 1,
      stagger: .2,
      opacity: 0,
      y: 100,
    }, '-=3')
    .set('.announcement-sec .line', {
      background: 'tomato'
    })

}

// END OF ANIMATIONs


annSection();
newsSection();
mayorSection();
featuredSection();