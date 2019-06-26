let articleThree = () => {
  let titleArticleThree = document.getElementById('titleArticleThree');
  let contentOneArticleThree = document.getElementById('contentOneArticleThree');
  let paragraphOneArticleThree = document.getElementById('paragraphOneArticleThree');
  let paragraphTwoArticleThree = document.getElementById('paragraphTwoArticleThree');
  let paragraphThreeArticleThree = document.getElementById('paragraphThreeArticleThree');
  let paragraphFourArticleThree = document.getElementById('paragraphFourArticleThree');
  let paragraphFiveArticleThree = document.getElementById('paragraphFiveArticleThree');
  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    titleArticleThree.innerHTML = `${data.articles[0].title}`;
    contentOneArticleThree.innerHTML = `${data.articles[0].content}`;
    paragraphOneArticleThree.innerHTML = `${data.articles[0].paragraph_one}`;
    paragraphTwoArticleThree.innerHTML = `${data.articles[0].paragraph_two}`;
    paragraphThreeArticleThree.innerHTML = `${data.articles[0].paragraph_three}`;
    paragraphFourArticleThree.innerHTML = `${data.articles[0].paragraph_four}`;
    paragraphFiveArticleThree.innerHTML = `${data.articles[0].paragraph_five}`;


  }).catch(err => console.error(err))



}

articleThree();
