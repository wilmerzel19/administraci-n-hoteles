<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Movimiento;

class MovimientosTable extends DataTableComponent
{
    protected $model = Movimiento::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Id alquiler", "id_alquiler")
                ->sortable(),
            Column::make("Id usuario", "id_usuario")
                ->sortable(),
            Column::make("Fecha", "fecha")
                ->sortable(),
            Column::make("Estado", "estado")
                ->sortable(),
            Column::make("Observaciones", "observaciones")
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
