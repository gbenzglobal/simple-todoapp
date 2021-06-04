@extends('layouts.app')

@section('title')
Create Todos
@endsection

@section('content')

        <div class="row justify-content-center">
            <h2 class="text-center my-2">Create Todos</h2>
            
                <div class="card col-md-6 p-0">
                    <div class="card-header">
                        Create new todos
                    </div>
                    <form action="/store-todos" method="POST" class="form-group">
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
                                <input type="text" class="form-control" placeholder="Name" name="name">                        
                            </div>
                            <div class="input-group mb-3">
                                <textarea class="form-control" name="description" placeholder="Description"></textarea>                        
                            </div>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
                     
        </div>

@endsection