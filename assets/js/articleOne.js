let articleOne = (id) => {
  let date = document.getElementById('date');
  let paragraphOne = document.getElementById('paragraphOne');
  let paragraphTwo = document.getElementById('paragraphTwo');


  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    date.innerHTML = `${data.articles[id].date_article}`;
    paragraphOne.innerHTML = `${data.articles[id].paragraph_one}`;
    paragraphTwo.innerHTML = `${data.articles[id].paragraph_two}`;
    console.log(data.articles[data.articles[id].id]);

  }).catch(err => console.error(err))
};

// paragraph3

let notes = document.getElementById('notes');
let notesText = document.getElementById('notes--text');
let prompt = 0;
let paragraphTwo = document.getElementById('paragraphTwo');

notes.addEventListener('click', () => {
  prompt++;
  notes.classList.remove('close');
  notes.style.height = '420px';
  if (prompt === 1) {
    asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
      // Boucle sur la collection
      // Ajouter une balise dans le DOM
      notesText.innerHTML += `${data.articles[id].paragraph_three}`;
    }).catch(err => console.error(err))
  }

})
articleOne(4);



