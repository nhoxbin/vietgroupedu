<?php

namespace App\Admin\Controllers;

use App\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Form; // Create Form
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Tree;
use Illuminate\Support\Str;

class CategoryController extends AdminController
{
    use ModelForm;

    protected $title = 'Categories';

    public function index(Content $content) {
        return $content
            ->title('Danh mục')
            ->description('Chi tiết...')
            ->row(function (Row $row) {

                $row->column(6, $this->treeView()->render());

                $row->column(6, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form(); // New Form
                    $form->action(admin_url('categories'));
                    $menuModel = Category::class;
                    $form->select('parent_id', trans('admin.parent_id'))->options($menuModel::selectOptions());
                    $form->text('title', __('Tên danh mục'));
                    $form->hidden('slug')->default('slug')->rules('unique:categories');
                    $form->setWidth(9, 3);
                    $column->append(new Box(trans('admin.new'), $form));
                });
            });
    }

    protected function treeView() {
        $menuModel = Category::class;

        $tree = new Tree(new $menuModel());

        $tree->disableCreate();

        $tree->branch(function ($branch) {
            // <i class='fa {$branch['icon']}'></i>
            $payload = "&nbsp;<strong>{$branch['title']}</strong>";

            if (!isset($branch['children'])) {
                $uri = url($branch['slug']);
                $payload .= "&nbsp;&nbsp;&nbsp;<a href=\"$uri\" class=\"dd-nodrag\">$uri</a>";
            }

            return $payload;
        });

        return $tree;
    }

    protected function detail($id) {
        $show = new Show(Category::findOrFail($id));

        $show->field('title', __('Tên'));
        $show->field('slug', __('Slug'));

        return $show;
    }

    public function form() {
        $cateModel = Category::class;
        $form = new Form(new $cateModel());
        $form->select('parent_id', 'Danh mục cha')->options($cateModel::selectOptions());
        $form->text('title', 'Tiêu đề')->rules('required');
        $form->hidden('slug')->default('slug')->rules('unique:categories');

        return $form;
    }
}
