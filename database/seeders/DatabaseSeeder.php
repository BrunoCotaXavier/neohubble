<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Criar o papel (role) 'admin'
        $role = Role::create(['name' => 'admin']);
        
        // Criar a permissão 'create_blog'
        $permission = Permission::create(['name' => 'create_blog']);
        
        // Atribuir a permissão 'create_blog' ao papel 'admin'
        $role->givePermissionTo($permission);
        
        // Criar um usuário
        $user = User::factory()->create([
             'name' => 'Neohubble',
             'email' => 'admin@neohubble.com',
             'password' => 'Bruno@1998',
        ]);
        
        // Atribuir o papel 'admin' ao usuário
        $user->assignRole($role);
    }
}
