@extends('user.general')
@section('cabinet')
    <div class="middle" id="middlesection">
        <div class="container">
            <h1 class="pagetitle" style="margin-top: 20px"> Личный кабинет </h1>
            <div class="row">
                @include('user.personal_cabinet.sidebar')
                @yield('favorites')
                @yield('basket')
                @yield('order')
                @yield('feedback')
                @yield('account_settings')
            </div>
        </div>
    </div>
    <div class="footer-push"></div>
@endsection
@section('script')
    <script>
        const productCards = document.querySelectorAll('.element-content');
        productCards.forEach(card => {
            const itemId = card.dataset.itemId;
            const radioButtons = card.querySelectorAll(`input[name="item_id_${itemId}"]`);
            const selectedItemPrice = card.querySelector(`#selected-item-price-${itemId}`);

            radioButtons.forEach(radioButton => {
                radioButton.addEventListener('change', () => {
                    if (radioButton.checked) {
                        selectedItemPrice.textContent = radioButton.dataset.price;
                    }
                });
            });
        });
    </script>
@endsection
