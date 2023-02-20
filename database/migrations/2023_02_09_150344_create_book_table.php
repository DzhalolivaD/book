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
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id_book');

                $table->string('name');
            $table->integer('id_author')->unsigned();
            $table->foreign('id_author')->references('id_author')->on('author');

        });

        DB::table('book')->insert(
            ['id_book' => '1',
                'name'=> 'Убийство в "Восточном экспрессе"',
                'id_author'=> '1',
                ]
        );

        DB::table('book')->insert(
            ['id_book' => '2',
                'name'=> 'Десять негритят',
                'id_author'=> '1',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '3',
                'name'=> 'Смерть на Ниле',
                'id_author'=> '1',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '4',
                'name'=> 'Война и мир',
                'id_author'=> '2',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '5',
                'name'=> 'Детсво',
                'id_author'=> '2',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '6',
                'name'=> 'Анна Каренина',
                'id_author'=> '2',
            ]
        );
        DB::table('book')->insert(
            ['id_book' => '7',
                'name'=> 'Гарри Поттер и Филосовский камень',
                'id_author'=> '3',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '8',
                'name'=> 'Фантастичекие твари и где они обитают',
                'id_author'=> '3',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '9',
                'name'=> 'Гарри Поттер и Дары смерти',
                'id_author'=> '3',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '10',
                'name'=> 'Оно',
                'id_author'=> '4',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '11',
                'name'=> 'Темная башня',
                'id_author'=> '4',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '12',
                'name'=> 'Кэрри',
                'id_author'=> '4',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '13',
                'name'=> 'Краткая история времени',
                'id_author'=> '5',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '14',
                'name'=> 'Кратчайшая история времени',
                'id_author'=> '5',
            ]
        );

        DB::table('book')->insert(
            ['id_book' => '15',
                'name'=> 'Джордж и тайны вселенной',
                'id_author'=> '5',
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
        Schema::dropIfExists('book');
    }
};
