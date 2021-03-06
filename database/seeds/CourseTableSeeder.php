<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();

        $courses = [
            [
                'id' => 1,
                'image' => 'courses-1.png',
                'name' => 'Коммуникативный курс',
                'description' => '<p>Интенсивная краткосрочная программа разговорного английского. Основные цели обучения - развить навыки общения на английском языке, увеличить словарный запас и преодолеть языковой барьер в краткие сроки.</p>',
                'price' => 20000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'image' => 'courses-1.png',
                'name' => 'Актерский курс',
                'description' => '<p>Профессия «актер» для многих любителей театра и кино навсегда останется светлой мечтой, на воплощение которой не приходится рассчитывать даже самым отъявленным оптимистам. На родине Станиславского, в России – стране, подарившей миру одну из сильнейших театральных школ – любовь к театру можно смело считать</p>',
                'price' => 24000,
                'created_at' => now(),
                'updated_at' => now()],
            [
                'id' => 3,
                'image' => 'courses-3.png',
                'name' => 'Специальный курс',
                'description' => '<p>Профессия «актер» для многих любителей театра и кино навсегда останется светлой мечтой, на воплощение которой не приходится рассчитывать даже самым отъявленным оптимистам. На родине Станиславского, в России – стране, подарившей миру одну из сильнейших театральных школ </p>',
                'price' => 30000,
                'created_at' => now(),
                'updated_at' => now()],
        ];

        DB::table('courses')->insert($courses);
    }
}
