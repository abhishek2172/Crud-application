<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateItemsTableAddCategoryName extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            
            $table->dropForeign(['category_id']);

          
            $table->dropColumn('category_id');

         
            $table->string('category_name')->after('description');
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            // Add category_id column
            $table->unsignedBigInteger('category_id')->after('description');

            // Restore foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            // Drop category_name column
            $table->dropColumn('category_name');
        });
    }
}
