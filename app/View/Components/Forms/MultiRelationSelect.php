<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class MultiRelationSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        /**
         * Collection of model realtions
         */
        public Collection|array $relationItems,
        /**
         * Name of select tag
         */
        public string $tagName,
         /**
         * Model instance
         */
        public ?Model $model = null,
        /**
         * Attribute of model that is displayed in select 
         */
        public string $optionDisplay = 'title',
        /**
         * Name of relations model
         */
        public string $relationName = '',
        /**
         * Id of select tag
         */
        public string $tagId = '',
        
    ) {
        if (!$this->relationName) {
            $this->relationName = $this->tagName;
        }
    }

    public function selected($relationItem)
    {
        return $this->model?->{$this->relationName}->id === $relationItem->id;     
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.multi-relation-select');
    }
}
