<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant
{
    use HasFactory, HasApiTokens;
    protected $guarded = [];

    public static function booted()
    {
        static::creating(fn (Tenant $tenant) => $tenant->createDatabase($tenant));
        static::created(fn (Tenant $tenant) => $tenant->runMigrationsSeeders($tenant));
    }

    public function createDatabase($tenant)
    {
        $database = Str::of($tenant->database)->replace('.', '_')->lower()->__toString();
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?";
        $db = DB::select($query, [$database]);
        if (empty($db)) {
            DB::connection('tenant')->statement("CREATE DATABASE {$database} CHARACTER SET utf8 COLLATE utf8_general_ci;");
            $tenant->database = $database;
        }
        return $database;
    }

    public function runMigrationsSeeders($tenant)
    {
        /* $tenant->refresh();
        Artisan::call('tenants:artisan', [
            'artisanCommand' => 'migrate:refresh --path=database/migrations/tenant --database=tenant --seed --seeder=TenantSeeder',
            '--tenant' => "{$tenant->id}",
        ]); */

        /* Artisan::call('tenants:artisan', [
            'artisanCommand' => 'migrate:fresh --path=database/migrations/tenant --database=tenant --seed --seeder=TenantSeeder',
            '--tenant' => "{$tenant->id}",
        ]); */
        /* Artisan::call('tenants:artisan', [
            'artisanCommand' => 'migrate --database=tenant --seed --force',
            '--tenant' => "{$tenant->id}",
        ]); */

    }

}
