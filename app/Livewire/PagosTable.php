<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Pago;

class PagosTable extends DataTableComponent
{
    protected $model = Pago::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Fecha", "fecha")
                ->sortable(),
            Column::make("Monto", "monto")
                ->sortable(),
            Column::make("Referencia", "referencia")
                ->sortable(),
            Column::make("Metodo", "metodo")
                ->sortable(),
            Column::make("Entidad", "entidad")
                ->sortable(),
            Column::make("Entidad id", "entidad_id")
                ->sortable(),
            Column::make("Observaciones", "observaciones")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
