<?php

namespace App\AdminBundle\EntitySearch;

class Search {

    /**
     * var string|null
     */
    private $search;

    /**
     * Récupérer la recherche
     */ 
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Définir la recherche
     *
     * @return  self
     */ 
    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }


}