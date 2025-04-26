<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Interfaces\UtilisateurRepositoryInterface::class,
            \App\Repositories\UtilisateurRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\AgricoleRepositoryInterface::class,
            \App\Repositories\AgricoleRepository::class // Your concrete implementation
        );

        $this->app->bind(
            \App\Repositories\Interfaces\VeterinaireRepositoryInterface::class,
            \App\Repositories\VeterinaireRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\TagRepositoryInterface::class,
            \App\Repositories\TagRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\RendezVousRepositoryInterface::class,
            \App\Repositories\RendezVousRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\ProduitRepositoryInterface::class,
            \App\Repositories\ProduitRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\DocumentRepositoryInterface::class,
            \App\Repositories\DocumentRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\CommentaireRepositoryInterface::class,
            \App\Repositories\CommentaireRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\CommandeRepositoryInterface::class,
            \App\Repositories\CommandeRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\ClientRepositoryInterface::class,
            \App\Repositories\ClientRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\CategorieRepositoryInterface::class,
            \App\Repositories\CategorieRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\ArticleRepositoryInterface::class,
            \App\Repositories\ArticleRepository::class
        );

        $this->app->bind(
            \App\Repositories\Interfaces\AdminRepositoryInterface::class,
            \App\Repositories\AdminRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
