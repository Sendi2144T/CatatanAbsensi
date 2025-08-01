// database/migrations/xxxx_xx_xx_create_absensis_table.php

public function up()
{
    Schema::create('absensis', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->date('tanggal');
        $table->enum('status', ['Hadir', 'Izin', 'Sakit', 'Alpha']);
        $table->text('keterangan')->nullable();
        $table->timestamps();

        // Relasi ke tabel users
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}
