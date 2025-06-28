<section class="minicart">
    <dic class="minicart__inner">
        <div class="minicart_wrapper">
            <div class="mimicart__close__icon">
                <div class="minicart__cart__text">
                    <strong>Cart</strong>
                </div>
                <button class="minicart__close__btn">
                    <i class="fa fa-close"></i>
                </button>
            </div>

            <div class="minicart__single__wraper">
                @forelse ($cartItems as $item)
                <div class="minicart__single">
                    <div class="minicart__single__img">
                        <a href="{{ route('product.show', $item->product->slug) }}">
                            <img src="{{ Storage::url($item->product->image)}}" alt="{{ $item->product->name }}">
                        </a>
                        <div class="minicart__single__close">
                            <form action="{{ route('cart.remove', $item->id)}}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button title="Remove"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="minicart__single__content">
                        <h4><a href="#">{{ $item->product->name}}</a></h4>
                        <span>{{ $item->qty }} x 
                            <span class="monay">RP {{ number_format($item->product->price, 0, ',') }}</span>
                        </span>
                    </div>
                </div>
                @empty
                <p class="text-center p-3">Keranjang kosong</p>
                @endforelse
            </div>

            @php 
            $total = $cartItems->sum(fn($item) => $item->qty * $item->product->price);
            @endphp
        
            <div class="minicart_footer">
                <div class="minicart__subtotal">
                    <span class="subtotal_title">Subtotal:</span>
                    <span class="subtotal__amount">Rp {{ number_format($total, 0, ',', '.')}}</span>
                </div>
                <div class="minicart__button">
                    <a href="{{ route('cart.index')}}" class="default__button">View Cart</a>
                    <a href="{{ route('cart.checkout')}}" class="default__button">checkout</a>
                </div>
                <div class="cart__note__text">
                    <p>Free Shipping on ALL Orders Over Rp 1.500.000!</p>
                </div>
            </div>
        </div>
    </dic>
</section>