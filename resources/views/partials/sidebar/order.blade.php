
<table class="table">
    <tr>
        <td>@lang('cart.total_price')</td>
        <td>${{ $cart->totalPrice() }}</td>
    </tr>
    <tr>
        <td>@lang('cart.shipping')</td>
        <td>$<span id="priceDelivery">0</span></td>
    </tr>
    <tr class="alert-success">
        <td>@lang('cart.full_price')</td>
        <td>${{ $cart->totalPrice() }}</td>
    </tr>
</table>