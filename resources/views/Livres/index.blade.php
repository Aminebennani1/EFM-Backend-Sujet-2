@extends('layouts.app')

@section('content')
<h1>Livres</h1>
<a href="{{ route('Livres.create') }}">Create New Livre</a>
<ul>
    @foreach ($Livres as $Livre)
    <!-- Inside the foreach loop in index.blade.php -->
    <li>
        <tr>
            <table >
            {{ $Livre->titre }} , {{ $Livre->auteur }} , {{ $Livre->nombre_pages }} , {{ $Livre->categorie }}       
            </table>
        </tr>
    </li>
    @endforeach
</ul>
@endsection