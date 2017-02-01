<?php

namespace App\Forms\Admin;

use App\Base\Forms\AdminForm;

class SlidesForm extends AdminForm
{
    public function buildForm()
    {
        $this
            ->add('language_id', 'choice', [
                'choices' => $this->data,
                'label' => trans('admin.fields.slide.language_id')
            ])
            ->add('title', 'text', [
                'label' => trans('admin.fields.slide.title')
            ])
            ->add('link', 'text', [
                'label' => trans('admin.fields.slide.link')
            ])
            ->add('description', 'textarea', [
                'label' => trans('admin.fields.slide.description')
            ])
            ->add('image', 'file', [
                'label' => trans('admin.fields.slide.image'),
                'attr' => ['class' => '']
            ]);
        $this->addButtons();
    }
}
