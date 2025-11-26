@extends('admin.layout.master')

@section('title', 'Add New Company')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 fw-bold text-primary">Company Details Form</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.companies.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="companyName" class="form-label fw-bold">Company Name</label>
                    <input name="name" value="{{ old('name') }}" type="text"
                        class="form-control @error('name') is-invalid @enderror" id="companyTitle">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="companyName" class="form-label fw-bold">Company Address</label>
                    <input name="address" value="{{ old('address') }}" type="text"
                        class="form-control @error('address') is-invalid @enderror" id="companyTitle">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="companyName" class="form-label fw-bold">Company Contact</label>
                    <input name="contact" value="{{ old('contact') }}" type="text"
                        class="form-control @error('contact') is-invalid @enderror" id="companyTitle">
                    @error('contact')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- <div class="mb-3">
                    <label for="companyType" class="form-label fw-bold">Company Type</label>
                    <select class="form-select" id="companyType" required>
                        <option selected disabled value="">Select Company Type</option>
                        <option value="onsite">Onsite</option>
                        <option value="remote">Remote</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="companyLocation" class="form-label fw-bold">Location (City, Country)</label>
                    <input type="text" class="form-control" id="companyLocation" required>
                </div>

                <div class="mb-3">
                    <label for="companySalary" class="form-label fw-bold">Salary (e.g., Annual, Monthly, or Range)</label>
                    <input type="text" class="form-control" id="companySalary"
                        placeholder="e.g. $80,000 - $100,000 Annually">
                </div>

                <div class="mb-4">
                    <label for="companyDescription" class="form-label fw-bold">Company Description (WYSIWYG)</label>
                    <!-- Note: A full WYSIWYG editor (like TinyMCE or CKEditor) would be integrated here
                                             via a separate JS library in a real application. This is a placeholder. -->
                    <textarea class="form-control" id="companyDescription" rows="10"
                        placeholder="Enter detailed company requirements, responsibilities, and benefits here."></textarea>
                    <small class="text-muted">You can use Markdown or HTML tags which would normally be handled by a rich
                        text
                        editor.</small>
                </div> --}}

                <button type="submit" class="btn btn-primary me-2"><i class="bi bi-save me-1"></i> Save Company
                    Posting</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="bi bi-x-circle me-1"></i> Clear
                    Form</button>
            </form>
        </div>
    </div>
@endsection
