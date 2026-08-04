<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
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
                    Select::make('categories')
                        ->relationship('categories', "title")
                        ->multiple()
                        ->preload()
                        ->createOptionForm([
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
                        ])
                        ->required(),
                    RichEditor::make('description')
                        ->required()
                        ->columnSpanFull(),
                    FileUpload::make('image')
                        ->image()
                        ->required(),
                ])->columnSpanFull()->columns(2)->label('Article Details'),

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
