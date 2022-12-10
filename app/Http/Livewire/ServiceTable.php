<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Service;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ServiceTable extends DataTableComponent
{
    protected $model = Service::class;

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
            'homePage' => 'Show from home page',
            'hideHomePage' => 'Hide from home page',
            'delete' => 'Delete',
        ];
    }


    public function delete()
    {
        $apps = $this->getSelected();
        Service::query()->whereIn('id' , $apps)->delete();
        $this->clearSelected();
    }

    public function activate()
    {
        Service::query()->whereIn('id', $this->getSelected())->update(['is_active' => true]);
        $this->clearSelected();
    }

    public function deactivate()
    {
        Service::query()->whereIn('id', $this->getSelected())->update(['is_active' => false]);
        $this->clearSelected();
    }

    public function homePage()
    {
        Service::query()->whereIn('id', $this->getSelected())->update(['showHomepage' => true]);
        $this->clearSelected();
    }

    public function hideHomePage()
    {
        Service::query()->whereIn('id', $this->getSelected())->update(['showHomepage' => false]);
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
            Column::make("Order", "order")
                ->sortable(),
            BooleanColumn::make("Is active", "is_active")
                ->sortable(),
            BooleanColumn::make("Show In Home Page", "showHomepage")
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
                        ->location(fn($row) => route('admin:services.edit', $row))
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-outline-warning',
                            ];
                        }),
                ]),
        ];
    }
}
