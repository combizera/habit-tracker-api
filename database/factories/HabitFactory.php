<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            "Acordar cedo",
            "Manter uma rotina matinal",
            "Tomar Sol",
            "Evitar procrastinação",
            "Definir metas diárias",
            "Beber bastante água",
            "Praticar exercícios físicos",
            "Dormir bem",
            "Comer de forma equilibrada",
            "Fazer pausas durante o trabalho",
            "Ler pelo menos 10 páginas",
            "Escrever um diário",
            "Evitar consumo excessivo de redes sociais",
            "Manter a organização",
            "Chegar pontualmente",
            "Priorizar tarefas importantes",
            "Criar um orçamento mensal",
            "Investir no próprio futuro",
            "Fazer renda extra",
            "Manter contato com a família e amigos",
            "Ser gentil e empático",
            "Evitar fofocas e negatividade",
            "Desenvolver inteligência emocional",
            "Ajudar os outros sempre que possível",
            "Praticar meditação ou oração",
            "Aceitar e aprender com os erros",
            "Manter uma mentalidade positiva",
            "Viver o presente",
            "Ser grato pelas pequenas coisas",
        ];

        return [
            'user_id' => User::factory(),
            'uuid'    => fake()->uuid(),
            'title'   => fake()->randomElement($habits),
        ];
    }
}
