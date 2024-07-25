<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orderNumber');
            $table->string('productCode', 15);
            $table->integer('quantityOrdered');
            $table->decimal('priceEach', 10, 2);
            $table->integer('orderLineNumber');
            $table->timestamps();

            $table->foreign('orderNumber')->references('orderNumber')->on('orders')->onDelete('cascade');
            // Add a foreign key constraint to the products table if necessary
            // $table->foreign('productCode')->references('productCode')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}
