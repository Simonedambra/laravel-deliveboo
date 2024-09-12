@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded">
                    <div class="card-header bg-success text-white text-center">
                        <h1 class="mb-0">{{ __('Crea il tuo piatto') }}</h1>
                    </div>

                    @include('shared.errors')

                    <form action="{{ route('admin.plates.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="mb-3">
                                <label for="name" class="form-label">Nome del piatto</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" required />
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ old('description') }}" />
                            </div>

                            <div class="mb-3">
                                <label for="ingredients" class="form-label">Ingredienti</label>
                                <input type="text" class="form-control" id="ingredients" name="ingredients"
                                    value="{{ old('ingredients') }}" />
                            </div>

                            <div class="mb-4">
                                <label for="price" class="form-label">Prezzo del piatto</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    value="{{ old('price') }}" required />
                            </div>

                            <div class="d-flex gap-4 mb-3 flex-wrap">
                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="is_vegetarian" id="is_vegetarian"
                                        value="1" {{ old('is_vegetarian') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_vegetarian">Vegetariano</label>
                                </div>

                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="is_vegan" value="1"
                                        {{ old('is_vegan') ? 'checked' : '' }} id="is_vegan">
                                    <label class="form-check-label" for="is_vegan">Vegano</label>
                                </div>

                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="is_gluten_free" value="1"
                                        {{ old('is_gluten_free') ? 'checked' : '' }} id="is_gluten_free">
                                    <label class="form-check-label" for="is_gluten_free">Senza Glutine</label>
                                </div>

                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="is_lactose_free" value="1"
                                        {{ old('is_lactose_free') ? 'checked' : '' }} id="is_lactose_free">
                                    <label class="form-check-label" for="is_lactose_free">Senza Lattosio</label>
                                </div>

                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="is_spicy" value="1"
                                        {{ old('is_spicy') ? 'checked' : '' }} id="is_spicy">
                                    <label class="form-check-label" for="is_spicy">Piccante</label>
                                </div>

                                <div class="mb-3 form-check">
                                    <input class="form-check-input" type="checkbox" name="is_visible" value="1"
                                        {{ old('is_visible') ? 'checked' : '' }} id="is_visible">
                                    <label class="form-check-label" for="is_visible">Visibile</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="cover_image" class="form-label">Immagine del Piatto</label>
                                <input class="form-control" type="file" id="cover_image" name="cover_image"
                                    value="{{ old('image_path') }}">

                            </div>
                        </div>

                </div>

                <div class="card-footer bg-light text-end">
                    <button class="btn btn-success" type="submit">
                        Crea
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
