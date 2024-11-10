// In app\Providers\AppServiceProvider.php -->>
public function boot(): void
    {
        Blade::component('modal', Modal::class);
    }
