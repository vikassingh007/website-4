<?php

namespace Website\Controllers;

use Website\Constants\Registry;
use Website\Controller as WController;

/**
 * Class IndexController
 *
 * @package Website\Controllers
 *
 * @property \Phalcon\Registry $registry
 */
class IndexController extends WController
{
    public function indexAction()
    {
        $this->tag->setTitle(
            $this->locale->translate('high_performance_php_framework')
        );
        $this->registry->offsetSet(Registry::VIEW, 'index/index');
    }
}
