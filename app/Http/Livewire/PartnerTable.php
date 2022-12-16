<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Partner;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class PartnerTable extends DataTableComponent
{
    protected $model = Partner::class;

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
        Partner::query()->whereIn('id' , $apps)->delete();
        $this->clearSelected();
    }

    public function activate()
    {
        Partner::query()->whereIn('id', $this->getSelected())->update(['is_active' => true]);
        $this->clearSelected();
    }

    public function deactivate()
    {
        Partner::query()->whereIn('id', $this->getSelected())->update(['is_active' => false]);
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("order", "order")
                ->hideIf(true),
            Column::make("Id", "id")
                ->searchable()
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Order", "order")
                ->sortable(),
            BooleanColumn::make("Active", "is_active")
                ->sortable(),
            Column::make("Active", "image")
                ->hideIf(true),
            ImageColumn::make("Image")->location(fn($row) => $row->image )
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
                        ->location(fn($row) => route('admin:partners.edit', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-outline-warning',
                            ];
                        }),
                ]),
        ];
    }
}
