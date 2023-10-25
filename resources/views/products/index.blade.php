@extends('layout')

@section('content')
    <div class="text-center">
        <h1>Liste des produits</h1>
    </div>

    <table class="table table-striped mx-auto">
        <thead>
            <tr>
                <th>Image</th>
                <th>Marque</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->image }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
