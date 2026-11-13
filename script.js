// Mobile nav toggle
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');
if (hamburger && nav) {
  hamburger.addEventListener('click', () => nav.classList.toggle('open'));
  nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => nav.classList.remove('open')));
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
