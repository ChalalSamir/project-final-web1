let fil = document.getElementById('fil');
let filIn = document.getElementById('filIn');
let compteur = 0;
let value = 0;

let up = (val) => {
  window.addEventListener('wheel', (e) => {
    if (e.deltaY > 0) {
      if (compteur < 9) {
        value += val;
        compteur++;
        filIn.style.width = value + "px";
        filIn.style.transition = "2s width";
      }
    }
  });
}

up(100);







