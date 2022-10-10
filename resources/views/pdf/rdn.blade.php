<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR REKENING DANA NASABAH</title>
    <link rel="stylesheet" href="assets/css/rdn.css">
</head>
<body>

    <!-- Page #1 -->
    <div class="paper">
        <div class="content">
            <div class="header">
                <table>
                    <tr>
                        <td><img src="assets/images/logo-white-bg-black-actual-size.png" width="100" alt="logo"></td>
                        <td class="tac title"><b>FORMULIR REKENING DANA NASABAH</b><br/><i>APPLICATION FORM FOR CUSTOMER FUND ACCOUNT</i></td>
                    </tr>
                </table>
            </div>
            <div class="sub-header">
                <b>A. MOHON DITULIS DENGAN HURUF CETAK</b><br/><i>A. PLEASE WRITE IN BLOCK LETTERS</i>
            </div>
            
            <table>
                <tr>
                    <td class="content-left" width="50%">
                        <!-- start content left -->
                        <table>
                            <tr>
                                <td colspan="2">
                                    <b>Nama Nasabah (sesuai tanda pengenal) :</b><br/>
                                    <i class="blue">Name of Customer (as it appears on ID Card)</i>
                                </td>
                            </tr>
                            <tr><td colspan="2" class="dot">Sabbana Azmi</td></tr>
                            <tr>
                                <td colspan="2">
                                    <b>Alias (apabila ada) :</b><br/>
                                    <i class="blue">Alias (if any)</i>
                                </td>
                            </tr>
                            <tr><td colspan="2" class="dot">Wal Azmi</td></tr>
                            <tr>
                                <td width="40%">
                                    <b>No. Single Investor ID :</b><br/>
                                    <i class="blue">Single Investor ID No.</i>
                                </td>
                                <td class="sq15">{{ @$data_ksei['sid']}}</td>
                            </tr>
                            <tr>
                                <td width="40%">
                                    <b>No. Sub Rekening Efek :</b><br/>
                                    <i class="blue">Sub Securities Account No.</i>
                                </td>
                                <td class="sq14">{{ @$data_ksei['sre_01']}}</td>
                            </tr>
                            <tr>
                                <td width="40%">
                                    <b>Nomor Customer :</b><br/>
                                    <i class="blue">Customer Number</i>
                                </td>
                                <td class="sq1"></td>
                            </tr>
                            <tr>
                                <td width="40%">
                                    <b>Dalam hal ini bertindak sebagai :</b><br/>
                                    <i class="blue">In this matter acting</i>
                                </td>
                                <td>
                                    <span>Pribadi / <i>On his/her own behalf</i></span>
                                    <ul class="list-radio-vertical">
                                        <li class="active">Pribadi<br/><i class="blue">On his/her own behalf</i></li>
                                        <li>Wakil dari pihak lain<br/><i class="blue">As a representative or proxy for another party</i></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="content-right">
                        <!-- start content right -->
                        <table>
                            <tr>
                                <td width="40%">
                                    <b>No. Rekening yang sudah ada</b><br/>
                                    <i class="blue">Existing Account No.</i>
                                </td>
                                <td width="10">:</td>
                                <td colspan="3" class="sq10">{{ @$rekening_bank['no_rekening']}}</td>
                            </tr>
                            <tr>
                                <td width="40%">
                                    <b>No. Rekening Baru</b><br/>
                                    <i class="blue">New Account No.</i>
                                </td>
                                <td width="10">:</td>
                                <td colspan="3" class="sq10"></td>
                            </tr>
                            <tr>
                                <td width="40%">
                                    <b>Cabang</b><br/>
                                    <i class="blue">Branch</i>
                                </td>
                                <td width="10">:</td>
                                <td class="sq4"></td>
                                <td width="10">-</td>
                                <td class="dot"></td>
                            </tr>
                            <tr><td colspan="5"><b>Nama Perusahaan Efek / Bank Kustodian : PT BCA Sekuritas</b><br/><i class="blue">Name of Securities Company / Custodian Bank</i></td></tr>
                            <tr><td colspan="5" class="dot"></td></tr>
                            <tr><td colspan="5"><b>Kode Perusahaan Efek / Bank Kustodian : SQ001</b><br/><i class="blue">Code of Securities Company / Custodian Bank</i></td></tr>
                            <tr><td colspan="5" class="dot"></td></tr>
                            <tr>
                                <td><b>Corpoate ID KBB</b><br/><i class="blue">KBB Corporate ID</i></td>
                                <td>:</td>
                                <td colspan="3">KBC Dinusah</td>
                            </tr>
                            <tr>
                                <td><b>Tujuan Pembuatan Rekening</b><br/><i class="blue">Purpose of Opening the Account</i></td>
                                <td>:</td>
                                <td colspan="3">Penyelesaian Transaksi Efek<br/><i class="blue">To settle Securities Transactions</i></td>
                            </tr>
                            <tr>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li>Pengampu<br/><i class="blue">Trustee</i></li>
                                    </ul>
                                </td>
                                <td colspan="4">
                                    <ul class="list-radio-vertical">
                                        <li>Lainnya<br/><i class="blue">Other</i></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <div class="sub-header">
                <b>B. PRODUK YANG DIINGINKAN</b><br/><i>B. DESIRED PRODUCT</i>
            </div>
            <table>
                <tr>
                    <td width="20%">
                        <ul class="list-radio-vertical">
                            <li>Giro, Mata Uang<br/><i class="blue">Current Account, Currency</i></li>
                        </ul>
                    </td>
                    <td width="20%" class="sq1"></td>
                    <td width="20%" >
                        <ul class="list-radio-vertical">
                            <li class="active">TAPRES<br/><i class="blue">TAPRES</i></li>
                        </ul>
                    </td>
                    <td width="20%" >
                        <ul class="list-radio-vertical">
                            <li>BCA Dollar, Mata Uang<br/><i class="blue">BCA Dollar, Mata Uang</i></li>
                        </ul>
                    </td>
                    <td width="20%" class="sq3"></td>
                </tr>
            </table>
            <div class="sub-header">
                <b>C. DATA NASABAH PERORANGAN</b><br/><i>C. DATA OF INDIVIDUAL CUSTOMER</i>
            </div>

            <table>
                <tr>
                    <td class="content-left" width="50%">

                        <table>
                            <tr>
                                <td width="50%"><b>Alamat (sesuai tanda pengenal)</b><br/><i class="blue">Address (as it appears on ID Card)</i></td>
                                <td>:</td>
                            </tr>
                            <tr><td colspan="2" class="dot">{{ @$ktp['alamat']}}, RT {{ @$ktp['rt']}}, RW {{ @$ktp['rw']}}</td></tr>
                            <tr><td colspan="2" class="dot">{{ @$ktp['kelurahan']}}, {{ @$ktp['kecamatan']}}</td></tr>
                        </table>
                        <br/><br/>
                        <table>
                            <tr>
                                <td width="25%"><b>Kota</b><br/><i class="blue">City</i></td>
                                <td width="10">:</td>
                                <td colspan="5">{{ @$ktp['kota']['name']}}</td>
                            </tr>
                            <tr>
                                <td width="25%"><b>Kode Pos</b><br/><i class="blue">Postal Code</i></td>
                                <td width="10">:</td>
                                <td class="sq5" width="25%">{{ @$ktp['kode_pos']}}</td>
                                <td width="10"></td>
                                <td><b>Negara</b><br/><i class="blue">Country</i></td>
                                <td width="10">:</td>
                                <td><b>INDONESIA</b></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td width="50%"><b>Alamat Surat Menyurat</b><br/><i class="blue">Corespondence Address</i></td>
                                <td>:</td>
                            </tr>
                            <tr><td colspan="2" class="dot">{{ @$ktp['alamat']}}, RT {{ @$ktp['rt']}}, RW {{ @$ktp['rw']}}</td></tr>
                            <tr><td colspan="2" class="dot">{{ @$ktp['kelurahan']}}, {{ @$ktp['kecamatan']}}</td></tr>
                        </table>
                        <br/><br/>
                        <table>
                            <tr>
                                <td width="25%"><b>Kota</b><br/><i class="blue">City</i></td>
                                <td width="10">:</td>
                                <td colspan="5">{{ @$ktp['kota']['name']}}</td>
                            </tr>
                            <tr>
                                <td width="25%"><b>Kode Pos</b><br/><i class="blue">Postal Code</i></td>
                                <td width="10">:</td>
                                <td class="sq5" width="25%">{{ @$ktp['kode_pos']}}</td>
                                <td width="10"></td>
                                <td><b>Negara</b><br/><i class="blue">Country</i></td>
                                <td width="10">:</td>
                                <td><b>INDONESIA</b></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td width="25%"><b>No. Telepon</b><br/><i class="blue">Telephone No.</i></td>
                                <td width="10">:</td>
                                <td class="sq2" width="40"></td>
                                <td width="10">-</td>
                                <td class="sq2"></td>
                            </tr>
                            <tr>
                                <td width="25%"><b>No. Fax</b><br/><i class="blue">Fax No.</i></td>
                                <td width="10">:</td>
                                <td class="sq1" width="40"></td>
                                <td width="10">-</td>
                                <td class="sq2"></td>
                            </tr>
                        </table>
                        <br/><br/>
                        <table>
                            <tr>
                                <td width="25%"><b>No. HP</b><br/><i class="blue">Mobile Phone No.</i></td>
                                <td width="5">:</td>
                                <td class="sq2" width="40">62</td>
                                <td width="5">-</td>
                                <td class="sq11">{{ @str_replace('62', '', $nasabah['no_telp'])}}</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td width="25%"><b>Alanat E-mail</b><br/><i class="blue">E-mail Address</i></td>
                                <td>
                                    <span>: {{ @$nasabah['email']}}</span><br/>
                                    <i>(Alamat e-mail ini akan digunakan untuk pengiriman e-Statement)</i>
                                    <i class="blue">(This e-mail address will be used for the delivery of e-Statement)</i>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td><b>NPWP</b><br/><i class="blue">Tax ID No.</i></td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li>Ada<br/><i class="blue">Available</i></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="active">Tidak Ada<br/><i class="blue">Not Available</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr><td></td><td colspan="2">No.</td></tr>
                            <tr>
                                <td><b>Tanda Pengenal</b><br/><i class="blue">Identity Card.</i></td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="active">KTP<br/><i class="blue">Resident's ID Card</i></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li>Paspor<br/><i class="blue">Passport</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr><td></td><td colspan="2">No. {{ @$ktp['nik']}}</td></tr>
                        </table>
                        <table>
                            <tr>
                                <td width="25%"><b>Berlaku s.d.</b><br/><i class="blue">Valid until</i></td>
                                <td width="10">:</td>
                                <td class="sq2" width="40">01</td>
                                <td width="10">-</td>
                                <td class="sq2" width="40">01</td>
                                <td width="10">-</td>
                                <td class="sq4">2999</td>
                            </tr>
                        </table>
                    </td>
                    <td class="content-right">

                        <table>
                            <tr>
                                <td width="40%"><b>Jenis Kelamin</b><br/><i class="blue">Sex</i></td>
                                <td width="10">:</td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="{{ @strtolower($ktp['jenis_kelamin']) == 'wanita' ? '':'active'}}">Laki-laki<br/><i class="blue">Male</i></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li  class="{{ @strtolower($ktp['jenis_kelamin']) == 'wanita' ? 'active':''}}">Perempuan<br/><i class="blue">Female</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Tempat Lahir</b><br/><i class="blue">Place of Birth</i></td>
                                <td>:</td>
                                <td colspan="2">{{ @$ktp['tempat_lahir']}}</td>
                            </tr>
                            <tr>
                                <td><b>Negara Tempat Lahir</b><br/><i class="blue">Country of Birth</i></td>
                                <td>:</td>
                                <td colspan="2">{{ @$ktp['negara_lahir']}}</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td width="40%"><b>Tanggal Lahir</b><br/><i class="blue">Date of Birth</i></td>
                                <td width="10">:</td>
                                <td class="sq2" width="40">{{ date('d', strtotime($ktp['tanggal_lahir'])) }}</td>
                                <td width="10">-</td>
                                <td class="sq2" width="40">{{ date('m', strtotime($ktp['tanggal_lahir'])) }}</td>
                                <td width="10">-</td>
                                <td class="sq4">{{ date('Y', strtotime($ktp['tanggal_lahir'])) }}</td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td width="40%"><b>Status Perkawinan</b><br/><i class="blue">Marital Status</i></td>
                                <td>:</td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="{{ @strtolower($ktp['status_perkawinan']) == 'single' ? 'active':''}}">Lajang<br/><i class="blue">Single</i></li>
                                        <li class="{{ @strtolower($ktp['status_perkawinan']) == 'menikah' ? 'active':''}}">Menikah<br/><i class="blue">Married</i></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="{{ @strtolower($ktp['status_perkawinan']) == 'janda' || strtolower($ktp['status_perkawinan']) == 'duda' ? 'active':''}}">Janda/Duda<br/><i class="blue">Widow/Widower/Divorced</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Agama</b><br/><i class="blue">Religion</i></td>
                                <td>:</td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="active">Islam<br/><i class="blue">Islam</i></li>
                                        <li>Katolik<br/><i class="blue">Catholic</i></li>
                                        <li>Kristen<br/><i class="blue">Christianity</i></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li>Hindu<br/><i class="blue">Hinduism</i></li>
                                        <li>Buddha<br/><i class="blue">Buddhism</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>Kewarganegaraan</b><br/><i class="blue">Nationality</i></td>
                                <td>:</td>
                                <td colspan="2">
                                    <ul class="list-radio-vertical">
                                        <li class="active">WNI<br/><i class="blue">Indonesian</i></li>
                                        <li>WNA, Negara ..........<br/><i class="blue">Foreigner, Country ..........</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>KITAS / KITAP</b><br/><i class="blue">Limited / Permanent Stay Permit<br/>(only for Foreigner)</i></td>
                                <td>:</td>
                                <td colspan="2">
                                    <ul class="list-radio-vertical">
                                        <li class="active">Tidak Ada<br/><i class="blue">Not Available</i></li>
                                        <li>Ada, No ..........<br/><i class="blue">Available, namely, No ..........</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td width="30%"><b>Berlaku s.d.</b><br/><i class="blue">Valid until</i></td>
                                            <td width="5">:</td>
                                            <td class="sq2" width="40">01</td>
                                            <td width="5">-</td>
                                            <td class="sq2" width="40">01</td>
                                            <td width="5">-</td>
                                            <td class="sq4">2999</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                        <table class="table-box">
                            <tr>
                                <td colspan="4" class="tac"><b>Foreign Account Tax Compliance Act (FATCA)</b></td>
                            </tr>
                            <tr>
                                <td width="10"><b>1.</b></td>
                                <td><b>Nasabah berkewarganegaraan Amerika Serikat (AS)</b><br/><i class="blue">Customer is a United States (US) citizen</i></td>
                                <td width="20">
                                    <ul class="list-radio-vertical">
                                        <li>Ya<br/><i class="blue">Yes</i></li>
                                    </ul>
                                </td>
                                <td width="20">
                                    <ul class="list-radio-vertical">
                                        <li class="active">Tidak<br/><i class="blue">No</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>2.</b></td>
                                <td><b>Nasabah adalah pemegang kartu penduduk tetap AS - Green Card</b><br/><i class="blue">Customer is a US Permanent Resident Card (Green Card) holder</i></td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li>Ya<br/><i class="blue">Yes</i></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="active">Tidak<br/><i class="blue">No</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td><b>3.</b></td>
                                <td><b>Nasabah memiliki kewajiban pelaporan pajak kepada Pemerintah AS</b><br/><i class="blue">Customer is obliged to file income tax returns with the US Government</i></td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li>Ya<br/><i class="blue">Yes</i></li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-radio-vertical">
                                        <li class="active">Tidak<br/><i class="blue">No</i></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <p>
                                        Jika Nasabah memilih ‘Ya’ pada salah satu pernyataan di atas, mohon sertakan <b>Form W-9 (Request for
                                        Taxpayer Identification Number and Certification)</b> dan tuliskan <b>Taxpayer Identification Number
                                        (TIN)/Social Security Number (SSN)</b> Nasabah
                                    </p>
                                    <p>
                                        If Customer answers ‘Yes’ to any of the foregoing facts, please complete and furnish BCA with Form W-9
                                    <b>(Request for Taxpayer Identification Number and Certification)</b> and write <b>Customer's Taxpayer
                                        Identification Number (TIN)/Social Security Number (SSN)</b> below
                                    </p>
                                    <p>
                                        <table>
                                            <tr>
                                                <td width="20%"><b>TIN/SSN :</b></td>
                                                <td class="dot"></td>
                                            </tr>
                                        </table>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="paraf-box">
            <div class="paraf">Paraf:</div>
            <div class="page">1/6</div>
        </div>
    </div>
    

    <!-- Page #2 -->
    <div class="paper">
        <div class="content">
            <div class="sub-header">
                <b>D. DATA NASABAH BADAN USAHA</b><br/>
                <i>D. DATA OF CORPORATE CUSTOMER</i>
            </div>
            <table>
                <tr>
                    <td width="30%">
                        <b>Pendidikan Terakhir</b><br/>
                        <i class="blue">Last Education</i>
                    </td>
                    <td width="10">:</td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>SD</b><br/><i class="blue">Elementary School</i></li>
                            <li><b>SLTP</b><br/><i class="blue">Junior High School</i></li>
                            <li><b>SMU</b><br/><i class="blue">Senior High School</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Akademi</b><br/><i class="blue">Non-degree</i></li>
                            <li><b>Universitas</b><br/><i class="blue">University</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li class="none"><b>Nama Referensi</b><br/><i class="blue">Name of Referee</i></li>
                            <li class="none"><b>Nama Gadis Ibu Kandung</b><br/><i class="blue">Mother's Maiden Name</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li class="none"><b>: ........................................</b><br/><br/></li>
                            <li class="none"><b>Nama Gadis Ibu Kandung</b></li>
                        </ul>
                    </td>
                </tr>
                <!-- 2 -->
                <tr>
                    <td width="30%">
                        <b>Sumber Penghasilan</b><br/>
                        <i class="blue">Source of Income</i>
                    </td>
                    <td width="10">:</td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Hasil Usaha</b><br/><i class="blue">Business Proceeds</i></li>
                            <li><b>Gaji</b><br/><i class="blue">Salary</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Hasil Investasi/b><br/><i class="blue">Non-degree</i></li>
                            <li><b>...............</b><br/><br/></li>
                        </ul>
                    </td>
                    <td colspan="2">
                        <ul class="list-radio-vertical">
                            <li class="none"><b>Orang Tua</b><br/><i class="blue">Parents</i></li>
                        </ul>
                    </td>
                </tr>
                <!-- 3 -->
                <tr>
                    <td width="30%">
                        <b>Nama Kantor / Perusahaan Tempat Bekerja</b><br/>
                        <i class="blue">Name of Office / Company</i>
                    </td>
                    <td width="10">:</td>
                    <td colspan="4">Sample</td>
                </tr>
                <!-- 4 -->
                <tr>
                    <td width="30%">
                        <b>Jabatan / Pangkat</b><br/>
                        <i class="blue">Position / Title</i>
                    </td>
                    <td width="10">:</td>
                    <td colspan="4">Sample</td>
                </tr>
                <!-- 3 -->
                <tr>
                    <td width="30%">
                        <b>Bidang Usaha</b><br/>
                        <i class="blue">Field of Business</i>
                    </td>
                    <td width="10">:</td>
                    <td colspan="4">Sample</td>
                </tr>
                <!-- 3 -->
                <tr>
                    <td width="30%">
                        <b>Alamat Kantor / Perusahaan Tempat Bekerja</b><br/>
                        <i class="blue">Address of Office / Company</i>
                    </td>
                    <td width="10" colspan="5">:</td>
                </tr>
                <tr><td class="dot" colspan="6">&nbsp;</td></tr>
                <tr><td class="dot" colspan="6">&nbsp;</td></tr>
            </table>
            <br/><br/><br/>
            <table>
                <tr>
                    <td width="30%">
                        <b>Kota</b><br/>
                        <i class="blue">City</i>
                    </td>
                    <td width="10">:</td>
                    <td colspan="3">YOGYAKARTA</td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Kode Pos</b><br/>
                        <i class="blue">Postal Code</i>
                    </td>
                    <td>:</td>
                    <td class="sq5" width="10%"></td>
                    <td></td>
                    <td><b>Negara : INDONESIA</b><br/><i>Country</i></td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>No. Telepon</b><br/>
                        <i class="blue">Telephone No.</i>
                    </td>
                    <td>:</td>
                    <td class="sq2" width="10%">62</td>
                    <td>-</td>
                    <td class="sq10"></td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>No. Fax</b><br/>
                        <i class="blue">Fax No.</i>
                    </td>
                    <td colspan="4">:</td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Pekerjaan</b><br/>
                        <i class="blue">Occupation</i>
                    </td>
                    <td>:</td>
                    <td width="20%">
                        <ul class="list-radio-vertical">
                            <li><b>Pelajar / Mahasiswa</b><br/><i class="blue">Pupil / Student</i></li>
                            <li><b>Pegawai Negeri</b><br/><i class="blue">Civil Servant</i></li>
                            <li><b>Pensiunan</b><br/><i class="blue">Retiree</i></li>
                            <li><b>Pengusaha Jasa</b><br/><i class="blue">Service Provider</i></li>
                            <li><b>Akuntan</b><br/><i class="blue">Accountant</i></li>
                            <li><b>Notaris</b><br/><i class="blue">Notary</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Ibu Rumah Tangga</b><br/><i class="blue">Housewife</i></li>
                            <li><b>TNI / Polri</b><br/><i class="blue">Armed Force / Police</i></li>
                            <li><b>Pengusaha Pabrikan</b><br/><i class="blue">Manufacturer</i></li>
                            <li><b>Dokter</b><br/><i class="blue">Doctor</i></li>
                            <li><b>Wartawan</b><br/><i class="blue">Wartawan</i></li>
                            <li><b>Profesional Lainnya</b><br/><i class="blue">Other Professional</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Karyawan Swasta</b><br/><i class="blue">Private Employee</i></li>
                            <li><b>Pjb. Negara / Daerah</b><br/><i class="blue">State / Regional Official</i></li>
                            <li><b>Pedagang</b><br/><i class="blue">Trader</i></li>
                            <li><b>Dokter</b><br/><i class="blue">Lawyer</i></li>
                            <li><b>Seniman</b><br/><i class="blue">Seniman</i></li>
                            <li><b>........................</b><br/><br/></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Penghasilan / Gaji Kotor Pertahun</b><br/>
                        <i class="blue">Gross Income / Salary per Year</i>
                    </td>
                    <td>:</td>
                    <td width="20%">
                        <ul class="list-radio-vertical">
                            <li><b><= 15 Juta</b><br/><i class="blue"><= 15 Million</i></li>
                            <li><b>> 25 Juta - 400 Juta</b><br/><i class="blue">> 25 Million - 400 Million</i></li>
                        </ul>
                    </td>
                    <td colspan="2">
                        <ul class="list-radio-vertical">
                            <li><b>> 15 Juta - 25 Juta</b><br/><i class="blue">> 15 Million - 25 Million</i></li>
                            <li><b>> 400 Juta</b><br/><i class="blue">> 400 Million</i></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Penghasilan Lainnya Pertahun</b><br/>
                        <i class="blue">Other Income per Year</i>
                    </td>
                    <td>:</td>
                    <td class="dot" colspan="3"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td width="20%">
                        <ul class="list-radio-vertical">
                            <li><b><= 15 Juta</b><br/><i class="blue"><= 15 Million</i></li>
                            <li><b>> 25 Juta - 400 Juta</b><br/><i class="blue">> 25 Million - 400 Million</i></li>
                        </ul>
                    </td>
                    <td colspan="2">
                        <ul class="list-radio-vertical">
                            <li><b>> 15 Juta - 25 Juta</b><br/><i class="blue">> 15 Million - 25 Million</i></li>
                            <li><b>> 400 Juta</b><br/><i class="blue">> 400 Million</i></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Total Penghasilan</b><br/>
                        <i class="blue">Total Income</i>
                    </td>
                    <td>:</td>
                    <td width="20%">
                        <ul class="list-radio-vertical">
                            <li><b><= 15 Juta</b><br/><i class="blue"><= 15 Million</i></li>
                            <li><b>> 25 Juta - 400 Juta</b><br/><i class="blue">> 25 Million - 400 Million</i></li>
                        </ul>
                    </td>
                    <td colspan="2">
                        <ul class="list-radio-vertical">
                            <li><b>> 15 Juta - 25 Juta</b><br/><i class="blue">> 15 Million - 25 Million</i></li>
                            <li><b>> 400 Juta</b><br/><i class="blue">> 400 Million</i></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Status Rumah</b><br/>
                        <i class="blue">Home Status</i>
                    </td>
                    <td>:</td>
                    <td width="20%">
                        <ul class="list-radio-vertical">
                            <li><b>Milik Pribadi</b><br/><i class="blue">Self-owned</i></li>
                            <li><b>Sewa / Kos</b><br/><i class="blue">Montly Rent</i></li>
                        </ul>
                    </td>
                    <td colspan="2">
                        <ul class="list-radio-vertical">
                            <li><b>Kontrak</b><br/><i class="blue">Rented</i></li>
                            <li><b>Ikut orang tua</b><br/><i class="blue">Owned by Parents</i></li>
                        </ul>
                    </td>
                </tr>
            </table>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        </div>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="paraf-box">
            <span>Paraf:</span>
            <span class="page">2/6</span>
        </div>
    </div>
        

    <!-- Page #3 -->
    <div class="paper">
        <div class="content">
            <div class="sub-header">
                <b>D. DATA NASABAH BADAN USAHA</b><br/>
                <i>D. DATA OF CORPORATE CUSTOMER</i>
            </div>
            <table>
                <tr>
                    <td width="30%">
                        <b>Bentuk Usaha</b><br/>
                        <i class="blue">Form of Entity</i>
                    </td>
                    <td width="10">:</td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>PT</b><br/><i class="blue">Limited Liability Company</i></li>
                            <li><b>Lembaga Internasional</b><br/><i class="blue">Internasional Institution</i></li>
                            <li><b>Perwakilan Negara Asing</b><br/><i class="blue">Representative of Foreign Country</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>FA / CV</b><br/><i class="blue">FA / CV</i></li>
                            <li><b>Bank</b><br/><i class="blue">Bank</i></li>
                            <li><b>Koperasi</b><br/><i class="blue">Cooperative</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Yayasan</b><br/><i class="blue">Foundation</i></li>
                            <li><b>Lembaga Keuangan</b><br/><i class="blue">Financial Institution</i></li>
                            <li><b>Lainnya .................</b><br/><i class="blue">Other</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Lembaga Pemerintah</b><br/><i class="blue">Government Institution</i></li>
                            <li><b>Partai Politik</b><br/><i class="blue">Political Party</i></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Negara Asal (bagi badan usaha asing)</b><br/>
                        <i class="blue">Country of origin (only for foreign entity)</i>
                    </td>
                    <td>:</td>
                    <td class="dot"></td>
                    <td>
                        <b>Bidang Usaha</b><br/>
                        <i class="blue">Field of Business</i>
                    </td>
                    <td class="dot" colspan="2"></td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Izin Usaha</b><br/>
                        <i class="blue">Business License</i>
                    </td>
                    <td>:</td>
                    <td class="dot"></td>
                    <td>
                        <b>Berlaku</b><br/>
                        <i class="blue">Valid Until</i>
                    </td>
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="sq2" width="40">01</td>
                                <td width="5">-</td>
                                <td class="sq2" width="40">01</td>
                                <td width="5">-</td>
                                <td class="sq4">2999</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Nama Nasabah</b><br/>
                        <i class="blue">Customer Name</i>
                    </td>
                    <td>:</td>
                    <td class="dot" colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Alamat Nasabah</b><br/>
                        <i class="blue">Customer Address</i>
                    </td>
                    <td>:</td>
                    <td class="dot" colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">
                        <table>
                            <tr>
                                <td width="10%"><b>Kota</b><br/><i class="blue">City</i></td>
                                <td class="dot" width="15%">&nbsp;</td>
                                <td width="20"></td>
                                <td width="20%"><b>Kode Pos</b><br/><i class="blue">Postal Code</i></td>
                                <td class="sq5" width="20%"></td>
                                <td></td>
                                <td width="10%"><b>Negara</b><br/><i class="blue">Country</i></td>
                                <td class="dot">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Alamat Surat Menyurat</b><br/>
                        <i class="blue">Correspondence Address</i>
                    </td>
                    <td>:</td>
                    <td class="dot" colspan="4">&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="4">
                        <table>
                            <tr>
                                <td width="10%"><b>Kota</b><br/><i class="blue">City</i></td>
                                <td class="dot" width="15%">&nbsp;</td>
                                <td width="20"></td>
                                <td width="20%"><b>Kode Pos</b><br/><i class="blue">Postal Code</i></td>
                                <td class="sq5" width="20%"></td>
                                <td></td>
                                <td width="10%"><b>Negara</b><br/><i class="blue">Country</i></td>
                                <td class="dot">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="30%">
                        <b>Dalam hal ini bertindak</b><br/>
                        <i class="blue">In this matter acting</i>
                    </td>
                    <td width="10">:</td>
                    <td>
                        <b>Untuk Kepentingan Nasabah</b><br/><i class="blue">In Customer's Interest</i>
                    </td>
                    <td>
                        <b>Sebagai wakil dari pihak lain</b><br/><i class="blue">As a representative or proxy for another party</i>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Wali Amanant</b><br/><i class="blue">Trustee</i></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="list-radio-vertical">
                            <li><b>Lainnya</b><br/><i class="blue">Other</i></li>
                        </ul>
                    </td>
                </tr>
                <tr>
            </table>
        </div>
        <div class="paraf-box">
            <span>Paraf:</span>
            <span class="page-no"></span>
        </div>
    </div>
        


    <!-- Page #4 -->
    <div class="paper">
        <div class="content">
            <div class="outline ">

                <div class="section-header center-content mt-440px">
                    <span>E. PERNYATAAN NASABAH</span>
                    <i>E. CUSTOMER&apos;S STATEMENT</i>
                </div>

                <div class="section-content pb-0">
                    <div class="bilingual">
                        <div>Dengan ini Nasabah menyatakan :</div>
                        <div>Customer hereby states that:</div>
                    </div>
                    <ol>
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Seluruh data atau keterangan yang tertera pada Formulir Rekening Dana Nasabah ("Formulir") ini dan seluruh data/identitas Nasabah yang diberikan kepada PT Bank
                                    Central Asia Tbk ("BCA") melalui Perusahaan Efek atau Bank Kustodian adalah benar, akurat, dan lengkap. Nasabah bertanggung jawab sepenuhnya atas segala
                                    akibat yang timbul dari pemberian data, keterangan, atau identitas yang tidak benar, tidak akurat, atau tidak lengkap dan Nasabah dengan ini membebaskan BCA dari
                                    segala tuntutan dan/atau gugatan dalam bentuk apapun dan dari pihak manapun termasuk dari Nasabah sehubungan dengan hal tersebut dan pengisian Formulir ini.
                                </div>
                                <div>
                                    All the data or information provided in this Application Form for Customer Fund Account (“Form”) and all information about the data/identity of Customer provided to PT
                                    Bank Central Asia Tbk (“BCA”) via Securities Company or Custodian Bank is true, accurate, and complete. Customer is fully responsible for any consequences arising
                                    from the provision of false, inaccurate, or incomplete data, information, or identity and Customer hereby holds harmless BCA against all actions and/or claims in any
                                    form whatsoever and from any party whomsoever including from Customer in relation thereto and the completion of this Form.
    
                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah telah membaca, mengerti, menerima, dan menyetujui semua persyaratan dan ketentuan yang berlaku di BCA terkait dengan pembukaan Rekening Dana
                                    Nasabah. BCA berhak untuk mengubah persyaratan dan ketentuan terkait dengan pembukaan Rekening Dana Nasabah tersebut yang akan diberitahukan oleh BCA
                                    dalam bentuk dan melalui sarana apapun sesuai ketentuan hukum yang berlaku.
                                </div>
                                <div>
                                    Customer has read, understood, accepted and agreed to all the terms and conditions stipulated by BCA in connection with the opening of the Customer Fund Account.
                                    BCA may modify the terms and conditions related to the opening of Customer Fund Account which will be notified by BCA in any form and by any means whatsoever in
                                    accordance with the prevailing laws and regulations..
                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah mengetahui dan menyetujui segala bentuk pernyataan dan/atau dokumen tertulis lainnya dan/atau ketentuan-ketentuan sebagaimana dimaksud dalam butir 2
                                    di atas berikut seluruh lampiran yang melekat pada Formulir ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari Formulir ini.
                                </div>
                                <div>
                                    Customer hereby acknowledges and accepts that all statements and/or other written documents and/or terms and conditions as mentioned in point 2 above as well as
                                    the appendices attached to this Form constitute an integral and inseparable part of this Form.
                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah dengan ini memberikan kuasa dengan hak substitusi kepada :
    
                                </div>
                                <div>
                                    Customer hereby grants power with the right of substitution to:
                                </div>
                            </div>
                            
                            <ol class="list-alpha">
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            Perusahaan Efek atau Bank Kustodian sebagaimana tercantum pada bagian awal Formulir ini untuk mengelola Rekening Dana Nasabah di BCA yang dibuka
                                            berdasarkan Formulir ini (<b>"REKENING"</b>), termasuk tapi tidak terbatas untuk mendebet, memindahbukukan dana dari REKENING, meminta data, mutasi, dan
                                            keterangan lainnya atas REKENING kepada BCA, mengkoneksikan REKENING ke fasilitas KlikBCA yang dimiliki oleh Perusahaan Efek atau Bank Kustodian,
                                            menutup REKENING, dan melakukan tindakan-tindakan lain yang diperlukan dalam rangka pengelolaan REKENING terkait dengan transaksi efek yang dilakukan
                                            Nasabah melalui Perusahaan Efek atau Bank Kustodian tanpa ada tindakan yang dikecualikan;
    
                                        </div>
                                        <div>
                                            Securities Company or Custodian Bank as referred to in the earlier part of this Form to manage Customer Fund Account at BCA which is opened hereunder (
                                            <b>"ACCOUNT"</b>), including, without limitation, to debit and transfer funds from ACCOUNT, request data, transaction history (mutasi), and other ACCOUNT information
                                            to BCA, connect ACCOUNT with KlikBCA facility owned by Securities Company or Custodian Bank, close ACCOUNT as well as take any actions without exception
                                            as may be necessary in the framework of ACCOUNT management related to securities transactions conducted by Customer through Securities Company or
                                            Custodian Bank;
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            BCA untuk memberikan segala dokumen, data, informasi, dan keterangan lainnya terkait dengan Nasabah, REKENING, dan keuangan Nasabah kepada PT
                                            Kustodian Sentral Efek Indonesia ("KSEI"), Otoritas Jasa Keuangan ("OJK") dan instansi berwenang lainnya berdasarkan ketentuan hukum dan peraturan
                                            perundang-undangan yang berlaku di Indonesia maupun kepada otoritas berwenang di Amerika Serikat baik secara langsung maupun melalui OJK, otoritas pajak,
                                            dan/atau otoritas berwenang lainnya di Indonesia sesuai ketentuan hukum yang berlaku;
    
                                        </div>
                                        <div>
                                            BCA to provide all documents, data, information, and other statements related to Customer, ACCOUNT, and Customer&apos;s financial data to PT Kustodian Sentral Efek
                                            Indonesia ("KSEI"), Otoritas Jasa Keuangan (Indonesia Financial Services Authority, "OJK") and other competent authorities under the prevailing laws and
                                            regulations in Indonesia as well as to any competent authorities in the United States whether directly or through OJK, tax authorities, and/or other competent
                                            authorities in Indonesia in accordance with the prevailing law;
    
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            OJK untuk memblokir, mendebet, dan/atau memindahbukukan dana dari REKENING untuk keperluan pengamanan dana Nasabah yang ada di REKENING.
                                        </div>
                                        <div>
                                            OJK to block, debit, and/or transfer funds from ACCOUNT for the purpose of safeguarding Customer&apos;s funds in ACCOUNT.
                                        </div>
                                    </div>
                                    
                                </li>
                            </ol>
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah dengan ini bertanggung jawab sepenuhnya atas pelaksanaan kuasa sebagaimana dimaksud dalam butir 4 tersebut di atas dan dengan ini membebaskan
                                    BCA dari segala klaim, gugatan, tuntutan, dan/atau tindakan hukum lainnya dari pihak manapun termasuk dari Nasabah terkait dengan pelaksanaan kuasa dimaksud.
                                </div>
                                <div>
                                    Customer is fully responsible for any consequences arising from the exercise of the power referred to in point 4 above and hereby holds harmless BCA from all claims,
                                    lawsuits, demands, and/or other legal actions from any party including from Customer in relation to the exercise of the power described above.
                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Kuasa sebagaimana dimaksud dalam butir 4 di atas akan terus berlaku dan tidak dapat diakhiri karena alasan apapun juga termasuk karena alasan-alasan
                                    sebagaimana dimaksud dalam Pasal 1813, 1814, dan 1816 Kitab Undang-Undang Hukum Perdata. Khusus untuk kuasa sebagaimana dimaksud dalam butir 4a kuasa
                                    dapat berakhir dengan persetujuan tertulis dari Perusahaan Efek atau Bank Kustodian.
                                </div>
                                <div>
                                    The power as referred to in point 4 above shall continue to be in force and shall not be terminated for any reasons whatsoever, including for the reasons specified in
                                    Articles 1813, 1814, and 1816 of the Indonesian Civil Code; provided, however, that the power as referred to in point 4a above may be terminated upon the written
                                    consent of Securities Company or Custodian Bank.
                                </div>
                            </div>
                            
                        </li>
                    </ol>
                    <div class="bilingual w-full justify-right">
                        <div>
                            Bersambung ke halaman berikutnya....
                        </div>
                        <div>
                            Please turn over...
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="paraf-box">
            <span>Paraf:</span>
            <span class="page-no"></span>
        </div>
    </div>
        

    <!-- Page #5 -->
    <div class="paper">
        <div class="content">
            <div class="outline pb-0">

                <div class="section-header center-content">
                    <span>E. PERNYATAAN NASABAH</span>
                    <i>E. CUSTOMER&apos;S STATEMENT</i>
                </div>

                <div class="section-content pb-0">
                    <ol start="7">
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah setuju bahwa selama kuasa pengelolaan REKENING kepada Perusahaan Efek atau Bank Kustodian sebagaimana dimaksud dalam butir 4a tersebut di atas
                                    berlaku, Nasabah melepaskan hak Nasabah untuk melakukan pengelolaan atas REKENING termasuk tapi tidak terbatas hak untuk memberikan instruksi pendebetan
                                    dan pemindahan dana kepada BCA.
                                </div>
                                <div>
                                    Customer agrees that as long as the power granted to Securities Company or Custodian Bank to manage ACCOUNT as referred to in point 4a above remains effective,
                                    Customer relinquishes Customer&apos;s right to manage ACCOUNT including but not limited to the right to give debit and transfer instructions to BCA.
                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    BCA berhak memblokir, menolak transaksi dan/atau mengakhiri hubungan dengan Nasabah, antara lain apabila :
                                </div>
                                <div>
                                    BCA reserves the right to block, reject transactions and/or terminate its relationship with Customer, if among others:
                                </div>
                            </div>
                            <ol class="list-alpha">
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            Nasabah tidak memenuhi ketentuan hukum yang berlaku;
                                        </div>
                                        <div>
                                            Customer does not observe or abide by the prevailings laws and regulations;
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            Nasabah diketahui dan/atau patut diduga menggunakan dokumen palsu dan/atau memberikan data yang tidak benar kepada BCA atau data yang tercantum dalam
                                            Formulir ini tidak benar, tidak akurat, atau tidak lengkap;
                                        </div>
                                        <div>
                                            Customer is known and/or reasonably suspected of using false documents and/or providing false data to BCA or the data contained in this Form are not true,
                                            inaccurate, or incomplete;
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            Nasabah memiliki sumber dana transaksi yang diketahui dan/atau patut diduga berasal dari hasil tindak pidana;
                                        </div>
                                        <div>
                                            Customer has a source of transaction funds which is known and/or reasonably suspected of originating from criminal acts;
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            Nasabah tidak memberitahukan perubahan data atau informasi yang telah Nasabah berikan kepada BCA;
                                        </div>
                                        <div>
                                            Customer has failed to notify BCA of the change in the data or information provided by Customer to BCA
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            Menurut penilaian BCA, REKENING digunakan untuk:
                                        </div>
                                        <div>
                                            In BCA&apos;s judgment, ACCOUNT is used to:
                                        </div>
                                    </div>
                                    <ul class="hyphen-list">
                                        <li class="">
                                            <div class="bilingual mt--12px">
                                                <div>
                                                    Money game , arisan berantai/berjenjang, pyramid scheme , dan usaha lainnya yang menjanjikan keuntungan di luar kewajaran;
                                                </div>
                                                <div>
                                                    Conduct money game, chain/tiered arisan, pyramid scheme, and other businesses promising unreasonably huge profit;
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="bilingual mt--12px">
                                                <div>
                                                    Melakukan tindakan/usaha yang melanggar ketentuan hukum yang berlaku.

                                                </div>
                                                <div>
                                                    Perform action/business in violation of applicable laws.

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah telah memahami segala konsekuensi yang mungkin timbul sehubungan dengan pembukaan REKENING, termasuk manfaat, risiko, biaya-biaya yang
                                    dibebankan atas pembukaan REKENING.
                                </div>
                                <div>
                                    Customer understands all consequences that may arise in connection with the opening of ACCOUNT, including all the benefits, risks, costs that may be obtained and
                                    incurred in connection with the opening of ACCOUNT.
                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah bertanggung jawab sepenuhnya atas segala akibat yang timbul sehubungan dengan pembukaan REKENING dan pengelolaannya oleh Perusahaan Efek
                                    atau Bank Kustodian, termasuk tapi tidak terbatas pada penyalahgunaan dana yang ada di REKENING oleh Perusahaan Efek atau Bank Kustodian. Nasabah dengan
                                    ini membebaskan BCA dari segala macam klaim, gugatan, tuntutan, dan/atau tindakan hukum lainnya dalam bentuk apapun dari pihak manapun termasuk dari
                                    Nasabah terkait dengan pembukaan REKENING dan pengelolaannya oleh Perusahaan Efek atau Bank Kustodian.
                                </div>
                                <div>
                                    Customer is fully responsible for any consequences arising from the opening of ACCOUNT and its management by Securities Company or Custodian Bank, including
                                    but not limited to the misuse of funds available in ACCOUNT by Securities Company or Custodian Bank. Customer hereby holds harmless BCA against all kinds of
                                    claims, lawsuits, demands, and/or other legal actions of any kind from any party including from Customer in connection with the opening of ACCOUNT and its
                                    management by Securities Company or Custodian Bank
                                </div>
                            </div>
                            
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah dengan ini menyatakan bahwa pihak pengendali akhir dari badan usaha ini adalah ..................................................................................... *)
                                </div>
                                <div>
                                    Customer hereby declares that the ultimate beneficial owner of this business entity is ............................................................................................. *)

                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Dengan mengisi alamat e-mail pada huruf C atau D Formulir ini, Nasabah dengan ini setuju bahwa rekening koran dari REKENING akan dikirim oleh BCA dalam
                                    bentuk e- Statement ke alamat e-mail yang telah diberikan oleh Nasabah tersebut.
                                </div>
                                <div>
                                    By providing e-mail address in letter C or D of this Form, Customer hereby agrees that the statement of the ACCOUNT will be sent by BCA in the form of e-Statement
                                    to the e-mail address as provided by Customer
                                </div>
                            </div>
                            
                        </li>
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Nasabah memiliki/<s>tidak memiliki</s>* NPWP. <b>(*Coret yang tidak sesuai)</b>

                                </div>
                                <div>
                                    Customer holds/does not hold Taxpayer Identification Number (NPWP) <b>(*Cross out as appropriate)</b>
                                </div>
                            </div>
                            <div class="bilingual">
                                <div>
                                    Dalam hal Nasabah tidak memiliki NPWP, maka Nasabah dengan ini menyatakan bahwa:
                                </div>
                                <div>
                                    If Customer does not hold NPWP, Customer hereby states that:
                                </div>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td class="mr-4px w-10px">
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td class="bilingual">
                                            <div>
                                                Nasabah adalah Wajib Pajak yang sesuai dengan ketentuan perpajakan yang berlaku sudah memenuhi persyaratan subjektif dan objektif dan diwajibkan untuk
                                                mendaftarkan diri guna mendapatkan NPWP, antara lain memiliki penghasilan di atas Penghasilan Tidak Kena Pajak (PTKP). Sehubungan dengan hal tersebut,
                                                Nasabah dengan ini mengikatkan diri untuk segera melakukan pengurusan NPWP dan segera menyerahkan fotokopi NPWP kepada BCA.
                                            </div>
                                            <div>
                                                Customer is a Taxpayer who, under the prevailing tax regulations, has met subjective and objective requirements and is obliged to register in order to obtain
                                                NPWP, the requirements of which include earning income above non-taxable income (PTKP). With regard thereto, Customer hereby undertakes to obtain NPWP
                                                and immediately submit the copy of NPWP to BCA.
        
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table>
                                    <tr>
                                        <td class="mr-4px w-10px">
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td class="bilingual">
                                            <div>
                                                Nasabah adalah Wajib Pajak yang sesuai dengan ketentuan perpajakan yang berlaku, saat ini tidak/belum memenuhi persyaratan subjektif dan objektif untuk
                                                mendapatkan NPWP. Jika di kemudian hari persyaratan tersebut telah dapat dipenuhi, maka Nasabah dengan ini mengikatkan diri untuk segera melakukan
                                                pengurusan NPWP dan segera menyerahkan fotokopi NPWP kepada BCA.
                                            </div>
                                            <div>
                                                Customer is a Taxpayer who, under the prevailing tax regulations, currently does not/has not met subjective and objective requirements to obtain NPWP. If in the
                                                future Customer has met such requirements, Customer hereby undertakes to obtain NPWP and immediately submit the copy of NPWP to BCA.
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </li>

                    </ol>
                    <div class="bilingual">
                        <div>
                            Demikian pernyataan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.
                        </div>
                        <div>
                            This statement has been made truthfully in order to be used accordingly.
                        </div>
                    </div>

                    <table>
                        <tr>
                            <td class="w-90pct"></td>
                            <td>
                                <div class="w-220px mt-4px text-align-start">
                                    <span>Sidoarjo , 10/06/2022</span>
                                    <table class="h-100px">
                                        <tr class="h-90pct">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="mb-8px paraf-placeholder pb-10px w-180px">
                                                    Mochamad Bahrudin Firmansyah
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                    <div class="bilingual text-center w-180px">
                                        <div>
                                            Nama Jelas dan Ttd Nasabah
                                        </div>
                                        <div>
                                            Customer&apos;s Full Name and Signature
                                        </div>
                                    </div>
                                </div>
                            </td> 
                        </tr>
                    </table>
                    

                    <div class="bilingual">
                        <div>
                            *) Diisi khusus untuk nasabah badan usaha
                        </div>
                        <div>
                            *) To be completed by corporate customer only
                        </div>
                    </div>

                </div>

                <div class="section-header center-content">
                    <span>KOLOM VALIDASI & CATATAN BANK</span>
                    <i>BANK VALIDATION & REMARKS</i>
                </div>

                <table class="table-all-borders table-bank-validation">
                    
                    <tr>
                        <td class="w-25pct">
                            <div class="bilingual text-10px text-semibold text-center">
                                <div>
                                    DIPROSES OLEH
                                </div>
                                <div>
                                    PROCESSED BY
                                </div>
                            </div>
                        </td>
                        <td class="w-25pct">
                            <div class="bilingual text-10px text-semibold text-center">
                                <div>
                                    DISETUJUI OLEH
                                </div>
                                <div>
                                    APPROVED BY
                                </div>
                            </div>
                        </td>
                        <td class="w-25pct">
                            <div class="bilingual text-10px text-semibold text-center">
                                <div>
                                    CATATAN
                                </div>
                                <div>
                                    NOTE
                                </div>
                            </div>
                        </td>
                        <td class="w-25pct">
                            <div class="bilingual text-10px text-semibold text-center">
                                <div>
                                    Klasifikasi FATCA
                                </div>
                                <div>
                                    FATCA Classification
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="flex-row">
                                <div class="bilingual">
                                    <div>Kategori Nasabah :</div>
                                    <div>Category of Customer :</div>
                                </div>
                                <table class="w-10px">
                                    <tr>
                                        <td class="w-10px">
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td class="w-10px">
                                            R
                                        </td>
                                        <td class="w-10px">
                                            <input type="checkbox" name="" id="">
                                        </td class="w-10px">
                                        <td class="w-10px">
                                            S
                                        </td>
                                        <td class="w-10px">
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td class="w-10px">T</td>
                                    </tr>
                                </table>
                            </div>
                            <div>..........................................................................</div>
                            <div>..........................................................................</div>
                            <div>..........................................................................</div>
                        </td>
                        <td>
                            <table class="table-no-borders">
                                <tr>
                                    <td class="w-10px">
                                        <input class="common-checkbox" type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <div class="bilingual">
                                            <div>
                                                Nasabah Wajib FATCA <br>
                                                (Form W-9 terlampir) 
                                            </div>
                                            <div>
                                                Customer subject to FATCA <br>
                                                (Form W-9 is attached)
                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td class="w-10px">
                                        <input class="common-checkbox" type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <div class="bilingual">
                                            <div>
                                                Bukan Nasabah Wajib FATCA
                                            </div>
                                            <div>
                                                Customer not subject to FATCA
                                            </div>
                                        </div>
                                    </td>
                                    
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="bilingual text-smaller">
                <div>
                    Pembukaan rekening ini dianggap sah jika telah disetujui oleh pejabat BCA yang berwenang.
                </div>
                <div>
                    This account opening is considered valid only if it has been approved by the authorized officer of BCA
                </div>
            </div>
        </div>
        
        <div class="paraf-box">
            <div>Paraf:</div>
            <div class="page-no"></div>
        </div>
    </div>
        

    <!-- Page #6 -->
    <div class="paper">
        <div class="content">
            <div class="outline pb-0">

                <div class="section-header center-content">
                    <span>F. KETENTUAN TAMBAHAN BAGI PEMILIK REKENING DANA NASABAH PT BANK CENTRAL ASIA TBK ("BCA")</span>
                    <i>F. ADDITIONAL TERMS FOR HOLDER OF CUSTOMER FUND ACCOUNT OF PT BANK CENTRAL ASIA TBK ("BCA")</i>
                </div>

                <div class="section-content pb-0">
                    <ol start="1">
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Rekening Dana Nasabah tidak dapat dibuka dengan status rekening gabungan (joint account ). 
                                </div>
                                <div>
                                    The Customer Fund Account cannot be opened with a joint account status.
                                </div>
                            </div>
                            
                        </li>
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Rekening Dana Nasabah yang berbentuk rekening Giro tidak akan diberikan buku Cek/Bilyet Giro maupun tanda pengenal dalam bentuk apapun. Untuk Rekening Dana Nasabah yang
                                    berbentuk tabungan, BCA tidak menerbitkan maupun memberikan bukti kepemilikan bagi pemilik Rekening Dana Nasabah seperti buku tabungan, Kartu PASPOR BCA, atau Kartu BCA
                                    Dollar.

                                </div>
                                <div>
                                    The Customer Fund Account opened in the form of a current account will not be provided with any cheque/Bilyet Giro nor other identification in any form. For Customer Fund Account in the
                                    form of a savings account, BCA will not issue or provide any proof of ownership for the holder of the Customer Fund Account including the passbook or PASPOR BCA Card.
                                </div>
                            </div>
                            
                        </li>
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Segala transaksi atas Rekening Dana Nasabah hanya dapat dilakukan :

                                </div>
                                <div>
                                    All transactions under the Customer Fund Account can only be conducted:
                                </div>
                            </div>
                            <ol class="list-alpha">
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            melalui KlikBCA dan/atau sarana lain yang ditentukan oleh BCA; dan
                                        </div>
                                        <div>
                                            through KlikBCA and/or other means as determined by BCA; and
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            oleh Perusahaan Efek atau Bank Kustodian yang telah mendapatkan kuasa dari pemilik Rekening Dana Nasabah untuk mengelola Rekening Dana Nasabah.
                                        </div>
                                        <div>
                                            by Securities Company or Custodian Bank which has been vested with the authority by the holder of the Customer Fund Account to manage the Customer Fund Account.
                                        </div>
                                    </div>
                                    
                                </li>
                            </ol>
                            <div class="bilingual">
                                <div>
                                    Transaksi pengkreditan dana ke Rekening Dana Nasabah oleh BCA dapat dilakukan melalui KlikBCA, counter , dan/atau sarana lain yang ditentukan BCA yang akan diberitahukan oleh
                                    BCA kepada pemilik Rekening Dana Nasabah dalam bentuk dan melalui sarana apapun.
                                </div>
                                <div>
                                    The transaction of crediting funds to the Customer Fund Account through BCA can be conducted through KlikBCA, over the counter, and/or through any other means as may be determined
                                    by BCA which will be notified by BCA to the holder of the Customer Fund Account in any form and by any means whatsoever.

                                </div>
                            </div>

                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Pemilik Rekening Dana Nasabah hanya dapat melakukan inquiry atau meminta saldo dan mutasi Rekening Dana Nasabah melalui sarana yang disediakan oleh PT Kustodian Sentral Efek
                                    Indonesia dan/atau sarana lain yang ditentukan oleh BCA yang akan diberitahukan oleh BCA kepada pemilik Rekening Dana Nasabah dalam bentuk dan melalui sarana apapun.
                                </div>
                                <div>
                                    Any inquiry and request for the balance and transaction history (mutasi) of the Customer Fund Account can only be made by the holder of the Customer Fund Account through the means
                                    as provided by PT Kustodian Sentral Efek Indonesia and/or through other means as may be determined by BCA which will be notified by BCA to the holder of the Customer Fund Account in
                                    any form and by any means whatsoever
                                </div>
                            </div>
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    BCA berhak menolak instruksi yang diberikan oleh pemilik Rekening Dana Nasabah selama BCA belum menerima pencabutan kuasa pengelolaan Rekening Dana Nasabah dari pemilik
                                    Rekening Dana Nasabah yang telah disetujui secara tertulis oleh Perusahaan Efek atau Bank Kustodian.
                                    
                                </div>
                                <div>
                                    BCA reserves the right to refuse any instructions given by the holder of the Customer Fund Account as long as BCA has not received from the holder of the Customer Fund Account the
                                    revocation of the power to manage the Customer Fund Account that has been approved in writing by Securities Company or Custodian Bank.
                                </div>
                            </div>
                            
                            
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Penutupan Rekening Dana Nasabah hanya dapat dilakukan :
                                </div>
                                <div>
                                    The Customer Fund Account can only be closed:

                                </div>
                            </div>
                            <ol class="list-alpha">
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            oleh pemilik Rekening Dana Nasabah dengan persetujuan tertulis dari Perusahaan Efek atau Bank Kustodian; atau
                                        </div>
                                        <div>
                                            by the holder of the Customer Fund Account with the written consent of Securities Company or Custodian Bank; or
                                        </div>
                                    </div>
                                    
                                </li>
                                <li class="">
                                    <div class="bilingual">
                                        <div>
                                            oleh Perusahaan Efek atau Bank Kustodian yang menerima kuasa pengelolaan Rekening Dana Nasabah dari pemilik Rekening Dana Nasabah.
                                        </div>
                                        <div>
                                            by Securities Company or Custodian Bank that has been authorized by the holder of the Customer Fund Account to manage such Customer Fund Account.
                                        </div>
                                    </div>
                                </li>
                                
                            </ol>
                            <div class="bilingual">
                                <div>
                                    Proses penutupan Rekening Dana Nasabah dilakukan melalui Perusahaan Efek atau Bank Kustodian yang telah menerima kuasa pengelolaan Rekening Dana Nasabah dari Pemilik
                                    Rekening Dana Nasabah.
                                </div>
                                <div>
                                    The closure of the Customer Fund Account must be carried out through Securities Company or Custodian Bank that has been authorized by the holder of the Customer Fund Account to
                                    manage such Customer Fund Account.
                                </div>
                            </div>
                        </li>

                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Atas pertimbangan tertentu BCA berhak menolak pembukaan dan atau menutup Rekening Dana Nasabah.
                                </div>
                                <div>
                                    BCA at its sole discretion has the right to refuse the opening and/or close the Customer Fund Account.
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Pemilik Rekening Dana Nasabah bertanggung jawab sepenuhnya atas segala akibat yang timbul sehubungan dengan pengelolaan Rekening Dana Nasabah oleh Perusahaan Efek atau
                                    Bank Kustodian dan dengan ini membebaskan BCA dari segala klaim, tuntutan, gugatan, dan/atau tindakan hukum lainnya dalam bentuk apapun dan dari pihak manapun termasuk dari
                                    pemilik Rekening Dana Nasabah.

                                </div>
                                <div>
                                    The holder of the Customer Fund Account is fully responsible for any consequences arising from the management of the Customer Fund Account by Securities Company or Custodian Bank
                                    and hereby holds harmless BCA against all kinds of claims, lawsuits, demands, and/or other legal actions of any kind from any party including from the holder of the Customer Fund Account
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Segala perselisihan yang timbul sehubungan dengan pengelolaan Rekening Dana Nasabah oleh Perusahaan Efek atau Bank Kustodian akan diselesaikan oleh pemilik Rekening Dana
                                    Nasabah dengan Perusahaan Efek atau Bank Kustodian tanpa melibatkan BCA.

                                </div>
                                <div>
                                    Any disputes arising in connection with the management of the Customer Fund Account by Securities Company or Custodian Bank will be settled by the holder of the Customer Fund
                                    Account and Securities Company or Custodian Bank without involving BCA.
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <div class="bilingual">
                                <div>
                                    Ketentuan Tambahan Bagi Pemilik Rekening Dana Nasabah BCA ini merupakan satu kesatuan dan bagian yang tidak terpisahkan dari :

                                </div>
                                <div>
                                    This instrument containing the Additional Terms For Holder of Customer Fund Account of BCA constitutes an integral and inseparable part of:
                                </div>
                            </div>

                            <table>
                                <tr>
                                    <td class="w-23px">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <div class="bilingual">
                                            <div>
                                                Ketentuan-Ketentuan Bagi Pemegang Rekening Giro PT Bank Central Asia Tbk (BCA)
                                            </div>
                                            <div>
                                                The Terms and Conditions for Holder of Current Account of PT Bank Central Asia Tbk (BCA)
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-23px">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <div class="bilingual">
                                            <div>
                                                Ketentuan-Ketentuan Tabungan Prestasi ("TAPRES") PT Bank Central Asia Tbk (BCA)
                                            </div>
                                            <div>
                                                The Terms and Conditions of Tabungan Prestasi ("TAPRES") PT Bank Central Asia Tbk (BCA)
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-23px">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <div class="bilingual">
                                            <div>
                                                Ketentuan-Ketentuan Rekening BCA Dollar PT Bank Central Asia Tbk (BCA)
        
                                            </div>
                                            <div>
                                                The Terms and Conditions of BCA Dollar Account PT Bank Central Asia Tbk (BCA)
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="w-23px">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td>
                                        <div class="bilingual">
                                            <div>
                                                dan atau ketentuan-ketentuan lainnya yang terkait dengan Rekening Dana Nasabah.
                                            </div>
                                            <div>
                                                and or any other provisions as may be applicable to the Customer Fund Account
        
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            
                            <div class="bilingual">
                                <div>
                                    BCA telah memberikan penjelasan dan meminta konfirmasi kepada Nasabah atas penjelasan tentang manfaat, biaya, dan risiko terkait dengan produk BCA tersebut di atas.
                                </div>
                                <div>
                                    BCA has given explanation and asked for confirmation from Customer about the explanation of benefits, fees, and risks related to BCA products above.
                                </div>
                            </div>

                        </li>
                        <li>
                            <div class="bilingual">
                                <div>
                                    Dalam hal terdapat perbedaan dan atau ketidaksesuaian antara Ketentuan Tambahan Bagi Pemilik Rekening Dana Nasabah BCA ini dengan ketentuan-ketentuan sebagaimana disebutkan
                                    dalam butir 10 tersebut di atas, maka Ketentuan Tambahan Bagi Pemilik Rekening Dana Nasabah BCA ini yang berlaku.
                                </div>
                                <div>
                                    In the event of any difference and or inconsistency between the Additional Terms For Holder of Customer Fund Account of BCA and the provisions as mentioned in point 10 above, then the
                                    Additional Terms For Holder of Customer Fund Account of BCA will apply.
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="bilingual">
                                <div>
                                    Pemilik Rekening Dana Nasabah dengan ini menyatakan tunduk pada Ketentuan Tambahan Bagi Pemilik Rekening Dana Nasabah BCA ini, ketentuan-ketentuan sebagaimana disebutkan
                                    pada butir 10 di atas, ketentuan terkait e-Statement Rekening Dana Nasabah, dan ketentuan lainnya yang berlaku di BCA sehubungan dengan pembukaan Rekening Dana Nasabah. BCA
                                    berhak untuk mengubah ketentuan-ketentuan tersebut yang akan diberitahukan oleh BCA dalam bentuk dan melalui sarana apapun sesuai ketentuan hukum yang berlaku.
                                </div>
                                <div>
                                    The holder of the Customer Fund Account hereby states that it agrees to be bound by the Additional Terms For Holder of Customer Fund Account of BCA, the provisions as set out in point
                                    10 above, provisions concerning Customer Fund Account e-Statement, and other provisions stipulated by BCA in connection with the opening of the Customer Fund Account. BCA may
                                    modify such provisions which will be notified by BCA in any form and by any means whatsoever in accordance with the prevailing laws and regulations.

                                </div>
                            </div>
                        </li>
                    </ol>
                    <div class="bilingual">
                        <div>
                            Pemilik Rekening Dana Nasabah dengan ini menyatakan telah membaca, memahami, dan menyetujui isi dari Ketentuan Tambahan Bagi Pemilik Rekening Dana Nasabah BCA sebagaimana
                            tersebut di atas.
                        </div>
                        <div>
                            The holder of the Customer Fund Account hereby declares that it has read, understood, and agreed to the contents of the Additional Terms for Holder of Customer Fund Account of BCA as
                            described above.
                        </div>
                    </div>

                    <div class="flex w-full justify-right">
                        <div class="flex-col justify-left w-220px mt-4px">
                            <span>Sidoarjo , 10/06/2022</span>
                            <div class="align-flex-end h-100px mb-8px paraf-placeholder pb-10px w-180px">
                                Mochamad Bahrudin Firmansyah
                            </div>
                            <div class="bilingual justify-center w-180px whitespace-nowrap">
                                <div>
                                    Nama Jelas, Ttd Nasabah, dan stempel *)
                                </div>
                                <div>
                                    Customer&apos;s Full Name, Signature and Company Seal*)
                                </div>
                            </div>
                            <br>
                            <div class="bilingual">
                                <div>
                                    *) khusus nasabah badan
                                </div>
                                <div>
                                    *) for corporate customer only
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>

                

            </div>
        </div>
        
        <div class="paraf-box">
            <div>Paraf:</div>
            <div class="page-no"></div>
        </div>
    </div>



    <!-- Page #7 -->
    <div class="paper info-tambahan">
        <div class="content">
            <img src="assets/images/logo-blue-bg-white-actual-size.png" alt="">
            <div class="header">Informasi Tambahan untuk Pembukaan Rekening Dana Nasabah (RDN)
                Perorangan</div>
            <div class="text-bold">Nama : Mochamad Bahrudin Firmansyah</div>


            <table class="two-columns">
                <tr>
                    <td class="w-400px">
                        <div>
                            Lama tinggal di alamat tempat tinggal terakhir
                        </div>
                    </td>
                    <td>
                        <div>
                            .....................................................................
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            Apakah memiliki rekening/kartu kredit di Bank
                            lain/ institusi lain?
        
                        </div>
                    </td>
                    <td>
                        <div>
                            <ul class="list-blue-box">
                                <li>
                                    Ya, di Bank/Institusi Bank BNI. <br>
                                    Sudah berapa lama 4 tahun
                                </li>
                                <li>
                                    Tidak
                                </li>
                                
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            Apakah punya hubungan usaha dengan Luar
                            Negeri?
        
                        </div>
                    </td>
                    <tr>
                        <div>
                            <ul class="list-blue-box">
                                <li>
                                    Ya, Negara .................................................
                                </li>
                                <li>
                                    Tidak
                                </li>                    
                            </ul>
                        </div>
                    </tr>
                </tr>
                <tr>
                    <td>
                        <div class="flex-col align-flex-start">
                            <div>Sumber Kekayaan (Source of Wealth)*?</div>
                            <div class="text-smaller">
                                *) dapat lebih dari 1 (satu)
                            </div>
                        </div>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <div>
                                        <ul class="list-blue-box">
                                            <li>Warisan</li>
                                            <li>Tabungan</li>
                                            <li>Hasil Usaha</li>
                                        </ul>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <ul class="list-blue-box">
                                            <li>Hibah/Hadiah</li>
                                            <li>Gaji</li>
                                            <li>Lainnya .....................</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            
            <hr class="line-blue mt-60px mb-40px">

            <img src="assets/images/logo-blue-bg-white-actual-size.png" alt="">
            <div class="header">Informasi Tambahan untuk Pembukaan Rekening Dana Nasabah (RDN)
                Korporasi/Badan Usaha</div>
            <div class="text-bold">Nama :  ...............................................................</div>
            <table>
                <tr>
                    <td>
                        <div>
                            Apakah memiliki rekening di Bank lain?
                        </div>
                    </td>
                    <td>
                        <div>
                            <ul class="list-blue-box">
                                <li>Ya, di Bank</li>
                                <li>Tidak</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            Apakah punya hubungan usaha dengan Luar Negeri?
                        </div>
                    </td>
                    <td>
                        <div>
                            <ul class="list-blue-box">
                                <li>Ya, Negara</li>
                                <li>Tidak</li>
                                
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            Apakah memiliki perusahaan anak dengan
                            kepemilikan 25%/lebih?
                        </div>
                    </td>
                    <td>
                        <div>
                            <ul class="list-blue-box">
                                <li>Ya, Bidang usaha apa saja</li>
                                <li>Tidak</li>                    
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
            
        </div>
    </div>


    <!-- Page #8 -->
    <div class="paper info-perpajakan">
        <div class="content">
            <div class="outline  pb-0">

                <div class="bg-grey-light-3 flex-row section-header">
                    <img src="assets/images/logo-white-bg-grey-actual-size.png" class="ml-10pt" alt="">
                    <div class="flex justify-center w-70pct">FORMULIR INFORMASI PERPAJAKAN NASABAH INDIVIDU</div>
                </div>

                <div class="section-content pb-0 ">
                    <table class="table-info-perpajakan-1">
                        <tr>
                            <td class="w-120px min-w-120px">Cabang</td><td class="w-10px">:</td>
                            <td class="w-80px">
                                <div class="blank-boxes w-16px">
                                    <div></div>
                                </div>
                            </td>
                            <td class="w-200px"> 
                                ............................................................
                            </td>
                            <td class="w-100px">Tanggal</td><td class="w-10px">:</td>
                            <td class="w-1px">
                                <div class="blank-boxes w-32px"></div>
                            </td>
                            <td class="w-1px">-</td>
                            <td class="w-1px">
                                <div class="blank-boxes w-32px"></div>
                            </td>
                            <td class="w-1px">-</td>
                            <td class="w-1px">
                                <div class="blank-boxes w-64px">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor Customer</td><td>:</td>
                            <td>
                                <div class="blank-boxes w-16px"></div>
                            </td>
                            <td colspan="8">
                                <div>(diisi oleh Bank)</div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Nasabah</td><td>:</td>
                            <td colspan="9">
                                ..........................................................
                            </td>
                        </tr>
                    </table>
                </div>
                <hr class="w-full line-black mt-20px mb-4px">
                
                <div class="section-content pb-0">
                    <table class="table-info-perpajakan-2">
                        <tr>
                            <td class="w-200px min-w-200px">
                                Negara Asal Sesuai Kartu Identitas
                            </td>
                            <td class="w-10px">:</td>
                            <td>..................................</td>
                        </tr>
                        <tr>
                            <td>
                                Negara Tempat Lahir
                            </td>
                            <td>:</td>
                            <td>..................................</td>
                        </tr>
                    </table>

                    <div class="flex-row justify-center text-bold mt-20px mb-4px">
                        Mohon berikan &nbsp; <img src="assets/images/square-root.png" class="img-sqroot" alt=""> &nbsp; tanda pada pernyataan berikut.
                    </div>

                    <div class="flex-row align-flex-start">
                        <div class="w-67pct mr-100px">Nasabah memiliki kewajiban pajak kepada/merupakan penduduk dari/ warga negara selain Indonesia.</div>
                        <div>
                            <input type="checkbox" class="mr-4px" name="" id="">
                        </div>
                        <div class="w-50px">Ya</div>   
                        <div>
                            <input type="checkbox" class="mr-4px" name="" id="">
                        </div>

                        <div>Tidak</div>

                    </div>

                    
                </div>
                <div class="subheader px-12px">
                    Jika Nasabah memilih &apos;Ya&apos; pada pernyataan di atas, tuliskan <b>Taxpayer Identification Number (TIN)/Identitas Setara TIN</b> dan
                    <b>Negara Domisili Pajak </b> Nasabah.
                </div>

                <div class="div-info-perpajakan-3"> 
                    <table class="table-info-perpajakan-3">
                        <tr>
                            <td class="w-40px text-bold text-center">No</td>
                            <td class="w-460px text-bold text-center">TIN/Identitas Setara TIN/Keterangan Lain</td>
                            <td class="text-bold text-center">Negara Domisili Pajak</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td></td>
                            <td></td>
                        </tr>
    
                    </table>
                </div>
                
                
                <div class="subheader px-12px">
                    Apabila salah satu Negara Domisili Pajak adalah Amerika Serikat, Nasabah wajib mengisi TIN/SSN dan menyertakan
                    <b>Form W-9 (Request for Taxpayer Identification Number and Certification).</b>
                </div>
                <div class="bg-grey-light-3 flex section-header px-12px justify-center">
                    PERNYATAAN NASABAH
                </div>
                <div class="px-12px py-12px">
                    Nasabah dengan ini menyatakan bahwa: 
                    <ol>
                        <li>Seluruh data atau informasi yang tertera pada formulir ini adalah benar, akurat, dan lengkap dan PT Bank Central Asia
                        Tbk (BCA) tidak memberikan saran maupun konsultasi dalam bentuk apa pun kepada Nasabah terkait dengan pengisian data atau
                        informasi pada formulir ini.
                        </li>
                        <li>Dalam rangka pertukaran informasi perpajakan antarnegara berdasarkan perjanjian internasional di bidang perpajakan,
                            Nasabah dengan ini memberikan kuasa kepada BCA untuk memberikan data Nasabah, termasuk data terkait rekening dan
                            keuangan Nasabah kepada otoritas pajak dan/atau otoritas berwenang lainnya sesuai ketentuan hukum yang berlaku.
                        </li>
                        <li>Jika terdapat perubahan data atau informasi yang telah Nasabah berikan kepada BCA melalui formulir ini atau sarana
                            lainnya
                            (jika ada), Nasabah akan memberitahukan perubahan data atau informasi tersebut kepada BCA dalam jangka waktu
                            selambatlambatnya 30 (tiga puluh) hari kalender terhitung sejak terjadinya perubahan tersebut atau dalam jangka
                            waktu lain yang akan
                            diberitahukan oleh BCA kepada Nasabah dalam bentuk dan melalui sarana apa pun sesuai ketentuan yang berlaku.
                        </li>
                        <li>Nasabah bertanggung jawab sepenuhnya atas kebenaran, akurasi, dan kelengkapan data atau informasi yang Nasabah
                            berikan
                            kepada BCA dan Nasabah dengan ini membebaskan BCA dari segala macam tuntutan, gugatan, dan/atau tindakan hukum
                            lainnya sehubungan dengan hal tersebut dan pengisian formulir ini.
                        </li>
                        <li>Nasabah setuju bahwa BCA berhak mengakhiri hubungan dengan Nasabah jika di kemudian hari dapat dibuktikan bahwa
                            Nasabah telah memberikan data atau informasi yang tidak benar, tidak akurat, atau tidak lengkap, atau Nasabah tidak
                            memberitahukan perubahan data atau informasi terkait Nasabah kepada BCA dalam jangka waktu yang ditentukan.
                        </li>
                    </ol>

                    <table>
                        <tr>

                            <!-- FORM FILLED BY BCA OFFICER -->
                            <td>
                                <table class="table-all-borders table-staff-desc w-520px mr-20px">
                                    <tr>
                                        <td colspan="4" class="bg-grey-light-4 text-white text-semibold text-12px text-center">DIISI OLEH BANK</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-grey-light-4 text-white text-semibold text-12px text-center">Diproses Oleh</td>
                                        <td colspan="3" class="bg-grey-light-4 text-white text-semibold text-12px text-center">Keterangan</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3"></td>
                                        <td></td>
                                        <td class="text-bold text-center">Ya</td>
                                        <td class="text-bold text-center">Tidak</td>
                                    </tr>
                                    <tr>
                                        <td>Nasabah Wajib FATCA <br>
                                            (Form W-9 terlampir)</td>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Nasabah Wajib CRS</td>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                        <td class="text-center"><input type="checkbox" name="" id=""></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            (Nama Petugas BCA)
                                        </td>
                                        <td colspan="3"></td>
                                    </tr>
                                </table>
                            </td>

                            <!-- SIGNATURE PLACEHOLDER -->
                            <td>
                                <div>
                                    <div class="flex w-full justify-right">
                                        <div class="flex-col justify-left w-220px mt-4px">
                                            <span>Sidoarjo , 10/06/2022</span>
                                            <div class="align-flex-end h-100px mb-8px paraf-placeholder pb-10px w-188px border-b-2px">
                                                
                                            </div>
                                            <div class="justify-center w-188px">
                                                (Mochamad Bahrudin Firmansyah)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                

            </div>
        </div>
    </div>
        


</body>
</html>