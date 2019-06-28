let articleFive = (id) => {
  let titleArticleFive = document.getElementById('titleArticleFive');
  let contentArticleFive = document.getElementById('contentArticleFive');
  let dateArticleFive = document.getElementById('dateArticleFive');
  let paragraphOneArticleFive = document.getElementById('paragraphOneArticleFive');
  let paragraphTwoArticleFive = document.getElementById('paragraphTwoArticleFive');
  let paragraphThreeArticleFive = document.getElementById('paragraphThreeArticleFive');
  let paragraphFourArticleFive = document.getElementById('paragraphFourArticleFive');
  let paragraphFiveArticleFive = document.getElementById('paragraphFiveArticleFive');
  let paragraphSixArticleFive = document.getElementById('paragraphSixArticleFive');
  let paragraphSevenArticleFive = document.getElementById('paragraphSevenArticleFive');
  let paragraphEightArticleFive = document.getElementById('paragraphEightArticleFive');
  let paragraphNineArticleFive = document.getElementById('paragraphNineArticleFive');

  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    titleArticleFive.innerHTML = `${data.articles[id].title}`;
    contentArticleFive.innerHTML = `${data.articles[id].content}`;
    dateArticleFive.innerHTML = `${data.articles[id].date_article}`;
    paragraphOneArticleFive.innerHTML = `${data.articles[id].paragraph_one}`;
    paragraphTwoArticleFive.innerHTML = `${data.articles[id].paragraph_two}`;
    paragraphThreeArticleFive.innerHTML = `${data.articles[id].paragraph_three}`;
    paragraphFiveArticleFive.innerHTML = `${data.articles[id].paragraph_four}`;
    paragraphFiveArticleFive.innerHTML = `${data.articles[id].paragraph_five}`;
    paragraphSixArticleFive.innerHTML = `${data.articles[id].paragraph_six}`;
    paragraphSevenArticleFive.innerHTML = `${data.articles[id].paragraph_seven}`;
    paragraphEightArticleFive.innerHTML = `${data.articles[id].paragraph_eight}`;
    paragraphNineArticleFive.innerHTML = `${data.articles[id].paragraph_nine}`;
  }).catch(err => console.error(err))
}
articleFive(3);
