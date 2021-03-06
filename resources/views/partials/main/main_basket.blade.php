<section class="container-fluid">
    <div class="row p-2">
        <div class="col-12">
            <h1>Welcome {{$customer->getUser_name()}} {{$customer->getUser_lastname()}}, </h1>
            <h2>Your Order</h2>
            <div class="order-wrapper d-flex p-4">
                <div class="card col-2 my-product-card mb-2  me-5">
                    <div class="d-flex justify-content-center py-2">
                        <img class="card-img-top img-fluid w-50" src="{{$product->getImgProd()}}" alt="{{$product->getNameProduct()}}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase">{{$product->getNameProduct()}}</h5>
                        <p class="card-text m-0 p-0">Category: {{$product->getNameCategory()}}</p>
                        <p class="card-text m-0 p-0 my-description">{{$product->getDescription()}}</p>
                        <p class="card-text m-0 p-0 my-description">Price: {{$product->getPrice()}}£ with discount</p>
                    </div>
                </div>
    
                <div class="box-detail-order">
                    <p class="text-uppercase">{{$order}}</p>
                    <p>Discount: {{$customer->getDiscount()}}%</p>
                    <p>Balance: {{$customer->getBalance()}}</p>
                    <p class="card-text m-0 p-0 my-description">Price: {{$product->getPrice()}}£ with discount</p>
                </div>
            </div>
        </div>
    </div>
</section>