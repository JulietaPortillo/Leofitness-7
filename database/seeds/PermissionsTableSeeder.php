<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Ejecuta la siembra de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        // Crear permisos
        $permissions = [
          [
            'name' => 'manage-gymie',
            'display_name' => 'Administrar Applicacion',
            'group_key' => 'Global',
            'description' => 'Permite al usuario administrar la aplicación',
          ],
          [
            'name' => 'view-dashboard-quick-stats',
            'display_name' => 'Ver estadísticas rápidas en el panel de control',
            'group_key' => 'Panel de control',
            'description'=> 'Permite al usuario ver las estadísticas rápidas en el panel de control',
          ],
          [
            'name' => 'view-dashboard-charts',
            'display_name' => 'Ver gráficos en el panel de control',
            'group_key' => 'Panel de control',
            'description'=> 'Permite al usuario ver gráficos en el panel de control',
          ],
          [
            'name' => 'view-dashboard-members-tab',
            'display_name' => 'Ver pestaña de miembros en el panel de control',
            'group_key' => 'Panel de control',
            'description'=> 'Permite al usuario ver la pestaña de miembros en el panel de control',
          ],
          [
            'name' => 'add-member',
            'display_name' => 'Agregar miembro',
            'group_key' => 'Miembros',
            'description'=> 'Permite al usuario agregar miembros',
          ],
          [
            'name' => 'view-member',
            'display_name' => 'Ver detalles del miembro',
            'group_key' => 'Miembros',
            'description'=> 'Permite al usuario ver detalles del miembro',
          ],
          [
            'name' => 'edit-member',
            'display_name' => 'Editar detalles del miembro',
            'group_key' => 'Miembros',
            'description'=> 'Permite al usuario editar detalles del miembro',
          ],
          [
            'name' => 'delete-member',
            'display_name' => 'Eliminar miembro',
            'group_key' => 'Miembros',
            'description'=> 'Permite al usuario eliminar miembros',
          ],
          [
            'name' => 'add-plan',
            'display_name' => 'Agregar planes',
            'group_key' => 'Planes',
            'description'=> 'Permite al usuario agregar planes',
          ],
          [
            'name' => 'view-plan',
            'display_name' => 'Ver detalles del plan',
            'group_key' => 'Planes',
            'description'=> 'Permite al usuario ver detalles del plan',
          ],
          [
            'name' => 'edit-plan',
            'display_name' => 'Editar detalles del plan',
            'group_key' => 'Planes',
            'description'=> 'Permite al usuario editar detalles del plan',
          ],
          [
            'name' => 'delete-plan',
            'display_name' => 'Eliminar planes',
            'group_key' => 'Planes',
            'description'=> 'Permite al usuario eliminar planes',
          ],
          [
            'name' => 'add-subscription',
            'display_name' => 'Agregar suscripción',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario agregar suscripciones',
          ],
          [
            'name' => 'edit-subscription',
            'display_name' => 'Editar detalles de la suscripción',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario editar detalles de la suscripción',
          ],
          [
            'name' => 'renew-subscription',
            'display_name' => 'Renovar suscripción',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario renovar suscripciones',
          ],
          [
            'name' => 'view-invoice',
            'display_name' => 'Ver recibos',
            'group_key' => 'Recibos',
            'description'=> 'Permite al usuario ver recibos',
          ],
          [
            'name' => 'add-payment',
            'display_name' => 'Agregar pagos',
            'group_key' => 'Pagos',
            'description'=> 'Permite al usuario agregar pagos',
          ],
          [
            'name' => 'view-subscription',
            'display_name' => 'Ver detalles de la suscripción',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario ver detalles de la suscripción',
          ],
          [
            'name' => 'view-payment',
            'display_name' => 'Ver detalles del pago',
            'group_key' => 'Pagos',
            'description'=> 'Permite al usuario ver detalles del pago',
          ],
          [
            'name' => 'edit-payment',
            'display_name' => 'Editar detalles del pago',
            'group_key' => 'Pagos',
            'description'=> 'Permite al usuario editar detalles del pago',
          ],
          [
            'name' => 'manage-members',
            'display_name' => 'Administrar miembros',
            'group_key' => 'Miembros',
            'description'=> 'Permite al usuario administrar miembros',
          ],
          [
            'name' => 'manage-plans',
            'display_name' => 'Administrar planes',
            'group_key' => 'Planes',
            'description'=> 'Permite al usuario administrar planes',
          ],
          [
            'name' => 'manage-subscriptions',
            'display_name' => 'Administrar suscripciones',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario administrar suscripciones',
          ],
          [
            'name' => 'manage-invoices',
            'display_name' => 'Administrar recibos',
            'group_key' => 'Recibos',
            'description'=> 'Permite al usuario administrar recibos',
          ],
          [
            'name' => 'manage-payments',
            'display_name' => 'Administrar pagos',
            'group_key' => 'Pagos',
            'description'=> 'Permite al usuario administrar pagos',
          ],
          [
            'name' => 'manage-users',
            'display_name' => 'Administrar usuarios',
            'group_key' => 'Usuarios',
            'description'=> 'Permite al usuario administrar usuarios',
          ],
          [
            'name' => 'manage-settings',
            'display_name' => 'Administrar configuraciones',
            'group_key' => 'Global',
            'description'=> 'Permite al usuario administrar configuraciones',
          ],
          [
            'name' => 'cancel-subscription',
            'display_name' => 'Cancelar suscripción',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario cancelar suscripciones',
          ],
          [
            'name' => 'manage-services',
            'display_name' => 'Administrar servicios',
            'group_key' => 'Servicios',
            'description'=> 'Permite al usuario administrar servicios',
          ],
          [
            'name' => 'add-service',
            'display_name' => 'Agregar servicios',
            'group_key' => 'Servicios',
            'description'=> 'Permite al usuario agregar servicios',
          ],
          [
            'name' => 'edit-service',
            'display_name' => 'Editar detalles del servicio',
            'group_key' => 'Servicios',
            'description'=> 'Permite al usuario editar detalles del servicio',
          ],
          [
            'name' => 'view-service',
            'display_name' => 'Ver detalles del servicio',
            'group_key' => 'Servicios',
            'description'=> 'Permite al usuario ver detalles del servicio',
          ],
          [
            'name' => 'pagehead-stats',
            'display_name' => 'Ver recuentos de encabezado de página',
            'group_key' => 'Global',
            'description'=> 'Permite al usuario ver recuentos de encabezado de página',
          ],
          [
            'name' => 'view-dashboard-expense-tab',
            'display_name' => 'Ver pestaña de gastos en el panel de control',
            'group_key' => 'Panel de control',
          ],
          [
            'name' => 'print-invoice',
            'display_name' => 'Imprimir recibos',
            'group_key' => 'Recibos',
            'description'=> 'Permite al usuario imprimir recibos',
          ],
          [
            'name' => 'delete-invoice',
            'display_name' => 'Eliminar recibos',
            'group_key' => 'Recibos',
            'description'=> 'Permite al usuario eliminar recibos',
          ],
          [
            'name' => 'delete-subscription',
            'display_name' => 'Eliminar suscripciones',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario eliminar suscripciones',
          ],
          [
            'name' => 'delete-payment',
            'display_name' => 'Eliminar transacciones de pago',
            'group_key' => 'Pagos',
            'description'=> 'Permite al usuario eliminar transacciones de pago',
          ],
          [
            'name' => 'delete-service',
            'display_name' => 'Eliminar detalles del servicio',
            'group_key' => 'Servicios',
            'description'=> 'Permite al usuario eliminar detalles del servicio',
          ],
          [
            'name' => 'add-discount',
            'display_name' => 'Agregar descuento en una recibo',
            'group_key' => 'Recibos',
            'description'=> 'Permite al usuario agregar descuento en un recibo',
          ],
          [
            'name' => 'change-subscription',
            'display_name' => 'Actualizar o degradar una suscripción',
            'group_key' => 'Suscripciones',
            'description'=> 'Permite al usuario actualizar o degradar una suscripción',
          ],
          [
            'name' => 'view-dashboard-collection-stats',
            'display_name' => 'Ver estadísticas del ingreso mensual en el panel de control',
            'group_key' => 'Panel de control',
            'description'=> 'Permite al usuario ver el ingreso mensual en el panel de control',
          ],
          [
            'name' => 'view-dashboard-payments-tab',
            'display_name' => 'Ver pestaña de pagos en el panel de control',
            'group_key' => 'Panel de control',
            'description'=> 'Permite al usuario ver la pestaña de pagos en el panel de control',
          ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
