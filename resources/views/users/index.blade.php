@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .category-block{
            font-weight: normal;
            font-size: 16px;
        }
        .bold{
            font-weight: bold;
        }
    </style>
</head>
<body class="antialiased">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">This is {{$users->domain}}{{ __(' user\'s panel.') }}</div>
                <div class="card-body">
                    <div class="container home">
                        <p class="category-block bold">User Details:</p>
                        <div class="category-responsive dashboard-item">
                            <p class="category-block">Name: {{$users->name}}</p>
                            <p class="category-block">Email: {{$users->email}}</p>
                            <p class="category-block">Role: {{$users->role}}</p>
                            <p class="category-block">Contact No: {{$users->contact_no}}</p>
                            <p class="category-block">Type: {{$users->type}}</p>
                            <p class="category-block">Weight: {{$users->weight}}</p>
                            <p class="category-block">Access: {{$users->access}}</p>
                            <p class="category-block">Status: {{$users->status}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
