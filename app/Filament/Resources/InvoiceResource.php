<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
// use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Filament\Resources\InvoiceResource\RelationManagers\InvoiceItemRelationManager;
use App\Filament\Resources\InvoiceResource\RelationManagers\InvoiceItemsRelationManager;
use App\Models\InvoiceHeader;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Summarizers\Summarizer;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoiceResource extends Resource
{
    protected static ?string $model = InvoiceHeader::class;

    protected static ?string $modelLabel = 'Invoices';

    protected static ?string $navigationIcon = 'heroicon-o-inbox-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->extremePaginationLinks()
            ->columns([
                Tables\Columns\TextColumn::make('inv_no')
                    ->label('Invoice No')
                    ->sortable()
                    ->searchable(['invoice_headers.inv_no']),
                Tables\Columns\TextColumn::make('inv_purchase_ord_no')
                    ->label('PO #')
                    ->sortable()
                    ->searchable(['invoice_headers.inv_purchase_ord_no']),
                Tables\Columns\TextColumn::make('inv_order_no')
                    ->label('Order #')
                    ->sortable()
                    ->searchable(['invoice_headers.inv_order_no']),
                Tables\Columns\TextColumn::make('inv_type')
                    ->label('Type')
                    ->sortable()
                    ->searchable(['invoice_headers.inv_type']),
                Tables\Columns\TextColumn::make('inv_date')
                    ->label('Inv. Date')
                    ->formatStateUsing(fn (string $state): string => date('M d, Y', strtotime($state)))
                    ->sortable()
                    ->searchable(['invoice_headers.inv_date']),
//                Tables\Columns\TextColumn::make('inv_edi_po_no_cont')
//                    ->label('EDI PO #')
//                    ->state(fn ($record) => $record->inv_edi_po_no_cont)
//                    ->sortable()
//                    ->searchable(['invoice_edis.inv_edi_po_no_cont']),
//                Tables\Columns\TextColumn::make('inv_comment2')
//                    ->label('Pmt Comment')
//                    ->state(fn ($record) => $record->inv_comment2)
//                    ->sortable()
//                    ->searchable(['invoice_payments.inv_comment2']),
                Tables\Columns\TextColumn::make('inv_bill_to_name')
                    ->label('Bill To')
                    ->state(function ($record) {
                        // dd($record);
                    })
                    ->state(fn ($record) => $record->inv_bill_to_name)
                    ->sortable()
                    ->searchable(['invoice_bill_tos.inv_bill_to_name']),
                Tables\Columns\TextColumn::make('inv_ship_to_addr_1')
                    ->label('Ship To')
                    ->state(fn ($record) => $record->inv_ship_to_addr_1)
                    ->sortable()
                    ->searchable(['invoice_ship_tos.inv_ship_to_addr_1']),
                Tables\Columns\TextColumn::make('inv_salesman_no1')
                    ->label('Salesman')
                    ->state(fn ($record) => $record->inv_salesman_no1)
                    ->sortable()
                    ->searchable(['invoice_sales_people.inv_salesman_no1']),
                Tables\Columns\TextColumn::make('inv_tax_code_1')
                    ->label('Tax Code')
                    ->state(fn ($record) => $record->inv_tax_code_1)
                    ->sortable()
                    ->searchable(['invoice_taxes.inv_tax_code_1']),

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                // ])
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->join('invoice_edis', 'invoice_edis.inv_no', '=', 'invoice_headers.inv_no')
            ->leftJoin('invoice_payments', 'invoice_payments.inv_no', '=', 'invoice_headers.inv_no')
            ->leftJoin('invoice_bill_tos', 'invoice_bill_tos.inv_no', '=', 'invoice_headers.inv_no')
            ->leftJoin('invoice_ship_tos', 'invoice_ship_tos.inv_no', '=', 'invoice_headers.inv_no')
            ->leftJoin('invoice_sales_people', 'invoice_sales_people.inv_no', '=', 'invoice_headers.inv_no')
            ->leftJoin('invoice_taxes', 'invoice_taxes.inv_no', '=', 'invoice_headers.inv_no')
            ->select(
                'invoice_headers.inv_no',
                'invoice_headers.inv_purchase_ord_no',
                'invoice_headers.inv_order_no',
                'invoice_headers.inv_type',
                'invoice_headers.inv_date',
                'invoice_edis.inv_edi_po_no_cont as inv_edi_po_no_cont',
                'invoice_payments.inv_comment2 as inv_comment2',
                'invoice_bill_tos.inv_bill_to_name as inv_bill_to_name',
                'invoice_ship_tos.inv_ship_to_addr_1 as inv_ship_to_addr_1',
                'invoice_sales_people.inv_salesman_no1 as inv_salesman_no1',
                'invoice_taxes.inv_tax_code_1 as inv_tax_code_1',
            )
            ->addSelect(['id' => 'invoice_headers.id']);
    }

    public static function getRecordRouteKeyName(): string
    {
        return 'id';
    }

    public static function resolveRecordRouteBinding($key): ?\Illuminate\Database\Eloquent\Model
    {
        // Force qualification of the id column
        return static::getEloquentQuery()
            ->where('invoice_headers.id', $key)
            ->first();
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['invoice_headers.id']; // (if using global search...)
    }

    public static function getRelations(): array
    {
        return [
            InvoiceItemRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
            'view' => Pages\ViewInvoice::route('/{record}'),
        ];
    }
}
