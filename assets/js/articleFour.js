let articleFour = (id) => {
  let titleArticleFour = document.getElementById('titleArticleFour');
  let contentArticleFour = document.getElementById('contentArticleFour');
  let dateArticleFour = document.getElementById('dateArticleFour');
  let paragraphOneArticleFour = document.getElementById('paragraphOneArticleFour');
  let paragraphTwoArticleFour = document.getElementById('paragraphTwoArticleFour');
  let paragraphThreeArticleFour = document.getElementById('paragraphThreeArticleFour');
  let paragraphFourArticleFour = document.getElementById('paragraphFourArticleFour');
  let paragraphFiveArticleFour = document.getElementById('paragraphFiveArticleFour');
  let paragraphSixArticleFour = document.getElementById('paragraphSixArticleFour');
  let paragraphSevenArticleFour = document.getElementById('paragraphSevenArticleFour');
  let paragraphEightArticleFour = document.getElementById('paragraphEightArticleFour');
  let paragraphNineArticleFour = document.getElementById('paragraphNineArticleFour');
  let paragraphTenArticleFour = document.getElementById('paragraphTenArticleFour');
  let paragraphElevenArticleFour = document.getElementById('paragraphElevenArticleFour');
  let paragraphTwelveArticleFour = document.getElementById('paragraphTwelveArticleFour');
  let paragraphThirtheenArticleFour = document.getElementById('paragraphThirtheenArticleFour');

  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    titleArticleFour.innerHTML = `${data.articles[id].title}`;
    contentArticleFour.innerHTML = `${data.articles[id].content}`;
    dateArticleFour.innerHTML = `${data.articles[id].date_article}`;
    paragraphOneArticleFour.innerHTML = `${data.articles[id].paragraph_one}`;
    paragraphTwoArticleFour.innerHTML = `${data.articles[id].paragraph_two}`;
    paragraphThreeArticleFour.innerHTML = `${data.articles[id].paragraph_three}`;
    paragraphFourArticleFour.innerHTML = `${data.articles[id].paragraph_four}`;
    paragraphFiveArticleFour.innerHTML = `${data.articles[id].paragraph_five}`;
    paragraphSixArticleFour.innerHTML = `${data.articles[id].paragraph_six}`;
    paragraphSevenArticleFour.innerHTML = `${data.articles[id].paragraph_seven}`;
    paragraphEightArticleFour.innerHTML = `${data.articles[id].paragraph_eight}`;
    paragraphNineArticleFour.innerHTML = `${data.articles[id].paragraph_nine}`;
    paragraphTenArticleFour.innerHTML = `${data.articles[id].paragraph_ten}`;
    paragraphElevenArticleFour.innerHTML = `${data.articles[id].paragraph_eleven}`;
    paragraphTwelveArticleFour.innerHTML = `${data.articles[id].paragraph_twelve}`;
    paragraphThirtheenArticleFour.innerHTML = `${data.articles[id].paragraph_thirtheen}`;
  }).catch(err => console.error(err))
}
articleFour(3);
