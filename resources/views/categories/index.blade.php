@extends('layouts.home')

@section('content')
    <div class="flex justify-center items-center flex-wrap gap-10 my-12">
        @foreach($categories as $category)
            <x-category-card :category="$category"/>
        @endforeach
    </div>
@endsection
