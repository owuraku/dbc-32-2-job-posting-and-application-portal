 <form method="POST" action="{{ $action }}">
     @csrf

     @isset($edit)
         @method('PATCH')
     @endisset

     <x-form-field name="fullname" :value="$user->fullname ?? ''"></x-form-field>
     <x-form-field name="email" :value="$user->email ?? ''" type="email"></x-form-field>
     <x-form-field name="contact" :value="$user->contact ?? ''" type="tel"></x-form-field>

     @can('roles.assign')
         <div class="mt-3 mb-3">
             <label for="role" class="form-label fw-bold">User Role</label>
             <select class="form-select" name="role" aria-label="Default select example">
                 <option>Select a role</option>
                 @foreach ($roles as $role)
                     <option value="{{ $role->id }}">{{ $role->name }}</option>
                 @endforeach
             </select>
         </div>
     @endcan



     <button type="submit" class="btn btn-primary me-2"><i class="bi bi-save me-1"></i>{{ $buttonText ?? 'Save User' }}
     </button>
     <button type="reset" class="btn btn-outline-secondary"><i class="bi bi-x-circle me-1"></i> Clear
         Form</button>
 </form>
