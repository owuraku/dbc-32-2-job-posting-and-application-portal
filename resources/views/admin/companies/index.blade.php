@extends('admin.layout.master')
@section('title', 'List Of Companies')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 fw-bold text-primary">All Companies</h6>
            <a href="{{ route('admin.companies.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus me-1"></i> Add
                New Company</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="jobTable">
                    <thead class="table-primary">
                        <tr>
                            <th>Company Name <i class="bi bi-sort-alpha-down-alt"></i></th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($companies as $company)
                            <tr>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->contact }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-info btn-sm"><i
                                                class="bi bi-eye"></i></button>
                                        <button type="button" class="btn btn-outline-primary btn-sm"><i
                                                class="bi bi-pencil"></i></button>
                                        <button type="button" class="btn btn-outline-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    No company available yet
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
