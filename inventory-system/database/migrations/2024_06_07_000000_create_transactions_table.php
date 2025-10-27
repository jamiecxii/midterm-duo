<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->string('category');
            $table->integer('quantity');
            $table->string('supplier');
            $table->date('date');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
