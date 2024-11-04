<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Models\Company;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        Section::make('Basic Information')
                            ->description('Enter your company\'s basic information')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Company Name')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255)
                                    ->minLength(2)
                                    ->regex('/^[\w\s\p{L}.,?!\/]+$/u')
                                    ->dehydrateStateUsing(fn ($state) => strip_tags($state))
                                    ->hint('Enter company name')
                                    ->columnSpan(1),

                                FileUpload::make('logo')
                                    ->label('Company Logo')
                                    ->directory('uploads/logos')
                                    ->image()
                                    ->imageEditor()
                                    ->imageEditorMode(2)
                                    ->imageEditorViewportWidth('1920')
                                    ->imageEditorViewportHeight('1080')
                                    ->maxSize(2048)
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/svg+xml'])
                                    ->deleteUploadedFileUsing(function (TemporaryUploadedFile $file) {
                                        if (Storage::exists($file->getRealPath())) {
                                            Storage::delete($file->getRealPath());
                                        }
                                    })
                                    ->required()
                                    ->hint('Supported formats: JPEG, PNG, SVG (max 2MB)')
                                    ->columnSpan(1),

                                Textarea::make('description')
                                    ->label('Company Description')
                                    ->required()
                                    ->maxLength(1000)
                                    ->minLength(10)
                                    ->dehydrateStateUsing(fn ($state) => strip_tags($state))
                                    ->hint('Brief description of your company')
                                    ->rows(4)
                                    ->columnSpan(2),

                                RichEditor::make('vision')
                                    ->label('Company Vision')
                                    ->required()
                                    ->maxLength(2000)
                                    ->minLength(10)
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'bulletList',
                                        'orderedList',
                                    ])
                                    ->hint('Company\'s vision statement')
                                    ->columnSpan(1),

                                RichEditor::make('mission')
                                    ->label('Company Mission')
                                    ->required()
                                    ->maxLength(2000)
                                    ->minLength(10)
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'bulletList',
                                        'orderedList',
                                    ])
                                    ->hint('Company\'s mission statement')
                                    ->columnSpan(1),
                            ])
                            ->columns(2),

                        Section::make('Structure Company')
                            ->description('Upload and describe your company structure')
                            ->schema([
                                FileUpload::make('img_structure_company')
                                    ->label('Image Company Structure')
                                    ->directory('uploads/structure')
                                    ->image()
                                    ->imageEditor()
                                    ->imageEditorMode(2)
                                    ->imageEditorViewportWidth('1920')
                                    ->imageEditorViewportHeight('1080')
                                    ->maxSize(2048)
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/svg+xml'])
                                    ->deleteUploadedFileUsing(function (TemporaryUploadedFile $file) {
                                        if (Storage::exists($file->getRealPath())) {
                                            Storage::delete($file->getRealPath());
                                        }
                                    })
                                    ->required()
                                    ->hint('Supported formats: JPEG, PNG, SVG (max 2MB)')
                                    ->columnSpan(2),

                                Textarea::make('description_structure_company')
                                    ->label('Structure Company Description')
                                    ->required()
                                    ->maxLength(1000)
                                    ->minLength(10)
                                    ->dehydrateStateUsing(fn ($state) => strip_tags($state))
                                    ->hint('Brief description of your company structure')
                                    ->rows(4)
                                    ->columnSpan(2)
                            ])
                            ->columns(2),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->contentGrid([
                'md' => 2,
                'lg' => 1,
            ])
            ->columns([
                Split::make([
                    Stack::make([
                        Tables\Columns\ImageColumn::make('logo')
                            ->label('Logo'),
                        Tables\Columns\TextColumn::make('name')
                            ->label('Company Name')
                            ->searchable()
                            ->sortable()
                            ->weight('bold')
                            ->size('lg'),
                        Tables\Columns\TextColumn::make('description')
                            ->label('Description')
                            ->limit(100)
                            ->searchable(),
                        Stack::make([
                            Tables\Columns\TextColumn::make('vision')
                                ->label('Vision')
                                ->html()
                                ->limit(150),
                            Tables\Columns\TextColumn::make('mission')
                                ->label('Mission')
                                ->html()
                                ->limit(150),
                        ])->visibleFrom('md'),
                    ]),
                ]),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->modalWidth('7xl'),
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make()
                //     ->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateIcon('heroicon-o-building-office')
            ->emptyStateHeading('No companies yet')
            ->emptyStateDescription('Add your first company to get started.')
            ->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->label('Add Company'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'view' => Pages\ViewCompany::route('/{record}'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
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