<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Posts;
use App\PostField;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Layout\Content;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Str;

class PostsController extends AdminController
{
    protected $title = 'Posts';

    protected function grid() {
        $grid = new Grid(new Posts());
        $grid->disableExport();

        $grid->quickSearch('title');
        $grid->column('parent.title', __('Danh mục'));
        $grid->column('title', __('Tiêu đề'));
        $grid->column('picture', __('Hình ảnh'))->display(function ($img) {
            return "<img src='".url('storage/' . $img)."' height='100px' />";
        });
        $grid->created_at('created_at', __('Tạo lúc'))
             ->sortable()
             ->display(function ($created_at) {
                return date('d-m-Y h:i:s', strtotime($created_at));
            });

        return $grid;
    }

    protected function detail($id) {
        $show = new Show(Posts::findOrFail($id));
        $show->field('parent.parents_tree', __('Tiêu đề danh mục'));
        $show->field('title', __('Tiêu đề'));
        $show->field('keywords', __('Tags'));
        $show->field('picture', __('Hình ảnh'))->avatar()->image();
        $show->field('description', __('Mô tả'));

        return $show;
    }

    public function edit($id, Content $content) {
        return $content->body($this->form($id)->edit($id));
    }

    protected function form($id = null) {
        $form = new Form(new Posts());

        $menuModel = Category::class;
        $form->select('category_id', __('Danh mục'))
             ->options($menuModel::selectOptions())
             ->rules("required");
        $form->text('title', __('Tiêu đề'))->rules("required|string");
        $form->image('picture', __('Hình ảnh'))
             ->uniqueName()
             ->rules("required|image");
        $form->tags('keywords', __('Từ khóa'))->rules("required");
        $form->ckeditor('description', __('Mô tả'))->rules("required");
        $form->datetime('created_at', 'Tạo lúc')->rules("required");
        $form->datetime('updated_at', __('Cập nhật lúc'))->rules("required");

        $form->radio('type', 'Loại')
            ->options([
                0 => 'Bài viết',
                1 => 'Đơn hàng',
            ])->when(1, function (Form $form) {

                $form->currency('field.income', __('Thu nhập'))->rules("required");
                $form->text('field.work_place', __('Nơi làm việc'))->rules("required");
                $form->dateRange('field.interview', 'field.expired', 'Ngày')->rules("required");

            })->default('0');

        return $form;
    }
}
