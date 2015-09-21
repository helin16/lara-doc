<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Entities\System\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(SysAdminSeeder::class);
        $this->call(StoreTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}

class SysAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sysUserId = env('ID_USER_SYSTEM', 1);
        DB::table('useraccount')->insert([
            'id'=> $sysUserId,
            'email' => 'test@test.com',
            'password' => bcrypt('test'),
            'remember_token' => str_random(10),
            User::CREATED_BY => $sysUserId,
            User::UPDATED_BY => $sysUserId
        ]);
        Auth::loginUsingId($sysUserId);
    }
}

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\System\Auth\Store::class, 4)->create();
    }
}

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Entities\System\Auth\Role::create(['name' => 'sysadmin', 'description' => 'System Admin']);
        App\Entities\System\Auth\Role::create(['name' => 'store', 'description' => 'Store']);
    }
}

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(App\Entities\System\Auth\Store::all(['id']) as $store) {
            foreach(App\Entities\System\Auth\Role::all(['id']) as $role) {
                App\Entities\System\Auth\Person::create([
                    'firstName' => 'person_store_' . $store->id,
                    'lastName' => 'person_role_' . $role->id,
                    'store_id' => $store->id,
                    'role_id' => $role->id,
                    'email' => 'email_' . $store->id . '_' . $role->id . '@test.com'
                ]);
            }
        }
    }
}

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\System\Auth\User::class, DB::table('person')->count())->create()->each(function($user){
            $user->person_id = rand(1, DB::table('person')->count());
            $user->save();
        });
    }
}
