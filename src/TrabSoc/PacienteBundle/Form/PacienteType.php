<?php
namespace TrabSoc\PacienteBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PacienteType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('noExpediente')
				->add('curp')
				->add('paterno')
				->add('materno')
				->add('nombre')
				->add('fechaNac')
				->add('sexo')
				->add('tipoSanguineo')
				->add('ingreso', new IngresoType());
	}

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
    	$resolver->setDefaults(array(
    		'data_class' => 'TrabSoc\PacienteBundle\Entity\Paciente',
    	));
    }

	public function getName()
	{
		return 'paciente';
	}
}
