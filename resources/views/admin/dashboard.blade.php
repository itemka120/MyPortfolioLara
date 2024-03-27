@extends('admin.layout.template')

@section('title')
    Dashboard
@endsection

@section('content')

    <main class="col">
        <div class="my-3 p-3 bg-body rounded shadow-sm row">
            @foreach($users as $user)
                <div class="col-lg-4 shadow-sm p-2">
                    <img class="rounded-circle" width="120" height="120" alt="user logo" src="/public/storage/img/user.png">
                    <h2 class="mb-2 fw-normal">{!! $user->name !!}</h2>
                    <p>Some info about this user.</p>
                </div>
            @endforeach
        </div>
    </main>

@endsection
