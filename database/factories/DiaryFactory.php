<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Diary;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diary>
 */
class DiaryFactory extends Factory
{

    protected $model = Diary::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'diary_date' => fake()->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),

            'title' => fake()->randomElement([
                '今日はよく眠れた',
                '仕事で少し疲れた一日',
                '散歩が気持ちよかった',
                'Laravelの勉強が進んだ',
                '静かな休日だった',
                '雨の日の記録',
                '新しいことを学んだ日',
                'なんとなく忙しい一日',
                'のんびり過ごした日曜日',
                '今日は少し成長できた気がする',
            ]),

            'body' => fake()->randomElement([
                '今日は朝から集中して作業できた。思ったより進んで満足している。',
                '昼休みに少し散歩したら気分が良くなった。やっぱり外の空気は大事。',
                'Laravelのリレーションについて理解が深まった。少しずつ慣れてきた。',
                '思ったより疲れていたので早めに休んだ。体調管理も大事。',
                'コードを書きながら少しずつ理解が進んできた。継続していきたい。',
                '今日は少しうまくいかないこともあったが、その分学びがあった。',
                '久しぶりにゆっくりした時間を過ごせた。こういう日も必要。',
                '小さなことだけど一歩前進できた気がする。積み重ねが大事。',
                '今日はあまり集中できなかったが、明日はもう少し頑張りたい。',
                '新しいことに挑戦した一日だった。少しずつ成長していきたい。',
            ]),

            'is_public' => fake()->boolean(),
        ];
    }
}
