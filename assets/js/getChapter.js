let getChapter = () => {
  let roundOne = document.getElementById('roundOne');
  let roundTwo = document.getElementById('roundTwo');
  let roundThree = document.getElementById('roundThree');
  let roundFour = document.getElementById('roundFour');
  let roundFive = document.getElementById('roundFive');

  asyncFetch('http://localhost:8888/project-final-web1/admin/api.php').then(data => {
    // Boucle sur la collection
    // Ajouter une balise dans le DOM
    roundOne.innerHTML = `${data.articles[4].title}`;
    roundTwo.innerHTML = `${data.articles[2].title}`;
    roundThree.innerHTML = `${data.articles[3].title}`;
    roundFour.innerHTML = `${data.articles[1].title}`;
    roundFive.innerHTML = `${data.articles[0].title}`;


  }).catch(err => console.error(err))


  let round__one = document.getElementById('round__one');
  let round__two = document.getElementById('round__two');
  let round__three = document.getElementById('round__three');
  window.addEventListener('wheel', () => {

    if (window.scrollY > 2724 && window.scrollY < 7350) {
      round__one.classList.add('is--in');
      roundOne.style.color = '#5E9E97';
      roundOne.style.transition = '1s';
    } else {
      round__one.classList.remove('is--in');
      roundOne.style.color = 'white';
    }

    if (window.scrollY > 7350 && window.scrollY < 16215) {
      round__two.classList.add('is--in');
      roundTwo.style.color = '#5E9E97';
      roundTwo.style.transition = '1s';
    } else {
      round__two.classList.remove('is--in');
      roundTwo.style.color = 'white';
    }

    if (window.scrollY > 16215 && window.scrollY < 20062) {
      round__three.classList.add('is--in');
      roundThree.style.color = '#5E9E97';
      roundThree.style.transition = '1s';
    } else {
      round__three.classList.remove('is--in');
      roundThree.style.color = 'white';

    }
  })
}
getChapter();