<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Form;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Form::component('fText', 'components.forms.text', ['name', 'label', 'value' => null, 'attributes' => []]);
        Form::component('fHTML', 'components.forms.html', ['name', 'label', 'value' => null, 'attributes' => []]);
        Form::component('fEmail', 'components.forms.email', ['name', 'label','value' => null, 'attributes' => []]);
        Form::component('fPassword', 'components.forms.password', ['name','label', 'value' => null, 'attributes' => []]);
        Form::component('fDate', 'components.forms.date', ['name','label', 'value' => null, 'attributes' => []]);
        Form::component('fSex', 'components.forms.sex', ['name', 'value' => null, 'attributes' => []]);
        Form::component('fSelect', 'components.forms.select', ['name','label', '_datas','_item', 'value' => null, 'attributes' => []]);
        Form::component('fImage', 'components.forms.image', ['name','label', 'value' => null, 'attributes' => []]);
        Form::component('fNumber', 'components.forms.number', ['name','label', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
