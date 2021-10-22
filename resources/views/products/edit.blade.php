@extends('layouts.app')
@section('content')
    <section>
        <div class="row">
            <div class="col-md-6 offset-lg-3">

                <form class="contact-form" method="POST" action="{{ route('product.update', $product->id) }}">
                    @csrf
                    @method('PUT')
                    <h4>Modifier le produit</h4>
                    <div class="form-group">
                        <div class="form-input-group">
                            <input class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}"
                                name="name" type="text" placeholder="Entrer le nouveau nom du produit">
                            @error('name')

                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            <i class="icofont-user"></i>
                        </div>
                        <div class="form-input-group">
                            <input class="form-control @error('description') is-invalid @enderror"
                                value="{{ $product->description }}" name="description" type="text"
                                placeholder="Entrer la nouvelle description du produit">
                            @error('description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            <i class="icofont-user"></i>
                        </div>


                    </div>
                    <button type="submit" class="form-btn-group">
                        <i class="icofont-ui-message"></i>
                        <span>Sauvegarder</span>

                    </button>

                </form>


            </div>

        </div>

    </section>

@endsection
