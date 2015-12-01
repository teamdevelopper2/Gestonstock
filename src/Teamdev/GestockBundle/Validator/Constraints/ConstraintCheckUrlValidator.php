<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 30/11/2015
 * Time: 10:15
 */

namespace Teamdev\GestockBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


class ConstraintCheckUrlValidator extends ConstraintValidator
{

    /**
     * @param $value : element à varifier
     * @param Constraint $constraint: contrainte
     */
    public function validate($value, Constraint $constraint){
        if($value == null)
            $this->context->buildViolation($constraint->message)
                ->setParameter('%string%', $value)
                ->addViolation();

    }
}