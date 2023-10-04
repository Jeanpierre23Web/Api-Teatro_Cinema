<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function tareas()
    {
        return [
            'id int unique key' => $this -> faker-> numberId(),
            'Titulo' => $this->faker->Title(),
            'Contenido' => $this->faker->Contenido(),
            'Estado' => $this ->faker -> Estado(),
            'Autor' => $this ->faker -> Autor(),
            'created_at datetime'=> $this ->faker(),
            'update_datetime' => $this->faker(),
            'deleted_at datetime'=> $this ->faker()
        ];
    }
}