<?php

namespace App\Filament\Pages;

use Filament\Pages\Auth\EditProfile;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Route;

class Showcase extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.showcase';

    public function compareRoutes()
    {
        return [EditProfile::getRouteName(), Route::get('filament.admin.auth.profile')->uri()];
    }

    // public function getUrlToEditProfile()
    // {
    //     return EditProfile::getUrl();
    // }
}
