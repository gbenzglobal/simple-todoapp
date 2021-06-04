@extends('layouts.app')

@section('title')
{{$todo->name}}
@endsection

@section('content')

        <div class="row justify-content-center">
            <h2 class="text-center my-2">{{$todo->name}}</h2>
            <div class="card col-md-6 p-0">
                <div class="card-header">
                    Details
                </div>
                                      
                <div class="card-body">
                    <div class="car-description list-group-item">
                        {{ $todo->description }}
                    </div>
                    <a href="/todos/{{$todo->id}}/edit" class="btn btn-warning my-2">Edit</a>
                    <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger my-2">Delete</a>                  
                </div>
            </div>            
        </div>

    
@endsection