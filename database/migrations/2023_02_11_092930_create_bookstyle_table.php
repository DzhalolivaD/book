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
        Schema::create('bookstyle', function (Blueprint $table) {
            $table->increments('id');

           $table->integer('id_book')->unsigned();
            $table->foreign('id_book')->references('id_book')->on('book');

            $table->integer('id_style')->unsigned();
            $table->foreign('id_style')->references('id_style')->on('style');

        });

        DB::table('bookstyle')->insert(
            ['id' => '1',
                'id_book'=> '1',
                'id_style'=> '1'

            ]
        );

        DB::table('bookstyle')->insert(
            ['id' => '3',
                'id_book'=> '2',
                'id_style'=> '1'

            ]
        );

        DB::table('bookstyle')->insert(
            ['id' => '15',
                'id_book'=> '10',
                'id_style'=> '2'

            ]
        );

        DB::table('bookstyle')->insert(
            ['id' => '18',
                'id_book'=> '11',
                'id_style'=> '2'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '19',
                'id_book'=> '12',
                'id_style'=> '2'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '9',
                'id_book'=> '12',
                'id_style'=> '2'

            ]
        );

        DB::table('bookstyle')->insert(
            ['id' => '11',
                'id_book'=> '8',
                'id_style'=> '3'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '13',
                'id_book'=> '9',
                'id_style'=> '3'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '10',
                'id_book'=> '7',
                'id_style'=> '4'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '12',
                'id_book'=> '8',
                'id_style'=> '4'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '14',
                'id_book'=> '9',
                'id_style'=> '4'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '16',
                'id_book'=> '11',
                'id_style'=> '4'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '21',
                'id_book'=> '13',
                'id_style'=> '5'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '22',
                'id_book'=> '14',
                'id_style'=> '5'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '23',
                'id_book'=> '15',
                'id_style'=> '5'

            ]
        );

        DB::table('bookstyle')->insert(
            ['id' => '2',
                'id_book'=> '1',
                'id_style'=> '6'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '4',
                'id_book'=> '2',
                'id_style'=> '6'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '5',
                'id_book'=> '3',
                'id_style'=> '6'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '6',
                'id_book'=> '4',
                'id_style'=> '6'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '8',
                'id_book'=> '6',
                'id_style'=> '6'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '7',
                'id_book'=> '5',
                'id_style'=> '7'

            ]
        );
        DB::table('bookstyle')->insert(
            ['id' => '17',
                'id_book'=> '11',
                'id_style'=> '8'

            ]
        );

        DB::table('bookstyle')->insert(
            ['id' => '20',
                'id_book'=> '12',
                'id_style'=> '9'

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
        Schema::dropIfExists('bookstyle');
    }
};
