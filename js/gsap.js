/* global cambiarTextoConSplit, cambiarLenguaje */

gsap.registerPlugin(ScrollTrigger);

const splitTypes = document.querySelectorAll('.revelartext');

splitTypes.forEach((char) => {
  const bg = char.dataset.bgColor;
  const fg = char.dataset.fgColor;

  const text = new SplitType(char, { types: 'chars' });

  gsap.fromTo(
    text.chars,
    {
      color: bg,
    },
    {
      color: fg,
      duration: 0.3,
      stagger: 0.02,
      scrollTrigger: {
        trigger: char,
        start: 'top 80%',
        end: 'top 20%',
        scrub: true,
        markers: false,
        toggleActions: 'play play reverse reverse',
      },
    }
  );
});

const lenis = new Lenis({
  duration: 1.2,
  smooth: true,
  direction: 'vertical',
  gestureDirection: 'vertical',
  smoothTouch: false,
  touchMultiplier: 1.5,
  wheelMultiplier: 1.0,
});

// Función para el loop de animación de Lenis
function bucleAnimacionScroll(tiempo) {
  lenis.raf(tiempo);
  requestAnimationFrame(bucleAnimacionScroll);
}
