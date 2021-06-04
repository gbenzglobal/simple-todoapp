@extends('layouts.app')

@section('title')
Edit Todos
@endsection

@section('content')

        <div class="row justify-content-center">
            <h2 class="text-center my-2">Edit Todos</h2>
            
                <div class="card col-md-6 p-0">
                    <div class="card-header">
                        Edit todos
                    </div>
                    <form action="/todos/{{$todo->id}}/update-todos" method="POST" class="form-group">
                        @csrf                    
                        <div class="card-body">    

                            @if($errors->any())
                            
                               @foreach ( $errors->all() as $error )
                               <div class="alert alert-danger" role="alert">
                                 {{ $error }}
                              </div>
                               @endforeach
                            
                            @endif    

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$todo->name}}">                        
                            </div>
                            <div class="input-group mb-3">
                                <textarea class="form-control" name="description" placeholder="Description">{{$todo->description}}</textarea>                        
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
                     
        </div>

@endsection