@extends('layouts.templateFront')

@section('content')
<div class="section">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body ">
                            <form method="post" action="{{ route('forum.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8">
                                {{ csrf_field() }}
                                {{ method_field('post') }}
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <a href="{{ route('index') }}" class="btn btn-sm btn-secondary "><i class="fas fa-arrow-left"></i> Retour</a>
                                    </div>
                                </div>
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                                <br>
                                <!-- titre -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Titre') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control{{ $errors->has('titre') ? ' is-invalid' : '' }}" placeholder="Titre" name="titre" id="titre" type="text" value="{{ old('titre') }}" required="true" aria-required="true" />
                                            @if ($errors->has('titre'))
                                            <span id="titre-name" class="error text-danger" for="titre">{{ $errors->first('titre') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin -->
                                <!-- username -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description du sujet') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <textarea name="description" class="form-control" value="{{ old('description') }}" placeholder="Saisir la description du sujet..." name="description" id="description" type="text" value="{{ old('description') }}" required="true" aria-required="true"></textarea>
                                            @if ($errors->has('description'))
                                            <span id="description-error" class="error text-danger" for="description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div><br>
                                <!-- Fin -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('categorie') ? ' has-danger' : '' }}">
                                            <select name="categorie" id="categorie->id" class="selectpicker form-control edit" data-live-search="true" style="width:100%" required="true" aria-required="true">
                                                <option value="" selected>Sélectionner une catégorie</option>
                                                @foreach($categorie as $categorie)
                                                <option value="{{$categorie->id}}"> {{$categorie->section_id}} - {{$categorie->nom}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- Fin -->
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">

                                            <select name="type" id="type" class="selectpicker form-control edit" data-live-search="true" style="width:100%" required="true" aria-required="true">
                                                <option value="" selected>Sélectionner le type</option>
                                                <option value="Discusion">Discusion</option>
                                                <option value="Question">Question</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- username -->
                                <div class="card-footer ml-auto mr-auto text-center )">
                                    <button type="submit" class="btn btn-info">Ajouter</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection