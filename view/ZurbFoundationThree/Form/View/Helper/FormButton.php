<?php

namespace ZurbFoundationThree\Form\View\Helper;

use Zend\Form\ElementInterface;
use Zend\Form\Exception;
use Zend\Form\View\Helper\FormInput;

use Zend\Form\View\Helper\FormButton as ZendFormButton;

/**
 * @category   Zend
 * @package    Zend_Form
 * @subpackage View
 */
class FormButton extends ZendFormButton
{
    /**
     * Invoke helper as functor
     *
     * Proxies to {@link render()}.
     *
     * @param  ElementInterface|null $element
     * @param  null|string $buttonContent
     * @return string|FormButton
     */
    public function __invoke(ElementInterface $element = null, $buttonContent = null)
    {
        if (!$element) {
            return $this;
        }
        
        $extra = explode( ' ', $element->getAttribute('class') );
        $extra[] = 'button';

        if ( $this->getType($element) == 'submit' )
            $extra[] = 'success';
        else
        if ( $this->getType($element) == 'reset' )
            $extra[] = 'secondary';

        $element->setAttribute('class', implode(' ', array_unique( $extra ) ) );

        return $this->render($element, $buttonContent);
    }

}
