<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
    <link rel="stylesheet" href="css/aleryify.css" />
    <link rel="stylesheet" href="css/themes/default.css" />

</head>
<body>
    <h1>Panel de estudiantes </h1>
    <table>
        <thead>
            <tr>
                <th>ID Estudiantes</th>
                <th>Apellido</th>
                <th>nombre</th>
                <th>DNI</th>
                <th>Fecha Nac.</th>
                <th>Tel&eacute;fono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("model/student.class.php");
            $student=new Student();
            $allStudents=$student->getAllStudents();
            if($allStudents){
                foreach($allStudents as $data){
                    print "<tr>";
                    print "<td>". $data["idStudent"]."</td>";
                    print "<td>". $data["surname"]."</td>";
                    print "<td>". $data["name"]."</td>";
                    print "<td>". $data["dni"]."</td>";
                    print "<td>". $data["birthdate"]."</td>";
                    print "<td>". $data["phone"]."</td>";
                    print "<td> <input type='button' name='editar' value='Editar' onclick=\"window.location.href=formEditstudent.php?idStudent=".$data["idStuden"].";\"/> ";
                    print " <input type='button' name='eliminar' value='Eliminar' onclick='' /> </td>";
                    print "</tr>";
                }
            }else{
                print "No existe estudiantes cargados";

            }
            ?>
      </tbody>
    </table>
</body>

</html>