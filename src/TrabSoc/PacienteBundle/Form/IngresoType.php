<?php
namespace TrabSoc\PacienteBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class IngresoType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
			//$builder->add('paciente', new PacienteType());
			$builder->add('folioIngreso')
				->add('fechaEntrada')		
				->add('viaAdmision')
				->add('hospitalReferencia')
				->add('noReferencia')
				->add('medicoReferancia')
				->add('dxcie10')
				->add('edoIngreso')
				->add('edoSalud')				
				->add('servicio')
				->add('especialidad')
				->add('area')
				->add('cama');



		/*$builder->add(
					$builder->create('paciente','form', array('by_reference' => false))
						->add('noExpediente', 'number', array('attr' => array(
							'placeholder' => 'AR.AN.MN.DN.HC',
							'pattern'     => '^[0-9]{10,10}$'
						)))
						->add('curp')
						->add('paterno')
						->add('materno')
						->add('nombre')
						->add('fechaNac','birthday')
						->add('sexo','choice')
						->add('sexo', 'choice', array(
						    'choices' => array(
						        'M' => 'Masculino',
						        'F' => 'Femenino'
						    ),
						    'required'    => true,
						    'empty_value' => 'Selecciona un genero',
						    'empty_data'  => null
						))						
						->add('clues')
					)
				->add('folioIngreso')
				->add('fechaEntrada')		
				->add('viaAdmision')
				->add('hospitalReferencia')
				->add('noReferencia')
				->add('medicoReferancia')
				->add('dxcie10')
				->add('edoIngreso')
				->add('edoSalud')				
				->add('servicio')
				->add('especialidad')
				->add('area')
				->add('cama');*/
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'TrabSoc\PacienteBundle\Entity\Ingreso',					
		));
	}

	public function getName()
	{
		return 'ingreso_form';
	}
}