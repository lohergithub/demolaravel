@extends('layouts.app')

@section('title')
    Page de Modification
@endsection

@section('content')
<br><br><br><br>
<section>
    <div class="container">
        <div class="row about-content">
            <div class="col-lg-4 col-md-2">
                <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                    <img style="order: 8px solid #fff;transition: 0.5s;"src="{{asset('commons/img/about-img.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-7">
                <h2 style="font-color:#413e66;font-family:Montserrat, sans-serif;font-weight: 700;">Edition</h2>
                <div class="card border-dark mb-3" style="max-width: 50rem;">
                    <div class="card-header">
                    <h5>Modification de l'Etudiant</h5>
                    <a href="{{Route('users.index')}}" class="btn btn-primary btn-sm" style="float:right; margin-right:10px;">Liste des Etudiants</a>
                    </div>
                    <div class="card-body text-dark">
                        <h5 class="card-title"></h5>
                        <div class="card-text">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success')}}
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error')}}
                                </div>
                            @endif
                            <form action="{{Route('users.update', $student->id)}}" method ="POST" class="">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nom:</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" value="{{$student->firstname}}" placeholder="Entrez votre nom">
                                    @error('firstname')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div><br>

                                <div class="form-group">
                                    <label for="">Prénoms:</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" value="{{$student->lastname}}" placeholder="Entrez votre prénom">
                                    @error('lastname')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div><br>

                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="text" class="form-control" name="email" id="email" value="{{$student->email}}" placeholder="Entrez votre email">
                                    @error('email')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div><br>

                                <div class="form-group">
                                    <label for="">Phone:</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{$student->phone}}" placeholder="Entrez votre Numéro">
                                    @error('phone')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div><br>

                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
@endsection