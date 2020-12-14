<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePractica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          if(schema::hasTable('poet')){
            Schema::table('poet', function (Blueprint $table) {
                $table->increments('poetcode');
                $table->string('firstname', 100);
                $table->string('surname', 100);
                $table->string('adress', 100);
                $table->string('postcode', 100);
                $table->string('telephonenumeber', 100);
            });
          }else{
            Schema::create('poet', function (Blueprint $table) {
                $table->increments('poetcode');
                $table->string('firstname', 100);
                $table->string('surname', 100);
                $table->string('adress', 100);
                $table->string('postcode', 100);
                $table->string('telephonenumeber', 100);
            });
          }
          
          if(schema::hasTable('poem')){
            Schema::table('poem', function (Blueprint $table) {
                $table->increments('poemcode');
                $table->string('poem_title', 100);
                $table->string('poem_context', 300);
            
            });
          }else{
            Schema::create('poem', function (Blueprint $table) {
                $table->increments('poemcode');
                $table->string('poem_title', 100);
                $table->string('poem_context', 300);
            });
          }

          if(schema::hasTable('publication')){
            Schema::table('publication', function (Blueprint $table) {
                $table->increments('publication_code');
                $table->string('title', 100);
                $table->string('price', 50);
            
            });
          }else{
            Schema::create('publication', function (Blueprint $table) {
                $table->increments('publication_code');
                $table->string('title', 100);
                $table->string('price', 50);
            });
          }

          if(schema::hasTable('poem_publication')){
            Schema::table('poem_publication', function (Blueprint $table) {
                $table->increments('publication_code');
                $table->integer('poem_code');
            });
          }else{
            Schema::create('poem_publication', function (Blueprint $table) {
                $table->increments('publication_code');
                $table->integer('poem_code');
            });
          }

          if(schema::hasTable('publication_sales')){
            Schema::table('publication_sales', function (Blueprint $table) {
                $table->increments('publication_code');
                $table->string('title', 100);
                $table->string('price', 50);
            
            });
          }else{
            Schema::create('publication_sales', function (Blueprint $table) {
                $table->increments('publication_code');
                $table->string('title', 100);
                $table->string('price', 50);
            });
          }

  
          if(schema::hasTable('customer')){
            Schema::table('customer', function (Blueprint $table) {
                $table->increments('customer_code');
                $table->string('first_name', 100);
                $table->string('surname', 100);
                $table->string('adress', 100);
                $table->string('post_code', 100);
                $table->string('telephone_number', 100);
            
            });
          }else{
            Schema::create('customer', function (Blueprint $table) {
                $table->increments('customer_code');
                $table->string('first_name', 100);
                $table->string('surname', 100);
                $table->string('adress', 100);
                $table->string('post_code', 100);
                $table->string('telephone_number', 100);
            });
          }

      
          if(schema::hasTable('sales')){
            Schema::table('sales', function (Blueprint $table) {
                $table->increments('sale_code');
                $table->string('f_date', 100);
                $table->string('surname', 100);
                $table->string('adress', 100);
                $table->string('post_code', 100);
                $table->string('amount', 100);
            
            });
          }else{
            Schema::create('sales', function (Blueprint $table) {
                $table->increments('sale_code');
                $table->string('f_date', 100);
                $table->string('surname', 100);
                $table->string('adress', 100);
                $table->string('post_code', 100);
                $table->string('amount', 100);
            });
          }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('poet', function (Blueprint $table) {
            schema::dropIfExist('poet');
        });

        Schema::table('poem', function (Blueprint $table) {
            schema::dropIfExist('poem');
        });

        Schema::table('publication', function (Blueprint $table) {
            schema::dropIfExist('publication');
        });

        Schema::table('poem_publication', function (Blueprint $table) {
            schema::dropIfExist('poem_publication');
        });

        Schema::table('publication_sales', function (Blueprint $table) {
            schema::dropIfExist('publication_sales');
        });

        Schema::table('customer', function (Blueprint $table) {
            schema::dropIfExist('customer');
        });

        Schema::table('sales', function (Blueprint $table) {
            schema::dropIfExist('sales');
        });
    }
}
