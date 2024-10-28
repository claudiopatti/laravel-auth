@extends('layouts.app')

@section('page-title', 'Crea Progetto')

@section('main-content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Crea Progetto
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.projects.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required minlength="3" maxlength="128" placeholder="Inserisci il nome del progetto....">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3" required minlength="3"  maxlength="4096" ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="delivery_time" class="form-label">Tempo per il progetto in giorni</label>
                            <input type="number" class="form-control" id="delivery_time" name="delivery_time" value="0" min='0' max='2000'  >
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Costo Del Progetto</label>
                            <input type="number" class="form-control" id="price" name="price" min="0" step="0.01">
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="complete" name="complete">
                            <label class="form-check-label" for="complete">
                                Completato<span class="text-danger">*</span>
                            </label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success w-75 text-center">
                                Crea
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection