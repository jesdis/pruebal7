@extends('layout')

@section('title', 'Editar una nota')

@section('content')
    <main class="content">
        <div class="cards">
            <div class="card card-center">
                <div class="card-body">
                    <h1>Editar nota</h1>

                    <x-error /> 
                    
                    <x-form method="put" :action="route('notes.update', $note->id ) ">   

                        <x-field type="text" name="title" value="{{ $note->title }}"  />
                        <x-textarea name="content" rows="5" content="{{ $note->content }}"/>
                        <button type="submit" class="btn btn-primary">Editar nota</button>
                    
                    </x-form>

                </div>
            </div>
        </div>
    </main>
@endsection