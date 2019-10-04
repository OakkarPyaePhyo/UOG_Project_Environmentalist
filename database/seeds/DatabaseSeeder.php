<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Map;
use App\Bank;
use App\Account;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load("Seeding.xlsx");

        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();

        $get_admin1 = array();
        $get_admin2 = array();
        $get_location1 = array();
        $get_location2 = array();
        $get_location3 = array();
        $get_location4 = array();
        $get_location5 = array();
        $get_location6 = array();
        $get_bank1 = array();
        $get_bank2 = array();
        $get_bank3 = array();
        $get_bank4 = array();
        $get_bank5 = array();

        for($row = 1; $row<=$highestRow;$row++){
            $get_admin1[$row] = $worksheet->getCell('A'.$row)->getValue();
            $get_location1[$row] = $worksheet->getCell('B'.$row)->getValue();
            $get_location2[$row] = $worksheet->getCell('C'.$row)->getValue();
            $get_location3[$row] = $worksheet->getCell('D'.$row)->getValue();
            $get_location4[$row] = $worksheet->getCell('E'.$row)->getValue();
            $get_location5[$row] = $worksheet->getCell('F'.$row)->getValue();
            $get_location6[$row] = $worksheet->getCell('G'.$row)->getValue();
            $get_admin2[$row] = $worksheet->getCell('H'.$row)->getValue();
            $get_bank1[$row] = $worksheet->getCell('I'.$row)->getValue();
            $get_bank2[$row] = $worksheet->getCell('J'.$row)->getValue();
            $get_bank3[$row] = $worksheet->getCell('K'.$row)->getValue();
            $get_bank4[$row] = $worksheet->getCell('L'.$row)->getValue();
            $get_bank5[$row] = $worksheet->getCell('M'.$row)->getValue();
        }

        $get_locations = array(
            $get_location1,
            $get_location2,
            $get_location3,
            $get_location4,
            $get_location5,
            $get_location6
        );

        $get_admins = array(
            $get_admin1,
            $get_admin2,
        );

        $get_banks = array(
            $get_bank1,
            $get_bank2,
            $get_bank3,
            $get_bank4,
            $get_bank5
        );

        foreach ($get_banks as $key => $get_bank){
            $Bank = new Bank();
            $Bank->cardno = $get_bank[1];
            $Bank->balance = $get_bank[2];
            $Bank->cvv = $get_bank[3];
            $Bank->expdate = $get_bank[4];           
            $Bank->save();
        }

        foreach ($get_locations as $key => $get_location){
            $Map = new Map();
            $Map->name = $get_location[1];
            $Map->location1 = $get_location[2];
            $Map->location2 = $get_location[3];
            $Map->location3 = $get_location[4];
            $Map->location4 = $get_location[5];
            $Map->location5 = $get_location[6];
            $Map->location6 = $get_location[7];
            $Map->location7 = $get_location[8];
            $Map->location8 = $get_location[9];
            $Map->location9 = $get_location[10];
            $Map->location10 = $get_location[11];
            $Map->location11 = $get_location[12];
            $Map->location12 = $get_location[13];
            $Map->location13 = $get_location[14];
            $Map->location14 = $get_location[15];
            $Map->location15 = $get_location[16];
            $Map->location16 = $get_location[17];
            $Map->location17 = $get_location[18];
            $Map->location18 = $get_location[19];
            $Map->location19 = $get_location[20];
            $Map->location20 = $get_location[21];
            $Map->save();
        }

        foreach ($get_admins as $key => $get_admin){
            $Admin = new Admin();
            $Admin->name = $get_admin[1];
            $Admin->email = $get_admin[2];
            $Admin->passwords = $get_admin[3];
            $Admin->photo = $get_admin[4];
            $Admin->role = $get_admin[5];
            $Admin->save();
        }

        for ($i=1; $i < 6; $i++){
            $Account = new Account();
            $Account->user_id = $i;
            $Account->bank_id = $i;
            $Account->save();
        }
    }
}
