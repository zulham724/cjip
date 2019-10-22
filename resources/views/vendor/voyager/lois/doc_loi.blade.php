<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LoI - {{$loi->nama_perusahaan}}</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
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
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }

    </style>

</head>
<body>

<div >
    <table width="100%">
        <tr>
            <td align="right">
                <img src="{{Voyager::image($docs->logo_header)}}" alt="Logo" width="50" class="logo"/>
            </td>
            <td align="center" style="padding: 0">
                <!--<img src="template_files/logo.png" alt="Logo" width="50" class="logo"/>-->
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <strong><span style="font-family:'Times New Roman'; ">{{$docs->header}}</span></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <span style="font-family:'Freehand521 BT'">{{$docs->subheader}}</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <a href="http://investasi.dpmptsp.jatengprov.go.id" style="text-decoration:none"><u><span style="font-family:'Times New Roman'; color:#0000ff">http://investasi.dpmptsp.jatengprov.go.id</span></u></a>
                </p>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td align="center">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <strong><span style="font-family:'Times New Roman'; ">LETTER OF INTENT</span></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt">
                    <em><span style="font-family:'Times New Roman'; ">Surat Pernyataan Kepeminatan</span></em>
                </p>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td align="left">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">We the undersigned :</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt">
                    <em><span style="font-family:'Times New Roman'; ">Kami yang bertanda tangan dibawah :</span></em>
                </p>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <tr>
            <td align="left" width="20%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Name <em><span style="font-family:'Times New Roman'; font-size:11pt; ">(Nama)</span></em></span>
                </p>
            </td>
            <td width="1%">
                <p>:</p>
            </td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">{{$loi->nama_pengusaha}} </span>
                </p>
            </td>
        </tr>
        <tr>
            <td align="left" width="20%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Company <em><span style="font-family:'Times New Roman'; font-size:11pt; ">(Perusahaan)</span></em></span>
                </p>
            </td>
            <td width="1%">
                <p>:</p>
            </td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">{{$loi->nama_perusahaan}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td align="left" width="20%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Position <em><span style="font-family:'Times New Roman'; font-size:11pt; ">(Jabatan)</span></em></span>
                </p>
            </td>
            <td width="1%">
                <p>:</p>
            </td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">{{$loi->jabatan_pengusaha}} </span>
                </p>
            </td>
        </tr>
        <tr>
            <td align="left" width="20%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Address <em><span style="font-family:'Times New Roman'; font-size:11pt; ">(Alamat)</span></em></span>
                </p>
            </td>
            <td width="1%">
                <p>:</p>
            </td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">{{$loi->alamat}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td align="left" width="20%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Phone <em><span style="font-family:'Times New Roman'; font-size:11pt; ">(Telepon)</span></em></span>
                </p>
            </td>
            <td width="1%">
                <p>:</p>
            </td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">{{$loi->phone}}</span>
                </p>
            </td>
        </tr>
        <tr>
            <td align="left" width="20%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Email <em><span style="font-family:'Times New Roman'; font-size:11pt; ">(Email)</span></em></span>
                </p>
            </td>
            <td width="1%">
                <p>:</p>
            </td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">{{$loi->email}}</span>
                </p>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%">
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
            <span style="font-family:'Times New Roman'; ">Hereby express our intention to invest in the sector of</span>
        </p>
        <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt">
            <em><span style="font-family:'Times New Roman'; ">Menyatakan berminat untuk berinvestasi di bidang</span></em>
        </p>
        <tr>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Hereby express our intention to invest in the sector of</span>
                </p>
            </td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="40%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Located in regency/ municapility of</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt">
                    <em><span style="font-family:'Times New Roman'; ">Yang berlokasi di kabupaten/ kota</span></em>
                </p>
            </td>
            <td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <strong><span style="font-family:'Times New Roman'; ">{{strtoupper($loi->lokasi_investasi)}}</span></strong>
                </p>
            </td>
            </td>
        </tr>
        <tr>
            <td width="20%">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">With estimated investment value of</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:11pt">
                    <em><span style="font-family:'Times New Roman'; ">Dengan perkiraan nilai investasi</span></em>
                </p>
            </td>
            <td>
            <td style="border-bottom: 1px solid #000">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:left; font-size:12pt">
                    <strong><span style="font-family:'Times New Roman'; ">Rp. 37.500,000,000,000,- (Tiga Puluh Tujuh Trilliun Lima Ratus Milliar Rupiah)</span></strong>
                </p>
            </td>
            </td>
        </tr>
    </table>
    <table width="100%">
        <p style="margin-top:0pt; text-indent: 50px; margin-bottom:0pt; text-align:left; font-size:12pt">
            <span style="font-family:'Times New Roman'; ">Hereafter, matters related to realization of our intention will be followed up in accordance with applicable regulations and this statement is made consciously, intentionally, and without coercion from any party and shall be used for its purpose. This LoI is valid for 2 (two) years from the date of signing.</span>
        </p>
        <p style="margin-top:0pt; text-indent: 50px; margin-bottom:0pt; text-align:left; font-size:11pt">
            <em><span style="font-family:'Times New Roman'; ">Selanjutnya untuk hal-hal yang terkait dengan realisai kepeminatan kami, akan ditindaklanjuti sesuai ketentuan peraturan yang berlaku dan surat pernyataan ini dibuat dengan sebenar-benarnya dan tanpa paksaan dari pihak manapun. Surat pernyataan ini berlaku selama 2 (dua) tahun terhitung sejak tanggal ditandatangani.</span></em>
        </p>
    </table>
    <br>
    <p style="margin-top:0pt; text-indent: 50px; margin-bottom:0pt; text-align:right; font-size:12pt">
        <span style="font-family:'Times New Roman'; ">{{$docs->tempat_ttd}}, {{Carbon\Carbon::parse($loi->tgl_ttd)->formatLocalized('%d %B %Y')}}</span>
    </p>
    <br>
    <table width="100%">
        <tr style="margin-bottom: 100px">
            <td style="align-items: center">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">Regency/ Municipal Government</span>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt">
                    <em><span style="font-family:'Times New Roman'; ">Pemerintah Kabupaten/ Kota</span></em>
                </p>
            </td>
            <td>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <span style="font-family:'Times New Roman'; ">We mentioned above,</span>
                </p>
                <p style="margin-top:0pt;  margin-bottom:0pt; text-align:center; font-size:11pt">
                    <em><span style="font-family:'Times New Roman'; ">Kami tersebut di atas,</span></em>
                </p>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr>
            <td style="align-items: center">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <strong><u><span style="font-family:'Times New Roman'; ">{{strtoupper($docs->nama_ttd)}}</span></u></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt">
                    <span style="font-family:'Times New Roman'; ">{{strtoupper($docs->jabatan_ttd)}}</span>
                </p>
            </td>
            <td style="align-items: center">
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
                    <strong><u><span style="font-family:'Times New Roman'; ">{{strtoupper($loi->nama_pengusaha)}}</span></u></strong>
                </p>
                <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt">
                    <span style="font-family:'Times New Roman'; ">{{strtoupper($loi->jabatan_pengusaha)}}</span>
                </p>
            </td>
        </tr>
    </table>

</div>


<br/>

</body>
</html>
