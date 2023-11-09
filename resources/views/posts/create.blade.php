@extends('layout')
@section('title', 'Register Account')

@section('content')
    <h1>Register Account</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        <label for="title">Title</label>
        <input type="text" name="title" autocomplete="off" required>
        <label for="description">Description</label>
        <input type="text" name="description" autocomplete="off" required>
    </form>
