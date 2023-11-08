<?php

use App\PermissionRole;
use Illuminate\Database\Seeder;

class PermissionsRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Permission roles
        $permissions_role = [
          [
            'permission_id' => '1',
            'role_id' => '1',
          ],
          [
            'permission_id' => '6',
            'role_id' => '2',
          ],
          [
            'permission_id' => '21',
            'role_id' => '2',
          ],
          [
            'permission_id' => '6',
            'role_id' => '3',
          ],
          [
            'permission_id' => '21',
            'role_id' => '3',
          ],
          [
            'permission_id' => '25',
            'role_id' => '2',
          ],
          [
            'permission_id' => '17',
            'role_id' => '3',
          ],
          [
            'permission_id' => '23',
            'role_id' => '2',
          ],
          [
            'permission_id' => '18',
            'role_id' => '3',
          ],
          [
            'permission_id' => '13',
            'role_id' => '3',
          ],
          [
            'permission_id' => '24',
            'role_id' => '2',
          ],
          [
            'permission_id' => '16',
            'role_id' => '3',
          ],
          [
            'permission_id' => '22',
            'role_id' => '2',
          ],
          [
            'permission_id' => '29',
            'role_id' => '2',
          ],
          [
            'permission_id' => '10',
            'role_id' => '3',
          ],
          [
            'permission_id' => '32',
            'role_id' => '3',
          ],
          [
            'permission_id' => '26',
            'role_id' => '2',
          ],
          [
            'permission_id' => '27',
            'role_id' => '2',
          ],
          [
            'permission_id' => '2',
            'role_id' => '2',
          ],
          [
            'permission_id' => '42',
            'role_id' => '2',
          ],
          [
            'permission_id' => '2',
            'role_id' => '3',
          ],
          [
            'permission_id' => '4',
            'role_id' => '2',
          ],
          [
            'permission_id' => '4',
            'role_id' => '3',
          ],
          [
            'permission_id' => '5',
            'role_id' => '3',
          ],
          [
            'permission_id' => '43',
            'role_id' => '2',
          ],
          [
            'permission_id' => '43',
            'role_id' => '3',
          ],
          [
            'permission_id' => '3',
            'role_id' => '2',
          ],
          [
            'permission_id' => '3',
            'role_id' => '3',
          ],
          
        ];

        foreach ($permissions_role as $permission_role) {
            PermissionRole::create($permission_role);
        }
    }
}
