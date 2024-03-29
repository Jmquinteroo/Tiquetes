    <?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(RolesAndPermissions::class);
        $this->call(UserSeeder::class);
        $this->call(LugarSeeder::class);
        $this->call(EventoSeeder::class);
        $this->call(TiqueteSeeder::class);
    }
}
