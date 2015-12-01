<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 30/11/2015
 * Time: 10:14
 */

namespace Teamdev\GestockBundle\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * Pour dire que la classe  peut etre utilisé en annotation
 * @Annotation
 */
class ConstraintCheckUrl extends Constraint
{

    public $message = 'Le champs contient des liens non valides';


    /**
     * Spéfécifie le validateur de class. Ici c'est: ConstraintCheckUrlValidator
     * @return string
     */
    public function validatedBy(){
        return get_class($this).'Validator';
    }
}