@extends('layout')

@section('title', 'Crea una nota')

@section('content')
    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Nueva nota</h1>

                    <x-error /> 
                    
                    <x-form method="post" :action="url('notas')">   

                        <x-field type="text" name="title"  />
                        <x-textarea name="content" rows="5" />
                        <button type="submit" class="btn btn-primary">Crear nota</button>
                    
                    </x-form>

                </div>
            </div>
        </div>
    </main>
@endsection