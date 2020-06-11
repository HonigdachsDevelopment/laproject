# GATE POLICIES

---

- [Default Roles](#section-1)
- [AuthServiceProvider](#section-2)
- [Gate based Frontend Content](#section-3)
- [Gate based Method Access](#section-4)
- [Default User Role Attachment](#section-5)

##### <a name="section-1"></a>
## DEFAULT ROLES
By default we created 5 different Roles to play with:

1. Admin
2. Manager
3. Author
4. User


##### <a name="section-2"></a>
## CHANGED POLICIES IN AuthServiceProvider.php

````

public function boot()
{
    $this->registerPolicies();

    // admin higher level permissions
    Gate::define('edit-users', function ($user){
        return $user->hasAnyRoles('admin');
    });

    Gate::define('delete-users', function ($user){
        return $user->hasRole('admin');
    });

    Gate::define('manage-users', function ($user){
        return $user->hasAnyRoles(['admin', 'manager']);
    });



}

    
`````
You can easily change permissions by refering or de-refering a role-name to the gate you wish to change access policies to:

``````
        // lower level permissions
        // Gate::define('edit-users', function ($user){
        //  return $user->hasRole('admin');
        
``````


##### <a name="section-3"></a>
## GATE BASED FRONTEND CONTENT

example for ui-element hidden for users without access permissions declared into the AuthServiceProvider
``````
 @can('manage-users')
 <a href="{{ route('admin.users.index')}}" class="dropdown-item">Userlist </a>
 @endcan
       
``````

another example for buttons in our admin table hidden by gate permissions
```````
<div class="btn-group" role="group" aria-label="">
    
    @can('edit-users')
        <a href="{{ route('admin.users.edit', $user->id ) }}">
            <button type="button" class="btn btn-outline-warning btn-sm float-left">
                EDIT
            </button>
        </a>
    @endcan
    @can('delete-users')
        <form action="{{ route('admin.users.destroy',  $user) }}" method="Post">
            @csrf
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-outline-danger btn-sm float-right">
                DELETE
            </button>
        </form>
    @endcan
    
</div>
```````

##### <a name="section-4"></a>
## GATE BASED METHOD ACCESS

example for method access denied for users without access permissions declared into the AuthServiceProvider (example from UsersController)


    public function destroy(User $user)
    {
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }

        //dd($request);
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index');
    }
    
    
    
##### <a name="section-5"></a>
## DEFAULT ROLE ATTACHMENT

at app/Http/Controllers/Auth/RegisterController.php

``````
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $role = Role::select('id')->where('name', 'user')->first();
        $user->roles()->attach($role);
        return $user;
    }

``````
