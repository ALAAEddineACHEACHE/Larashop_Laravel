@extends('layouts.app')
@section('content')
    <section class="contact-part">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-lg-2 bg-red shadow rounded">
                    <div class="py-3 m-1">
                        <h4>Liste des catégories</h4>
                        <a href="{{ route('add-category') }}" class="btn-sm btn-primary float-right">Ajouter une
                            catégorie</a>
                        </h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom de la catégorie</th>
                                    <th scope="col">Date de création</th>
                                    <th scope="col">Date de mise à jour</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                        <td>{{ $category->updated_at->diffForHumans() }}</td>
                                        <td>

                                            <a href="{{ route('edit-category', encrypt($category->id)) }}"
                                                class="btn-sm btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                                <i class="bi bi-pencil-square"></i></a>
                                            <button type="button" class="btn-sm btn-danger" data-toggle="modal"
                                                data-target="#deleteModal{{ $category->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash2" viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 3a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2zM3.215 4.207l1.493 8.957a1 1 0 0 0 .986.836h4.612a1 1 0 0 0 .986-.836l1.493-8.957C11.69 4.689 9.954 5 8 5c-1.954 0-3.69-.311-4.785-.793z" />
                                                </svg>


                                            </button>
                                            {{-- Modal for delete --}}
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-white">
                                                        <div class="modal-header bg-danger text-right">
                                                            <h5 class="modal-title text-white" id="exampleModalLabel">Delete
                                                                this item {{ $category->name }}</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('deleteCategory', $category->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-body">
                                                                Do you truly want to delete the category
                                                                {{ $category->name }}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn-sm btn-secondary"
                                                                    data-dismiss="modal">Fermer</button>
                                                                <button type="submit" class="btn-sm btn-danger">Delete

                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>

                                    </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
@endsection
