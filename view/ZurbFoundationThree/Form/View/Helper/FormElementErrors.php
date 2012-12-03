<?php

namespace ZurbFoundationThree\Form\View\Helper;

use Traversable;
use Zend\Form\ElementInterface;
use Zend\Form\Exception;
use Zend\Form\View\Helper\AbstractHelper;
use Zend\Form\View\Helper\FormElementErrors as ZendFormElementErrors;

/**
 * @category   Zend
 * @package    Zend_Form
 * @subpackage View
 */
class FormElementErrors extends ZendFormElementErrors
{
    /**@+
     * @var string Templates for the open/close/separators for message tags
     */
    protected $messageCloseString     = '</small>';
    protected $messageOpenFormat      = '<small %s>';
    protected $messageSeparatorString = '</small><small %s>';
    /**@-*/

    /**
     * @var array Default attributes for the open format tag
     */
    protected $attributes = array('class' => 'error');

}
