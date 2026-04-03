<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout — Secret Agent Bunker & Resorts</title>
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        .checkout-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
        }

        .checkout-header {
            margin-bottom: 2rem;
            border-bottom: 2px solid #c9a84c;
            padding-bottom: 1rem;
        }

        .checkout-content {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .checkout-content {
                grid-template-columns: 1fr;
            }
        }

        .payment-form {
            background: rgba(245, 240, 232, .05);
            border: 1px solid rgba(201, 168, 76, .15);
            border-radius: 8px;
            padding: 2rem;
        }

        .form-section {
            margin-bottom: 2rem;
        }

        .form-section h3 {
            color: var(--ivory);
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: rgba(245, 240, 232, .7);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            background: rgba(0, 0, 0, .3);
            border: 1px solid rgba(201, 168, 76, .2);
            border-radius: 4px;
            color: var(--ivory);
            font-size: 1rem;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(201, 168, 76, .1);
        }

        #card-element {
            padding: 0.75rem;
            background: rgba(0, 0, 0, .3);
            border: 1px solid rgba(201, 168, 76, .2);
            border-radius: 4px;
            color: var(--ivory);
        }

        .stripe-error {
            color: #ff6464;
            font-size: 0.85rem;
            margin-top: 0.5rem;
        }

        .order-summary {
            background: rgba(245, 240, 232, .05);
            border: 1px solid rgba(201, 168, 76, .15);
            border-radius: 8px;
            padding: 1.5rem;
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .order-items {
            border-bottom: 1px solid rgba(201, 168, 76, .2);
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
            color: rgba(245, 240, 232, .7);
        }

        .order-item__name {
            flex: 1;
        }

        .order-item__price {
            color: var(--gold);
            font-weight: 700;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
            color: rgba(245, 240, 232, .7);
            font-size: 0.95rem;
        }

        .summary-row--total {
            border-top: 2px solid rgba(201, 168, 76, .2);
            padding-top: 1rem;
            color: var(--ivory);
            font-size: 1.2rem;
            font-weight: 700;
        }

        .summary-row--total span:last-child {
            color: var(--gold);
        }

        .pay-btn {
            width: 100%;
            margin-top: 1.5rem;
            padding: 1rem;
            background: var(--gold);
            color: #000;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .pay-btn:hover:not(:disabled) {
            background: #d4af37;
            transform: translateY(-2px);
        }

        .pay-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none;
        }

        .success-message {
            background: rgba(100, 200, 100, .15);
            border: 1px solid rgba(100, 200, 100, .3);
            color: #90ee90;
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1rem;
        }

        .error-message {
            background: rgba(255, 100, 100, .15);
            border: 1px solid rgba(255, 100, 100, .3);
            color: #ff6464;
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    @include('navbar')

    <main style="background:var(--deep);min-height:100vh;padding:2rem 0;">
        <div class="checkout-container">

            <div class="checkout-header">
                <span class="sa-section-tag">Betalen</span>
                <h1 class="sa-heading" style="font-size:2rem;color:var(--ivory);margin:0.5rem 0 0 0;">Checkout</h1>
            </div>

            <div class="checkout-content">

                <!-- Payment Form -->
                <div class="payment-form">
                    <form id="paymentForm">
                        <div class="form-section">
                            <h3>Persoonlijke gegevens</h3>

                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
                                <div class="form-group">
                                    <label>Voornaam</label>
                                    <input type="text" class="form-input" id="firstName"
                                        value="{{ auth()->user()->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label>E-mailadres</label>
                                    <input type="email" class="form-input" id="email"
                                        value="{{ auth()->user()->email }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3>Betaalmethode</h3>
                            <div class="form-group">
                                <label>Creditcard</label>
                                <div id="card-element"></div>
                                <div id="card-error" class="stripe-error"></div>
                            </div>
                        </div>

                        <button type="submit" class="pay-btn" id="payBtn">
                            Betaal €{{ number_format($amount / 100, 2, ',', '.') }}
                        </button>

                        <div id="processing" style="display:none;color:#90ee90;text-align:center;margin-top:1rem;">
                            ⏳ Betalinggegevens worden verwerkt...
                        </div>
                    </form>
                </div>

                <!-- Order Summary -->
                <div class="order-summary">
                    <div class="order-items">
                        <h3 style="color:var(--ivory);margin:0 0 1rem 0;font-size:1rem;">Bestelling</h3>
                        @foreach ($items as $item)
                            <div class="order-item">
                                <div class="order-item__name">
                                    {{ $item['product']->name }}
                                    <span style="opacity:0.5;">×{{ $item['quantity'] }}</span>
                                </div>
                                <div class="order-item__price">€{{ number_format($item['total'] / 100, 2, ',', '.') }}
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="summary-row">
                        <span>Subtotaal</span>
                        <span>€{{ number_format($amount / 100, 2, ',', '.') }}</span>
                    </div>
                    <div class="summary-row">
                        <span>Verzending</span>
                        <span>Gratis</span>
                    </div>
                    <div class="summary-row--total">
                        <span>Totaal</span>
                        <span>€{{ number_format($amount / 100, 2, ',', '.') }}</span>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <footer style="background:#060e09;padding:2rem;text-align:center;border-top:1px solid rgba(201,168,76,.1);">
        <p style="color:rgba(245,240,232,.3);font-size:.75rem;letter-spacing:.1em;">© 2026 Secret Agent Bunker & Resorts
            · <a href="/about" style="color:var(--gold);text-decoration:none;">Over ons</a> · <a href="/contact"
                style="color:var(--gold);text-decoration:none;">Contact</a></p>
    </footer>

    <script>
        const stripe = Stripe('{{ $publishableKey }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        // Handle card errors
        cardElement.addEventListener('change', function(event) {
            const displayError = document.getElementById('card-error');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission
        document.getElementById('paymentForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const payBtn = document.getElementById('payBtn');
            const processing = document.getElementById('processing');

            payBtn.disabled = true;
            processing.style.display = 'block';

            try {
                // Confirm payment
                const {
                    error,
                    paymentIntent
                } = await stripe.confirmCardPayment('{{ $clientSecret }}', {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: document.getElementById('firstName').value,
                            email: document.getElementById('email').value,
                        },
                    },
                });

                if (error) {
                    document.getElementById('card-error').textContent = error.message;
                    payBtn.disabled = false;
                    processing.style.display = 'none';
                    return;
                }

                if (paymentIntent.status === 'succeeded') {
                    // Process payment via our backend
                    const response = await fetch('/process-payment', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            paymentIntentId: paymentIntent.id,
                        }),
                    });

                    const result = await response.json();

                    if (result.success) {
                        // Redirect to success page
                        window.location.href = '/shop?success=1';
                    } else {
                        document.getElementById('card-error').textContent = result.error ||
                            'Betaling kon niet worden verwerkt';
                        payBtn.disabled = false;
                        processing.style.display = 'none';
                    }
                }
            } catch (err) {
                document.getElementById('card-error').textContent = err.message;
                payBtn.disabled = false;
                processing.style.display = 'none';
            }
        });
    </script>

</body>

</html>
