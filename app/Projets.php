<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    protected $table ="projets";
    protected $fillable = ['titre', 'utl', 'image', 'tags', 'logiciels', 'date', 'mission', 'services', 'demarche', 'video', 'decouvrir'];

    // https://irando.co.id/articles/how-to-make-previous-next-links-in-laravel
    public function next() {
        return $this->where("id", ">", $this->id)->min('id');
    }
    public function previous() {
        return $this->where("id", "<", $this->id)->max('id');
    }
}
