import './main.scss';
import { introAnim } from './assets/js/introAnim';
import objectFitImages from 'object-fit-images';
import intersectionAnim from './assets/js/intersectionObserver';
import colorTheme from './assets/js/colorTheme';

// function component() {
//   const element = document.createElement('div');

//   // Lodash, currently included via a script, is required for this line to work
//   element.innerHTML = _.join(['Hello', 'webpack'], ' ');

//   return element;
// }
// document.body.appendChild(component());

document.addEventListener('DOMContentLoaded', () => {
  // Handler when the DOM is fully loaded
  if (sessionStorage.getItem('animIntro') === null) {
    sessionStorage.setItem('animIntro', 'viewed');
    introAnim();
  } else {
    document.body.removeChild(document.querySelector('.intro-anim'));
    intersectionAnim();
  }
  // sessionStorage.clear();
  colorTheme();
  objectFitImages();
});
