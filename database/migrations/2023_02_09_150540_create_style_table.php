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
        Schema::create('style', function (Blueprint $table) {
            $table->increments("id_style");
            $table->string('name');

        });

        DB::table('style')->insert(
            ['id_style' => '1',
                'name'=> 'Детектив',

            ]
        );

        DB::table('style')->insert(
            ['id_style' => '2',
                'name'=> 'Ужасы',

            ]
        );

        DB::table('style')->insert(
            ['id_style' => '3',
                'name'=> 'Приключения',

            ]
        );
        DB::table('style')->insert(
            ['id_style' => '4',
                'name'=> 'Фэнтези',

            ]
        );

        DB::table('style')->insert(
            ['id_style' => '5',
                'name'=> 'Научно-популярный',

            ]
        );
        DB::table('style')->insert(
            ['id_style' => '6',
                'name'=> 'Роман',

            ]
        );

        DB::table('style')->insert(
            ['id_style' => '7',
                'name'=> 'Повести',

            ]
        );

        DB::table('style')->insert(
            ['id_style' => '8',
                'name'=> 'Фантастика',

            ]
        );

        DB::table('style')->insert(
            ['id_style' => '9',
                'name'=> 'Мистика',

            ]
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('style');
    }
};
