<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // create permissions
        $resources = ['companies', 'users', 'job-applications', 'job-postings'];
        $actions = ['create', 'read', 'update', 'delete'];
        $specials = ['roles.assign', 'permissions.assign'];

        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                Permission::createOrFirst(['name' => "$resource.$action"]);
            }
        }

        foreach ($specials as $special) {
            Permission::createOrFirst(['name' => "$special"]);
        }

        // create roles
        $roles = ['super-admin', 'admin', 'company-admin', 'user'];
        foreach ($roles as $role) {
            Role::createOrFirst(['name' => $role]);
        }

        // assign permissions to roles

        // super-admin
        $superAdminRole = Role::where('name', 'super-admin')->first();
        $permissions = Permission::all();
        $superAdminRole->syncPermissions($permissions);

        // admin
        $adminRole = Role::where('name', 'admin')->first();
        $permissions = Permission::whereNotIn('name', $specials)->get();
        $adminRole->syncPermissions($permissions);

        // company-admin
        $companyAdminRole = Role::where('name', 'company-admin')->first();
        $permissions = Permission::whereLike('name', 'job-applications%')
            ->orWhereLike('name', 'job-postings%')->get();
        $companyAdminRole->syncPermissions($permissions);


        // create a super admin user
        $superAdminUser = User::create([
            'fullname' => 'Super Admin',
            'email' => env('SUPER_ADMIN_EMAIL'),
            'password' => env('SUPER_ADMIN_PASSWORD'),
            'contact' => '0200000000',
            'address' => 'Online',
            'email_verified_at' => now()
        ]);

        $superAdminUser->assignRole($superAdminRole);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
