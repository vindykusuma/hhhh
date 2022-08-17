<?php

use App\Models\Pelanggan;
use App\Models\Pricelist;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->datetime('time_from')->nullable();
            $table->datetime('time_to')->nullable();
            $table->text('additional_information')->nullable();
            $table->tinyInteger('status');
            $table->foreignIdFor(Pelanggan::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Pricelist::class)->constrained()->cascadeOnDelete();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
