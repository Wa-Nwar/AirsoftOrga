<?php

namespace App\Controller\Admin;

use App\Entity\AirsoftAsso;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;


class AirsoftAssoCrudController extends AbstractCrudController
{
    public const AIRSOFT_BASE_PATH = 'upload/images/airsoft';
    public const AIRSOFT_UPLOAD_DIR = 'public/upload/images/airsoft';

    public static function getEntityFqcn(): string
    {
        return AirsoftAsso::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnform(),
            TextField::new('name'),
            TextField::new('Adress'),
            TextField::new('region'),
            TextField::new('socialMedia'),
            TextEditorField::new('description'),
            ImageField::new('image')
                ->setBasePath(self::AIRSOFT_BASE_PATH)
                ->setUploadDir(self::AIRSOFT_UPLOAD_DIR),
            TextField::new('schedule'),
        ];
    }

}
