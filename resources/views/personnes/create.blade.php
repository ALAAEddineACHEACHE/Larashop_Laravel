@extends('layouts.app')
@section('content')
    <section>
        <div class="row">
            <div class="col-md-6 offset-lg-3">

                <form class="contact-form" method="POST" enctype="multipart/form-data"
                    action="{{ route('personnes.store') }}">
                    @csrf
                    <h4>Ajouter une personne</h4>
                    <div class="form-group">
                        <div class="form-input-group">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text"
                                placeholder="Entrer votre nom">
                            @error('name')

                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                            <i class="icofont-user"></i>
                        </div>
                        <div class="form-input-group mt-3">
                            <input class="form-control @error('age') is-invalid @enderror" name="age" type="number"
                                placeholder="Entrer votre age">
                            @error('age')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-input-group mt-3">
                            <input type="text" name="filiere" id="" placeholder="Entrer le nom de la filiere"
                                class="form-control">
                            @error('filiere')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-input-group mt-3">
                            <input type="file" name="image" accept="image/x-png,image/jpg,image/jpeg,image/gif" id=""
                                class="form-control">
                            @error('image')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
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
