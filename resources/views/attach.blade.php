<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page { margin: 180px 50px; }
        #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; background-color: transparent; text-align: center; }
        #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color: transparent; }
        #footer .page:after { content: counter(page, upper-roman); }
        body {
            margin: 0px;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }


        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-image: url("http://cjip.jatengprov.go.id/storage/additional/header_2.png");
            max-height: 300px;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
        .screen
        {
            width:100%;
            height:20px;
            background:#1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color:#fff;
            line-height:20px;
            font-size:15px;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            padding-bottom: 20px;
        }

        .inner-seat{
            width: 10px;
            height: 10px;
            border-radius: 100px;
            top: 50%;
            left: 50%;
            margin: -35px 0px 0px -35px;
            background: #D8D8D8 ;
            position: absolute;
        }

        #div-inline{float: left; }


        #div-inline:hover .inner-seat{
            background: #3366CC;
        }

        .clearBoth { clear:both; }

        .selected-innerColor {
            background-color: #3366CC;
        }
    </style>


</head>
<body>

    <div id="header">
        <img src="http://cjip.jatengprov.go.id/storage/additional/header_2.png" width="100%" height="auto"/>
    </div>

    <div id="content">
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0;
      mso-table-rspace: 0; width: 100%; max-width: 560px; background-color: #ffffff; border: solid 2px #ceddf2;
       padding-top: 2px; padding-left: 8px; padding-right: 8px; padding-bottom: 2px" bgcolor="#ffffff">
            <tr>
                <td style="font-family: sans-serif; font-size: 18px; vertical-align: top; text-align: center; color: #7d93b2;
              padding-top: 36px" valign="top" align="center">{{$send->event->nama_kegiatan}}
                </td>
            </tr>
            <tr>
                <td style="font-family: sans-serif; font-size: 18px; vertical-align: top; text-align: center; color: #7d93b2;
              padding-top: 36px" valign="top" align="center"><img src="data:image/png;base64, {!! base64_encode($send->qr) !!}" alt="">
                </td>
            </tr>
        </table>

        <table id="seatsBlock" style="margin-left:auto; margin-right:auto;">
            <tr style="padding-top:20px;
  padding-bottom:20px;
  padding-right:20px;">
                <td colspan="{{count($send->col)+2}}" style="align-content: center; padding-top:20px;
  padding-bottom:20px;
  padding-right:20px; "><div class="screen">SCREEN</div></td>


            </tr>
            <tr>
                <td style="padding-bottom: 16px"></td>
            </tr>
            <tr>
                <td style="padding-bottom: 16px"></td>
            </tr>
            @foreach($send->row as $row1)
                <tr>
                    <td>{{$row1->row}}</td>
                    @foreach($send->col as $col)
                        <td>
                            @foreach($send->mejas as $meja)

                                @if((($row1->row).($col->col)) == ($meja->kode_meja))
                                    @if($send->meja == (($row1->row).($col->col)))

                                        <img src="http://cjip.jatengprov.go.id/storage/additional/seated.png" style="width: 20px" alt="">

                                    @else
                                        <img src="http://cjip.jatengprov.go.id/storage/additional/seat.png" style="width: 20px" alt="">
                                    @endif
                                @endif

                            @endforeach
                        </td>

                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>

    <div id="footer">
        <img src="http://cjip.jatengprov.go.id/storage/additional/footer.png" width="100%" height="auto"/>
    </div>

</body>
</html>