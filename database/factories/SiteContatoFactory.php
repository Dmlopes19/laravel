<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
use App\Models\SiteContato;
class SiteContatoFactory extends Factory
{
    protected $model = SiteContato::class;

     /* @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> $this->faker->name,
            'telefone' => $this->faker->tollFreePhoneNumber,
            'email' => $this->faker->unique()->email,
            'motivo_contato'=> $this->faker->numberBetween(1,3),
            'mensagem'=> $this->faker->text(200),
            
        ];
    }
}
