<html>

<head>
    <title>Lembar Surat Tugas</title>
    <head>
    <style type="text/css">
        .container {
            font-family: "Times New Roman", Times, serif;
            margin: auto;
            width: 100%;
            border: 3px;
            font-size: 16px;
        }

        table {
            border-style: double;
            border-width: 2px;
            border-color: white;
        }

        @page {
            size: auto;
            /* auto is the initial value */
            margin: 0;
            /* this affects the margin in the printer settings */
        }
    </style>
</head>



<body>
<div class="container" style="margin-top: 12px;">
        <center>
            <table>
                <tr>
                    <td><img src="#" width="120" height="120" style="object-fit: cover;"></td>
                    <td>
                        <center>
                            <span style="font-size: 20px;"><b>PEMERINTAH KABUPATEN GARUT</b></span><br>
                            <span style="font-size: 20px;"><b>DINAS TENAGA KERJA DAN TRANSMIGRASI</b></span><br>
                            <span style="font-size: 14px;"><i>Jln.Sukarasa No.68 e-mail desasukarasa03@gmail.com-Pangatikan 44183 Garut No.Telp (0262) 448787</i></span>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <hr style="border-width: 2px; border-color: black;">
                    </td>
                </tr>
    </table>
    
                <table style="width: 625px; margin-left: 175px;">
                <tr>
                        <td style="text-align: center; font-size: 20px; font-weight: bold; text-decoration: underline;">
                            SURAT TUGAS</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; font-size: 16px;">Nomor : {{ $disp->nomor }}</td>
                    </tr>
              </table>                  

                <!-- form pengurus desa -->
                <table style="width: 625px; margin-top: 6px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 70px; ">
                            Dasar
                        </td>
                        <td style=" width: 450px;  line-height: 1.6;">: {{ $disp->dasar }}</td>
                        
                    </tr>
                </table>
                <table style="width: 625px; margin-top: 5px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 70px; line-height: 1.6;">
                            Kepala Dinas Tenaga Kerja dan Transmigrasi Kabupaten Garut
                        </td>
                    </tr>
                </table>
                <table style="width: 625px; margin-left: 175px;">
                    <tr>
                        <td style="text-align: center; font-size: 18px; font-weight: bold; text-decoration: underline;">
                        MENUGASKAN</td>
                    </tr>
                    
                </table>
                <!-- end form pengurus desa -->
                
                <table style="width: 625px; margin-top: 5px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 70px;">
                            Kepada
                        </td>
                        <td width="450px">: </td>
                        
                        
                    </tr>
                    </table>
                <table style="margin-left: 270px;">
                <?php $no = 1 ?> 
                @foreach ($disp->iii as $data_pegawai) 
                    <tr>
                        <td width="130px">{{ $no++ }} Nama </td>
                            
                            <td width="425px">: {{ $data_pegawai->ppp->nama_petugas }}</td> 
                    </tr>
                   
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;NIP</td>
                        <td>: {{ $data_pegawai->ppp->nip }}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;Pangkat / Gol</td>
                        <td>: {{ $data_pegawai->ppp->pangkat }}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</td>
                        <td>: {{ $data_pegawai->ppp->jabatan }}</td>
                    </tr>
                    <tr>
                        <td></br></td>
                        
                    </tr>
                    @endforeach
            
                   
                </table>
                <table style="width: 625px; margin-top: 5px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 70px;">
                            Untuk 
                        </td>
                        <td width="450px margin-left: 155px;">: {{$disp->perihal}}</td>
                        
                    </tr>
                </table>
                </br>
                <table style="margin-left: 158px;">
                    <tr>
                        <td width="130px">Tanggal </td>
                            
                            <td width="425px">: {{ $disp->hari }}</td> 
                    </tr>
                   
                    <tr>
                        <td>Pukul</td>
                        <td>: {{ $disp->pukul }}</td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td>: {{ $disp->tempat }}</td>
                    </tr>
                   
            
                   
                </table>
            </br>
                <table style="margin-left: 158px;">
                    <tr>
                        <td >Demikian untuk dilaksanakan dengan pernuh rasa tanggung jawab. </td>
                   
                    </tr>
                </table>
                
            <table style="margin-left: 400px; margin-top: 16px;">
                <tr>
                    <td style="text-align: center; line-height: 1.6;">Garut, {{($tanggal)}}
                        <br>
                        <br>
                        <br>
                        <br>An. Kepala Desa
                        Sukarasa<br><br><br><br><span style="text-decoration: underline; font-weight: bold; font-size: 16px"></span>
                    </td>
                </tr>
            </table>
            <!-- end keterangan akhir surat -->
        </center>
    </div>
</body>

</html>
