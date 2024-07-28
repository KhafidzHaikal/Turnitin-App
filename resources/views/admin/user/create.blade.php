@extends('components.main')

@section('title')
    Create User
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">
        <a href={{ route('users.index') }}>User</a>
    </li>
    <li class="breadcrumb-item active">Create User</li>
@endsection

@section('body')
<link rel="stylesheet" href="/css/navbar.css">
<link rel="stylesheet" href="/css/style.css">
    <form action={{ route('users.store') }} method="POST">
        @csrf
        <div class="form-input">
            <label for="name">Name</label>
            <div class="">
                <input type="text" id="name" name="name">
            </div>
        </div>
        <div class="form-input">
            <label for="email">Email</label>
            <div class="">
                <input type="email" id="email" name="email">
            </div>
        </div>
        <div class="form-input">
            <label for="password">password</label>
            <div class="">
                <input type="password" id="password" name="password">
            </div>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
