<?php

namespace App\Admin\Controllers;

use App\phdcurriculummktautomgt;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class phdcurriculummktautomgtController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'phdcurriculummktautomgt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new phdcurriculummktautomgt());

        $grid->column('id', __('Id'));
        $grid->column('curriculum', __('Curriculum'));
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
        $show = new Show(phdcurriculummktautomgt::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('curriculum', __('Curriculum'));
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
        $form = new Form(new phdcurriculummktautomgt());

        $form->text('curriculum', __('Curriculum'));

        return $form;
    }
}
