<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpeechResource\Pages;
use App\Filament\Resources\SpeechResource\RelationManagers;
use App\Models\Speech;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Image;


class SpeechResource extends Resource
{
    protected static ?string $model = Speech::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('designation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->disk('public')
                    ->directory('speech-images')
                    ->required(),

                Forms\Components\Textarea::make('speech')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('designation')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('speech')
                    ->limit(50),
                 Tables\Columns\ImageColumn::make('image')
                    ->disk('public'),


                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSpeeches::route('/'),
            'create' => Pages\CreateSpeech::route('/create'),
            'edit' => Pages\EditSpeech::route('/{record}/edit'),
        ];
    }
}
