<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datos_practica extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poet')->insert([
            'firstname'=>'juan',
            'surname'=>'hernandez',
            'adress'=>'calle uno',
            'postcode'=>'00001',
            'telephonenumeber'=>'6141234567'
        ]);

        DB::table('poet')->insert([
            'firstname'=>'pedro',
            'surname'=>'perez',
            'adress'=>'calle dos',
            'postcode'=>'00002',
            'telephonenumeber'=>'6142345678'
        ]);

        DB::table('poet')->insert([
            'firstname'=>'antonio',
            'surname'=>'lopez',
            'adress'=>'calle tres',
            'postcode'=>'00003',
            'telephonenumeber'=>'6143456789'
        ]);

        DB::table('poem')->insert([
            'poem_title'=>'programación',
            'poem_context'=>'poema de programación'           
        ]);

        DB::table('poem')->insert([
            'poem_title'=>'cálculo',
            'poem_context'=>'poema de cálculo'          
        ]);

        DB::table('poem')->insert([
            'poem_title'=>'física',
            'poem_context'=>'poema de física'           
        ]);

        DB::table('publication')->insert([
            'title'=>'poema de programación',
            'price'=>'115 mxn'
        ]);

        DB::table('publication')->insert([
            'title'=>'poema de cálculo',
            'price'=>'103 mxn'
        ]);

        DB::table('publication')->insert([
            'title'=>'poema de física',
            'price'=>'90 mxn'
        ]);

        DB::table('poem_publication')->insert([
            'poem_code'=>101
        ]);

        DB::table('poem_publication')->insert([
            'poem_code'=>102
        ]);

        DB::table('poem_publication')->insert([
            'poem_code'=>103
        ]);

        DB::table('publication_sales')->insert([
            'title'=>'poema de física',
            'price'=>'90 mxn'
        ]);

        DB::table('publication_sales')->insert([
            'title'=>'poema de física',
            'price'=>'90 mxn'
        ]);

        DB::table('publication_sales')->insert([
            'title'=>'poema de física',
            'price'=>'90 mxn'
        ]);

        DB::table('customer')->insert([
            'first_name'=>'raul',
            'surname'=>'jimenez',
            'adress'=>'calle siete',
            'post_code'=>'00007',
            'telephone_number'=>'6141213456'
        ]);

        DB::table('customer')->insert([
            'first_name'=>'luis',
            'surname'=>'garcia',
            'adress'=>'calle trece',
            'post_code'=>'000013',
            'telephone_number'=>'6141224567'
        ]);

        DB::table('customer')->insert([
            'first_name'=>'omar',
            'surname'=>'torres',
            'adress'=>'calle treinta',
            'post_code'=>'00030',
            'telephone_number'=>'6141235678'
        ]);

        DB::table('sales')->insert([
            'f_date'=>'10 oct 20',
            'surname'=>'jimenez',
            'adress'=>'calle siete',
            'post_code'=>'00007',
            'amount'=>'115 mxn'
        ]);

        DB::table('sales')->insert([
            'f_date'=>'10 oct 20',
            'surname'=>'garcia',
            'adress'=>'calle trece',
            'post_code'=>'000013',
            'amount'=>'103 mxn'
        ]);

        DB::table('sales')->insert([
            'f_date'=>'10 oct 20',
            'surname'=>'torres',
            'adress'=>'calle treinta',
            'post_code'=>'00030',
            'amount'=>'90 mxn'
        ]);
  
    }
}
