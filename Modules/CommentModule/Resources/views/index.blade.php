@extends('commentmodule::layouts.master')

<!-- modules/commentmodule/resources/views/comment.blade.php -->

<form action="{{ route('comment.store') }}" method="post">
    @csrf
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="rating">Rating (1-5):</label>
    <input type="number" name="rating" min="1" max="5" required><br>

    <label for="comment">Comment:</label>
    <textarea name="comment" required></textarea><br>

    <button type="submit">Submit</button>
</form>

<!-- Display Previous Comments -->
@foreach($comments as $comment)
    <p>{{ $comment->username }} - Rating: {{ $comment->rating }} - {{ $comment->comment }}</p>
@endforeach

php 