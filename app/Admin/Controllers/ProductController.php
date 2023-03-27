<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Product;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProductController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Product(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('sort');
            $grid->column('introduction');
            $grid->column('pic');
            $grid->column('name');
            $grid->column('cryptocurrencies');
            $grid->column('games');
            $grid->column('sports');
            $grid->column('overall');
            $grid->column('rating');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Product(), function (Show $show) {
            $show->field('id');
            $show->field('sort');
            $show->field('introduction');
            $show->field('pic');
            $show->field('name');
            $show->field('cryptocurrencies');
            $show->field('games');
            $show->field('sports');
            $show->field('overall');
            $show->field('rating');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Product(), function (Form $form) {
            $form->display('id');
            $form->text('sort');
            $form->text('introduction');
            $form->text('pic');
            $form->text('name');
            $form->text('cryptocurrencies');
            $form->text('games');
            $form->text('sports');
            $form->text('overall');
            $form->text('rating');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
