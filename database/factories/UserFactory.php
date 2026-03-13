<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'icon' => fake()->randomElement([
                'default.png',
                'user1.png',
                'user2.png',
                'user3.png',
                'user4.png',
            ]),
            'introduction' => fake()->randomElement([
                'プログラミングを勉強中です。',
                '日々の出来事を記録するために日記を書いています。',
                'Laravelを学習しながらアプリを作っています。',
                '散歩や読書が好きです。',
                'コーヒーを飲みながらコードを書く時間が好きです。',
                '新しいことを学ぶのが好きです。',
                '日々の小さな出来事を大切にしています。',
                'のんびりマイペースに過ごしています。',
                'エンジニアを目指して勉強しています。',
                'よろしくお願いします。',
            ]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
