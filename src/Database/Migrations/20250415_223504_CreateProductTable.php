<?php declare(strict_types=1);

use Lalaz\Data\Migrations\Migration;
use Lalaz\Data\Schema\SchemaBuilder;

class CreateProductTable extends Migration
{
    private static $tableName = 'products';

    public function up()
    {
        SchemaBuilder::create(static::$tableName, function ($table) {
            // Define your columns here
            $table->increments('id');
            $table->string('column_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        SchemaBuilder::dropIfExists(static::$tableName);
    }
}
