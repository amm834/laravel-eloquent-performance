@extends('layouts.app')
<div>
    <table class="table-auto">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title  }}</td>
                <td>{{ $post->user->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
