 <form method="POST" action="{{ $action }}">
     @csrf

     @isset($edit)
         @method('PATCH')
     @endisset

     <div class="mb-3">
         <label for="companyName" class="form-label fw-bold">Company Name</label>
         <input name="name" value="{{ old('name', $company->name ?? '') }}" type="text"
             class="form-control @error('name') is-invalid @enderror" id="companyTitle">
         @error('name')
             <div class="invalid-feedback">{{ $message }}</div>
         @enderror
     </div>

     <div class="mb-3">
         <label for="companyName" class="form-label fw-bold">Company Address</label>
         <input name="address" value="{{ old('address', $company->address ?? '') }}" type="text"
             class="form-control @error('address') is-invalid @enderror" id="companyTitle">
         @error('address')
             <div class="invalid-feedback">{{ $message }}</div>
         @enderror
     </div>

     <div class="mb-3">
         <label for="companyName" class="form-label fw-bold">Company Contact</label>
         <input name="contact" value="{{ old('contact', $company->contact ?? '') }}" type="text"
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

     <button type="submit" class="btn btn-primary me-2"><i
             class="bi bi-save me-1"></i>{{ $buttonText ?? 'Save Company' }}
     </button>
     <button type="reset" class="btn btn-outline-secondary"><i class="bi bi-x-circle me-1"></i> Clear
         Form</button>
 </form>
