<?php

namespace TrabSoc\PacienteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TrabSoc\PacienteBundle\Entity\Paciente;
use TrabSoc\PacienteBundle\Entity\Ingreso;
use TrabSoc\PacienteBundle\Form\PacienteType;
use TrabSoc\PacienteBundle\Form\IngresoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PacienteBundle:Default:index.html.twig');
    }

	public function formularioAction(Request $request)
	{
		//$peticion = $this->getRequest();		
        
        $paciente = new paciente();
        $ingreso = new Ingreso();
        $paciente->setIngreso($ingreso);        
        //$em = $this->getDoctrine()->getManager();        

        $form = $this->createForm(new PacienteType(), $paciente);

        if ($request->getMethod() == 'POST')
        {        	
        	$form->bind($this->getRequest());
			if($form->isValid())
			{				
				//$ingreso=$form->getData();
				$em = $this->getDoctrine()->getManager();
				$em->persist($paciente);
				$em->persist($ingreso);
				$em->flush();

			}        	
			var_dump($paciente->getErrorsAsString());die;
        }        
        //$form->handleRequest($peticion);
		

		/*- Obtenemos el request que contendrá los datos
		$request = $this->getRequest();		
		$ingreso = new Ingreso();
		$form = $this->createForm(new IngresoType(), $ingreso);

		//- En caso de que el request haya sido invocado por POST
		//  procesaremos el formulario		
		
		$form->handleRequest($request);*/
		
			//- Pasamos el request el método bindRequest() del objeto
			//- formulario el cual obtiene los datos del formulario
			//- y los carga dentro del objeto Article que está contenido
			//- también dentro del objeto Type

			//$form->bind($this->getRequest($request);
		

			//- Con esto nuestro formulario ya es capaz de decirnos si 
			//- los dato son válidos o no y en caso de ser así

		/*if($form->isValid())
		{
			//$ingreso=$form->getData();
			$em = $this->getDoctrine()->getManager();
			$em->persist($ingreso);
			//$em->persist($ingreso->getPaciente());
			$em->flush();
				//- Procesamos los datos que estan automáticamente
				//- cargados dentro de nuestra variable $articulo, ya sea
				//- grabándolos en la base de datos, enviando un email, etc
				//- Finalmente, al finalizar el procesamiento, siempre es
				//- importante realizar una redirección  para no tener el
				//- problema de que al intentar actualizar el navegador
				//- nos dice que los de deben volver a reenviar. En
				//- este caso iremos a la página del listado de artículos
		//	return $this->redirect($this->generateUrl('paciente_homepage'));
		}*/


		return $this->render('PacienteBundle:Default:new.html.twig', array(
			'form' => $form->createView(),
		));
	}    
}
