<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PosResource\Pages;
use App\Filament\Resources\PosResource\RelationManagers;
use App\Models\Pos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Fieldset;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PosResource extends Resource
{
    protected static ?string $model = Pos::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make()->schema([
                    Forms\Components\TextInput::make('nama')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('no_registrasi')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('jenis_pos')->options([
                        'Duga Air' =>  'Duga Air',
                        'Klimatologi' =>  'Klimatologi',
                        'Curah Hujan' => 'Curah Hujan'
                    ])
                        ->required(),
                    Forms\Components\FileUpload::make('foto')
                        ->required()->image()->disk('public')
                        ->columnSpan('full'),
                    Forms\Components\TextInput::make('utm_x')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('utm_y')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('koordinat_ls')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('koordinat_bt')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('das')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('desa')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('kecamatan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('kabupaten')
                        ->required()
                        ->maxLength(255),
                ])
                ->columns(4), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_pos'),
                Tables\Columns\ImageColumn::make('foto'),
                Tables\Columns\TextColumn::make('utm_x')
                    ->searchable(),
                Tables\Columns\TextColumn::make('utm_y')
                    ->searchable(),
                Tables\Columns\TextColumn::make('koordinat_ls')
                    ->searchable(),
                Tables\Columns\TextColumn::make('koordinat_bt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('das')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_registrasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('desa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kabupaten')
                    ->searchable(),
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
            'index' => Pages\ListPos::route('/'),
            'create' => Pages\CreatePos::route('/create'),
            'edit' => Pages\EditPos::route('/{record}/edit'),
        ];
    }
}
