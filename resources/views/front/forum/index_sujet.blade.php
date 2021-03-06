@extends('layouts.templateFront')


@section('content')
<div class="wrapper">
    <div class="page-header page-header-small">
        <center>
            <img src="{{url('front/images/politician-giving-his-speech-to-public.svg')}}"></img>
        </center>
        <div class="content-center">
            <div class="container">
                <h1 style="font-size: 5.2em;">{{$categorie->nom}}</h1>
                <br>
                <div class="text-center" style="font-size: 1.2em;">
                    {{ __('Bienvenue sur cette catégorie ! N\'hésite pas à ajouter un sujet.') }}
                </div>
            </div>
            <div>
                <a href="{{url()->previous()}}" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Retour</a>
            </div>
        </div>

    </div>

</div>
<div class="cd-section" id="features">
    @if($categorie->sujets->count() != 0)
    <div class="text-center" style="margin : 20px">
        <a href="{{route('sujet.create')}}">
            <button type="submit" class="btn btn-primary btn-round btn-lg">
                Ajouter un sujet
            </button>
        </a>
    </div>
    @endif

    <div class="blogs-3">
    @if($categorie->sujets->count() == 0)
            <div class="alert alert-danger text-center role="alert">
                <div class="container">
                   
                    <strong>Oh!</strong> Il n'existe aucun sujet dans cette catégorie.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div class="text-center" style="margin : 20px">
                <a href="{{route('sujet.create')}}">
                    <button type="submit" class="btn btn-primary btn-round btn-lg">
                        Ajouter un sujet
                    </button>
                </a>
            </div>            @else

        <div class="container">
          
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">

                    @if($categorie->sujets->count() == 0)
                    <div class="text-center" style="margin : 20px">
                        <a href="{{route('sujet.create')}}">
                            <button type="submit" class="btn btn-primary btn-round btn-lg">
                                Ajouter un sujet
                            </button>
                        </a>
                    </div>
                    @endif
                    <div class="row">
                        <div class="container">
                            <div id="offers">
                                <h1 class="nb-offer">
                                    Liste des sujets
                                </h1>
                                <div class="offers-container tab">
                                    @foreach($categorie->sujets as $sujet)
                                    <a href="{{ route('sujet.show', $sujet) }}" class="card">
                                        <div class="card-header">
                                            <div class="card-info">
                                                <h2><b>{{$sujet->titre}}</b></h2>
                                            </div>
                                            <div class="localisation">
                                            </div>
                                            <p class="time">Mise en ligne le {{ \Carbon\Carbon::parse($sujet->created_at)->format('d/m/Y')}} </p>
                                            <div class="card-tags">
                                                <ul>
                                                    @if($sujet->type == 'Question' && $sujet->resolue == 0)
                                                    <div class="badge badge-danger">{{ $sujet->type }} (Non résolue)</div>
                                                    @elseif($sujet->type == 'Question'&& $sujet->resolue == 1)
                                                    <div class="badge badge-success">{{ $sujet->type }} (Résolue)</div>
                                                    @elseif($sujet->type == 'Discussion')
                                                    <div class="badge badge-info">{{ $sujet->type }}</div>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>{!! Str::words($sujet->description, 250, $end='...') !!}</p>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-space"></div>
@endsection