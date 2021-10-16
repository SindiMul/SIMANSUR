<html>

<head>
    <title>Lembar Surat Tugas</title>
    <head>
    <style type="text/css">
    /* @page {
        size: landscape;
    } */
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
                    <td><img src="{{ url('backend/assets/img/brand/garut.png') }}" width="120" height="120" style="object-fit: cover;"></td>
                    <td>
                        <center>
                            <span style="font-size: 20px;"><b>PEMERINTAH KABUPATEN GARUT</b></span><br>
                            <span style="font-size: 20px;"><b>DINAS TENAGA KERJA DAN TRANSMIGRASI</b></span><br> <br>
                            <span style="font-size: 14px;"><i>Jl. Guntur Cendana No. 1 Ds. Haur Panggung Kec. Tarogong Kidul Kab. Garut</i></span>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <hr style="border-width: 2px; border-color: black;">
                    </td>
                </tr>
    </table>
    
                <table style="width: 625px; ">
                <tr>
                        <td style="text-align:center; font-size: 20px; font-weight: bold; text-decoration: underline;">
                            SURAT TUGAS</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; font-size: 16px;">Nomor : {{ $disp->nomor }}</td>
                    </tr>
              </table>                  

                <!-- form pengurus desa -->
                <table style="width: 625px; margin-top: 6px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 70px; position: absolute; ">
                            Dasar : 
                        </td>
                     
                        <td style=" width: 490px;  line-height: 1.2;" > {{ $disp->dasar }}</td>
                        
                    </tr>
                </table>
                <table style="width: 625px; margin-top: 5px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 70px; line-height: 1.6;">
                            Kepala Dinas Tenaga Kerja dan Transmigrasi Kabupaten Garut
                        </td>
                    </tr>
                </table>
                <table style="width: 625px;">
                    <tr>
                        <td style="text-align: center; font-size: 18px; font-weight: bold; text-decoration: underline;">
                        MENUGASKAN</td>
                    </tr>
                    
                </table>
                <!-- end form pengurus desa -->
                
                <table style="width: 625px; margin-top: 5px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 70px;">
                            Kepada :
                        </td>
                       
                    </tr>
                    </table>
                <table style="margin-left: 83px;">
                <?php $no = 1. ?> 
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
                        <td >: {{ $data_pegawai->ppp->pangkat }}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;Jabatan</td>
                        <td style=" position: absolute;  width:400px">: {{ $data_pegawai->ppp->jabatan }}</td>
                    </tr>
                    <tr>
                        <td></br></td>
                        
                    </tr>
                    @endforeach
            
                   
                </table>
                <table style="width: 620px; margin-top: 5px;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; padding-left: 86px; position: absolute;">
                            Untuk 
                        </td>
                        <td width="410px ;"> :{{$disp->perihal}}</td>
                        
                    </tr>
                </table>
                </br>
                <table style="width: 625px; padding-left:86 ;">
                    <tr>
                        <td style="text-align: left; font-size: 16px; ">Hari/Tanggal</td>

                            <td width="415px">: {{  $disp->hari }}</td> 
                    </tr>
                    <tr>
                        <td>Pukul</td>
                        <td>: {{ $disp->pukul }}</td>
                    </tr>
                    <tr>
                        <td>Tempat</td>
                        <td style=" position: absolute; width:400px">: {{ $disp->tempat }}</td>
                    </tr>
                </table>
                </br>
                <table >
                    <tr> <br>
                        <td >Demikian untuk dilaksanakan dengan pernuh rasa tanggung jawab. </td>
                   
                    </tr>
                </table>
                
            <table style="margin-left: 400px; margin-top: 16px;">
                <tr>
                    <td style="text-align: center; line-height: 1.6;">Garut, {{($tanggal)}}
                    @if($disp->ttt->jabatan =='Kepala Dinas')
                    <br>{{$disp->ttt->jabatan}},
                                @else
                                <br> An. Kepala Dinas
                                <br>{{$disp->ttt->jabatan}},
                               
                               @endif
                               <br>
                               <br>
                               <br>
                               <br>
                               
                         <b style=" text-decoration: underline; ">{{ $disp->ttt->nama_petugas }}</b> 
                         <br>
                        NIP. {{ $disp->ttt->nip }}
                        </tr>
                       
                        <br><br><span style="text-decoration: underline; font-weight: bold; font-size: 16px"></span>
                    </td>
                </tr>
            </table>
            <!-- end keterangan akhir surat -->
        </center>
    </div>
    <script type="text/javascript">
  window.print()
  </script>
</body>

</html>
