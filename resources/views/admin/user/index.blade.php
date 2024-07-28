@extends('components.main')

@section('title')
    User
@endsection

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">User</li>
@endsection

@section('body')
    <a href={{ route('users.create') }} class="add-button" style="margin-top:1rem">
        <i class="fa-solid fa-user"></i> Add User
    </a>
    <div class="">
        {{ $dataTable->table() }}
    </div>
    @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
@endsection
