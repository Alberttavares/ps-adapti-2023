<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class AlunoFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'nome' => $this->faker->word(),
			'descricao' => $this->faker->word(),
			'imagem' => $this->faker->imageUrl(),
			'contratado' => $this->faker->boolean(),
			'formado' => $this->faker->boolean(),
			'curso_id' => (Curso::all()->random(1)->first())->id //primeiro objeto do array

		];
	}
}
