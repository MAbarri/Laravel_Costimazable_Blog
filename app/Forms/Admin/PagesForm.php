<?php

namespace App\Forms\Admin;

use App\Base\Forms\AdminForm;

class PagesForm extends AdminForm
{
    public function buildForm()
    {
        $this
            ->add('language_id', 'choice', [
                'choices' => $this->data,
                'label' => trans('admin.fields.page.language_id')
            ])
            ->add('title', 'text', [
                'label' => trans('admin.fields.page.title')
            ])
            ->add('active', 'checkbox', [
              'label_show'=> false,
              'attr' => [
                    'data-toggle' => 'toggle',
                    'data-on' => trans('admin.fields.page.active'),
                    'data-off' => trans('admin.fields.page.notActive')]
            ])
            ->add('isHTMLPage', 'checkbox', [
              'label_show'=> false,
              'attr' => [
                    'data-toggle' => 'toggle',
                    'data-on' => trans('admin.fields.page.isHTMLPage'),
                    'data-off' => trans('admin.fields.page.isNotHTMLPage')]
            ])
            ->add('content', 'textarea', [
                'label' => trans('admin.fields.page.content')
            ])
            ->add('description', 'text', [
                'label' => trans('admin.fields.page.description')
            ]);
        $this->addButtons();
    }
}
