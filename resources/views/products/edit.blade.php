@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('products.update', ['id' => $product->id]) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" type="text" name="image" value="{{ $product->image }}">
                    </div>

                    <div class="form-group">
                        <label for="brand">Marque du produit</label>
                        <input id="brand" type="text" name="brand" value="{{ $product->brand }}">
                    </div>

                    <div class="form-group">
                        <label for="name">Nom du produit</label>
                        <input id="name" type="text" name="name" value="{{ $product->name }}">
                    </div>

                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input id="price" type="number" step="0.01" name="price" value="{{ $product->price }}">
                    </div>

                    <button class="btn btn-primary" type="submit">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
@endsection
