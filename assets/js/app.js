
// Get all horizontal scroll element
var horizontals = document.querySelectorAll('.section--horizontal');

// For each horizontal scroll element, apply the effect
horizontals.forEach(function (horizontal) {
  // Get the inner element
  var inner = horizontal.querySelector('.section__inner');

  // When the user scroll and an animation frame is available
  window.addEventListener('scroll', function () {
    window.requestAnimationFrame(function () {

      // The distance to scroll inside the horizontal element
      // is its height - the window's height
      var toGo = horizontal.offsetHeight - window.innerHeight;

      // The scroll position inside the element
      // is the scroll position - the element's distance from the top
      var position = window.scrollY - horizontal.offsetTop;

      // The progression between 0 & 1 is the scroll position
      // inside the element divided by the distance to scroll
      var progression = (position / toGo);

      // If progression is between 0 & 1 that means we are viewing
      // the section so fix it
      if (progression > 0 && progression < 1) {
        horizontal.classList.add('section--isFixed');
      } else { // Don't fix it
        horizontal.classList.remove('section--isFixed');
      }

      // If the progression is above 1 that means the
      // section has been completly scrolled
      if (progression >= 1) {
        horizontal.classList.add('section--isScrolled');
      } else {
        horizontal.classList.remove('section--isScrolled');
      }

      // Set the translation for the element
      setTranslateX(inner, progression);
    });
  });
});

function setTranslateX(element, progression) {
  // Limit the progression factor between 0 & 1
  if (progression > 1) {
    progression = 1;
  } else if (progression < 0) {
    progression = 0;
  }
  // The size to move is the element width minus the window width
  var toMove = element.offsetWidth - window.innerWidth;

  // The transform factor is the size to move multiplied by the progression
  var transform = (-1 * toMove * progression) + 'px';
  element.style.transform = 'translateX(' + transform + ')';
  let roundOne = document.getElementById('roundOne');

  roundOne.addEventListener('click', () => {
    element.style.transform = 'translateX(' + -100 + 'vw' + ')';
    var transform = (-1 * toMove * progression) + 'px';

  })
}

// page article hover

let postit = document.getElementById('postit');
let postitTwo = document.getElementById('postitTwo');
let close = document.getElementById('close');

postit.addEventListener('click', () => {
  postit.classList.add('hidden');
  postitTwo.classList.remove('hidden');
});

close.addEventListener('click', () => {
  postit.classList.remove('hidden');
  postitTwo.classList.add('hidden');
})

// chapter appear

let chapter = document.getElementById('chapter');
let lineIn = document.getElementById('line__in');
let chapterOne = document.getElementById('chapterOne');
var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
var scrolled = (winScroll / height) * 100;

window.addEventListener('wheel', () => {
  // console.log(height);
  // 3358
  if (scrollY >= 300) {
    chapter.style.opacity = '1';
  }
  else {
    chapter.style.opacity = '0';
  }
  if (scrollY >= 1) {
    lineIn.style.width = scrolled + "px";
  }
})


// custom cursor
let cursor = document.getElementById('cursor');

document.addEventListener('mousemove', e => {
  cursor.setAttribute('style', 'top:' + (e.pageY + -5) + 'px; left:' + (e.pageX - 10) + 'px;');
});



//audio play 

let audio = document.getElementById('audio');
let sound = document.getElementById('sound');
let promptSound = 0;


sound.addEventListener('click', () => {
  promptSound++;
  if (promptSound % 2 != 0) {
    audio.pause();
  } else {
    audio.play();
  }
});

let vid = document.querySelectorAll('video');
for (let i = 0; i < vid.length; i++) {

  vid[i].addEventListener('mouseover', (e) => {
    vid[i].play();
    audio.pause();
  });
  
  vid[i].addEventListener('mouseleave', (e) => {
    vid[i ].pause();
    audio.play();
  })
  
}
