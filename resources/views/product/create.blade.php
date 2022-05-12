@extends('layout.app');
@section('conect')
    
            <div class="card-body">
                <form method="POST" action="/Product/create">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name:{{$Product->name}}</label>
                        <input type="text" class="form-control" name="Name" />
                    </div>
                    <div class="form-group">
                        <label for="price">Product Price : {{$Product->price}}</label>
                        <input type="text" class="form-control" name="Price" />
                    </div>
                    <div class="form-group">
                        <label for="quantity">Product Quantity: {{$Product->quantity}}</label>
                        <input type="text" class="form-control" name="Quantity" />
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js" type="text/js"></script>
</body>

</html>
@endsection