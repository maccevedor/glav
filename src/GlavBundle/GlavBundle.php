<?php

namespace GlavBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GlavBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
