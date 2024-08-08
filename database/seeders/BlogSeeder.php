<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'title' => "Budućnost veštačke inteligencije",
            'short_intro' => "Veštačka inteligencija postaje sve važnija u svakodnevnom životu.",
            'content' => "<p>Veštačka inteligencija se koristi u raznim oblastima, od medicine do marketinga. U ovom članku razmatramo kako će AI promeniti svet i koje izazove može doneti...</p>",
            'photo' => "https://upload.wikimedia.org/wikipedia/commons/f/f8/Artificial_Intelligence_%26_AI_%26_Machine_Learning_-_30212411048.jpg",
        ]);

    }
}
