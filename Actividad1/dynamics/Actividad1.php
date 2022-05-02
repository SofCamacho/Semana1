<?php

    $nombre = (isset($_POST['nombre']) && $_POST["nombre"] != "")? $_POST['nombre'] : "Falta Nombre";
    $apellido = (isset($_POST['apellido']) && $_POST["apellido"] != "")? $_POST['apellido'] : "Falta apellido";
    $edad = (isset($_POST['edad']) && $_POST["edad"] != "")? $_POST['edad'] : "Falta Edad";
    $direccion = (isset($_POST['direccion']) && $_POST["direccion"] != "")? $_POST['direccion'] : "Falta Direccion";
    $numB = (isset($_POST['numB']) && $_POST["direccion"] != "")? $_POST['numB'] : "Falta Numero de Boletos";
    $tipoB = (isset($_POST['tipoB']) && $_POST["tipoB"] != "")? $_POST['tipoB'] : "Falta Tipo de Boleto";

    switch ($tipoB)
    {
        case 'Boleto de Niño':
            for ($i=0; $i<$numB; $i++)
            {
                echo"
                <table border='1' align='center' cellpadding='20px'>
                    <thead>
                        <tr>
                            <th colspan='4'>Six Flags</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th> $nombre </th>
                            <th> $apellido </th>
                            <th> $edad </th>
                            <th rowspan='4'><img src='../recursos/mikewazowski.jpg' alt='me da coraje ver tanta pobreza' width='200'> </th>
                        <tr/>
    
                        <tr>
                            <th> $direccion </th>
                            <th> $numB </th>
                            <th> $tipoB </th>
                        </tr>
    
                        <tr> 
                            <th colspan='3'><i>Para los chiquitos<i></th>
                        </tr>
                    </tbody>
                </table>
                <br/>
                ";
            }
        break;

        case 'Boleto SF & SF Hurricane Harbor Oaxtepec':
            for ($i=0; $i<$numB; $i++)
            {
                echo"
                <table border='1' align='center' cellpadding='20px'>
                    <thead>
                        <tr>
                            <th colspan='4'>Six Flags</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th> $nombre </th>
                            <th> $apellido </th>
                            <th> $edad </th>
                            <th rowspan='4'><img src='../recursos/premiodoble.jpg' alt='Ricky Ricon' width='200'></th>
                        <tr/>
    
                        <tr>
                            <th> $direccion </th>
                            <th> $numB </th>
                            <th> $tipoB </th>
                        </tr>
    
                        <tr> 
                            <th colspan='3'><i>Aprovecha la oferta<i></th>
                        </tr>
                    </tbody>
                </table>
                <br/>
                ";
            }
        break;

        case 'Ultimate Pass':
            for ($i=0; $i<$numB; $i++)
            {
                echo"
                <table border='1' align='center' cellpadding='20px'>
                    <thead>
                        <tr>
                            <th colspan='4'>Six Flags</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th> $nombre </th>
                            <th> $apellido </th>
                            <th> $edad </th>
                            <th rowspan='4'><img src='../recursos/rickyricon.jpg' alt='Ricky Ricon' width='200'></th>
                        <tr/>

                        <tr>
                            <th> $direccion </th>
                            <th> $numB </th>
                            <th> $tipoB </th>
                        </tr>

                        <tr> 
                            <th colspan='3'><i>Pase Ricky Ricón<i></th>
                        </tr>
                    </tbody>
                </table>
                <br/>
                ";
            }
        break;
        
        case 'Flash Pass':
            for ($i=0; $i<$numB; $i++){
                echo"
                <table border='1' align='center' cellpadding='20px'>
                    <thead>
                        <tr>
                            <th colspan='4'>Six Flags</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th> $nombre </th>
                            <th> $apellido </th>
                            <th> $edad </th>
                            <th rowspan='4'> imagen </th>
                        <tr/>
    
                        <tr>
                            <th> $direccion </th>
                            <th> $numB </th>
                            <th> $tipoB </th>
                        </tr>
    
                        <tr> 
                            <th colspan='3'><i><img src='../recursos/devolonpinpon.jpg' alt='de volon pinpon' width='200'><i></th>
                        </tr>
                    </tbody>
                </table>
                <br/>
                ";
            }
        break;

        case 'Normal':
            for ($i=0; $i>$numB; $i++){
                echo"
                <table border='1' align='center' cellpadding='20px'>
                    <thead>
                        <tr>
                            <th colspan='4'>Six Flags</th>
                        </tr>
                    <thead>
                    <tbody>
                        <tr>
                            <th> $nombre </th>
                            <th> $apellido </th>
                            <th> $edad </th>
                            <th rowspan='4'><img src='../recursos/normal.jpg' alt='me da coraje ver tanta pobreza' width='200'></th>
                        <tr/>
    
                        <tr>
                            <th> $direccion </th>
                            <th> $numB </th>
                            <th> $tipoB </th>
                        </tr>
    
                        <tr> 
                            <th colspan='3'><i>Pa lo que nos alcanzo<i></th>
                        </tr>
                    </tbody>
                </table>
                <br/>
                ";
            }
        break;
    }
?>