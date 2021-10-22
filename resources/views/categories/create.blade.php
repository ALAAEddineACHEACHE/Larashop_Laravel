@extends('layouts.app')
@section('content')
    <section>
        <div class="row">
            <div class="col-md-6 offset-lg-3">

                <form class="contact-form" method="POST" action="{{ route('save-category') }}">
                    @csrf
                    <h4>Ajouter une catégorie</h4>
                    <div class="form-group">
                        <div class="form-input-group">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                                placeholder="Entrer le nom de la catégorie">
                            @error('name')

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
