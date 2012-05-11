<?php

namespace Kunstmaan\FormBundle\Form;
use Kunstmaan\FormBundle\Entity\FormSubmissionFieldTypes\StringFormSubmissionField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * StringFormSubmissionType
 */
class StringFormSubmissionType extends AbstractType
{

    private $label;

    /**
     * @param string $label
     */
    public function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('value', 'text', array('data_class' => 'Kunstmaan\FormBundle\Entity\FormSubmissionFieldTypes\StringFormSubmissionField', 'label' => $this->label));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kunstmaan_formbundle_stringformsubmissiontype';
    }
}

