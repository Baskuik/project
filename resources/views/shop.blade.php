<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop & Tickets — Secret Agent</title>
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>

@include('navbar')

<!-- ── PAGE HERO ── -->
<div class="shop-hero">
  <div class="shop-hero__bg"></div>
  <div class="shop-hero__content">
    <span class="sa-section-tag">Webshop</span>
    <h1 class="sa-heading shop-hero__title">Tickets & Merch</h1>
    <p class="shop-hero__sub">Entreebewijzen, giftshop collectibles en exclusieve bundles — alles op één plek.</p>
  </div>
</div>

<main class="shop-main">

  <!-- ── FILTER BAR ── -->
  <div class="filter-bar">
    <div class="container">
      <div class="filter-bar__inner">
        <div class="filter-pills">
          <button class="pill pill--active" onclick="filterShop('all', this)">Alles</button>
          <button class="pill" onclick="filterShop('tickets', this)">🎟 Tickets</button>
          <button class="pill" onclick="filterShop('merch', this)">🎁 Giftshop</button>
          <button class="pill" onclick="filterShop('bundle', this)">📦 Bundles</button>
        </div>
        <div class="filter-bar__sort">
          <label>Sorteer op</label>
          <select class="sort-select">
            <option>Aanbevolen</option>
            <option>Prijs: laag → hoog</option>
            <option>Prijs: hoog → laag</option>
            <option>Nieuwste</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

    <!-- ── SECTION: TICKETS ── -->
    <div class="shop-section" id="section-tickets" data-type="tickets">
      <div class="shop-section__header">
        <div>
          <span class="sa-section-tag">Entree</span>
          <h2 class="sa-heading" style="font-size:2rem;color:var(--ivory);">Tickets</h2>
        </div>
        <div class="sa-divider" style="margin:1rem 0;"></div>
      </div>

      <div class="products-grid">

        <div class="product-card" data-type="tickets">
          <div class="product-card__img-wrap">
            <div class="product-card__badge product-card__badge--new">Bestseller</div>
            <div class="product-card__emo">🦁</div>
            <img src="/images/zoo-ticket.jpg" alt="Dierentuin" class="product-card__img">
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Dierentuin</span>
            <h3 class="product-card__name">Dierentuin Dagticket</h3>
            <p class="product-card__desc">Onbeperkte toegang tot de mooiste dierentuinen van Nederland, inclusief alle shows en feedings.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€24,95</span>
                <span class="product-card__old">€29,95</span>
              </div>
              <button class="product-card__btn">In winkelwagen</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="tickets">
          <div class="product-card__img-wrap">
            <div class="product-card__emo">🎡</div>
            <img src="/images/holidaypark-ticket.jpg" alt="Vakantiepark" class="product-card__img">
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Vakantiepark</span>
            <h3 class="product-card__name">Vakantiepark Dagpas</h3>
            <p class="product-card__desc">Dagpas inclusief alle attracties, activiteiten en zwembadtoegang in je gekozen park.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€19,95</span>
              </div>
              <button class="product-card__btn">In winkelwagen</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="tickets">
          <div class="product-card__img-wrap">
            <div class="product-card__emo">🏊</div>
            <img src="/images/swimmingpool-ticket.jpg" alt="Zwembad" class="product-card__img">
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Aquapark</span>
            <h3 class="product-card__name">Zwembad Dagticket</h3>
            <p class="product-card__desc">Hele dag genieten in het tropische zwemparadijs — glijbanen, golven en meer.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€9,95</span>
              </div>
              <button class="product-card__btn">In winkelwagen</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="tickets">
          <div class="product-card__img-wrap">
            <div class="product-card__badge product-card__badge--exclusive">Exclusief</div>
            <div class="product-card__emo">🦒</div>
            <img src="/images/zoo-ticket.jpg" alt="Safari" class="product-card__img">
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Safari</span>
            <h3 class="product-card__name">Safari VIP Experience</h3>
            <p class="product-card__desc">Private safari tour met gids, inclusief ontbijt en een exclusieve dierenontmoeting.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€89,95</span>
              </div>
              <button class="product-card__btn">In winkelwagen</button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ── SECTION: MERCH ── -->
    <div class="shop-section" id="section-merch" data-type="merch">
      <div class="shop-section__header">
        <div>
          <span class="sa-section-tag">Giftshop</span>
          <h2 class="sa-heading" style="font-size:2rem;color:var(--ivory);">Merchandise</h2>
        </div>
        <div class="sa-divider" style="margin:1rem 0;"></div>
      </div>

      <div class="products-grid">

        <div class="product-card" data-type="merch">
          <div class="product-card__img-wrap product-card__img-wrap--merch">
            <div class="product-card__emo">🧸</div>
            <img src="/images/plush-toy.jpg" alt="Knuffel" class="product-card__img product-card__img--contain">
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Knuffels</span>
            <h3 class="product-card__name">Pluche Knuffel — Leeuw</h3>
            <p class="product-card__desc">Supersoft pluche knuffel, ideaal cadeau voor jong en oud. 30cm groot.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€14,95</span>
              </div>
              <button class="product-card__btn product-card__btn--blue">Bestel</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="merch">
          <div class="product-card__img-wrap product-card__img-wrap--merch">
            <div class="product-card__emo">👕</div>
            <img src="/images/tshirt.jpg" alt="T-shirt" class="product-card__img product-card__img--contain">
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Kleding</span>
            <h3 class="product-card__name">T-shirt Secret Agent</h3>
            <p class="product-card__desc">100% organic cotton shirt met exclusieve Secret Agent print. Maten S t/m XXL.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€19,95</span>
              </div>
              <button class="product-card__btn product-card__btn--blue">Bestel</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="merch">
          <div class="product-card__img-wrap product-card__img-wrap--merch">
            <div class="product-card__emo">🔑</div>
            <img src="/images/keychain.jpg" alt="Keychain" class="product-card__img product-card__img--contain">
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Accessoires</span>
            <h3 class="product-card__name">Metalen Sleutelhanger</h3>
            <p class="product-card__desc">Hoogwaardig metalen sleutelhanger met reliëf Secret Agent logo.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€4,95</span>
              </div>
              <button class="product-card__btn product-card__btn--blue">Bestel</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="merch">
          <div class="product-card__img-wrap product-card__img-wrap--merch">
            <div class="product-card__emo">🧢</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Kleding</span>
            <h3 class="product-card__name">Snapback Cap</h3>
            <p class="product-card__desc">Stijlvolle snapback met geborduurde dierentuin-iconen. Één maat past allen.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€24,95</span>
              </div>
              <button class="product-card__btn product-card__btn--blue">Bestel</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="merch">
          <div class="product-card__img-wrap product-card__img-wrap--merch">
            <div class="product-card__emo">💧</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Drinkwaren</span>
            <h3 class="product-card__name">RVS Waterfles</h3>
            <p class="product-card__desc">Dubbelwandige RVS fles, 500ml. Houdt je drankje 12 uur koud of warm.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€22,95</span>
              </div>
              <button class="product-card__btn product-card__btn--blue">Bestel</button>
            </div>
          </div>
        </div>

        <div class="product-card" data-type="merch">
          <div class="product-card__img-wrap product-card__img-wrap--merch">
            <div class="product-card__emo">🧩</div>
          </div>
          <div class="product-card__body">
            <span class="product-card__cat">Speelgoed</span>
            <h3 class="product-card__name">Puzzel 1000 Stukjes</h3>
            <p class="product-card__desc">Mooie panoramapuzzel van een dierentuinscène — perfect voor op de keukentafel.</p>
            <div class="product-card__meta">
              <div class="product-card__price-wrap">
                <span class="product-card__price">€17,95</span>
              </div>
              <button class="product-card__btn product-card__btn--blue">Bestel</button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ── SECTION: BUNDLES ── -->
    <div class="shop-section" id="section-bundle" data-type="bundle">
      <div class="shop-section__header">
        <div>
          <span class="sa-section-tag">Aanbiedingen</span>
          <h2 class="sa-heading" style="font-size:2rem;color:var(--ivory);">Value Bundles</h2>
        </div>
        <div class="sa-divider" style="margin:1rem 0;"></div>
      </div>

      <div class="bundles-grid">

        <div class="bundle-card">
          <div class="bundle-card__tag">🔥 Meest gekozen</div>
          <div class="bundle-card__emoji">🦁🎟🧸</div>
          <h3 class="sa-heading bundle-card__title">Dierentuin Familiepakket</h3>
          <p class="bundle-card__desc">2 volwassenen + 2 kinderen tickets + 2 pluche knuffels + 4 sleutelhangers. Alles in één.</p>
          <ul class="bundle-card__includes">
            <li>✓ 4x Dagticket dierentuin</li>
            <li>✓ 2x Pluche knuffel</li>
            <li>✓ 4x Sleutelhanger</li>
            <li>✓ Gratis parkeerticket</li>
          </ul>
          <div class="bundle-card__footer">
            <div>
              <span class="bundle-card__old">€109,75</span>
              <span class="bundle-card__price">€79,95</span>
            </div>
            <button class="sa-btn sa-btn--gold">Koop bundle</button>
          </div>
        </div>

        <div class="bundle-card bundle-card--dark">
          <div class="bundle-card__tag">⭐ Premium</div>
          <div class="bundle-card__emoji">🏕🦒🎡</div>
          <h3 class="sa-heading bundle-card__title">Weekend Avontuur</h3>
          <p class="bundle-card__desc">Één nacht verblijf + 2 dagtickets + exclusive merchandise set. Het complete pakket.</p>
          <ul class="bundle-card__includes">
            <li>✓ 1 nacht bunker suite</li>
            <li>✓ 2x Dierentuin VIP ticket</li>
            <li>✓ T-shirt + cap + waterfles</li>
            <li>✓ Welkomstpakket</li>
          </ul>
          <div class="bundle-card__footer">
            <div>
              <span class="bundle-card__old">€189,80</span>
              <span class="bundle-card__price">€139,95</span>
            </div>
            <button class="sa-btn sa-btn--gold">Koop bundle</button>
          </div>
        </div>

        <div class="bundle-card">
          <div class="bundle-card__tag">💝 Cadeau-idee</div>
          <div class="bundle-card__emoji">🎁🧸🔑</div>
          <h3 class="sa-heading bundle-card__title">Giftbox Collectie</h3>
          <p class="bundle-card__desc">Mooi verpakte giftbox met handgepickte merchandise. Ideaal als verjaardagscadeau.</p>
          <ul class="bundle-card__includes">
            <li>✓ Pluche knuffel naar keuze</li>
            <li>✓ T-shirt of cap</li>
            <li>✓ Sleutelhanger + magneet</li>
            <li>✓ Cadeauverpakking</li>
          </ul>
          <div class="bundle-card__footer">
            <div>
              <span class="bundle-card__old">€59,80</span>
              <span class="bundle-card__price">€44,95</span>
            </div>
            <button class="sa-btn sa-btn--gold">Koop bundle</button>
          </div>
        </div>

      </div>
    </div>

  </div>
</main>

<!-- FOOTER (reuse) -->
<footer style="background:#060e09;padding:2rem;text-align:center;border-top:1px solid rgba(201,168,76,.1);">
  <p style="color:rgba(245,240,232,.3);font-size:.75rem;letter-spacing:.1em;">© 2026 Secret Agent Bunker & Resorts · <a href="/about" style="color:var(--gold);text-decoration:none;">Over ons</a> · <a href="/contact" style="color:var(--gold);text-decoration:none;">Contact</a></p>
</footer>

<style>
  /* SHOP PAGE */
  .shop-hero {
    padding-top: 72px;
    min-height: 38vh;
    display: flex;
    align-items: flex-end;
    position: relative;
    overflow: hidden;
    padding-bottom: 4rem;
  }

  .shop-hero__bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 80% 100% at 30% 100%, #1a3a24 0%, #060e09 70%);
  }

  .shop-hero__bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(201,168,76,.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(201,168,76,.04) 1px, transparent 1px);
    background-size: 40px 40px;
  }

  .shop-hero__content {
    position: relative;
    z-index: 1;
    padding: 0 2rem;
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
  }

  .shop-hero__title {
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    color: var(--ivory);
    margin: .5rem 0 1rem;
  }

  .shop-hero__sub {
    color: rgba(245,240,232,.5);
    font-size: .95rem;
    max-width: 500px;
    line-height: 1.6;
  }

  /* FILTER BAR */
  .filter-bar {
    background: rgba(15,35,24,.8);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(201,168,76,.1);
    position: sticky;
    top: 72px;
    z-index: 50;
    padding: .75rem 0;
  }

  .filter-bar__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .filter-pills { display: flex; gap: .5rem; flex-wrap: wrap; }

  .pill {
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(201,168,76,.15);
    color: rgba(245,240,232,.55);
    padding: .4rem 1rem;
    font-size: .7rem;
    letter-spacing: .1em;
    text-transform: uppercase;
    font-weight: 600;
    cursor: pointer;
    transition: all .2s;
    font-family: 'DM Sans', sans-serif;
    border-radius: 2px;
  }

  .pill:hover, .pill--active {
    background: var(--gold);
    color: var(--forest);
    border-color: var(--gold);
  }

  .filter-bar__sort {
    display: flex;
    align-items: center;
    gap: .5rem;
  }

  .filter-bar__sort label {
    font-size: .65rem;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: rgba(245,240,232,.35);
  }

  .sort-select {
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(201,168,76,.15);
    color: var(--ivory);
    padding: .35rem .75rem;
    font-size: .75rem;
    font-family: 'DM Sans', sans-serif;
    cursor: pointer;
    outline: none;
  }

  /* SHOP MAIN */
  .shop-main { padding-bottom: 6rem; background: var(--deep); }

  .shop-section { padding: 5rem 0 2rem; }

  .shop-section__header { margin-bottom: 2rem; }

  /* PRODUCTS GRID */
  .products-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    background: rgba(201,168,76,.08);
  }

  .product-card {
    background: var(--deep);
    overflow: hidden;
    transition: all .3s cubic-bezier(.4,0,.2,1);
    position: relative;
  }

  .product-card:hover {
    background: rgba(15,35,24,.95);
    z-index: 2;
    box-shadow: 0 20px 60px rgba(0,0,0,.5);
    transform: translateY(-4px) scale(1.01);
  }

  .product-card__img-wrap {
    height: 200px;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #0f2318, #1a3a24);
  }

  .product-card__img-wrap--merch {
    background: linear-gradient(135deg, #0a1a10, #1a2a1a);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .product-card__emo {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 4rem;
    opacity: .25;
    z-index: 0;
  }

  .product-card__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s;
    position: relative;
    z-index: 1;
  }

  .product-card__img--contain { object-fit: contain; padding: 1.5rem; }
  .product-card:hover .product-card__img { transform: scale(1.06); }

  .product-card__badge {
    position: absolute;
    top: .75rem;
    left: .75rem;
    font-size: .55rem;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    padding: .3rem .65rem;
    z-index: 2;
  }

  .product-card__badge--new { background: var(--gold); color: var(--forest); }
  .product-card__badge--exclusive { background: #8b2fc9; color: #fff; }

  .product-card__body { padding: 1.5rem; }

  .product-card__cat {
    font-size: .58rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 600;
    display: block;
    margin-bottom: .4rem;
  }

  .product-card__name {
    font-family: 'Playfair Display', serif;
    font-size: 1.05rem;
    color: var(--ivory);
    margin-bottom: .6rem;
    line-height: 1.3;
  }

  .product-card__desc {
    font-size: .78rem;
    color: rgba(245,240,232,.45);
    line-height: 1.6;
    margin-bottom: 1.25rem;
  }

  .product-card__meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: .5rem;
    flex-wrap: wrap;
  }

  .product-card__price-wrap { display: flex; align-items: baseline; gap: .5rem; }

  .product-card__price {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--gold);
  }

  .product-card__old {
    font-size: .75rem;
    color: rgba(245,240,232,.25);
    text-decoration: line-through;
  }

  .product-card__btn {
    background: var(--gold);
    color: var(--forest);
    border: none;
    padding: .5rem 1rem;
    font-size: .65rem;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    cursor: pointer;
    transition: all .25s;
    font-family: 'DM Sans', sans-serif;
    white-space: nowrap;
  }

  .product-card__btn:hover { background: var(--gold-light); transform: translateY(-1px); }

  .product-card__btn--blue {
    background: rgba(74,124,89,.25);
    color: var(--mist);
    border: 1px solid rgba(74,124,89,.4);
  }

  .product-card__btn--blue:hover {
    background: var(--sage);
    color: var(--ivory);
  }

  /* BUNDLES */
  .bundles-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
  }

  .bundle-card {
    background: rgba(255,255,255,.02);
    border: 1px solid rgba(201,168,76,.15);
    padding: 2.5rem;
    position: relative;
    transition: border-color .3s, transform .3s;
  }

  .bundle-card:hover {
    border-color: rgba(201,168,76,.4);
    transform: translateY(-4px);
  }

  .bundle-card--dark {
    background: linear-gradient(135deg, rgba(201,168,76,.07) 0%, rgba(15,35,24,.5) 100%);
    border-color: rgba(201,168,76,.3);
  }

  .bundle-card__tag {
    font-size: .6rem;
    letter-spacing: .15em;
    text-transform: uppercase;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: 1rem;
  }

  .bundle-card__emoji {
    font-size: 2rem;
    margin-bottom: 1rem;
    letter-spacing: .2rem;
  }

  .bundle-card__title {
    font-size: 1.4rem;
    color: var(--ivory);
    margin-bottom: .75rem;
  }

  .bundle-card__desc {
    font-size: .82rem;
    color: rgba(245,240,232,.5);
    line-height: 1.6;
    margin-bottom: 1.5rem;
  }

  .bundle-card__includes {
    list-style: none;
    margin-bottom: 2rem;
  }

  .bundle-card__includes li {
    font-size: .8rem;
    color: rgba(245,240,232,.65);
    padding: .4rem 0;
    border-bottom: 1px solid rgba(255,255,255,.04);
  }

  .bundle-card__footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .bundle-card__old {
    display: block;
    font-size: .75rem;
    color: rgba(245,240,232,.25);
    text-decoration: line-through;
  }

  .bundle-card__price {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem;
    font-weight: 700;
    color: var(--gold);
  }

  @media (max-width: 1024px) {
    .products-grid { grid-template-columns: repeat(2, 1fr); }
    .bundles-grid { grid-template-columns: 1fr 1fr; }
  }

  @media (max-width: 640px) {
    .products-grid { grid-template-columns: 1fr; }
    .bundles-grid { grid-template-columns: 1fr; }
  }
</style>

<script>
  function filterShop(type, btn) {
    document.querySelectorAll('.pill').forEach(p => p.classList.remove('pill--active'));
    btn.classList.add('pill--active');

    const sections = document.querySelectorAll('.shop-section');
    if (type === 'all') {
      sections.forEach(s => s.style.display = '');
      document.querySelectorAll('.product-card').forEach(c => c.style.display = '');
    } else {
      sections.forEach(s => {
        s.style.display = s.dataset.type === type ? '' : 'none';
      });
    }
  }
</script>

</body>
</html>