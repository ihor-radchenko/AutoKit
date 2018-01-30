
<h2 class="text-center color-black">
    Новинки
</h2>

<div class="container">
    <div class="row">
        @isset($new_products)
            @foreach($new_products as $product)
                @if($product->is_new === 1)
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail product-show">
                            <div class="img-wrapper">
                                <img src="{{ asset($product->img) }}" alt="">
                            </div>
                            <span class="new">New</span>
                            <div class="caption">
                                @if(! is_null($product->old_price))
                                    <span class="new-price">${{ $product->price }}</span>
                                    <span class="old-price">${{ $product->old_price }}</span>
                                @else
                                    <span class="price">${{ $product->price }}</span>
                                @endif
                                <a href="{{ route('product', ['product' => $product->id]) }}" class="title">{{ $product->title }}</a>
                                <button class="my-btn btn-black">
                                    <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i> Добавить в корзину
                                </button>
                                <div class="rating">
                                    <div class="stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            <span class="glyphicon glyphicon-star{{ ($i <= round($product->reviews->avg('rating'), 1)) ? '' : '-empty'}}"></span>
                                        @endfor
                                    </div>
                                    <div class="avg-rating">{{ round($product->reviews->avg('rating'), 1) }}</div>
                                    <div class="count">
                                        {{ $product->reviews->count() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endisset
    </div>
</div>