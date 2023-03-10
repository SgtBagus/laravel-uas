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
    public function up() {

        /* BASE TABLE FOR WATER PAYMENT LIST */
        Schema::create('water_payment_lists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('updated_by');
            $table->timestamps();
        });

        
        /* DETAILS TABLE FOR WATER PAYMENT LIST */
        Schema::create('detail_water_payment_lists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('water_payment_id');
            $table->integer('last_meter');
            $table->integer('current_meter');
            $table->integer('meter_added_value');
            $table->float('total', 8, 2);
            $table->integer('status');
            $table->timestamps();
        });

        $defaultMasterPaymanetList = [
            [
                'user_id'       => 1,
                'updated_by'    => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'       => 2,
                'updated_by'    => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'       => 3,
                'updated_by'    => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'user_id'       => 4,
                'updated_by'    => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];
        
        $defaultDetailsPaymanetList = [
            [
                'water_payment_id'      => 1,
                'last_meter'            => 0,
                'current_meter'         => 5,
                'meter_added_value'     => 5,
                'total'                 => 25000.00,
                'status'                => 1,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
            [
                'water_payment_id'      => 1,
                'last_meter'            => 5,
                'current_meter'         => 10,
                'meter_added_value'     => 5,
                'total'                 => 25000.00,
                'status'                => 0,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
            [
                'water_payment_id'      => 2,
                'last_meter'            => 0,
                'current_meter'         => 5,
                'meter_added_value'     => 5,
                'total'                 => 25000.00,
                'status'                => 1,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
            [
                'water_payment_id'      => 3,
                'last_meter'            => 0,
                'current_meter'         => 5,
                'meter_added_value'     => 5,
                'total'                 => 25000.00,
                'status'                => 1,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
            [
                'water_payment_id'      => 3,
                'last_meter'            => 0,
                'current_meter'         => 5,
                'meter_added_value'     => 5,
                'total'                 => 25000.00,
                'status'                => 1,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
            [
                'water_payment_id'      => 4,
                'last_meter'            => 0,
                'current_meter'         => 5,
                'meter_added_value'     => 5,
                'total'                 => 25000.00,
                'status'                => 1,
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('water_payment_lists')->insert($defaultMasterPaymanetList);
        DB::table('detail_water_payment_lists')->insert($defaultDetailsPaymanetList);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('water_payment_lists');
        Schema::dropIfExists('detail_water_payment_lists');
    }
};
