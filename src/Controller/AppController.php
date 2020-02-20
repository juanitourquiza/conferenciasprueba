<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Conferencias;
use App\Entity\Tematicas;

//Libreria para cargar archivos .csv
use League\Csv\Reader;

class AppController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('app/index.html.twig');
    }


    /**
     * @Route("/subir", name="subir")
     */
    public function subir(Request $request)
    {

        if ($request->isMethod('POST')) {
            $file = $request->files->get('tematica');
            $file1 = $request->files->get('conferencia');

            if ($file <> "") {
                $file_name = $file->getClientOriginalName();
                $file->move(
                    $this->getParameter('directorio'),
                    $file_name
                );
            } else {
                $file_name = $file1->getClientOriginalName();
                $file1->move(
                    $this->getParameter('directorio'),
                    $file_name
                );
            }
        }


        //Se define ruta del servicio
        $ruta = $this->getParameter('directorio');
        //Lectura del archivo conferencias
        if ($file <> "") {
            //Lectura del archivo tematicas
            $csv1 = Reader::createFromPath($ruta . $file_name, 'r');
        } else {
            $csv = Reader::createFromPath($ruta . $file_name, 'r');
        }

        //Para utilizar cabeceras del documento, se puede trabajar con nombre ya no con posicion
        if ($file <> "") {
            $csv1->setHeaderOffset(0);
        } else {
            $csv->setHeaderOffset(0);
        }

        if ($file <> "") {
            $records1 = $csv1->getRecords();
        } else {
            $records = $csv->getRecords();
        }

        $em = $this->getDoctrine()->getManager();
        if ($file <> "") {
            $mensaje = 0;
        } else {
            $mensaje1 = 0;
        }

        if ($file <> "") {
            foreach ($records1 as $offset => $record) {
                $tematicas = new Tematicas;

                $repetido = $em->getRepository('App:Tematicas')->findOneBy(
                    array(
                        "nombre" => $record["nombre"]
                    )
                );
                //Control de Tematicas Repetidas
                if ($repetido === null) {
                    $tematicas->setNombre($record["nombre"]);
                    //Se debe crear un objeto de fecha para guardar                
                    $tematicas->setAlmuerzo(new \DateTime($record["almuerzo"]));
                    $tematicas->setHoraInicio(new \DateTime($record["hora_inicio"]));
                    $tematicas->setHoraFin(new \DateTime($record["hora_fin"]));
                    $em->persist($tematicas);
                    $em->flush();
                } else {
                    $mensaje = 1;
                }
            }
        } else {
            foreach ($records as $offset => $record) {
                $conferencias = new Conferencias;

                $repetido = $em->getRepository('App:Conferencias')->findOneBy(
                    array(
                        "nombre" => $record["nombre"]
                    )
                );

                //Control de Conferencias Repetidas
                if ($repetido === null) {

                    //$tematica = $this->getDoctrine()->getRepository('App:Tematicas')->find($record["tematicas"]);
                    $tematica = $em->getRepository('App:Tematicas')->findOneBy(
                        array(
                            "nombre" => $record["tematicas"]
                        )
                    );

                    $conferencias->setTematicas($tematica);
                    $conferencias->setNombre($record["nombre"]);
                    $conferencias->setDescripcion($record["descripcion"]);
                    $conferencias->setDuracion($record["duracion"]);
                    $em->persist($conferencias);
                    $em->flush();
                } else {
                    $mensaje1 = 1;
                }
            }
        }
        if ($file <> "") {
            if ($mensaje == 1) {
                echo "Existen Tematicas repetidas, que no se agregaron";
                echo "<br>";
            }
        } else {
            if ($mensaje1 == 1) {
                echo "Existen Conferencias repetidas, que no se agregaron";
                echo "<br>";
            }
        }

        echo "Se cargaron los archivos correctamente";


        return $this->render('app/index.html.twig');
    }


    /**
     * @Route("/distribucion/{id}", name="distribucion")
     */
    public function distribucionAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "select c from App:Conferencias c where c.tematicas=:tematicas";
        $query = $em->createQuery($dql);
        $query->setParameter('tematicas', $id);
        $conferencia = $query->getResult();

        return $this->render('app/distribucion.html.twig', [
            'conferencia' => $conferencia,
        ]);
    }
}
