import gsap from 'gsap';
import intersectionAnim from './intersectionObserver';

export const introAnim = () => {
  document.body.classList.add('animation');
  const animOverlay = document.querySelector('.intro-anim');
  const anim_html = `
    <div class="intro-anim__wrapper">
      <div id="top" class="intro-anim__top">
        <span>h</span><span>e</span><span>y</span>
        <div class="split-left"></div>
      </div>
      <div id="bottom" class="intro-anim__bottom">
        <span>h</span><span>e</span><span>y</span>
        <div class="split-right"></div>
      </div>
    </div>
  `;
  animOverlay.innerHTML += anim_html;

  const top = document.querySelectorAll('#top');
  const bottom = document.querySelectorAll('#bottom');
  const topLetters = document.querySelectorAll('#top span');
  const bottomLetters = document.querySelectorAll('#bottom span');
  const leftSplit = document.querySelector('#top .split-left');
  const rightSplit = document.querySelector('#bottom .split-right');

  const animttl = gsap.timeline();
  animttl
    .to(topLetters, {
      y: '42%',
      duration: 0.8,
      ease: 'power2.inOut',
      stagger: 0.3,
    })
    .to(bottomLetters, {
      y: '-58%',
      duration: 0.8,
      ease: 'power2.inOut',
      stagger: 0.3,
      delay: -1.5,
    })
    .to(
      leftSplit,
      {
        scale: 1,
        duration: 0.5,
        delay: 0,
      },
      2
    )
    .to(
      rightSplit,
      {
        scale: 1,
        duration: 0.5,
        delay: 0,
      },
      2
    )
    .to(
      top,
      {
        y: '-100%',
        duration: 1,
        ease: 'power2.inOut',
      },
      3
    )
    .to(
      bottom,
      {
        y: '100%',
        duration: 1,
        ease: 'power2.inOut',
      },
      3
    )
    .to(animOverlay, {
      opacity: 0,
      duration: 0.5,
      ease: 'power2.inOut',
      onComplete: () => {
        document.body.classList.remove('animation');
        animOverlay.parentNode.removeChild(animOverlay);
        intersectionAnim();
      },
    });
};
