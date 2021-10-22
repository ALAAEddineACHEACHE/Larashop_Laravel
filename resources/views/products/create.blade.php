@extends('layouts.app')
@section('content')
    <section>
        <div class="row">
            <div class="col-md-6 offset-lg-3">

                <form class="contact-form" method="POST" enctype="multipart/form-data"
                    action="{{ route('product.store') }}">
                    @csrf
                    <h4>Ajouter un produit</h4>


                    <div class="form-group">

                        <div class="form-input-group">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                                placeholder="Entrer le nom du produit">
                            @error('name')

                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror

                        </div>

                        <div class="form-input-group mt-3">
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-input-group mt-3">
                            <input type="file" name="image" accept="image/x-png,image/jpg,image/jpeg,image/gif" id=""
                                class="form-control">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-input-group mt-3">
                            <input type="number" name="quantity" placeholder="Entrer la quantité" class="form-control"
                                id="">
                            @error('quantity')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-input-group mt-3">
                            <input type="number" name="price" id="" min="0" placeholder="Entrer le prix du produit"
                                step="0.01" class="form-control">
                            @error('price')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-input-group mt-3">
                            <textarea placeholder="Décrivez le produit" name="description" class="form-control" id=""
                                cols="30" rows="10"></textarea>
                            @error('description')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
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
