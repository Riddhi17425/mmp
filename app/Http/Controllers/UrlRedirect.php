<?php
function up()
{
    Schema::create('url_redirects', function (Blueprint $table) {
        $table->id();
        $table->string('old_url')->unique();
        $table->string('new_url');
        $table->timestamps();
    });
}
?>