@extends('layouts.app')
@section('content')
    <section>
        <div class="row">
            <div class="col-md-6 offset-lg-3">

                <form class="contact-form" method="POST" action="{{ route('edit-personne', $personne->id) }}">
                    @csrf
                    @method('PUT')
                    <h4>Modifier la personne</h4>
                    <div class="form-group">
                        <div class="form-input-group">
                            <input class="form-control @error('name') is-invalid @enderror" value="{{ $personne->name }}"
                                name="name" type="text" placeholder="Entrer le nom de la personne">
                            @error('name')

                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            <i class="icofont-user"></i>
                        </div>
                        <div class="form-input-group">
                            <input class="form-control @error('age') is-invalid @enderror" value="{{ $personne->age }}"
                                name="age" type="text" placeholder="Retapez votre âge">
                            @error('age')

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
