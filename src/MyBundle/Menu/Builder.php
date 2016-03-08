<?php
namespace MyBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('Menu', ['extras' => ['menu_type' => 'topbar']]);
        $menu->addChild('ProntoPro Test', array('route' => 'homepage'));
        $menu->addChild('Prodotti', array('route' => 'product_list'));
        $menu['Prodotti']->addChild('Lista prodotti', array('route' => 'product_list'));
        $menu['Prodotti']->addChild('Crea nuovo', array('route' => 'product_create'));
        $menu->addChild('', array('extras' => ['form_append' => strip_tags($_GET['q'])]));
        
        return $menu;
    }
}