<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo Araujo
 * Date: 16/03/18
 * Time: 18:16
 */

// src/ApplicationAspectKernel.php

namespace Aspect;

use Go\Core\AspectKernel;
use Go\Core\AspectContainer;

/**
 * Application Aspect Kernel
 */
class ApplicationAspectKernel extends AspectKernel
{

    /**
     * Configure an AspectContainer with advisors, aspects and pointcuts
     *
     * @param AspectContainer $container
     *
     * @return void
     */
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new ProfiladorAspect());
    }
}