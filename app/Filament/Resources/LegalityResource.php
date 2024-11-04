<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LegalityResource\Pages;
use App\Filament\Resources\LegalityResource\RelationManagers;
use App\Models\Legality;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LegalityResource extends Resource
{
    protected static ?string $model = Legality::class;

    protected static ?string $navigationIcon = 'heroicon-o-scale';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Legality Name')
                    ->required()
                    ->maxLength(255)
                    ->minLength(2)
                    ->autocomplete('off')
                    ->autofocus()
                    ->placeholder('Enter legality name')
                    ->hint('Enter legality name')
                    ->hintIcon('heroicon-m-information-circle')
                    ->prefixIcon('heroicon-m-bookmark'),

                DateTimePicker::make('expiration_date')
                    ->label('Expiration Date')
                    ->required()
                    ->native(false)
                    ->displayFormat('Y-m-d')
                    ->timezone('Asia/Jakarta')
                    ->default(now()->addYear())
                    ->closeOnDateSelection()
                    ->prefixIcon('heroicon-m-calendar')
                    ->hint('Select expiration date and time')
                    ->hintIcon('heroicon-m-information-circle')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('expiration_date')
                    ->date('m/Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLegalities::route('/'),
            'create' => Pages\CreateLegality::route('/create'),
            'view' => Pages\ViewLegality::route('/{record}'),
            'edit' => Pages\EditLegality::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
