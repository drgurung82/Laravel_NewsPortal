<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make([
                    TextInput::make('title')
                        ->debounce(2000)
                        ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state)))
                        ->required(),
                    TextInput::make('slug')
                        ->required(),
                ])->columnSpanFull()->columns(2)->label('Category Details'),

                Section::make([
                    TextInput::make('meta_title')
                        ->default(null),
                    Textarea::make('meta_description')
                        ->default(null)
                        ->columnSpanFull(),
                    Textarea::make('meta_keywords')
                        ->default(null)
                        ->columnSpanFull(),
                ])->columnSpanFull()->label('SEO Details'),
            ]);
    }
}
