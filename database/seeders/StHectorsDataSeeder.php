<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Client;
use App\Models\Pet;

class StHectorsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json_string = file_get_contents('C:\Web\Week7\Day35\Hackathlone3\laravel\storage\data\clients.json'); // replace path with a real path
        $data = json_decode($json_string); // decode the string into data
        
        DB::table('clients')->truncate();
        DB::table('pets')->truncate();

        $newClient = new Client;
        $newClient->name = 'Tomas';
        $newClient->surname = 'Glezl';
        $newClient->adress = 'Vesela20';
        $newClient->email= 'tomas@tomas.cz';
        $newClient->number= '5';
        $newClient->save();










        // foreach($data as $dat)
        // {
        //     DB::insert( new Client )
                
        //     //     ' INSERT
        //     // // INTO `clients`
        //     // // (`name`, `surname`)
        //     // // VALUES
        //     // // ('.$dat->first_name.','. 
        //     // // $dat->surname')');
            
        //     foreach($dat->pets as $da)
        //     {
        //         DB::insert( new Pet )
                    
                    
        //         //     ' INSERT
        //         // INTO `clients`
        //         // (`name`, `breed`, `weight`, `age`, `photo`)
        //         // VALUES
        //         // ('$da->name, 
        //         // $da->breed,
        //         // $da->weight,
        //         // $da->age,
        //         // $da->photo'
        //         )
        //         );
        //     }
        // }


    }
}
