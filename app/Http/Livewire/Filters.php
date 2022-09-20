<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class Filters extends Component
{
    public $category;
    public $activeFilters = [];
    public $jobs = [];
    public string $search = '';

    

    public function render()
    {
        $words = '%' . $this->search . '%';
        return view('livewire.filters', [
            'articles' =>(strlen($this->search)> 2)
            ? Article::where('title', 'like', $words)->get()
            : Article::All()
        ]);



        $this->activeFilters = array_filter($this->activeFilters, function ($val){
            return $val;
        });

        return view('livewire.filters', [
            'articles' =>empty($this->activeFilters)               //si activeFilters est vide alors
            ? Article::All()                                        //afficher tous les articles    
            : Article::whereIn('category_id', array_keys($this->activeFilters))->get()    //sinon afficher les articles dont l'id se trouve dans activeFilters
        ]);

    }
}
