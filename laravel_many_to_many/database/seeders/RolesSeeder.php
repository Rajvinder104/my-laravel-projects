<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
   
    public function run(): void
    {
        $roles = collect([
            [
                'role_name' => 'moniter',
               
            ],
            [
                'role_name' => 'player',
               
            ],
            [
                'role_name' => 'headboy',
                
            ],
            [
                'role_name' => 'helper',
              
            ],
            [
                'role_name' => 'innocent',
               
            ],
           ]); 
    
           $roles->each(function($query){
               role::insert($query);
           });
    }
}
