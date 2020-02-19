<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
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

        //We are going to insert some data into the users table
        // $sth = $dbh->prepare(
        //     "INSERT INTO users (firstname, lastname, email) VALUES (:firstname, :lastname, :email)"
        // );
        $ruta = $this->getParameter('directorio');
        //echo $ruta;
        //exit;
        $csv = Reader::createFromPath($ruta . '/conferencias.csv', 'r');
        // $csv->setHeaderOffset(0);
        // $header_offset = $csv->getHeaderOffset(); //returns 0
        // $header = $csv->getHeader(); //returns ['First Name', 'Last Name', 'E-mail']
        // var_dump($header);
        // exit;

        $records = $csv->getRecords();
        $em = $this->getDoctrine()->getManager();

        foreach ($records as $offset => $record) {
            $conferencias = new Conferencias;
            //$offset : represents the record offset
            //var_dump($record) 
            // array(
            //  'john',
            //  'doe',
            //  'john.doe@example.com'
            // );
            //
            echo ($record[0]);
            echo ($record[1]);
            echo ($record[2]);

            $tematica = $this->getDoctrine()->getRepository('App:Tematicas')->find($record[1]);
            $conferencias->setTematicas($tematica);
            $conferencias->setNombre($record[2]);
            $em->persist($conferencias);
            $em->flush();
            echo "inserta 1";
        }


        //exit;
        //by setting the header offset we index all records
        //with the header record and remove it from the iteration

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
