@extends('admin.layout.master')

@section('title', 'Edit Company: ' . $company->name)

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fw-bold text-primary">Company Details Form</h6>
        </div>
        <div class="card-body">
            @include('admin.companies.form', [
                'action' => route('admin.companies.update', $company->id),
                'edit' => true,
            ])
        </div>
    </div>
@endsection
