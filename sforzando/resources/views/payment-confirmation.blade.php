<div class="paymentConfirmation">
  <h1>Payment Confirmation</h1>
  <p>Thank you, {{ $name }}!</p>
  <p>Your email address: {{ $email }}</p>
  <p>Your address: {{ $address }}</p>

  @if (isset($cart) && !empty($cart))
    <h2>Your Cart Items</h2>
    <ul>
      @foreach ($cart as $item)
        <li>{{ $item['name'] }} - {{ $item['price'] }}€</li>
      @endforeach
    </ul>
  @endif

  <h2>Transportation</h2>
  <p>{{ $transportation }}</p>  <h2>Payment Method</h2>
  <p>{{ $payment }}</p>        </div>