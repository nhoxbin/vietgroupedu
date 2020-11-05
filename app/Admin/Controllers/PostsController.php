<?php

namespace App\Admin\Controllers;

use App\Category;
use App\Posts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Layout\Content;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostsController extends AdminController
{
    protected $title = 'Posts';

    protected function grid() {
        $grid = new Grid(new Posts());
        $grid->disableExport();

        $grid->column('parent.title', 'Mục');
        $grid->fields('Tiêu đề')->display(function($field) {
            $fields = array_map(function ($f) {
                return $f['title'];
            }, $field);
            return join('<br />', $fields);
        });
        $grid->created_at('created_at', __('Tạo lúc'))
             ->sortable()
             ->display(function ($created_at) {
                return date('d-m-Y h:i:s', strtotime($created_at));
            });
        $grid->model()->orderBy('created_at', 'desc');

        return $grid;
    }

    protected function detail($id) {
        $show = new Show(Posts::findOrFail($id));
        $show->field('parent.parents_tree', __('Tiêu đề danh mục'));

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
        $form->hasMany('fields', 'Bài viết', function (Form\NestedForm $form) {
            
            $form->text('title', __('Tiêu đề'));
            $form->tags('keywords', __('Từ khóa'));
            $form->radio('language', __('Ngôn ngữ'))
                 ->options(['vi' => 'Tiếng Việt', 'en' => 'Tiếng Anh', 'ja' => 'Tiếng Nhật'])
                 ->default('vi')
                 ->rules("required|in:vi,en,ja");
            $form->ckeditor('description', __('Mô tả'));
            $form->image('picture', __('Hình ảnh'))
                 ->uniqueName();
        });
        
        $form->datetime('created_at', 'Tạo lúc')->rules("required");
        $form->datetime('updated_at', __('Cập nhật lúc'))->rules("required");
        $form->radio('type', 'Loại')
            ->options([
                0 => 'Bài viết',
                1 => 'Đơn hàng',
            ])->when(1, function (Form $form) {

                $form->currency('order.income', __('Thu nhập'))->rules("required");
                $form->text('order.work_place', __('Nơi làm việc'))->rules("required");
                $form->dateRange('order.interview', 'order.expired', 'Ngày')->rules("required");

            })->default('0');

        return $form;
    }
}
