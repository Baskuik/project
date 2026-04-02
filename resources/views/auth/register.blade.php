<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registreren — Secret Agent Bunker & Resorts</title>
  <link href="/css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400&family=DM+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body style="margin:0;background:var(--deep);color:var(--ivory);font-family:'DM Sans',sans-serif;">

@include('navbar')

<main style="min-height:100vh;display:flex;align-items:center;justify-content:center;padding:8rem 1.5rem 4rem;">
  <div style="width:100%;max-width:520px;background:rgba(255,255,255,.03);border:1px solid rgba(201,168,76,.15);padding:2rem;">
    <span class="sa-section-tag">Nieuwe gebruiker</span>
    <h1 class="sa-heading" style="font-size:2rem;margin-bottom:1rem;">Account aanmaken</h1>
    <p style="color:rgba(245,240,232,.55);margin-bottom:1.5rem;line-height:1.6;">Maak een account aan om boekingen te kunnen plaatsen.</p>

    <form method="POST" action="{{ url('/register') }}" style="display:flex;flex-direction:column;gap:1rem;">
      @csrf
      <div class="form-group">
        <label class="form-label">Naam</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-input" required>
        @error('name')<p style="color:#f7a6a6;font-size:.8rem;margin-top:.35rem;">{{ $message }}</p>@enderror
      </div>
      <div class="form-group">
        <label class="form-label">E-mailadres</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-input" required>
        @error('email')<p style="color:#f7a6a6;font-size:.8rem;margin-top:.35rem;">{{ $message }}</p>@enderror
      </div>
      <div class="form-group">
        <label class="form-label">Wachtwoord</label>
        <input type="password" name="password" class="form-input" required>
        @error('password')<p style="color:#f7a6a6;font-size:.8rem;margin-top:.35rem;">{{ $message }}</p>@enderror
      </div>
      <div class="form-group">
        <label class="form-label">Herhaal wachtwoord</label>
        <input type="password" name="password_confirmation" class="form-input" required>
      </div>
      <button type="submit" class="contact-submit">Registreren</button>
    </form>

    <p style="margin-top:1.5rem;color:rgba(245,240,232,.55);font-size:.9rem;">
      Al een account? <a href="{{ url('/login') }}" style="color:var(--gold);text-decoration:none;">Inloggen</a>
    </p>
  </div>
</main>

</body>
</html>
