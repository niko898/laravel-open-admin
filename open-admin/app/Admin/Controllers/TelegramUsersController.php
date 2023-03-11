<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\TelegramUsers;

class TelegramUsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TelegramUsers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TelegramUsers());

        $grid->column('id', __('Id'));
        $grid->column('telegram_user_id', __('Telegram user id'));
        $grid->column('name', __('Name'));
        $grid->column('telegram_id', __('Telegram id'));
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
        $show = new Show(TelegramUsers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('telegram_user_id', __('Telegram user id'));
        $show->field('name', __('Name'));
        $show->field('telegram_id', __('Telegram id'));
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
        $form = new Form(new TelegramUsers());

        $form->number('telegram_user_id', __('Telegram user id'));
        $form->text('name', __('Name'));
        $form->text('telegram_id', __('Telegram id'));

        return $form;
    }
}
