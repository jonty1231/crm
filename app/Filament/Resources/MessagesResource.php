<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessagesResource\Pages;
use App\Filament\Resources\MessagesResource\RelationManagers;
use App\Models\userMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;


class MessagesResource extends Resource
{
    protected static ?string $model = userMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name'),
                TextInput::make('email'),
                TextInput::make('message'),
                TextInput::make('number'),
                TextInput::make('Assigen'),
                TextInput::make('remark'),
                TextInput::make('branch_id'),
                

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
              
 
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('message'),
                TextColumn::make('number'),
                TextColumn::make('Assigen'),
                TextColumn::make('remark'),
                TextColumn::make('branch_id'),
                ToggleColumn::make('status'),



            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessages::route('/create'),
            'edit' => Pages\EditMessages::route('/{record}/edit'),
        ];
    }
}
