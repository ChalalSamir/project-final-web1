let getChapter = () => {
  let roundOne = document.getElementById('roundOne');
  let roundTwo = document.getElementById('roundTwo');
  let roundThree = document.getElementById('roundThree');
  let roundFour = document.getElementById('roundFour');
  let roundFive = document.getElementById('roundFive');

  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    roundOne.innerHTML = `${data.articles[2].title}`;
    roundTwo.innerHTML = `${data.articles[1].title}`;
    roundThree.innerHTML = `${data.articles[2].title}`;
    roundFour.innerHTML = `${data.articles[0].title}`;
    // roundFive.innerHTML = `${data.articles[4].title}`;


  }).catch(err => console.error(err))
}
getChapter();