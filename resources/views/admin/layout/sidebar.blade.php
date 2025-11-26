<!-- Sidebar -->
<div class="bg-primary border-end text-white" id="sidebar-wrapper">
    <div class="sidebar-heading bg-primary text-white p-3 fw-bold fs-4">EasyJobs Admin</div>
    <div class="list-group list-group-flush">
        <a href="{{ route('admin.dashboard') }}"
            class="list-group-item list-group-item-action bg-secondary text-white fw-bold border-0"><i
                class="bi bi-speedometer2 me-2"></i>Dashboard</a>
        <a href="{{ route('admin.job-postings.index') }}"
            class="list-group-item list-group-item-action bg-primary text-white border-0"><i
                class="bi bi-briefcase me-2"></i>Job Postings</a>
        <a href="{{ route('admin.job-applications.index') }}"
            class="list-group-item list-group-item-action bg-primary text-white border-0"><i
                class="bi bi-plus-circle me-2"></i>Job Applications</a>
        <a href="{{ route('admin.companies.index') }}"
            class="list-group-item list-group-item-action bg-primary text-white border-0"><i
                class="bi bi-building me-2"></i>Companies</a>
        <a href="{{ route('admin.users.index') }}"
            class="list-group-item list-group-item-action bg-primary text-white border-0"><i
                class="bi bi-person me-2"></i>Users</a>
    </div>
</div>
