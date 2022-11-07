<?php
require_once("conexion.php");

class Usuario extends Conexion{

    public function __construct(){
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();

    }

    public function getUsuarios(){
        $sql1="SELECT A.AEscolar,G.Grado,S.Seccion,C.Numero,AS2.Asignatura,M.Nombre,al.Nombres,C.N1,C.N2,C.N3,C.N4,C.promedio,
        c.aa,C.CPC,c.CC,C.CPEX,C.CEX,c1.RA1,c1.GCE1,c1.RA2,c1.GCE2,c1.RA3,c1.GCE3,c1.RA4,c1.GCE4,c1.RA5,c1.GCE5,c1.RA6,c1.GCE6,c1.RA7,c1.GCE7,c1.RA8,c1.GCE8,c1.RA9,c1.GCE9,c1.RA10,c1.GCE10,
        c1.VxU1,c1.VxU2,c1.VxU3,c1.VxU4,c1.VxU5,c1.VxU6,c1.VxU7,c1.VxU8,c1.VxU9,c1.VxU10,c1.Total,c1.GCEG FROM calificacion_2do_ciclo_g as C join AEscolares A on C.IDAEscolar=A.IDAEscolar
        JOIN calificacion_2do_ciclo_t  as c1 on c1.IDAescolar=A.IDAEscolar
        join Grados_2  as G on C.IDGrado=G.IDGrado
        join Secciones_2 as S on C.IDSeccion=S.IDSeccion
        join Asignaturas_2do_ciclo_G as AS2 on C.IDAsignatura=AS2.IDASignatura
        join Maestros_2 as M on C.IDMaestro=M.IDMaestro
        join alumnosactual_2 as al on al.IDAlumno=c.IDAlumno
        where al.IDAlumno=4061";

        $execute = $this->conexion->query($sql1);

        $datos=$execute->fetchall();
        return $datos[12];
       
   
    }
  

}

  
$objUsuario = new Usuario();

$hjk=$objUsuario->getUsuarios();

echo $hjk['0'],"   ", $hjk['1'] ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="style.php">

    <title>Document</title>
</head>
<body>

<div class="container">

    
    
    <h1><font face="Edwardian Script ITC" size="6"> Instituto Politecnico El Ave Maria </font></h1> 
    <h4>C/ Agustin C.Lopez #9, Barrio 2 de Enero, Sabana Perdida</h4>
    <h4>Santo Domingo Norte, Tel.: 809-590-2174</h4>
    <h5>BOLETIN DE CALIFICACIONES</h5>
    <H5>AÑO ESCOLAR 2021-2022</H5>
</div>
<img src="../img/klk.png" alt="" width="120" >
<div class="container2">
    <h5>to</h5>
    <label for=""><h5 class="dise"><p>5 GRADO</p></h5></label>
    <h5>SEGUNDO CICLO</h5>
    <h5>MODALIDAD TECNICO PROFESIONAL</h5>
</div>


<div class="contenedor">

    <center>

        <table class="tabla1" border="2">
            <tr>
                <td class="area">Área</td>
                <td class="numero">No.</td>
                <td class="rne">RNE</td>
                <td class="apellidos">APELLIDO(S)</td>
                <td class="nombres">NOMBRE(S)</td>
            </tr>
            <tr>
                <td class="datos">Informatica</td>
                <td class="datos">8</td>
                <td class="datos">......</td>
                <td class="datos">Gonzalez Arias</td>
                <td class="datos">Andry Gamaliel</td>
            </tr>
        </table>
        
        <table class="tabla2" border="2" >
            <tr>
                <td colspan="50" align="center">Asignaturas Tecnicas</td>
            </tr>
            <tr>
                <td class="asignatura" rowspan="2">Asignaturas</td>
                <td class="CPU" colspan="27" align="center">Calificaciones por unidad</td>
                <td class="VPU" colspan="9" align="center">Valor por unidad</td>
                <td class="rotac" rowspan="2">% Asistencia </td>
                <td class="rotac" rowspan="2">Calificacion General</td>
                <td class="rotac" rowspan="2">Calificacion de recuperacion</td>
                <td class="rotac" rowspan="2">Calificacion especial</td>
                <td class="rotac" rowspan="2">promovido</td>
                <td class="rotac" rowspan="2">reprobado</td>
            </tr>
            <tr>
                <td colspan="3" class="CU">1</td>
                <td colspan="3" class="CU">2</td>
                <td colspan="3" class="CU">3</td>
                <td colspan="3" class="CU">4</td>
                <td colspan="3" class="CU">5</td>
                <td colspan="3" class="CU">6</td>
                <td colspan="3" class="CU">7</td>
                <td colspan="3" class="CU">8</td>
                <td colspan="3"  class="CU">9</td>
                
                <td class="VU">1</td>
                <td class="VU">2</td>
                <td class="VU">3</td>
                <td class="VU">4</td>
                <td class="VU">5</td>
                <td class="VU">6</td>
                <td class="VU">7</td>
                <td class="VU">8</td>
                <td class="VU">9</td>
                
            </tr>
            <tr>
                <td class="FOL">Formacion y <br> orientacion <br> Laboral</td>
                <!--PRIMERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEGUNDA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--TERCERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--CUARTA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--QUINTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEXTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEPTIMA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--OBTAVA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--NOVENA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 1-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 2-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 3-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 4-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 5-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 6-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 7-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 8-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 9-->
                <td class="casillasT"></td>
                <!--6 EXTRAS-->
                <td class="casillasT"></td>
                <td class="casillasT">96</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
            </tr>

            <tr>
                <td class="FOL">Desarollo de <br> aplicaciones y <br> sistemas de <br> informacion</td>
                <!--PRIMERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEGUNDA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--TERCERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--CUARTA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--QUINTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEXTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEPTIMA COLUMNA-->  
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--OBTAVA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--NOVENA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 1-->
                <td class="casillasT">20</td>
                <!--VALOR X UNIDAD 2-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 3-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 4-->
                <td class="casillasT">30</td>
                <!--VALOR X UNIDAD 5-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 6-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 7-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 8-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 9-->
                <td class="casillasT"></td>
                <!--6 EXTRAS-->
                <td class="casillasT"></td>
                <td class="casillasT">98</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
            </tr>
            
            <tr>
                <td class="FOL">Administracion de <br> Base de datos</td>
                <!--PRIMERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEGUNDA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--TERCERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--CUARTA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--QUINTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEXTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEPTIMA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--OBTAVA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--NOVENA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 1-->
                <td class="casillasT">20</td>
                <!--VALOR X UNIDAD 2-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 3-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 4-->
                <td class="casillasT">30</td>
                <!--VALOR X UNIDAD 5-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 6-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 7-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 8-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 9-->
                <td class="casillasT"></td>
                <!--6 EXTRAS-->
                <td class="casillasT"></td>
                <td class="casillasT">98</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
            </tr>

            <tr>
                <td class="FOL">Analisis y diseño <br> de reportes</td>
                <!--PRIMERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEGUNDA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--TERCERA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--CUARTA COLUMNA-->
                <td class="casillasT">24</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--QUINTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEXTA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--SEPTIMA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--OBTAVA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--NOVENA COLUMNA-->
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 1-->
                <td class="casillasT">25</td>
                <!--VALOR X UNIDAD 2-->
                <td class="casillasT">35</td>
                <!--VALOR X UNIDAD 3-->
                <td class="casillasT">40</td>
                <!--VALOR X UNIDAD 4-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 5-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 6-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 7-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 8-->
                <td class="casillasT"></td>
                <!--VALOR X UNIDAD 9-->
                <td class="casillasT"></td>
                <!--6 EXTRAS-->
                <td class="casillasT"></td>
                <td class="casillasT">100</td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
                <td class="casillasT"></td>
            </tr>

        </table>

        <table class="tabla3" border="1">
            <tr>
                <td class="AA" colspan="17">Asignaturas academicas</td>
            </tr>
            <tr>
               <td class="materiasacademicas" rowspan="3">Asignatura</td>
               <td class="CANO" colspan="5">Calificaciones del año escolar</td>
               <td class="Pasis" rowspan="3">% <br> A.A</td>
               <td class="CC" colspan="4">Calificacion completiva</td>
               <td class="CE" colspan="4">Calificacion extraordinaria</td>
               <td class="CE" colspan="2">Situacion final</td>
            </tr>
            <tr>
                <td class="CP" colspan="4">Calificaciones parciales</td>
                <td class="CFINAL" rowspan="2">C.F</td>
                <td rowspan="2" class="CC2">50% P.C.P</td>
                <td rowspan="2" class="CC2">C.P.C</td>
                <td rowspan="2" class="CC2">50% C.P.C</td>
                <td rowspan="2" class="CC2">C.C</td>

                <td rowspan="2" class="CC2">30% P.C.P</td>
                <td rowspan="2" class="CC2">C.P EX</td>
                <td rowspan="2" class="CC2">70% C.P. EX.</td>
                <td rowspan="2" class="CC2">C. EX</td>

                <td rowspan="2" class="CC3">A</td>
                <td rowspan="2" class="CC3">R</td>
             </tr>
             <tr>
                <td class="meses">SEPT-OCT-<br>NOV</td>
                <td class="meses">DIC-ENE-<br>FEB</td>
                <td class="meses">FEB-MAR-<br>ABR</td>
                <td class="meses">ABR-MAY-<br>JUN</td>
             </tr>
             <tr>
             
                <td>Ciencia de la Naturaleza</td>
                <!--4 NOTAS-->
                <td class="casillasA"><?php  echo $hjk['3']  ?></td>
                <td class="casillasA"></td>
                <td class="casillasA"></td>
                <td class="casillasA"></td>
                <!--CALIFICACION FINAL-->
                <td class="casillasA"></td>
               
                <!--%A.A-->
                <td class="casillasA"></td>
                <!--50% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P.C-->
                <td class="casillasA"></td>
                <!--50% C.P.C-->
                <td class="casillasA"></td>
                <!--C.C-->
                <td class="casillasA"></td>
                <!--30% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P EX-->
                <td class="casillasA"></td>
                <!--70% C.P EX-->
                <td class="casillasA"></td>
                <!--C. EX.-->
                <td class="casillasA"></td>
                <!--A-->
                <td class="casillasA"></td>
                <!--R-->
                <td class="casillasA"></td>

             </tr>
            
             <tr>
                <td>Ciencias Sociales</td>
               <!--4 NOTAS-->
               <td class="casillasA"></td>
               <td class="casillasA"></td>
               <td class="casillasA"></td>
               <td class="casillasA"></td>

               <!--CALIFICACION FINAL-->
               <td class="casillasA"></td>
            
               <!--%A.A-->
               <td class="casillasA"></td>
               <!--50% P.C.P-->
               <td class="casillasA"></td>
               <!--C.P.C-->
               <td class="casillasA"></td>
               <!--50% C.P.C-->
               <td class="casillasA"></td>
               <!--C.C-->
               <td class="casillasA"></td>
               <!--30% P.C.P-->
               <td class="casillasA"></td>
               <!--C.P EX-->
               <td class="casillasA"></td>
               <!--70% C.P EX-->
               <td class="casillasA"></td>
               <!--C. EX.-->
               <td class="casillasA"></td>
               <!--A-->
               <td class="casillasA"></td>
               <!--R-->
               <td class="casillasA"></td>
             </tr>
             <tr>
                <td>Educacion Artistica</td>
               <!--4 NOTAS-->
               <td class="casillasA">95</td>
               <td class="casillasA">92</td>
               <td class="casillasA">98</td>
               <td class="casillasA">100</td>
               <!--CALIFICACION FINAL-->
               <td class="casillasA">96</td>
               <!--%A.A-->
               <td class="casillasA"></td>
               <!--50% P.C.P-->
               <td class="casillasA"></td>
               <!--C.P.C-->
               <td class="casillasA"></td>
               <!--50% C.P.C-->
               <td class="casillasA"></td>
               <!--C.C-->
               <td class="casillasA"></td>
               <!--30% P.C.P-->
               <td class="casillasA"></td>
               <!--C.P EX-->
               <td class="casillasA"></td>
               <!--70% C.P EX-->
               <td class="casillasA"></td>
               <!--C. EX.-->
               <td class="casillasA"></td>
               <!--A-->
               <td class="casillasA"></td>
               <!--R-->
               <td class="casillasA"></td>
             </tr>
             <tr>
                <td>Educacion Fisica</td>
                <!--4 NOTAS-->
                <td class="casillasA">95</td>
                <td class="casillasA">92</td>
                <td class="casillasA">98</td>
                <td class="casillasA">100</td>
                <!--CALIFICACION FINAL-->
                <td class="casillasA">96</td>
                <!--%A.A-->
                <td class="casillasA"></td>
                <!--50% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P.C-->
                <td class="casillasA"></td>
                <!--50% C.P.C-->
                <td class="casillasA"></td>
                <!--C.C-->
                <td class="casillasA"></td>
                <!--30% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P EX-->
                <td class="casillasA"></td>
                <!--70% C.P EX-->
                <td class="casillasA"></td>
                <!--C. EX.-->
                <td class="casillasA"></td>
                <!--A-->
                <td class="casillasA"></td>
                <!--R-->
                <td class="casillasA"></td>
             </tr>
             <tr>
                <td>F.I.H.R.</td>
                <!--4 NOTAS-->
                <td class="casillasA">95</td>
                <td class="casillasA">92</td>
                <td class="casillasA">98</td>
                <td class="casillasA">100</td>
                <!--CALIFICACION FINAL-->
                <td class="casillasA">96</td>
                <!--%A.A-->
                <td class="casillasA"></td>
                <!--50% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P.C-->
                <td class="casillasA"></td>
                <!--50% C.P.C-->
                <td class="casillasA"></td>
                <!--C.C-->
                <td class="casillasA"></td>
                <!--30% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P EX-->
                <td class="casillasA"></td>
                <!--70% C.P EX-->
                <td class="casillasA"></td>
                <!--C. EX.-->
                <td class="casillasA"></td>
                <!--A-->
                <td class="casillasA"></td>
                <!--R-->
                <td class="casillasA"></td>
             </tr>
             <tr>
                <td>Lengua Española</td>
                <!--4 NOTAS-->
                <td class="casillasA">95</td>
                <td class="casillasA">92</td>
                <td class="casillasA">98</td>
                <td class="casillasA">100</td>
                <!--CALIFICACION FINAL-->
                <td class="casillasA">96</td>
                <!--%A.A-->
                <td class="casillasA"></td>
                <!--50% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P.C-->
                <td class="casillasA"></td>
                <!--50% C.P.C-->
                <td class="casillasA"></td>
                <!--C.C-->
                <td class="casillasA"></td>
                <!--30% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P EX-->
                <td class="casillasA"></td>
                <!--70% C.P EX-->
                <td class="casillasA"></td>
                <!--C. EX.-->
                <td class="casillasA"></td>
                <!--A-->
                <td class="casillasA"></td>
                <!--R-->
                <td class="casillasA"></td>
             </tr>
             <tr>
                <td>Ingles tecnico</td>
                <!--4 NOTAS-->
                <td class="casillasA">95</td>
                <td class="casillasA">92</td>
                <td class="casillasA">98</td>
                <td class="casillasA">100</td>
                <!--CALIFICACION FINAL-->
                <td class="casillasA">96</td>
                <!--%A.A-->
                <td class="casillasA"></td>
                <!--50% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P.C-->
                <td class="casillasA"></td>
                <!--50% C.P.C-->
                <td class="casillasA"></td>
                <!--C.C-->
                <td class="casillasA"></td>
                <!--30% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P EX-->
                <td class="casillasA"></td>
                <!--70% C.P EX-->
                <td class="casillasA"></td>
                <!--C. EX.-->
                <td class="casillasA"></td>
                <!--A-->
                <td class="casillasA"></td>
                <!--R-->
                <td class="casillasA"></td>
             </tr>
             <tr>
                <td>Matematicas</td>
                <!--4 NOTAS-->
                <td class="casillasA">95</td>
                <td class="casillasA">92</td>
                <td class="casillasA">98</td>
                <td class="casillasA">100</td>
                <!--CALIFICACION FINAL-->
                <td class="casillasA">96</td>
                <!--%A.A-->
                <td class="casillasA"></td>
                <!--50% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P.C-->
                <td class="casillasA"></td>
                <!--50% C.P.C-->
                <td class="casillasA"></td>
                <!--C.C-->
                <td class="casillasA"></td>
                <!--30% P.C.P-->
                <td class="casillasA"></td>
                <!--C.P EX-->
                <td class="casillasA"></td>
                <!--70% C.P EX-->
                <td class="casillasA"></td>
                <!--C. EX.-->
                <td class="casillasA"></td>
                <!--A-->
                <td class="casillasA"></td>
                <!--R-->
                <td class="casillasA"></td>
             </tr>
             <tr>
                <td></td>
             </tr>
        </table>
        
        </center>

</div>
    

    
</body>
</html>