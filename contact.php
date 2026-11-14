<?php $active='contact'; $page_title='Contact — B2H Physiotherapy'; include 'includes/header.php'; ?>

<section class="page-hero">
  <div class="container">
    <span class="eyebrow">CONTACT</span>
    <h1>Get in touch</h1>
    <nav class="breadcrumb"><a href="index.php">Home</a><span class="sep">›</span>Contact</nav>
  </div>
</section>

<section class="section section-alt" id="book">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">BOOK ONLINE</span>
      <h2>Schedule your appointment</h2>
      <p class="lead">Pick a time that works for you — book directly below.</p>
    </div>
    <div class="calendly-inline-widget" data-url="https://calendly.com/b2hphysio/lynnkhoo?text_color=ff0007&primary_color=0d52ba" style="min-width:320px;height:700px;"></div>
  </div>
</section>

<section class="section" id="contact">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">CONTACT</span>
      <h2>We're here to help</h2>
      <p class="lead">Have a question or ready to book? Reach out and we'll get back to you soon.</p>
    </div>
    <div class="contact-grid">
      <div class="contact-info">
        <div class="info-row">
          <span class="info-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
          <div><strong>Phone</strong><a href="tel:0401294468">0401 294 468</a></div>
        </div>
        <div class="info-row">
          <span class="info-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></span>
          <div><strong>Email</strong><a href="mailto:b2hphysio@gmail.com">b2hphysio@gmail.com</a></div>
        </div>
        <div class="info-row">
          <span class="info-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
          <div><strong>Location</strong><span>1/35 Ernest Street, Sunshine, VIC 3020</span></div>
        </div>
        <div class="info-row">
          <span class="info-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></span>
          <div><strong>Book Online</strong><a href="https://calendly.com/b2hphysio/lynnkhoo" target="_blank" rel="noopener">calendly.com/b2hphysio/lynnkhoo</a></div>
        </div>
        <a href="https://calendly.com/b2hphysio/lynnkhoo" target="_blank" rel="noopener" class="btn btn-primary">Book Appointment</a>
      </div>
      <form class="contact-form" onsubmit="event.preventDefault(); alert('Thanks! We will get back to you soon.'); this.reset();">
        <h3>Send us an enquiry</h3>
        <div class="row">
          <input type="text" placeholder="Full name *" required />
          <input type="tel" placeholder="Phone *" required />
        </div>
        <input type="email" placeholder="Email *" required />
        <select required>
          <option value="">Service of interest *</option>
          <option>Back Pain</option>
          <option>Chronic Pain</option>
          <option>Sports Injuries</option>
          <option>Rejuvenate</option>
          <option>Other</option>
        </select>
        <textarea rows="4" placeholder="Tell us how we can help..."></textarea>
        <button type="submit" class="btn btn-primary">Send Enquiry</button>
      </form>
    </div>
  </div>
</section>

<section class="section section-map">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">FIND US</span>
      <h2>Visit the clinic</h2>
      <p class="lead">Located in the heart of Sunshine — easy to reach by car or public transport.</p>
    </div>
    <div class="map-embed map-embed-full">
      <iframe
        src="https://www.google.com/maps?q=1%2F35+Ernest+Street+Sunshine+VIC+3020&output=embed"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        title="Map showing 1/35 Ernest Street, Sunshine, VIC 3020"></iframe>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
