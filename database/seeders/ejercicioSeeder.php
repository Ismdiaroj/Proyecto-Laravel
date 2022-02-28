<?php

namespace Database\Seeders;

use App\Models\Ejercicio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ejercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $ejercicio = new Ejercicio();
        // $ejercicio->nombre=
        // $ejercicio-> grupo_muscular = 
        // $ejercicio-> musculo = 
        // $ejercicio-> save();


        $ejercicio1 = new Ejercicio();
        $ejercicio1->nombre='Jalon al pecho';
        $ejercicio1-> grupo_muscular = 'Espalda';
        $ejercicio1-> musculo = 'Dorsales';
        $ejercicio1-> save();

        $ejercicio1 = new Ejercicio();
        $ejercicio1->nombre='Remo Grironda';
        $ejercicio1-> grupo_muscular = 'Espalda';
        $ejercicio1-> musculo = 'Dorsales';
        $ejercicio1-> save();

        $ejercicio1 = new Ejercicio();
        $ejercicio1->nombre='Dominadas';
        $ejercicio1-> grupo_muscular = 'Espalda';
        $ejercicio1-> musculo = 'Dorsales';
        $ejercicio1-> save();


        // PIERNAS

        $ejercicio2 = new Ejercicio();
        $ejercicio2->nombre='Sentadillas';
        $ejercicio2-> grupo_muscular = 'Piernas';
        $ejercicio2-> musculo = 'Cuadriceps';
        $ejercicio2-> save();

        $ejercicio3 = new Ejercicio();
        $ejercicio3->nombre="Extensión Cuádriceps";
        $ejercicio3-> grupo_muscular = "Piernas";
        $ejercicio3-> musculo = "Cuádriceps";
        $ejercicio3-> save();

        $ejercicio4 = new Ejercicio();
        $ejercicio4->nombre= "Curl Femoral";
        $ejercicio4-> grupo_muscular = "Piernas";
        $ejercicio4-> musculo = "Femorales";
        $ejercicio4-> save();


        // PECHO

        $ejercicio6 = new Ejercicio();
        $ejercicio6->nombre= 'Press Banca';
        $ejercicio6-> grupo_muscular = 'Pecho';
        $ejercicio6-> musculo = 'Pectoral';
        $ejercicio6-> save();

        $ejercicio7 = new Ejercicio();
        $ejercicio7->nombre= 'Aperturas';
        $ejercicio7-> grupo_muscular = 'Pecho';
        $ejercicio7-> musculo = 'Pectoral';
        $ejercicio7-> save();

        $ejercicio5 = new Ejercicio();
        $ejercicio5->nombre= 'Press Inclinado';
        $ejercicio5-> grupo_muscular = 'Pecho';
        $ejercicio5-> musculo = 'Pectoral';
        $ejercicio5-> save();

        //BRAZOS

        $ejercicio8 = new Ejercicio();
        $ejercicio8->nombre= 'Curl Barra';
        $ejercicio8-> grupo_muscular = 'Brazos';
        $ejercicio8-> musculo = 'Bíceps';
        $ejercicio8-> save();

        $ejercicio9 = new Ejercicio();
        $ejercicio9->nombre= 'Extension Barra';
        $ejercicio9-> grupo_muscular = 'Brazos';
        $ejercicio9-> musculo = 'Tríceps';
        $ejercicio9-> save();

        $ejercicio10 = new Ejercicio();
        $ejercicio10->nombre= 'Curl Concentrado';
        $ejercicio10-> grupo_muscular = 'Brazos';
        $ejercicio10-> musculo = 'Bíceps';
        $ejercicio10-> save();

        //HOMBROS

        $ejercicio11 = new Ejercicio();
        $ejercicio11->nombre="Elevacón Frontas";
        $ejercicio11-> grupo_muscular = "Hombros";
        $ejercicio11-> musculo = "hombros delanterp";
        $ejercicio11-> save();

        $ejercicio12 = new Ejercicio();
        $ejercicio12->nombre="Pájaro";
        $ejercicio12-> grupo_muscular = "Hombros";
        $ejercicio12-> musculo = "hombros delanterp";
        $ejercicio12-> save();

        $ejercicio13 = new Ejercicio();
        $ejercicio13->nombre="Elevacón Lateral";
        $ejercicio13-> grupo_muscular = "Hombros";
        $ejercicio13-> musculo = "hombros delanterp";
        $ejercicio13-> save();

    }
}
