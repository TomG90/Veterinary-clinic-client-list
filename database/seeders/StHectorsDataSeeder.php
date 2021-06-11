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
        $json_string = file_get_contents('C:\web\exercises\pets\Veterinary-clinic-client-list\storage\clients\clients.json'); // replace path with a real path
        $data = json_decode($json_string); // decode the string into data
        
        DB::table('clients')->truncate();
        DB::table('pets')->truncate();


        foreach ($data as $dat)
        {
            $newClient = new Client;
            $newClient->name = $dat->first_name;
            $newClient->surname = $dat->surname;
            $newClient->adress = $dat->adress ?? 'null';
            $newClient->email= $dat->email ?? 'null';
            $newClient->number= $dat->number ?? 'null';
            $newClient->save();

            foreach($dat->pets as $da)
            {
                $newPet = new Pet;
                $newPet->name = $da->name ?? 'null';
                $newPet->breed = $da->breed ?? 'null';
                $newPet->weight = $da->weight ?? 0;
                $newPet->species = $da->species ?? 'null';
                $newPet->age = $da->age ?? 0 ;
                $newPet->img = '/images/' . $da->photo ?? 'null';
                $newPet->medical_history = $da->medical_history ?? 'null';
                $newPet->symptoms = $da->symptoms ?? 'null';
                $newPet->client_id = $newClient->id ?? 0;
                $newPet->save();
            }
        }









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
