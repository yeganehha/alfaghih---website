<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Team;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class TeamTable extends DataTableComponent
{
    protected $model = Team::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('order');
    }


    public function bulkActions(): array
    {
        return [
            'activate' => 'Activate',
            'deactivate' => 'Deactivate',
            'delete' => 'Delete',
        ];
    }


    public function delete()
    {
        $apps = $this->getSelected();
        Team::query()->whereIn('id' , $apps)->delete();
        $this->clearSelected();
    }

    public function activate()
    {
        Team::query()->whereIn('id', $this->getSelected())->update(['is_active' => true]);
        $this->clearSelected();
    }

    public function deactivate()
    {
        Team::query()->whereIn('id', $this->getSelected())->update(['is_active' => false]);
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->hideIf(true),
            Column::make("order", "order")
                ->hideIf(true),
            Column::make("Active", "image")
                ->hideIf(true),
            ImageColumn::make("Image")->location(fn($row) => $row->image )
                ->attributes(fn($row) => [
                    'style' => 'max-width:100px;',
                ]),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Position", "position")
                ->searchable()
                ->sortable(),
            BooleanColumn::make("Active", "is_active")
                ->sortable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('Edit')
                        ->title(fn($row) => 'Edit' )
                        ->location(fn($row) => route('admin:teams.edit', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-outline-warning',
                            ];
                        }),
                ]),
        ];
    }
}
