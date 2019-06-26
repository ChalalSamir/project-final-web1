let articleTwo = (id) => {
  let titleArticleTwo = document.getElementById('titleArticleTwo');
  let dateArticleTwo = document.getElementById('dateArticleTwo');
  let paragraphOneArticleTwo = document.getElementById('paragraphOneArticleTwo');
  let paragraphTwoArticleTwo = document.getElementById('paragraphTwoArticleTwo');
  let paragraphThreeArticleTwo = document.getElementById('paragraphThreeArticleTwo');
  let paragraphFourArticleTwo = document.getElementById('paragraphFourArticleTwo');
  let paragraphFiveArticleTwo = document.getElementById('paragraphFiveArticleTwo');
  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    titleArticleTwo.innerHTML = `${data.articles[id].title}`;
    dateArticleTwo.innerHTML = `${data.articles[id].date_article}`;
    paragraphOneArticleTwo.innerHTML = `${data.articles[id].paragraph_one}`;
    paragraphTwoArticleTwo.innerHTML = `${data.articles[id].paragraph_two}`;
    paragraphThreeArticleTwo.innerHTML = `${data.articles[id].paragraph_three}`;
    paragraphFourArticleTwo.innerHTML = `${data.articles[id].paragraph_four}`;
    paragraphFiveArticleTwo.innerHTML = `${data.articles[id].paragraph_five}`;

  }).catch(err => console.error(err))
}
articleTwo(1);