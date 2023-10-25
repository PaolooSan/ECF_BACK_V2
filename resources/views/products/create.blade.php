@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input id="image" type="text" name="image" value="{{ old('image') }}">
                    </div>

                    <div class="form-group">
                        <label for="brand">Marque du produit</label>
                        <input id="brand" type="text" name="brand" value="{{ old('brand')}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Nom du produit</label>
                        <input id="name" type="text" name="name" value="{{ old('name')}}">
                    </div>

                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input id="price" type="number" step="0.01" name="price" value="{{ old('price')}}">
                    </div>

                    <button class="btn btn-primary" type="submit">Créer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
