let articleOne = (id) => {
  let date = document.getElementById('date');
  let paragraphOne = document.getElementById('paragraphOne');
  let paragraphTwo = document.getElementById('paragraphTwo');
  let notes = document.getElementById('notes');
  let prompt = 0;
  let paragraphThree = document.getElementById('paragraphThree');
  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    date.innerHTML = `${data.articles[id].date_article}`;
    paragraphOne.innerHTML = `${data.articles[id].paragraph_one}`;
    paragraphTwo.innerHTML = `${data.articles[id].paragraph_two}`;
    notes.addEventListener('click', () => {
      prompt++;
      notes.classList.remove('close');
      notes.style.height = '420px';
      // Boucle sur la collection
      // Ajouter une balise dans le DOM
      paragraphThree.innerHTML = `${data.articles[id].paragraph_three}`;
    })

  }).catch(err => console.error(err))
};
articleOne(4);



