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
          //  Column::make("Id", "id")
           //     ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Imagen", "imagen")
                ->sortable()
                ->format(function ($value, $column, $row) {
                    return '<img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fimg.freepik.com%2Fvector-gratis%2Filustracion-concepto-torre-hotel_114360-12962.jpg&tbnid=rhhZaTxxHj7UPM&vet=10CAgQxiAoB2oXChMI0OXY6sGEigMVAAAAAB0AAAAAEAc..i&imgrefurl=https%3A%2F%2Fwww.freepik.es%2Fvectores%2Fhotel%2F12&docid=Dv6xBBb3R2LvbM&w=626&h=626&itg=1&q=hoteles%20png&ved=0CAgQxiAoB2oXChMI0OXY6sGEigMVAAAAAB0AAAAAEAc' . $value . '" width="100" height="100" />';
                })
                ->html(),

           // Column::make("Direccion", "direccion")
           //     ->sortable(),
            Column::make("Descripcion", "descripcion")
                ->sortable(),
            Column::make("Telefono", "telefono")
                ->sortable(),
            //Column::make("Website", "website")
               // ->sortable(),
           // Column::make("Calificacion", "calificacion")
           //     ->sortable(),
            Column::make("Tipo", "tipo")
                ->sortable(),
                Column::make('id')
    ->format(
        fn($value, $row, Column $column) => view('livewire.acciones.locales.acciones')->with('value', $value)
    ),

        ];
    }
}
