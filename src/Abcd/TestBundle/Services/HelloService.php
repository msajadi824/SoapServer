<?php
namespace Abcd\TestBundle\Services;

class HelloService
{
//    private $mailer;
//
//    public function __construct(\Swift_Mailer $mailer)
//    {
//        $this->mailer = $mailer;
//    }

    public function hello($name)
    {
        return 'Hello, '.$name;
    }
}