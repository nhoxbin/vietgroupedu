<?php

namespace App\Admin\Extensions\Form;

use Encore\Admin\Form\Field;

class CKEditor extends Field
{
    public static $js = [
        '/vendor/laravel-admin-ext/ckeditor/ckeditor.js',
        '/vendor/laravel-admin-ext/ckeditor/adapters/jquery.js',
    ];

    protected $view = 'admin.ckeditor';

    public function render()
    {
        $this->script = "$('textarea.{$this->getElementClass()[0]}').ckeditor();";

        return parent::render();
    }
}
