let articleThree = (id) => {
  let titleArticleThree = document.getElementById('titleArticleThree');
  let contentArticleThree = document.getElementById('contentArticleThree');
  let dateArticleThree = document.getElementById('dateArticleThree');
  let paragraphOneArticleThree = document.getElementById('paragraphOneArticleThree');
  let paragraphTwoArticleThree = document.getElementById('paragraphTwoArticleThree');
  let paragraphThreeArticleThree = document.getElementById('paragraphThreeArticleThree');
  let paragraphFourArticleThree = document.getElementById('paragraphFourArticleThree');
  let paragraphFiveArticleThree = document.getElementById('paragraphFiveArticleThree');

  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    titleArticleThree.innerHTML = `${data.articles[id].title}`;
    contentArticleThree.innerHTML = `${data.articles[id].content}`;
    dateArticleThree.innerHTML = `${data.articles[id].date_article}`;
    paragraphOneArticleThree.innerHTML = `${data.articles[id].paragraph_one}`;
    paragraphTwoArticleThree.innerHTML = `${data.articles[id].paragraph_two}`;
    paragraphThreeArticleThree.innerHTML = `${data.articles[id].paragraph_three}`;
    paragraphFourArticleThree.innerHTML = `${data.articles[id].paragraph_four}`;
    paragraphFiveArticleThree.innerHTML = `${data.articles[id].paragraph_five}`;
  }).catch(err => console.error(err))
}

articleThree(2);
