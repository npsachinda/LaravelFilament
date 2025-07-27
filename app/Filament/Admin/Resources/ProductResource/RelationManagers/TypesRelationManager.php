<?php

namespace App\Filament\Admin\Resources\ProductResource\RelationManagers;

use App\Models\Type;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class TypesRelationManager extends RelationManager
{
    protected static string $relationship = 'types';

    protected static ?string $title = 'Product Types';

    protected static ?string $recordTitleAttribute = 'name';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id')
                    ->label('Type')
                    ->options(Type::pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\TextInput::make('api_unique_number')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pivot.api_unique_number')
                    ->label('API Unique Number')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->preloadRecordSelect()
                    ->form(fn (Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect(),
                        Forms\Components\TextInput::make('api_unique_number')
                            ->required()
                            ->maxLength(255),
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->form(fn (Tables\Actions\EditAction $action): array => [
                        Forms\Components\TextInput::make('api_unique_number')
                            ->required()
                            ->maxLength(255),
                    ]),
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ]);
    }
} 