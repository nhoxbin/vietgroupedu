<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Posts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class PostsController extends AdminController
{
    protected $title = 'Posts';

    protected function grid() {
        $grid = new Grid(new Posts());

        $grid->column('id', __('Id'));
        // $grid->column('category_id', __('Category id'));
        $grid->column('title', __('Tiêu đề'));
        $grid->column('picture', __('Hình ảnh'))->display(function ($img) {
            return "<img src='".url('storage/' . $img)."' height='100px' />";
        });
        $grid->column('created_at', __('Tạo lúc'))->display(function ($created_at) {
            return date('d-m-Y h:i:s', strtotime($created_at));
        });

        return $grid;
    }

    protected function detail($id) {
        $show = new Show(Posts::findOrFail($id));

        $menuModel = Category::class;
        $show->category('Danh mục', function($category) {
            $category->title();
        });
        $show->field('id', __('Id bài viết'));
        $show->field('title', __('Title'));
        $show->field('im')->avatar()->image();
        $show->field('slug', __('Slug'));
        $show->date('created_at', __('Created at'));
        $show->date('updated_at', __('Updated at'));

        return $show;
    }

    protected function form() {
        $form = new Form(new Posts());

        $menuModel = Category::class;
        $form->select('category_id', __('Danh mục'))->options($menuModel::selectOptions())->rules("required");
        $form->text('title', __('Tiêu đề'))->rules("required|string");
        $form->image('picture', __('Hình ảnh'))->uniqueName()->rules("required|image");
        $form->currency('income', __('Thu nhập'))->rules("required");
        $form->date('interview', __('Ngày phỏng vấn'))->rules("required|date");
        $form->text('work_place', __('Nơi làm việc'))->rules("required|string");
        $form->ckeditor('description')->rules("required");

        return $form;
    }
}
