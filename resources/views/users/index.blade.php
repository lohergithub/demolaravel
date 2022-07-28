@extends('layouts.app')

@section('title')
Liste des Etudiants
@endsection


@section('content')
<br><br><br><br>

<section>
    <div class="container">
        <div class="row about-content">
            <div class="col-md-12">
                <h2 style="font-color:#413e66;font-family:Montserrat, sans-serif;font-weight: 700;">Etudiants</h2>
                <div class="card border-dark mb-3" style="max-width: 80rem;">
                    <div class="card-header">
                        <h5>Liste des Etudiants</h5>
                        <a href="{{Route('users.create')}}" class="btn btn-primary btn-sm" style="float:right; margin-right:10px;">Inscrire un Etudiant</a>
                    </div>
                    <div class="card-body text-dark">
                        <h5 class="card-title"></h5>
                        <div class="card-text">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Prénoms</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $key => $student)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{$student->firstname}}</td>
                                        <td>{{$student->lastname}}</td> 
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>
                                        <a href="{{ Route('users.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{ Route('users.destroy', $student->id )}}"  class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection