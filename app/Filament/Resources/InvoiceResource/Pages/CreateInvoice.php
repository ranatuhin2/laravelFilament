<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use App\Models\Company;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateInvoice extends CreateRecord
{
    protected static string $resource = InvoiceResource::class;

    public Company $company;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('invoice_number')->label('Invoice Number')->placeholder('Enter invoice number')->required(),
                DatePicker::make('date')->label('Date')->placeholder('Enter date')->required(),
                TextInput::make('amount')->label('Amount')->placeholder('Enter amount')->required(),
            ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['company_id'] = $this->company->id;
        return $data;
    }
}
