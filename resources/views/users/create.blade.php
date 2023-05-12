@extends('layouts.app')

@section('title', 'New User')

@section('content')
    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div class=" my-10">
            <label for="name">Name:</label>
            <textarea name="name" id="name" row="5" class=" p-2 bg-gray-200 @error('name') is-invalid @enderror"></textarea>

            @error('location')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class=" my-10">
            <label for="email">Email:</label>
            <textarea name="email" id="email" row="5" class=" p-2 bg-gray-200 @error('email') is-invalid @enderror"></textarea>

            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=" my-10">
            <label for="password">Password:</label>
            <textarea name="password" id="password" row="5" class=" p-2 bg-gray-200 @error('password') is-invalid @enderror"></textarea>

            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-blue">Create</button>
    </form>
@endsection
