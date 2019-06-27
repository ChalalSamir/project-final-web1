let articleTwo = (id) => {
  let titleArticleTwo = document.getElementById('titleArticleTwo');
  let dateArticleTwo = document.getElementById('dateArticleTwo');
  let paragraphOneArticleTwo = document.getElementById('paragraphOneArticleTwo');
  let paragraphTwoArticleTwo = document.getElementById('paragraphTwoArticleTwo');
  let paragraphThreeArticleTwo = document.getElementById('paragraphThreeArticleTwo');
  let paragraphFourArticleTwo = document.getElementById('paragraphFourArticleTwo');
  let paragraphFiveArticleTwo = document.getElementById('paragraphFiveArticleTwo');
  let paragraphSixArticleTwo = document.getElementById('paragraphSixArticleTwo');
  let paragraphSevenArticleTwo = document.getElementById('paragraphSevenArticleTwo');
  let paragraphEightArticleTwo = document.getElementById('paragraphEightArticleTwo');
  let paragraphNineArticleTwo = document.getElementById('paragraphNineArticleTwo');
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
    paragraphSixArticleTwo.innerHTML = `${data.articles[id].paragraph_six}`;
    paragraphSevenArticleTwo.innerHTML = `${data.articles[id].paragraph_seven}`;
    paragraphEightArticleTwo.innerHTML = `${data.articles[id].paragraph_eight}`;
    paragraphNineArticleTwo.innerHTML = `${data.articles[id].paragraph_nine}`;

  }).catch(err => console.error(err))
}
articleTwo(2);