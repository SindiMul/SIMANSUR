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
                                        <p><b>index:</b></p>
                                        
                                    </td>

                                    <td style="padding: 10px;" valign="top">
                                        <p><b>Tanggal Penyelesaian</b></p>
                                       
                                    </td>
                                </tr>
                               
                                        <p>{{ $disp->tanggal_penyelesaian }}</p>
                                        <tr>
                                        <td style="padding: 10px;" valign="top"> <p>
                                        <?php $no = 0;?>
                                        <?php $no++ ;?> 
                                        {{ $no }}
                                        </p><td>
                                        </tr>
                            </table>
                            <table width="100%">
                        
                               
                                <tr>
                                    <td width="200">No. surat</td>
                                    <td width="1">:</td>
                                    <td> &nbsp;{{ $smasuk->nomor_surat }}</td>
                                </tr>
                                <tr>
                                    <td width="200">Tanggal Penyelesaian</td>
                                    <td width="1">:</td>
                                    <td> &nbsp; {{ $disp->tanggal_penyelesaian }}</td>
                                </tr>
                            </table>
                            <hr width="100%">
                            <table width="100%">
                                <tr>
                                    <td width="200">Surat Dari</td>
                                    <td width="1">:</td>
                                    <td> &nbsp; {{ $smasuk->asal_surat }}</td>
                                </tr>
                                <tr>
                                    <td width="200">Tanggal Surat</td>
                                    <td width="1">:</td>
                                    <td> &nbsp;{{ $smasuk->tanggal_surat }}</td>
                                </tr>
                                <tr>
                                    <td width="200">No. Surat</td>
                                    <td width="1">:</td>
                                    <td> &nbsp; {{ $smasuk->no_surat }}</td>
                                </tr>
                                <tr>
                                    <td width="200">Perihal</td>
                                    <td width="1">:</td>
                                    <td> &nbsp; {{ $smasuk->perihal }}</td>
                                </tr>
                            </table>
                            <br>
                            <table width="100%" border="1" style="border-collapse: collapse;">
                                <tr>
                                    <td style="padding: 10px;" valign="top">
                                        <p><b>Keterangan:</b></p>
                                        <p>
                                            {{ $smasuk->keterangan }}
                                        </p>
                                        
                                    </td>
                                    <td style="padding: 10px;" valign="top">
                                        <p><b>Diteruskan Kepada</b></p>
                                        <p>{{ $disp->tembusan }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table width="100%">
                                <tr>
                                    <td width="50%"></td>
                                    <td  width="50%" align="center">
                                        <p>Gorontalo, ................................................................</p>
                                        <p><b>Kepala</b></p>

                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <u><b>.................................................................</b></u>
                                    </td>
                                </tr>
                            </table>
</body>

</html>
