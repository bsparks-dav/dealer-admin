<?php

namespace App\Filament\Resources\InvoiceResource\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;

class InvoiceItemRelationManager extends RelationManager
{
    protected static string $relationship = 'invoiceItems'; // <-- this is important

}
