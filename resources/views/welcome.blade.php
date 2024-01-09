<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <x-navbar />
    
    <main>
        <x-sidebar />

        <section>
            <h1>Welcome to Our Website</h1>
            <p>This is the home page content.</p>
        </section>
    </main>

    <x-footer />
@endsection
