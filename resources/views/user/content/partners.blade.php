<section class="brands-section">
    <div class="push20"></div>
    <div class="container">
        <div class="brands-carousel">
            @foreach($partners as $partner)
                <div class="item">
                    <div class="logotype text-center relative text-center">
                        <div class="inner">
                            <div class="table">
                                <div class="table-cell">
                                    <img src="{{asset('/storage/' . $partner['image'])}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="push10"></div>
</section>
