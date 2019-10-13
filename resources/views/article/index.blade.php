@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('header', 'Статьи')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
<h1>Список статей</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$articles->links()}}
    <div>
@endsection