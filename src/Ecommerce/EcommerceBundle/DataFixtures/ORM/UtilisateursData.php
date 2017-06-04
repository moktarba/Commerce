<?php
// src/Ecommerce/Ecommerce/DataFixtures/ORM/UtilisateursData.php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Ecommerce\EcommerceBundle\Entity\User;

class UtilisateursData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface,  OrderedFixtureInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($admin, 'admin');
        $admin->setPassword($password);
        $admin->setEmail("admin@ecommerce.fr");

        $utilisateur1 = new User();
        $utilisateur1->setUsername('utilisateur1');
        $utilisateur1->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($utilisateur1, 'utlisateur1');
        $utilisateur1->setPassword($password);
        $utilisateur1->setEmail("user1@ecommerce.fr");

        $utilisateur2 = new User();
        $utilisateur2->setUsername('utilisateur2');
        $utilisateur2->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($utilisateur2, 'utlisateur1');
        $utilisateur2->setPassword($password);
        $utilisateur2->setEmail("user2@ecommerce.fr");

        $utilisateur3 = new User();
        $utilisateur3->setUsername('utilisateur3');
        $utilisateur3->setSalt(md5(uniqid()));
        // the 'security.password_encoder' service requires Symfony 2.6 or higher
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($utilisateur3, 'utlisateur1');
        $utilisateur3->setPassword($password);
        $utilisateur3->setEmail("user3@ecommerce.fr");



        $manager->persist($admin);

        $manager->flush();

        $this->addReference('admin',$admin);
        $this->addReference("utilisateur1",$utilisateur1);
        $this->addReference("utilisateur2",$utilisateur2);
        $this->addReference("utilisateur3",$utilisateur3);

    }
    public function getOrder()
    {
        return 5;
    }
}
