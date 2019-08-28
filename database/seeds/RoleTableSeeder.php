<?php

use Illuminate\Database\Seeder;
use proyPrueba\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "admin";
        $role->description = "Perfil Super Usuario Administrativo";
        $role->save();

        $role = new Role();
        $role->name = "user";
        $role->description = "Perfil Usuario restringido";
        $role->save();
    }
}
