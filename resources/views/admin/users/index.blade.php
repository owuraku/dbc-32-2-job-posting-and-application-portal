@extends('admin.layout.master')
@section('title', 'List Of Users')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 fw-bold text-primary">All Users</h6>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus me-1"></i> Add
                New User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="jobTable">
                    <thead class="table-primary">
                        <tr>
                            <th>User Name <i class="bi bi-sort-alpha-down-alt"></i></th>
                            <th>Email</th>
                            <th>Role Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->fullname }} </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->roles()->first()?->name }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.users.show', $user->id) }}" type="button"
                                            class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('admin.users.edit', $user->id) }}" type="button"
                                            class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                            id="{{ $user->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button onclick="deleteUser('{{ $user->id }}')" type="button"
                                            name="delete-button" class="btn btn-outline-danger btn-sm delete">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    No user available yet
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection


@push('scripts')
    <script>
        function deleteUser(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById(id);
                    form.submit();
                }
            });
        }
    </script>
@endpush
