
<section class="container-fluid">
    <div class="row p-4 flex-wrap my-product-card-container">
        @foreach ($products as $product) 
            <div class="card col-2 my-product-card">
                <div class="d-flex justify-content-center py-2">
                    <img class="card-img-top img-fluid w-50" src="{{$product->getImgProd()}}" alt="{{$product->getNameProduct()}}">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center text-uppercase">{{$product->getNameProduct()}}</h5>
                    <p class="card-text m-0 p-0">{{$product->getDescription()}}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>