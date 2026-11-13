<?php
$active = isset($active) ? $active : '';
$page_title = isset($page_title) ? $page_title : 'B2H Physiotherapy';
$page_desc = isset($page_desc) ? $page_desc : 'B2H Physiotherapy in Sunshine, Victoria. Personalised physiotherapy care with Lynn Khoo.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css" />
</head>
<body>

<header class="header">
  <div class="container header-inner">
    <a href="index.php" class="logo">
      <span class="logo-mark">B2H</span>
      <span class="logo-text">Physiotherapy</span>
    </a>
    <nav class="nav" id="nav">
      <a href="index.php" class="<?= $active==='home'?'active':'' ?>">Home</a>
      <a href="about.php" class="<?= $active==='about'?'active':'' ?>">About</a>
      <a href="services.php" class="<?= $active==='services'?'active':'' ?>">Services</a>
      <a href="what-to-expect.php" class="<?= $active==='expect'?'active':'' ?>">What to Expect</a>
      <a href="fees.php" class="<?= $active==='fees'?'active':'' ?>">Fees &amp; Rebates</a>
      <a href="faqs.php" class="<?= $active==='faqs'?'active':'' ?>">FAQs</a>
      <a href="contact.php" class="<?= $active==='contact'?'active':'' ?>">Contact</a>
    </nav>
    <a href="https://calendly.com/b2hphysio/lynnkhoo" target="_blank" rel="noopener" class="btn btn-primary btn-sm nav-cta">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align:-3px;margin-right:6px"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
      Book Appointment
    </a>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
