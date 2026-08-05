<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                ->debounce(2000)
                ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state)))
                ->required(),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->required(),
                TextInput::make('meta_title')
                    ->default(null),
                Textarea::make('meta_description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('meta_keywords')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
