<?php

namespace App\Forms\Admin;

use App\Base\Forms\AdminForm;

class SettingsForm extends AdminForm
{
    public function buildForm()
    {
        $this
            ->add('owner', 'text', [
                'label' => trans('admin.fields.setting.owner')
            ])
            ->add('phoneNumber', 'text', [
                'label' => trans('admin.fields.setting.phoneNumber')
            ])
            ->add('email', 'text', [
                'label' => trans('admin.fields.setting.email')
            ])
            ->add('facebook', 'text', [
                'label' => trans('admin.fields.setting.facebook')
            ])
            ->add('twitter', 'text', [
                'label' => trans('admin.fields.setting.twitter')
            ])
            ->add('address', 'text', [
                'label' => trans('admin.fields.setting.address')
            ])
            ->add('analytics_id', 'text', [
                'label' => trans('admin.fields.setting.analytics_id')
            ])
            ->add('disqus_shortname', 'text', [
                'label' => trans('admin.fields.setting.disqus_shortname')
            ])
            ->add('logo', 'file', [
                'label' => trans('admin.fields.setting.logo'),
                'attr' => ['class' => '']
            ]);
        $this->addButtons();
    }
}
