<html>

<head>
    <title>LEMBAR DISPOSISI SURAT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 12pt;
        }

        footer {
            position: fixed;
            bottom: -40px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size: 9pt;

            /** Extra personal styles **/
            text-align: center;
            line-height: 35px;
        }

        .line {
            line-height: 50%;
        }
    </style>
    <h1> <center>KARTU DISPOSISI</center> </h1>
        <table width="100%" border="1" style="border-collapse: collapse;">
         <tr>
            <td style="padding: 10px;" valign="top">
                <b>INDEX :</b>
                <p> <?php $no = 0;?>
                 <?php $no++ ;?> {{ $no }}</p>
            </td>

             <td style="padding: 10px;" valign="top">
                <b>Tanggal Penyelesaian :</b>
                <p>{{  date ('d-m-Y', strtotime($disp->tanggal_penyelesaian)) }}</p>
             </td>
        </tr> 

         </table>
        <br>
      
        <table width="100%">
        <tr>
             <td width="200">Dari</td>
                <td width="1">:</td>
                 <td> &nbsp; {{ $smasuk->asal_surat }}
            </td>
        </tr>
        
        <tr>
            <td width="200">Perihal</td>
            <td width="1">:</td>
            <td> &nbsp; {{ $smasuk->perihal }}</td>
        </tr>
         <tr>
            <td width="200">Tanggal Surat</td>
            <td width="1">:</td>
            <td> &nbsp;{{ date ('d-m-Y', strtotime( $smasuk->tanggal_surat )) }}</td>
        </tr>
         <tr>
            <td width="200">No. Surat</td>
            <td width="1">:</td>
            <td> &nbsp; {{ $smasuk->nomor_surat }}</td>
        </tr>
        </table>
        <br>
        <table width="100%" border="1" style="border-collapse: collapse;">
            <tr style="height:200px";>
            <td style="font-size: 16px; padding-left:50px; padding-top:10px; colspan:2; ">
                <b>Intruksi/Informasi @ :</b> 
                <p style="padding-left:100px;">{{ $disp->keterangan }}</p>  <br><br>   <br><br>  
                <div style="height: 40px;"></div>
                                    <div style="height: 25px;"></div>            
                </td>
                <td style="font-size: 16px; padding-left:50px; padding-top:10px; colspan:2; ">
                <b>DiTeruskan Kepada :</b> 
                <p style="padding-left:100px;">{{ $disp->tujuan_surat }}</p>  <br><br>   <br><br>  
                <div style="height: 40px;"></div>
                                    <div style="height: 25px;"></div>            
                </td>
               
               
            </tr>
        </table>
                           
                            <script type="text/javascript">
  window.print()
  </script>
</body>

</html>
