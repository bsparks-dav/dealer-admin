<?php

namespace App\Filament\Resources\InvoiceResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class InvoiceItemsTable extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('inv_no')
                    ->label('Invoice No')
                    ->sortable()
                    ->searchable(['invoice_items.inv_itm_inv_no']),
            ]);
    }
}
