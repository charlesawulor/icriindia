<?php

namespace App\Admin\Controllers;

use App\hiringpartner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HiringpartnerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'hiringpartner';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new hiringpartner());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('image1', __('Image1'));
        $grid->column('image2', __('Image2'));
        $grid->column('image3', __('Image3'));
        $grid->column('image4', __('Image4'));
        $grid->column('image5', __('Image5'));
        $grid->column('image6', __('Image6'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(hiringpartner::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('image1', __('Image1'));
        $show->field('image2', __('Image2'));
        $show->field('image3', __('Image3'));
        $show->field('image4', __('Image4'));
        $show->field('image5', __('Image5'));
        $show->field('image6', __('Image6'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new hiringpartner());

        $form->image('image', __('Image'));
        $form->text('image1', __('Image1'));
        $form->text('image2', __('Image2'));
        $form->text('image3', __('Image3'));
        $form->text('image4', __('Image4'));
        $form->text('image5', __('Image5'));
        $form->text('image6', __('Image6'));

        return $form;
    }
}
