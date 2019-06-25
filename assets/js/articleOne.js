let articleOne = () => {
  let date = document.getElementById('date');
  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    date.innerHTML += `${data.articles[1].date_article}`;


  }).catch(err => console.error(err))


  let paragraphOne = document.getElementById('paragraphOne');
  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    paragraphOne.innerHTML += `${data.articles[1].paragraph_one}`;


  }).catch(err => console.error(err))


  let paragraphTwo = document.getElementById('paragraphTwo');
  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    paragraphTwo.innerHTML += `${data.articles[1].paragraph_two}`;


  }).catch(err => console.error(err));

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
      notesText.innerHTML += `${data.articles[1].paragraph_three}`;


    }).catch(err => console.error(err))


  }
})



articleOne();
