import gsap from 'gsap';

export const introAnim = () => {
  console.log('introAnim');
  const animOverlay = document.getElementById('intro-overlay');
  // const animWrapper = document.getElementsByClassName('anim-wrapper');
  const anim_html = `
    <div id="anim-overlay">
      <div class='anim-wrapper'>
        <span class='glitch' data-text='Hola'>Hola</span>
      </div>
    </div>
  `;
  animOverlay.innerHTML += anim_html;
  const tl = gsap.timeline();

  tl.to('.anim-wrapper', { duration: 1.5, opacity: 1 });
  tl.to(
    '.anim-wrapper',
    {
      duration: 1.5,
      opacity: 0,
      onComplete: () => {
        setTimeout(() => {
          animOverlay.parentNode.removeChild(animOverlay);
        }, 1000);
      },
    },
    '+=3'
  );
};

export const outroAnim = () => {
  const animOverlay = document.getElementById('intro-overlay');
  tl.to(
    '.anim-wrapper',
    {
      duration: 1.5,
      opacity: 0,
      onComplete: () => {
        setTimeout(() => {
          animOverlay.parentNode.removeChild(animOverlay);
        }, 1000);
      },
    },
    '+=3'
  );
};
