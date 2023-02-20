<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->increments('id_author');
            $table->string('lastname');
            $table->string('name');
            $table->string('middlename');

        });

        DB::table('author')->insert(
            ['id_author' => '1',
                'lastname'=> 'Кристи',
                'name'=> 'Агата',
                'middlename'=> '']
        );
        DB::table('author')->insert(
            ['id_author' => '2',
                'lastname'=> 'Толстой',
                'name'=> 'Лев',
                'middlename'=> 'Николаевич']
        );
        DB::table('author')->insert(
            ['id_author' => '3',
                'lastname'=> 'Роулинг',
                'name'=> 'Джоана',
                'middlename'=> 'Кэтлин']
        );
        DB::table('author')->insert(
            ['id_author' => '4',
                'lastname'=> 'Кинг',
                'name'=> 'Стивен',
                'middlename'=> '']
        );
        DB::table('author')->insert(
            ['id_author' => '5',
                'lastname'=> 'Хокинг',
                'name'=> 'Стивен',
                'middlename'=> '']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author');
    }
};
