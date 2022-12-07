<?php

namespace App\Http\Livewire;


use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Newspaper;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class NewspaperTable extends DataTableComponent
{
    protected $model = Newspaper::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
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
        Newspaper::query()->whereIn('id' , $apps)->delete();
        $this->clearSelected();
    }

    public function activate()
    {
        Newspaper::query()->whereIn('id', $this->getSelected())->update(['is_active' => true]);
        $this->clearSelected();
    }

    public function deactivate()
    {
        Newspaper::query()->whereIn('id', $this->getSelected())->update(['is_active' => false]);
        $this->clearSelected();
    }
    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->searchable()
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            BooleanColumn::make("Active", "is_active")
                ->sortable(),
            ImageColumn::make("Image")->location(fn($row) => (Newspaper::find($row->id))->image )
                ->attributes(fn($row) => [
                    'style' => 'max-width:100px;',
                ]),
            Column::make("Created at", "created_at")
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
                        ->location(fn($row) => route('admin:newspaper.edit', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-outline-warning',
                            ];
                        }),
                ]),
        ];
    }
}
