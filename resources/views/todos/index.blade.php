@extends('layouts.app')

@section('title')
All Todos
@endsection

@section('content')
    
        <div class="row justify-content-center">
            <div class="card col-md-6">
                <h2 class="text-center my-2">Todos</h2>

                    <div class="card-body">
                        <ul class="list-group">                  
                            @foreach ($todos as $todo )                  
                            <li class="list-group-item">  
                                <div class="card-title">                                    
                                                                          

                                        @if ($todo->completed)
                                            <span class="text-decoration-line-through">
                                                {{ $todo->name }}
                                            </span>
                                        @else
                                            {{ $todo->name }}
                                        @endif
                                                                                                                                 
                                       
                                        @if (!$todo->completed)
                                            <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-end">Complete</a>
                                                                                 
                                        @elseif($todo->completed)
                                            <a href="/todos/{{$todo->id}}/not-complete" class="btn btn-secondary btn-sm float-end">undo?</a>
                                        @endif
                                       
                                       <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-end mx-2">View</a>                           
                                       
                                       
                                                                          
                                </div>   
                            </li>                     
                            @endforeach
                        </ul>
                    </div>
            </div>
        </div>

@endsection