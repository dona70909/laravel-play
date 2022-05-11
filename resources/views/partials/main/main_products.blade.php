
<section class="container-fluid">
    <div class="row p-4 flex-wrap my-product-card-container">
        @foreach ($products as $product) 
            <div class="card col-3 my-product-card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$product->getNameProduct()}}</h5>
                    <p class="card-text">{{$product->getNameProduct()}}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>