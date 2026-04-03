<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact — Secret Agent Bunker & Resorts</title>
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>

@include('navbar')

<!-- HERO -->
<div class="contact-hero">
  <div class="contact-hero__bg"></div>
  <div class="contact-hero__content">
    <span class="sa-section-tag">Neem contact op</span>
    <h1 class="sa-heading contact-hero__title">Heb je een<br>vraag voor ons?</h1>
  </div>
  <div class="contact-hero__deco">CONTACT</div>
</div>

<main style="background:var(--deep);">

  <div class="container contact-layout">

    <!-- LEFT: FORM -->
    <div class="contact-form-wrap">
      <span class="sa-section-tag">Stuur een bericht</span>
      <h2 class="sa-heading" style="font-size:2rem;color:var(--ivory);margin-bottom:.5rem;">We horen graag<br>van je.</h2>
      <div class="sa-divider"></div>

      @if(session('contact_success'))
        <div class="contact-success">
          <div class="contact-success__icon">✓</div>
          <h3 class="sa-heading" style="font-size:1.3rem;color:var(--ivory);">Bericht ontvangen!</h3>
          <p style="color:rgba(245,240,232,.55);font-size:.85rem;margin-top:.5rem;">We nemen binnen 24 uur contact met je op.</p>
        </div>
      @else
        <form method="POST" action="{{ url('/contact') }}" class="contact-form">
          @csrf
          <div class="contact-form__grid">
            <div class="form-group">
              <label class="form-label">Voornaam</label>
              <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-input" placeholder="Jonas" required>
              @error('first_name')<p class="form-error">{{ $message }}</p>@enderror
            </div>
            <div class="form-group">
              <label class="form-label">Achternaam</label>
              <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-input" placeholder="de Vries" required>
              @error('last_name')<p class="form-error">{{ $message }}</p>@enderror
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">E-mailadres</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-input" placeholder="jouw@email.nl" required>
            @error('email')<p class="form-error">{{ $message }}</p>@enderror
          </div>
          <div class="form-group">
            <label class="form-label">Onderwerp</label>
            <select name="subject" class="form-input form-select" required>
              <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Kies een onderwerp</option>
              <option value="boeking" {{ old('subject') == 'boeking' ? 'selected' : '' }}>Vraag over boeking</option>
              <option value="shop" {{ old('subject') == 'shop' ? 'selected' : '' }}>Vraag over de shop</option>
              <option value="partnership" {{ old('subject') == 'partnership' ? 'selected' : '' }}>Partnership / samenwerking</option>
              <option value="klacht" {{ old('subject') == 'klacht' ? 'selected' : '' }}>Klacht of feedback</option>
              <option value="overig" {{ old('subject') == 'overig' ? 'selected' : '' }}>Overig</option>
            </select>
            @error('subject')<p class="form-error">{{ $message }}</p>@enderror
          </div>
          <div class="form-group">
            <label class="form-label">Bericht</label>
            <textarea name="message" class="form-input form-textarea" rows="5" placeholder="Vertel ons waar we je mee kunnen helpen..." required>{{ old('message') }}</textarea>
            @error('message')<p class="form-error">{{ $message }}</p>@enderror
          </div>
          <button type="submit" class="contact-submit">
            <span>Verstuur bericht</span>
            <span>→</span>
          </button>
        </form>
      @endif
    </div>

    <!-- RIGHT: INFO -->
    <div class="contact-info">
      <div class="contact-info__card">
        <span class="sa-section-tag">Onze gegevens</span>
        <h3 class="sa-heading" style="font-size:1.4rem;color:var(--ivory);margin-bottom:2rem;">Direct bereikbaar.</h3>

        <div class="contact-info__items">
          <div class="contact-info__item">
            <div class="contact-info__icon">📍</div>
            <div>
              <div class="contact-info__label">Adres</div>
              <div class="contact-info__value">Geheime Locatie 1<br>1234 SA, Nederland</div>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon">📧</div>
            <div>
              <div class="contact-info__label">E-mail</div>
              <div class="contact-info__value">info@secretagentresorts.nl</div>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon">📞</div>
            <div>
              <div class="contact-info__label">Telefoon</div>
              <div class="contact-info__value">+31 20 000 0000</div>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="contact-info__icon">🕐</div>
            <div>
              <div class="contact-info__label">Openingstijden</div>
              <div class="contact-info__value">Ma – Vr: 09:00 – 17:00<br>Za – Zo: Gesloten</div>
            </div>
          </div>
        </div>
      </div>

      <div class="contact-info__faq">
        <span class="sa-section-tag" style="margin-top:2rem;">Veelgestelde vragen</span>
        <div class="faq-item">
          <div class="faq-item__q">Hoe kan ik een boeking annuleren?</div>
          <div class="faq-item__a">Annuleren kan gratis tot 7 dagen voor aankomst. Daarna geldt een annuleringsvergoeding van 50%.</div>
        </div>
        <div class="faq-item">
          <div class="faq-item__q">Zijn huisdieren toegestaan?</div>
          <div class="faq-item__a">Dit verschilt per locatie. Neem contact op voor de specifieke regels van jouw gekozen verblijf.</div>
        </div>
        <div class="faq-item">
          <div class="faq-item__q">Kan ik een cadeaubon kopen?</div>
          <div class="faq-item__a">Ja! Cadeaubonnen zijn beschikbaar in onze shop, in verschillende waarden.</div>
        </div>
      </div>
    </div>

  </div>

</main>

<footer style="background:#060e09;padding:2rem;text-align:center;border-top:1px solid rgba(201,168,76,.1);">
  <p style="color:rgba(245,240,232,.3);font-size:.75rem;letter-spacing:.1em;">© 2026 Secret Agent Bunker & Resorts · <a href="/shop" style="color:var(--gold);text-decoration:none;">Shop</a> · <a href="/about" style="color:var(--gold);text-decoration:none;">Over ons</a></p>
</footer>

<style>
  /* CONTACT HERO */
  .contact-hero {
    padding-top: 72px;
    min-height: 45vh;
    display: flex;
    align-items: flex-end;
    position: relative;
    overflow: hidden;
    padding-bottom: 5rem;
  }

  .contact-hero__bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 120% 100% at 20% 50%, #1a3a24 0%, #060e09 65%);
  }

  .contact-hero__bg::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(201,168,76,.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(201,168,76,.04) 1px, transparent 1px);
    background-size: 50px 50px;
  }

  .contact-hero__content {
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
    to   { opacity: 1; transform: translateY(0); }
  }

  .contact-hero__title {
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    color: var(--ivory);
    margin-top: .75rem;
    line-height: 1.05;
  }

  .contact-hero__deco {
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

  /* LAYOUT */
  .contact-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    padding-top: 6rem;
    padding-bottom: 6rem;
    align-items: start;
  }

  /* FORM */
  .contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
    margin-top: 2rem;
  }

  .contact-form__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  .form-group { display: flex; flex-direction: column; gap: .4rem; }

  .form-label {
    font-size: .6rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: rgba(245,240,232,.4);
    font-weight: 600;
  }

  .form-input {
    background: rgba(255,255,255,.03);
    border: 1px solid rgba(201,168,76,.15);
    color: var(--ivory);
    padding: .75rem 1rem;
    font-size: .88rem;
    font-family: 'DM Sans', sans-serif;
    outline: none;
    transition: border-color .25s, background .25s;
    border-radius: 0;
    appearance: none;
    -webkit-appearance: none;
  }

  .form-input:focus {
    border-color: rgba(201,168,76,.5);
    background: rgba(201,168,76,.03);
  }

  .form-input::placeholder { color: rgba(245,240,232,.2); }

  .form-select {
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' fill='none'%3E%3Cpath d='M1 1l5 5 5-5' stroke='rgba(201,168,76,.5)' stroke-width='1.5'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    padding-right: 2.5rem;
  }

  .form-select option { background: var(--forest); color: var(--ivory); }
  .form-textarea { resize: vertical; min-height: 120px; }

  .form-error {
    color: #f7a6a6;
    font-size: .8rem;
    margin-top: .3rem;
  }

  .contact-submit {
    background: var(--gold);
    color: var(--forest);
    border: none;
    padding: 1rem 2rem;
    font-size: .75rem;
    font-weight: 700;
    letter-spacing: .15em;
    text-transform: uppercase;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    transition: all .25s;
    font-family: 'DM Sans', sans-serif;
    width: 100%;
    margin-top: .5rem;
  }

  .contact-submit:hover {
    background: var(--gold-light);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(201,168,76,.25);
  }

  /* SUCCESS */
  .contact-success {
    background: rgba(74,124,89,.08);
    border: 1px solid rgba(74,124,89,.25);
    padding: 2.5rem;
    text-align: center;
    margin-top: 2rem;
  }

  .contact-success__icon {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: var(--gold);
    color: var(--forest);
    font-size: 1.3rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
  }

  /* INFO */
  .contact-info__card {
    background: rgba(255,255,255,.02);
    border: 1px solid rgba(201,168,76,.12);
    padding: 2.5rem;
  }

  .contact-info__items {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
  }

  .contact-info__item {
    display: flex;
    gap: 1rem;
    align-items: flex-start;
  }

  .contact-info__icon {
    font-size: 1.3rem;
    flex-shrink: 0;
    margin-top: .1rem;
  }

  .contact-info__label {
    font-size: .6rem;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 600;
    margin-bottom: .3rem;
  }

  .contact-info__value {
    font-size: .85rem;
    color: rgba(245,240,232,.6);
    line-height: 1.6;
  }

  /* FAQ */
  .contact-info__faq {
    margin-top: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  .faq-item {
    border: 1px solid rgba(201,168,76,.1);
    background: rgba(255,255,255,.01);
    padding: 1.25rem 1.5rem;
    transition: border-color .3s;
  }

  .faq-item:hover { border-color: rgba(201,168,76,.25); }

  .faq-item__q {
    font-size: .82rem;
    font-weight: 600;
    color: var(--ivory);
    margin-bottom: .5rem;
  }

  .faq-item__a {
    font-size: .78rem;
    color: rgba(245,240,232,.45);
    line-height: 1.6;
  }

  @media (max-width: 768px) {
    .contact-layout { grid-template-columns: 1fr; gap: 3rem; }
    .contact-form__grid { grid-template-columns: 1fr; }
  }
</style>

</body>
</html>