// Mobile nav drawer
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');
const navClose = document.getElementById('nav-close');
const navOverlay = document.getElementById('nav-overlay');
function openNav(){ nav.classList.add('open'); navOverlay && navOverlay.classList.add('open'); document.body.classList.add('nav-locked'); }
function closeNav(){ nav.classList.remove('open'); navOverlay && navOverlay.classList.remove('open'); document.body.classList.remove('nav-locked'); }
if (hamburger && nav) {
  hamburger.addEventListener('click', openNav);
  navClose && navClose.addEventListener('click', closeNav);
  navOverlay && navOverlay.addEventListener('click', closeNav);
  nav.querySelectorAll('a').forEach(a => a.addEventListener('click', closeNav));
}

// Year
const y = document.getElementById('year');
if (y) y.textContent = new Date().getFullYear();

// Close other FAQ items when one opens
document.querySelectorAll('.faq details').forEach(d => {
  d.addEventListener('toggle', () => {
    if (d.open) {
      document.querySelectorAll('.faq details').forEach(o => { if (o !== d) o.open = false; });
    }
  });
});
