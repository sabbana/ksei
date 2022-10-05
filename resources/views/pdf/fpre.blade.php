<!DOCTYPE html>
<html lang="id">
<head>
	<title>Formulir Permohonan Pembukaan Rekening Efek Individu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class='paper'>
		<div class='content'>
            <div class="cover-header"><img src="assets/images/logo-white-bg.JPG" alt="logo"></div>
            <div class="cover-title">
                <h1>FORMULIR PERMOHONAN<br/>PEMBUKAAN REKENING<br/>EFEK INDIVIDU</h1>
                <h3>APPLICATION FORM OF<br/>SECURITIES ACCOUNT OPENING<br/>FOR INDIVIDUAL CUSTOMER</h3>
            </div>
            <table class="cover-frontpage" cellpadding="10">
                <tr>
                    <td width="50%"></td>
                    <td width="50%">
                        <b>No.Formulir</b> / <i>Form Number</i><br/>
                        <div class="textfield" id="formNumber"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Nama Nasabah</b> / <i>Customer Name</i><br/>
                        <div class="textfield" id="customerName"></div>
                    </td>
                    <td>
                        <b>No. SID</b> / <i>SID Number</i><br/>
                        <div class="textfield" id="sidNumber"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>No. C-BEST Account</b> / <i>C-BEST Account Number</i><br/>
                        <div class="textfield" id="cbestAccountNumber"></div>
                    </td>
                    <td>
                        <b>No. Bank Rekening Dana</b> / <i>Fund Account Number</i><br/>
                        <div class="textfield" id="fundAccountNumber"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Marketing Executive</b><br/>
                        <div class="textfield" id="marketingExecutive"></div>
                    </td>
                    <td>
                        <b>Account Executive</b><br/>
                        <div class="textfield" id="accountExecutive"></div>
                    </td>
                </tr>
            </table>
		</div>
	</div>
    
    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>FORMULIR PERMOHONAN PEMBUKAAN REKENING EFEK</h1><h2>APPLICATION FORM OF SECURITIES ACCOUNT OPENING</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left grey">
                <div class="header"><b>DATA PRIBADI</b> / <i>CUSTOMER'S DATA</i></div>
                <div class="content">
                    <table>
                        <tr><td colspan="2"><b>Nama Lengkap</b> / <i>Full Name</i></td></tr>
                        <tr><td colspan="2"><div class="textfield" id="fullname"></div></td></tr>
                        <tr><td width="40%"><b>Nama Panggilan (Alias)</b><br/><i>Nickname</i></td><td><div class="textfield" id="nickname"></div></td></tr>
                    </table>
                    <table>
                        <tr><td colspan="8"><b>Tempat Tanggal Lahir</b> / <i>Place & date of birth</i></td></tr>
                        <tr>
                            <td><b>Tempat</b><br/><i>Place</i></td>
                            <td width="15%"><div class="textfield" id="place"></div></td>
                            <td><b>Tanggal</b><br/><i>Date</i></td>
                            <td width="15%"><div class="textfield" id="date"></div></td>
                            <td><b>Bulan</b><br/><i>Month</i></td>
                            <td width="15%"><div class="textfield" id="month"></div></td>
                            <td><b>Tahun</b><br/><i>Year</i></td>
                            <td width="15%"><div class="textfield" id="year"></div></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><b>Jenis Kelamin</b><br/><i>Sex</i></td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li class="active"><b>Laki-laki</b><br/><i>Male</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Perempuan</b><br/><i>Female</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr><td colspan="3"><b>Agama</b> / <i>Religion</i></td></tr>
                        <tr><td colspan="3"><div class="textfield" id="religion"></div></td></tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td width="40%"><b>Status Kewarganegaraan</b><br/><i>Nationality</i></td>
                            <td width="30%">
                                <ul class="list-radio-vertical">
                                    <li class="active"><b>Indonesia</b><br/><i>Local</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>WNA</b><br/><i>Foreigner</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li class="none"><div class="textfield">Indonesia</div></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Identitas Utama</b><br/><i>Primary Identity</i></td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li class="active"><b>KTP</b><br/><i>Resident ID Card</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>WNA</b><br/><i>Passpor</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>KITAS</b><br/><i>&nbsp;</i></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><b>Nomor Identitas</b> / <i>ID Number</i><br/><div class="textfield" id="id_number"></div></td>
                            <td><b>Tempat Dikeluarkan</b> / <i>Issued In</i><br/><div class="textfield" id="issued_in"></div></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td width="25%"><b>Berlaku Hingga</b><br/><i>Valid Through</i></td>
                            <td><b>Tanggal</b><br/><i>Date</i></td>
                            <td width="15%"><div class="textfield" id="date"></div></td>
                            <td><b>Bulan</b><br/><i>Month</i></td>
                            <td width="15%"><div class="textfield" id="month"></div></td>
                            <td><b>Tahun</b><br/><i>Year</i></td>
                            <td width="15%"><div class="textfield" id="year"></div></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td width="35%"><b>NPWP</b><br/><i>Tax Registration Number</i></td>
                            <td width="39%">
                                <ul class="list-radio-vertical">
                                    <li><b>Ada, Nomor</b><br/><i>Available, Number</i></li>
                                    <li><b>Tidak Ada</b><br/><i>Not Available</i></li>
                                </ul>
                            </td>
                            <td><div class="textfield" id="npwp"></div></td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr><td><b>Alamat Sesuai KTP</b> / <i>Address (According KTP/Passpor)</i></td></tr>
                        <tr><td><div class="textfield" id="address"></div></td></tr>
                        <tr><td><div class="textfield" id="address"></div></td></tr>
                    </table>
                    <table>
                        <tr>
                            <td><b>Kota</b><br/><i>City</i></td>
                            <td width="30%"><div class="textfield" id="city"></div></td>
                            <td>&nbsp;</td>
                            <td><b>Kode Pos</b><br/><i>Postal Code</i></td>
                            <td width="30%"><div class="textfield" id="kodepos"></div></td>
                        </tr>
                        <tr>
                            <td><b>Provinsi</b><br/><i>Province</i></td>
                            <td colspan="4"><div class="textfield" id="province"></div></td>
                        </tr>
                    </table>
                    <table>
                        <tr><td><b>Alamat Terkini (Jika berbeda dari KTP)</b> / <i>Current Address (If different from ID Card)</i></td></tr>
                        <tr><td><div class="textfield" id="address"></div></td></tr>
                        <tr><td><div class="textfield" id="address"></div></td></tr>
                    </table>
                    <table>
                        <tr>
                            <td><b>Kota</b><br/><i>City</i></td>
                            <td width="30%"><div class="textfield" id="city"></div></td>
                            <td>&nbsp;</td>
                            <td><b>Kode Pos</b><br/><i>Postal Code</i></td>
                            <td width="30%"><div class="textfield" id="kodepos"></div></td>
                        </tr>
                        <tr>
                            <td><b>Provinsi</b><br/><i>Province</i></td>
                            <td colspan="4"><div class="textfield" id="province"></div></td>
                        </tr>
                    </table>
                    <table>
                        <tr><td colspan="4"><b>Status Tempat Tinggal Sekarang</b> / <i>Status of Current Resident</i></td></tr>
                        <tr>
                            <td width="25%">
                                <ul class="list-radio-vertical">
                                    <li><b>Milik Sendiri</b><br/><i>Self Property</i></li>
                                    <li><b>Sewa/Kontrak</b><br/><i>Lease</i></li>
                                </ul>
                            </td>
                            <td width="25%">
                                <ul class="list-radio-vertical">
                                    <li><b>Milik Keluarga</b><br/><i>Family Property</i></li>
                                    <li><b>Kos</b><br/><i>Boarding</i></li>
                                </ul>
                            </td>
                            <td width="25%">
                                <ul class="list-radio-vertical">
                                    <li><b>Rumah Dinas</b><br/><i>Rumah Dinas</i></li>
                                    <li><b>Lainnya</b><br/><i>Other, Specify</i></li>
                                </ul>
                            </td>
                            <td><br/><br/>
                                <div class="textfield" id="other"></div>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Menempati Sejak</b><br/><i>Occupancy Since</i></td>
                            <td colspan="3"><div class="textfield" id="since"></div></td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td width="20%"><b>Email</b><br/><i>Email</i></td>
                            <td colspan="3"><div class="textfield" id="email"></div></td>
                        </tr>
                        <tr>
                            <td><b>No. Telepon</b><br/><i>Phone Number</i></td>
                            <td><div class="textfield" id="phone"></div></td>
                            <td width="20%"><b>Selular</b><br/><i>Mobile</i></td>
                            <td><div class="textfield" id="phone"></div></td>
                        </tr>
                        <tr>
                            <td><b>Rumah</b><br/><i>Home Number</i></td>
                            <td><div class="textfield" id="home_number"></div></td>
                            <td><b>No. Fax</b><br/><i>Fax Number</i></td>
                            <td><div class="textfield" id="fax"></div></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box-right">
                <div class="content grey">
                    <table>
                        <tr><td colspan="3"><b>Pendidikan Terakhir</b> / <i>Latest Education</i></td></tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li class="active"><b>SD</b><br><i>Elementary School</i></li>
                                    <li><b>Akademi (D1-D3)</b><br><i>Akademi</i></li>
                                    <li><b>S3</b><br><i>Doctoral Degree</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>SMP</b><br><i>Junior High School</i></li>
                                    <li><b>S1 Sarjana</b><br><i>Bachelor Degree</i></li>
                                    <li><b>Lainnya</b><br><i>Other, Specify</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>SMA</b><br><i>Senior High School</i></li>
                                    <li><b>S2 Master</b><br><i>Master Degree</i></li>
                                    <li class="none"><div class="textfield" id="other"></div></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr><td colspan="4"><b>Status Perkawinan</b> / <i>Marital Status</i></td></tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li class="active"><b>Belum Menikah</b><br><i>Single</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Menikah</b><br><i>Married</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Duda</b><br><i>Widow</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Janda</b><br><i>Widower</i></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2" width="40%"><b>Nama Pasangan Suami/Istri</b><br/><i>Spouse Name</i></td>
                            <td colspan="2"><div class="textfield"></div></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>No. Telepon Istri (Suami)</b><br/><i>Spouse Phone Number</i></td>
                            <td colspan="2"><div class="textfield"></div></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Jumlah Tanggungan</b><br/><i>Number of dependents</i></td>
                            <td><div class="textfield"></div></td>
                            <td width="50%"><b>Orang</b><br/><i>Person(s)</i></td>
                        </tr>
                        <tr>
                            <td colspan="4"><b>Nama Gadis Ibu Kandung</b> / <i>Mother's maiden name</i></td>
                        </tr>
                        <tr>
                            <td colspan="4"><div class="textfield"></div></td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td colspan="4"><b>Keluarga Dekat Yang Tidak Serumah</b> / <i>Family In Different Residence</i></td>
                        </tr>
                        <tr>
                            <td width="20%"><b>Nama</b><br/><i>Name</i></td>
                            <td colspan="3"><div class="textfield"></div></td>
                        </tr>
                        <tr>
                            <td><b>Alamat</b><br/><i>Address</i></td>
                            <td colspan="3"><div class="textfield"></div></td>
                        </tr>
                        <tr>
                            <td><b>Kota</b><br/><i>City</i></td>
                            <td width="30%"><div class="textfield"></div></td>
                            <td><b>Kode Pos</b><br/><i>Postal Code</i></td>
                            <td width="30%"><div class="textfield"></div></td>
                        </tr>
                        <tr>
                            <td><b>Telepon</b><br/><i>Phone</i></td>
                            <td><div class="textfield"></div></td>
                            <td><b>HP</b><br/><i>Mobile</i></td>
                            <td><div class="textfield"></div></td>
                        </tr>
                    </table>
                </div>
                <div class="header"><b>SUMBER DANA</b> / <i>SOUCE OF FUND</i></div>
                <div class="content grey">
                    <table>
                        <tr><td colspan="3"><b>Sumber Dana</b> / <i>Source of Fund</i></td></tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Gaji</b><br><i>Salary</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Laba Usaha</b><br><i>Bussiness Profit</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Pasangan/Orang Tua</b><br><i>Spouse/Parents</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Uang Pensiun</b><br><i>Pension Fund</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Warisan</b><br><i>Heritage</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Hibah</b><br><i>Grant</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Lainnya, Sebutkan</b><br><i>Other, Specify</i></li>
                                </ul>
                            </td>
                            <td colspan="2"><div class="textfield"></div></td>
                        </tr>
                    </table>
                </div>

                <div class="header"><b>DATA PEKERJAAN</b> / <i>EMPLOYMENT DATA</i></div>
                <div class="content grey">
                    <table>
                        <tr><td colspan="3"><b>Pekerjaan</b> / <i>Current Job</i></td></tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Pelajar/Mahasiswa(i)</b><br><i>Student</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Wiraswasta</b><br><i>Enterpreneur</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Profesional</b><br><i>Professional</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Ibu Rumah Tangga</b><br><i>Housewife</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>PNS (BUMN)</b><br><i>Goverment Officer</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Pegawai Swasta</b><br><i>Private Employee</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Pensiunan</b><br><i>Pensiunan</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Lainnya</b><br><i>Other, Specify</i></li>
                                </ul>
                            </td>
                            <td><div class="textfield"></div></td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td colspan="2"><b>Status Hubungan Kerja</b><br/><i>Employment Status</i></td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Pegawai Tetap</b><br><i>Permanent Employee</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Kontrak</b><br><i>Contract</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%"><b>Posisi</b><br/><i>Position</i></td>
                            <td><div class="textfield"></div></td>    
                            <td width="20%"><b>Lama Bekerja</b><br/><i>Working Period</i></td>
                            <td><div class="textfield"></div></td>
                        </tr>
                        <tr><td colspan="4"><b>Nama Perusahaan</b><br/><i>Company Name</i></td></tr>
                        <tr><td colspan="4"><div class="textfield"></div></td></tr>
                        <tr><td colspan="4"><b>Bidang Usaha</b><br/><i>Bidang Usaha</i></td></tr>
                        <tr><td colspan="4"><div class="textfield"></div></td></tr>
                    </table>
                </div>
            </div>
        </div>
        <span class="page_number">01</span>
    </div>

    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>FORMULIR PERMOHONAN PEMBUKAAN REKENING EFEK</h1><h2>APPLICATION FORM OF SECURITIES ACCOUNT OPENING</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content grey">
                    <table>
                        <tr><td colspan="2"><b>Alamat Perusahaan</b> / <i>Company Address</i></td></tr>
                        <tr><td colspan="2"><div class="textfield" id="company_address"></div></td></tr>
                        <tr><td colspan="2"><div class="textfield" id="company_address"></div></td></tr>
                    </table>
                    <table>
                        <tr>
                            <td><b>Kota</b><br/><i>City</i></td>
                            <td colspan="3"><div class="textfield" id="company_city"></div></td>
                        </tr>
                        <tr>
                            <td><b>Provinsi</b><br/><i>Province</i></td>
                            <td colspan="3"><div class="textfield" id="company_province"></div></td>
                        </tr>
                        <tr>
                            <td><b>Kode Pos</b><br/><i>Postal Code</i></td>
                            <td width="25%"><div class="textfield" id="company_postal_code"></div></td>
                            <td><b>No. Fax</b><br/><i>Fax Number</i></td>
                            <td width="25%"><div class="textfield" id="company_fax"></div></td>
                        </tr>
                        <tr>
                            <td><b>No. Telepon</b><br/><i>Phone Number</i></td>
                            <td><div class="textfield" id="company_phone_number"></div></td>
                            <td><b>Ekstensi</b><br/><i>Extension</i></td>
                            <td><div class="textfield" id="company_extension"></div></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="2"><b>Pendapatan per Tahun</b> / <i>Annual Income (Rp)</i></td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <ul class="list-radio-vertical">
                                    <li><b>&lt; Rp 50 Juta</b>/<i>Million</i></li>
                                    <li><b>> Rp 50 - 100 Juta</b>/<i>Million</i></li>
                                    <li><b>> Rp 100 - 250 Juta</b>/<i>Million</i></li>
                                </ul>
                            </td>
                            <td width="50%">
                                <ul class="list-radio-vertical">
                                    <li><b>> Rp 250 - 500 Juta</b>/<i>Million</i></li>
                                    <li><b>> Rp 500 Juta</b>/<i>Million</i> <b>- 1 Milyar</b> / <i>Billion</i> </li>
                                    <li><b>> Rp 1 Milyar</b>/<i>Billion</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Kekayaan Bersih</b> / <i>Net Assets (Rp)</i></td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <ul class="list-radio-vertical">
                                    <li><b>&lt; Rp 50 Juta</b>/<i>Million</i></li>
                                    <li><b>> Rp 50 - 100 Juta</b>/<i>Million</i></li>
                                    <li><b>> Rp 100 - 250 Juta</b>/<i>Million</i></li>
                                </ul>
                            </td>
                            <td width="50%">
                                <ul class="list-radio-vertical">
                                    <li><b>> Rp 250 - 500 Juta</b>/<i>Million</i></li>
                                    <li><b>> Rp 500 Juta</b>/<i>Million</i> <b>- 1 Milyar</b> / <i>Billion</i> </li>
                                    <li><b>> Rp 1 Milyar</b>/<i>Billion</i></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="header"><b>TUJUAN INVESTASI</b> / <i>INVESTMENT OBJECTIVE</i></div>
                <div class="content grey">
                    <table>
                        <tr>
                            <td colspan="2"><b>Tujuan Investasi</b> / <i>Investment Objective</i></td>
                        </tr>
                        <tr>
                            <td width="50%">
                                <ul class="list-radio-vertical">
                                    <li><b>Keuntungan</b><br><i>Profit</i></li>
                                    <li><b>Investasi Jangka Panjang</b><br><i>Long Term Investment</i></li>
                                    <li><b>Lainnya</b><br><i>Other, Specify</i></li>
                                </ul>
                            </td>
                            <td width="50%">
                                <ul class="list-radio-vertical">
                                    <li><b>Spekulasi</b><br><i>Speculation</i></li>
                                    <li><b>Investasi Jangka Pendek</b><br><i>Short Term Investment</i></li>
                                    <li class="none"><div class="textfield" id="other"></div></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td colspan="3"><b>Pengalaman Investasi</b> / <i>Investment Experience</i></td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Saham</b><br><i>Share</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Obligasi</b><br><i>Bond</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Reksadana</b><br><i>Mutual Fund</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Lainnya</b><br><i>Other, Specify</i></li>
                                </ul>
                            </td>
                            <td colspan="2">
                                <ul class="list-radio-vertical">
                                    <li class="none"><div class="textfield" id="other"></div></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td colspan="2"><b>Toleransi Terhadap Resiko</b> / <i>Tolerance for Risk</i></td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Menghindari Resiko</b><br><i>Risk Averse</i></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="list-radio-vertical">
                                    <li><b>Mempertimbangkan Resiko</b><br><i>Risk Moderate</i></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <ul class="list-radio-vertical">
                                    <li><b>Menyukai Resiko</b><br><i>Risk Taker</i></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="header"><b>DATA AHLI WARIS</b> / <i>INHERITOR DATA</i></div>
                <div class="content grey">
                    <table>
                        <tr><td colspan="4"><b>Nama Ahli Waris (1)</b> / <i>Name of Heir (1)</i></td></tr>
                        <tr><td colspan="4"><div class="textfield" id="nameofheir1"></div></td></tr>
                        <tr>
                            <td><b>Hubungan</b><br/><i>Relationship</i></td>
                            <td width="25%"><div class="textfield" id="relationship"></div></td>
                            <td><b>Telepon</b><br/><i>Phone</i></td>
                            <td width="25%"><div class="textfield" id="phone"></div></td>
                        </tr>
                        <tr><td colspan="4"><b>Nama Ahli Waris (2)</b> / <i>Name of Heir (2)</i></td></tr>
                        <tr><td colspan="4"><div class="textfield" id="nameofheir1"></div></td></tr>
                        <tr>
                            <td><b>Hubungan</b><br/><i>Relationship</i></td>
                            <td width="25%"><div class="textfield" id="relationship"></div></td>
                            <td><b>Telepon</b><br/><i>Phone</i></td>
                            <td width="25%"><div class="textfield" id="phone"></div></td>
                        </tr>
                        <tr><td colspan="4"><b>Nama Ahli Waris (3)</b> / <i>Name of Heir (3)</i></td></tr>
                        <tr><td colspan="4"><div class="textfield" id="nameofheir1"></div></td></tr>
                        <tr>
                            <td><b>Hubungan</b><br/><i>Relationship</i></td>
                            <td width="25%"><div class="textfield" id="relationship"></div></td>
                            <td><b>Telepon</b><br/><i>Phone</i></td>
                            <td width="25%"><div class="textfield" id="phone"></div></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box-right">
                <div class="header"><b>INSTRUKSI KHUSUS</b> / <i>SPECIFIC INTRUCTION</i></div>
                <div class="content grey">
                    <table>
                        <tr>
                            <td>
                                <ol>
                                    <li>
                                        <b>Fasilitas BEST (BCA Sekuritas Equity Smart Trading</b> / <i>BEST Facility</i>
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya, saya ingin menggunakan Fasilitas Online trading *</b><br/><i>Yes, I want to use Oline Trading Facility
                                            </i><br/><b>Pilihlah opsi dibawah ini</b>/<i>please select the following options</i>
                                                <ul class="list-radio-vertical">
                                                    <li>
                                                        <b>Saya ingin bertransaksi melalui Sales dan Online Trading</b><br/>
                                                        <i>I like to be able to make a transaction through Sales and Online Trading</i>
                                                    </li>
                                                    <li>
                                                        <b>Saya ingin bertransaksi secara penuh melalui Online Trading tanpa melibatkan Sales</b><br/>
                                                        <i>I like to make transaction fully through Online Trading without involving Sales</i>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <b>Tidak, saya tidak ingin menggunakan Fasilitas Online Trading</b><br/>
                                                <i>No, I don’t want to use Oline Trading Facility</i>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr><td><b>2. Nomor Tujuan Rekening Bank</b> / <i>Saving Account Destination</i></td></tr>
                        <tr><td><b>Nama Bank</b> / <i>Bank Name</i></td></tr>
                        <tr><td><div class="textfield" id="bank_name"></div></td></tr>
                        <tr><td><b>Cabang</b> / <i>Branch</i></td></tr>
                        <tr><td><div class="textfield" id="bank_branch"></div></td></tr>
                        <tr><td><b>No. Rekening</b> / <i>Account Number</i></td></tr>
                        <tr><td><div class="textfield" id="bank_account_number"></div></td></tr>
                        <tr><td><b>Nama Pemilik Rekening</b> / <i>Name of Account Holder</i></td></tr>
                        <tr><td><div class="textfield" id="bank_account_name"></div></td></tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td>
                                <b>3. Instruksi Pembayaran (Hasil Transaksi Jual/Divident)</b><br/><i>Payment Instruction</i>
                                <ul class="list-radio-vertical">
                                    <li>
                                        <b>Simpan dalam rekening dana atas nama saya</b><br/>
                                        <i>Deposited into fund account under my name</i><br/>
                                        <b>Catatan</b> / <i>Note</i>
                                        <ol class="ulnumber">
                                            <li>
                                                <b>Untuk Pengguna Fasilitas BEST wajib memilih instruksi pembayaran simpan dalam rekening dana investor.</b><br/>
                                                <i>It is mandatory for BEST Online Users to choose deposit to Investor Account for their payment instruction.</i>
                                            </li>
                                            <li>
                                                <b>Bila nasabah ingin melakukan penarikan dana, maka dapat
                                                    memberitahu ke account officer PT BCA Sekuritas atau melalui
                                                    messaging (fasilitas on-line trading) dan rekening bank harus
                                                    sesuai dengan yang tercantum dalam formulir permohonan
                                                    pembukaan rekening efek. PT BCA Sekuritas akan memulai
                                                    pelaksanaan instruksi selambat-lambatnya satu Hari Bursa (T+1)
                                                    setelah diterimanya instruksi penarikan dana secara lengkap dari
                                                    nasabah</b><br/>
                                                <i>If the customer wishes to make fund withdrawal, please notify the
                                                    account officer of PT BCA Sekuritas or via messaging (online trading
                                                    facility) and the bank account shall be in accordance with the data
                                                    specified herein. PT BCA Sekuritas will initiate the execution of such
                                                    instruction in no later than one trading day (T+1) upon the receipt of a
                                                    complete fund withdrawal instruction from customer</i>
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        <b>Transfer ke nomor tujuan rekening bank saya (sesuai poin nomor 2)</b><br/>
                                        <i>Transfer ke nomor tujuan rekening bank saya (sesuai poin nomor 2).</i>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <hr/>
                    <table>
                        <tr>
                            <td>
                                <b>4. Konfirmasi Transaksi Harian dan Laporan Bulanan</b><br/>
                                <i>Daily Transaction Confirmation and Monthly Report</i>
                                <ul class="list-radio-vertical">
                                    <li><b>Email</b></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <div class="header"><b>SPECIMEN TANDA TANGAN & PARAF NASABAH</b><br/><i>CUSTOMER SIGNATURE & INITIAL SPECIMEN</i></div>
                    <div class="content grey">
                        <table>
                            <tr>
                                <td width="60%"><b>Tanda Tangan</b> / <i>Signature</i></td>
                                <td><b>Paraf</b> / <i>Initial</i></td>
                            </tr>
                            <tr>
                                <td width="60%"><div class="signature"></div></td>
                                <td><div class="signature"></div></td>
                            </tr>
                            <tr><td colspan="2"><b>Nama Sesuai KTP/Passpor</b> / <i>Name as indicated in ID/Passport</i></td></tr>
                            <tr><td colspan="2"><div class="signature">
                                <table class="ttd">
                                    <tr><td>SIGNATURE<br/><br/><br/><br/></td></tr>
                                    <tr><td style="border-bottom:solid 1px #222">{{ @nama_nasabah }}</td></tr>
                                    <tr><td><b>Nasabah</b> / <i>Customer</i></td></tr>
                                </table>
                            </div></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <span class="page_number">02</span>
    </div>
    
    <!-- Pernyataan -->
    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERNYATAAN</h1><h2>STATEMENTS</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                    <ol class="form-ol">
                        <!-- No 1 -->
                        <li>
                            <b>Apakah anda atau anggota keluarga (termasuk orang tua/ saudara
                                kandung) anda bekerja di PT BCA SEKURITAS?</b><br>
                            <i>Do you or your family member (including parent / sibling) work in PT BCA Sekuritas?</i>
                            <table>
                                <tr>
                                    <td width="30%">
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya, Nama</b><br/><i>Yes, Name</i></li>
                                        </ul>
                                    </td>
                                    <td><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li class="none-padding"><b>Bagian</b><br/><i>Division</i></li>
                                        </ul>
                                    </td>
                                    <td><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b><br/><i>No</i></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>

                        <!-- No 2 -->
                        <li>
                            <b> Apakah anda atau anggota keluarga (termasuk orang tua/saudara
                                kandung) anda bekerja pada Perusahaan Efek lain, Bursa Efek,
                                perusahaan yang diatur oleh Bursa Efek, Otoritas Jasa Keuangan, Bank,
                                Perusahaan Asuransi atau Lembaga Keuangan sejenis?
                                </b><br>
                            <i>Do you or your family member (including parent/sibling) work for other Securities
                                Company, Stock Exchange, company regulated by Stock Exchange, Indonesia
                                Financial Services Authority, Bank, Insurance Company or other similar nancial
                                institution?</i>
                            
                            <table>
                                <tr>
                                    <td width="30%">
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya, Nama</b><br/><i>Yes, Name</i></li>
                                        </ul>
                                    </td>
                                    <td><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li class="none-padding"><b>Nama Perusahaan</b><br/><i>Company Name</i></li>
                                        </ul>
                                    </td>
                                    <td><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b><br/><i>No</i></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>

                        <!-- No 3 -->
                        <li>
                            <b> Apakah anda atau anggota keluarga (termasuk orang tua/saudara
                                kandung) anda seorang karyawan, direktur atau mempunyai
                                pengendalian pada suatu Emiten?
                                </b><br>
                            <i>Do you or your family members (including your parents/siblings)
                                an employee, director or control of an Issuer?</i>
                            
                            <table>
                                <tr>
                                    <td width="30%">
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya, Nama</b><br/><i>Yes, Name</i></li>
                                        </ul>
                                    </td>
                                    <td><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li class="none-padding"><b>Nama Perusahaan</b><br/><i>Company Name</i></li>
                                        </ul>
                                    </td>
                                    <td><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b><br/><i>No</i></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>

                        <!-- No 4 -->
                        <li>
                            <b> Apakah anda mengetahui dan memahami tentang risiko-risiko dalam
                                berinvestasi di bidang pasar modal?
                                </b><br>
                            <i>Do you acknowledge and understand the risks of investing in capital market?</i>
                            
                            <table>
                                <tr>
                                    <td width="50%">
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya</b> / <i>Yes</i></li>
                                        </ul>
                                    </td>
                                    <td width="50%">
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b> / <i>No</i></li>
                                        </ul>
                                        <br/>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <!-- No 5 -->
                        <li>
                            <b>Apakah anda mempunyai Rekening Efek di Perusahaan Efek lain?</b><br>
                            <i>Do you have any Securities Account with other Securities Company?</i>
                            
                            <table>
                                <tr>
                                    <td colspan="4">
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya, Nama Perusahaan Efek</b> / <i>Yes, Securities Company's name</i></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20"></td>
                                    <td width="10">1.</td>
                                    <td colspan="2"><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td width="20"></td>
                                    <td colspan="2"><b>Atas Nama</b><br/><i>Under Name</i></td>
                                    <td width="60%"><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td width="20"></td>
                                    <td width="10">2.</td>
                                    <td colspan="2"><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td width="20"></td>
                                    <td colspan="2"><b>Atas Nama</b><br/><i>Under Name</i></td>
                                    <td width="60%"><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b> / <i>No</i></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>

                        </li>

                        <!-- No 6 -->
                        <li>
                            <b>Apakah anda adalah warganegara AS? </b> / 
                            <i>Are you a U.S. Citizen?</i>
                            <table>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya (silahkan mengisi formulir W-9)</b><br/><i>Yes (please fill in W-9 form)</i></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b> / <i>No</i></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya, namun sudah tidak lagi **</b><br/><i>Yes, but no longer **</i></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div>
                                            <b>
                                                ** Wajib memberikan dokumen pendukung berupa : fotokopi paspor
                                                non-AS, fotokopi lepas kewarganegaraan dari AS, Formulir I-407
                                                atau menyediakan alasan untuk tidak memiliki sertifikat atau form
                                                di atas.
                                            </b>
                                        </div>
                                        <div class="mt-2px">
                                            <i>
                                                Required to provide the following supporting documents : copy of non- US
                                                passport, copy of certi cate of US nationality release, I-407 form or provide
                                                reason for not having the above certi cation or form.
                                            </i>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </li>


                        <!-- No 7 -->
                        <li>
                            <b> Apakah anda memiliki kartu identitas izin menetap di AS (Green Card)?
                                </b><br>
                            <i>Do you hold a U.S. Permanent Resident Card (Green Card)?</i>
                            <table>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li><b>Ya, Lampirkan</b><br/><i>Yes, Please attach</i></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b> / <i>No</i></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="box-right">
                <div class="content">
                    <ol start="8">
                        <li>
                            <b>Apakah anda sedang terlibat dalam perkara pidana atau perdata?</b><br>
                            <i>Are you currently involved in any criminal or civil case?</i>
                            <table>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li>
                                                <b>Ya, Sebutkan</b> / <i>Yes, Name</i><br/><br/>
                                                <div class="textfield grey"></div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b><br/><i>No</i></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <b>Apakah ada pihak lain yang bertindak selaku pemilik manfaat (beneficial owner) dari pembukaan Rekening Efek pada PT BCA SEKURITAS yang anda ajukan ini?</b><br>
                            <i>Is there any other party acting as beneficial owner in the opening of Securities Accounts with PT BCA Sekuritas that is being applied?</i>
                            <table>
                                <tr>
                                    <td width="40%">
                                        <ul class="list-radio-vertical">
                                            <li>
                                                <b>Ya, Nama</b><br/><i>Yes, Name</i><br/><br/>
                                            </li>
                                        </ul>
                                    </td>
                                    <td><div class="textfield grey"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="pdl30">
                                        <b>(wajib mengisi Lampiran Khusus Data Pemilik Manfaat)</b><br/>
                                        <i>(Please fill Beneficial owner form)</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <ul class="list-radio-vertical">
                                            <li>
                                                <b>Tidak</b><br/><i>No</i><br/><br/>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <b>Nomor Pokok Wajib Pajak (NPWP)</b> / <i>Taxpayer Identification Number</i>
                            <table>
                                <tr>
                                    <td width="50%">
                                        <ul class="list-radio-vertical">
                                            <li><b>Memiliki</b> / <i>Hold</i></li>
                                        </ul>
                                    </td>
                                    <td width="50%">
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak Memiliki</b> / <i>Does not hold</i></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b>Dalam hal nasabah tidak memiliki NPWP, maka nasabah dengan ini menyatakan:</b><br/>
                                        <i>If customer does not hold NPWP, customer hereby states that:</i>
                                        <ul class="list-item">
                                            <li>
                                                <b>Nasabah adalah Wajib Pajak yang sesuai dengan ketentuan perpajakan yang berlaku sudah memenuhi persyaratan subjektif dan objektif dan diwajibkan untuk mendaftarkan diri guna mendapatkan NPWP, antara lain memiliki penghasilan di atas Penghasilan Tidak Kena Pajak (PTKP). Sehubungan dengan hal tersebut Nasabah dengan ini mengikatkan diri untuk segera melakukan pengurusan NPWP dan segera menyerahkan fotokopi NPWP kepada PT BCA Sekuritas.</b><br/>
                                                <i>Customer is Taxpayer who, under the prevailing tax regulations, has met subjective and objective requirements and is obliged to register in order to obtain NPWP, the requirements of which include eaming income above non-taxable income (PTKP). With regard thereto, Customer hereby undertakes to obtain NPWP and immediately submit the copy of NPWP to PT BCA Sekuritas.</i>
                                            </li>
                                            <li>
                                                <b>Nasabah adalah Wajib Pajak yang sesuai dengan ketentuan perpajakan yang berlaku, saat ini tidak/belum memenuhi persyaratan subjektif dan objektif untuk mendapatkan NPWP. Jika dikemudian hari persyaratan tersebut telah dapat dipenuhi, maka Nasabah dengan ini mengikatkan diri untuk segera melakukan pengurusan NPWP dan segera menyerahkan fotokopi NPWP kepada PT BCA Sekuritas.</b><br/>
                                                <i>Customer is a Taxepayer who, under the prevailing tax regulations, currently does not/has not met subjective and objective requirements to obtain NPWP. If in the future Customer has met such requirements, Customer hereby undertakes to obtain NPWP and immediately submit the copy of NPWP to PT BCA Sekuritas.</i>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <b>Apakah Nasabah memiliki kewajiban pajak kepada / merupakan penduduk dari / warga negara selain Indonesia?</b> / <i>The Customer has tax obligations to a country /is a citizen of a country /hold citizenship of a country other than the Republic of Indonesia</i>
                            <table>
                                <tr>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li>
                                                <b>Ya</b> / <i>Yes<br/><br/></i>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-radio-vertical">
                                            <li><b>Tidak</b> / <i>No</i><br/><br/></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b>Jika nasabah memilih "Ya" pada pernyataan diatas, tuliskan Taxpayer Identification Number (TIN) / Identitas Setara TIN dan Negara Domisili Pajak Nasabah.</b><br/>
                                        <i>If customer choose "Yes" on the question above, please write down Taxpayer Identification Number (TIN) / Equivalent Tax ID and Customer's Country of Tax Residency.</i>
                                    </td>
                                </tr>
                            </table>
                            <table class="tin">
                                <tr>
                                    <td>No.</td>
                                    <td><b>TIN/Identitas Setara TIN/Keterangan Lain</b><br/><i>TIN/Equivalent Tax ID/Other Information</i></td>
                                    <td><b>Negara Domisili Pajak</b><br/><i>Country of Tax Residency</i></td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <span class="page_number">03</span>
    </div>

    
    <!-- Declaration -->
    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>DEKLARASI</h1><h2>DECLARATIONS</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                    <p>
                        <b>Dengan ditandatanganinya Formulir Permohonan Pembukaan Rekening Efek ini, saya menyatakan bahwa:</b><br/>
                        <i>By signing this Application Form of Securities Account Opening, I declare that :</i>
                    </p>
                    <ol>
                        <li>
                            <b>Informasi yang saya berikan adalah benar dan tepat dan dengan ini saya memberikan kuasa kepada PT BCA SEKURITAS untuk memeriksa kebenaran dan ketepatan informasi tersebut dari setiap sumber yang layak.</b><br/>
                            <i>The information provided herein is true and accurate and I hereby authorize PT BCA SEKURITAS to verify the truth and accuracy of such information with any proper source.</i>
                        </li>
                        <li>
                            <b>Saya memahami bahwa PT BCA SEKURITAS memiliki hak sepenuhnya untuk menerima atau menolak permohonan pembukaan Rekening Efek saya di PT BCA SEKURITAS.</b><br/>
                            <i>I understand that PT BCA SEKURITAS has the full right to accept or refuse my a Securities Account opening application with PT BCA SEKURITAS.</i>
                        </li>
                        <li>
                            <b>Saya telah bertemu muka (face to face) dengan Account Officer/Sales/Staff Marketing PT BCA SEKURITAS dan telah memberikan informasi-informasi yang diminta sebagaimana tertuang di dalam Formulir Permohonan Pembukaan Rekening Efek ini.</b><br/>
                            <i>I have met in person (face to face) with the Account Officer/Sales/Marketing Staff of PT BCA SEKURITAS and provided the required information as contained herein.</i>
                        </li>
                        <li>
                            <b>Saya telah dijelaskan tentang hak dan kewajiban saya dan saya telah membaca, mengerti dan mengikatkan diri serta menyetujui semua ketentuan dan persyaratan yang telah dituangkan di dalam Perjanjian Pembukaan Rekening Efek, yang akan berlaku efektif setelah permohonan pembukaan Rekening Efek ini disetujui oleh PT BCA SEKURITAS.</b><br/>
                            <i>I have received explanation on my rights and obligations, and I have read, understood and bound myself as well as agreed to all terms and conditions set forth in the Securities Account Opening Agreement, which will come into force once this Securities Account opening application is approved by PT BCA SEKURITAS.</i>
                        </li>
                    </ol>
                    <p>
                        <b>Demikian pernyataan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</b><br/>
                        <i>This statement has been made truthfully in order to be used accordingly</i>
                    </p>
                    <br/><br/><br/><br/><br/><br/>
                    <table>
                        <tr><td align="center">
                            Sidoarjo, 10/06/2022<br/>
                            Tempat, Tanggal / Bulan / Tahun <i>(Place, dd/mm/yyyy)</i><br/>
                            Nasabah / Customer<br/>
                        </td></tr>
                    </table>
                    <br/><br/><br/><br/><br/><br/><br/><br/>
                    <hr/>
                    <table>
                        <tr>
                            <td width="30%">
                                <b>Nama</b><br/><i>Name</i>
                            </td>
                            <td><div class="textfield"></div></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box-right">
                <div class="header"><b>LAMPIRAN</b> / <i>ATTACHMENTS</i></div>
                <div class="content">
                    <ul class="list-radio-vertical">
                        <li><b>KTP/Paspor/KITAS</b><br/><i>ID/Paspor/KITAS</i></li>
                        <li><b>Nomor Pokok Wajib Pajak (NPWP)</b><br/><i>Taxpayer Identification Number</i></li>
                        <li><b>Surat Kuasa (jika diperlukan)</b><br/><i>Power of Attorney</i></li>
                        <li><b>Informasi mengenai Pemilik Manfaat/Beneficial Owner (Jika diperlukan)</b><br/><i>Information on Beneficial Owner (if necessary)</i></li>
                        <li><b>Formulir Rekening Dana Nasabah</b><br/><i>Appliacation Form for Customer</i></li>
                    </ul>
                </div>
            </div>
        </div>
        <span class="page_number">04</span>
    </div>

    <!-- perjanjian -->
    <div class="paper">
        <div class="content agreement">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                    <table>
                        <tr><td><span class="bold">Nomor: ______________________________</span></td></tr>
                        <tr><td><span class="bold">Tanggal: {{ date('d/m/Y') }}</span></td></tr>
                    </table>
                    <p>Perjanjian Pembukaan Rekening Efek <b>("Perjanjian")</b> ini dibuat dan ditandatangani oleh dan antara:</p>
                    <ol class="romawi">
                        <li><b>PT BCA SEKURITAS</b>, suatu perseroan terbatas yang didirikan berdasarkan hukum Negara Republik Indonesia, berkedudukan di Jakarta Pusat. Selanjutnya disebut sebagai <b>"BCAS"</b>.</li>
                        <li>
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td width="10">:</td>
                                    <td class="border-bottom" width="50%">Nama Nasabah</td>
                                </tr>
                                <tr>
                                    <td>Alamat sesuai Identitas</td>
                                    <td>:</td>
                                    <td class="border-bottom">Alamat Nasabah Sesuai KTP</td>
                                </tr>
                                <tr>
                                    <td>No. Identitas</td>
                                    <td>:</td>
                                    <td class="border-bottom">No KTP Nasabah</td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                    <p>Selanjutnya disebut sebagai <b>"Nasabah"</b><br/>BCAS dan Nasabah selanjutnya disebut sebagai <b>"Para Pihak</b></p>
                    <p>BCAS dan Nasabah terlebih dahulu menerangkan hal-hal sebagai berikut:</p>
                    <ol class="number">
                        <li>BCAS adalah Perusahaan Efek yang telah memperoleh izin untuk melakukan kegiatan usaha sebagai perantara pedagang Efek dan terdaftar sebagai anggota pada PT Bursa Efek Indonesia (BEI).</li>
                        <li>Nasabah bermaksud untuk membuka rekening Efek pada BCAS dan menunjuk BCAS untuk bertindak selaku perantara pedagang Efek bagi kepentingan Nasabah untuk melakukan transaksi pada pasar modal di Indonesia atas Efek yang disimpan dalam Rekening Efek yang dibuka berdasarkan Perjanjian ini.</li>
                    </ol>
                    <p>Berdasarkan hal-hal tersebut di atas, Para Pihak sepakat untuk membuat dan menandatangani Perjanjian ini dengan syarat-syarat dan ketentuan-ketentuan sebagai berikut:</p>
                    <b>I. DEFINISI</b>
                    <ol class="none">
                        <li>
                            Kecuali dinyatakan lain dalam Perjanjian ini, istilah-istilah berikut ini berarti sebagai berikut
                            <ol>
                                <li><b>"Bapepam dan LK"</b> berarti Badan Pengawas Pasar Modal dan Lembaga Keuangan
                                    atau badan-badan lain yang diberikan kewenangan untuk melakukan pengawasan dan
                                    pengaturan kegiatan pasar modal di Indonesia sebelum dialihkannya kewenangan
                                    tersebut kepada OJK</li>
                                <li><b>"Bursa Efek"</b> berarti PT Bursa Efek Indonesia</li>
                                <li><b>"Deposit"</b> berarti dana dan/atau Efek dengan nilai dan jenis sebagaimana ditentukan
                                    BCAS, yang wajib diserahkan kepada BCAS sebelum dilaksanakannya Transaksi Efek</li>
                                <li><b>"Efek"</b> berarti surat berharga, yaitu surat pengakuan utang, surat berharga komersial,
                                    saham, obligasi, tanda bukti utang, Unit Penyertaan kontrak investasi kolektif, kontrak
                                    berjangka atas Efek, dan setiap derivatif dari Efek.</li>
                                <li><b>"Emiten"</b> berarti pihak yang melakukan kegiatan penawaran Efek yang dilakukan untuk
                                    menjual Efek kepada masyarakat berdasarkan tata cara yang diatur dalam peraturan
                                    perundangan di bidang pasar modal.</li>
                                <li><b>"Force Majeure"</b> atau <b>"Keadaan Memaksa"</b> berarti keadaan atau kejadian di luar
                                    kehendak dan kendali Para Pihak termasuk tetapi tidak terbatas pada bencana alam;
                                    bencana nuklir dan radioaktif; peperangan; pemberontakan; huru-hara; kerusuhan;
                                    sabotase; terorisme; pemogokan; kebakaran; larangan oleh pemerintah atau perubahan
                                    peraturan perundang-undangan, peraturan Bapepam dan LK, peraturan OJK, peraturan
                                    Bursa Efek, Peraturan LKP, atau Peraturan LPP yang terjadi setelah penandatanganan
                                    Perjanjian ini yang dapat mempengaruhi pelaksanaan Perjanjian ini; gangguan
                                    telekomunikasi; kegagalan atau gangguan teknis pada sistem perdagangan Bursa Efek;
                                    penghentian perdagangan (suspensi) oleh Bursa Efek; kegagalan atau gangguan teknis
                                    pada sistem-sistem yang terkait dengan kliring dan penjaminan serta penyimpanan dan
                                    penyelesaian pada KPEI dan/atau KSEI; kegagalan sistem otorisasi perbankan;
                                    perubahan mendadak pada kebijakan pemerintah; keterlambatan dalam
                                    penentuan/pembentukan harga ataupun pelaksanaan transaksi khususnya yang
                                    dikarenakan oleh keterbatasan di bursa atau perubahan harga Efek yang cepat yang
                                    mengakibatkan suatu transaksi dilaksanakan tidak pada harga yang diinstruksikan pada
                                    suatu waktu tertentu atau harga terbaik atau harga pasar; serta keadaan- keadaan
                                    lainnya yang secara langsung maupun tidak langsung mempengaruhi kegiatan BCAS
                                    namun di luar kehendak dan kendali BCAS.</li>
                                <li><b>"Formulir Permohonan Pembukaan Rekening Efek"</b> adalah formulir permohonan
                                    pembukaan Rekening Efek yang berisikan informasi dan data Nasabah yang merupakan
                                    satu kesatuan dan bagian yang tidak terpisahkan dengan Perjanjian ini.</li>
                                <li><b>"Hari Bursa"</b> hari diselenggarakannya perdagangan Efek di Bursa Efek yaitu hari Senin
                                    sampai dengan hari Jumat, kecuali hari tersebut merupakan hari libur nasional atau
                                    dinyatakan sebagai hari libur Bursa oleh Bursa Efek</li>
                                <li><b>"Hari Kerja"</b> berarti hari Senin sampai dengan Jumat, kecuali dinyatakan sebagai hari
                                    libur nasional oleh pemerintah.</li>
                                <li><b>"KPEI"</b> berarti PT. Kliring Penjaminan Efek Indonesia, suatu perseroan terbatas yang
                                    didirikan berdasarkan hukum Negara Republik Indonesia, yang merupakan Lembaga
                                    Kliring dan Penjaminan sesuai dengan Undang-Undang Nomor 8 tahun 1995 tentang
                                    Pasar Modal.</li>
                                <li><b>"KSEI"</b> berarti PT. Kustodian Sentral Efek Indonesia, suatu perseroan terbatas yang
                                    didirikan berdasarkan hukum Negara Republik Indonesia, yang merupakan Lembaga
                                    Penyelesaian dan Penyimpanan sesuai dengan Undang-Undang Nomor 8 tahun 1995
                                    tentang Pasar Modal.
                                <li><b>"Limit Transaksi"</b> berarti nilai maksimum pembelian Efek yang dapat dilakukan oleh
                                    Nasabah yang dari waktu ke waktu dapat berubah berdasarkan nilai Deposit yang
                                    disetorkan oleh Nasabah.</li>
                                <li><b>"Otoritas Jasa Keuangan"</b> atau <b>"OJK"</b> berarti lembaga Negara yang dibentuk
                                    berdasarkan Undang-Undang Nomor 21 tahun 2011 tentang Otoritas Jasa Keuangan,
                                    yang berfungsi menyelenggarakan sistem pengaturan dan pengawasan yang terintegrasi
                                    terhadap keseluruhan kegiatan di dalam sektor jasa keuangan Bapepam dan LK
                                    sebagaimana dimaksud dalam pasal 3 Undang-Undang Nomor 8 Tahun 1995 tentang
                                    Pasar Modal.</li>
                                <li><b>"Partisipan"</b> berarti Perusahaan Efek atau Bank Kustodian yang telah membuka
                                    rekening Efek pada KSEI.</li>
                                <li><b>"Pasar Negosiasi"</b> berarti pasar di mana perdagangan Efek di Bursa Efek</li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="box-right">
                <div class="content">
                    <table>
                        <tr><td><span class="bold">Nomor: ______________________________</span></td></tr>
                        <tr><td><span class="bold">Tanggal: 10/06/2022</span></td></tr>
                    </table>
                    <p>This Securities Account Opening Agreement <b>("Agreement")</b> is made and signed by and between:</p>
                    <ol class="romawi">
                        <li><b>PT BCA SEKURITAS</b>, a limited liability company duly incorporated under the laws of the
                            Republic of Indonesia, domiciled in Central Jakarta. Hereinafter shall be referred to as
                            <b>"BCAS"</b>.</li>
                        <li>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td class="border-bottom" width="50%"></td>
                                </tr>
                                <tr>
                                    <td>Address in ID Card</td>
                                    <td>:</td>
                                    <td class="border-bottom"></td>
                                </tr>
                                <tr>
                                    <td>ID Card Number</td>
                                    <td>:</td>
                                    <td class="border-bottom"></td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                    <p>Hereinafter shall be referred to as the <b>"Customer"</b>.<br/>BCAS and the Customer hereinafter shall be referred to as the <b>"Partie"</b></p>
                    <p>BCAS and the Customer rstly declare as follows :</p> 
                    <ol class="number">
                        <li>BCAS is a Securities Company which has obtained the license to carry out business activity as Securities broker-dealer and been registered as a member at PT Bursa Efek Indonesia (BEI).</li>
                        <li>The Customer intends to open a Securities account at BCAS and to appoint BCAS to act as Securities broker-dealer for the Customer’s interest to perform transactions in Indonesian capital market for Securities deposited in the Securities account opened based on this Agreement.</li>
                    </ol>
                    <p>Based on the above, the Parties agree to enter into and sign this Agreement under the following terms and conditions:</p>
                    <b>I. DEFINITION</b>
                    <ol class="none">
                        <li>
                            Unless otherwise stated in this Agreement, the following terms shall have the meaning as follows: 
                            <ol>
                                <li><b>"Bapepam-LK"</b> means the Indonesian Capital Market and Financial Institution Supervisory Agency or other agency(-ies) granted with the authority to perform 
                                    supervision and regulation to capital market activities in Indonesia before the transfer of such authority to OJK takes place.</li>
                                <li><b>"Exchange"</b> means PT Bursa Efek Indonesia.</li>
                                <li><b>"Deposit"</b> means the funds and/or Securities having the value and type as determined by BCAS, which shall be delivered to BCAS prior to the execution of any Securities
                                    Transaction.</li>
                                <li><b>"Securities"</b> shall be marketable securities, namely, promissory notes, commercial paper, shares, obligation, debenture, Participation of Collective Investment Contracts,
                                    futures contract related to Securities, and any derivative of Securities.</li>
                                <li><b>"Issuer"</b> shall be the party who conducts Securities o ering to sell Securities to public based on the procedures set forth in the relevant law and regulations on capital market.</li>
                                <li><b>"Force Majeure"</b> shall be the circumstances or event beyond the will and control of the Parties, including but not limited to natural disaster; nuclear and radioactive disaster; war;
                                    revolt; riot; unrest; sabotage; terrorism; strike; re; prohibition by the government or amendment to laws and regulations, Bapepam-LK regulation, OJK regulation, Stock Exchange regulation, LKP Regulations or LPP Regulations which is made after the 
                                    execution hereof that may a ect the implementation of this Agreement; telecommunication interference; technical failure or interference on Stock Exchange’s trading system;
                                    suspension of trade by the Stock Exchange; technical failure or interference on the systems related to clearing and guarantee as well as depository and settlement at KPEI
                                    and/or KSEI; banking authorization system failure; abrupt change on government policy;
                                    delay of pricing or execution of transaction particularly due to restrictions in the market or
                                    rapid change of Securities price resulting in a transaction being executed not at the
                                    instructed price in a certain time or at the best price or market price; as well as other
                                    circumstances, either directly or indirectly, a ecting BCAS activities, however, it is beyond
                                    the will and control of BCAS.</li>
                                <li><b>"Application Form of Securities Account Opening"</b> shall be the application form for
                                    securities account opening containing the Customer information and data, which
                                    constitutes one and inseparable part of this Agreement.</li>
                                <li><b>"Trading Day"</b> shall be the operational day of Securities trading at the Stock Exchange,
                                    namely, Monday to Friday, unless such day constitutes national holiday or is declared as
                                    Trading holiday by the Stock Exchange.</li>
                                <li><b>"Business Day"</b> shall be Monday to Friday, unless is declared as a national holiday by
                                    the government.</li>
                                <li><b>"KPEI"</b> shall be PT Kliring Penjaminan Efek Indonesia, a limited liability company
                                    incorporated under the laws of the Republic of Indonesia, which is the Clearing and
                                    Guarantee Agency according to Law Number 8 of 1995 on Capital Market.</li>
                                <li><b>"KSEI"</b> shall be PT Kustodian Sentral Efek Indonesia, a limited liability company
                                    incorporated under the laws of the Republic of Indonesia, which is the Settlement and
                                    Depository Agency according to Law Number 8 of 1995 on Capital Market.</li>
                                <li><b>"Trading Limit"</b> shall be the maximum purchase amount of Securities that can be made
                                    by the Customer, which may change from time to time based on the Deposit provided by
                                    the Customer.</li>
                            </ol>
                            <table>
                                <tr>
                                    <td>
                                        <ol start="13">
                                            <li><b>"Indonesia Financial Service Authority"</b> or <b>"OJK"</b>
                                                shall be the state institution established based on the
                                                Law Number 21 of 2011 on Financial Service Authority,
                                                which serves to organize the regulatory and supervisory
                                                system integrated with the entire activities within nancial
                                                service sector of BAPEPAM-LK as referred to in Article
                                                3 of the Law Number 8 of 1995 on Capital Market.</li>
                                            <li><b>"Participant"</b> shall be Securities Company or Custodian
                                                Bank that have opened Securities account at KSEI.</li>
                                            <li><b>"Negotiation Market"</b> shall be the market in which
                                                Securities</li>
                                        </ol>
                                    </td>
                                    <td>
                                        <div class="paraf">
                                            <div>Paraf / <i>Initial</i></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <span class="page_number">05</span>
    </div>

    
    <!-- perjanjian -->
    <div class="paper">
        <div class="content agreement">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                    <p class="pdl20">dilaksanakan berdasarkan proses tawar menawar secara langsung secara individual dan tidak secara lelang yang berkesinambungan (noncontinuous auction market) dan penyelesaiannya dilakukan berdasarkan kesepakatan antara anggota Bursa Efek.</p>
                    <ol start="16">
                        <li><b>"Pasar Reguler"</b> berarti pasar di mana perdagangan Efek di Bursa Efek dilaksanakan
                            berdasarkan proses tawar menawar secara lelang yang berkesinambungan (continuous
                            auction market) oleh anggota Bursa Efek dan penyelesaiannya dilakukan sebagaimana
                            ditentukan dalam peraturan Bursa.</li>
                        <li><b>"Pasar Reguler Tunai"</b> atau <b>"Pasar Tunai"</b> berarti pasar di mana perdagangan Efek di
                            Bursa Efek dilaksanakan berdasarkan proses tawar menawar secara lelang 17. yang
                            berkesinambungan (continuous auction market) oleh anggota Bursa Efek dan
                            penyelesaiannya dilakukan pada Hari Bursa yang sama dengan terjadinya Transaksi
                            Bursa (T+0)</li>
                        <li>
                            <b>Penerima Manfaat</b> atau <b>"Bene cial Owner"</b> berarti setiap pihak baik secara
                            langsung maupun tidak langsung melalui perjanjian atau cara apapun:
                            <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                <li>
                                    Berhak atas dan/atau menerima manfaat tertentu yang berkaitan dengan:
                                    <ol style="margin: 0; padding:0 0 0 12px;">
                                        <li>Rekening Efek; atau</li>
                                        <li>hubungan usaha dengan penyedia jasa keuangan di bidang pasar modal;</li>
                                    </ol>
                                </li>
                                <li>merupakan pemilik sebenarnya (ultimate account owner) dari dana pada Rekening Dana dan/atau Efek pada Rekening Efek;</li>
                                <li>mengendalikan transaksi yang dilakukan Nasabah melalui BCAS; dan/atau</li>
                                <li>memberikan kuasa untuk melakukan transaksi.</li>
                            </ol>
                        </li>
                        <li>“Peraturan Bursa Efek” berarti peraturan yang dibuat oleh Bursa Efek yang meliputi
                            antara lain Peraturan Pencatatan Efek, Peraturan Perdagangan Efek, Peraturan 19.
                            Keanggotaan Bursa Efek, Pedoman JATS, dan surat edaran Bursa Efek, termasuk
                            perubahan-perubahan dan peraturan pelaksanaannya.</li>
                        <li>“Peraturan LKP” berarti peraturan-peraturan mengenai kliring serta penyelesaian
                            Transaksi Efek yang dikeluarkan oleh KPEI.</li>
                        <li>“Peraturan LPP” berarti peraturan-peraturan mengenai penyimpanan Efek yang
                            dikeluarkan oleh KSEI. 21.</li>
                        <li>“POJK No.12/2017” berarti Peraturan Otoritas Jasa Keuangan Nomor 12/ 22.
                            POJK.04/2017 tentang Penerapan Program Anti Pencucian Uang dan Pencegahan
                            Pendanaan Terorisme Di Sektor Jasa Keuangan, berikut perubahan-perubahannya
                            yang ditetapkan oleh OJK.</li>
                        <li>“Rekening Dana” berarti rekening pada bank yang ditunjuk oleh BCAS dan dibuka atas
                            nama Nasabah untuk menampung dana milik Nasabah yang akan dipergunakan untuk
                            penyelesaian Transaksi Efek oleh Nasabah yang dilakukan melalui BCAS.</li>
                        <li>“Rekening Efek” berarti rekening Efek yang dibuka Nasabah pada BCAS yang akan
                            menampung Efek milik Nasabah yang dititipkan pada BCAS sesuai dengan ketentuan
                            sebagaimana diatur dalam Perjanjian ini.</li>
                        <li>“Sub Rekening Efek” berarti rekening Efek setiap Nasabah yang tercatat dalam
                            rekening Efek Partisipan pada KSEI.</li>
                        <li>“Transaksi Efek” berarti pembelian atau penjualan Efek melalui Bursa Efek yang
                            dilaksanakan berdasarkan ketentuan Perjanjian ini.</li>
                    </ol>

                    <p><b>II. PERSYARATAN MENJADI NASABAH</b></p>
                    <ol>
                        <li>Nasabah wajib mengisi dan melengkapi Formulir Permohonan Pembukaan Rekening
                            Efek dengan benar serta menyerahkan kepada BCAS seluruh dokumen yang
                            dipersyaratkan dalam Formulir Permohonan Pembukaan Rekening Efek, yang bersama
                            dengan Formulir Permohonan Pembukaan Rekening Efek seluruhnya merupakan satu
                            kesatuan dan bagian yang tidak terpisahkan dengan Perjanjian ini.</li>
                        <li>Nasabah wajib menyerahkan Deposit kepada BCAS pada waktu yang ditetapkan oleh
                            BCAS. BCAS berhak sepenuhnya menentukan jenis Efek berikut nilainya yang dapat
                            dijadikan Deposit. Nasabah dapat melakukan Transaksi Efek maksimal sebesar Limit
                            Transaksi yang ditetapkan BCAS setelah Deposit yang diserahkan Nasabah efektif
                            diterima dalam Rekening Dana dan/atau dalam Rekening Efek.</li>
                        <li>BCAS mempunyai hak sepenuhnya untuk menerima atau menolak permohonan
                            pembukaan Rekening Efek yang diajukan oleh Nasabah berdasarkan Formulir
                            Permohonan Pembukaan Rekening Efek. Transaksi pembelian atau penjualan Efek oleh
                            Nasabah melalui BCAS selaku perantara pedagang Efek yang ditunjuk oleh Nasabah
                            dapat dilakukan setelah proses pembukaan Rekening Efek telah diselesaikan atau
                            Rekening Efek masih tetap dapat dioperasikan sesuai dengan prosedur dan tata cara
                            yang berlaku dan diterapkan di BCAS, kecuali untuk transaksi-transaksi yang
                            berdasarkan peraturan yang berlaku di Pasar Modal dimungkinkan untuk dilakukan
                            sebelum pembukaan Rekening Efek selesai diproses.</li>
                        <li>Apabila sampai dengan tanggal yang ditentukan, Nasabah belum menyetorkan Deposit,
                            sebagaimana disyaratkan oleh BCAS terkait dengan pembukaan Rekening Efek, atau
                            terkait dengan kecukupan dana sebelum melakukan Transaksi Efek, maka BCAS berhak
                            membatalkan persetujuan pembukaan Rekening Efek atau menolak/ membatalkan
                            instruksi Transaksi Efek yang diberikan oleh Nasabah. Namun, seandainya instruksi
                            transaksi tersebut telah dilaksanakan, maka Nasabah wajib memenuhi kewajibannya
                            terkait transaksi dimaksud.</li>
                        <li>Nasabah wajib membuka Sub Rekening Efek pada KSEI. Pembukaan Sub Rekening
                            Efek dilakukan Nasabah dengan memberikan kuasa kepada BCAS untuk melaksanakan
                            pembukaan Sub Rekening Efek dan pembuatan nomor tunggal identitas pemodal (single
                            investor identi cation/SID), sesuai dengan ketentuan dan peraturan yang ditetapkan oleh
                            regulator pasar modal. BCAS memiliki kewajiban untuk melaksanakan kuasa pembukaan
                            Sub Rekening Efek dan pembuatan nomor tunggal identitas pemodal (single investor
                            identi cation/SID) untuk Nasabah.</li>
                        <li>Nasabah wajib membuka Rekening Dana pada waktu yang bersamaan dengan
                            pembukaan Rekening Efek. Pembukaan Rekening Dana dilakukan oleh Nasabah dengan
                            memberikan kuasa kepada BCAS untuk melaksanakan pembukaan Rekening Dana atas
                            nama Nasabah pada bank yang ditunjuk BCAS.</li>
                        <li>Setiap perubahan yang berhubungan dengan informasi atau keterangan yang terdapat
                            dalam Formulir Permohonan Pembukaan Rekening Efek (termasuk kelengkapan
                            dokumen yang dipersyaratkan) wajib diberitahukan secara tertulis oleh Nasabah kepada
                            BCAS selambat-lambatnya 2 (dua) Hari Bursa setelah terjadinya perubahan. Perubahan
                            tersebut termasuk apabila Nasabah, jika perorangan, menjadi pengurus Emiten, anggota
                            Bursa, atau lembaga regulator di pasar modal, atau Nasabah, baik perorangan maupun
                            institusi, menjadi memiliki Efek Emiten lebih dari 5% (lima persen). Kesalahan atau
                            kerugian dalam bentuk apapun yang diakibatkan
                            </li>
                    </ol>
                </div>
            </div>
            <div class="box-right">
                <div class="content">
                    <p class="pdl20">trading in the Stock Exchange is executed based on individually and direct bargaining
                        process and not by continuous auction (non-continuous auction market), and the
                        settlement of which is executed based on the agreement among the Stock Exchange
                        members</p>
                    <ol start="16">
                        <li>“Regular Market” shall be the market in which Securities trading in the Stock Exchange
                            is executed based on negotiation process by continuous auction (continuous auction
                            market) by the Stock Exchange members and the settlement date as prescribed by the
                            rules of the Stock Exchange.</li>
                        <li>“Cash Regular Market” or “Spot Market” shall be the market in which Securities
                            trading at the Stock Exchange is executed based on the negotiation process by
                            continuous auction (continuous auction market) by the Stock Exchange members and
                            the settlement of which shall be executed on the same Trading Day of the Market
                            Transaction (T+0).</li>
                        <li>
                            “Beneficial Owner” shall be any party, either directly or indirectly, by agreement or any other means:
                            <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                <li>is entitled over and/or to receive particular bene t in relation to :
                                    <ol style="margin: 0; padding:0 0 0 12px;">
                                        <li>Securities Account; or</li>
                                        <li>business relation with nancial service provider in capital market;</li>
                                    </ol>
                                </li>
                                <li>is the real owner (ultimate account owner) of the fund in Fund Account and/or
                                    Securities in Securities Account;</li>
                                <li>is controlling the transaction made by the Customer via BCAS; and/or</li>
                                <li>is granting power/authorization to conduct transactions.</li>
                            </ol>
                        </li>
                        <li> “Stock Exchange Regulations” shall be the regulations made by the Stock Exchange
                            including, among others, Listing Regulation, Trading Regulation, Stock Exchange
                            Membership Regulation, JATS Guidelines and Stock Exchange circular letter, including
                            their amendments and implementing regulations.</li>
                        <li>“LKP Regulations” shall be the regulations on clearing and settlement of Securities
                            Transaction issued by KPEI.</li>
                        <li>“LPP Regulations” shall be the regulations on Securities depository issued by KSEI.</li>
                        <li>“POJK No.12/2017” shall be the Indonesia Financial Service Authority Regulation
                            Number 12/POJK.04/2017 concerning Application of Anti Money Laundering Program
                            and Prevention of Terrorism Funding in Financial Service Sector, including its
                            amendments as stipulated by OJK.</li>
                        <li>“Fund Account” shall be the account at the bank designated by BCAS and opened
                            under the Customer’s name to accommodate the Customer’s funds which will be used
                            for Securities Transaction settlement by the Customer made via BCAS.</li>
                        <li>“Securities Account” shall be the Securities account opened by the Customer at
                            BCAS to accommodate the Customer’s Securities deposited with BCAS in accordance
                            with the provisions set forth in this agreement.</li>
                        <li>“Securities Sub-Account” shall be the Securities account of each Customer which is
                            recorded in Participant Securities Account at KSEI.</li>
                        <li>“Securities Transaction” shall be the purchase or sale of Securities via Stock
                            Exchange which is executed in accordance with this Agreement.</li>
                    </ol>
                    <p><b>II. REQUIREMENTS FOR CUSTOMER</b></p>
                    <ol>
                        <li>The Customer shall ll in and complete the Securities Account Opening Application Form
                            correctly and submit to BCAS all documents required therein, which together with
                            Securities Account Opening Application Form is construed as one and inseperable part of
                            this Agreement.</li>
                        <li>The Customer shall deliver Deposit to BCAS at the time determined by BCAS. BCAS
                            shall be fully entitled to determine the type of Securities and its value which can be made
                            as Deposit. The Customer may execute Securities Transaction maximum equal to
                            Trading Limit de ned by BCAS after the Deposit which delivered by the Customer is duly
                            received in Fund Account and/or Securities Account</li>
                        <li>BCAS shall reserve the full right to accept or decline the Securities Account opening
                            application submitted by the Customer based on the Securities Account Opening
                            Application Form. Securities purchase or sale transaction by the Customer via BCAS
                            acting as securities broker-dealer which is designated by the Customer may be executed
                            after the Securities Account opening process has been completed or the Securities
                            Account is still active according to the applicable procedural of BCAS, except for
                            transactions, which under the applicable regulations in Capital Market, allowed to be
                            made prior to the completion of Securities Account opening.</li>
                        <li>If until the speci ed date the Customer has not delivered the Deposit as required by BCAS
                            in relation with Securities Account opening or with funds adequacy prior to execute
                            Securities transaction, then BCAS shall be entitled to cancel the approval of Securities
                            Account opening or to decline/withdraw the Securities Transaction instruction given by
                            the Customer. However, in the event that such transaction has been executed, the
                            Customer shall ful ll its obligation in connection with such transaction.</li>
                        <li>The Customer shall open a Securities Sub-Account at KSEI. Securities Sub-Account
                            opening performed by Customer by granting power of attorney to BCAS to open
                            Securities Sub-Account and obtain single investor identi cation (SID) in accordance with
                            the provisions and regulations set forth by capital market regulator. BCAS is obliged to
                            perform the authorization of Securities Sub-Account opening and obtaining single investor
                            identi cation (SID) for the Customer.</li>
                        <li>The Customer shall open Fund Account at the same time with Securities Account
                            opening. Fund Account opening executed by Customer with granting power of attorney to
                            BCAS to execute opening of Fund Account under Customer name at bank designated by
                            BCAS.</li>
                    </ol>
                    <table class="table-list">
                        <tr>
                            <td>
                                <ol start="7">
                                    <li>Any change related to information or data contained in
                                        the Securities Account Opening Application Form
                                        (including the completeness of required documents)
                                        shall be noti ed by Customer in writing to BCAS no later
                                        than 2 (two) Trading Days following such change. Such
                                        change shall include if the Customer, if individual,
                                        become a member of management of an Issuer, a
                                        member of the Stock Exchange or capital market
                                        regulatory agencies, or the Customer, either individual
                                        or institution, become owning Paraf Initial</li>
                                </ol>
                            </td>
                            <td>
                                <div class="paraf">
                                    <div>Paraf / <i>Initial</i></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <span class="page_number">06</span>
    </div>

    <!-- perjanjian -->
    <div class="paper">
        <div class="content agreement">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                    <p class="pdl20">oleh tidak disampaikannya pemberitahuan mengenai perubahan keterangan mengenai
                        Nasabah kepada BCAS merupakan tanggung jawab Nasabah dan Nasabah dengan ini
                        membebaskan BCAS dari segala tuntutan, gugatan atas kerugian yang timbul
                        sehubungan dengan tidak dilakukannya kewajiban tersebut di atas.
                        </p>
                    <p><b>III. PENUNJUKAN BCAS</b></p>
                    <p class="pdl20">Dengan disetujuinya permohonan pembukaan Rekening Efek berdasarkan Formulir.
                        Permohonan Pembukaan Rekening Efek, Nasabah menunjuk BCAS selaku kustodian
                        yang memberikan jasa penitipan Efek dan dana milik Nasabah dalam Rekening Efek
                        dan Rekening Dana serta selaku perantara pedagang Efek untuk melaksanakan
                        Transaksi Efek atas Efek yang dimiliki dan disimpan oleh Nasabah dalam Rekening
                        Efek untuk kepentingan Nasabah berdasarkan ketentuan-ketentuan dalam Perjanjian
                        ini</p><br/>
                    <p><b>IV. PEMBERIAN KUASA KEPADA BCAS</b></p>
                    <ol>
                        <li>Dengan disetujuinya permohonan pembukaan Rekening Efek berdasarkan Formulir
                            Permohonan Pembukaan Rekening Efek, Nasabah memberikan kuasa kepada BCAS
                            guna bertindak untuk dan atas nama Nasabah untuk :
                            <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                <li>membuka, mengadministrasikan, dan mengoperasikan Rekening Efek sehubungan
                                    dengan Transaksi Efek yang dilakukan oleh Nasabah melalui BCAS dan sesuai
                                    dengan perintah dari Nasabah atau wakil/kuasanya yang sah sesuai dengan
                                    peraturan-peraturan di bidang pasar modal, termasuk peraturan Bapepam dan LK,
                                    peraturan OJK, Peraturan Bursa Efek, Peraturan LPP, Peraturan LKP dan
                                    peraturan-peraturan serta praktek yang lazim dilakukan di Bursa Efek dan BCAS;</li>
                                <li>membuka dan mengoperasikan Sub Rekening Efek atas nama Nasabah pada
                                    KSEI untuk kepentingan Nasabah;</li>
                                <li>membuka dan mengoperasikan Rekening Dana atas nama Nasabah pada bank
                                    yang ditunjuk BCAS untuk kepentingan Nasabah, termasuk tetapi tidak terbatas
                                    untuk mendebet, memindahbukukan dana dari Rekening Dana, meminta dokumen
                                    dan/atau data Rekening Dana pada bank termasuk tetapi tidak terbatas pada data
                                    mutasi dan/atau saldo pada Rekening Dana dan melakukan tindakan-tindakan lain
                                    yang diperlukan dalam rangka pengelolaan Rekening Dana tanpa ada tindakan
                                    yang dikecualikan;</li>
                                <li>meminta dokumen, informasi, dan/atau data Rekening Dana pada bank termasuk
                                    tetapi tidak terbatas pada data mutasi dan/atau saldo pada Rekening Dana dan
                                    menyerahkannya kepada KPEI</li>
                                <li>melaksanakan instruksi Nasabah dalam Transaksi Efek sesuai dengan peraturanperaturan di bidang pasar modal termasuk peraturan Bapepam dan LK, peraturan
                                    OJK, peraturan Bursa Efek, Peraturan LPP, Peraturan LKP dan peraturanperaturan serta praktek yang lazim dilakukan di Bursa Efek dan BCAS;</li>
                                <li>menjual dan/atau membeli Efek, mengalihkan, menyerahkan dan/atau menerima
                                    Efek dalam Rekening Efek, menyimpan serti kat Efek atau bukti kepemilikan atas
                                    Efek dalam bentuk lain, serta menerima dan melakukan pembayaran yang
                                    berkaitan dengan Transaksi Efek atas nama Nasabah berdasarkan ketentuan
                                    peraturan perundang-undangan yang berlaku;</li>
                                <li>mengalihkan, menyerahkan dan/atau menerima dana dalam Rekening Dana, serta
                                    menerima dan melakukan pembayaran yang berkaitan dengan Transaksi Efek atas
                                    nama Nasabah berdasarkan ketentuan peraturan perundang- undangan yang
                                    berlaku;</li>
                                <li>mewakili dan bertindak untuk dan atas nama Nasabah untuk menghadap kepada
                                    lembaga atau instansi atau pejabat pemerintah maupun swasta termasuk bank di
                                    mana Rekening Dana dibuka; berbicara, memberikan dan menerima keterangan
                                    atau penjelasan terkait dana dan/atau Efek Nasabah pada Rekening Efek dan/
                                    atau Rekening Dana; membuat, menyuruh membuat semua surat atau akta yang
                                    diperlukan, dan menandatangani semua surat atau akta tersebut; melakukan atau
                                    menerima dan memberikan tanda terima pembayaran; menempatkan atau menarik
                                    Efek dan/atau dana dari Rekening Efek dan/atau Rekening Dana; melakukan atau
                                    menerima penyerahan, menempatkan atau memindahkan atau menarik Efek dari
                                    Rekening Efek; dan segala tindakan hukum lain yang diperlukan dalam rangka
                                    menjual Efek Nasabah atau membeli Efek menggunakan dana Nasabah yang
                                    terdapat dalam Rekening Efek dan/atau Rekening Dana dalam rangka
                                    penyelesaian transaksi bursa termasuk untuk menutup saldo negatif pada
                                    Rekening Efek;</li>
                                <li>menahan seluruh atau sebagian Efek yang dibeli dan telah dibayar oleh Nasabah
                                    dalam Rekening Efek, mencairkan Deposit dan menjual Efek milik Nasabah
                                    termasuk menentukan harga penjualan Efek tersebut, menggunakan dana hasil
                                    penjualan Efek atau dana yang ada dalam Rekening Efek, serta mendebet dana
                                    dalam Rekening Dana sebagai akibat dan untuk menutup kewajiban pembayaran
                                    oleh Nasabah yang terutang termasuk yang timbul sebagai akibat adanya
                                    keterlambatan pembayaran sebagaimana diatur dalam Bagian X Perjanjian ini;</li>
                                <li>memotong hasil penjualan Efek dan/atau mendebet Rekening Dana untuk
                                    membayar segala biaya transaksi, pajak, komisi, dan segala pengeluaran lainnya
                                    berdasarkan peraturan yang berlaku, dan sepanjang segala biaya, pajak dan
                                    pengeluaran tersebut merupakan tanggung jawab dan kewajiban Nasabah
                                    berdasarkan Perjanjian ini;</li>
                                <li>menempatkan Efek dan/atau dana Nasabah sebagai jaminan penyelesaian
                                    kewajiban hanya untuk kepentingan Nasabah yang tertulis secara tegas pada
                                    Formulir Permohonan Pembukaan Rekening Efek terhadap BCAS, kecuali
                                    diperjanjikan khusus dalam perjanjian yang terpisah dengan Formulir Permohonan
                                    Pembukaan Rekening Efek;</li>
                                <li>menutup Rekening Efek berdasarkan ketentuan pada Bagian XIX Perjanjian ini,
                                    menjual dan/atau membeli Efek, mengalihkan, menyerahkan dan/atau menerima
                                    Efek dan/atau dana, serta tindakan lain yang berkaitan dengan penutupan
                                    Rekening Efek;</li>
                                <li>menutup Sub Rekening Efek pada KSEI dan Rekening Dana pada bank yang
                                    ditunjuk BCAS dalam hal terjadi penutupan Rekening Efek berdasarkan Perjanjian
                                    ini; dan</li>
                                <li>memeriksa kebenaran dan ketepatan informasi yang diberikan berdasarkan
                                    Perjanjian ini dari setiap sumber yang layak.</li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="box-right">
                <div class="content">
                    <p class="pdl20">Issuer’s Securities more than 5% ( ve percent). Fault or loss of in any form which
                        caused by failure to deliver noti cation on data change concerning the Customer to
                        BCAS shall be the Customer liability, and the Customer hereby hold harmless
                        BCAS from all claims and demands for any loss which arises from the nonperformance of the obligation above.</p>
                    <p><b>III. BCAS APPOINTMENT</b></p>
                    <p class="pdl20">With the approval of Securities Account opening application based on Securities
                        Account Opening Application Form, the Customer designate BCAS as custodian which
                        provide Securities and funds storage service for the Customer in the Securities
                        Account and Fund Account and as Securities broker-dealer to execute Securities
                        Transaction over the Securities owned and deposited by the Customer in the Securities
                        Account for Customer’s interest based on the provisions herein.</p><br/>
                    <p><b>IV. POWER OF ATTORNEY TO BCAS</b></p>
                    <ol>
                        <li>With the approval of Securities Account opening application based on Securities
                            Account Opening Application Form, the Customer grants power of attorney to BCAS to
                            act for and on behalf of the Customer to:
                            <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                <li>open, administrate, and operate the Securities Account in relation to Securities
                                    Transaction which executed by the Customer by BCAS and in accordance with the
                                    Customer or duly representatives/attorney in accordance with regulation in capital
                                    market, including Bapepam – LK regulation, OJK regulation, Stock Exchange
                                    Regulation, LPP Regulation, LKP regulation and other regulation and common
                                    practice in Stock Exchange and BCAS;</li>
                                <li>open, and operate Securities Sub-Account under Customer name at KSEI for the
                                    Customer benefit;</li>
                                <li>open and operate Fund Account under the Customer name at BCAS designated
                                    bank for Customer bene t, including but not limited to debiting, transferring fund
                                    from Fund Account, request document and/or Fund Account data at bank including
                                    but not limited to transfer data dan/or balance at Fund Account and perform other
                                    acts which are required for Fund Account management without any action is
                                    excluded;</li>
                                <li>request document, information, and/or data of Fund Account at bank including but
                                    not limited to transfer data dan/or balance at Fund Account and provide them to
                                    KPEI;</li>
                                <li>execute the Customer instruction in Securities Transaction in accordance with
                                    regulation in capital market including Bapepam – LK regulation, OJK regulation,
                                    Stock Exchange Regulation, LPP Regulation, LKP Regulation and other regulation
                                    and common practice in Stock Exchange and BCAS;</li>
                                <li>Sale and/or purchase Securities, transfer, deliver and/or receive Securities in
                                    Securities Account, store Securities certi cate or other Securities proof of
                                    ownership, and receiving and performing payment in relation to Securities
                                    Transaction under the name of Customer based on the provisions of prevailing
                                    laws and regulations;</li>
                                <li>Transfer, deliver and/or receive fund in Fund Account, and receive and perform
                                    payment in relation to Securities Transaction under Customer’s name based on
                                    provisions of the prevailing laws and regulations;</li>
                                <li>represent and act for and on behalf of the Customer to appear before agency or
                                    institution or government’s or private body’s o cer including bank where the Fund
                                    Account is opened; talk, provide and receive information or explanation related to
                                    Customer’s fund and/or Securities in Securities Account and/or Fund Account;
                                    make, instruct to make all required paper or deed, and sign all such paper or deed;
                                    perform or receive and provide payment receipt; assign or withdraw Securities
                                    and/or fund from Securities Account and/or Fund Account; perform or receive
                                    delivery, assign or transfer or withdraw Securities from Securities Account; and all
                                    other legal action which required to in order for Customer’s Securities sale or
                                    purchase using the Customer fund which contained in Securities Account and/or
                                    Fund Account in order to stock exchange transaction settlement including to close
                                    negative balance in Securities Account;</li>
                                <li>hold all or part of Securities which purchased and paid by the Customer in
                                    Securities Account, withdraw Deposit and sale Securities owned by the Customer
                                    including determine the sale price of such Securities, use the proceed of the
                                    Securities sale or fund which contained in Securities Account, and debitting fund in
                                    Fund Account as a result of and to closed the Customer payment obligation which
                                    payable including which arise as a result of delay of payment as stipulated in
                                    Section X of this Agreement;</li>
                                <li>cut the proceed of Securities sale and/or debitting Fund Account to pay all
                                    transaction cost, tax, commission and all other expenses based on the prevailing
                                    law, and to the extent such cost, tax and expenses are responsibility and liability of
                                    the Customer based on this Agreement</li>
                                <li>Put the Customer’s Securities and/or Fund as collateral for obligation settlement
                                    only for the Customer interest which expressly written in Application Form of
                                    Securities Account Opening to BCAS, except speci cally agreed in separated
                                    agreement with Application Form of Securities Account Opening;</li>
                            </ol>
                            <table class="table-list">
                                <tr>
                                    <td>
                                        <ol type="a" start="12">
                                            <li>Close Securities Account based on provision in
                                                Section XIX of this Agreement, sale and/or
                                                purchase Securities, assign, deliver and/or receive
                                                Securities, and other action which related to closing
                                                of Securities Account;</li>
                                            <li>Close Securities Sub-Account at KSEI and Fund
                                                Account at BCAS designated bank in case of
                                                Securities Account closing based on this
                                                Agreement; and</li>
                                            <li>Examine the validity and accuracy of information
                                                which provided based on this Agreement from any
                                                reliable source.
                                                </li>
                                        </ol>
                                    </td>
                                    <td>
                                        <div class="paraf">
                                            <div>Paraf/Initial</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <span class="page_number">07</span>
    </div>
    
    <!-- perjanjian -->
    <div class="paper">
        <div class="content agreement">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                    <p>
                        <ol start="15" type="a" class="pdl30">
                            <li>memberikan data Nasabah, termasuk data terkait rekening dan keuangan Nasabah kepada otoritas pajak dan/ atau otoritas berwenang lainnya sesuai
                                ketentuan hukum yang berlaku dalam rangka pertukaran informasi perpajakan
                                antarnegara berdasarkan perjanjian internasional di bidang perpajakan.</li>
                        </ol>
                    </p>
                    <ol start="2">
                        <li>Kuasa tersebut di atas merupakan bagian yang tidak terpisahkan dari Perjanjian ini
                            serta tidak akan dicabut atau berakhir karena alasan apapun termasuk alasan yang
                            2. diatur dalam Pasal 1813, 1814 dan 1816 kitab Undang-Undang Hukum Perdata
                            Indonesia.</li>
                    </ol>
                    <p><b>V. PERNYATAAN NASABAH</b></p>
                    <ol>
                        <li>Nasabah menyatakan bahwa, berdasarkan peraturan perundang-undangan yang
                            berlaku di Negara Republik Indonesia, Nasabah telah cukup umur dan cakap serta
                            memiliki kewenangan penuh menurut hukum untuk melaksanakan segala kewajiban
                            dan tanggung jawabnya, dan untuk melakukan perbuatan hukum sebagaimana
                            dimaksud dalam Perjanjian ini.</li>
                        <li>Nasabah menyatakan, menjamin dan bertanggung jawab atas kebenaran,
                            kelengkapan, keaslian, keabsahan dari semua dokumen dan kebenaran setiap dan
                            seluruh informasi, data, keterangan, kewenangan/kuasa yang diberikan dalam Formulir
                            Permohonan Pembukaan Rekening Efek berdasarkan Perjanjian ini, dan setiap saat
                            akan menyampaikan kepada BCAS perubahan, tambahan maupun perbaikan atas
                            informasi, data maupun dokumen serta keterangan tersebut.</li>
                        <li>Nasabah menyatakan bahwa tidak ada pihak lain atau penerima manfaat (bene cial
                            owner) yang memiliki kepentingan terhadap Rekening Efek selain dari pihak-pihak
                            yang dinyatakan secara tegas dalam Formulir Permohonan Pembukaan Rekening
                            Efek.</li>
                        <li>Nasabah menyatakan dan menjamin tidak akan menggunakan jasa perantara
                            pedagang Efek yang diberikan oleh BCAS sebagai sarana untuk melakukan tindakan
                            yang dapat dikategorikan melanggar hukum, termasuk namun tidak terbatas kepada
                            tindak pidana pencucian uang (money laundering) .</li>
                        <li>Nasabah menyatakan bahwa dana dan Efek yang telah dan akan disetorkan/
                            ditransaksikan berdasarkan Perjanjian ini bukan merupakan hasil perbuatan
                            melanggar hukum, termasuk tetapi tidak terbatas pada tindak pidana pencucian uang
                            (money laundering) sebagaimana diatur dalam (i) Undang-Undang Nomor 8 Tahun
                            2010 tentang Pencegahan dan Pemberantasan Tindak Pidana Pencucian Uang
                            maupun perubahan-perubahannya di kemudian hari, dan (ii) POJK 12/2017, atau
                            ketentuan yang lazim berlaku secara internasional tentang tindak pidana pencucian
                            uang, dan karenanya Nasabah membebaskan BCAS dari segala kewajiban dan
                            tuntutan dari pihak ketiga dan atau pihak yang berwenang maupun kerugian dan biaya
                            hukum yang mungkin ditanggung oleh BCAS sebagai akibat dari pelanggaran oleh
                            Nasabah atas ketentuan hukum yang berlaku termasuk tetapi tidak terbatas pada
                            ketentuan di bidang tindak pidana pencucian uang tersebut. Nasabah wajib
                            memberikan keterangan apabila diperlukan atau diminta oleh BCAS dan/atau pihak
                            yang berwenang sehubungan dengan asal usul dana Nasabah, dan Nasabah dengan
                            ini mengizinkan BCAS untuk memastikan asal-usul dana Nasabah dan memberikan
                            data dan informasi mengenai Nasabah kepada pejabat atau instansi yang berwenang.</li>
                        <li>Nasabah dengan ini menyatakan bersedia untuk tunduk dan mengikuti semua syaratsyarat dan 
                            ketentuan-ketentuan yang berlaku pada pasar modal di Indonesia
                            sehubungan dengan Rekening Efek, Transaksi Efek, serta sehubungan dengan
                            penunjukan BCAS sebagai perantara pedagang Efek berdasarkan Perjanjian ini, baik
                            yang diatur dalam Peraturan Bapepam dan LK, peraturan OJK, peraturan Bursa Efek,
                            Peraturan LKP, Peraturan LPP, serta peraturan dan kebijakan yang ditentukan oleh
                            instansi/pejabat lain yang berwenang, maupun ketentuan yang berlaku di BCAS
                            sebagaimana dipersyaratkan oleh peraturan atau kebijakan instansi dan/atau pejabat
                            yang berwenang, baik yang telah maupun yang akan ada dan diberlakukan di
                            kemudian hari.</li>
                        <li>Nasabah dengan ini mengetahui dan menyetujui bahwa syarat dan ketentuan
                            Perjanjian ini dapat diubah dari waktu ke waktu oleh BCAS sesuai dengan ketentuan
                            dalam Bagian XX Perjanjian ini. Nasabah dengan ini menyatakan bersedia untuk
                            tunduk dan mengikuti semua syarat dan ketentuan yang berlaku di BCAS dari waktu
                            ke waktu.</li>
                        <li>Nasabah dengan ini menyatakan telah membaca, mengerti dan mengikatkan diri serta
                            menyetujui semua ketentuan dan persyaratan yang dituangkan dan diuraikan pada
                            Perjanjian ini.</li>
                    </ol>

                    <p><b>VI. INFORMASI MENGENAI NASABAH</b></p>
                    <p>Nasabah menyatakan bahwa Nasabah telah mengetahui, memahami dan menyadari bahwa:</p>
                    <ol>
                        <li>BCAS akan senantiasa menjaga sepenuhnya hak kerahasiaan data nasabah, yang
                            diketahui oleh BCAS, termasuk namun tidak terbatas pada data identitas nasabah,
                            data transaksi nasabah, data keuangan dan kekayaan nasabah serta user-id dan
                            password nasabah yang memiliki fasilitas online (BEST).</li>
                        <li>Nasabah dengan ini setuju untuk memberikan persetujuan dan kewenangan kepada
                            BCAS untuk mengungkapkan informasi mengenai Rekening Efek, Rekening Dana, dan
                            informasi-informasi lain mengenai Nasabah apabila diminta oleh pihak-pihak yang
                            tersebut di bawah ini, tanpa perlu meminta persetujuan lebih lanjut terlebih dahulu dari
                            Nasabah:
                            <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                <li>bank kustodian dan/atau perusahaan efek lain dalam rangka validasi Efek untuk
                                    pesanan jual dan/atau beli Nasabah;</li>
                                <li>Bursa Efek, KPEI, KSEI, OJK serta instansi pemerintah lainnya yang menurut
                                    peraturan perundang-undangan yang berlaku berwenang meminta informasi
                                    tersebut.</li>
                            </ol>
                        </li>
                        <li>
                            <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                <li>Dalam hal Nasabah memberikan instruksi kepada BCAS untuk melakukan
                                    penjualan Efek milik Nasabah yang disimpan di bank kustodian dan/atau
                                    perusahaan efek lain, Nasabah dengan ini memberikan kuasa dan kewenangan
                                    kepada BCAS untuk meminta informasi dan data dari bank kustodian dan/atau
                                    perusahaan efek lain tersebut mengenai Nasabah dan Efek milik Nasabah yang
                                    diperintahkan oleh Nasabah untuk dijual melalui BCAS, dan informasi lain yang
                                    berhubungan dengan Nasabah. Efek yang diperintahkan oleh Nasabah untuk
                                    dijual, dalam hal Efek milik Nasabah tersebut disimpan di bank kustodian dan/ atau
                                    perusahaan efek lain, harus tersedia di BCAS paling lambat satu (1 ) Hari</li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="box-right">
                <div class="content">
                    <p>
                        <ol start="15" type="a" class="pdl30">
                            <li>To provide the Customer's data, including any data related to the account and
                                nances of the Customer to tax authorities and/or other authorized authorities in
                                accordance with the applicable law(s) for the purpose of international exchange
                                of tax information based on the relevant international agreement(s) in the eld of
                                taxation.</li>
                        </ol>
                    </p>
                    <ol start="2">
                        <li>The aforementioned power of attorney shall be inseparable part from this
                            Agreement and irrevocable or terminated for any reason, including the reasons set
                            forth in Article 1813, 1814 and 1816 of the Indonesian Civil Code.</li>
                    </ol>
                    <p><b>V. CUSTOMER’S REPRESENTATION</b></p>
                    <ol>
                        <li>Customer represents that, based on the prevailing laws and regulations in the Republic
                            of Indonesia, the Customer are of legal age and competent and have full authority
                            according to the law to perform all obligations and liabilities, and to perform legal action
                            as referred to in this Agreement.</li>
                        <li>The Customer represents, warrants and liable for the correctness, completeness,
                            authenticity and validity of all documents, and for the correctness of any and all
                            information, data, details, authorization/ power conferred upon in the Securities
                            Account Opening Application Form based on this agreement, and shall at any time,
                            deliver to BCAS any change, addition or revision of such information, data, documents
                            and details.</li>
                        <li>Customer represents that no other party or bene cial owner which own any interest in
                            the Securities Account other than the parties explicitly speci ed in the Securities
                            Account Opening Application Form.</li>
                        <li>The Customer represents and warrants that it will not use the Securities broker-dealer
                            services provided by BCAS as means to perform actions that may be categorized as
                            unlawful act, including but not limited to money laundering.</li>
                        <li>The Customer represents that the funds and the Securities that have been and will be
                            deposited/transacted based on this agreement is not proceeds of unlawful acts,
                            including but not limited to money laundering as stipulated in (i) Law Number 8 of 2010
                            regarding Prevention and Eradication of Money Laundering and its any future
                            amendments, and (ii) Regulation No. POJK 12/2017, or other internationally applicable
                            common rules regarding money laundering, and therefore the Customer hold BCAS
                            harmless from all liabilities and claims from any third party and/or authorities as well as
                            damages and legal fees that may be incurred by BCAS as a result of violation by the
                            Customer against the prevailing laws including but not limited to such provisions on
                            money laundering. The Customer shall provide information when required or requested
                            by BCAS and/or the authorities in relation to the source of the Customer’s funds, and
                            the Customer hereby authorize BCAS to verify the origins of Customer’s funds and to
                            provide Customer’s data and information to the authorized o cial or agency.</li>
                        <li>The Customer hereby declares to obey and to follow all applicable terms and
                            conditions on capital market in Indonesia in connection with Securities Account,
                            Securities Transaction as well as the appointment of BCAS as a Securities brokerdealer hereunder, either as set forth in Bapepam-LK Regulations, OJK Regulations,
                            Stock Exchange Regulations, LKP Regulations, LPP Regulations as well as
                            regulations and policies set forth by other authorized agencies/o cials, and the
                            applicable rules in BCAS as required by the regulations or policies of the authorized
                            agencies and/or o cials, either has been and will be and applicable in the future.</li>
                        <li>The Customer hereby acknowledges and agrees that terms and condition of this
                            Agreement may amended from time to time by BCAS in accordance with provision of
                            Section XX of this Agreement. The Customer hereby declares to obey and follow all
                            terms and condition which applicable in BCAS from time to time.</li>
                        <li>The Customer hereby declares to have read, understood and be bound and agrees to
                            all terms and conditions set forth and described herein.</li>
                    </ol>
                    <p><b>VI. CUSTOMER’S INFORMATION</b></p>
                    <p>The Customer declares that Customer has acknowledged, understood and realized that: </p>
                    <ol>
                        <li>Customer represent that, based on prevailing laws and regulations in the Republic
                            Indonesia, the Customer are of legal age and competent and have full authority
                            according to the law to perform all obligations and liabilities, and to perform legal action
                            as referred in this Agreement.</li>
                        <li>The Customer hereby agrees to grant approval and authority to BCAS to disclose
                            information concerning the Securities Account, Fund Account and other information
                            regarding the Customer if requested by the parties mentioned below, without prior
                            approval of the Customer:
                            <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                <li>Custodian bank and/or other securities company in order of Securities validation for
                                    Customer’s o er and/or bid order;</li>
                                <li>Stock Exchange, KPEI, KSEI, OJK as well as other government agencies which
                                    according to applicable law authorized to request such information</li>
                            </ol>
                        </li>
                    </ol>
                    <table class="table-liist">
                        <tr>
                            <td>
                                <ol start="3">
                                    <li>
                                        <ol type="a" style="margin: 0; padding:0 0 0 12px;">
                                            <li>. In case the Customer deliver an instruction to BCAS
                                                to execute sale of Customer’s Securities which is
                                                deposited at other custodian bank and/or securities
                                                company, the Customer hereby grants power and
                                                authority to BCAS to request information and data
                                                from such other custodian bank and/or securities
                                                company regarding the Customer and Customer’s
                                                Securities which have been instructed by the
                                                Customer to be offered via BCAS and other
                                                information in connection with the Customer. The
                                                Securities which have been instructed by the
                                                </li>
                                        </ol>
                                    </li>
                                </ol>
                            </td>
                            <td>
                                <div class="paraf">
                                    <div>Paraf/Initial</div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <span class="page_number">08</span>
    </div>
    
    <!-- perjanjian -->
    <div class="paper">
        <div class="content agreement">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                    <p class="pdl30">Bursa setelah transaksi selesai dilaksanakan oleh BCAS sebelum pukul 12.00 WIB.</p>
                    <ol type="a" start="2" class="pdl20">
                        <li>Nasabah berjanji dan menundukkan diri untuk memberi persetujuan dan
                            kewenangan kepada bank kustodian dan/atau perusahaan efek lain tersebut, untuk
                            mengungkapkan informasi dan data mengenai Nasabah dan rekening Efek atas
                            nama Nasabah pada bank kustodian dan/atau perusahaan efek lain tersebut
                            apabila diminta oleh BCAS dalam rangka melaksanakan instruksi jual Nasabah
                            atas Efek yang disimpan di bank kustodian dan/atau perusahaan efek lain tersebut.</li>
                        <li>Apabila permintaan informasi dan data mengenai Nasabah dan/atau rekening Efek
                            Nasabah dalam angka 2 butir b di atas ditolak oleh bank kustodian dan/ atau
                            perusahan efek lain di mana Nasabah menyimpan Efeknya, maka BCAS akan
                            menolak untuk melaksanakan instruksi Nasabah untuk penjualan Efek dimaksud.
                            Segala kerugian yang timbul sebagai akibat dari tidak dilaksanakannya instruksi
                            penjualan tersebut menjadi tanggung jawab Nasabah dan Nasabah dengan ini
                            membebaskan BCAS dari gugatan dan/atau tuntutan hukum dan tidak akan
                            mengajukan gugatan atau tuntutan hukum dalam bentuk apapun kepada BCAS.</li>
                    </ol>
                    <ol start="4">
                        <li>Kewenangan, persetujuan dan kuasa yang diberikan oleh Nasabah kepada BCAS
                            sebagaimana dimaksud dalam angka 1 dan angka 2 butir a di atas tidak dapat ditarik
                            kembali selama Nasabah masih memiliki Rekening Efek pada BCAS dan pelaksanaan
                            kewenangan tersebut dapat dilakukan tanpa diperlukan surat kuasa tersendiri.
                            </li>
                    </ol>
                    <p><b>VII. PERNYATAAN MENGENAI RISIKO</b></p>
                    <p>Nasabah mengakui,mengerti dan menyadari bahwa:</p>
                    <ol>
                        <li>Investasi di pasar modal memiliki risiko nansial. Harga Efek dapat mengalami kenaikan
                            yang akan menguntungkan Nasabah dan dapat pula mengalami penurunan yang
                            mengakibatkan kerugian bagi Nasabah dan, selain kenaikan dan penurunan harga,
                            Efek yang dimiliki oleh Nasabah dapat kehilangan nilainya dan menjadi tidak berharga.</li>
                        <li>Setiap Efek memiliki tingkat likuiditas yang berbeda yang dapat mengakibatkan
                            perbedaan antara harga penawaran jual dan penawaran beli di Bursa Efek.</li>
                        <li>Sebagai akibat dari hal-hal tersebut dalam angka 1 dan 2 di atas, setiap saat Nasabah
                            dapat mengalami kerugian dan kehilangan sebagian atau seluruh dana yang
                            diinvestasikan oleh Nasabah di pasar modal, oleh karena itu Nasabah menyatakan
                            bahwa investasi di pasar modal dilakukan oleh Nasabah dengan menyadari
                            sepenuhnya risiko kerugian yang mungkin dialam</li>
                    </ol>
                    <p><b>VIII. DEPOSIT</b></p>
                    <ol>
                        <li>Untuk dapat melakukan Transaksi Efek, Nasabah wajib menyediakan Deposit dalam
                            bentuk dana dan/atau efek dengan nilai yang ditentukan oleh BCAS.</li>
                        <li>Apabila sampai dengan tanggal yang ditentukan, Nasabah belum menyetorkan
                            Deposit yang disyaratkan oleh BCAS terkait dengan pelaksanaan Transaksi Efek,
                            maka BCAS berhak membatalkan/tidak melaksanakan instruksi Transaksi Efek yang
                            diberikan oleh Nasabah. Namun, seandainya instruksi transaksi tersebut telah
                            dilaksanakan, maka Nasabah tetap terikat pada Transaksi Efek dimaksud dan wajib
                            memenuhi kewajibannya terkait Transaksi Efek dimaksud. Segala kerugian yang
                            timbul sebagai akibat dari dibatalkannya/tidak dilaksanakannya instruksi Nasabah
                            tersebut menjadi tanggung jawab Nasabah dan Nasabah dengan ini membebaskan
                            BCAS dari gugatan dan/atau tuntutan hukum dan tidak akan mengajukan gugatan atau
                            tuntutan hukum dalam bentuk apapun kepada BCAS.</li>
                        <li>Efek dan dana dalam Rekening Efek maupun Efek yang akan diterima oleh Nasabah
                            serta dana dalam Rekening Dana dapat digunakan sebagai jaminan penyelesaian
                            kewajiban Nasabah terhadap BCAS. Apabila nilai jaminan tersebut berkurang karena
                            alasan apapun, maka Nasabah wajib menambah Efek atau dana dalam Deposit
                            dimaksud agar instruksi Nasabah terkait Transaksi Efek yang diberikan kepada BCAS
                            dapat dilaksanakan.</li>
                        <li>BCAS berhak meminta pembayaran atau Efek dari Nasabah sebelum pelaksanaan
                            Transaksi Efek.</li>
                        <li>BCAS berhak menilai Efek milik Nasabah sesuai dengan kebijakan penilaian jaminan
                            yang ditentukan oleh BCAS. BCAS dapat menolak instruksi Nasabah untuk menjual
                            Efek tertentu yang dijadikan jaminan.</li>
                        <li>Penarikan Efek dengan cara pemindahbukuan Efek dari Rekening Efek ke rekening
                            efek atas nama Nasabah pada kustodian lain dan perubahan Efek dalam penitipan
                            kolektif di KSEI menjadi Efek dalam bentuk warkat atas nama Nasabah atau penarikan
                            dana dari Rekening Dana oleh Nasabah dapat dilakukan dengan mengajukan
                            permintaan secara tertulis kepada BCAS, dan BCAS akan mulai melaksanakan
                            instruksi Nasabah tersebut pada 1 (satu) Hari Bursa setelah diterimanya permintaan
                            tertulis tersebut beserta dokumen yang dipersyaratkan secara lengkap oleh BCAS.
                            Penarikan dana oleh Nasabah dari Rekening Dana hanya dapat dilakukan apabila
                            saldo Rekening Dana dalam posisi positif dan Nasabah tidak memiliki kewajiban
                            pembayaran baik yang telah atau belum jatuh tempo kepada BCAS atau kepada pihak
                            lain sehubungan dengan Transaksi Efek dan/atau Perjanjian ini dan dana dalam
                            Rekening Dana melebihi saldo minimum yang ditetapkan BCAS dari waktu ke waktu.
                            Pemindahbukuan Efek dan penarikan dana tersebut akan diselesaikan sesuai
                            mekanisme yang berlaku di BCAS, kustodian lain yang akan menerima
                            pemindahbukuan Efek, KSEI, dan bank di mana Rekening Dana dibuka.</li>
                        <li>Efek yang dimiliki Nasabah disimpan pada Sub Rekening Efek atas nama masingmasing nasabah pada KSEI terpisah dari efek milik BCAS dan nasabah BCAS yang
                            lain.</li>
                        <li>Dana yang dimiliki Nasabah disimpan atas nama masing-masing nasabah pada
                            Rekening Bank pada bank yang ditunjuk BCAS, terpisah dari dana milik BCAS dan
                            nasabah BCAS yang lain.</li>
                        <li>Dalam hal dana menunjukkan saldo negatif dalam Rekening Efek, BCAS dapat
                            menggunakan Efek dalam Rekening Efek tersebut sebagai jaminan atas kredit bank
                            atau lembaga keuangan lainnya dan/atau melakukan penjualan Efek secara paksa
                            tanpa persetujuan Nasabah terlebih dahulu dalam rangka penyelesaian kewajiban
                            Nasabah.</li>
                        <li>Patokan harga Efek yang dipergunakan dalam penghitungan nilai Efek dalam
                            portofolio adalah harga penutupan perdagangan di Bursa Efek 1 (satu) Hari Bursa
                            terdekat sebelum dilakukannya perhitungan. Namun, BCAS berwenang untuk</li>
                    </ol>
                </div>
            </div>
            <div class="box-right">
                <div class="content">
                </div>
            </div>
        </div>
        <span class="page_number">09</span>
    </div>

    <!-- perjanjian -->
    <div class="paper">
        <div class="content agreement">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="assets/images/logo-grey-bg.JPG" alt="logo"></td>
                    </tr>
                </table>
            </div>
            <div class="box-left">
                <div class="content">
                </div>
            </div>
            <div class="box-right">
                <div class="content">
                </div>
            </div>
        </div>
        <span class="page_number">10</span>
    </div>
</body>
</html>