<?php

namespace App\Admin\Controllers;

use App\course;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class courseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'course';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new course());

        $grid->column('id', __('Id'));
        $grid->column('course_title', __('Course title'));
        $grid->column('banner_image', __('Banner image'));
        $grid->column('image', __('Image'));
        $grid->column('about_course', __('About course'));
        $grid->column('msc_course', __('Msc course'));
        $grid->column('msc_eligibility', __('Msc eligibility'));
        $grid->column('msc_curriculum', __('Msc curriculum'));
        $grid->column('msc_career_prospect', __('Msc career prospect'));
        $grid->column('msc_campus', __('Msc campus'));
        $grid->column('bsc_course', __('Bsc course'));
        $grid->column('bsc_eligibility', __('Bsc eligibility'));
        $grid->column('bsc_curriculum', __('Bsc curriculum'));
        $grid->column('bsc_career_prospect', __('Bsc career prospect'));
        $grid->column('bsc_campus', __('Bsc campus'));
        $grid->column('pgdiploma_course', __('Pgdiploma course'));
        $grid->column('pgdiploma_eligibility', __('Pgdiploma eligibility'));
        $grid->column('pgdiploma_curriculum', __('Pgdiploma curriculum'));
        $grid->column('pgdiploma_career_prospect', __('Pgdiploma career prospect'));
        $grid->column('pgdiploma_campus', __('Pgdiploma campus'));
        $grid->column('phd_course', __('Phd course'));
        $grid->column('phd_eligibility', __('Phd eligibility'));
        $grid->column('phd_curriculum', __('Phd curriculum'));
        $grid->column('phd_career_prospect', __('Phd career prospect'));
        $grid->column('phd_campus', __('Phd campus'));
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
        $show = new Show(course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('course_title', __('Course title'));
        $show->field('banner_image', __('Banner image'));
        $show->field('image', __('Image'));
        $show->field('about_course', __('About course'));
        $show->field('msc_course', __('Msc course'));
        $show->field('msc_eligibility', __('Msc eligibility'));
        $show->field('msc_curriculum', __('Msc curriculum'));
        $show->field('msc_career_prospect', __('Msc career prospect'));
        $show->field('msc_campus', __('Msc campus'));
        $show->field('bsc_course', __('Bsc course'));
        $show->field('bsc_eligibility', __('Bsc eligibility'));
        $show->field('bsc_curriculum', __('Bsc curriculum'));
        $show->field('bsc_career_prospect', __('Bsc career prospect'));
        $show->field('bsc_campus', __('Bsc campus'));
        $show->field('pgdiploma_course', __('Pgdiploma course'));
        $show->field('pgdiploma_eligibility', __('Pgdiploma eligibility'));
        $show->field('pgdiploma_curriculum', __('Pgdiploma curriculum'));
        $show->field('pgdiploma_career_prospect', __('Pgdiploma career prospect'));
        $show->field('pgdiploma_campus', __('Pgdiploma campus'));
        $show->field('phd_course', __('Phd course'));
        $show->field('phd_eligibility', __('Phd eligibility'));
        $show->field('phd_curriculum', __('Phd curriculum'));
        $show->field('phd_career_prospect', __('Phd career prospect'));
        $show->field('phd_campus', __('Phd campus'));
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
        $form = new Form(new course());

        $form->text('course_title', __('Course title'));
        $form->image('banner_image', __('Banner image'));
        $form->image('image', __('Image'));
        $form->text('about_course', __('About course'));
        $form->text('msc_course', __('Msc course'));
        $form->text('msc_eligibility', __('Msc eligibility'));
        $form->text('msc_curriculum', __('Msc curriculum'));
        $form->text('msc_career_prospect', __('Msc career prospect'));
        $form->text('msc_campus', __('Msc campus'));
        $form->text('bsc_course', __('Bsc course'));
        $form->text('bsc_eligibility', __('Bsc eligibility'));
        $form->text('bsc_curriculum', __('Bsc curriculum'));
        $form->text('bsc_career_prospect', __('Bsc career prospect'));
        $form->text('bsc_campus', __('Bsc campus'));
        $form->text('pgdiploma_course', __('Pgdiploma course'));
        $form->text('pgdiploma_eligibility', __('Pgdiploma eligibility'));
        $form->text('pgdiploma_curriculum', __('Pgdiploma curriculum'));
        $form->text('pgdiploma_career_prospect', __('Pgdiploma career prospect'));
        $form->text('pgdiploma_campus', __('Pgdiploma campus'));
        $form->text('phd_course', __('Phd course'));
        $form->text('phd_eligibility', __('Phd eligibility'));
        $form->text('phd_curriculum', __('Phd curriculum'));
        $form->text('phd_career_prospect', __('Phd career prospect'));
        $form->text('phd_campus', __('Phd campus'));

        return $form;
    }
}
