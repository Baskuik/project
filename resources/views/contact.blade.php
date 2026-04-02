<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Over Ons — Secret Agent Bunker & Resorts</title>
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>

@include('navbar')

<!-- HERO -->
<div class="about-hero">
  <div class="about-hero__bg"></div>
  <div class="about-hero__content">
    <span class="sa-section-tag">Over Secret Agent</span>
    <h1 class="sa-heading about-hero__title">Het verhaal<br>achter de <em>missie.</em></h1>
  </div>
  <div class="about-hero__deco">SECRET AGENT</div>
</div>

<main style="background:var(--deep);">

  <!-- MISSION STATEMENT -->
  <section class="about-mission container">
    <div class="about-mission__quote">
      <div class="about-mission__q-mark">"</div>
      <blockquote class="sa-heading about-mission__text">
        Wij geloven dat de mooiste verblijven niet in hotels zijn — maar midden in het avontuur zelf.
      </blockquote>
    </div>
    <div class="about-mission__body">
      <p>Secret Agent Bunker & Resorts werd geboren uit één simpele gedachte: wat als je niet alleen naar de dierentuin gaat, maar <em>erin slaapt?</em> Wat als je vakantiepark-verblijf gepaard gaat met de geur van pijnbomen en het geluid van watervallen buiten je raam?</p>
      <p>Wij plaatsen onze gasten midden in de natuur, de beleving, de magie — en zorgen ervoor dat elk detail klopt, van het bed tot het ontbijt tot de tickets in je welkomstpakket.</p>
    </div>
  </section>

  <!-- STATS ROW -->
  <div class="about-stats">
    <div class="about-stat">
      <span class="about-stat__num">2024</span>
      <span class="about-stat__lbl">Opgericht</span>
    </div>
    <div class="about-stat">
      <span class="about-stat__num">50+</span>
      <span class="about-stat__lbl">Locaties</span>
    </div>
    <div class="about-stat">
      <span class="about-stat__num">12K+</span>
      <span class="about-stat__lbl">Blije gasten</span>
    </div>
    <div class="about-stat">
      <span class="about-stat__num">8</span>
      <span class="about-stat__lbl">Landen</span>
    </div>
  </div>

  <!-- VALUES -->
  <section class="about-values container">
    <span class="sa-section-tag" style="text-align:center;display:block;">Onze waarden</span>
    <h2 class="sa-heading" style="font-size:2.5rem;color:var(--ivory);text-align:center;margin-bottom:.5rem;">Wat ons drijft.</h2>
    <div class="sa-divider" style="margin:1.5rem auto;"></div>

    <div class="values-grid">
      <div class="value-card">
        <div class="value-card__icon">🌿</div>
        <h3 class="sa-heading value-card__title">Duurzaamheid</h3>
        <p class="value-card__desc">Elke verblijfslocatie werkt samen met lokale natuurorganisaties. Wij compenseren 110% van onze CO₂-uitstoot.</p>
      </div>
      <div class="value-card value-card--highlight">
        <div class="value-card__icon">🎯</div>
        <h3 class="sa-heading value-card__title">Authenticiteit</h3>
        <p class="value-card__desc">Geen nep-safari gevoel. Elke locatie is zorgvuldig samengesteld voor een echte, onvergetelijke ervaring.</p>
      </div>
      <div class="value-card">
        <div class="value-card__icon">🤝</div>
        <h3 class="sa-heading value-card__title">Partnerschap</h3>
        <p class="value-card__desc">Wij werken direct samen met dierentuinen, parken en lokale producenten. Eerlijk, transparant en langdurig.</p>
      </div>
      <div class="value-card">
        <div class="value-card__icon">✨</div>
        <h3 class="sa-heading value-card__title">Luxe details</h3>
        <p class="value-card__desc">Van het welkomstpakket tot het afscheidssouvenirtje — elk detail is bewust gekozen en premium uitgevoerd.</p>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section class="about-team container">
    <span class="sa-section-tag">Het team</span>
    <h2 class="sa-heading" style="font-size:2.5rem;color:var(--ivory);margin-bottom:3rem;">De mensen achter<br>de missie.</h2>

    <div class="team-grid">
      <div class="team-card">
        <div class="team-card__avatar team-card__avatar--a">J</div>
        <div class="team-card__body">
          <h4 class="sa-heading team-card__name">Jonas de Vries</h4>
          <span class="team-card__role">Founder & CEO</span>
          <p class="team-card__bio">Voormalig avonturier en hospitality-expert. Droomde al op zijn 12e van slapen bij de giraffen.</p>
        </div>
      </div>
      <div class="team-card">
        <div class="team-card__avatar team-card__avatar--b">A</div>
        <div class="team-card__body">
          <h4 class="sa-heading team-card__name">Amber Kuijpers</h4>
          <span class="team-card__role">Head of Experiences</span>
          <p class="team-card__bio">Samensteller van elk verblijfspakket. Heeft persoonlijk alle 50+ locaties bezocht en goedgekeurd.</p>
        </div>
      </div>
      <div class="team-card">
        <div class="team-card__avatar team-card__avatar--c">R</div>
        <div class="team-card__body">
          <h4 class="sa-heading team-card__name">Rens Hoekstra</h4>
          <span class="team-card__role">Shop & Merchandise</span>
          <p class="team-card__bio">Ontwerper van elke giftshop collectie. Zijn knuffels zijn beroemd in de industrie.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA STRIP -->
  <div class="about-cta">
    <div class="container">
      <div class="about-cta__inner">
        <div>
          <span class="sa-section-tag">Klaar voor het avontuur?</span>
          <h2 class="sa-heading" style="font-size:2.2rem;color:var(--ivory);">Jouw volgende missie wacht.</h2>
        </div>
        <div class="about-cta__btns">
          <a href="/bookings" class="sa-btn sa-btn--gold">Boek een verblijf</a>
          <a href="/contact" class="sa-btn sa-btn--outline">Neem contact op</a>
        </div>
      </div>
    </div>
  </div>

</main>

<footer style="background:#060e09;padding:2rem;text-align:center;border-top:1px solid rgba(201,168,76,.1);">
  <p style="color:rgba(245,240,232,.3);font-size:.75rem;letter-spacing:.1em;">© 2026 Secret Agent Bunker & Resorts · <a href="/shop" style="color:var(--gold);text-decoration:none;">Shop</a> · <a href="/contact" style="color:var(--gold);text-decoration:none;">Contact</a></p>
</footer>

<style>
  /* ABOUT HERO */
  .about-hero {
    padding-top: 72px;
    min-height: 55vh;
    display: flex;
    align-items: flex-end;
    position: relative;
    overflow: hidden;
    padding-bottom: 5rem;
  }

  .about-hero__bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 120% 100% at 80% 50%, #1a3a24 0%, #060e09 65%);
  }

  .about-hero__bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      radial-gradient(circle at 70% 60%, rgba(201,168,76,.07) 0%, transparent 50%);
  }

  .about-hero__content {
    position: relative;
    z-index: 2;
    padding: 0 2rem;
    max-width: 1200px;
    margin: 0 auto;
    width: 100%;
    animation: heroReveal 1s both;
  }

  @keyframes heroReveal {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .about-hero__title {
    font-size: clamp(2.5rem, 6vw, 5rem);
    color: var(--ivory);
    margin-top: .75rem;
    line-height: 1.05;
  }

  .about-hero__title em { color: var(--gold); font-style: italic; }

  .about-hero__deco {
    position: absolute;
    right: -2rem;
    top: 50%;
    transform: translateY(-50%) rotate(90deg);
    font-family: 'Playfair Display', serif;
    font-size: 7rem;
    font-weight: 900;
    color: rgba(201,168,76,.04);
    letter-spacing: .5em;
    white-space: nowrap;
    pointer-events: none;
    z-index: 1;
  }

  /* MISSION */
  .about-mission {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    padding: 7rem 2rem;
    align-items: center;
  }

  .about-mission__quote { position: relative; }

  .about-mission__q-mark {
    font-family: 'Playfair Display', serif;
    font-size: 8rem;
    color: var(--gold);
    opacity: .2;
    line-height: .5;
    margin-bottom: 1rem;
  }

  .about-mission__text {
    font-size: 1.5rem;
    color: var(--ivory);
    line-height: 1.4;
    font-style: italic;
  }

  .about-mission__body {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  .about-mission__body p {
    color: rgba(245,240,232,.6);
    font-size: .95rem;
    line-height: 1.75;
  }

  .about-mission__body em {
    color: var(--gold);
    font-style: italic;
  }

  /* ABOUT STATS */
  .about-stats {
    display: flex;
    background: linear-gradient(90deg, #0f2318, #1a3a24, #0f2318);
    border-top: 1px solid rgba(201,168,76,.12);
    border-bottom: 1px solid rgba(201,168,76,.12);
  }

  .about-stat {
    flex: 1;
    text-align: center;
    padding: 3rem 2rem;
    border-right: 1px solid rgba(201,168,76,.08);
  }

  .about-stat:last-child { border-right: none; }

  .about-stat__num {
    display: block;
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: .4rem;
  }

  .about-stat__lbl {
    font-size: .62rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: rgba(245,240,232,.35);
    font-weight: 500;
  }

  /* VALUES */
  .about-values {
    padding: 7rem 2rem;
  }

  .values-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    margin-top: 3rem;
  }

  .value-card {
    padding: 2.5rem 2rem;
    border: 1px solid rgba(201,168,76,.1);
    background: rgba(255,255,255,.02);
    transition: border-color .3s, transform .3s;
  }

  .value-card:hover {
    border-color: rgba(201,168,76,.3);
    transform: translateY(-4px);
  }

  .value-card--highlight {
    background: linear-gradient(135deg, rgba(201,168,76,.07) 0%, rgba(74,124,89,.05) 100%);
    border-color: rgba(201,168,76,.25);
  }

  .value-card__icon {
    font-size: 2rem;
    margin-bottom: 1.25rem;
  }

  .value-card__title {
    font-size: 1.15rem;
    color: var(--ivory);
    margin-bottom: .75rem;
  }

  .value-card__desc {
    font-size: .82rem;
    color: rgba(245,240,232,.5);
    line-height: 1.65;
  }

  /* TEAM */
  .about-team {
    padding: 6rem 2rem;
    border-top: 1px solid rgba(201,168,76,.08);
  }

  .team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
  }

  .team-card {
    background: rgba(255,255,255,.02);
    border: 1px solid rgba(201,168,76,.1);
    padding: 2.5rem;
    display: flex;
    gap: 1.5rem;
    align-items: flex-start;
    transition: border-color .3s;
  }

  .team-card:hover { border-color: rgba(201,168,76,.3); }

  .team-card__avatar {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--ivory);
    flex-shrink: 0;
  }

  .team-card__avatar--a { background: linear-gradient(135deg, #1a4a2a, #2d7a4a); }
  .team-card__avatar--b { background: linear-gradient(135deg, #4a2a1a, #8a4a2a); }
  .team-card__avatar--c { background: linear-gradient(135deg, #1a2a4a, #2a4a8a); }

  .team-card__name {
    font-size: 1.1rem;
    color: var(--ivory);
    margin-bottom: .25rem;
  }

  .team-card__role {
    font-size: .62rem;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 600;
    display: block;
    margin-bottom: .75rem;
  }

  .team-card__bio {
    font-size: .8rem;
    color: rgba(245,240,232,.45);
    line-height: 1.6;
  }

  /* ABOUT CTA */
  .about-cta {
    background: linear-gradient(135deg, #0f2318 0%, #1a3a24 50%, #0f2318 100%);
    border-top: 1px solid rgba(201,168,76,.15);
    border-bottom: 1px solid rgba(201,168,76,.15);
    padding: 5rem 0;
  }

  .about-cta__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    flex-wrap: wrap;
  }

  .about-cta__btns { display: flex; gap: 1rem; flex-wrap: wrap; }

  @media (max-width: 768px) {
    .about-mission { grid-template-columns: 1fr; gap: 3rem; }
    .values-grid { grid-template-columns: 1fr 1fr; }
    .team-grid { grid-template-columns: 1fr; }
    .about-stats { flex-wrap: wrap; }
    .about-stat { flex: 1 0 50%; border-right: none; border-bottom: 1px solid rgba(201,168,76,.08); }
  }

  @media (max-width: 480px) {
    .values-grid { grid-template-columns: 1fr; }
    .about-cta__inner { flex-direction: column; }
  }
</style>

</body>
</html>