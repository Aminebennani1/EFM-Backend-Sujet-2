@extends('layouts.app')

@section('content')
<h1>Create Livres</h1>
<!-- <form action="{{ route('Livres.store') }}" method="POST">
        @csrf
        <div>
            <label>titre:</label>
            <input type="text" name="titre" required>
            @error('titre')
                <div class="text-red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>auteur:</label>
            <input type="text" name="auteur" required>
            @error('auteur')
                <div class="text-red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>nombre_pages:</label>
            <input type="text" name="nombre_pages" required>
            @error('nombre_pages')
                <div class="text-red">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label>categorie:</label>
            <input type="text" name="categorie" required>
            @error('categorie')
                <div class="text-red">{{$message}}</div>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form> -->
<form class="max-w-sm mx-auto" action="{{ route('Livres.store') }}" method="POST">
    @csrf
    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre</label>
        <input name="titre" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        @error('titre')
        <div class="text-red">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">auteur</label>
        <input name="auteur" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        @error('auteur')
        <div class="text-red">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nombre_pages</label>
        <input name="nombre_pages" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        @error('nombre_pages')
        <div class="text-red">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-5">
        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">categorie</label>
        <input name="categorie" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        @error('categorie')
        <div class="text-red">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

@endsection