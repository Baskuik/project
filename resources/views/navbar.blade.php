<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
  :root {
    --forest: #0f2318;
    --deep: #0a1a10;
    --gold: #c9a84c;
    --gold-light: #e8c97a;
    --ivory: #f5f0e8;
    --sage: #4a7c59;
    --mist: #d4e8d8;
    --danger: #c0392b;
  }

  * { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--deep);
    color: var(--ivory);
    overflow-x: hidden;
  }

  /* ── NAV ── */
  .sa-nav {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    padding: 0 2.5rem;
    height: 72px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(10,26,16,0.85);
    backdrop-filter: blur(18px);
    border-bottom: 1px solid rgba(201,168,76,0.15);
    transition: background .3s;
  }

  .sa-nav__brand {
    display: flex;
    align-items: center;
    gap: .75rem;
    text-decoration: none;
  }

  .sa-nav__logo-mark {
    width: 36px;
    height: 36px;
    border: 2px solid var(--gold);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Playfair Display', serif;
    font-size: .9rem;
    color: var(--gold);
    flex-shrink: 0;
  }

  .sa-nav__brand-text {
    font-family: 'Playfair Display', serif;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--ivory);
    letter-spacing: .02em;
    line-height: 1.1;
  }

  .sa-nav__brand-sub {
    font-family: 'DM Sans', sans-serif;
    font-size: .6rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 500;
  }

  .sa-nav__links {
    display: flex;
    align-items: center;
    gap: 2.5rem;
    list-style: none;
  }

  .sa-nav__links a {
    text-decoration: none;
    font-size: .78rem;
    letter-spacing: .14em;
    text-transform: uppercase;
    font-weight: 500;
    color: rgba(245,240,232,.65);
    position: relative;
    transition: color .25s;
  }

  .sa-nav__links a::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 0;
    right: 100%;
    height: 1px;
    background: var(--gold);
    transition: right .3s cubic-bezier(.4,0,.2,1);
  }

  .sa-nav__links a:hover { color: var(--gold); }
  .sa-nav__links a:hover::after { right: 0; }
  .sa-nav__links a.active { color: var(--gold); }
  .sa-nav__links a.active::after { right: 0; }

  .sa-nav__cta {
    background: var(--gold);
    color: var(--forest) !important;
    padding: .45rem 1.2rem;
    border-radius: 2px;
    font-weight: 600 !important;
    letter-spacing: .1em !important;
    transition: background .25s, transform .2s !important;
  }
  .sa-nav__cta:hover { background: var(--gold-light) !important; transform: translateY(-1px); }
  .sa-nav__cta::after { display: none !important; }

  /* ── UTILITY CLASSES FOR ALL PAGES ── */
  .sa-section-tag {
    font-size: .65rem;
    letter-spacing: .25em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 500;
    margin-bottom: 1rem;
    display: block;
  }

  .sa-heading {
    font-family: 'Playfair Display', serif;
    line-height: 1.1;
  }

  .sa-divider {
    width: 48px;
    height: 2px;
    background: var(--gold);
    margin: 1.5rem 0;
  }

  .sa-btn {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    padding: .75rem 1.75rem;
    font-size: .75rem;
    letter-spacing: .15em;
    text-transform: uppercase;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: all .25s;
    text-decoration: none;
    font-family: 'DM Sans', sans-serif;
  }

  .sa-btn--gold {
    background: var(--gold);
    color: var(--forest);
  }
  .sa-btn--gold:hover {
    background: var(--gold-light);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(201,168,76,.3);
  }

  .sa-btn--outline {
    background: transparent;
    color: var(--gold);
    border: 1px solid var(--gold);
  }
  .sa-btn--outline:hover {
    background: var(--gold);
    color: var(--forest);
    transform: translateY(-2px);
  }

  @media (max-width: 768px) {
    .sa-nav__links { display: none; }
    .sa-nav { padding: 0 1.25rem; }
  }
</style>

<nav class="sa-nav">
  <a href="/" class="sa-nav__brand">
    <div class="sa-nav__logo-mark">SA</div>
    <div>
      <div class="sa-nav__brand-text">Secret Agent</div>
      <div class="sa-nav__brand-sub">Bunker & Resorts</div>
    </div>
  </a>
  <ul class="sa-nav__links">
    <li><a href="/">Home</a></li>
    <li><a href="/about">Over ons</a></li>
    <li><a href="/shop">Shop</a></li>
    <li><a href="/contact">Contact</a></li>
    <li><a href="/bookings" class="sa-nav__cta">Boek nu</a></li>
  </ul>
</nav>