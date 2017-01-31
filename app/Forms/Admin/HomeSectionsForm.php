<?php

namespace App\Forms\Admin;

use App\Base\Forms\AdminForm;

class HomeSectionsForm extends AdminForm
{
    public function buildForm()
    {
        $this
            ->add('language_id', 'choice', [
                'choices' => $this->data['languages'],
                'label' => trans('admin.fields.home_section.language_id')
            ])
            ->add('title', 'text', [
                'label' => trans('admin.fields.home_section.title')
            ])
            ->add('content', 'textarea', [
                'label' => trans('admin.fields.home_section.content')
            ]);
        $this->addButtons();
    }
}
