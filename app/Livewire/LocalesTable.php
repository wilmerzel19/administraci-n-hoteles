<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Local;

class LocalesTable extends DataTableComponent
{
    protected $model = Local::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Imagen", "imagen")
                ->sortable(),
            Column::make("Direccion", "direccion")
                ->sortable(),
            Column::make("Descripcion", "descripcion")
                ->sortable(),
            Column::make("Telefono", "telefono")
                ->sortable(),
            Column::make("Website", "website")
                ->sortable(),
            Column::make("Calificacion", "calificacion")
                ->sortable(),
            Column::make("Tipo", "tipo")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
