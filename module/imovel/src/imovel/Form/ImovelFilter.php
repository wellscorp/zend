<?php
/**
 * Created by PhpStorm.
 * User: Welton
 * Date: 21/11/2014
 * Time: 18:33
 */

namespace imovel\Form;

use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class ImovelFilter extends InputFilter {

    public function __construct(){

        $nome= new Input('nome');
        $nome->setRequired(true)
                ->getFilterChain()
                ->attach(new StringTrim())
                ->attach(new StripTags());
        $nome->getValidatorChain()->attach(new NotEmpty());
        $this->add($nome);

        $senha= new Input('senha');
        $senha->setRequired(true)
            ->getFilterChain()
            ->attach(new StringTrim())
            ->attach(new StripTags());
        $senha->getValidatorChain()->attach(new NotEmpty());
        $this->add($senha);
    }


} 