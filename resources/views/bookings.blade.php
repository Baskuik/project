<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boekingen — Secret Agent Bunker & Resorts</title>
  <link href="/css/app.css" rel="stylesheet">
</head>
<body>

@include('navbar')

<!-- HERO -->
<div class="book-hero">
  <div class="book-hero__bg"></div>
  <div class="book-hero__content">
    <span class="sa-section-tag">Reserveer nu</span>
    <h1 class="sa-heading book-hero__title">Plan je<br><em>avontuur.</em></h1>
    <p class="book-hero__sub">Kies je type verblijf, selecteer je locatie en datum — en wij regelen de rest.</p>
  </div>
  <div class="book-hero__tags">
    <span class="book-tag">🦁 Dierentuin Suites</span>
    <span class="book-tag">🌲 Vakantiepark Lodges</span>
    <span class="book-tag">🏊 Aqua Resorts</span>
    <span class="book-tag">🕵️ Bunker Ervaringen</span>
  </div>
</div>

<main style="background:var(--deep);padding-bottom:6rem;">
  <div class="container">

    <!-- BOOKING WIDGET -->
    <div class="book-widget">
      <div class="book-widget__header">
        <h2 class="sa-heading" style="font-size:1.5rem;color:var(--ivory);">Nieuwe boeking</h2>
        <p style="color:rgba(245,240,232,.4);font-size:.8rem;margin-top:.25rem;">Alle velden zijn verplicht tenzij anders aangegeven</p>
      </div>

      <form class="book-form" method="POST" action="{{ url('/bookings') }}">
        @csrf
        <!-- TYPE SELECTION -->
        <div class="book-step">
          <div class="book-step__label">
            <span class="book-step__num">01</span>
            <span>Type verblijf</span>
          </div>
          <div class="type-cards">
            @foreach ($stays as $stay)
              <label class="type-card">
                <input type="radio" name="stay_id" value="{{ $stay->id }}" {{ old('stay_id', $loop->first ? $stay->id : null) == $stay->id ? 'checked' : '' }} required>
                <div class="type-card__inner">
                  <span class="type-card__icon">🏠</span>
                  <span class="type-card__name">{{ $stay->name }}</span>
                  <span class="type-card__desc">€{{ number_format($stay->price_per_night / 100, 2, ',', '.') }} per nacht · max {{ $stay->max_adults }} volw. / {{ $stay->max_kids }} kind.</span>
                </div>
              </label>
            @endforeach
          </div>
          @error('stay_id')
            <p style="color:#f7a6a6;margin-top:.75rem;font-size:.85rem;">{{ $message }}</p>
          @enderror
        </div>

        <!-- DETAILS -->
        <div class="book-step">
          <div class="book-step__label">
            <span class="book-step__num">02</span>
            <span>Uw gegevens</span>
          </div>
          <div class="book-form__grid">
            <div class="form-group">
              <label class="form-label">Voornaam</label>
              <input type="text" class="form-input" name="first_name" value="{{ old('first_name', $user->name ? explode(' ', $user->name)[0] : '') }}" placeholder="Jonas" required>
              @error('first_name')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label">Achternaam</label>
              <input type="text" class="form-input" name="last_name" value="{{ old('last_name') }}" placeholder="de Vries" required>
              @error('last_name')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label">E-mailadres</label>
              <input type="email" class="form-input" name="email" value="{{ old('email', $user->email) }}" placeholder="jouw@email.nl" required>
              @error('email')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label">Telefoonnummer</label>
              <input type="tel" class="form-input" name="phone_number" value="{{ old('phone_number') }}" placeholder="+31 6 00 00 00 00" required pattern="^\+?[0-9\s\-()]{8,20}$">
              @error('phone_number')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <!-- DATES -->
        <div class="book-step">
          <div class="book-step__label">
            <span class="book-step__num">03</span>
            <span>Datum & gasten</span>
          </div>
          <div class="book-form__grid">
            <div class="form-group">
              <label class="form-label">Aankomst</label>
              <input type="date" class="form-input" name="arrive_date" value="{{ old('arrive_date') }}" required>
              @error('arrive_date')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label">Vertrek</label>
              <input type="date" class="form-input" name="leaving_date" value="{{ old('leaving_date') }}" required>
              @error('leaving_date')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label">Aantal volwassenen</label>
              <select class="form-input form-select" name="number_adults" required>
                <option value="1" {{ old('number_adults', 2) == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('number_adults', 2) == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('number_adults') == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('number_adults') == 4 ? 'selected' : '' }}>4</option>
                <option value="5" {{ old('number_adults') == 5 ? 'selected' : '' }}>5+</option>
              </select>
              @error('number_adults')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
            <div class="form-group">
              <label class="form-label">Aantal kinderen <span style="color:rgba(245,240,232,.3)">(optioneel)</span></label>
              <select class="form-input form-select" name="number_kids" required>
                <option value="0" {{ old('number_kids', 0) == 0 ? 'selected' : '' }}>0</option>
                <option value="1" {{ old('number_kids') == 1 ? 'selected' : '' }}>1</option>
                <option value="2" {{ old('number_kids') == 2 ? 'selected' : '' }}>2</option>
                <option value="3" {{ old('number_kids') == 3 ? 'selected' : '' }}>3</option>
                <option value="4" {{ old('number_kids') == 4 ? 'selected' : '' }}>4+</option>
              </select>
              @error('number_kids')
                <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>

        <!-- EXTRAS -->
        <div class="book-step">
          <div class="book-step__label">
            <span class="book-step__num">04</span>
            <span>Extra's & wensen</span>
          </div>
          <div class="extras-grid">
            @foreach ($extras as $extra)
              <label class="extra-item">
                <input type="checkbox" class="extra-check" name="extras[]" value="{{ $extra->id }}" {{ in_array($extra->id, old('extras', [])) ? 'checked' : '' }}>
                <div class="extra-item__inner">
                  <span class="extra-item__icon">✨</span>
                  <div>
                    <span class="extra-item__name">{{ $extra->name }}</span>
                    <span class="extra-item__price">+€{{ number_format($extra->price / 100, 2, ',', '.') }}</span>
                  </div>
                </div>
              </label>
            @endforeach
          </div>

          <div class="form-group" style="margin-top:1.25rem;">
            <label class="form-label">Speciale wensen</label>
            <textarea class="form-input form-textarea" name="special_wish" rows="3" placeholder="Dieetwensen, speciale gelegenheden, allergieën..." required>{{ old('special_wish') }}</textarea>
            @error('special_wish')
              <p style="color:#f7a6a6;margin-top:.5rem;font-size:.8rem;">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="book-footer">
          <div class="book-footer__info">
            <div class="book-footer__secure">🔒 Veilig betalen · Gratis annuleren tot 7 dagen voor aankomst</div>
          </div>
          <button type="submit" class="contact-submit" style="width:auto;min-width:220px;">
            <span>Aanvraag versturen</span>
            <span>→</span>
          </button>
        </div>
      </form>

      <div class="book-success" id="bookSuccess" style="display: {{ session('booking_success') ? 'block' : 'none' }};">
        <div class="book-success__icon">✓</div>
        <h3 class="sa-heading" style="font-size:1.8rem;color:var(--ivory);margin-bottom:.75rem;">Aanvraag ontvangen!</h3>
        <p style="color:rgba(245,240,232,.55);max-width:400px;margin:0 auto 1rem;line-height:1.7;">Je boekingsaanvraag is verstuurd. Je ontvangt binnen 24 uur een bevestiging per e-mail met alle details.</p>
        @if(session('booking_total'))
          <p style="color:var(--gold);font-weight:700;letter-spacing:.08em;margin-bottom:1.5rem;">Totaal: €{{ number_format(session('booking_total') / 100, 2, ',', '.') }}</p>
        @endif
        <a href="/shop" class="sa-btn sa-btn--gold">Bekijk onze shop</a>
      </div>
    </div>

    <!-- EXISTING BOOKINGS -->
    <div class="my-bookings">
      <div class="my-bookings__header">
        <div>
          <span class="sa-section-tag">Jouw reserveringen</span>
          <h2 class="sa-heading" style="font-size:1.8rem;color:var(--ivory);">Mijn boekingen</h2>
        </div>
      </div>

      <!-- Empty state / Login prompt -->
      <div class="bookings-empty">
        <div class="bookings-empty__icon">🕵️</div>
        <h3 class="sa-heading" style="font-size:1.2rem;color:var(--ivory);margin-bottom:.5rem;">Log in om je boekingen te bekijken</h3>
        <p style="color:rgba(245,240,232,.4);font-size:.85rem;margin-bottom:1.5rem;">Je account geeft toegang tot al je reserveringen, tickets en orderhistorie.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
          <a href="#" class="sa-btn sa-btn--gold">Inloggen</a>
          <a href="#" class="sa-btn sa-btn--outline">Account aanmaken</a>
        </div>
      </div>
    </div>

  </div>
</main>

<footer style="background:#060e09;padding:2rem;text-align:center;border-top:1px solid rgba(201,168,76,.1);">
  <p style="color:rgba(245,240,232,.3);font-size:.75rem;letter-spacing:.1em;">© 2026 Secret Agent Bunker & Resorts · <a href="/about" style="color:var(--gold);text-decoration:none;">Over ons</a> · <a href="/contact" style="color:var(--gold);text-decoration:none;">Contact</a></p>
</footer>

<style>
  /* BOOK HERO */
  .book-hero {
    padding-top: 72px;
    min-height: 45vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    position: relative;
    overflow: hidden;
    padding-bottom: 4rem;
  }

  .book-hero__bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 100% 100% at 60% 0%, #1a3a24 0%, #060e09 65%);
  }

  .book-hero__bg::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(rgba(201,168,76,.04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(201,168,76,.04) 1px, transparent 1px);
    background-size: 50px 50px;
  }

  .book-hero__content {
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

  .book-hero__title {
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    color: var(--ivory);
    margin: .5rem 0 1rem;
    line-height: 1.05;
  }

  .book-hero__title em { color: var(--gold); font-style: italic; }

  .book-hero__sub {
    color: rgba(245,240,232,.5);
    font-size: .95rem;
    max-width: 440px;
    line-height: 1.6;
  }

  .book-hero__tags {
    position: relative;
    z-index: 2;
    padding: 0 2rem;
    max-width: 1200px;
    margin: 2rem auto 0;
    width: 100%;
    display: flex;
    gap: .75rem;
    flex-wrap: wrap;
  }

  .book-tag {
    background: rgba(201,168,76,.08);
    border: 1px solid rgba(201,168,76,.2);
    color: rgba(245,240,232,.65);
    font-size: .65rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    padding: .35rem .9rem;
  }

  /* CONTAINER */
  .container { max-width: 1200px; margin: 0 auto; padding: 0 2rem; }

  /* BOOKING WIDGET */
  .book-widget {
    background: rgba(255,255,255,.02);
    border: 1px solid rgba(201,168,76,.15);
    margin-top: 3rem;
    overflow: hidden;
  }

  .book-widget__header {
    padding: 2rem 2.5rem;
    border-bottom: 1px solid rgba(201,168,76,.1);
    background: rgba(201,168,76,.03);
  }

  /* FORM */
  .book-form { padding: 2.5rem; display: flex; flex-direction: column; gap: 2.5rem; }

  .book-step { }

  .book-step__label {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
    font-size: .65rem;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: rgba(245,240,232,.5);
    font-weight: 600;
  }

  .book-step__num {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--gold);
    min-width: 2rem;
  }

  /* TYPE CARDS */
  .type-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
  }

  .type-card { cursor: pointer; }

  .type-card input { display: none; }

  .type-card__inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 1.5rem 1rem;
    border: 1px solid rgba(201,168,76,.15);
    background: rgba(255,255,255,.02);
    transition: all .25s;
  }

  .type-card input:checked + .type-card__inner {
    border-color: var(--gold);
    background: rgba(201,168,76,.06);
  }

  .type-card:hover .type-card__inner {
    border-color: rgba(201,168,76,.35);
    background: rgba(201,168,76,.04);
  }

  .type-card__icon { font-size: 2rem; margin-bottom: .75rem; }

  .type-card__name {
    font-size: .78rem;
    font-weight: 600;
    color: var(--ivory);
    margin-bottom: .3rem;
  }

  .type-card__desc {
    font-size: .65rem;
    color: rgba(245,240,232,.4);
    line-height: 1.4;
  }

  /* FORM GRID */
  .book-form__grid {
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
  .form-textarea { resize: vertical; min-height: 80px; }

  /* EXTRAS */
  .extras-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: .75rem;
  }

  .extra-item { cursor: pointer; }
  .extra-item input { display: none; }

  .extra-item__inner {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem 1.25rem;
    border: 1px solid rgba(201,168,76,.12);
    background: rgba(255,255,255,.02);
    transition: all .25s;
  }

  .extra-item input:checked + .extra-item__inner {
    border-color: var(--gold);
    background: rgba(201,168,76,.06);
  }

  .extra-item:hover .extra-item__inner { border-color: rgba(201,168,76,.3); }

  .extra-item__icon { font-size: 1.5rem; flex-shrink: 0; }

  .extra-item__name {
    display: block;
    font-size: .82rem;
    font-weight: 500;
    color: var(--ivory);
    margin-bottom: .15rem;
  }

  .extra-item__price {
    display: block;
    font-size: .7rem;
    color: var(--gold);
    font-weight: 600;
    letter-spacing: .05em;
  }

  /* BOOK FOOTER */
  .book-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
    padding-top: 1rem;
    border-top: 1px solid rgba(201,168,76,.1);
    flex-wrap: wrap;
  }

  .book-footer__secure {
    font-size: .72rem;
    color: rgba(245,240,232,.35);
    letter-spacing: .03em;
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
    justify-content: center;
    gap: .75rem;
    transition: all .25s;
    font-family: 'DM Sans', sans-serif;
  }

  .contact-submit:hover {
    background: var(--gold-light);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(201,168,76,.25);
  }

  /* SUCCESS */
  .book-success {
    padding: 5rem 2rem;
    text-align: center;
    animation: fadeIn .5s both;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: scale(.95); }
    to { opacity: 1; transform: scale(1); }
  }

  .book-success__icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: var(--gold);
    color: var(--forest);
    font-size: 1.8rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
  }

  /* MY BOOKINGS */
  .my-bookings {
    margin-top: 3rem;
    border: 1px solid rgba(201,168,76,.1);
    background: rgba(255,255,255,.01);
  }

  .my-bookings__header {
    padding: 2rem 2.5rem;
    border-bottom: 1px solid rgba(201,168,76,.08);
    background: rgba(201,168,76,.02);
  }

  .bookings-empty {
    text-align: center;
    padding: 5rem 2rem;
  }

  .bookings-empty__icon {
    font-size: 3.5rem;
    margin-bottom: 1.5rem;
    opacity: .3;
  }

  @media (max-width: 768px) {
    .type-cards { grid-template-columns: 1fr 1fr; }
    .book-form__grid { grid-template-columns: 1fr; }
    .extras-grid { grid-template-columns: 1fr; }
    .book-footer { flex-direction: column; align-items: stretch; }
    .contact-submit { width: 100%; justify-content: center; }
  }

  @media (max-width: 480px) {
    .type-cards { grid-template-columns: 1fr; }
    .book-form { padding: 1.5rem; }
  }
</style>

</body>
</html>