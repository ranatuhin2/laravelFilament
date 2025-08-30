<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditInvoice extends EditRecord
{
    protected static string $resource = InvoiceResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('invoice_number')->label('Invoice Number')->placeholder('Enter invoice number')->required(),
                DatePicker::make('date')->label('Date')->placeholder('Enter date')->required(),
                TextInput::make('amount')->label('Amount')->placeholder('Enter amount')->required(),
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Invoice has been updated successfully';
    }
}
