<?php

namespace App\Http\Livewire;

use LaravelViews\Views\TableView;
use App\Models\Categorys;
use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Facades\UI;
use LaravelViews\Views\Traits\WithAlerts;


class CategoriesTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Categorys::class;

    use WithAlerts;

    protected $paginate = 10;
    
    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return ['Name', 'Scope','Subcategory'];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(Categorys $model): array
    {
        return [
            UI::editable($model, 'category'),
            $model->scope,
            $model->subcategory
        ];
    }
    /**
     * Method fired by the `editable` component, it
     * gets the model instance and a key value array
     * with the modified
     */
    public function update(Categorys $model, $data)
    {
        $model->update(collect($data)->map(function ($value) {
            return strip_tags($value);
        })->toArray());
        $this->success();
    }

}
