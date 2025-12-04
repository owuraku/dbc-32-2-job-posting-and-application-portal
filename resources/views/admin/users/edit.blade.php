@extends('admin.layout.master')

@section('title', 'Edit User: ' . $user->name)

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fw-bold text-primary">User Details Form</h6>
        </div>
        <div class="card-body">
            @include('admin.users.form', [
                'action' => route('admin.users.update', $user->id),
                'edit' => true,
            ])
        </div>
    </div>
@endsection
