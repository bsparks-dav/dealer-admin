<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Table;

class ViewInvoice extends ViewRecord
{
    protected static string $resource = InvoiceResource::class;

    public static function table(Table $table): Table
    {
        return $table
            ->extremePaginationLinks()
            ->columns([
                Tables\Columns\TextColumn::make('inv_no')
                    ->label('Invoice No')
                    ->sortable()
                    ->searchable(['invoice_items.inv_itm_inv_no']),
            ]);
    }

    public static function resolveRecordRouteBinding($key): ?\Illuminate\Database\Eloquent\Model
    {
        return static::getResource()::getEloquentQuery()
            ->where('invoice_headers.id', $key)
            ->first();
    }

}
