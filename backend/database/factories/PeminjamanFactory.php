<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_peminjam" => fake()->name(),
            "foto" => "test.jpg",
            "kelas" => "10",
            "jurusan" => "RPL",
            "tanggal_peminjaman" => Carbon::now(),
            "alat_peminjaman" => "test",
            "keperluan" => "test"
        ];
    }
}
