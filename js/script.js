let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');


menu.onclick = () => {
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}

window.onscroll = () => {
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');

   if (window.scrollY > 0) {
      header.classList.add('active');
   } else {
      header.classList.remove('active');
   }

}



// GALERIJA


// const images = {
//    "prva-slika": ['./images/home-bg.jpg', './images/about-img.jpg', './images/stolica.jpg', './images/process-1.png', './images/about-img.jpg'],
//    "druga-slika": ['./images/tim/Ljiska_test.jpg', './images/tim/tim1_test.jpg', './images/tim/tim2_test.jpg', './images/tim/Yvone_test.jpg'],
//    "treca-slika": ['./images/about-img.jpg', 'linije.jpg', 'stanica.jpg', 'Wordpress.jpg'],
//    "cetvrta-slika": ['../images/tim/tim1_test.jpg', './images/tim/tim2_test.jpg', './images/tim/Yvone_test.jpg'],
//    "peta-slika": ['test2.jpg', 'stanica.jpg', 'linije.jpg', 'Wordpress.jpg'],
//    "sesta-slika": ['home-bg.jpg', 'about-img.jpg', 'stolica.jpg', 'process-1.jpg'],
// };

// let currentGroup = 'prva-slika';
// let currentIndex = 0;

// function next() {
//    currentIndex = (currentIndex + 1) % images[currentGroup].length;
//    document.querySelector('.popup-image img').src = images[currentGroup][currentIndex];
// }

// function back() {
//    currentIndex = (currentIndex - 1 + images[currentGroup].length) % images[currentGroup].length;
//    document.querySelector('.popup-image img').src = images[currentGroup][currentIndex];
// }

// // Promena grupe slika
// function changeGroup(groupName) {
//    currentGroup = groupName; // Postavlja trenutnu grupu na vrednost parametra groupName
//    currentIndex = 0; // Postavlja trenutni indeks slike na početnu vrednost, tj. 0, jer se nakon promene grupe uvek prikazuje prva slika u toj grupi.
//    document.querySelector('.popup-image img').src = images[currentGroup][currentIndex]; // Pronalazi element sa klasom "popup-image" i menja src atribut njegovog unutrašnjeg img elementa tako da prikaže prvu sliku u novoj grupi. Ovo se postiže pristupanjem odgovarajućem elementu niza images pomoću currentGroup i currentIndex indeksa.
// }

// const imagesInDiv = document.querySelectorAll('.image img');
// imagesInDiv.forEach(img => {
//    img.addEventListener('click', () => {
//       const groupName = img.getAttribute('id'); // groupName sadrži ime grupe slika kojoj kliknuta slika pripada - preko id
//       const firstImage = images[groupName][0];
//       document.querySelector('.popup-image img').src = firstImage;
//       changeGroup(groupName);
//    });
// });




