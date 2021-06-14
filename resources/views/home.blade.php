@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Sub Domains') }}</div>
                    <div class="card-body">
                        @foreach($users as $user)
                            <div class="col-md-3 category-responsive dashboard-item">
                                <a href="{{ route('users.index', ['domain' => $user->domain]) }}" class="category-wrap">
                                    <div class="category-block">
                                        <ul>
                                            <ui>{{$user->domain}}</ui>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
