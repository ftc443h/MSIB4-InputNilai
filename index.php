<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatchan Muhammad Hakim</title>

    <style>
        body{
            padding: 0px;
            margin: 0px;
            background-color: #0B2447;
            background-position: center;
            display: inline;
        }
       
        #countainer-thead{
            background-color: #576CBC;
        }

        #countainer-thdata{
            font-size: 14.5pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #A5D7E8;
            cursor: no-drop;
            text-align: center;
        }

        #countainer-tddata{
            padding: 30px;
        }

        #countainer-label{
            font-size: 12.5pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #A5D7E8;
            margin-left: 50px;
        }

        #countainer-input{
            width: 300px;
            height: 25px;
            margin-left: 115px;
        }

        #countainer-input::placeholder{
            font-size: 10.8pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #0B2447;
            padding: 4px;
        }

        #countainer-select{
            font-size: 10.8pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #0B2447;
            margin-left: 100px;
        }

        #countainer-nilai{
            font-size: 12.5pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #A5D7E8;
            margin-left: 50px;
            margin-top: 20px;
        }

        #countainer-inputnilai{
            width: 300px;
            height: 25px;
            margin-left: 180px;
        }

        #countainer-inputnilai::placeholder{
            font-size: 10.8pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #0B2447;
            padding: 4px;
        }

        #countainer-tfoot{
            background-color: #576CBC;
        }

        #button-save{
            background-color: #19376D;
            width: 150px;
            border-radius: 4px;
            height: 35px;
            font-size: 10.8pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #A5D7E8;
            cursor: pointer;
        }

        #button-cancel{
            background-color: #19376D;
            width: 150px;
            border-radius: 4px;
            height: 35px;
            font-size: 10.8pt;
            font-family: monospace;
            font-weight: bold;
            text-transform: uppercase;
            color: #A5D7E8;
            cursor: pointer;
        }

        .countainer-table{
            width: 85%;
            text-align: center;
            margin-left: 130px;
            margin-top: 35px;
            border-radius: 4px;
            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.3);
        }

        #countainer-th{
            font-size: 11.5pt;
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            background-color: #245953;
            color: #D8D8D8;
            cursor: grabbing;
            border-radius: 4px;
        }

        #countainer-td{
            font-size: 10.5pt;
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            background-color: #408E91;
            color: #D8D8D8;
            cursor: grabbing;
            border-radius: 4px;
        }

        .countainer-h3{
            font-size: 15pt;
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            color: #E49393;
            cursor: grabbing;
            margin-top: 35px;
        }

        #countainer-td1{
            font-size: 10.5pt;
            font-family: monospace;
            font-weight: bold;
            background-color: #408E91;
            color: #D8D8D8;
            cursor: grabbing;
            border-radius: 4px;
        }

    </style>
</head>
<body>
    <div id="countainer-div">
        <table id="countainer-table1" align="center" border="0" cellspacing="0" cellpadding="10" width="100%">
        <form id="countainer-form" method="post">
            <thead id="countainer-thead">
                <tr id="countainer-tr1">
                    <th id="countainer-thdata">form data pelajar</th>
                </tr>
            </thead>
            <tbody id="countainer-tbody">
                <tr id="countainer-tr2">
                    <td id="countainer-tddata">
                        <label id="countainer-label">name pelajar</label>
                        <input id="countainer-input" type="text" name="nama" placeholder="masukan nama pelajar">
                    </td>
                </tr>
                <tr id="countainer-tr3">
                    <td id="countainer-tddata">
                        <label id="countainer-label" >mata pelajaran</label>
                        <select name="matkul" id="countainer-select">
                            <option id="countainer-option" value="">---- Silakan Pilih ----</option>
                            <option id="countainer-option" value="IPA">ipa</option>
                            <option id="countainer-option" value="IPS">ips</option>
                            <option id="countainer-option" value="Matematika">matematika</option>
                            <option id="countainer-option" value="Fisika">fisika</option>
                        </select>
                    </td>
                </tr>
                <tr id="countainer-tr4">
                    <td id="countainer-tddata">
                        <label id="countainer-nilai">nilai</label>
                        <input id="countainer-inputnilai" type="text" name="nilai" placeholder="masukan nilai">
                    </td>
                    <br>
                </tr>
            </tbody>
            <tfoot id="countainer-tfoot">
                <tr id="countainer-tr4">
                    <th id="countainer-th1" colspan="2">
                        <button id="button-save" type="submit" name="save">save</button>
                        <button id="button-cancel" type="submit" name="cancel">cancel</button>
                    </th>
                </tr>
            </tfoot>
        </form>
        </table>
        <?php
            $nama_mahasiswa = $_POST['nama'];
            $matple_mahasiswa = $_POST['matkul'];
            $nilai_mahasiswa = $_POST['nilai'];
            $tombol_save = $_POST['save'];
            $no = 1;

            if(isset($tombol_save)){
                $ket_nilai = ($nilai_mahasiswa >= 60) ? 'Lulus' : 'Tidak Lulus';

                if($nilai_mahasiswa >= 86 && $nilai_mahasiswa <= 100) $grade = 'A';
                else if($nilai_mahasiswa >= 76 && $nilai_mahasiswa < 86) $grade = 'B';
                else if($nilai_mahasiswa >= 60 && $nilai_mahasiswa < 76) $grade = 'C';
                else if($nilai_mahasiswa >= 31 && $nilai_mahasiswa < 60) $grade = 'D';
                else if($nilai_mahasiswa >= 0 && $nilai_mahasiswa < 31) $grade = 'E';
                else $grade = '';


                switch($grade){
                    case 'A' : $predikat = 'Memuaskan'; break;
                    case 'B' : $predikat = 'Bagus'; break;
                    case 'C' : $predikat = 'Cukup'; break;
                    case 'D' : $predikat = 'Kurang'; break;
                    case 'E' : $predikat = 'Buruk'; break;
                };
        ?>
         <h3 class="countainer-h3">data nilai pelajar</h3>
    <div class="countainer-div">
        <table class="countainer-table" border="1px" cellpadding="10" >
            <thead class="countainer-thead">
                <tr class="countainer-tr">
                    <th id="countainer-th">no</th>
                    <th id="countainer-th">nama pelajar</th>
                    <th id="countainer-th">mata pelajar</th>
                    <th id="countainer-th">nilai pelajar</th>
                    <th id="countainer-th">keterangan</th>
                    <th id="countainer-th">grade</th>
                    <th id="countainer-th">predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="countainer-td"><?= $no++; ?></td>
                    <td id="countainer-td"><?= $nama_mahasiswa; ?></td>
                    <td id="countainer-td"><?= $matple_mahasiswa; ?></td>
                    <td id="countainer-td"><?= $nilai_mahasiswa; ?></td>
                    <td id="countainer-td"><?= $ket_nilai; ?></td>
                    <td id="countainer-td"><?= $grade; ?></td>
                    <td id="countainer-td"><?= $predikat; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php } ?>
</div>
</body>
</html>