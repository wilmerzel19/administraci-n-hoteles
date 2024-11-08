<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Alquiler;

class AlquilersTable extends DataTableComponent
{
    protected $model = Alquiler::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Usuario", "usuario")
                ->sortable(),
            Column::make("Habitacion id", "habitacion_id")
                ->sortable(),
            Column::make("Fecha inicio", "fecha_inicio")
                ->sortable(),
            Column::make("Fecha fin", "fecha_fin")
                ->sortable(),
            Column::make("Precio", "precio")
                ->sortable(),
            Column::make("Estado", "estado")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
