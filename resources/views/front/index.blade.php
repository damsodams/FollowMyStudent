@extends('layouts.templateFront')

@section('content')
    <div class="section" id="carousel">
        <div class="container">
            <div class="title text-center h1-seo">
                <h4>Bienvenue !</h4>
            </div>
            @if (Auth::user()->email_verified_at == null)
                <div class="alert alert-warning" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="now-ui-icons travel_info"></i>
                        </div>
                        Tu dois valider ton email pour accéder à toutes les fonctionnalités.
                        <a href="{{ route('front.users.edit', Auth::user()->id) }}">Accéder</a>
                    </div>
                </div>
            @endif
        </div>
        <div class="container">

            @foreach($post as $p)
                @if(isset($p->lien))
                    <a href="{{$p->lien}}" class="card">
                        @else
                            <div class="card">
                                @endif
                                <h1 class="card-title">{{$p->titre}}</h1>
                                <div class="card-body">
                                    @if(isset($p->image))
                                        <img class="card-img-top" src="{{$p->image}}" alt="Card image cap">
                                    @endif
                                    @if(isset($p->description))
                                        <p class="card-text">{{$p->description}}</p>
                                    @endif
                                </div>
                            @if(isset($p->lien))
                    </a>
                @else
        </div>
        @endif
        @endforeach

    </div>
    </div>
@endsection
