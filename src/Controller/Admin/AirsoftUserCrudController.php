<?php

namespace App\Controller\Admin;

use App\Entity\AirsoftUser;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AirsoftUserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AirsoftUser::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
