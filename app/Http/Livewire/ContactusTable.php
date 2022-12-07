<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Contactus;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ContactusTable extends DataTableComponent
{
    protected $model = Contactus::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'desc');
    }


    public function bulkActions(): array
    {
        return [
            'read' => 'Mark As Read',
            'unread' => 'Mark As UnRead',
            'delete' => 'Delete',
        ];
    }


    public function delete()
    {
        $apps = $this->getSelected();
        Contactus::query()->whereIn('id' , $apps)->delete();
        $this->clearSelected();
    }

    public function read()
    {
        Contactus::query()->whereIn('id', $this->getSelected())->update(['is_read' => true]);
        $this->clearSelected();
    }

    public function unread()
    {
        Contactus::query()->whereIn('id', $this->getSelected())->update(['is_read' => false]);
        $this->clearSelected();
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->searchable()
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Email", "email")
                ->searchable()
                ->sortable(),
            Column::make("Mobile", "mobile")
                ->searchable()
                ->sortable(),
            Column::make("Subject", "subject")
                ->searchable()
                ->sortable(),
            BooleanColumn::make("Is Read", "is_read")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->searchable()
                ->sortable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('Edit')
                        ->title(fn($row) => 'View' )
                        ->location(fn($row) => route('admin:contactus.show',  $row->id))
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-outline-info',
                            ];
                        }),
                ]),
        ];
    }
}
