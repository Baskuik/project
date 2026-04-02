<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secret Agent Bunker & Resorts — Unieke Verblijven</title>
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>

@include('navbar')

<!-- ══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ -->
<section class="hero">
  <div class="hero__bg">
    <div class="hero__overlay"></div>
    <div class="hero__grid"></div>
  </div>
  <div class="hero__content">
    <span class="sa-section-tag hero__tag">Est. 2024 · Geheime Locaties</span>
    <h1 class="sa-heading hero__title">
      Verblijf waar<br>
      <em>avontuur</em><br>
      thuishoort.
    </h1>
    <p class="hero__sub">Van dierentuin-suites tot vakantiepark-bunkers — wij plaatsen jou midden in de natuur, het spektakel, de ervaring.</p>
    <div class="hero__actions">
      <a href="/bookings" class="sa-btn sa-btn--gold">Boek een verblijf</a>
      <a href="/shop" class="sa-btn sa-btn--outline">Tickets & Shop</a>
    </div>
  </div>
  <div class="hero__scroll-hint">
    <span>Scroll</span>
    <div class="hero__scroll-line"></div>
  </div>
  <div class="hero__badge">
    <div class="hero__badge-inner">
      <span class="hero__badge-num">50+</span>
      <span class="hero__badge-lbl">Locaties</span>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     MARQUEE
═══════════════════════════════════════════ -->
<div class="marquee-bar">
  <div class="marquee-track">
    <span>Dierentuinen</span><span class="dot">✦</span>
    <span>Vakantieparken</span><span class="dot">✦</span>
    <span>Zwembaden</span><span class="dot">✦</span>
    <span>Safari Lodges</span><span class="dot">✦</span>
    <span>Bunker Suites</span><span class="dot">✦</span>
    <span>Jungle Retreats</span><span class="dot">✦</span>
    <span>Dierentuinen</span><span class="dot">✦</span>
    <span>Vakantieparken</span><span class="dot">✦</span>
    <span>Zwembaden</span><span class="dot">✦</span>
    <span>Safari Lodges</span><span class="dot">✦</span>
    <span>Bunker Suites</span><span class="dot">✦</span>
    <span>Jungle Retreats</span><span class="dot">✦</span>
  </div>
</div>

<!-- ══════════════════════════════════════════
     EXPERIENCES
═══════════════════════════════════════════ -->
<section class="experiences">
  <div class="container">
    <div class="experiences__header">
      <div>
        <span class="sa-section-tag">Onze Ervaringen</span>
        <h2 class="sa-heading" style="font-size:2.8rem;color:var(--ivory);">Kies jouw<br>avontuur.</h2>
      </div>
      <p class="experiences__intro">Elke locatie is zorgvuldig gekozen voor een maximale beleving. Comfort en wildheid, naast elkaar.</p>
    </div>

    <div class="exp-grid">
      <div class="exp-card exp-card--large">
        <div class="exp-card__img exp-card__img--zoo">
          <div class="exp-card__img-overlay"></div>
        </div>
        <div class="exp-card__body">
          <span class="exp-card__tag">Dierentuinen</span>
          <h3 class="sa-heading exp-card__title">Slaap naast de leeuwen.</h3>
          <p class="exp-card__desc">Exclusieve overnight-suites binnen dierentuinparken. Word wakker op het ochtendgebrulk van de jungle.</p>
          <a href="/bookings" class="sa-btn sa-btn--gold" style="margin-top:1.25rem;">Ontdek</a>
        </div>
      </div>

      <div class="exp-card">
        <div class="exp-card__img exp-card__img--park">
          <div class="exp-card__img-overlay"></div>
        </div>
        <div class="exp-card__body">
          <span class="exp-card__tag">Vakantieparken</span>
          <h3 class="sa-heading exp-card__title">Luxe midden in het groen.</h3>
          <p class="exp-card__desc">Private lodges en bungalows met directe toegang tot alle parkattracties.</p>
          <a href="/bookings" class="sa-btn sa-btn--outline" style="margin-top:1rem;">Boek</a>
        </div>
      </div>

      <div class="exp-card">
        <div class="exp-card__img exp-card__img--pool">
          <div class="exp-card__img-overlay"></div>
        </div>
        <div class="exp-card__body">
          <span class="exp-card__tag">Aqua Resorts</span>
          <h3 class="sa-heading exp-card__title">Leven bij het water.</h3>
          <p class="exp-card__desc">Verblijf aan de rand van tropische zwemparadijzen — dag én nacht.</p>
          <a href="/bookings" class="sa-btn sa-btn--outline" style="margin-top:1rem;">Boek</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     STATS STRIP
═══════════════════════════════════════════ -->
<div class="stats-strip">
  <div class="stat">
    <span class="stat__num">50<sup>+</sup></span>
    <span class="stat__lbl">Unieke locaties</span>
  </div>
  <div class="stat-divider"></div>
  <div class="stat">
    <span class="stat__num">12K<sup>+</sup></span>
    <span class="stat__lbl">Blije gasten</span>
  </div>
  <div class="stat-divider"></div>
  <div class="stat">
    <span class="stat__num">8</span>
    <span class="stat__lbl">Landen</span>
  </div>
  <div class="stat-divider"></div>
  <div class="stat">
    <span class="stat__num">4.9★</span>
    <span class="stat__lbl">Gemiddelde beoordeling</span>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SHOP TEASER
═══════════════════════════════════════════ -->
<section class="shop-teaser">
  <div class="container">
    <div class="shop-teaser__header">
      <span class="sa-section-tag">Onze Shop</span>
      <h2 class="sa-heading" style="font-size:2.8rem;color:var(--ivory);">Tickets, merch &<br>herinneringen.</h2>
      <div class="sa-divider"></div>
    </div>

    <div class="shop-teaser__grid">
      <div class="shop-item">
        <div class="shop-item__img-wrap">
          <div class="shop-item__badge">Bestseller</div>
          <img src="/images/zoo-ticket.jpg" alt="Dierentuin Ticket" class="shop-item__img">
        </div>
        <div class="shop-item__body">
          <span class="shop-item__cat">Entree</span>
          <h4 class="shop-item__name">Dierentuin Dagticket</h4>
          <div class="shop-item__footer">
            <span class="shop-item__price">€24,95</span>
            <button class="shop-item__btn">+ Voeg toe</button>
          </div>
        </div>
      </div>

      <div class="shop-item">
        <div class="shop-item__img-wrap">
          <img src="/images/plush-toy.jpg" alt="Knuffel" class="shop-item__img">
        </div>
        <div class="shop-item__body">
          <span class="shop-item__cat">Giftshop</span>
          <h4 class="shop-item__name">Pluche Knuffel</h4>
          <div class="shop-item__footer">
            <span class="shop-item__price">€14,95</span>
            <button class="shop-item__btn">+ Voeg toe</button>
          </div>
        </div>
      </div>

      <div class="shop-item">
        <div class="shop-item__img-wrap">
          <img src="/images/tshirt.jpg" alt="T-shirt" class="shop-item__img">
        </div>
        <div class="shop-item__body">
          <span class="shop-item__cat">Giftshop</span>
          <h4 class="shop-item__name">T-shirt Collection</h4>
          <div class="shop-item__footer">
            <span class="shop-item__price">€19,95</span>
            <button class="shop-item__btn">+ Voeg toe</button>
          </div>
        </div>
      </div>

      <div class="shop-item shop-item--cta">
        <div class="shop-item__cta-inner">
          <span class="sa-section-tag">En nog veel meer</span>
          <p style="font-family:'Playfair Display',serif;font-size:1.5rem;margin-bottom:1.5rem;line-height:1.3;">Keychains, snapbacks, waterflessen & exclusieve bundles.</p>
          <a href="/shop" class="sa-btn sa-btn--gold">Bekijk alles</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     TESTIMONIAL
═══════════════════════════════════════════ -->
<section class="testimonials">
  <div class="container">
    <span class="sa-section-tag" style="text-align:center;display:block;">Wat gasten zeggen</span>
    <h2 class="sa-heading" style="font-size:2.4rem;color:var(--ivory);text-align:center;margin-bottom:3rem;">Ervaringen die blijven.</h2>

    <div class="testimonials__grid">
      <div class="testi">
        <div class="testi__stars">★★★★★</div>
        <p class="testi__text">"Wakker worden met het geluid van leeuwen op 50 meter afstand. Nog nooit zo iets meegemaakt."</p>
        <div class="testi__author">
          <div class="testi__avatar">S</div>
          <div>
            <div class="testi__name">Sophie van Dam</div>
            <div class="testi__loc">Artis Zoo Suite, Amsterdam</div>
          </div>
        </div>
      </div>
      <div class="testi testi--highlight">
        <div class="testi__stars">★★★★★</div>
        <p class="testi__text">"De bunker suite was ongelooflijk. Stijlvol, geheimzinnig en precies wat we zochten voor ons weekend weg."</p>
        <div class="testi__author">
          <div class="testi__avatar">M</div>
          <div>
            <div class="testi__name">Mark & Lisa Jansen</div>
            <div class="testi__loc">Bunker Suite, Veluwe</div>
          </div>
        </div>
      </div>
      <div class="testi">
        <div class="testi__stars">★★★★★</div>
        <p class="testi__text">"De tickets waren snel geregeld, de merchandise prachtig verpakt. Aanrader voor iedereen!"</p>
        <div class="testi__author">
          <div class="testi__avatar">R</div>
          <div>
            <div class="testi__name">Roos Bakker</div>
            <div class="testi__loc">Online shop klant</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════ -->
<footer class="footer">
  <div class="footer__top container">
    <div class="footer__brand">
      <div class="footer__logo-mark">SA</div>
      <div class="footer__brand-name">Secret Agent<br>Bunker & Resorts</div>
      <p class="footer__tagline">Unieke verblijven op unieke plekken.</p>
    </div>
    <div class="footer__links">
      <h5 class="footer__col-head">Navigatie</h5>
      <a href="/">Home</a>
      <a href="/about">Over ons</a>
      <a href="/shop">Shop</a>
      <a href="/bookings">Boekingen</a>
      <a href="/contact">Contact</a>
    </div>
    <div class="footer__links">
      <h5 class="footer__col-head">Ervaringen</h5>
      <a href="#">Dierentuin Suites</a>
      <a href="#">Vakantiepark Lodges</a>
      <a href="#">Aqua Resorts</a>
      <a href="#">Bunker Ervaringen</a>
    </div>
    <div class="footer__newsletter">
      <h5 class="footer__col-head">Blijf op de hoogte</h5>
      <p style="color:rgba(245,240,232,.5);font-size:.85rem;margin-bottom:1rem;">Nieuwe locaties, aanbiedingen & geheime deals.</p>
      <div class="footer__newsletter-form">
        <input type="email" placeholder="jouw@email.nl" class="footer__newsletter-input">
        <button class="footer__newsletter-btn">→</button>
      </div>
    </div>
  </div>
  <div class="footer__bottom container">
    <span>© 2026 Secret Agent Bunker & Resorts. Alle rechten voorbehouden.</span>
    <div class="footer__bottom-links">
      <a href="#">Privacy</a>
      <a href="#">Voorwaarden</a>
      <a href="#">Cookies</a>
    </div>
  </div>
</footer>

<!-- ══════════════════════════════════════════
     STYLES
═══════════════════════════════════════════ -->
<style>
  .container { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }

  /* HERO */
  .hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding-top: 72px;
  }

  .hero__bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 60% at 70% 50%, #1a4a2a 0%, #0a1a10 60%);
  }

  .hero__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(10,26,16,.95) 0%, rgba(10,26,16,.6) 60%, transparent 100%);
  }

  .hero__grid {
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(201,168,76,.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(201,168,76,.04) 1px, transparent 1px);
    background-size: 60px 60px;
    animation: gridShift 20s linear infinite;
  }

  @keyframes gridShift {
    0% { background-position: 0 0; }
    100% { background-position: 60px 60px; }
  }

  .hero__content {
    position: relative;
    z-index: 2;
    padding: 0 2rem;
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    animation: heroReveal 1.2s cubic-bezier(.4,0,.2,1) both;
  }

  @keyframes heroReveal {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .hero__tag { animation-delay: .1s; }

  .hero__title {
    font-size: clamp(3.5rem, 8vw, 7rem);
    color: var(--ivory);
    margin-bottom: 1.5rem;
    font-weight: 900;
    line-height: 1.0;
  }

  .hero__title em {
    font-style: italic;
    color: var(--gold);
  }

  .hero__sub {
    font-size: 1.1rem;
    color: rgba(245,240,232,.6);
    max-width: 480px;
    line-height: 1.7;
    margin-bottom: 2.5rem;
    font-weight: 300;
  }

  .hero__actions { display: flex; gap: 1rem; flex-wrap: wrap; }

  .hero__scroll-hint {
    position: absolute;
    bottom: 2.5rem;
    left: 2rem;
    display: flex;
    align-items: center;
    gap: .75rem;
    z-index: 2;
  }

  .hero__scroll-hint span {
    font-size: .6rem;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: rgba(245,240,232,.35);
  }

  .hero__scroll-line {
    width: 60px;
    height: 1px;
    background: linear-gradient(90deg, rgba(201,168,76,.5), transparent);
    animation: scrollLine 2s ease-in-out infinite alternate;
  }

  @keyframes scrollLine {
    from { width: 40px; opacity: .5; }
    to { width: 80px; opacity: 1; }
  }

  .hero__badge {
    position: absolute;
    bottom: 3rem;
    right: 3rem;
    z-index: 2;
    width: 100px;
    height: 100px;
    border: 1px solid rgba(201,168,76,.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: rotateBadge 20s linear infinite;
  }

  @keyframes rotateBadge {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  .hero__badge-inner {
    text-align: center;
    animation: rotateBadgeInner 20s linear infinite;
  }

  @keyframes rotateBadgeInner {
    from { transform: rotate(0deg); }
    to { transform: rotate(-360deg); }
  }

  .hero__badge-num {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    color: var(--gold);
    font-weight: 700;
  }

  .hero__badge-lbl {
    font-size: .5rem;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: rgba(245,240,232,.5);
  }

  /* MARQUEE */
  .marquee-bar {
    background: var(--gold);
    overflow: hidden;
    padding: .75rem 0;
  }

  .marquee-track {
    display: flex;
    gap: 2.5rem;
    white-space: nowrap;
    animation: marquee 22s linear infinite;
    will-change: transform;
  }

  @keyframes marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }

  .marquee-track span {
    font-size: .65rem;
    letter-spacing: .2em;
    text-transform: uppercase;
    font-weight: 700;
    color: var(--forest);
  }

  .marquee-track .dot { color: rgba(15,35,24,.4); }

  /* EXPERIENCES */
  .experiences {
    padding: 8rem 0;
    background: var(--deep);
  }

  .experiences__header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 4rem;
    gap: 2rem;
    flex-wrap: wrap;
  }

  .experiences__intro {
    max-width: 320px;
    color: rgba(245,240,232,.5);
    line-height: 1.7;
    font-size: .9rem;
  }

  .exp-grid {
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr;
    grid-template-rows: auto auto;
    gap: 1.5px;
  }

  .exp-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
  }

  .exp-card--large {
    grid-row: span 2;
  }

  .exp-card__img {
    height: 280px;
    background-size: cover;
    background-position: center;
    transition: transform .6s cubic-bezier(.4,0,.2,1);
  }

  .exp-card--large .exp-card__img { height: 100%; min-height: 520px; }

  .exp-card:hover .exp-card__img { transform: scale(1.04); }

  .exp-card__img--zoo {
    background: linear-gradient(135deg, #1a3a1a 0%, #2d5a2d 50%, #1a4a1a 100%);
    position: relative;
  }

  .exp-card__img--zoo::before {
    content: '🦁';
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
    opacity: .3;
  }

  .exp-card__img--park {
    background: linear-gradient(135deg, #2a3a1a 0%, #4a5a2a 100%);
    position: relative;
  }

  .exp-card__img--park::before {
    content: '🌲';
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4rem;
    opacity: .3;
  }

  .exp-card__img--pool {
    background: linear-gradient(135deg, #0a2a3a 0%, #1a4a5a 100%);
    position: relative;
  }

  .exp-card__img--pool::before {
    content: '🏊';
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4rem;
    opacity: .3;
  }

  .exp-card__img-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(10,26,16,.9) 0%, transparent 50%);
  }

  .exp-card__body {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 2rem;
  }

  .exp-card__tag {
    font-size: .6rem;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 600;
    margin-bottom: .5rem;
    display: block;
  }

  .exp-card__title {
    font-size: 1.4rem;
    color: var(--ivory);
    margin-bottom: .5rem;
  }

  .exp-card--large .exp-card__title { font-size: 1.9rem; }

  .exp-card__desc {
    font-size: .82rem;
    color: rgba(245,240,232,.65);
    line-height: 1.6;
  }

  /* STATS */
  .stats-strip {
    background: linear-gradient(90deg, #0f2318, #1a3a24, #0f2318);
    border-top: 1px solid rgba(201,168,76,.15);
    border-bottom: 1px solid rgba(201,168,76,.15);
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0;
    padding: 3rem 2rem;
    flex-wrap: wrap;
  }

  .stat {
    text-align: center;
    padding: 1rem 4rem;
    flex-shrink: 0;
  }

  .stat__num {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem;
    color: var(--gold);
    font-weight: 700;
    line-height: 1;
    margin-bottom: .4rem;
  }

  .stat__num sup {
    font-size: 1.2rem;
  }

  .stat__lbl {
    font-size: .65rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: rgba(245,240,232,.4);
    font-weight: 500;
  }

  .stat-divider {
    width: 1px;
    height: 50px;
    background: rgba(201,168,76,.2);
    flex-shrink: 0;
  }

  /* SHOP TEASER */
  .shop-teaser {
    padding: 8rem 0;
    background: var(--forest);
  }

  .shop-teaser__header {
    margin-bottom: 4rem;
  }

  .shop-teaser__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr) 1.2fr;
    gap: 1.5rem;
  }

  .shop-item {
    background: rgba(245,240,232,.03);
    border: 1px solid rgba(201,168,76,.1);
    overflow: hidden;
    transition: border-color .3s, transform .3s;
  }

  .shop-item:hover {
    border-color: rgba(201,168,76,.35);
    transform: translateY(-4px);
  }

  .shop-item__img-wrap {
    position: relative;
    height: 220px;
    background: rgba(0,0,0,.2);
    overflow: hidden;
  }

  .shop-item__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s;
    background: #1a3a1a;
  }

  .shop-item:hover .shop-item__img { transform: scale(1.05); }

  .shop-item__badge {
    position: absolute;
    top: .75rem;
    left: .75rem;
    background: var(--gold);
    color: var(--forest);
    font-size: .55rem;
    font-weight: 700;
    letter-spacing: .15em;
    text-transform: uppercase;
    padding: .3rem .65rem;
    z-index: 1;
  }

  .shop-item__body { padding: 1.25rem; }

  .shop-item__cat {
    font-size: .58rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 600;
    display: block;
    margin-bottom: .4rem;
  }

  .shop-item__name {
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    color: var(--ivory);
    margin-bottom: 1rem;
  }

  .shop-item__footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .shop-item__price {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--gold);
    font-family: 'Playfair Display', serif;
  }

  .shop-item__btn {
    background: none;
    border: 1px solid rgba(201,168,76,.35);
    color: var(--gold);
    font-size: .65rem;
    letter-spacing: .1em;
    text-transform: uppercase;
    font-weight: 600;
    padding: .4rem .8rem;
    cursor: pointer;
    transition: all .25s;
    font-family: 'DM Sans', sans-serif;
  }

  .shop-item__btn:hover {
    background: var(--gold);
    color: var(--forest);
  }

  .shop-item--cta {
    background: linear-gradient(135deg, #1a3a24 0%, #0f2318 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    border-color: rgba(201,168,76,.25);
  }

  .shop-item__cta-inner {
    padding: 2rem;
    text-align: center;
  }

  /* TESTIMONIALS */
  .testimonials {
    padding: 8rem 0;
    background: var(--deep);
  }

  .testimonials__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
  }

  .testi {
    background: rgba(255,255,255,.02);
    border: 1px solid rgba(201,168,76,.1);
    padding: 2.5rem;
    position: relative;
  }

  .testi--highlight {
    background: linear-gradient(135deg, rgba(201,168,76,.08) 0%, rgba(74,124,89,.08) 100%);
    border-color: rgba(201,168,76,.3);
    transform: translateY(-8px);
  }

  .testi__stars {
    color: var(--gold);
    font-size: .85rem;
    letter-spacing: .1em;
    margin-bottom: 1.25rem;
  }

  .testi__text {
    color: rgba(245,240,232,.7);
    font-size: .9rem;
    line-height: 1.7;
    font-style: italic;
    margin-bottom: 1.5rem;
    font-family: 'Playfair Display', serif;
  }

  .testi__author {
    display: flex;
    align-items: center;
    gap: .75rem;
  }

  .testi__avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: var(--sage);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: .8rem;
    font-weight: 700;
    color: var(--ivory);
    flex-shrink: 0;
  }

  .testi__name {
    font-size: .82rem;
    font-weight: 600;
    color: var(--ivory);
  }

  .testi__loc {
    font-size: .7rem;
    color: var(--gold);
    letter-spacing: .05em;
  }

  /* FOOTER */
  .footer { background: #060e09; }

  .footer__top {
    display: grid;
    grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
    gap: 4rem;
    padding-top: 5rem;
    padding-bottom: 4rem;
    border-bottom: 1px solid rgba(201,168,76,.1);
  }

  .footer__logo-mark {
    width: 48px;
    height: 48px;
    border: 2px solid var(--gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    color: var(--gold);
    margin-bottom: 1rem;
  }

  .footer__brand-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--ivory);
    line-height: 1.2;
    margin-bottom: .75rem;
  }

  .footer__tagline {
    font-size: .8rem;
    color: rgba(245,240,232,.35);
  }

  .footer__col-head {
    font-size: .6rem;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 600;
    margin-bottom: 1.25rem;
  }

  .footer__links {
    display: flex;
    flex-direction: column;
    gap: .75rem;
  }

  .footer__links a {
    font-size: .82rem;
    color: rgba(245,240,232,.45);
    text-decoration: none;
    transition: color .2s;
  }

  .footer__links a:hover { color: var(--gold); }

  .footer__newsletter-form {
    display: flex;
    overflow: hidden;
    border: 1px solid rgba(201,168,76,.25);
  }

  .footer__newsletter-input {
    flex: 1;
    background: rgba(255,255,255,.04);
    border: none;
    padding: .65rem 1rem;
    color: var(--ivory);
    font-size: .82rem;
    font-family: 'DM Sans', sans-serif;
    outline: none;
  }

  .footer__newsletter-input::placeholder { color: rgba(245,240,232,.25); }

  .footer__newsletter-btn {
    background: var(--gold);
    color: var(--forest);
    border: none;
    padding: .65rem 1rem;
    font-size: 1rem;
    cursor: pointer;
    font-weight: 700;
    transition: background .2s;
  }

  .footer__newsletter-btn:hover { background: var(--gold-light); }

  .footer__bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    font-size: .72rem;
    color: rgba(245,240,232,.25);
    flex-wrap: wrap;
    gap: 1rem;
  }

  .footer__bottom-links { display: flex; gap: 1.5rem; }
  .footer__bottom-links a { color: rgba(245,240,232,.25); text-decoration: none; transition: color .2s; }
  .footer__bottom-links a:hover { color: var(--gold); }

  @media (max-width: 1024px) {
    .exp-grid { grid-template-columns: 1fr 1fr; }
    .exp-card--large { grid-column: span 2; grid-row: span 1; }
    .exp-card--large .exp-card__img { min-height: 300px; }
    .shop-teaser__grid { grid-template-columns: repeat(2, 1fr); }
    .testimonials__grid { grid-template-columns: 1fr; }
    .testi--highlight { transform: none; }
    .footer__top { grid-template-columns: 1fr 1fr; }
  }

  @media (max-width: 640px) {
    .exp-grid { grid-template-columns: 1fr; }
    .exp-card--large { grid-column: span 1; }
    .stats-strip { gap: 1rem; }
    .stat { padding: 1rem 2rem; }
    .stat-divider { display: none; }
    .shop-teaser__grid { grid-template-columns: 1fr; }
    .footer__top { grid-template-columns: 1fr; }
    .hero__badge { display: none; }
  }
</style>

</body>
</html>