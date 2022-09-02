<!DOCTYPE html>
<html lang="id">
<head>
	<title>Formulir Permohonan Pembukaan Rekening Efek Individu</title>
    <link rel="stylesheet" href="{{ config('app.url').'assets/css/style.css' }}">
    <link rel="stylesheet" href="{{ config('app.url').'assets/css/dimensions.css' }}">
    <link rel="stylesheet" href="{{ config('app.url').'assets/css/colors.css' }}">
</head>
<body class="fpre">
    <!-- PAGE COVER -->
	<div class='paper'>
		<div class='content'>
            <div class="cover-header"><img src="{{ config('app.url').'assets/images/logo-white-bg.JPG' }}" alt="logo"></div>
            <div class="cover-title">
                <h1>FORMULIR PERMOHONAN<br/>PEMBUKAAN REKENING<br/>EFEK INDIVIDU</h1>
                <h3>APPLICATION FORM OF<br/>SECURITIES ACCOUNT OPENING<br/>FOR INDIVIDUAL CUSTOMER</h3>
            </div>
            <div class="form-frontpage">
                <div class="w-larger">
                </div>

                <div class="w-smaller">
                    <b>No.Formulir</b> / <i>Form Number</i><br/>
                    <div class="textfield bg-grey-disabled" id="formNumber"></div>
                </div>

                <div class="w-larger">
                    <b>Nama Nasabah</b> / <i>Customer Name</i><br/>
                    <div class="textfield bg-grey-disabled" id="customerName"></div>
                </div>

                <div class="w-smaller">
                    <b>No. SID</b> / <i>SID Number</i><br/>
                    <div class="textfield bg-grey-disabled" id="sidNumber"></div>
                </div>

                <div class="w-half">
                    <b>No. C-BEST Account</b> / <i>C-BEST Account Number</i><br/>
                    <div class="textfield bg-grey-disabled" id="cbestAccountNumber"></div>
                </div>

                <div class="w-half">
                    <b>No. Bank Rekening Dana</b> / <i>Fund Account Number</i><br/>
                    <div class="textfield bg-grey-disabled" id="fundAccountNumber"></div>
                </div>

                <div class="w-half">
                    <b>Marketing Executive</b><br/>
                    <div class="textfield bg-grey-disabled" id="marketingExecutive"></div>
                </div>

                <div class="w-half">
                    <b>Account Executive</b><br/>
                    <div class="textfield bg-grey-disabled" id="accountExecutive"></div>
                </div>

            </div>
            
		</div>
	</div>
    

    <!-- PAGE #1 -->
    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>FORMULIR PERMOHONAN PEMBUKAAN REKENING EFEK</h1><h2>APPLICATION FORM OF SECURITIES ACCOUNT OPENING</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half bg-grey pb-10px">
                    <div class="subheader-1 "><b>DATA PRIBADI</b> / <i>CUSTOMER&apos;S DATA</i></div>
                    
                    <div class="subform">
    
    
                        <!-- FULL NAME  -->
                        <div class="field-row">
                            <b>Nama Lengkap</b> / <i>Full Name</i>
                            <div class="textfield field-y-space" id="fullname"></div>
                        </div>
                        
                        <!-- ALIAS  -->
                        <div class="field-row flex-row">
                            <div class="flex-col w-40pct"><b>Nama Panggilan (Alias)</b><i>Nickname</i></div>
                            <div class="textfield w-60pct " id="nickname"></div>
                        </div>
    
                        <!-- DATE OF BIRTH -->
                        <div class="field-row">
                            <b>Tempat Tanggal Lahir</b> / <i>Place & date of birth</i>
                            <div class="flex-row gap-x-6px field-y-space">
    
                                <div class="flex-col"><b>Tempat</b><i>Place</i></div>
                                <div class="textfield w-20pct" id="place"></div>
        
                                <div class="flex-col"><b>Tanggal</b><i>Date</i></div>
                                <div class="textfield w-8pct" id="date"></div>
        
                                <div class="flex-col"><b>Bulan</b><i>Month</i></div>
                                <div class="textfield w-8pct" id="month"></div>
        
                                <div class="flex-col"><b>Tahun</b><i>Year</i></div>
                                <div class="textfield w-25pct" id="year"></div>
                            </div>
        
                        </div>
    
                        <!-- GENDER -->
                        <div class="field-row flex-row align-flex-start">
                            <div class="flex-col w-inline-label">
                                <b>Jenis Kelamin</b>
                                <i>Sex</i>
                            </div>
                            
                            <div class="flex-row w-30pct align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>Laki-laki</b>
                                    <i>Male</i>
                                </div>
                            </div>
    
                            <div class="flex-row align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>Perempuan</b>
                                    <i>Female</i>
                                </div>
                            </div>
                        </div>
    
    
                        <!-- RELIGION -->
                        <div class="field-row">
                            <b>Agama</b> / <i>Religion</i>
                            <div class="textfield field-y-space" id="religion"></div>
                        </div>
    
                        <hr>
    
    
                        <!-- NATIONALITY -->
                        <div class="field-row flex-row align-flex-start">
                            <div class="flex-col w-inline-label">
                                <b>Status Kewarganegaraan</b>
                                <i>Nationality</i>
                            </div>
                            
                            <div class="flex-row w-20pct align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>Indonesia</b>
                                    <i>Local</i>
                                </div>
                            </div>
    
                            <div class="flex-row w-44pct align-flex-start">
                                <input type="radio">
                                <div class="flex-col mr-10px">
                                    <b>WNA</b>
                                    <i>Foreigner</i>
                                </div>
                                <div class="textfield w-60pct">Indonesia</div>
    
                            </div>
                        </div>
    
    
                        <!-- PRIMARY IDENTITY -->
                        <div class="field-row flex-row align-flex-start">
                            <div class="flex-col w-inline-label">
                                <b>Identitas Utama</b>
                                <i>Primary Identity</i>
                            </div>
                            
                            <div class="flex-row w-30pct align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>KTP</b>
                                    <i>Resident ID Card</i>
                                </div>
                            </div>
    
                            <div class="flex-row w-17pct align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>Paspor</b>
                                    <i>Passport</i>
                                </div>
                            </div>
    
                            <div class="flex-row w-17pct align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>KITAS</b>
                                </div>
                            </div>
                        </div>
    
                        <!-- ID NUMBER -->
                        <div class="field-row flex-row gap-x-10pt ">
                            <div class="w-50pct">
                                <b>Nomor Identitas</b> / <i>ID Number</i>
                                <div class="textfield field-y-space" id="id_number"></div>
                            </div>
    
                            <div class="w-50pct">
                                <b>Tempat Dikeluarkan</b> / <i>Issued In</i>
                                <div class="textfield field-y-space" id="issued_in"></div>
                            </div>
                        </div>
    
    
                        <!-- ID EXPIRY -->
                        <div class="field-row flex-row gap-x-10pt ">
                            <div class="flex-col w-22pct">
                                <b>Berlaku Hingga</b><i>Valid Through</i>
                            </div>
                            <div class="flex-col">
                                <b>Tanggal</b><i>Date</i>
                            </div>
                            <div class="textfield w-23px" id="date"></div>
                            <div class="flex-col">
                                <b>Bulan</b><i>Month</i>
                            </div>
                            <div class="textfield w-23px" id="month"></div>
                            <div class="flex-col">
                                <b>Tahun</b><i>Year</i>
                            </div>
                            <div class="textfield w-38px" id="year"></div>
                            
                        </div>
                        
    
                        <!-- NPWP -->
                        <div class="field-row flex-row">
                            <div class="flex-col w-inline-label">
                                <b>NPWP</b><i>Tax Registration Number</i>
                            </div>
    
                            <div class="flex-col">
                                <div class="flex-row align-flex-start">
                                    <input type="radio">
                                    <div class="flex-col"><b>Ada, Nomor</b><i>Available, Number</i></div>
                                    
                                </div>
                                <div class="flex-row align-flex-start field-y-space">
                                    <input type="radio">
                                    <div class="flex-col"><b>Tidak Ada</b><i>Not Available</i></div>
                                    
                                </div>
                            </div>
    
                            <div class="textfield ml-10pt w-111px" id="npwp">
                            </div>
                        </div>
    
                        <hr>
    
    
                        <!-- ADDRESS BASED ON ID -->
                        <table class="field-y-space">
                            <tr><td><b>Alamat Sesuai KTP</b> / <i>Address (According KTP/Passpor)</i></td></tr>
                            <tr><td><div class="textfield" id="address"></div></td></tr>
                            <tr><td><div class="textfield" id="address"></div></td></tr>
                        </table>
    
                        <!-- CITY -->
                        <table class="field-y-space">
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
    
    
                        <!-- CURRENT ADDRESS -->
                        <table class="field-y-space">
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
    
    
                        <!-- STATUS OF CURRENT RESIDENT -->
                        <table class="field-y-space">
                            <tr><td colspan="4"><b>Status Tempat Tinggal Sekarang</b> / <i>Status of Current Resident</i></td></tr>
                            <tr>
                                <td width="25%">
                                    <div class="flex-row align-flex-start">
                                        <input type="radio" name="" id="">
                                        <div class="flex-col"><b>Milik Sendiri</b><i>Self Property</i></div>
                                    </div>
                                    <div class="flex-row align-flex-start field-y-space">
                                        <input type="radio" name="" id="">
                                        <div class="flex-col"><b>Sewa/Kontrak</b><i>Lease</i></div>
                                    </div>
                                    
                                </td>
                                <td width="25%">
                                    <div class="flex-row align-flex-start">
                                        <input type="radio" name="" id="">
                                        <div class="flex-col"><b>Milik Keluarga</b><i>Family Property</i></div>
                                    </div>
                                    <div class="flex-row align-flex-start field-y-space">
                                        <input type="radio" name="" id="">
                                        <div class="flex-col"><b>Kos</b><i>Boarding</i></div>
                                    </div>
                                </td>
                                <td width="25%">
                                    <div class="flex-row align-flex-start">
                                        <input type="radio" name="" id="">
                                        <div class="flex-col"><b>Rumah Dinas</b><i>Rumah Dinas</i></div>
                                    </div>
                                    <div class="flex-row align-flex-start field-y-space">
                                        <input type="radio" name="" id="">
                                        <div class="flex-col"><b>Lainnya</b><i>Other, Specify</i></div>
                                    </div>
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
    
    
                        <!-- EMAIL -->
                        <div class="field-row flex-row">
                            <div class="flex-col w-14pct">
                                <b>Email</b><i>Email</i>
                            </div>
                            <div class="textfield w-full" id="email"></div>
                        </div>
    
                        <!-- PHONE  -->
                        <div class="field-row flex-row">
                            <div class="flex-col w-40pct">
                                <b>No. Telepon</b><i>Phone Number</i>
                            </div>
                            <div class="flex-col w-18pct">
                                <b>Selular</b><i>Mobile</i>
                            </div>
                            <div class="textfield w-full" id="phone"></div>
                        </div>
    
    
                        <!-- HOME NO & FAX -->
                        <div class="field-row flex-row gap-x-10pt">
                            <div class="flex-col w-25pct">
                                <b>Rumah</b><i>Home Number</i>
                            </div>
                            <div class="textfield w-25pct" id="home_number"></div>
                            <div class="flex-col w-25pct">
                                <b>No. Fax</b><i>Fax Number</i>
                            </div>
                            <div class="textfield w-25pct" id="fax"></div>
                        </div>
    
    
                    </div>
    
                    
                </div>
                
                    
                <div class="box-half ml-1px">
                    <div class="subform">


                        <!-- LATEST EDUCATION -->
                        <div class="field-row mt-0">
                            <b>Pendidikan Terakhir</b> / <i>Latest Education</i>
                            <div class="last-edu flex-row flex-wrap align-flex-start">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>SD</b><i>Elementary School</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>SMP</b><i>Junior High School</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>SMA</b><i>High School</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Akademi (D1-D3)</b><i>Academy</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>S1 Sarjana</b><i>Bachelor Degree</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>S2 Master</b><i>Master Degree</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>S3 Doktor</b><i>Doctoral Degree</i></div>
                                </div>
                                <div class="flex-row align-flex-start w-24pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Lainnya</b><i>Other, Specify</i></div>
                                </div>
                                <div class="textfield w-40pct"></div>
                            </div>
                        </div>


                        <!-- MARITAL STATUS -->
                        <div class="field-row">
                            <b>Status Perkawinan</b><i>Marital Status</i>
                            <div class="flex-row field-y-space">
                                <div class="flex-row align-flex-start w-30pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Belum Menikah</b><i>Single</i></div>
                                </div>
                                <div class="flex-row align-flex-start w-25pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Menikah</b><i>Married</i></div>
                                </div> 
                                <div class="flex-row align-flex-start w-25pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Duda</b><i>Widow</i></div>
                                </div>
                                <div class="flex-row align-flex-start w-20pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Janda</b><i>Widower</i></div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- SPOUSE -->
                        <table class="field-y-space">
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
                                <td colspan="4"><b>Nama Gadis Ibu Kandung</b> / <i>Mother&apos;s maiden name</i></td>
                            </tr>
                            <tr>
                                <td colspan="4"><div class="textfield"></div></td>
                            </tr>
                        </table>
                        <hr/>


                        <!-- FAMILY DIFFERENT RESIDENT -->
                        <table class="field-y-space">
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


                    <!-- SOURCE OF FUND -->
                    <div class="subheader-1"><b>SUMBER DANA</b> / <i>SOUCE OF FUND</i></div>
                    <div class="subform bg-grey">

                        <div class="field-row">
                            <div>
                                <b>Sumber Dana</b> / <i>Source of Fund</i>
                            </div>
                            <div class="fund-source flex-row flex-wrap align-flex-start">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Gaji</b><i>Salary</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Laba Usaha</b><i>Business Profit</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Pasangan/Orang Tua</b><i>Spouse/Parents</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Uang Pensiun</b><i>Pension Fund</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Warisan</b><i>Heritage</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Hibah</b><i>Grant</i></div>
                                </div>
                                <div class="flex-row align-flex-start w-30pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Lainnya, Sebutkan</b><i>Other, Specify</i></div>
                                </div>
                                <div class="textfield w-67pct"></div>
                            </div>
                        </div>

                    </div>
    
                    <!-- EMPLOYMENT DATA -->
                    <div class="subheader-1"><b>DATA PEKERJAAN</b> / <i>EMPLOYMENT DATA</i></div>
                    <div class="subform bg-grey">
                        <div class="field-row">
                            <div>
                                <b>Pekerjaan</b> / <i>Current Job</i>
                            </div>
                            <div class="fund-source flex-row flex-wrap align-flex-start">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Pelajar/Mahasiswa(i)</b><i>Student</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Wiraswasta</b><i>Entrepreneur</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Profesional</b><i>Professional</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Ibu Rumah Tangga</b><i>Housewife</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>PNS (BUMN)</b><i>Goverment Officer</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Pegawai Swasta</b><i>Private Employee</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Pensiunan</b><i>Retired</i></div>
                                </div>
                                <div class="flex-row align-flex-start w-24pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Lainnya</b><i>Other, Specify</i></div>
                                </div>
                                <div class="textfield w-40pct"></div>
                            </div>
                        </div>
                        
                        <hr/>

                        <!-- EMPLOYMENT STATUS -->
                        <div class="field-row flex-row align-flex-start">
                            <div class="flex-col w-inline-label">
                                <b>Status Hubungan Kerja</b>
                                <i>Employment Status</i>
                            </div>
                            
                            <div class="flex-row w-30pct align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>Pegawai Tetap</b>
                                    <i>Permanent Employee</i>
                                </div>
                            </div>
    
                            <div class="flex-row align-flex-start">
                                <input type="radio">
                                <div class="flex-col">
                                    <b>Kontrak</b>
                                    <i>Contract</i>
                                </div>
                            </div>
                        </div>


                        <!-- POSITION & WORK PERIOD -->
                        <div class="field-row">
                            <div class="flex-row gap-x-8px field-y-space">
    
                                <div class="flex-col"><b>Posisi</b><i>Position</i></div>
                                <div class="textfield w-30pct" id="place"></div>
        
                                <div class="flex-col w-18pct ml-6px"><b>Lama Bekerja</b><i>Working Period</i></div>
                                <div class="textfield w-30pct" id="date"></div>
                            </div>
                        </div>


                        <table class="field-y-space">
                            
                            <tr><td colspan="4"><b>Nama Perusahaan</b><br/><i>Company Name</i></td></tr>
                            <tr><td colspan="4"><div class="textfield"></div></td></tr>
                            <tr><td colspan="4"><b>Bidang Usaha</b><br/><i>Bidang Usaha</i></td></tr>
                            <tr><td colspan="4"><div class="textfield"></div></td></tr>
                        </table>

                        <hr class="border-grey-hr field-y-space mb-4px">

                    </div>
                </div>
    
            </div>
            
            
        </div>
    </div>


    <!-- PAGE #2 -->
    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>FORMULIR PERMOHONAN PEMBUKAAN REKENING EFEK</h1><h2>APPLICATION FORM OF SECURITIES ACCOUNT OPENING</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">

                    <div class="subform">
    
                        <!-- COMPANY ADDRESS -->
                        <div class="field-row">
                            <div><b>Alamat Perusahaan</b> / <i>Company Address</i></div>
                            <div class="textfield" id="company_address"></div>
                            <div class="textfield" id="company_address"></div>
                        </div>

                        <div class="field-row flex-row">
                            <div class="flex-col w-20pct"><b>Kota</b><i>City</i></div>
                            <div class="textfield w-full" id="city"></div>
                        </div>
                        <div class="field-row flex-row">
                            <div class="flex-col w-70px"><b>Provinsi</b><i>Province</i></div>
                            <div class="textfield w-288px" id="province"></div>
                        </div>

                        <div class="field-row">
                            <div class="flex-row gap-x-8px field-y-space">
                                <div class="flex-col w-70px"><b>Kode Pos</b><i>Postal Code</i></div>
                                <div class="textfield w-30pct" id="postal_code"></div>
        
                                <div class="flex-col w-18pct ml-6px"><b>No. Fax</b><i>Fax Number</i></div>
                                <div class="textfield w-30pct" id="fax_no"></div>
                            </div>
                        </div>

                        <div class="field-row">
                            <div class="flex-row gap-x-8px field-y-space">
                                <div class="flex-col w-30pct"><b>No. Telepon</b><i>Phone Number</i></div>
                                <div class="textfield w-40pct" id="phone_no"></div>
        
                                <div class="flex-col w-18pct ml-6px"><b>Ekstensi</b><i>Extention</i></div>
                                <div class="textfield w-30pct" id="extention"></div>
                            </div>
                        </div>
                        
                        
                        <!-- ANNUAL INCOME  -->
                        <div class="field-row">
                            <b>Pendapatan per Tahun</b> / <i>Annual Income (Rp)</i>
                            <div class="annual-income flex-wrap">
                                <div>
                                    <input type="radio">
                                    <b>&lt; Rp 50 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 250 - 500 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 50 - 100 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 500 juta</b> / <i>Million</i> - <b>1 Milyar</b> / <i>Billion</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 100 - 250 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 1 Milyar</b> / <i>Billion</i>
                                </div>
                            </div>
                        </div>

                        <!-- NET ASSETS  -->
                        <div class="field-row">
                            <b>Kekayaan Bersih</b> / <i>Net Assets (Rp)</i>
                            <div class="annual-income flex-wrap">
                                <div>
                                    <input type="radio">
                                    <b>&lt; Rp 50 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 250 - 500 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 50 - 100 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 500 juta</b> / <i>Million</i> - <b>1 Milyar</b> / <i>Billion</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 100 - 250 juta</b> / <i>Million</i>
                                </div>
                                <div>
                                    <input type="radio">
                                    <b>&gt; Rp 1 Milyar</b> / <i>Billion</i>
                                </div>
                            </div>
                        </div>

    
                    </div>
    
                    <!-- INVESTMENT OBJECTIVE -->
                    <div class="subheader-1"><b>TUJUAN INVESTASI</b> / <i>INVESTMENT OBJECTIVE</i></div>
                    <div class="subform bg-grey px-10pt">
                        <div class="field-row">
                            <div>
                                <b>Tujuan Investasi</b> / <i>Investment Objective</i>
                            </div>
                            <div class="investment-objective flex-row flex-wrap align-flex-start">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Keuntungan</b><i>Profit</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Spekulasi</b><i>Speculation</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Investasi Jangka Panjang</b><i>Long Term Investment</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Investasi Jangka Pendek</b><i>Short Term Investment</i></div>
                                </div>
                                <div class="flex-row align-flex-start w-27pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Lainnya</b><i>Other, Specify</i></div>
                                </div>
                                <div class="textfield w-70pct"></div>
                            </div>
                        </div>

                        <hr>

                        <!-- PENGALAMAN INVESTASI -->
                        <div class="field-row">
                            <div>
                                <b>Pengalaman Investasi</b> / <i>Investment Experience</i>
                            </div>
                            <div class="investment-experience flex-row flex-wrap align-flex-start">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Saham</b><i>Share</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Obligasi</b><i>Bond</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Reksadana</b><i>Mutual Fund</i></div>
                                </div>
                                <div class="flex-row align-flex-start w-27pct">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Lainnya</b><i>Other, Specify</i></div>
                                </div>
                                <div class="textfield w-70pct"></div>
                            </div>
                        </div>

                        <hr>


                        <!-- RISK TOLERANCE  -->
                        <div class="field-row">
                            <div>
                                <b>Toleransi Terhadap Resiko</b> / <i>Tolerance for Risk</i>
                            </div>
                            <div class="risk-tolerance flex-row flex-wrap align-flex-start">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Menghindari Risiko</b><i>Risk Averse</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Mempertimbangkan Risiko</b><i>Risk Moderate</i></div>
                                </div>
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col"><b>Menyukai Risiko</b><i>Risk Taker</i></div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <!-- DATA AHLI WARIS -->
                    <div class="subheader-1"><b>DATA AHLI WARIS</b> / <i>INHERITOR DATA</i></div>
                    <div class="subform bg-grey px-10pt pb-16px">
                        <div class="field-row">
                            <div>
                                <b>Nama Ahli Waris (1)</b> / <i>Name of Heir (1)</i>
                            </div>
                            <div class="textfield"></div>
                        </div>

                        <!-- INHERITOR CONTACT -->
                        <div class="field-row flex-row gap-x-10pt">
                            <div class="flex-col w-17pct">
                                <b>Hubungan</b><i>Relationship</i>
                            </div>
                            <div class="textfield w-35pct" id=""></div>
                            <div class="flex-col w-15pct">
                                <b>Telephone</b><i>Phone</i>
                            </div>
                            <div class="textfield w-33pct" id=""></div>
                        </div>
                        <hr>

                        <!-- INHERITOR (2) -->
                        <div class="field-row">
                            <div>
                                <b>Nama Ahli Waris (2)</b> / <i>Name of Heir (2)</i>
                            </div>
                            <div class="textfield"></div>
                        </div>

                        <!-- INHERITOR CONTACT (2) -->
                        <div class="field-row flex-row gap-x-10pt">
                            <div class="flex-col w-17pct">
                                <b>Hubungan</b><i>Relationship</i>
                            </div>
                            <div class="textfield w-35pct" id=""></div>
                            <div class="flex-col w-15pct">
                                <b>Telephone</b><i>Phone</i>
                            </div>
                            <div class="textfield w-33pct" id=""></div>
                        </div>
                        <hr>


                        <!-- INHERITOR (3) -->
                        <div class="field-row">
                            <div>
                                <b>Nama Ahli Waris (3)</b> / <i>Name of Heir (3)</i>
                            </div>
                            <div class="textfield"></div>
                        </div>

                        <!-- INHERITOR CONTACT (3) -->
                        <div class="field-row flex-row gap-x-10pt">
                            <div class="flex-col w-17pct">
                                <b>Hubungan</b><i>Relationship</i>
                            </div>
                            <div class="textfield w-35pct" id=""></div>
                            <div class="flex-col w-15pct">
                                <b>Telephone</b><i>Phone</i>
                            </div>
                            <div class="textfield w-33pct" id=""></div>
                        </div>

                    </div>



                </div>
                
                
                    
                <div class="box-half">

                    <div class="subheader-1"><b>INSTRUKSI KHUSUS</b> / <i>SPECIFIC INSTRUCTION</i></div>
                    <div class="subform">


                        <ul class="form-ul">

                            <!-- INSTRUKSI #1 -->
                            <li>
                                <b>Fasilitas BEST (BCA Sekuritas Equity Smart Trading</b> / <i>BEST Facility</i> 
                                <div class="flex-wrap align-flex-start mt-2px gap-y-2px">
                                    <input type="radio">
                                    <div class="w-94pct">
                                        <b>Ya, saya ingin menggunakan Fasilitas Online trading *</b><br>
                                        <i>Yes, I want to use Oline Trading Facility</i><br>
                                        <b>Pilihlah opsi dibawah ini</b> / <i>please select the following options</i> <br>
                                        <div class="flex-wrap align-flex-start mt-2px gap-y-2px">
                                            <input type="radio" name="" id="">
                                            <div class="w-94pct">
                                                <b>Saya ingin bertransaksi melalui Sales dan Online Trading</b><br>
                                                <i>I like to be able to make a transaction through Sales and Online Trading</i>
                                            </div>
                                            <input type="radio" name="" id="">
                                            <div class="w-94pct">
                                                <b>Saya ingin bertransaksi secara penuh melalui Online Trading tanpa melibatkan Sales</b><br>
                                                <i>I like to make transaction fully through Online Trading without involving Sales</i>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="radio" name="" id="">
                                    <div>
                                        <b>Tidak, saya tidak ingin menggunakan Fasilitas Online Trading</b><br>
                                        <i>No, I don&apos;t want to use Oline Trading Facility</i>
                                    </div>
                                </div>
                            </li>
                            <hr>

                            <!-- INSTRUKSI #2 -->
                            <li>
                                <b>Nomor Tujuan Rekening Bank</b> / <i>Saving Account Destination</i> <br>
                                
                                <div class="field-y-space">
                                    <b>Nama Bank</b> / <i>Bank Name</i><br>
                                    <div class="textfield mt-2px"></div>
                                </div>

                                <div class="field-y-space">
                                    <b>Cabang</b> / <i>Branch</i><br>
                                    <div class="textfield mt-2px"></div>
                                </div>

                                <div class="field-y-space">
                                    <b>No. Rekening</b> / <i>Account Number</i><br>
                                    <div class="textfield mt-2px"></div>
                                </div>
                                
                                <div class="field-y-space">
                                    <b>Nama Pemilik Rekening</b> / <i>Name of Account Holder</i><br>
                                    <div class="textfield mt-2px"></div>
                                </div>
                                

                            </li>
                            <hr>

                            <!-- INSTRUKSI #3 -->
                            <li>
                                <b>Instruksi Pembayaran (Hasil Transaksi Jual/Dividen)</b><br>
                                <i>Payment Instruction</i>

                                <div class="flex-wrap align-flex-start gap-y-6px mt-2px gap-y-2px">
                                    <input type="radio">
                                    <div class="w-94pct">
                                        <b>Simpan dalam rekening dana atas nama saya</b><br>
                                        <i>Deposited into fund account under my name</i><br>
                                        <br>
                                        <b>Catatan</b> / <i>Note</i> 

                                        <div class="flex-wrap align-flex-start">
                                            <div class="w-6pct"><b>1)</b></div>
                                            <div class="w-94pct">
                                                <b>Untuk Pengguna Fasilitas BEST wajib memilih instruksi pembayaran simpan dalam rekening dana investor</b><br>
                                                <i>It is mandatory for BEST Online Users to choose deposit to Investor Account for their payment instruction.</i>
                                            </div>
                                            <div class="w-6pct"><b>2)</b></div>
                                            <div class="w-94pct">
                                                <b>
                                                    Bila nasabah ingin melakukan penarikan dana, maka dapat
                                                    memberitahu ke account officer PT BCA Sekuritas atau melalui
                                                    messaging (fasilitas on-line trading) dan rekening bank harus
                                                    sesuai dengan yang tercantum dalam formulir permohonan
                                                    pembukaan rekening efek. PT BCA Sekuritas akan memulai
                                                    pelaksanaan instruksi selambat-lambatnya satu Hari Bursa (T+1)
                                                    setelah diterimanya instruksi penarikan dana secara lengkap dari
                                                    nasabah.
                                                </b><br>
                                                <i>
                                                    If the customer wishes to make fund withdrawal, please notify the
                                                    account officer of PT BCA Sekuritas or via messaging (online trading
                                                    facility) and the bank account shall be in accordance with the data
                                                    specified herein. PT BCA Sekuritas will initiate the execution of such
                                                    instruction in no later than one trading day (T+1) upon the receipt of a
                                                    complete fund withdrawal instruction from customer.
                                                </i>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                    <input type="radio" name="" id="">
                                    <div>
                                        <b>Transfer ke nomor tujuan rekening bank saya (sesuai poin nomor 2)</b><br>
                                        <i>Transfer ke nomor tujuan rekening bank saya (sesuai poin nomor 2)</i>
                                    </div>
                                </div>
                            </li>
                            <hr>


                            <!-- INSTRUKSI #4 -->
                            <li>
                                <b>Konfirmasi Transaksi Harian dan Laporan Bulanan</b><br>
                                <i>Daily Transaction Confirmation and Monthly Report</i>

                                <div class="flex-wrap align-flex-start gap-y-6px">
                                    <input type="radio">
                                    <div><b>Email</b></div>
                                </div>
                            </li>
                            
                        </ul>
                        
                    </div>


                    <!-- TANDA TANGAN -->
                    <div class="subheader-1"><b>SPECIMEN TANDA TANGAN & PARAF NASABAH</b> <br> <i>CUSTOMER SIGNATURE & INITIAL SPECIMEN</i></div>
                    <div class="subform bg-grey">

                        <div class="flex-wrap gap-y-6px gap-x-10pt">
                            <div class="w-60pct">
                                <b>Tanda Tangan</b> / <i>Signature</i>
                                <div class="paraf textfield"></div>
                            </div>

                            <div class="w-36pct">
                                <b>Paraf</b> / <i>Initial</i>
                                <div class="paraf textfield"></div>
                            </div>

                            <div class="w-full">
                                <b>Nama Sesuai KTP/Paspor</b> / <i>Name as indicated in ID/Passport</i>
                                <div class="paraf textfield paraf-nasabah">
                                    <div class="paraf-placeholder h-100px"></div>
                                    <div class="">
                                        <b>Nasabah</b> / <i>Customer</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
            </div>
            
            
        </div>
    </div>


    <!-- PAGE #3 -->
    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERNYATAAN</h1><h2>STATEMENTS</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="form-ol">


                        <!-- No 1 -->
                        <li>
                            <b>Apakah anda atau anggota keluarga (termasuk orang tua/ saudara
                                kandung) anda bekerja di PT BCA SEKURITAS?</b><br>
                            <i>Do you or your family member (including parent / sibling) work in PT BCA Sekuritas?</i>
                            
                            <div class="flex-wrap align-flex-start answer-block">
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Ya, Nama</b>
                                        <i>Yes, Name</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-257px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Bagian</b>
                                        <i>Division</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-257px"></div>
                                </div>
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Tidak</b>
                                        <i>No</i>
                                    </div>
                                </div>
                            </div>

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
                            
                            <div class="flex-wrap align-flex-start answer-block">
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Ya, Nama</b>
                                        <i>Yes, Name</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-257px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Nama Perusahaan</b>
                                        <i>Company Name</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-257px"></div>
                                </div>
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Tidak</b>
                                        <i>No</i>
                                    </div>
                                </div>
                            </div>

                        </li>


                        <!-- No 3 -->
                        <li>
                            <b> Apakah anda atau anggota keluarga (termasuk orang tua/saudara
                                kandung) anda seorang karyawan, direktur atau mempunyai
                                pengendalian pada suatu Emiten?
                                </b><br>
                            <i>Do you or your family members (including your parents/siblings)
                                an employee, director or control of an Issuer?</i>
                            
                            <div class="flex-wrap align-flex-start answer-block">
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Ya, Nama</b>
                                        <i>Yes, Name</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-257px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Nama Perusahaan</b>
                                        <i>Company Name</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-257px"></div>
                                </div>
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Tidak</b>
                                        <i>No</i>
                                    </div>
                                </div>
                            </div>

                        </li>


                        <!-- No 4 -->
                        <li>
                            <b> Apakah anda mengetahui dan memahami tentang risiko-risiko dalam
                                berinvestasi di bidang pasar modal?
                                </b><br>
                            <i>Do you acknowledge and understand the risks of investing in capital market?</i>
                            
                            <div class="flex-row answer-block">
                                <div class="w-50pct">
                                    <input type="radio" name="" id="">
                                    <b>Ya</b> / <i>Yes</i>
                                </div>
                                <div class="w-50pct">
                                    <input type="radio" name="" id="">
                                    <b>Tidak</b> / <i>No</i>
                                </div>
                            </div>

                        </li>


                        <!-- No 5 -->
                        <li>
                            <b>Apakah anda mempunyai Rekening Efek di Perusahaan Efek lain?</b><br>
                            <i>Do you have any Securities Account with other Securities Company?</i>
                            
                            <div class="flex-wrap align-flex-start answer-block">
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-row">
                                        <b>Ya, Nama Perusahaan Efek</b> / 
                                        <i> Yes, Securities Company&apos;s Name</i>
                                    </div>
                                    <div class="flex-wrap">
                                        <div class="submultiple-choice">
                                            <b>1. </b>
                                        </div>
                                        <div class="textfield bg-grey-disabled w-318px"></div>
                                        <div class="flex-col w-47pct">
                                            <b>Atas Nama</b>
                                            <i>Under Name</i>
                                        </div>
                                        <div class="textfield bg-grey-disabled w-50pct"></div>
                                        <div class="submultiple-choice">
                                            <b>2. </b>
                                        </div>
                                        <div class="textfield bg-grey-disabled w-318px"></div>
                                        <div class="flex-col w-47pct">
                                            <b>Atas Nama</b>
                                            <i>Under Name</i>
                                        </div>
                                        <div class="textfield bg-grey-disabled w-50pct"></div>
                                    </div>
                                </div>
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-rpw w-25pct">
                                        <b>Tidak</b> / 
                                        <i>No</i>
                                    </div>
                                </div>
                            </div>

                        </li>


                        <!-- No 6 -->
                        <li>
                            <b>Apakah anda adalah warganegara AS? </b> / 
                            <i>Are you a U.S. Citizen?</i>
                            
                            <div class="flex-wrap align-flex-start answer-block gap-y-6px">
                                <input type="radio" name="" id="">
                                <div class="flex-col w-47pct">
                                    <b>Ya (silahkan mengisi formulir W-9)</b> 
                                    <i>Yes (please fill in W-9 form)</i>
                                </div>
                                <input type="radio">
                                <div class="w-40pct">
                                    <b>Tidak</b> / <i>No</i>
                                </div>
                                <input type="radio" name="" id="">
                                <div>
                                    <div class="flex-col">
                                        <b>Ya, namun sudah tidak lagi **</b>
                                        <i>Yes, but no longer **</i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-row mt-8px">
                                <div class="mr-12px">
                                    <b>**</b>
                                </div>
                                <div class="flex-col">
                                    <div>
                                        <b>
                                            Wajib memberikan dokumen pendukung berupa : fotokopi paspor
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
                                    

                                </div>
                            </div>

                        </li>


                        <!-- No 7 -->
                        <li>
                            <b> Apakah anda memiliki kartu identitas izin menetap di AS (Green Card)?
                                </b><br>
                            <i>Do you hold a U.S. Permanent Resident Card (Green Card)?</i>
                            
                            <div class="flex-row answer-block">
                                <div class="flex-row w-50pct align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Ya, Lampirkan</b>
                                        <i>Yes, Please attach</i>
                                    </div>
                                </div>
                                <div class="flex-row w-50pct align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Tidak</b> 
                                        <i>No</i>
                                    </div>
                                </div>
                            </div>

                        </li>


                    </ol>
                </div>
                
                    
                <div class="box-half">

                    <ol class="form-ol" start="8">


                        <!-- No 8 -->
                        <li class="statement-no8">
                            <b>Apakah anda sedang terlibat dalam perkara pidana atau perdata?</b><br>
                            <i>Are you currently involved in any criminal or civil case?</i>
                            
                            <div class="flex-wrap align-flex-start answer-block">
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="w-90pct">
                                        <b>Ya, Sebutkan</b> /
                                        <i>Yes, Name</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-full"></div>
                                </div>
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Tidak</b>
                                        <i>No</i>
                                    </div>
                                </div>
                            </div>

                        </li>

                        <!-- No 9 -->
                        <li class="statement-no9">
                            <b> Apakah ada pihak lain yang bertindak selaku pemilik manfaat (beneficial
                                owner) dari pembukaan Rekening Efek pada PT BCA SEKURITAS yang
                                anda ajukan ini?
                                </b><br>
                            <i>Is there any other party acting as beneficial owner in the opening of Securities
                                Accounts with PT BCA Sekuritas that is being applied?</i>
                            
                            <div class="flex-wrap align-flex-start answer-block">
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Ya, Nama</b>
                                        <i>Yes, Name</i>
                                    </div>
                                    <div class="textfield bg-grey-disabled w-257px"></div>
                                    <div class="flex-col w-full pl-12px">
                                        <b>(wajib mengisi Lampiran Khusus Data Pemilik Manfaat)</b>
                                        <i>(Please fill Beneficial owner form)</i>
                                    </div>
                                </div>
                                <input type="radio" name="" id="">
                                <div class="flex-wrap w-357px">
                                    <div class="flex-col w-25pct">
                                        <b>Tidak</b>
                                        <i>No</i>
                                    </div>
                                </div>
                            </div>

                        </li>


                        <!-- No 10 -->
                        <li class="statement-no10">
                            <b> Nomor Pokok Wajib Pajak (NPWP)
                                </b> / 
                            <i>Taxpayer Identification Number</i>
                            
                            <div class="flex-row align-center answer-block">
                                <input type="radio" name="" id="">
                                <div class="w-50pct">
                                    <b>Memiliki</b> / 
                                    <i>Hold</i>
                                </div>
                                <input type="radio" name="" id="">
                                <div class="w-50pct">
                                    <b>Tidak memiliki</b> / 
                                    <i>Does not hold</i>
                                </div>
                                
                            </div>

                            <div class="mt-16px">
                                <b>Dalam hal nasabah tidak memiliki NPWP, maka nasabah dengan ini
                                    menyatakan:</b>
                            </div>
                            <div>
                                <i>If customer does not hold NPWP, customer hereby states that:</i>
                            </div>
                            <ul class="hyphen-list">
                                <li>
                                    <b>Nasabah adalah Wajib Pajak yang sesuai dengan ketentuan
                                        perpajakan yang berlaku sudah memenuhi persyaratan subjektif
                                        dan objektif dan diwajibkan untuk mendaftarkan diri guna
                                        mendapatkan NPWP, antara lain memiliki penghasilan di atas
                                        Penghasilan Tidak Kena Pajak (PTKP). Sehubungan dengan hal
                                        tersebut Nasabah dengan ini mengikatkan diri untuk segera
                                        melakukan pengurusan NPWP dan segera menyerahkan fotokopi
                                        NPWP kepada PT BCA Sekuritas.</b><br>
                                    <i>Customer is Taxpayer who, under the prevailing tax regulations, has met
                                        subjective and objective requirements and is obliged to register in order
                                        to obtain NPWP, the requirements of which include eaming income
                                        above non-taxable income (PTKP). With regard thereto, Customer
                                        hereby undertakes to obtain NPWP and immediately submit the copy of
                                        NPWP to PT BCA Sekuritas.</i>
                                </li>
                                <li>
                                    <b>Nasabah adalah Wajib Pajak yang sesuai dengan ketentuan
                                        perpajakan yang berlaku, saat ini tidak/belum memenuhi
                                        persyaratan subjektif dan objektif untuk mendapatkan NPWP. Jika
                                        dikemudian hari persyaratan tersebut telah dapat dipenuhi, maka
                                        Nasabah dengan ini mengikatkan diri untuk segera melakukan
                                        pengurusan NPWP dan segera menyerahkan fotokopi NPWP
                                        kepada PT BCA Sekuritas.
                                        </b><br>
                                    <i>Customer is a Taxepayer who, under the prevailing tax regulations,
                                        currently does not/has not met subjective and objective requirements to
                                        obtain NPWP. If in the future Customer has met such requirements,
                                        Customer hereby undertakes to obtain NPWP and immediately submit
                                        the copy of NPWP to PT BCA Sekuritas.</i>
                                </li>
                            </ul>
                        </li>


                        <!-- No 11 -->
                        <li class="statement-no11">
                            <b> Apakah Nasabah memiliki kewajiban pajak kepada / merupakan
                                penduduk dari / warga negara selain Indonesia?
                                </b> / 
                            <i>The Customer has tax
                                obligations to a country /is a citizen of a country /hold citizenship of a country other
                                than the Republic of Indonesia
                            </i>
                            
                            <div class="flex-row answer-block">
                                <div class="w-50pct">
                                    <input type="radio" name="" id="">
                                    <b>Ya</b> / <i>Yes</i>
                                </div>
                                <div class="w-50pct">
                                    <input type="radio" name="" id="">
                                    <b>Tidak</b> / <i>No</i>
                                </div>
                            </div>

                            <div class="mt-16px">
                                <b>Jika nasabah memilih "Ya" pada pernyataan diatas, tuliskan Taxpayer
                                    Identification Number (TIN) / Identitas Setara TIN dan Negara Domisili
                                    Pajak Nasabah.</b>
                                <br>
                                <i>If customer choose "Yes" on the question above, please write down Taxpayer
                                    Identification Number (TIN) / Equivalent Tax ID and Customer&apos;s Country of Tax
                                    Residency.
                                    </i>
                            </div>

                            <div class="grid-kewajiban-pajak">
                                <div class="textfield ">No.</div>
                                <div class="textfield ">
                                    <div class="flex-col">
                                        <b>TIN/Identitas Setara TIN/Keterangan Lain</b>
                                        <i>TIN/Equivalent Tax ID/Other Information</i>
                                    </div>
                                </div>
                                <div class="textfield ">
                                    <div class="flex-col">
                                        <b>Negara Domisili Pajak</b>
                                        <i>Country of Tax Residency</i>
                                    </div>
                                </div>

                                <div class="textfield bg-grey-light-1">1</div>
                                <div class="textfield bg-grey-light-1"></div>
                                <div class="textfield bg-grey-light-1"></div>
                                
                                <div class="textfield bg-grey-light-1">2</div>
                                <div class="textfield bg-grey-light-1"></div>
                                <div class="textfield bg-grey-light-1"></div>
                                
                            </div>

                        </li>


                        

                    </ol>
                </div>

            </div>
            
            
        </div>
    </div>

    <!-- PAGE #4 -->
    <div class="paper">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>DEKLARASI</h1><h2>DECLARATIONS</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">

                    <div class="mt-12px">
                        <b>Dengan ditandatanganinya Formulir Permohonan Pembukaan Rekening
                            Efek ini, saya menyatakan bahwa:</b><br>
                        <i>By signing this Application Form of Securities Account Opening, I declare that :</i>

                    </div>

                    <ol class="form-ol declarations">


                        <!-- No 1 -->
                        <li>
                            <b>Informasi yang saya berikan adalah benar dan tepat dan dengan ini saya
                                memberikan kuasa kepada PT BCA SEKURITAS untuk memeriksa
                                kebenaran dan ketepatan informasi tersebut dari setiap sumber yang
                                layak.</b><br>
                            <i>The information provided herein is true and accurate and I hereby authorize PT BCA
                                SEKURITAS to verify the truth and accuracy of such information with any proper
                                source.
                                </i>

                        </li>

                        <!-- No 2 -->
                        <li>
                            <b> Saya memahami bahwa PT BCA SEKURITAS memiliki hak sepenuhnya
                                untuk menerima atau menolak permohonan pembukaan Rekening Efek
                                saya di PT BCA SEKURITAS.
                                </b><br>
                            <i>I understand that PT BCA SEKURITAS has the full right to accept or refuse my a
                                Securities Account opening application with PT BCA SEKURITAS.</i>
                            
                        </li>


                        <!-- No 3 -->
                        <li>
                            <b> Saya telah bertemu muka (face to face) dengan Account
                                Officer/Sales/Staff Marketing PT BCA SEKURITAS dan telah memberikan
                                informasi-informasi yang diminta sebagaimana tertuang di dalam
                                Formulir Permohonan Pembukaan Rekening Efek ini.
                                </b><br>
                            <i>I have met in person (face to face) with the Account Officer/Sales/Marketing Staff of PT
                                BCA SEKURITAS and provided the required information as contained herein.
                                </i>
                        </li>


                        <!-- No 4 -->
                        <li>
                            <b> Saya telah dijelaskan tentang hak dan kewajiban saya dan saya telah
                                membaca, mengerti dan mengikatkan diri serta menyetujui semua
                                ketentuan dan persyaratan yang telah dituangkan di dalam Perjanjian
                                Pembukaan Rekening Efek, yang akan berlaku efektif setelah
                                permohonan pembukaan Rekening Efek ini disetujui oleh PT BCA
                                SEKURITAS.
                                
                                </b><br>
                            <i>I have received explanation on my rights and obligations, and I have read, understood
                                and bound myself as well as agreed to all terms and conditions set forth in the
                                Securities Account Opening Agreement, which will come into force once this Securities
                                Account opening application is approved by PT BCA SEKURITAS.
                                </i>
                            
                        </li>
                    </ol>


                    <div class="mt-16px">
                        <b>
                            Demikian pernyataan ini dibuat dengan sebenarnya untuk dapat
                            dipergunakan sebagaimana mestinya.  
                        </b><br>
                        <i>This statement has been made truthfully in order to be used accordingly</i>

                    </div>

                    <div class="signature-place-date">
                        Sidoarjo, 10/06/2022
                        <div class="flex-row">
                            <b>Tempat, Tanggal / Bulan / Tahun </b>
                            <i>(Place, dd/mm/yyyy)</i>
                        </div>
                        <div>
                            <b>Nasabah</b> / <i>Customer</i>
                        </div>
                    </div>

                    <div class="signature-placeholder">

                    </div>
                    <div class="flex-row mt-4px">
                        <div class="flex-col w-25pct">
                            <b>Nama</b>
                            <i>Name</i>
                        </div>
                        <div class="textfield bg-grey-disabled w-full"></div>
                    </div>                    
                </div>
                
                    
                <div class="box-half">

                    <div class="subheader-1">
                        <b>LAMPIRAN</b> / <i>ATTACHMENTS</i>
                    </div>

                    <div class="subform bg-grey pb-20px">
                        <div class="flex-col">
                            <b>Dengan menandatangani formulir ini saya melampirkan fotokopi / 
                            </b>
                            <i>By signing this form, I enclose the copies of</i>
                        </div>
    
                        <div class="page4-attachments">
                            <input type="radio" name="" id="">
                            <div class="flex-col">
                                <b>KTP/Paspor/KITAS</b>
                                <i>ID/Paspor/KITAS
                                </i>
                            </div>
    
                            <input type="radio" name="" id="">
                            <div class="flex-col">
                                <b>Nomor Pokok Wajib Pajak (NPWP)</b>
                                <i>Taxpayer Identification Number
                                </i>
                            </div>
    
                            <input type="radio" name="" id="">
                            <div class="flex-col">
                                <b>Surat Kuasa (jika diperlukan)</b>
                                <i>Power of Attorney
    
                                </i>
                            </div>
    
                            <input type="radio" name="" id="">
                            <div class="flex-col">
                                <b>Informasi mengenai Pemilik Manfaat/Beneficial Owner (Jika
                                    diperlukan)
                                    </b>
                                <i>Information on Beneficial Owner (if necessary)
                                </i>
                            </div>
    
                            <input type="radio" name="" id="">
                            <div class="flex-col">
                                <b>Formulir Rekening Dana Nasabah
                                </b>
                                <i>Appliacation Form for Customer
                                </i>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            
            
        </div>
    </div>


    <!-- PAGE #5 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns gap-x-16px">
                <div class="box-half pb-16px flex-col">

                    <div class="center-content nomor-perjanjian">
                        <div class="flex-row align-flex-start">
                            <b>Nomor : </b>
                            <div class="flex-col">
                                <div class="h-12px textfield-underline w-150px">

                                </div>
                                <div class="center-content">
                                    <b>Tanggal : </b>
                                    <span>10/06/2022</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        Perjanjian Pembukaan Rekening Efek <b>(“Perjanjian”)</b> ini dibuat dan ditandatangani oleh dan
                        antara: 
                    </div>
    
                    <ol class="romawi">
                        <li>
                            <b>PT BCA SEKURITAS</b>,  suatu perseroan terbatas yang didirikan berdasarkan hukum Negara
                            Republik Indonesia, berkedudukan di Jakarta Pusat. Selanjutnya disebut sebagai "<b>BCAS</b>".
                        </li>
                        <li>
                            <div class="id-gridform">
                                <div>Nama</div><div>:</div><div class="textfield-underline"></div>
                                <div>Alamat sesuai identitas</div><div>:</div><div class="h-28px textfield-underline"></div>
                                <div>No. Identitas</div><div>:</div>
                                <div class="grid-identitas">
                                    <div><input type="checkbox" name="" id=""></div>
                                    <div class="flex align-center">KTP</div>
                                    <div class="textfield-underline"></div>
    
                                    <div><input type="checkbox" name="" id=""></div>
                                    <div class="flex align-center">Paspor</div>
                                    <div class="textfield-underline"></div>
    
                                    <div><input type="checkbox" name="" id=""></div>
                                    <div class="flex align-center"></div>
                                    <div class="textfield-underline"></div>
                                </div>
    
                            </div>
                        </li>
                    </ol>
    
                    <div>
                        Selanjutnya disebut sebagai <b>“Nasabah”</b>. <br>
                        BCAS dan Nasabah selanjutnya disebut sebagai <b>“Para Pihak”</b>.
                    </div>
    
                    <div class="mt-12px">
                        BCAS dan Nasabah terlebih dahulu menerangkan hal-hal sebagai berikut: <br>
                        <ol class="desc-list">
                            <li>
                                BCAS adalah Perusahaan Efek yang telah memperoleh izin untuk melakukan kegiatan
                                usaha sebagai perantara pedagang Efek dan terdaftar sebagai anggota pada PT Bursa
                                Efek Indonesia (BEI).
                            </li>
                            <li>
                                Nasabah bermaksud untuk membuka rekening Efek pada BCAS dan menunjuk BCAS untuk
                                bertindak selaku perantara pedagang Efek bagi kepentingan Nasabah untuk melakukan
                                transaksi pada pasar modal di Indonesia atas Efek yang disimpan dalam Rekening Efek
                                yang dibuka berdasarkan Perjanjian ini.
    
                            </li>
                        </ol>
    
                        
                    </div>
    
                    <div>
                        Berdasarkan hal-hal tersebut di atas, Para Pihak sepakat untuk membuat dan menandatangani
                        Perjanjian ini dengan syarat-syarat dan ketentuan-ketentuan sebagai berikut:
                    </div>
                    
                    <ol class="romawi">
                        <li>
                            <b>DEFINISI</b><br>
                            Kecuali dinyatakan lain dalam Perjanjian ini, istilah-istilah berikut ini berarti sebagai
                            berikut:
                            <ol class=" def-list">
                                <li>
                                    <b>“Bapepam dan LK”</b> berarti Badan Pengawas Pasar Modal dan Lembaga Keuangan
                                    atau badan-badan lain yang diberikan kewenangan untuk melakukan pengawasan dan
                                    pengaturan kegiatan pasar modal di Indonesia sebelum dialihkannya kewenangan
                                    tersebut kepada OJK.
                                </li>
                                <li>
                                    <b>“Bursa Efek”</b>  berarti PT Bursa Efek Indonesia.
                                </li>
                                <li>
                                    <b>“Deposit”</b> berarti dana dan/atau Efek dengan nilai dan jenis sebagaimana ditentukan
                                    BCAS, yang wajib diserahkan kepada BCAS sebelum dilaksanakannya Transaksi Efek.
                                </li>
                                <li>
                                    <b>“Efek”</b> berarti surat berharga, yaitu surat pengakuan utang, surat berharga komersial,
                                    saham, obligasi, tanda bukti utang, Unit Penyertaan kontrak investasi kolektif, kontrak
                                    berjangka atas Efek, dan setiap derivatif dari Efek.
                                </li>
                                <li>
                                    <b>“Emiten”</b> berarti pihak yang melakukan kegiatan penawaran Efek yang dilakukan untuk
                                    menjual Efek kepada masyarakat berdasarkan tata cara yang diatur dalam peraturan
                                    perundangan di bidang pasar modal.
                                </li>
                                <li>
                                    <b>“Force Majeure”</b> atau <b>“Keadaan Memaksa”</b> berarti keadaan atau kejadian di luar
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
                                    namun di luar kehendak dan kendali BCAS.
                                </li>
                                <li>
                                    <b>“Formulir Permohonan Pembukaan Rekening Efek” </b> adalah formulir permohonan
                                    pembukaan Rekening Efek yang berisikan informasi dan data Nasabah yang merupakan
                                    satu kesatuan dan bagian yang tidak terpisahkan dengan Perjanjian ini.
                                </li>
                                <li>
                                    <b>“Hari Bursa”</b> hari diselenggarakannya perdagangan Efek di Bursa Efek yaitu hari Senin
                                    sampai dengan hari Jumat, kecuali hari tersebut merupakan hari libur nasional atau
                                    dinyatakan sebagai hari libur Bursa oleh Bursa Efek.
                                </li>
                                <li>
                                    <b>“Hari Kerja”</b> berarti hari Senin sampai dengan Jumat, kecuali dinyatakan sebagai hari
                                    libur nasional oleh pemerintah.
                                </li>
                                <li>
                                    <b>“KPEI”</b>  berarti PT. Kliring Penjaminan Efek Indonesia, suatu perseroan terbatas yang
                                    didirikan berdasarkan hukum Negara Republik Indonesia, yang merupakan Lembaga
                                    Kliring dan Penjaminan sesuai dengan Undang-Undang Nomor 8 tahun 1995 tentang
                                    Pasar Modal.
                                </li>
                                <li>
                                    <b>“KSEI”</b>  berarti PT. Kustodian Sentral Efek Indonesia, suatu perseroan terbatas yang
                                    didirikan berdasarkan hukum Negara Republik Indonesia, yang merupakan Lembaga
                                    Penyelesaian dan Penyimpanan sesuai dengan Undang-Undang Nomor 8 tahun 1995
                                    tentang Pasar Modal.
                                </li>
                                <li>
                                    <b>“Limit Transaksi”</b>  berarti nilai maksimum pembelian Efek yang dapat dilakukan oleh
                                    Nasabah yang dari waktu ke waktu dapat berubah berdasarkan nilai Deposit yang
                                    disetorkan oleh Nasabah.
                                </li>
                                <li>
                                    <b>“Otoritas Jasa Keuangan”</b> atau <b>“OJK”</b> berarti lembaga Negara yang dibentuk
                                    berdasarkan Undang-Undang Nomor 21 tahun 2011 tentang Otoritas Jasa Keuangan,
                                    yang berfungsi menyelenggarakan sistem pengaturan dan pengawasan yang terintegrasi
                                    terhadap keseluruhan kegiatan di dalam sektor jasa keuangan Bapepam dan LK
                                    sebagaimana dimaksud dalam pasal 3 Undang-Undang Nomor 8 Tahun 1995 tentang
                                    Pasar Modal.
                                    
                                </li>
                                <li>
                                    <b>“Partisipan”</b>  berarti Perusahaan Efek atau Bank Kustodian yang telah membuka
                                    rekening Efek pada KSEI.
                                </li>
                                <li>
                                    <b>“Pasar Negosiasi”</b> berarti pasar di mana perdagangan Efek di Bursa Efek
                                </li>
                            </ol>
                        </li>
                    </ol>
                    
                </div>

                <div class="box-half pb-16px flex-col">

                    <div class="center-content nomor-perjanjian">
                        <div class="flex-row align-flex-start">
                            <b>Number : </b>
                            <div class="flex-col">
                                <div class="h-12px textfield-underline w-150px">

                                </div>
                                <div class="center-content">
                                    <b>Date : </b>
                                    <span>10/06/2022</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        This Securities Account Opening Agreement <b>(“Agreement”)</b> is made and signed by and
                        between:
                    </div>
    
                    <ol class="romawi">
                        <li>
                            <b>PT BCA SEKURITAS</b>, a limited liability company duly incorporated under the laws of the
                            Republic of Indonesia, domiciled in Central Jakarta. Hereinafter shall be referred to as "<b>BCAS</b>".
                        </li>
                        <li>
                            <div class="id-gridform">
                                <div>Name</div><div>:</div><div class="textfield-underline"></div>
                                <div>Address as in ID Card</div><div>:</div><div class="h-28px textfield-underline"></div>
                                <div>ID Card Number</div><div>:</div>
                                <div class="grid-identitas">
                                    <div><input type="checkbox" name="" id=""></div>
                                    <div class="flex align-center">KTP</div>
                                    <div class="textfield-underline"></div>
    
                                    <div><input type="checkbox" name="" id=""></div>
                                    <div class="flex align-center">Paspor</div>
                                    <div class="textfield-underline"></div>
    
                                    <div><input type="checkbox" name="" id=""></div>
                                    <div class="flex align-center"></div>
                                    <div class="textfield-underline"></div>
                                </div>
    
                            </div>
                        </li>
                    </ol>
    
                    <div>
                        Hereinafter shall be referred to as the <b>“Customer”</b>. <br>
                        BCAS and the Customer hereinafter shall be referred to as the <b>“Parties”</b>.
                    </div>
    
                    <div class="mt-12px">
                        BCAS and the Customer rstly declare as follows : <br>
                        <ol class="desc-list">
                            <li>
                                BCAS is a Securities Company which has obtained the license to carry out business activity
                                as Securities broker-dealer and been registered as a member at PT Bursa Efek Indonesia
                                (BEI).
                            </li>
                            <li>
                                The Customer intends to open a Securities account at BCAS and to appoint BCAS to act as
                                Securities broker-dealer for the Customer&rsquo;s interest to perform transactions in Indonesian
                                capital market for Securities deposited in the Securities account opened based on this
                                Agreement

    
                            </li>
                        </ol>
    
                        
                    </div>
    
                    <div>
                        Based on the above, the Parties agree to enter into and sign this Agreement under the following
                        terms and conditions:

                    </div>
                    
                    <ol class="romawi">
                        <li>
                            <b>DEFINITION</b><br>
                            Unless otherwise stated in this Agreement, the following terms shall have the meaning as
                            follows:
                            <ol class=" def-list">
                                <li>
                                    <b>“Bapepam-LK”</b> means the Indonesian Capital Market and Financial Institution
                                    Supervisory Agency or other agency(-ies) granted with the authority to perform
                                    supervision and regulation to capital market activities in Indonesia before the transfer of
                                    such authority to OJK takes place.
                                </li>
                                <li>
                                    <b>“Stock Exchange”</b>  means PT Bursa Efek Indonesia.
                                </li>
                                <li>
                                    <b>“Deposit”</b> means the funds and/or Securities having the value and type as determined
                                    by BCAS, which shall be delivered to BCAS prior to the execution of any Securities
                                    Transaction.
                                </li>
                                <li>
                                    <b>“Securities”</b> shall be marketable securities, namely, promissory notes, commercial
                                    paper, shares, obligation, debenture, Participation of Collective Investment Contracts,
                                    futures contract related to Securities, and any derivative of Securities.
                                </li>
                                <li>
                                    <b>“Issuer”</b> shall be the party who conducts Securities o ering to sell Securities to public
                                    based on the procedures set forth in the relevant law and regulations on capital market.
                                </li>
                                <li>
                                    <b>“Force Majeure”</b>  shall be the circumstances or event beyond the will and control of the
                                    Parties, including but not limited to natural disaster; nuclear and radioactive disaster; war;
                                    revolt; riot; unrest; sabotage; terrorism; strike; re; prohibition by the government or
                                    amendment to laws and regulations, Bapepam-LK regulation, OJK regulation, Stock
                                    Exchange regulation, LKP Regulations or LPP Regulations which is made after the
                                    execution hereof that may a ect the implementation of this Agreement; telecommunication
                                    interference; technical failure or interference on Stock Exchange&apos;s trading system;
                                    suspension of trade by the Stock Exchange; technical failure or interference on the
                                    systems related to clearing and guarantee as well as depository and settlement at KPEI
                                    and/or KSEI; banking authorization system failure; abrupt change on government policy;
                                    delay of pricing or execution of transaction particularly due to restrictions in the market or
                                    rapid change of Securities price resulting in a transaction being executed not at the
                                    instructed price in a certain time or at the best price or market price; as well as other
                                    circumstances, either directly or indirectly, a ecting BCAS activities, however, it is beyond
                                    the will and control of BCAS.
                                    
                                </li>
                                <li>
                                    <b>“Application Form of Securities Account Opening” </b>  shall be the application form for
                                    securities account opening containing the Customer information and data, which
                                    constitutes one and inseparable part of this Agreement.
                                </li>
                                <li>
                                    <b>“Trading Day”</b> shall be the operational day of Securities trading at the Stock Exchange,
                                    namely, Monday to Friday, unless such day constitutes national holiday or is declared as
                                    Trading holiday by the Stock Exchange.
                                </li>
                                <li>
                                    <b>“Business Day”</b> shall be Monday to Friday, unless is declared as a national holiday by
                                    the government.
                                </li>
                                <li>
                                    <b>“KPEI”</b>  shall be PT Kliring Penjaminan Efek Indonesia, a limited liability company
                                    incorporated under the laws of the Republic of Indonesia, which is the Clearing and
                                    Guarantee Agency according to Law Number 8 of 1995 on Capital Market.
                                </li>
                                <li>
                                    <b>“KSEI”</b>  shall be PT Kustodian Sentral Efek Indonesia, a limited liability company
                                    incorporated under the laws of the Republic of Indonesia, which is the Settlement and
                                    Depository Agency according to Law Number 8 of 1995 on Capital Market.
                                </li>
                                <li>
                                    <b>“Trading Limit”</b>  shall be the maximum purchase amount of Securities that can be made
                                    by the Customer, which may change from time to time based on the Deposit provided by
                                    the Customer.
                                    
                                </li>
                                <div class="list-with-paraf">
                                    <div class="w-220px">
                                        <li>
                                            <b>“Indonesia Financial Service Authority”</b> or <b>“OJK”</b> shall be the state institution established based on the
                                            Law Number 21 of 2011 on Financial Service Authority,
                                            which serves to organize the regulatory and supervisory
                                            system integrated with the entire activities within nancial
                                            service sector of BAPEPAM–LK as referred to in Article
                                            3 of the Law Number 8 of 1995 on Capital Market
                                            
                                        </li>
                                        <li>
                                            <b>“Participant”</b>  shall be Securities Company or Custodian
                                            Bank that have opened Securities account at KSEI.
                                        </li>
                                        <li>
                                            <b>“Negotiation Market” </b> shall be the market in which
                                            Securities
                                            
                                        </li>
                                    </div>
                                    <div class="paraf-box">
                                        <div class="paraf-placeholder border-2px">

                                        </div>
                                        <div class="grey-dark-2 text-12px">
                                            Paraf / <i>Initial</i>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </ol>
                        </li>
                    </ol>
                    
                </div>

            </div>
            
            
        </div>
    </div>


    <!-- PAGE #6 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi">
                        <ol class="def-list" start="16">

                            <div>
                                dilaksanakan berdasarkan proses tawar menawar secara langsung secara individual
                                dan tidak secara lelang yang berkesinambungan (noncontinuous auction market) dan
                                penyelesaiannya dilakukan berdasarkan kesepakatan antara anggota Bursa Efek.
                            </div>
        
                            <li class="mt-22px">
                                <b>“Pasar Reguler”</b> berarti pasar di mana perdagangan Efek di Bursa Efek dilaksanakan
                                berdasarkan proses tawar menawar secara lelang yang berkesinambungan (continuous
                                auction market) oleh anggota Bursa Efek dan penyelesaiannya dilakukan sebagaimana
                                ditentukan dalam peraturan Bursa.
                            </li>
                            <li>
                                <b>“Pasar Reguler Tunai”</b> atau <b>“Pasar Tunai”</b> berarti pasar di mana perdagangan Efek di
                                Bursa Efek dilaksanakan berdasarkan proses tawar menawar secara lelang 17. yang
                                berkesinambungan (continuous auction market) oleh anggota Bursa Efek dan
                                penyelesaiannya dilakukan pada Hari Bursa yang sama dengan terjadinya Transaksi
                                Bursa (T+0).
                            </li>
                            <li>
                                <b>“Penerima Manfaat” </b> atau <b>“Beneficial Owner”</b> berarti setiap pihak baik secara
                                langsung maupun tidak langsung melalui perjanjian atau cara apapun:
                                
                                <ol class="list-alpha">
                                    <li>
                                        berhak atas dan/atau menerima manfaat tertentu yang berkaitan dengan:
                                        <ol class="with-double-parentheses">
                                            <li>
                                                Rekening Efek; atau
                                            </li> 
                                            <li>
                                                hubungan usaha dengan penyedia jasa keuangan di bidang pasar modal;
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        merupakan pemilik sebenarnya (ultimate account owner) dari dana pada Rekening
                                        Dana dan/atau Efek pada Rekening Efek;
                                    </li>
                                    <li>
                                        mengendalikan transaksi yang dilakukan Nasabah melalui BCAS; dan/atau
                                    </li>
                                    <li>
                                        memberikan kuasa untuk melakukan transaksi
                                    </li>
                                        
                                </ol>
                            </li>
                            <li>
                                <b>“Peraturan Bursa Efek”</b> berarti peraturan yang dibuat oleh Bursa Efek yang meliputi
                                antara lain Peraturan Pencatatan Efek, Peraturan Perdagangan Efek, Peraturan 19.
                                Keanggotaan Bursa Efek, Pedoman JATS, dan surat edaran Bursa Efek, termasuk
                                perubahan-perubahan dan peraturan pelaksanaannya.
                            </li>
                            <li>
                                <b>“Peraturan LKP”</b> berarti peraturan-peraturan mengenai kliring serta penyelesaian
                                Transaksi Efek yang dikeluarkan oleh KPEI.
                                
                            </li>   
                            <li>
                                <b>“Peraturan LPP”</b> berarti peraturan-peraturan mengenai penyimpanan Efek yang
                                dikeluarkan oleh KSEI. 21.
                            </li>
                            <li>
                                <b>“POJK No.12/2017”</b> berarti Peraturan Otoritas Jasa Keuangan Nomor 12/ 22.
                                POJK.04/2017 tentang Penerapan Program Anti Pencucian Uang dan Pencegahan
                                Pendanaan Terorisme Di Sektor Jasa Keuangan, berikut perubahan-perubahannya
                                yang ditetapkan oleh OJK.
                            </li>
                            <li>
                                <b>“Rekening Dana”</b> berarti rekening pada bank yang ditunjuk oleh BCAS dan dibuka atas
                                nama Nasabah untuk menampung dana milik Nasabah yang akan dipergunakan untuk
                                penyelesaian Transaksi Efek oleh Nasabah yang dilakukan melalui BCAS.
                            </li>
                            <li>
                                <b>“Rekening Efek”</b>  berarti rekening Efek yang dibuka Nasabah pada BCAS yang akan
                                menampung Efek milik Nasabah yang dititipkan pada BCAS sesuai dengan ketentuan
                                sebagaimana diatur dalam Perjanjian ini.
                            </li>
                            <li>
                                <b>“Sub Rekening Efek”</b>  berarti rekening Efek setiap Nasabah yang tercatat dalam
                                rekening Efek Partisipan pada KSEI.
                            </li>
                            <li>
                                <b>“Transaksi Efek”</b>  berarti pembelian atau penjualan Efek melalui Bursa Efek yang
                                dilaksanakan berdasarkan ketentuan Perjanjian ini.
                            </li>
    
                        </ol>

                        <li value="2" class="mt-12px">
                            <b>PERSYARATAN MENJADI NASABAH</b>
                            <ol class="def-list">
                                <li>
                                    Nasabah wajib mengisi dan melengkapi Formulir Permohonan Pembukaan Rekening
                                    Efek dengan benar serta menyerahkan kepada BCAS seluruh dokumen yang
                                    dipersyaratkan dalam Formulir Permohonan Pembukaan Rekening Efek, yang bersama
                                    dengan Formulir Permohonan Pembukaan Rekening Efek seluruhnya merupakan satu
                                    kesatuan dan bagian yang tidak terpisahkan dengan Perjanjian ini.
                                </li>
                                <li>
                                    Nasabah wajib menyerahkan Deposit kepada BCAS pada waktu yang ditetapkan oleh
                                    BCAS. BCAS berhak sepenuhnya menentukan jenis Efek berikut nilainya yang dapat
                                    dijadikan Deposit. Nasabah dapat melakukan Transaksi Efek maksimal sebesar Limit
                                    Transaksi yang ditetapkan BCAS setelah Deposit yang diserahkan Nasabah efektif
                                    diterima dalam Rekening Dana dan/atau dalam Rekening Efek.
                                </li>
                                <li>
                                    BCAS mempunyai hak sepenuhnya untuk menerima atau menolak permohonan
                                    pembukaan Rekening Efek yang diajukan oleh Nasabah berdasarkan Formulir
                                    Permohonan Pembukaan Rekening Efek. Transaksi pembelian atau penjualan Efek oleh
                                    Nasabah melalui BCAS selaku perantara pedagang Efek yang ditunjuk oleh Nasabah
                                    dapat dilakukan setelah proses pembukaan Rekening Efek telah diselesaikan atau
                                    Rekening Efek masih tetap dapat dioperasikan sesuai dengan prosedur dan tata cara
                                    yang berlaku dan diterapkan di BCAS, kecuali untuk transaksi-transaksi yang
                                    berdasarkan peraturan yang berlaku di Pasar Modal dimungkinkan untuk dilakukan
                                    sebelum pembukaan Rekening Efek selesai diproses.
                                </li>
                                <li>
                                    Apabila sampai dengan tanggal yang ditentukan, Nasabah belum menyetorkan Deposit,
                                    sebagaimana disyaratkan oleh BCAS terkait dengan pembukaan Rekening Efek, atau
                                    terkait dengan kecukupan dana sebelum melakukan Transaksi Efek, maka BCAS berhak
                                    membatalkan persetujuan pembukaan Rekening Efek atau menolak/ membatalkan
                                    instruksi Transaksi Efek yang diberikan oleh Nasabah. Namun, seandainya instruksi
                                    transaksi tersebut telah dilaksanakan, maka Nasabah wajib memenuhi kewajibannya
                                    terkait transaksi dimaksud.
                                </li>  
                                <li>
                                    Nasabah wajib membuka Sub Rekening Efek pada KSEI. Pembukaan Sub Rekening
                                    Efek dilakukan Nasabah dengan memberikan kuasa kepada BCAS untuk melaksanakan
                                    pembukaan Sub Rekening Efek dan pembuatan nomor tunggal identitas pemodal (single
                                    investor identi cation/SID), sesuai dengan ketentuan dan peraturan yang ditetapkan oleh
                                    regulator pasar modal. BCAS memiliki kewajiban untuk melaksanakan kuasa pembukaan
                                    Sub Rekening Efek dan pembuatan nomor tunggal identitas pemodal (single investor
                                    identi cation/SID) untuk Nasabah.
                                </li>
                                <li>
                                    Nasabah wajib membuka Rekening Dana pada waktu yang bersamaan dengan
                                    pembukaan Rekening Efek. Pembukaan Rekening Dana dilakukan oleh Nasabah dengan
                                    memberikan kuasa kepada BCAS untuk melaksanakan pembukaan Rekening Dana atas
                                    nama Nasabah pada bank yang ditunjuk BCAS.
                                </li>
                                <li>
                                    Setiap perubahan yang berhubungan dengan informasi atau keterangan yang terdapat
                                    dalam Formulir Permohonan Pembukaan Rekening Efek (termasuk kelengkapan
                                    dokumen yang dipersyaratkan) wajib diberitahukan secara tertulis oleh Nasabah kepada
                                    BCAS selambat-lambatnya 2 (dua) Hari Bursa setelah terjadinya perubahan. Perubahan
                                    tersebut termasuk apabila Nasabah, jika perorangan, menjadi pengurus Emiten, anggota
                                    Bursa, atau lembaga regulator di pasar modal, atau Nasabah, baik perorangan maupun
                                    institusi, menjadi memiliki Efek Emiten lebih dari 5% (lima persen). Kesalahan atau
                                    kerugian dalam bentuk apapun yang diakibatkan
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>

                
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi">
                        <ol class="def-list" start="16">

                            <div>
                                trading in the Stock Exchange is executed based on individually and direct bargaining
                                process and not by continuous auction (non-continuous auction market), and the
                                settlement of which is executed based on the agreement among the Stock Exchange
                                members.

                            </div>
        
                            <li class="mt-12px">
                                <b>“Regular Market”</b> shall be the market in which Securities trading in the Stock Exchange
                                is executed based on negotiation process by continuous auction (continuous auction
                                market) by the Stock Exchange members and the settlement date as prescribed by the
                                rules of the Stock Exchange.
                            </li>
                            <li>
                                <b>“Cash Regular Market”</b> or <b>“Spot Market”</b> shall be the market in which Securities
                                trading at the Stock Exchange is executed based on the negotiation process by
                                continuous auction (continuous auction market) by the Stock Exchange members and
                                the settlement of which shall be executed on the same Trading Day of the Market
                                Transaction (T+0).
                            </li>
                            <li>
                                <b>“Beneficial Owner”</b> shall be any party, either directly or indirectly, by agreement or any
                                other means: 
                                
                                <ol class="list-alpha">
                                    <li>
                                        is entitled over and/or to receive particular bene t in relation to :
                                        <ol class="with-double-parentheses">
                                            <li>
                                                Securities Account; or
                                            </li> 
                                            <li>
                                                business relation with nancial service provider in capital market;
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        is the real owner (ultimate account owner) of the fund in Fund Account and/or
                                        Securities in Securities Account;
                                    </li>
                                    <li>
                                        is controlling the transaction made by the Customer via BCAS; and/or
                                    </li>
                                    <li>
                                        is granting power/authorization to conduct transactions.
                                    </li>
                                        
                                </ol>
                            </li>
                            <li>
                                <b>“Stock Exchange Regulations”</b> shall be the regulations made by the Stock Exchange
                                including, among others, Listing Regulation, Trading Regulation, Stock Exchange
                                Membership Regulation, JATS Guidelines and Stock Exchange circular letter, including
                                their amendments and implementing regulations.
                            </li>
                            <li>
                                <b>“LKP Regulations”</b> shall be the regulations on clearing and settlement of Securities
                                Transaction issued by KPEI.
                                
                            </li>   
                            <li>
                                <b>“LPP Regulations” </b>  shall be the regulations on Securities depository issued by KSEI.
                            </li>
                            <li>
                                <b>“POJK No.12/2017”</b> shall be the Indonesia Financial Service Authority Regulation
                                Number 12/POJK.04/2017 concerning Application of Anti Money Laundering Program
                                and Prevention of Terrorism Funding in Financial Service Sector, including its
                                amendments as stipulated by OJK.
                            </li>
                            <li>
                                <b>“Fund Account”</b> shall be the account at the bank designated by BCAS and opened
                                under the Customer&apos;s name to accommodate the Customer&apos;s funds which will be used
                                for Securities Transaction settlement by the Customer made via BCAS.
                            </li>
                            <li>
                                <b>“Securities Account”</b>   shall be the Securities account opened by the Customer at
                                BCAS to accommodate the Customer&apos;s Securities deposited with BCAS in accordance
                                with the provisions set forth in this agreement.
                            </li>
                            <li>
                                <b>“Securities Sub-Account”</b>  shall be the Securities account of each Customer which is
                                recorded in Participant Securities Account at KSEI.
                            </li>
                            <li>
                                <b>“Securities Transaction”</b> shall be the purchase or sale of Securities via Stock
                                Exchange which is executed in accordance with this Agreement.
                            </li>
    
                        </ol>

                        <li value="2" class="mt-22px">
                            <b>REQUIREMENTS FOR CUSTOMER</b>
                            <ol class="def-list">
                                <li>
                                    The Customer shall ll in and complete the Securities Account Opening Application Form
                                    correctly and submit to BCAS all documents required therein, which together with
                                    Securities Account Opening Application Form is construed as one and inseperable part of
                                    this Agreement.

                                </li>
                                <li>
                                    The Customer shall deliver Deposit to BCAS at the time determined by BCAS. BCAS
                                    shall be fully entitled to determine the type of Securities and its value which can be made
                                    as Deposit. The Customer may execute Securities Transaction maximum equal to
                                    Trading Limit de ned by BCAS after the Deposit which delivered by the Customer is duly
                                    received in Fund Account and/or Securities Account.

                                </li>
                                <li>
                                    BCAS shall reserve the full right to accept or decline the Securities Account opening
                                    application submitted by the Customer based on the Securities Account Opening
                                    Application Form. Securities purchase or sale transaction by the Customer via BCAS
                                    acting as securities broker-dealer which is designated by the Customer may be executed
                                    after the Securities Account opening process has been completed or the Securities
                                    Account is still active according to the applicable procedural of BCAS, except for
                                    transactions, which under the applicable regulations in Capital Market, allowed to be
                                    made prior to the completion of Securities Account opening.
                                </li>
                                <li>
                                    If until the speci ed date the Customer has not delivered the Deposit as required by BCAS
                                    in relation with Securities Account opening or with funds adequacy prior to execute
                                    Securities transaction, then BCAS shall be entitled to cancel the approval of Securities
                                    Account opening or to decline/withdraw the Securities Transaction instruction given by
                                    the Customer. However, in the event that such transaction has been executed, the
                                    Customer shall ful ll its obligation in connection with such transaction.
                                </li>  
                                <li>
                                    The Customer shall open a Securities Sub-Account at KSEI. Securities Sub-Account
                                    opening performed by Customer by granting power of attorney to BCAS to open
                                    Securities Sub-Account and obtain single investor identi cation (SID) in accordance with
                                    the provisions and regulations set forth by capital market regulator. BCAS is obliged to
                                    perform the authorization of Securities Sub-Account opening and obtaining single investor
                                    identi cation (SID) for the Customer.

                                </li>
                                <li>
                                    The Customer shall open Fund Account at the same time with Securities Account
                                    opening. Fund Account opening executed by Customer with granting power of attorney to
                                    BCAS to execute opening of Fund Account under Customer name at bank designated by
                                    BCAS.
                                </li>
                                <div class="list-with-paraf">
                                    <div class="w-220px">
                                        <li>
                                            Any change related to information or data contained in
                                            the Securities Account Opening Application Form
                                            (including the completeness of required documents)
                                            shall be noti ed by Customer in writing to BCAS no later
                                            than 2 (two) Trading Days following such change. Such
                                            change shall include if the Customer, if individual,
                                            become a member of management of an Issuer, a
                                            member of the Stock Exchange or capital market
                                            regulatory agencies, or the Customer, either individual
                                            or institution, become owning Paraf Initial
                                        </li>
                                    </div>
                                    <div class="paraf-box">
                                        <div class="paraf-placeholder border-2px"></div>
                                        <div class="grey-dark-2 text-12px">
                                            Paraf / <i>Initial</i>
                                        </div>
                                    </div>
                                </div>
                                
                            </ol>
                        </li>
                    </ol>
                </div>

            </div>
            
            
        </div>
    </div>



    
    <!-- PAGE #7 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="3">
                        <ol class="def-list">

                            <div>
                                oleh tidak disampaikannya pemberitahuan mengenai perubahan keterangan mengenai
                                Nasabah kepada BCAS merupakan tanggung jawab Nasabah dan Nasabah dengan ini
                                membebaskan BCAS dari segala tuntutan, gugatan atas kerugian yang timbul
                                sehubungan dengan tidak dilakukannya kewajiban tersebut di atas.

                            </div>
                        </ol>

                        <li>
                            <b>PENUNJUKAN BCAS</b><br>
                            Dengan disetujuinya permohonan pembukaan Rekening Efek berdasarkan Formulir.
                            Permohonan Pembukaan Rekening Efek, Nasabah menunjuk BCAS selaku kustodian
                            yang memberikan jasa penitipan Efek dan dana milik Nasabah dalam Rekening Efek
                            dan Rekening Dana serta selaku perantara pedagang Efek untuk melaksanakan
                            Transaksi Efek atas Efek yang dimiliki dan disimpan oleh Nasabah dalam Rekening
                            Efek untuk kepentingan Nasabah berdasarkan ketentuan-ketentuan dalam Perjanjian
                            ini. 
                        </li>
                        <li class="mt-12px">
                            <b>PEMBERIAN KUASA KEPADA BCAS</b>
                            <ol class="def-list" start="1">
                                <li>
                                    Dengan disetujuinya permohonan pembukaan Rekening Efek berdasarkan Formulir
                                    Permohonan Pembukaan Rekening Efek, Nasabah memberikan kuasa kepada BCAS
                                    guna bertindak untuk dan atas nama Nasabah untuk :

                                    <ol class="list-alpha">
                                         <li>
                                            membuka, mengadministrasikan, dan mengoperasikan Rekening Efek sehubungan
                                            dengan Transaksi Efek yang dilakukan oleh Nasabah melalui BCAS dan sesuai
                                            dengan perintah dari Nasabah atau wakil/kuasanya yang sah sesuai dengan
                                            peraturan-peraturan di bidang pasar modal, termasuk peraturan Bapepam dan LK,
                                            peraturan OJK, Peraturan Bursa Efek, Peraturan LPP, Peraturan LKP dan
                                            peraturan-peraturan serta praktek yang lazim dilakukan di Bursa Efek dan BCAS;
                                         </li>
                                         <li>
                                            membuka dan mengoperasikan Sub Rekening Efek atas nama Nasabah pada
                                            KSEI untuk kepentingan Nasabah;

                                         </li> 
                                         <li>
                                            membuka dan mengoperasikan Rekening Dana atas nama Nasabah pada bank
                                            yang ditunjuk BCAS untuk kepentingan Nasabah, termasuk tetapi tidak terbatas
                                            untuk mendebet, memindahbukukan dana dari Rekening Dana, meminta dokumen
                                            dan/atau data Rekening Dana pada bank termasuk tetapi tidak terbatas pada data
                                            mutasi dan/atau saldo pada Rekening Dana dan melakukan tindakan-tindakan lain
                                            yang diperlukan dalam rangka pengelolaan Rekening Dana tanpa ada tindakan
                                            yang dikecualikan;
                                         </li>
                                         <li>
                                            meminta dokumen, informasi, dan/atau data Rekening Dana pada bank termasuk
                                            tetapi tidak terbatas pada data mutasi dan/atau saldo pada Rekening Dana dan
                                            menyerahkannya kepada KPEI
                                         </li>
                                         <li>
                                            melaksanakan instruksi Nasabah dalam Transaksi Efek sesuai dengan peraturanperaturan di bidang pasar modal termasuk peraturan Bapepam dan LK, peraturan
                                            OJK, peraturan Bursa Efek, Peraturan LPP, Peraturan LKP dan peraturanperaturan serta praktek yang lazim dilakukan di Bursa Efek dan BCAS;
                                         </li>
                                         <li>
                                            menjual dan/atau membeli Efek, mengalihkan, menyerahkan dan/atau menerima
                                            Efek dalam Rekening Efek, menyimpan serti kat Efek atau bukti kepemilikan atas
                                            Efek dalam bentuk lain, serta menerima dan melakukan pembayaran yang
                                            berkaitan dengan Transaksi Efek atas nama Nasabah berdasarkan ketentuan
                                            peraturan perundang-undangan yang berlaku;

                                         </li>
                                         <li>
                                            mengalihkan, menyerahkan dan/atau menerima dana dalam Rekening Dana, serta
                                            menerima dan melakukan pembayaran yang berkaitan dengan Transaksi Efek atas
                                            nama Nasabah berdasarkan ketentuan peraturan perundang- undangan yang
                                            berlaku;

                                         </li>
                                         <li>
                                            mewakili dan bertindak untuk dan atas nama Nasabah untuk menghadap kepada
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
                                            Rekening Efek;

                                         </li>
                                         <li>
                                            menahan seluruh atau sebagian Efek yang dibeli dan telah dibayar oleh Nasabah
                                            dalam Rekening Efek, mencairkan Deposit dan menjual Efek milik Nasabah
                                            termasuk menentukan harga penjualan Efek tersebut, menggunakan dana hasil
                                            penjualan Efek atau dana yang ada dalam Rekening Efek, serta mendebet dana
                                            dalam Rekening Dana sebagai akibat dan untuk menutup kewajiban pembayaran
                                            oleh Nasabah yang terutang termasuk yang timbul sebagai akibat adanya
                                            keterlambatan pembayaran sebagaimana diatur dalam Bagian X Perjanjian ini;

                                         </li>
                                         <li>
                                            memotong hasil penjualan Efek dan/atau mendebet Rekening Dana untuk
                                            membayar segala biaya transaksi, pajak, komisi, dan segala pengeluaran lainnya
                                            berdasarkan peraturan yang berlaku, dan sepanjang segala biaya, pajak dan
                                            pengeluaran tersebut merupakan tanggung jawab dan kewajiban Nasabah
                                            berdasarkan Perjanjian ini;

                                         </li>
                                         <li>
                                            menempatkan Efek dan/atau dana Nasabah sebagai jaminan penyelesaian
                                            kewajiban hanya untuk kepentingan Nasabah yang tertulis secara tegas pada
                                            Formulir Permohonan Pembukaan Rekening Efek terhadap BCAS, kecuali
                                            diperjanjikan khusus dalam perjanjian yang terpisah dengan Formulir Permohonan
                                            Pembukaan Rekening Efek;

                                         </li>
                                         <li>
                                            menutup Rekening Efek berdasarkan ketentuan pada Bagian XIX Perjanjian ini,
                                            menjual dan/atau membeli Efek, mengalihkan, menyerahkan dan/atau menerima
                                            Efek dan/atau dana, serta tindakan lain yang berkaitan dengan penutupan
                                            Rekening Efek;
                                         </li>
                                         <li class="mt-12px">
                                            menutup Sub Rekening Efek pada KSEI dan Rekening Dana pada bank yang
                                            ditunjuk BCAS dalam hal terjadi penutupan Rekening Efek berdasarkan Perjanjian
                                            ini; dan
                                         </li>
                                         <li class="mt-12px">
                                            memeriksa kebenaran dan ketepatan informasi yang diberikan berdasarkan
                                            Perjanjian ini dari setiap sumber yang layak.
                                         </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>


                    </ol>
                </div>

                

                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="3">
                        <ol class="def-list">

                            <div>
                                Issuer&apos;s Securities more than 5% ( ve percent). Fault or loss of in any form which
                                caused by failure to deliver noti cation on data change concerning the Customer to
                                BCAS shall be the Customer liability, and the Customer hereby hold harmless
                                BCAS from all claims and demands for any loss which arises from the nonperformance of the obligation above.

                            </div>
                        </ol>

                        <li>
                            <b>BCAS APPOINTMENT</b><br>
                            With the approval of Securities Account opening application based on Securities
                            Account Opening Application Form, the Customer designate BCAS as custodian which
                            provide Securities and funds storage service for the Customer in the Securities
                            Account and Fund Account and as Securities broker-dealer to execute Securities
                            Transaction over the Securities owned and deposited by the Customer in the Securities
                            Account for Customer&apos;s interest based on the provisions herein. 
                        </li>
                        <li class="mt-12px">
                            <b>POWER OF ATTORNEY TO BCAS</b>
                            <ol class="def-list" start="1">
                                <li>
                                    With the approval of Securities Account opening application based on Securities
                                    Account Opening Application Form, the Customer grants power of attorney to BCAS to
                                    act for and on behalf of the Customer to:

                                    <ol class="list-alpha">
                                         <li>
                                            open, administrate, and operate the Securities Account in relation to Securities
                                            Transaction which executed by the Customer by BCAS and in accordance with the
                                            Customer or duly representatives/attorney in accordance with regulation in capital
                                            market, including Bapepam - LK regulation, OJK regulation, Stock Exchange
                                            Regulation, LPP Regulation, LKP regulation and other regulation and common
                                            practice in Stock Exchange and BCAS;

                                         </li>
                                         <li>
                                            open, and operate Securities Sub-Account under Customer name at KSEI for the
                                            Customer benefit;

                                         </li> 
                                         <li>
                                            open and operate Fund Account under the Customer name at BCAS designated
                                            bank for Customer bene t, including but not limited to debiting, transferring fund
                                            from Fund Account, request document and/or Fund Account data at bank including
                                            but not limited to transfer data dan/or balance at Fund Account and perform other
                                            acts which are required for Fund Account management without any action is
                                            excluded;

                                         </li>
                                         <li class="mt-20px">
                                            request document, information, and/or data of Fund Account at bank including but
                                            not limited to transfer data dan/or balance at Fund Account and provide them to
                                            KPEI;

                                         </li>
                                         <li class="mt-12px">
                                            execute the Customer instruction in Securities Transaction in accordance with
                                            regulation in capital market including Bapepam - LK regulation, OJK regulation,
                                            Stock Exchange Regulation, LPP Regulation, LKP Regulation and other regulation
                                            and common practice in Stock Exchange and BCAS;

                                         </li>
                                         <li>
                                            Sale and/or purchase Securities, transfer, deliver and/or receive Securities in
                                            Securities Account, store Securities certi cate or other Securities proof of
                                            ownership, and receiving and performing payment in relation to Securities
                                            Transaction under the name of Customer based on the provisions of prevailing
                                            laws and regulations;

                                         </li>
                                         <li class="mt-12px">
                                            Transfer, deliver and/or receive fund in Fund Account, and receive and perform
                                            payment in relation to Securities Transaction under Customer&apos;s name based on
                                            provisions of the prevailing laws and regulations;

                                         </li>
                                         <li class="mt-12px">
                                            represent and act for and on behalf of the Customer to appear before agency or
                                            institution or government&apos;s or private body&apos;s o cer including bank where the Fund
                                            Account is opened; talk, provide and receive information or explanation related to
                                            Customer&apos;s fund and/or Securities in Securities Account and/or Fund Account;
                                            make, instruct to make all required paper or deed, and sign all such paper or deed;
                                            perform or receive and provide payment receipt; assign or withdraw Securities
                                            and/or fund from Securities Account and/or Fund Account; perform or receive
                                            delivery, assign or transfer or withdraw Securities from Securities Account; and all
                                            other legal action which required to in order for Customer&apos;s Securities sale or
                                            purchase using the Customer fund which contained in Securities Account and/or
                                            Fund Account in order to stock exchange transaction settlement including to close
                                            negative balance in Securities Account;


                                         </li>
                                         <li class="mt-12px">
                                            hold all or part of Securities which purchased and paid by the Customer in
                                            Securities Account, withdraw Deposit and sale Securities owned by the Customer
                                            including determine the sale price of such Securities, use the proceed of the
                                            Securities sale or fund which contained in Securities Account, and debitting fund in
                                            Fund Account as a result of and to closed the Customer payment obligation which
                                            payable including which arise as a result of delay of payment as stipulated in
                                            Section X of this Agreement;

                                         </li>
                                         <li>
                                            cut the proceed of Securities sale and/or debitting Fund Account to pay all
                                            transaction cost, tax, commission and all other expenses based on the prevailing
                                            law, and to the extent such cost, tax and expenses are responsibility and liability of
                                            the Customer based on this Agreement
                                         </li>
                                         <li class="mt-12px">
                                            Put the Customer&apos;s Securities and/or Fund as collateral for obligation settlement
                                            only for the Customer interest which expressly written in Application Form of
                                            Securities Account Opening to BCAS, except speci cally agreed in separated
                                            agreement with Application Form of Securities Account Opening;
                                         </li>
                                         

                                         <div class="list-with-paraf">
                                            <div class="w-220px">
                                                <li class="mt-12px">
                                                    Close Securities Account based on provision in
                                                    Section XIX of this Agreement, sale and/or
                                                    purchase Securities, assign, deliver and/or receive
                                                    Securities, and other action which related to closing
                                                    of Securities Account;

                                                 </li>
                                                 <li>
                                                    Close Securities Sub-Account at KSEI and Fund
                                                    Account at BCAS designated bank in case of
                                                    Securities Account closing based on this
                                                    Agreement; and
                                                 </li>
                                                <li>
                                                    Examine the validity and accuracy of information
                                                    which provided based on this Agreement from any
                                                    reliable source.
                                                </li>
                                            </div>
                                            <div class="paraf-box">
                                                <div class="paraf-placeholder border-2px"></div>
                                                <div class="grey-dark-2 text-12px">
                                                    Paraf / <i>Initial</i>
                                                </div>
                                            </div>
                                        </div>
                                         
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>


            </div>
            
            
        </div>
    </div>



    <!-- PAGE #8 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="5">
                        <ol class="def-list" start="2">
                            <ol class="list-alpha" start="15">
                                <li>
                                    memberikan data Nasabah, termasuk data terkait rekening dan keuangan
                                    Nasabah kepada otoritas pajak dan/ atau otoritas berwenang lainnya sesuai
                                    ketentuan hukum yang berlaku dalam rangka pertukaran informasi perpajakan
                                    antarnegara berdasarkan perjanjian internasional di bidang perpajakan.

                                </li>
                            </ol>
                            <li>
                                Kuasa tersebut di atas merupakan bagian yang tidak terpisahkan dari Perjanjian ini
                                serta tidak akan dicabut atau berakhir karena alasan apapun termasuk alasan yang
                                2. diatur dalam Pasal 1813, 1814 dan 1816 kitab Undang-Undang Hukum Perdata
                                Indonesia.
                            </li>
                        
                        </ol>

                        <li>
                            <b>PERNYATAAN NASABAH</b><br>
                            <ol class="def-list">
                                <li>
                                    Nasabah menyatakan bahwa, berdasarkan peraturan perundang-undangan yang
                                    berlaku di Negara Republik Indonesia, Nasabah telah cukup umur dan cakap serta
                                    memiliki kewenangan penuh menurut hukum untuk melaksanakan segala kewajiban
                                    dan tanggung jawabnya, dan untuk melakukan perbuatan hukum sebagaimana
                                    dimaksud dalam Perjanjian ini.
                                </li>
                                <li>
                                    Nasabah menyatakan, menjamin dan bertanggung jawab atas kebenaran,
                                    kelengkapan, keaslian, keabsahan dari semua dokumen dan kebenaran setiap dan
                                    seluruh informasi, data, keterangan, kewenangan/kuasa yang diberikan dalam Formulir
                                    Permohonan Pembukaan Rekening Efek berdasarkan Perjanjian ini, dan setiap saat
                                    akan menyampaikan kepada BCAS perubahan, tambahan maupun perbaikan atas
                                    informasi, data maupun dokumen serta keterangan tersebut.
                                </li>
                                <li>
                                    Nasabah menyatakan bahwa tidak ada pihak lain atau penerima manfaat (bene cial
                                    owner) yang memiliki kepentingan terhadap Rekening Efek selain dari pihak-pihak
                                    yang dinyatakan secara tegas dalam Formulir Permohonan Pembukaan Rekening
                                    Efek.

                                </li>
                                <li>
                                    Nasabah menyatakan dan menjamin tidak akan menggunakan jasa perantara
                                    pedagang Efek yang diberikan oleh BCAS sebagai sarana untuk melakukan tindakan
                                    yang dapat dikategorikan melanggar hukum, termasuk namun tidak terbatas kepada
                                    tindak pidana pencucian uang (money laundering) .
                                </li>
                                <li>
                                    Nasabah menyatakan bahwa dana dan Efek yang telah dan akan disetorkan/
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
                                    data dan informasi mengenai Nasabah kepada pejabat atau instansi yang berwenang.
                                </li>
                                <li>
                                    Nasabah dengan ini menyatakan bersedia untuk tunduk dan mengikuti semua syaratsyarat dan ketentuan-ketentuan yang berlaku pada pasar modal di Indonesia
                                    sehubungan dengan Rekening Efek, Transaksi Efek, serta sehubungan dengan
                                    penunjukan BCAS sebagai perantara pedagang Efek berdasarkan Perjanjian ini, baik
                                    yang diatur dalam Peraturan Bapepam dan LK, peraturan OJK, peraturan Bursa Efek,
                                    Peraturan LKP, Peraturan LPP, serta peraturan dan kebijakan yang ditentukan oleh
                                    instansi/pejabat lain yang berwenang, maupun ketentuan yang berlaku di BCAS
                                    sebagaimana dipersyaratkan oleh peraturan atau kebijakan instansi dan/atau pejabat
                                    yang berwenang, baik yang telah maupun yang akan ada dan diberlakukan di
                                    kemudian hari.
                                </li>
                                <li>
                                    Nasabah dengan ini mengetahui dan menyetujui bahwa syarat dan ketentuan
                                    Perjanjian ini dapat diubah dari waktu ke waktu oleh BCAS sesuai dengan ketentuan
                                    dalam Bagian XX Perjanjian ini. Nasabah dengan ini menyatakan bersedia untuk
                                    tunduk dan mengikuti semua syarat dan ketentuan yang berlaku di BCAS dari waktu
                                    ke waktu.

                                </li>
                                <li>
                                    Nasabah dengan ini menyatakan telah membaca, mengerti dan mengikatkan diri serta
                                    menyetujui semua ketentuan dan persyaratan yang dituangkan dan diuraikan pada
                                    Perjanjian ini.
                                </li>
                            </ol>
                            <li>
                                <b>INFORMASI MENGENAI NASABAH</b> <br>
                                Nasabah menyatakan bahwa Nasabah telah mengetahui, memahami dan menyadari
                                bahwa:
                                <ol class="def-list">
                                    <li>
                                        BCAS akan senantiasa menjaga sepenuhnya hak kerahasiaan data nasabah, yang
                                        diketahui oleh BCAS, termasuk namun tidak terbatas pada data identitas nasabah,
                                        data transaksi nasabah, data keuangan dan kekayaan nasabah serta user-id dan
                                        password nasabah yang memiliki fasilitas online (BEST).
                                    </li>
                                    <li>
                                        Nasabah dengan ini setuju untuk memberikan persetujuan dan kewenangan kepada
                                        BCAS untuk mengungkapkan informasi mengenai Rekening Efek, Rekening Dana, dan
                                        informasi-informasi lain mengenai Nasabah apabila diminta oleh pihak-pihak yang
                                        tersebut di bawah ini, tanpa perlu meminta persetujuan lebih lanjut terlebih dahulu dari
                                        Nasabah: 
                                        <ol class="list-alpha">
                                            <li>
                                                bank kustodian dan/atau perusahaan efek lain dalam rangka validasi Efek untuk
                                                pesanan jual dan/atau beli Nasabah;

                                            </li>
                                            <li>
                                                Bursa Efek, KPEI, KSEI, OJK serta instansi pemerintah lainnya yang menurut
                                                peraturan perundang-undangan yang berlaku berwenang meminta informasi
                                                tersebut.
                                            </li>
                                        </ol>
                                    </li>
                                    <li>
                                        <ol class="list-alpha">
                                            <li>
                                                Dalam hal Nasabah memberikan instruksi kepada BCAS untuk melakukan
                                                penjualan Efek milik Nasabah yang disimpan di bank kustodian dan/atau
                                                perusahaan efek lain, Nasabah dengan ini memberikan kuasa dan kewenangan
                                                kepada BCAS untuk meminta informasi dan data dari bank kustodian dan/atau
                                                perusahaan efek lain tersebut mengenai Nasabah dan Efek milik Nasabah yang
                                                diperintahkan oleh Nasabah untuk dijual melalui BCAS, dan informasi lain yang
                                                berhubungan dengan Nasabah. Efek yang diperintahkan oleh Nasabah untuk
                                                dijual, dalam hal Efek milik Nasabah tersebut disimpan di bank kustodian dan/ atau
                                                perusahaan efek lain, harus tersedia di BCAS paling lambat satu (1 ) Hari
                                            </li>

                                        </ol>
                                    </li>
                                </ol>
                            </li>
                        </li>
                    </ol>
                </div>

                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="5">
                        <ol class="def-list" start="2">
                            <ol class="list-alpha" start="15">
                                <li>
                                    To provide the Customer's data, including any data related to the account and
                                    nances of the Customer to tax authorities and/or other authorized authorities in
                                    accordance with the applicable law(s) for the purpose of international exchange
                                    of tax information based on the relevant international agreement(s) in the eld of
                                    taxation.

                                </li>
                            </ol>
                            <li>
                                The aforementioned power of attorney shall be inseparable part from this
                                Agreement and irrevocable or terminated for any reason, including the reasons set
                                forth in Article 1813, 1814 and 1816 of the Indonesian Civil Code.
                            </li>
                        
                        </ol>

                        <li>
                            <b>CUSTOMER&apos;S REPRESENTATION</b><br>
                            <ol class="def-list">
                                <li>
                                    Customer represents that, based on the prevailing laws and regulations in the Republic
                                    of Indonesia, the Customer are of legal age and competent and have full authority
                                    according to the law to perform all obligations and liabilities, and to perform legal action
                                    as referred to in this Agreement.
                                </li>
                                <li class="mt-12px">
                                    The Customer represents, warrants and liable for the correctness, completeness,
                                    authenticity and validity of all documents, and for the correctness of any and all
                                    information, data, details, authorization/ power conferred upon in the Securities
                                    Account Opening Application Form based on this agreement, and shall at any time,
                                    deliver to BCAS any change, addition or revision of such information, data, documents
                                    and details.
                                </li>
                                <li class="mt-12px">
                                    Customer represents that no other party or bene cial owner which own any interest in
                                    the Securities Account other than the parties explicitly speci ed in the Securities
                                    Account Opening Application Form.

                                </li>
                                <li>
                                    The Customer represents and warrants that it will not use the Securities broker-dealer
                                    services provided by BCAS as means to perform actions that may be categorized as
                                    unlawful act, including but not limited to money laundering.

                                </li>
                                <li class="mt-12px">
                                    The Customer represents that the funds and the Securities that have been and will be
                                    deposited/transacted based on this agreement is not proceeds of unlawful acts,
                                    including but not limited to money laundering as stipulated in (i) Law Number 8 of 2010
                                    regarding Prevention and Eradication of Money Laundering and its any future
                                    amendments, and (ii) Regulation No. POJK 12/2017, or other internationally applicable
                                    common rules regarding money laundering, and therefore the Customer hold BCAS
                                    harmless from all liabilities and claims from any third party and/or authorities as well as
                                    damages and legal fees that may be incurred by BCAS as a result of violation by the
                                    Customer against the prevailing laws including but not limited to such provisions on
                                    money laundering. The Customer shall provide information when required or requested
                                    by BCAS and/or the authorities in relation to the source of the Customer&apos;s funds, and
                                    the Customer hereby authorize BCAS to verify the origins of Customer&apos;s funds and to
                                    provide Customer&apos;s data and information to the authorized o cial or agency.

                                </li>
                                <li class="mt-30px">
                                    The Customer hereby declares to obey and to follow all applicable terms and
                                    conditions on capital market in Indonesia in connection with Securities Account,
                                    Securities Transaction as well as the appointment of BCAS as a Securities brokerdealer hereunder, either as set forth in Bapepam-LK Regulations, OJK Regulations,
                                    Stock Exchange Regulations, LKP Regulations, LPP Regulations as well as
                                    regulations and policies set forth by other authorized agencies/o cials, and the
                                    applicable rules in BCAS as required by the regulations or policies of the authorized
                                    agencies and/or o cials, either has been and will be and applicable in the future.

                                </li>
                                <li class="mt-24px">
                                    The Customer hereby acknowledges and agrees that terms and condition of this
                                    Agreement may amended from time to time by BCAS in accordance with provision of
                                    Section XX of this Agreement. The Customer hereby declares to obey and follow all
                                    terms and condition which applicable in BCAS from time to time.
                                </li>
                                <li>
                                    The Customer hereby declares to have read, understood and be bound and agrees to
                                    all terms and conditions set forth and described herein.

                                </li>
                            </ol>
                            <li class="mt-16px">
                                <b>CUSTOMER&apos;S INFORMATION</b> <br>
                                The Customer declares that Customer has acknowledged, understood and realized
                                that:
                                <ol class="def-list">
                                    <li class="mt-12px">
                                        Customer represent that, based on prevailing laws and regulations in the Republic
                                        Indonesia, the Customer are of legal age and competent and have full authority
                                        according to the law to perform all obligations and liabilities, and to perform legal action
                                        as referred in this Agreement.
                                    </li>
                                    <li>
                                        The Customer hereby agrees to grant approval and authority to BCAS to disclose
                                        information concerning the Securities Account, Fund Account and other information
                                        regarding the Customer if requested by the parties mentioned below, without prior
                                        approval of the Customer:

                                        <ol class="list-alpha">
                                            <li class="mt-12px">
                                                Custodian bank and/or other securities company in order of Securities validation for
                                                Customer&apos;s o er and/or bid order;


                                            </li>
                                            <li>
                                                Stock Exchange, KPEI, KSEI, OJK as well as other government agencies which
                                                according to applicable law authorized to request such information.
                                            </li>
                                        </ol>
                                    </li>
                                    <div class="list-with-paraf">
                                        <div class="w-220px">
                                            <li class="mt-12px">
                                                <ol class="list-alpha">
                                                    <li>
                                                        In case the Customer deliver an instruction to BCAS
                                                        to execute sale of Customer&apos;s Securities which is
                                                        deposited at other custodian bank and/or securities
                                                        company, the Customer hereby grants power and
                                                        authority to BCAS to request information and data
                                                        from such other custodian bank and/or securities
                                                        company regarding the Customer and Customer&apos;s
                                                        Securities which have been instructed by the
                                                        Customer to be offered via BCAS and other
                                                        information in connection with the Customer. The
                                                        Securities which have been instructed by the
                                                    </li>
        
                                                </ol>
                                            </li>
                                        </div>
                                        <div class="paraf-box">
                                            <div class="paraf-placeholder border-2px"></div>
                                            <div class="grey-dark-2 text-12px">
                                                Paraf / <i>Initial</i>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </ol>
                            </li>
                        </li>
                    </ol>
                </div>
                

            </div>
            
            
        </div>
    </div>


    <!-- PAGE #9 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="7">
                        <ol class="def-list" start="4">
                            <ol class="list-alpha" start="2">
                                <div>
                                    Bursa setelah transaksi selesai dilaksanakan oleh BCAS sebelum pukul 12.00 WIB.
                                </div>
                                <li class="mt-24px">
                                    Nasabah berjanji dan menundukkan diri untuk memberi persetujuan dan
                                    kewenangan kepada bank kustodian dan/atau perusahaan efek lain tersebut, untuk
                                    mengungkapkan informasi dan data mengenai Nasabah dan rekening Efek atas
                                    nama Nasabah pada bank kustodian dan/atau perusahaan efek lain tersebut
                                    apabila diminta oleh BCAS dalam rangka melaksanakan instruksi jual Nasabah
                                    atas Efek yang disimpan di bank kustodian dan/atau perusahaan efek lain tersebut.

                                </li>
                                <li>
                                    Apabila permintaan informasi dan data mengenai Nasabah dan/atau rekening Efek
                                    Nasabah dalam angka 2 butir b di atas ditolak oleh bank kustodian dan/ atau
                                    perusahan efek lain di mana Nasabah menyimpan Efeknya, maka BCAS akan
                                    menolak untuk melaksanakan instruksi Nasabah untuk penjualan Efek dimaksud.
                                    Segala kerugian yang timbul sebagai akibat dari tidak dilaksanakannya instruksi
                                    penjualan tersebut menjadi tanggung jawab Nasabah dan Nasabah dengan ini
                                    membebaskan BCAS dari gugatan dan/atau tuntutan hukum dan tidak akan
                                    mengajukan gugatan atau tuntutan hukum dalam bentuk apapun kepada BCAS.
                                </li>
                            </ol>
                            <li>
                                Kewenangan, persetujuan dan kuasa yang diberikan oleh Nasabah kepada BCAS
                                sebagaimana dimaksud dalam angka 1 dan angka 2 butir a di atas tidak dapat ditarik
                                kembali selama Nasabah masih memiliki Rekening Efek pada BCAS dan pelaksanaan
                                kewenangan tersebut dapat dilakukan tanpa diperlukan surat kuasa tersendiri.

                            </li>
                        
                        </ol>

                        <li>
                            <b>PERNYATAAN MENGENAI RISIKO</b><br>
                            Nasabah mengakui,mengerti dan menyadari bahwa: 
                            <ol class="def-list">
                                <li>
                                    Investasi di pasar modal memiliki risiko nansial. Harga Efek dapat mengalami kenaikan
                                    yang akan menguntungkan Nasabah dan dapat pula mengalami penurunan yang
                                    mengakibatkan kerugian bagi Nasabah dan, selain kenaikan dan penurunan harga,
                                    Efek yang dimiliki oleh Nasabah dapat kehilangan nilainya dan menjadi tidak berharga.
                                </li>
                                <li>
                                    Setiap Efek memiliki tingkat likuiditas yang berbeda yang dapat mengakibatkan
                                    perbedaan antara harga penawaran jual dan penawaran beli di Bursa Efek.
                                </li>
                                <li>
                                    Sebagai akibat dari hal-hal tersebut dalam angka 1 dan 2 di atas, setiap saat Nasabah
                                    dapat mengalami kerugian dan kehilangan sebagian atau seluruh dana yang
                                    diinvestasikan oleh Nasabah di pasar modal, oleh karena itu Nasabah menyatakan
                                    bahwa investasi di pasar modal dilakukan oleh Nasabah dengan menyadari
                                    sepenuhnya risiko kerugian yang mungkin dialami.

                                </li>
                                
                            </ol>
                            <li>
                                <b>DEPOSIT</b> <br>
                                
                                <ol class="def-list">
                                    <li>
                                        Untuk dapat melakukan Transaksi Efek, Nasabah wajib menyediakan Deposit dalam
                                        bentuk dana dan/atau efek dengan nilai yang ditentukan oleh BCAS.
                                    </li>
                                    <li>
                                        Apabila sampai dengan tanggal yang ditentukan, Nasabah belum menyetorkan
                                        Deposit yang disyaratkan oleh BCAS terkait dengan pelaksanaan Transaksi Efek,
                                        maka BCAS berhak membatalkan/tidak melaksanakan instruksi Transaksi Efek yang
                                        diberikan oleh Nasabah. Namun, seandainya instruksi transaksi tersebut telah
                                        dilaksanakan, maka Nasabah tetap terikat pada Transaksi Efek dimaksud dan wajib
                                        memenuhi kewajibannya terkait Transaksi Efek dimaksud. Segala kerugian yang
                                        timbul sebagai akibat dari dibatalkannya/tidak dilaksanakannya instruksi Nasabah
                                        tersebut menjadi tanggung jawab Nasabah dan Nasabah dengan ini membebaskan
                                        BCAS dari gugatan dan/atau tuntutan hukum dan tidak akan mengajukan gugatan atau
                                        tuntutan hukum dalam bentuk apapun kepada BCAS.
                                        
                                    </li>
                                    <li>
                                        Efek dan dana dalam Rekening Efek maupun Efek yang akan diterima oleh Nasabah
                                        serta dana dalam Rekening Dana dapat digunakan sebagai jaminan penyelesaian
                                        kewajiban Nasabah terhadap BCAS. Apabila nilai jaminan tersebut berkurang karena
                                        alasan apapun, maka Nasabah wajib menambah Efek atau dana dalam Deposit
                                        dimaksud agar instruksi Nasabah terkait Transaksi Efek yang diberikan kepada BCAS
                                        dapat dilaksanakan.
                                    </li>
                                    <li>
                                        BCAS berhak meminta pembayaran atau Efek dari Nasabah sebelum pelaksanaan
                                        Transaksi Efek.
                                    </li>
                                    <li>
                                        BCAS berhak menilai Efek milik Nasabah sesuai dengan kebijakan penilaian jaminan
                                        yang ditentukan oleh BCAS. BCAS dapat menolak instruksi Nasabah untuk menjual
                                        Efek tertentu yang dijadikan jaminan.
                                    </li>
                                    <li>
                                        Penarikan Efek dengan cara pemindahbukuan Efek dari Rekening Efek ke rekening
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
                                        pemindahbukuan Efek, KSEI, dan bank di mana Rekening Dana dibuka.
                                    </li>
                                    <li>
                                        Efek yang dimiliki Nasabah disimpan pada Sub Rekening Efek atas nama masingmasing nasabah pada KSEI terpisah dari efek milik BCAS dan nasabah BCAS yang
                                        lain.
                                    </li>
                                    <li>
                                        Dana yang dimiliki Nasabah disimpan atas nama masing-masing nasabah pada
                                        Rekening Bank pada bank yang ditunjuk BCAS, terpisah dari dana milik BCAS dan
                                        nasabah BCAS yang lain.
                                    </li>
                                    <li>
                                        Dalam hal dana menunjukkan saldo negatif dalam Rekening Efek, BCAS dapat
                                        menggunakan Efek dalam Rekening Efek tersebut sebagai jaminan atas kredit bank
                                        atau lembaga keuangan lainnya dan/atau melakukan penjualan Efek secara paksa
                                        tanpa persetujuan Nasabah terlebih dahulu dalam rangka penyelesaian kewajiban
                                        Nasabah.
                                    </li>
                                    <li class="mt-24px">
                                        Patokan harga Efek yang dipergunakan dalam penghitungan nilai Efek dalam
                                        portofolio adalah harga penutupan perdagangan di Bursa Efek 1 (satu) Hari Bursa
                                        terdekat sebelum dilakukannya perhitungan. Namun, BCAS berwenang untuk
                                    </li>

                                </ol>
                            </li>
                        </li>
                    </ol>
                </div>

                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="7">
                        <ol class="def-list" start="4">
                            <ol class="list-alpha" start="2">
                                <div>
                                    Customer to be sold, in case such Customer&apos;s securities are deposited at other
                                    custodian bank and/or securities company, shall be available at BCAS no later than
                                    one (1) Trading Days after the transaction is settled by BCAS before 12:00 WIB.
                                </div>
                                <li>
                                    The Customer undertakes and obey to grant approval and authority to such other
                                    custodian bank and/or securities company to disclose information on the Customer
                                    and securities account under Customer&apos;s name at such other custodian bank
                                    and/or securities company if requested by BCAS in order to execute Customer&apos;s
                                    selling instruction over the Securities deposited at such other custodian bank
                                    and/or securities company.

                                </li>
                                <li>
                                    If the request for information and data regarding the Customer and/or Customer&apos;s
                                    Securities account in number 2 item b above is denied by the other custodian bank
                                    and/or securities company which the Customer deposited its Securities, therefore
                                    BCAS will refuse to execute Customer&apos;s instruction to sell such Securities. Any loss
                                    arising from non-execution of such sell instruction shall be borne by the Customer
                                    and the Customer hereby hold BCAS harmless from any legal claim and shall not
                                    file legal claim of any sort against BCAS.
                                </li>
                            </ol>
                            <li class="mt-16px">
                                Authority, approval and power which granted by the Customer to BCAS as referred to
                                in number 1 and number 2 item a above shall be irrevocable as long as the Customer
                                still own Securities Account at BCAS and the execution of such authority may be made
                                without a separate power of attorney.

                            </li>
                        
                        </ol>

                        <li>
                            <b>REPRESENTATION CONCERNING RISK</b><br>
                            The Customer acknowledges, understands and realizes that:
                            <ol class="def-list">
                                <li>
                                    Investment in the capital market bears nancial risks. Securities prices may increase
                                    which will bring pro ts for the Customer and may also decrease which cause losses
                                    to the Customer, and in addition to the increase and decrease of price, the
                                    Securities owned by the Customer may lose its value and become valueless.
                                </li>
                                <li>
                                    Each Securities has di erent level of liquidity that may result in disparity between
                                    the offer price and bid price in the Stock Exchange.

                                </li>
                                <li>
                                    As a result of such matter in number 1 and 2 above, the Customer may at any time
                                    su er from losses and lose part or all of the funds which invested by the Customer
                                    in the capital market, therefore the Customer declares that investment in the capital
                                    market is made by the Customer in full awareness of the possible risk of loss.

                                </li>
                                
                            </ol>
                            <li class="mt-16px">
                                <b>DEPOSIT</b> <br>
                                
                                <ol class="def-list">
                                    <li>
                                        In order to perform Securities Transaction, the Customer shall make available a
                                        Deposit in the form of fund and/or Securities with amount as specified by BCAS.
                                    </li>
                                    <li>
                                        If on the specified date, the Customer has not deposited the Deposit which required
                                        by BCAS related to execution of Securities Transaction, then BCAS reserves the
                                        right to cancel/ not execute Securities Transaction instruction given by the
                                        Customer. However, if such transaction instruction has been executed, then the
                                        Customer remains bound by such Securities Transaction and shall ful ll any
                                        obligation related to such transaction. All losses which arise from cancelation/non
                                        execution of such Customer&apos;s instruction shall be borne by the Customer and
                                        Customer hereby holds BCAS harmless from any claim and/or legal suit in any sort
                                        against BCAS.
                                    </li>
                                    <li class="mt-20px">
                                        The Securities and funds in the Securities Account and Securities to be received by
                                        the Customer as well as the funds in the Fund Account may serve as Customer&apos;s
                                        liability settlement collateral against BCAS. If the amount of the collateral is
                                        decreasing due to any reason, then the Customer shall increase the Securities or
                                        funds in such Deposit in order for Customer&apos;s instruction regarding Securities
                                        Transaction which is given to BCAS can be executed.

                                    </li>
                                    <li>
                                        BCAS shall be entitled to ask for payment or Securities from the Customer prior to
                                        the execution of Securities Transaction.
                                    </li>
                                    <li>
                                        BCAS shall be entitled to appraise Customer&apos;s Securities in accordance with the
                                        collateral assessment policy as speci ed by BCAS. BCAS may decline Customer&apos;s
                                        instruction to sell particular Securities which served as collateral.
                                    </li>
                                    <li>
                                        Securities Withdrawal by transfer of Securities from the Securities Account to
                                        securities account under the name of the Customer in other custodian and the
                                        conversion of Securities in collective deposit at KSEI into script Securities under
                                        the name of Customer or funds withdrawal from the Fund Account by the Customer
                                        can be made by submitting a written request to BCAS, and BCAS will initiate the
                                        execution of Customer's instruction in 1 (one) Trading Day after the receipt of such
                                        written request together with complete documents required by BCAS . Funds
                                        withdrawal by the Customer from the Fund Account may be made only if the Fund
                                        Account balance is in positive position and the Customer does not have any
                                        payment liability which has been or will become due to BCAS or to other party in
                                        relation to Securities Transaction and/or this Agreement and the funds in the Fund
                                        Account exceed the minimum balance as speci ed by BCAS from time to time.
                                        Transfer of Securities and funds withdrawal will be settled in accordance with the
                                        applicable mechanisms in BCAS, other custodian that will receive such transfer of
                                        Securities, KSEI and the bank where the Fund Account is opened.
                                    </li>
                                    <li>
                                        Securities owned by the Customer shall be stored in Securities Sub-Account under
                                        the name of respective Customer at KSEI, separated from securities owned by
                                        BCAS and other BCAS Customer.
                                    </li>
                                    <li>
                                        Fund owned by the Customer shall be stored under respective name of the
                                        Customer in Fund Account at BCAS designated bank, separated from fund owned
                                        by BCAS and other BCAS Customer.
                                    </li>
                                    <div class="list-with-paraf">
                                        <div class="w-220px">
                                            <li>
                                                In case the funds show negative balance in the
                                                Securities Account, BCAS may use the Securities in
                                                the Securities Account as collateral for loans from
                                                bank or other nancial institutions and/or execute
                                                Securities forced selling without prior approval of
                                                the Customer in order to settle Customer&apos;s liabilities.
                                            </li>
                                            <li>
                                                The Securities benchmark price is which used in
                                                calculation of Securities value in portfolio shall be
                                                the closing price in the Stock Exchange in the
                                                nearest 1 Trading Day prior to
                                            </li>
                                        </div>
                                        <div class="paraf-box">
                                            <div class="paraf-placeholder border-2px"></div>
                                            <div class="grey-dark-2 text-12px">
                                                Paraf / <i>Initial</i>
                                            </div>
                                        </div>
                                    </div>

                                    

                                </ol>
                            </li>
                        </li>
                    </ol>
                </div>
                
                

            </div>
            
            
        </div>
    </div>


    <!-- PAGE #10 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="9">
                        <ol class="def-list" start="11">
                            <div>
                                mempergunakan patokan harga lain dalam melakukan perhitungan nilai Efek dalam
                                portofolio Nasabah apabila menurut BCAS harga penutupan tersebut tidak
                                mencerminkan harga wajar Efek.
                            </div>
                            <li>
                                Efek yang terkena ”delisting” atau tidak dapat ditransaksikan karena ada masalah,
                                misalnya di “suspend”, akan dinilai nol.

                            </li>
                        
                        </ol>

                        <li>
                            <b>TRANSAKSI EFEK</b>
                            <ol class="def-list">
                                <li>
                                    Transaksi Efek berdasarkan instruksi dari Nasabah dapat dilakukan apabila pada saat
                                    instruksi diberikan dan akan dijalankan oleh BCAS, syarat-syarat sebagai berikut telah
                                    terpenuhi:
                                    <ol class="list-alpha">
                                        <li>
                                            Formulir Permohonan Pembukaan Rekening Efek yang diajukan oleh Nasabah
                                            telah disetujui oleh BCAS, dan Nasabah telah membuka Rekening Dana serta Sub
                                            Rekening Efek pada KSEI.
                                        </li>
                                        <li>
                                            Instruksi untuk melakukan Transaksi Efek yang diberikan oleh Nasabah, baik
                                            secara tertulis maupun lisan, dapat diterima sebagai suatu instruksi yang sah oleh
                                            BCAS dan segala risiko sehubungan dengan pemberian instruksi melalui sarana
                                            apapun oleh Nasabah merupakan tanggung jawab Nasabah sepenuhnya. Dalam
                                            hal Nasabah memberikan pesanan jual/beli via telepon atau faksimili, BCAS tidak
                                            berkewajiban melakukan veri kasi dan membuktikan keaslian suara Nasabah di
                                            telepon maupun keaslian tanda tangan yang tercantum di faksimili. BCAS berhak
                                            membuat dan menyimpan setiap rekaman percakapan telepon antara Nasabah
                                            dan BCAS. Rekaman tersebut merupakan bukti yang mengikat bagi Nasabah
                                            BCAS dan dalam hal timbul perselisihan dan/atau sengketa berkaitan dengan
                                            Rekening Efek, dan rekaman percakapan tersebut dapat digunakan sebagai bukti
                                            yang mengikat bagi Para Pihak sesuai dengan peraturan perundang-undangan
                                            yang berlaku. Rekaman percakapan tersebut adalah milik BCAS.
                                        </li>
                                        <li>
                                            Kewajiban Nasabah untuk memenuhi Deposit telah dan masih dipenuhi sesuai
                                            dengan ketentuan dalam Bagian VIII Perjanjian ini.
                                        </li>
                                        <li>
                                            Apabila Nasabah bermaksud untuk membeli atau menjual Efek untuk kepentingan
                                            perusahaan efek lain, bank, perusahaan asuransi, dana pensiun, atau lembaga
                                            keuangan lain, Nasabah dengan ini menjamin ketersediaan dana dan/atau Efek
                                            untuk keperluan penyelesaian transaksi sebelum melakukan pemesanan jual atau
                                            beli, dan dalam hal Nasabah tidak dapat menyediakan dana dan/atau Efek
                                            dimaksud, maka Nasabah setuju untuk menanggung dan mengganti seluruh
                                            kerugian yang timbul sebagai akibat dari kegagalan dalam menyelesaikan
                                            transaksi pada tanggal penyelesaian.
                                        </li>
                                        <li>
                                            Dalam hal Nasabah memberikan instruksi penjualan Efek, Efek dalam jenis dan
                                            jumlah yang disebutkan dalam instruksi Nasabah tersebut harus telah tersedia
                                            dalam Rekening Efek pada saat penyelesaian transaksi, hal mana juga berlaku
                                            terhadap setiap instruksi penjualan Nasabah atas Efek yang telah dibeli
                                            sebelumnya namun penyelesaian Transaksi Efek dengan pemindahbukuan Efek
                                            ke dalam Rekening Efek belum selesai dilakukan.
                                        </li>
                                        <li>
                                            Dalam hal Nasabah memberikan instruksi pembelian Efek, nilai Transaksi Efek
                                            berdasarkan instruksi Nasabah tersebut tidak boleh melebihi Limit Transaksi
                                            BCAS, kecuali disetujui oleh BCAS.
                                        </li>
                                        <li>
                                            Rekening Efek tidak dalam keadaan dibatasi penggunaannya sesuai dengan
                                            ketentuan dalam Bagian XIX Perjanjian ini.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    BCAS mempunyai kewenangan penuh untuk menerima atau menolak instruksi yang
                                    diberikan oleh Nasabah untuk melakukan Transaksi Efek maupun membatalkan
                                    tindakan yang telah dilakukan oleh BCAS berdasarkan instruksi tersebut apabila syaratsyarat pada angka 1 di atas tidak dipenuhi; atau terjadinya pelanggaran oleh Nasabah
                                    atas ketentuan lainnya dalam Perjanjian ini; atau apabila Transaksi Efek tetap
                                    dilaksanakan, berdasarkan penilaian dan pertimbangan BCAS, dapat menyebabkan
                                    pelanggaran oleh Nasabah terhadap Perjanjian ini atau peraturan perundangundangan yang berlaku.
                                </li>
                                <li>
                                    Dalam melaksanakan instruksi dari Nasabah yang diberikan baik secara lisan maupun
                                    tertulis, BCAS bertindak selaku kuasa dari Nasabah dan karenanya Nasabah
                                    menyetujui, memberikan otorisasi, serta terikat pada tindakan-tindakan yang dilakukan
                                    oleh BCAS untuk dan atas nama Nasabah tersebut

                                </li>
                                <li>
                                    Apabila BCAS tidak dapat atau gagal melaksanakan instruksi dari Nasabah karena
                                    situasi atau kondisi pasar tidak memungkinkan untuk melaksanakan instruksi
                                    Nasabah, atau karena terjadi Force Majeure, maka BCAS tidak bertanggung jawab
                                    atas segala kerugian yang mungkin timbul dan Nasabah dengan ini membebaskan
                                    BCAS dari segala tuntutan kerugian, tanggung jawab, tanggung gugat, tuntutan,
                                    gugatan dan/atau tindakan hukum lainnya dalam bentuk apapun dan dari pihak
                                    manapun yang mungkin timbul sebagai akibat dari tidak dapat dilaksanakannya
                                    instruksi Nasabah tersebut.
                                </li>
                                <li>
                                    Nasabah berhak untuk meminta perubahan dan/atau pembatalan atas instruksi yang
                                    telah disampaikannya kepada BCAS sepanjang instruksi tersebut belum selesai
                                    dilaksanakan oleh BCAS, namun BCAS tidak wajib untuk memastikan berhasil
                                    dilakukannya perubahan dan/atau pembatalan tersebut. Dalam hal BCAS berhasil
                                    membatalkan instruksi Nasabah, BCAS akan menyampaikan secara tertulis mengenai
                                    hal tersebut kepada Nasabah pada hari yang sama.
                                </li>
                                <li>
                                    Nasabah setuju dan menundukkan diri untuk melaksanakan seluruh hak dan
                                    kewajiban yang timbul dari instruksi yang gagal untuk diubah dan/atau dibatalkan dan
                                    karenanya BCAS tidak bertanggung jawab atas gagalnya pembatalan dan/atau
                                    perubahan instruksi tersebut, kecuali apabila transaksi tetap dilaksanakan setelah 30
                                    (tiga puluh) menit atau lebih sesudah instruksi pembatalan diterima oleh BCAS untuk
                                    Transaksi Efek yang dilakukan di Indonesia; atau 24 (dua puluh empat) jam atau lebih
                                    sesudah instruksi pembatalan diterima oleh BCAS untuk Transaksi Efek yang
                                    dilakukan di luar negeri.
                                </li>
                                <li>
                                    Nasabah juga setuju dan menundukkan diri untuk melaksanakan semua hak dan
                                    kewajiban yang timbul dari berulangnya pelaksanaan instruksi maupun
                                    dilaksanakannya secara bersama-sama instruksi awal maupun perubahannya sebagai
                                    akibat usaha untuk mengubah dan/atau membatalkan suatu instruksi.

                                </li>
                                
                            </ol>
                            <li class="mt-30px">
                                <b>PEMBAYARAN TRANSAKSI</b> 
                                
                                <ol class="def-list">
                                    <li>
                                        Atas setiap transaksi yang dilakukan, selain harga pembelian Efek untuk transaksi
                                        pembelian Efek, Nasabah wajib membayar biaya-biaya:
                                    </li>

                                </ol>
                            </li>
                        </li>
                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi mb-0 pb-0" start="9">
                        <ol class="def-list" start="11">
                            <div>
                                calculation. However, BCAS shall have the authority to use other benchmark price in
                                calculation of Securities value in Customer&apos;s portfolio if, according to BCAS, such
                                closing price does not re ect a fair market value.
                            </div>
                            <li>
                                Securieties which a ected by “delisting” or cannot be transacted because of problem, in
                                example “suspended”, shall be valued as zero.
                            </li>
                        
                        </ol>

                        <li>
                            <b>SECURITIES TRANSACTION</b>
                            <ol class="def-list mb-0 pb-0">
                                <li>
                                    Securities Transaction based on the Customer instruction may be made if at the time
                                    when the instruction is given and will be carried out by BCAS, the requirements as
                                    follows have been fulfilled: 
                                    <ol class="list-alpha">
                                        <li>
                                            Application Form of Securities Account Opening which is submitted by the
                                            Customer has been approved by BCAS, and the Customer has opened Fund
                                            Account and Securities Sub-Account at KSEI.
                                        </li>
                                        <li>
                                            Instruction to execute Securities Transaction which is given by the Customer, either
                                            written or verbal, may be received as a valid instruction by BCAS and all risks in
                                            connection with providing instruction through any means by the Customer are full
                                            responsibility of the Customer. In case the Customer provides sale/purchase order
                                            via telephone or faxcimile, BCAS shall not be obliged to verify and prove the
                                            authencity of the Customer voice in telephone and authencity of signature which is
                                            contained in the faxcimile. BCAS shall be entitled to make and store every
                                            telephone conversation record between the Customer and BCAS. Such record
                                            constitutes a binding proof against the Customer of BCAS and if there is con ict
                                            and/or dispute in connection with Securities Account, and such conversation record
                                            may be used as a binding proof against the Parties in accordance with applicable
                                            law. Such record is BCAS property.
                                        </li>
                                        <li class="mt-12px">
                                            The Customer obligation to ful ll Deposit has been and still met in accordance with
                                            the provision in Section VIII of this Agreement.
                                        </li>
                                        <li>
                                            If the Customer wishes to buy or sell Securities for other securities company, bank,
                                            insurance, or other nancial institution, the Customer hereby warrant the availability
                                            of fund and/or Securities for the purpose of transaction settlement prior to execute
                                            sell or buy order, and in case the Customer could not provide such fund and/or
                                            Securities, then the Customer agrees to bear and indemnify all losses arising out of
                                            failure in settlement of transaction at the settlement date.
                                        </li>
                                        <li class="mt-20px">
                                            In case the Customer gives Securities sale instruction, Securities in type and
                                            amount which is stated in such Customer&apos;s instruction shall be available in
                                            Securities Account at the time of transaction settlement, this also apply to any
                                            Customer&apos;s instruction to sell over Securities which has previously purchased but
                                            the settlement of Securities Transaction with Securities transfer to Securities
                                            Account has not been completed.
                                        </li>
                                        <li>
                                            In case the Customer gives Securities purchase instruction, amount of Securities
                                            Transaction based on such Customer&apos;s instruction shall not exceeding the BCAS
                                            Trading Limit, except approved by BCAS.
                                        </li>
                                        <li>
                                            Securities Account is not in state of usage restriction in accordance with provision
                                            of Section XIX of this Agreement.

                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    BCAS shall have the full authority to accept or decline the instruction given by the
                                    Customer to execute Securities Transaction and to call o the action having been taken
                                    by BCAS based on such instruction if the conditions in number 1 above has not been
                                    ful lled; or in case of breach by the Customer of any other provision in this Agreement;
                                    or if the Securities Transaction remains to be executed, at the discretion of BCAS ,
                                    may cause a breach by the Customer of this Agreement or the applicable legislations.
                                </li>
                                <li class="mt-22px">
                                    In executing Customer&apos;s instruction which is given either in oral or written, BCAS shall
                                    act as the proxy of the Customer and thus the Customer approves, authorizes and is
                                    bound to the actions undertaken by BCAS for and on behalf of the Customer.

                                </li>
                                <li class="mt-12px">
                                    If BCAS is unable or fails to execute Customer&apos;s instruction due to market situation or
                                    conditions makes it impossible to execute Customer's instruction, or due to Force
                                    Majeure, then BCAS shall not be liable for any losses that may arise and the Customer
                                    hereby hold harmless BCAS from all claim of damages, liabilities, accountabilities, suit,
                                    claims and/or other legal actions of any sort which may arise due to non-execution of
                                    such Customer's instruction.

                                </li>
                                <li class="mt-12px">
                                    The Customer is entitled to request amendment and/or cancelation on instruction
                                    which have been given to BCAS as long as such instruction has not been completed to
                                    be executed by BCAS, but BCAS is not obliged to ensure such amendment and/or
                                    cancelation is successfully executed. In case BCAS successfully cancels the Customer
                                    instruction, BCAS will convey in writing regarding such matter to the Customer at the
                                    same day.
                                </li>
                                <li>
                                    The Customer agrees and comply to perform all rights and obligations which arise from
                                    instruction which failed to be amended and/or cancelled and therefore BCAS shall not
                                    be liable for failure of such instruction cancellation and/or amendment, except if
                                    transaction remain executed after 30 (thirty) minutes or more after cancellation
                                    instruction received by BCAS for Securities Transaction which executed in Indonesia;
                                    or 24 (twenty four) hours or more after cancellation instruction received by BCAS for
                                    Securities Transaction which executed abroad.
                                </li>
                            </ol>
                        </li>
                    </ol>
                    <div class="list-with-paraf">
                        <div class="w-220px">
                            <ol class="romawi" start="10">
                        
                                <ol class="def-list" start="7">
                                    <li class="mt-10px">
                                        The Customer also agrees and comply to perform all
                                        rights and obligations which arise from recurrence of
                                        instruction execution or simultaenous execution of
                                        original instruction and amendment as result of attempt
                                        to amend and/or cancel an instruction.
                                    </li>
                                    
                                </ol>
                                <li>
                                    <b>PAYMENT OF TRANSACTION</b> 
                                    
                                    <ol class="def-list">
                                        <li>
                                            On every executed transaction, in addition to Securities
                                            purchase price for Securities purchase transaction, the
                                        </li>
    
                                    </ol>
                                </li>
                            </ol>
                        </div>
                        <div class="paraf-box ml-40px">
                            <div class="paraf-placeholder border-2px"></div>
                            <div class="grey-dark-2 text-12px">
                                Paraf / <i>Initial</i>
                            </div>
                        </div>
                    </div>

                    
                </div>

            </div>
            
            
        </div>
    </div>


    <!-- PAGE #11 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="11">
                        <ol class="def-list" start="2">
                            <ol class="list-alpha">
                                <li>
                                    komisi transaksi beli sebesar [&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]% dari nilai transaksi dan komisi transaksi jual
                                    sebesar [&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]% dari nilai transaksi;
                                </li>
                                <li>
                                    pajak dan biaya transaksi yang tunduk kepada peraturan perundang-undangan
                                    yang berlaku pada saat transaksi dilaksanakan; dan

                                </li>
                                <li>
                                    biaya-biaya lainnya, jika ada.
                                </li>
                            </ol>
                            
                            <li class="mt-12px">
                                BCAS berhak membebankan biaya-biaya tersebut dalam angka 1 di atas pada Deposit
                                yang diserahkan oleh Nasabah, dana yang disimpan pada Rekening Dana dan/atau
                                pada pembayaran yang akan diterima oleh Nasabah.

                            </li>
                            <li>
                                Pembayaran dari Nasabah untuk transaksi pembelian Efek harus sudah efektif dalam
                                Rekening Dana selambat-lambatnya pada tanggal penyelesaian pukul 09.00 WIB.
                                Apabila sampai dengan waktu tersebut dana belum efektif di Rekening Dana, maka
                                BCAS berhak membebankan biaya transaksi Nasabah pada Deposit dan/atau
                                Rekening Dana tanpa perlu persetujuan terlebih dahulu dari Nasabah.
                            </li>
                            <li>
                                Setiap keterlambatan pembayaran akan dikenakan denda harian sebesar [ 30
                                ]%/tahun dan diperhitungkan dalam jumlah kewajiban yang harus dilunasi oleh
                                Nasabah.
                            </li>
                            <li>
                                Apabila sampai dengan tanggal penyelesaian setelah transaksi pembelian Efek
                                dilakukan, pembayaran dari Nasabah belum diterima oleh BCAS, maka BCAS berhak
                                melarang Nasabah melakukan transaksi beli melalui BCAS tanpa pemberitahuan
                                terlebih dahulu kepada Nasabah sampai dilunasinya seluruh kewajiban Nasabah
                                kepada BCAS.

                            </li>
                            <li>
                                Apabila hasil penjualan Efek tersebut diatas tidak mencukupi untuk pelunasan
                                kewajiban Nasabah, maka BCAS akan mengirimkan surat pemberitahuan penjualan
                                dan status kewajiban Nasabah sekaligus meminta Nasabah untuk melunasi
                                kewajibannya.
                            </li>
                            <li>
                                Pembayaran transaksi penjualan Efek ke Rekening Dana dilaksanakan oleh BCAS
                                pada tanggal penyelesaian setelah tanggal Transaksi Efek secepat-cepatnya pada
                                pukul 14.00 WIB dengan pengecualian apabila Nasabah belum menyelesaikan semua
                                kewajiban penyerahan Efek berkaitan dengan transaksi jual tersebut, maka BCAS
                                berhak untuk tidak melakukan pemindahbukuan dana ke dalam Rekening Dana
                                sampai dengan dilaksanakannya kewajiban penyerahan Efek tersebut atau menjual
                                Efek lain dalam Rekening Efek atau membeli Efek yang diperlukan menggunakan
                                dana Nasabah yang terdapat dalam Rekening Efek dan/atau Rekening Dana untuk
                                penyelesaian transaksi berdasarkan kewenangan yang dimiliki oleh BCAS
                                berdasarkan ketentuan IV.1.e Perjanjian ini.
                            </li>
                        
                        </ol>

                        <li>
                            <b>PENYERAHAN DAN PENARIKAN EFEK</b><br>
                            <div>
                                Nasabah dapat meminta pemindahbukuan Efek hasil transaksi pembelian dari
                                Rekening Efek ke rekening efek atas nama Nasabah pada kustodian lain secepatcepatnya pada Hari Bursa setelah Transaksi Efek dilakukan dengan memberikan
                                instruksi tertulis kepada BCAS. BCAS akan mulai melaksanakan instruksi Nasabah
                                tersebut selambat-lambatnya pada 1 (satu) Hari Bursa setelah diterimanya permintaan
                                tertulis tersebut beserta dokumen yang dipersyaratkan secara lengkap oleh BCAS.
                                Nasabah menyadari sepenuhnya bahwa pelaksanaan instruksi tersebut dapat saja
                                tidak dilaksanakan BCAS karena adanya Force Majeure, perubahan peraturan pasar
                                modal dan/atau perubahan kebijakan moneter Pemerintah, dan/ atau adanya
                                kebijakan dan/atau ketentuan yang diterbitkan OJK, Bursa Efek, LKP, dan/atau LPP,
                                serta akibat tidak berfungsinya sistem-sistem yang terkait dengan perdagangan, kliring
                                dan penjaminan serta penyimpanan dan penyelesaian transaksi pada Bursa Efek, LKP
                                dan/atau LPP.
                            </div>
                        </li>

                        <li>
                            <b>KONFIRMASI DAN PELAPORAN</b> 
                            
                            <ol class="def-list">
                                <li>
                                    Untuk setiap Transaksi Efek yang telah dilaksanakan untuk kepentingan Nasabah,
                                    BCAS akan memberikan kon rmasi transaksi kepada Nasabah. Nasabah berhak
                                    sewaktu-waktu meminta laporan dan/atau menguji kesesuaian antara saldo Rekening
                                    Efek dalam kon rmasi transaksi dimaksud atau pembukuan BCAS dengan saldo Efek
                                    milik Nasabah dalam Sub Rekening Efek. Segala biaya yang timbul terkait permintaan
                                    laporan dan/atau uji kesesuaian saldo dimaksud, yang dibebankan oleh BCAS maupun
                                    KSEI, sepenuhnya menjadi beban dan tanggung jawab Nasabah.
                                </li>
                                <li>
                                    Dalam hal BCAS menjalankan instruksi Nasabah untuk melakukan Transaksi Efek,
                                    BCAS akan menerima laporan yang menyatakan mengenai status instruksi yang
                                    terlaksana, termasuk tetapi tidak terbatas kepada, apakah pemesanan telah terlaksana
                                    sebagian atau seluruhnya, dan harga transaksi yang terjadi. Laporan tersebut diterima
                                    BCAS dapat saja tidak tepat pada waktunya, sehingga dapat mengakibatkan Nasabah
                                    terlambat menerima laporan dari BCAS tersebut. Nasabah dapat saja menerima
                                    laporan perbaikan terhadap laporan sebelumnya akibat dari kesalahan harga dan atau
                                    jumlah yang dieksekusi. Untuk itu, Nasabah setuju bahwa Nasabah akan menerima
                                    harga dan/atau jumlah yang benar-benar terjadi di Bursa Efek berdasarkan laporan
                                    yang diterbitkan oleh Bursa Efek walaupun laporan tersebut terlambat ataupun
                                    terdapat perbedaan antara apa yang Nasabah lihat di layar pada saat transaksi atau
                                    yang dijelaskan oleh petugas yang mewakili BCAS untuk menyampaikan laporan
                                    tersebut.
                                </li>
                                <li>
                                    Apabila Nasabah tidak menyetujui isi kon rmasi yang dikirimkan oleh BCAS, maka
                                    Nasabah harus menyampaikan pernyataan tertulis dalam waktu 1 (satu) Hari Bursa
                                    setelah dikirimkannya kon rmasi tersebut (dengan bukti pengiriman tercatat di BCAS).
                                    Apabila dalam waktu 1 (satu) Hari Bursa Nasabah tidak menyampaikan keberatan
                                    tertulis, maka Nasabah dengan ini menyatakan bahwa Nasabah menyetujui isi kon
                                    rmasi tersebut dan isi kon rmasi tersebut menjadi bersifat nal.
                                </li>
                                <li>
                                    BCAS akan mengirimkan laporan kon rmasi transaksi kepada Nasabah setelah
                                    diselesaikan proses-proses administratif pada setiap akhir Hari Bursa. Nasabah
                                    dengan ini membebaskan BCAS dari tanggung jawab atas setiap keterlambatan dalam
                                    penyampaian laporan konfirmasi perdagangan kepada Nasabah dalam kondisi apapun.
                                </li>
                                <li>
                                    BCAS akan mengirimkan laporan bulanan mengenai posisi Efek dan dana dalam
                                    Rekening Efek dan Rekening Dana.

                                </li>
                                <li class="mt-12px">
                                    BCAS berhak membela diri terhadap keluhan (complaint) yang diajukan Nasabah
                                    dengan mengajuan bukti-bukti yang ada.

                                </li>

                            </ol>
                        </li>
                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="11">
                        <ol class="def-list" start="2">
                            <div>
                                Customer shall pay the following fees: 
                            </div>
                            <ol class="list-alpha">
                                
                                <li>
                                    Buy transaction commission in amount of [&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]% from transaction value and sell
                                    transaction commission in amount of [&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]% from transaction value.
                                </li>
                                <li>
                                    taxes and transaction cost which subject to applicable law at the time transaction is
                                    executed; and

                                </li>
                                <li>
                                    other expenses, if any
                                </li>
                            </ol>
                            
                            <li>
                                BCAS shall be entitled to impose the fees speci ed in number 1 above on the Deposit
                                submitted by the Customer, the funds stored in the Fund Account and/or the payment
                                to be received by the Customer.

                            </li>
                            <li>
                                Payment from the Customer for Securities purchase transaction shall have been
                                effective in the Fund Account no later than the settlement date at 09.00 WIB. If until
                                such date the funds have not been effective in the Fund Account, then BCAS shall be
                                entitled to impose Customer&apos;s transaction fees on the Deposit and/or Fund Account
                                without Customer
                            </li>
                            <li>
                                Every payment delay shall be charged with daily penalty in amount of [30]%/years and
                                calculated in liability amount which shall be paid by the Customer.
                            </li>
                            <li>
                                If until the settlement date after Securities purchase transaction is executed, payment
                                from the Customer has not been received by BCAS, then BCAS entitled to prohibit the
                                Customer to execute purchase transaction through BCAS without prior notification to
                                the Customer until all Customer&apos;s liability to BCAS have been paid off.

                            </li>
                            <li class="mt-12px">
                                If the proceed from such Securities sale above is inadequate to settle the Customer&apos;s
                                liability, then BCAS will deliver letter of sale noti cation and the Customer&apos;s liability
                                status and to request the Customer to pay o its liability.

                            </li>
                            <li class="mt-12px">
                                Securities sale transaction payment to Fund Account executed by BCAS on the
                                settlement date after the date of Securities Transaction at earliest at 14.00 WIB with
                                exception if the Customer have not fulfill all Securities delivery liability in connection
                                with such sale transaction, then BCAS entitled to non execution of fund transfer to
                                Fund Account until such Securities delivery obligation is executed or sell other
                                Securities in Securities Account or purchase the required Securities using the
                                Customer fund which contained in Securities Account and/or Fund Account to settle
                                the transaction based on authority which held by BCAS based on provision IV.1.e of
                                this Agreement.

                            </li>
                        
                        </ol>

                        <li class="mt-28px">
                            <b>SECURITIES DELIVERY AND WITHDRAWAL</b><br>
                            <div>
                                The Customer may request Securities transfer out of the purchase transaction from the
                                Securities Account to a securities account under Customer&apos;s name in other custodian
                                no sooner than the Trading Day after Securities Transaction execution by providing a
                                written instruction to BCAS . BCAS will initiate the execution of Customer's instruction
                                no later than 1 (one) Trading Day after receiving such written request together with the
                                complete documents required by BCAS. The Customer shall be fully aware that the
                                execution of such instruction may not be executed by BCAS due to Force Majeure,
                                changes in capital market regulations and/or changes in government monetary policy
                                and/or policies and/or regulation which enacted by OJK, Stock Exchange, LKP and/or
                                LPP, as well as malfunction of the systems in relation to trading, clearing and
                                guarantee, as well as depository and settlement of transactions in the Stock
                                Exchange, LKP and/or LPP.

                            </div>
                        </li>

                        <li class="mt-16px">
                            <b>CONFIRMATION AND REPORTING</b> 
                            
                            <ol class="def-list">
                                <li>
                                    For any Securities Transaction which has been executed for the Customer interest,
                                    BCAS will deliver transaction con rmation to Customer. The Customer shall be entitled
                                    at any time to request a report and/or verify the consistency between the balance of
                                    Securities Account in the relevant transaction con rmation or BCAS bookkeeping
                                    against the Customer&apos;s Securities balance in the Securities Sub-Account. All costs
                                    arising out in relation to such report and/or veri cation of balance incurred by BCAS
                                    and KSEI shall be borne by and the liabilities of the Customer.
                                </li>
                                <li>
                                    In case BCAS executes Customer&apos;s instruction to execute Securities Transaction,
                                    BCAS will receive a report regarding the status of executed instruction, including but
                                    not limited to whether the order has been executed in part or in full, and the price of
                                    transaction. Such report may not be received by BCAS on time, which leads to the
                                    delay of the Customer receiving such report from BCAS. The Customer may receive a
                                    revision to the previous reports due to false price and/or amount executed. Thus, the
                                    Customer agrees that it will accept the prices and/or amounts that are actually
                                    executed in the Stock Exchange based on reports issued by the Stock Exchange
                                    notwithstanding the delay of such reports or there is inconsistency between what the
                                    Customer saw on the screen at the transaction or or described by the o cers
                                    representing BCAS to deliver such reports.

                                </li>
                                <li class="mt-24px">
                                    If the Customer does not approve the con rmation content which was sent by BCAS,
                                    then the Customer shall submit a written statement within 1 (one) Trading Day after
                                    delivery of such con rmation (with receipt of delivery recorded in BCAS). If within one
                                    (1) Trading Day the Customer does not deliver a written objection, then the Customer
                                    hereby declares that it approves such con rmation and therefore the con rmation shall
                                    be final.

                                </li>
                                <li>
                                    BCAS shall deliver transaction confirmation report to the Customer after administrative
                                    process has been completed at the end of any Trading Day. The Customer hereby
                                    hold BCAS harmless from the liabilities on any delay in the delivery of transaction con
                                    rmation report to the Customer under any circumstances.
                                </li>
                                <div class="list-with-paraf">
                                    <div class="w-220px">
                                        <li>
                                            BCAS shall deliver monthly report regarding the
                                            position of Securities and funds in the Securities
                                            Account and Fund Account.
                                        </li>
                                        <li>
                                            BCAS shall be entitled to defend itself against
                                            complaints led by the Customer by presenting available
                                            evidences.
                                        </li>
                                    </div>
                                    <div class="paraf-box">
                                        <div class="paraf-placeholder border-2px"></div>
                                        <div class="grey-dark-2 text-12px">
                                            Paraf / <i>Initial</i>
                                        </div>
                                    </div>

                                </div>
                                

                            </ol>
                        </li>
                    </ol>
                </div>



            </div>
            
            
        </div>
    </div>

    <!-- PAGE #12 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="13">
                        <li>
                            <b>PENDANAAN</b>
                            <ol class="def-list">
                                <li>
                                    Penyetoran yang dilakukan oleh Nasabah dengan cek/bilyet-giro/transfer dianggap sah
                                    setelah dana efektif (in good funds) dalam Rekening Dana Nasabah
    
                                </li>
                                <li>
                                    Nasabah memberikan kuasa yang tidak dapat ditarik kembali kepada BCAS dan
                                    menginstruksikan kepada BCAS untuk:
                                    <ol class="list-alpha">
                                        <li>
                                            memeriksa dan memastikan ketersediaan dana Nasabah dalam Rekening Dana
                                            sebelum melaksanakan instruksi Nasabah;
                                        </li>
                                        <li>
                                            memblokir dana Nasabah sebagai jaminan Transaksi Efek di BCAS;
                                        </li>
                                        <li>
                                            melakukan atau memerintahkan bank yang mengelola Rekening Dana untuk
                                            melakukan pendebetan atau pengkreditan Rekening Dana sehubungan Transaksi
                                            Efek maupun kewajiban Nasabah yang telah jatuh tempo kepada BCAS seperti
                                            biaya transaksi, biaya pengiriman dan penerimaan dana, pajak sesuai dengan
                                            peraturan perundangan yang berlaku, komisi dan beban pengeluaran lain yang
                                            merupakan beban dan wajib dibayar oleh Nasabah;
                                        </li>
                                        <li>
                                            melakukan tindakan-tindkan lain yang diperlukan sehubungan dengan
                                            pelaksanaan pengaturan pendanaan.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Nasabah berkewajiban untuk memastikan ketersediaan dana dalam Rekening Dana
                                    sebelum memberikan instruksi kepada BCAS untuk melakukan Transaksi Efek melalui
                                    BCAS. BCAS dapat menolak melaksanakan instruksi dari Nasabah apabila tidak
                                    tersedia dana yang cukup dalam Rekening Dana.
                                </li>
                            </ol>
                        </li>
                        

                        <li>
                            <b>PENYELESAIAN TUNGGAKAN</b>
                            <ol class="def-list">
                                <li>
                                    BCAS mempunyai hak untuk membeli atau meminjam Efek atau menjual Efek lain
                                    milik Nasabah untuk Rekening Efek Nasabah, dengan tujuan untuk menutup saldo
                                    negatif Efek yang tidak dibiayai oleh BCAS atau tidak dijamin secara cukup oleh
                                    nasabah.
                                </li>
                                <li>
                                    Apabila waktu pembayaran telah melewati tanggal penyelesaian Transaksi Efek/atau
                                    dana yang ada dalam Rekening Dana dalam posisi negatif atau tidak mencukupi untuk
                                    menyelesaikan seluruh kewajiban pembayaran oleh Nasabah baik yang telah maupun
                                    belum jatuh tempo, maka BCAS dapat melakukan penjualan atas Efek yang berada
                                    dalam Rekening Efek pada 2 (dua) Hari Bursa setelah tanggal penyelesaian Transaksi
                                    Efek/ baik pada Pasar Reguler, Pasar Tunai, Pasar Negosiasi maupun dengan
                                    mekanisme tutup sendiri tanpa perlu memperoleh persetujuan terlebih dulu dari
                                    Nasabah.
                                </li>
                                <li>
                                    Pemilihan Efek yang akan dijual dan penentuan harga penjualan Efek dimaksud
                                    merupakan hak BCAS sepenuhnya dalam rangka mengurangi kewajiban Nasabah
                                    terhadap BCAS.
                                </li>
                                <li>
                                    Segala kerugian akibat penjualan tersebut yang dilakukan oleh BCAS akan menjadi
                                    tanggungan Nasabah.
                                </li>
                                <li>
                                    Selama masih terdapat tunggakan pembayaran yang wajib dilakukan oleh Nasabah,
                                    Nasabah hanya diperbolehkan melakukan transaksi jual.
                                </li>
                                <li>
                                    Apabila penjualan Efek milik Nasabah tidak cukup untuk menutup saldo negatif
                                    Rekening Dana (Saldo Debit), Nasabah tetap berkewajiban menyelesaikan
                                    kekurangannya serta biaya-biaya atau denda yang timbul.

                                </li>
                                <li>
                                    Saldo Debit akan dikenakan denda sebesar [30 %].
                                </li>
                                <li>
                                    BCAS akan segera menginformasikan hasil dari penjualan sebagaimana dimaksud
                                    dalam Bagian XIV butir 1 tersebut kepada Nasabah pada hari yang sama dan
                                    selambat-lambatnya pada Hari Bursa berikutnya (T+1) baik melalui telepon, surat
                                    ataupun faksimili.
                                </li>
                                <li>
                                    Nasabah dengan ini menjamin dan membebaskan BCAS dari segala kerugian,
                                    tuntutan dan/atau gugatan sehubungan dengan tindakan yang BCAS lakukan sesuai
                                    dengan bagian XIV ini.
                                </li>
                                <li>
                                    Nasabah dengan ini menjamin dan membebaskan BCAS dari segala kerugian,
                                    tuntutan dan/atau gugatan sehubungan dengan kegagalan BCAS menyelesaikan
                                    Transaksi Efek pada tanggal penyelesaian karena Nasabah tidak dapat menyediakan
                                    dana dan/ atau Efek pada pada tanggal penyelesaian Transaksi Efek.
                                </li>
                            </ol>
                            
                        </li>

                        <li>
                            <b>PENYELESAIAN TUNGGAKAN</b> 
                            
                            <ol class="def-list">
                                <li>
                                    Efek yang masih berbentuk warkat dalam Rekening Efek tidak secara otomatis
                                    diregistrasi dan/atau dikonversi menjadi Efek dalam penitipan kolektif di KSEI atas
                                    nama Nasabah.
                                </li>
                                <li>
                                    Nasabah harus menginformasikan/menginstruksikan kepada BCAS secara tertulis
                                    apabila ingin meregistrasi dan/atau mengkonversi Efek yang masih dalam bentuk
                                    warkat menjadi Efek yang dititipkan di KSEI untuk memperoleh haknya atas Efek
                                    (dividen, bonus, rights, waran dll).
                                </li>
                                <li>
                                    Efek yang sedang dalam proses registrasi dan konversi tersebut tidak dapat dijual
                                    sampai selesai proses konversinya.

                                </li>
                                <li>
                                    Biaya-biaya registrasi dan konversi Efek tersebut sepenuhnya ditanggung oleh
                                    Nasabah.
                                </li>
                            </ol>
                        </li>

                        <li>
                            <b>KUSTODIAN</b> 
                            
                            <ol class="def-list">
                                <li>
                                    Nasabah mengakui bahwa tidak adanya pemberitahuan tertulis untuk menarik atau
                                    mengambil Efek dari Rekening Efek berarti bahwa Nasabah menyetujui BCAS untuk
                                    memelihara dan menyimpan Efeknya (tidak termasuk mengelolanya) dengan cara dan
                                    di tempat yang ditentukan oleh BCAS.
                                </li>
                                <li>
                                    Nasabah setuju untuk bertanggungjawab dan membayar semua biaya-biaya yang
                                    timbul sebagai akibat penitipan Efek dalam Rekening Efek.
                                </li>
                                <li>
                                    Nasabah setuju untuk memberikan wewenang kepada BCAS untuk menjaminkan Efek
                                    dalam portofolio Nasabah pada rekening KSEI No. SQ001-0000-004-38 untuk tujuan
                                    transaksi Nasabah.

                                </li>
                                
                            </ol>
                        </li>

                        <li>
                            <b>TINDAKAN KORPORASI</b> 
                            
                            <ol class="def-list">
                                <li>
                                    Setiap hak yang melekat pada Efek yang dimiliki oleh Nasabah adalah hak Nasabah.
                                    Dalam hal Emiten dari Efek yang dimiliki Nasabah melakukan tindakan korporasi
                                    (Corporate Action) seperti Rapat Umum Pemegang Saham (“RUPS”) mengenai
                                    pembagian dividen, saham bonus, kupon, bunga, pokok, hak konversi, dan hak-hak
                                    lain yang melekat pada Efek, BCAS akan mendistribusikan hak-hak tersebut kepada
                                    Nasabah pada hari pertama pada tanggal pembayaran hak dimaksud, dengan
                                    ketentuan BCAS telah menerima hak tersebut secara efektif dari Emiten dan/atau
                                    KSEI.
                                </li>
                                
                            </ol>
                        </li>
                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="13">
                        <li>
                            <b>FUNDING</b>
                            <ol class="def-list">
                                <li>
                                    The deposit made by the Customer using check/clearing ticket/transfer shall be
                                    deemed valid after the funds are e ective (in good funds) in the Customer Fund Account
    
                                </li>
                                <li>
                                    The Customer shall grant an irrevocable power of attorney to BCAS and instruct BCAS
                                    to:
                                    <ol class="list-alpha">
                                        <li>
                                            verify and ensure the availability of Customer&apos;s funds in the Fund Account prior to
                                            Customer&apos;s instruction execution;
                                        </li>
                                        <li>
                                            block Customer&apos;s funds as collateral for Securities Transaction in BCAS ;
                                        </li>
                                        <li>
                                            perform or instruct the bank managing the Fund Account to debiting or crediting the
                                            Fund Account with respect to Securities Transaction and Customer's liabilities
                                            which has become due to BCAS such as transaction fees, fund delivery and
                                            receiving fees, taxes in accordance with the applicable laws, commissions and
                                            other charges which are expenses and liabilities shall be paid by the Customer;
                                        </li>
                                        <li class="mt-12px">
                                            take other actions necessary in connection with the implementation of funding
                                            arrangements.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    The Customer shall ensure the availability of funds in the Fund Account prior to give
                                    instruction to BCAS to execute Securities Transaction via BCAS. BCAS may decline to
                                    execute Customer&apos;s instruction in case of insu cient funds available in the Fund
                                    Account.

                                </li>
                            </ol>
                        </li>
                        

                        <li class="mt-16px">
                            <b>ARREARS SETTLEMENT</b>
                            <ol class="def-list">
                                <li>
                                    BCAS shall reserve the right to purchase or to borrow Securities or to sell other
                                    Securities owned by the Customer for Customer&apos;s Securities Account for the purpose
                                    of close negative balance of Securities which does not funded by BCAS or not su
                                    ciently secured by the Customer.
                                </li>
                                <li>
                                    If the time of payment has elapsed the settlement date of Securities Transaction or the
                                    funds in the Fund Account is negative or insufficient to settle all payment liabilities by the
                                    Customer which have or have not become due, then BCAS may sell the Securities
                                    available in the Securities Account in 2 (two) Trading Day after the settlement date of
                                    Securities Transaction in the Regular Market, Spot Market, Negotiatiation Market or by
                                    cross mechanism without prior approval from the Customer.

                                </li>
                                <li class="mt-12px">
                                    Selection of Securities to be sold and determination of such Securities sale price shall
                                    be fully held by BCAS in order to reduce Customer's liabilities to BCAS.

                                </li>
                                <li class="mt-12px">
                                    Any loss due to the such sale which executed by BCAS shall be borne by the
                                    Customer
                                </li>
                                <li class="mt-12px">
                                    As long as there are payment arrears which shall be paid by the Customer, the
                                    Customer only allowed to execute sale transactions

                                </li>
                                <li>
                                    If the proceeds of Customer&apos;s Securities sale are not su cient to close the Fund
                                    Account negative balance (Debit Balance), the Customer shall remain liable to settle
                                    the de cit as well as all costs or penalties arising there from

                                </li>
                                <li>
                                    Debit Balance will be subject to penalty in amount of [30%]
                                </li>
                                <li>
                                    BCAS shall immediately notify the proceeds of sale as referred to in Section XIV item 1
                                    to the Customer on the same day and no later than the next Trading Day (T+1) either
                                    by phone, mail or facsimile.

                                </li>
                                <li class="mt-12px">
                                    The Customer hereby guarantees and hold harmless BCAS from all losses, claims
                                    and/or suit in relation to BCAS&apos;s actions in accordance with this Section XIV.

                                </li>
                                <li class="mt-12px">
                                    The Customer hereby guarantees and hold harmless BCAS from all losses, claims
                                    and/or suit in relation to BCAS&apos;s failure to settle the Securities Transaction on the
                                    settlement date due to the Customer failure to provide the funds and/or Securities on
                                    the settlement date of such Securities Transaction.
                                </li>
                            </ol>
                            
                        </li>

                        <li>
                            <b>REGISTRATION AND CONVERSION</b> 
                            
                            <ol class="def-list">
                                <li>
                                    Securities which still in form of script in the Securities Account shall not be
                                    automatically registered and/or converted into Securities in collective deposit at KSEI
                                    under Customer&apos;s name.
                                </li>
                                <li>
                                    The Customer shall inform/instruct BCAS in writing if wishes to register and/or convert
                                    the Securities in the form of script deposited in KSEI to obtain its rights for such
                                    Securities (dividend, bonus, rights, warrant, etc.)
                                </li>
                                <li class="mt-12px">
                                    Securities under registration and conversion process shall not be available for sale until
                                    the conversion process is completed.
                                </li>
                                <li>
                                    Costs of registration and conversion of such Securities shall be borne by the Customer.
                                </li>
                            </ol>
                        </li>

                        <li class="mt-16px">
                            <b>CUSTODIAN</b> 
                            
                            <ol class="def-list">
                                <li>
                                    The Customer acknowledges that the absence of written notice to withdraw or take out
                                    Securities from Securities Account shall mean the Customer approve BCAS to
                                    maintain and store its Securities (excluding manage it) with means and in place which
                                    speci ed by BCAS.

                                </li>
                                <li>
                                    The Customer agrees to be liable for and to pay all costs arise due toSecurities storage
                                    in the Securities Account.
                                </li>
                                <li>
                                    The Customer agrees to grant authorithy to BCAS to pledge the Securities in
                                    Customer&apos;s portfolio in KSEI&apos;s account No. SQ001-0000-004-38 for the purpose of
                                    Customer&apos;s transaction.


                                </li>
                                
                            </ol>
                        </li>

                        <li>
                            <b>CORPORATE ACTION</b> 
                            
                            <div class="list-with-paraf">
                                <div class="w-220px">
                                    <ol class="def-list">
                                        <li>
                                            Any right inherent to the Securities owned by the
                                            Customer shall be Customer&apos;s right. In case the Issuer
                                            of Customer&apos;s Securities takes Corporate Action such
                                            as General Meeting of Shareholders (“GMS”) regarding
                                            distribution of dividends, shares bonus, coupon,
                                            interest, principal, conversion right and other rights
                                            inherent to the Securities, BCAS will distribute such
                                            rights to the Customer on the rst day of payment date
                                            for such rights, provided that BCAS has e ectifely
                                            received such rights from the Issuer and/or KSEI. Paraf
                                            Initial

                                        </li>
                                        
                                    </ol>
                                </div>
                                <div class="paraf-box">
                                    <div class="paraf-placeholder border-2px"></div>
                                    <div class="grey-dark-2 text-12px">
                                        Paraf / <i>Initial</i>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                    </ol>
                </div>



            </div>
            
            
        </div>
    </div>



    <!-- PAGE #13 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="18">
                        <ol class="def-list" start="2">
                            <li>
                                Untuk penerimaan hak-hak yang melekat atas Efek tertentu seperti Hak Memesan
                                Efek Terlebih Dahulu, Waran, Opsi maupun hak-hak lain yang pemenuhan/
                                pembayarannya memerlukan prosedur/tata-cara tertentu, pembayaran/distribusinya
                                akan diatur tersendiri oleh BCAS dengan memperhatikan ketentuan peraturan
                                perundangan yang berlaku.
                            </li>

                        </ol>
                        <li>
                            <b>HAK DAN KEWAJIBAN NASABAH</b>
                            <ol class="def-list">
                                <li>
                                    Nasabah berhak memberikan pesanan jual/beli Efek secara langsung di kantor BCAS
                                    atau memberikan pesanan via telepon yang direkam atau melalui faksimili.
                                </li>
                                <li>
                                    Nasabah wajib menjaga kerahasiaan kode Nasabah/nomor rekening Nasabah agar
                                    tidak disalahgunakan oleh pihak lain.
                                    
                                </li>
                                <li>
                                    Nasabah dapat memberikan kuasa kepada pihak ketiga untuk melakukan pesanan
                                    jual/beli di BCAS. Segala tindakan dari penerima kuasa tersebut menjadi tanggung
                                    jawab Nasabah selaku pemberi kuasa. Surat Kuasa tersebut harus ditandatangani di
                                    atas materai dan aslinya wajib diserahkan kepada BCAS sebagai lampiran dokumen
                                    Rekening Efek.
                                </li>
                                <li>
                                    Nasabah berhak untuk sewaktu-waktu meminta laporan dan/atau menguji kesesuaian
                                    antara saldo rekening Efek Nasabah dalam pembukuan Partisipan dengan saldo Efek
                                    Nasabah dalam Sub Rekening Efek.
                                </li>
                                <li>
                                    Nasabah berhak mengajukan keluhan secara tertulis kepada BCAS sehubungan
                                    dengan Transaksi Efek dan/atau layanan BCAS dengan melampirkan bukti-bukti yang
                                    dimiliki.
                                </li>
                                <li>
                                    Nasabah berkewajiban dan bertanggung atas segala pajak yang timbul sehubungan
                                    dengan pelaksanaan hak dan kewajiban Nasabah berdasarkan Perjanjian ini.
                                </li>
                                <li>
                                    Nasabah wajib memperhatikan Rekening Efek dan portofolio Efeknya sendiri dan
                                    memperhatikan dan menentukan sendiri pelaksanaan hak-hak yang timbul dari Efek
                                    yang dimilikinya.
                                </li>
                                <li>
                                    Nasabah wajib menyimpan data-data transaksi, posisi Efek, dan bukti-bukti
                                    pembayaran/penerimaan serta memeriksa laporan yang diterima untuk mengetahui
                                    apabila terjadi kesalahan/kekeliruan dalam laporan.

                                </li>
                                <li>
                                    BCAS dapat meminta Nasabah untuk menyerahkan informasi tambahan atau
                                    dokumen tertentu dalam rangka pengelolaan Rekening Efek.
                                </li>
                                <li>
                                    Dalam hal Nasabah bermaksud untuk menutup Rekening Efek, Nasabah wajib
                                    mengajukan permohonan penutupan Rekening Efek secara tertulis kepada BCAS.
                                </li>
                            </ol>
                        </li>
                        

                        <li>
                            <b>PENUTUPAN DAN/ATAU PEMBATASAN PENGGUNAAN REKENING EFEK</b>
                            <ol class="def-list">
                                <li>
                                    Nasabah setuju bahwa BCAS mempunyai hak sepenuhnya untuk menutup atau
                                    membatasi penggunaan Rekening Efek dengan membatasi perdagangan Efek,
                                    pembayaran dana, pemindahan Efek atau tidak melakukan tindakan apapun atas
                                    Rekening Efek apabila:
                                    <ol class="list-alpha">
                                        <li>
                                            tidak terdapat saldo Efek pada Rekening Efek maupun dana pada Rekening Dana
                                            selama jangka waktu paling lama 6 (enam) bulan berturut-turut; atau
                                        </li>
                                        <li>
                                            dalam waktu 1 (satu) bulan Nasabah melakukan keterlambatan pembayaran lebih
                                            dari 3 (tiga) kali berturut-turut, dengan tidak membebaskan Nasabah dari segala
                                            kewajibannya yang masih terhutang baik kepada BCAS maupun sebagai akibat
                                            Transaksi Efek yang dilakukan oleh Nasabah. Atas tindakan-tindakan tersebut,
                                            BCAS tidak diwajibkan untuk memberikan penjelasan mengenai dasar dari
                                            keputusan tersebut.
                                        </li>
                                        <li>
                                            tidak memenuhi ketentuan pada pasal II ayat 1.
                                        </li>
                                        <li>
                                            tidak memenuhi ketentuan pada pasal V.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Dalam hal BCAS menutup Rekening Efek, maka BCAS berhak (namun tidak
                                    berkewajiban) untuk: 
                                    <ol class="list-alpha">
                                        <li>
                                            membatalkan seluruh atau sebagian instruksi atau perintah Nasabah yang telah
                                            diterima namun belum terlaksana;
                                        </li>
                                        <li>
                                            mengakhiri semua atau sebagian perjanjian atau kontrak yang dibuat antara BCAS
                                            dengan Nasabah;
                                        </li>
                                        <li>
                                            melakukan segala hal yang perlu untuk menutup saldo negatif dana dan Efek
                                            Nasabah pada BCAS, baik dengan menjual ataupun membeli Efek untuk
                                            kepentingan dimaksud dan apabila tindakan tersebut belum dapat menyelesaikan
                                            saldo negatif yang ada, maka Nasabah diharuskan untuk menyetor kekurangan
                                            Efek ataupun dana tersebut pada saat diminta oleh BCAS;
                                        </li>
                                        <li>
                                            menutup Rekening Dana.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    BCAS mempunyai hak sepenuhnya untuk melakukan pemblokiran atas Rekening Efek
                                    Nasabah secara serta merta jika Nasabah tercantum dalam Daftar Terduga Teroris
                                    dan Organisasi Teroris (DTTOT) atau berdasarkan daftar permintaan pemblokiran
                                    yang dikeluarkan oleh lembaga atau instansi pemerintah yang berwenang atau
                                    berdasarkan permintaan pihak lain yang didasari dengan adanya permintaan
                                    pemblokiran dari lembaga atau instansi pemerintah yang berwenang.

                                </li>
                                
                            </ol>
                            
                        </li>

                        <li>
                            <b>JANGKA WAKTU,PERUBAHAN DAN PENGAKHIRAN PERJANJIAN</b> 
                            
                            <ol class="def-list">
                                <li>
                                    Perjanjian ini mulai berlaku terhitung sejak tanggal disetujuinya pemohonan
                                    pembukaan Rekening Efek oleh BCAS (kecuali untuk hal-hal yang berkaitan dengan
                                    hak BCAS untuk menyetujui atau menolak pemohonan pembukaan Rekening Efek
                                    oleh Nasabah yang berlaku sejak tanggal ditandatanganinya Formulir Permohonan
                                    Pembukaan Rekening Efek dan Perjanjian ini) sampai dengan dilakukannya
                                    pengakhiran oleh BCAS dan/atau Nasabah dengan penutupan Rekening Efek.
                                    Pengakhiran Perjanjian ini tidak melepaskan BCAS atau Nasabah dari kewajiban untuk
                                    memenuhi kewajiban yang timbul sebelum diakhirinya Perjanjian ini.
                                </li>
                                <li>
                                    Setiap perubahan atau segala sesuatu yang belum diatur dalam Perjanjian ini akan
                                    diatur lebih lanjut oleh BCAS secara tertulis dan akan diberitahukan terlebih dahulu
                                    kepada Nasabah selambat-lambatnya 30 (tiga puluh) Hari Kerja sebelum berlakunya
                                    perubahan atau penambahan tersebut. Jika tidak ada keberatan yang diajukan
                                    Nasabah setelah 30 (tiga puluh) Hari Kerja sejak pemberitahuan diterima Nasabah,
                                    maka Nasabah dianggap telah menyetujui perubahan atau penambahan tersebut.
                                    Setiap perubahan atau penambahan berdasarkan ketentuan ini merupakan satu
                                    kesatuan dan bagian yang tidak terpisahkan dengan Formulir Permohonan
                                    Pembukaan Rekening Efek dan Perjanjian ini.

                                </li>
                                <li class="mt-28px">
                                    Setiap perubahan, penambahan, perbaikan atau pengurangan ketentuan-ketentuan
                                    terkait dengan atau sebagai pelaksanaan atas Perjanjian ini, termasuk setiap
                                    perubahan, penambahan, perbaikan atau pengurangan yang disebabkan karena
                                </li>
                            </ol>
                        </li>
                        
                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="18">
                        <ol class="def-list" start="2">
                            <li>
                                To receive rights inherent to particular Securities such as Rights Issue, Warrant, Option
                                and other rights, of which completion/payment requires particular procedures, the
                                payment/distribution shall be set forth separately by BCAS subject to the applicable
                                laws.

                            </li>

                        </ol>
                        <li class="mt-16px">
                            <b>CUSTOMER&apos;S RIGHTS AND OBLIGATIONS</b>
                            <ol class="def-list">
                                <li>
                                    The Customer shall be entitled to personally deliver the Securities sales/purchase
                                    order at BCAS o ce or to present the order via recorded phone or fax.
                                </li>
                                <li>
                                    The Customer shall maintain the con dentiality of Customer&apos;s code/account number to
                                    prevent misuse by other party.
                                    
                                </li>
                                <li>
                                    The Customer may authorize third party to make the sales/purchase order at BCAS. All
                                    actions from such proxy of such authorization shall be the liabilities of the Customer as
                                    the authorizer. The Power of Attorney shall be executed on a stamp duty and the
                                    original shall be delivered to BCAS as an attachment of Securities Account document.
                                </li>
                                <li class="mt-12px">
                                    The Customers entitled at any time to request for reports at any time and or to test the
                                    consistency between Customer&apos;s securities account balance in the Participant&apos;s
                                    bookkeeping and the Customer&apos;s Securities balance in Securities Sub-Account.

                                </li>
                                <li>
                                    The Customer shall be entitled to le complaint in writing to BCAS in relation to the
                                    Securities Transaction and/or BCAS services by enclosing evidences held.
                                </li>
                                <li class="mt-12px">
                                    The Customer shall be obliged and hold liable for all taxes arising in relation to the
                                    execution of its rights and obligations hereunder.
                                </li>
                                <li>
                                    The Customer shall attend its Securities Account and Securities portfolio and shall pay
                                    attention to and decide upon itself the execution of rights which arise from its Securities.
                                </li>
                                <li class="mt-12px">
                                    The Customer shall save transactional data, Securities position and evidences of
                                    payment/receipt, and shall verify the reports to identify any fault/error in such reports.

                                </li>
                                <li class="mt-12px">
                                    BCAS may request the Customer to submit additional information or particular
                                    documents in order of Securities Account management.

                                </li>
                                <li>
                                    In case the Customer wishes to close the Securities Account, the Customer shall
                                    submit a Securities Account closing application in writing to BCAS.

                                </li>
                            </ol>
                        </li>
                        

                        <li>
                            <b>SECURITIES ACCOUNT CLOSINGAND/OR USAGE LIMITATION</b>
                            <ol class="def-list">
                                <li>
                                    The Customer agrees that BCAS shall reserve the full title to close or limit usagee of
                                    Securities Account by limiting Securities trading, fund payment, Securities transfer or
                                    by refraining from taking any action against the Securities Account if:

                                    <ol class="list-alpha">
                                        <li class="mt-12px">
                                            there is a zero balance of Securities at the Securities Account or funds at the Fund
                                            Account for a maximum period of 6 (six) consecutive months; or
                                        </li>
                                        <li>
                                            Within 1 (one) month the Customer delayed payment for more than 3 (three)
                                            consecutive times, without release the Customer from all of its outstanding
                                            liabilities either against BCAS and as a consequence of Securities Transaction
                                            which executed by the Customer. For such acts, BCAS shall not be obliged to
                                            provide clari cation with respect to the basis of such decision.

                                        </li>
                                        <li class="mt-12px">
                                            The provisions of Article II Paragraph 1 are not ful lled.
                                        </li>
                                        <li>
                                            The provisions of Article V are not fulfilled
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    In case BCAS closed the Securities Account, then BCAS shall be entitled (but not
                                    obliged) to:
                                    <ol class="list-alpha">
                                        <li>
                                            withdraw all or part of Customer&apos;s instruction which have been received but has not
                                            executed yet;

                                        </li>
                                        <li>
                                            terminate all or part of the agreement or contract entered into by BCAS and the
                                            Customer;
                                        </li>
                                        <li>
                                            take any action necessary to close the negative balance of Customer&apos;s funds and
                                            Securities at BCAS, either by selling or purchasing Securities for such purpose and
                                            if such action has not been able to settle the negative balance, then the Customer
                                            shall deposit the de cit of such Securities or funds when requested by BCAS;
                                        </li>
                                        <li class="mt-12px">
                                            close the Fund Account
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    BCAS reserves the right to block the Customer's Securities Account immediately and in
                                    full e ect in the event that the Customer is listed on the List of Suspected Terrorists and
                                    Terrorist Organizations (DTTOT) or on other list(s) of blocking requests issued by an
                                    authorized governmental institution or agency or based on a request by another party
                                    founded on a blocking request by an authorized governmental institution or agency.


                                </li>
                                
                            </ol>
                            
                        </li>

                        <li class="mt-16px">
                            <b>DURATION, AMENDMENT AND TERMINATION OF AGREEMENT</b> 
                            
                            <ol class="def-list">
                                <li>
                                    This Agreement e ective as of the date of Securities Account opening application
                                    approval by BCAS (except for issues with respect to BCAS&apos;s right to approve or decline
                                    the Securities Account opening application by the Customer e ective as of the
                                    execution date of Securities Account Opening Form and this Agreement) until
                                    termination by BCAS and/or Customer by closing the Securities Account. Termination
                                    of Agreement this shall not release BCAS or Customer from the obligations to comply
                                    with all liabilities which arise prior to termination of this Agreement.

                                </li>
                                <li>
                                    Any amendment or anything which has not been stipulated in this Agreement will be
                                    set forth by BCAS in writing and will be noti ed in advance to the Customer no later
                                    than 30 (thirty) Business Day prior to e ective date of such amendment or addition.
                                </li>
                                <div class="list-with-paraf">
                                    <div class="w-220px">
                                        If there is no objection which submitted by the
                                        Customer after 30 (thirty) Business Day after notification
                                        has been received by the Customer, then the Customer
                                        deemed has. been agree to such amendment or
                                        change. Any amendment or addition based on this
                                        provision is construed as integral and inseparable part
                                        of Application Form of Securities Account Opening and
                                        this Agreement.
                                        <li>
                                            Any amendment, addition, revision or reduction of
                                            provisions with respect to or as implementation of this
                                            Agreement, including any amendment, addition,
                                            revision or reduction which

                                        </li>
                                    </div>
                                    <div class="paraf-box mt-10px">
                                        <div class="paraf-placeholder border-2px"></div>
                                        <div class="grey-dark-2 text-12px">
                                            Paraf / <i>Initial</i>
                                        </div>
                                    </div>
                                </div>
                                
                            </ol>
                        </li>
                        
                    </ol>
                </div>



            </div>
            
            
        </div>
    </div>



    <!-- PAGE #14 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="21">
                        <ol class="def-list" start="4">
                            <div>
                                terjadi perubahan peraturan Bursa Efek, peraturan OJK, Peraturan LKP, Peraturan
                                LPP, maupun peraturan lainnya, hal tersebut akan diberitahukan terlebih dahulu
                                kepada Nasabah selambat-lambatnya 30 (tiga puluh) Hari Kerja sebelum berlakunya
                                perubahan, penambahan, perbaikan atau pengurangan tersebut. Jika setelah 30 (tiga
                                puluh) Hari Kerja sejak pemberitahuan diterima Nasabah dan Nasabah tidak
                                mengajukan keberatan maka Nasabah dianggap telah menyetujui perubahan,
                                penambahan, perbaikan atau pengurangan tersebut.
                            </div>
                            <li>
                                Perjanjian ini dapat diakhiri setiap saat oleh BCAS maupun Nasabah dengan
                                pemberitahuan tertulis kepada pihak lainnya. Apabila Perjanjian ini diakhiri oleh BCAS,
                                maka BCAS akan mengirimkan pemberitahuan penutupan Rekening Efek kepada
                                Nasabah beserta dengan perincian hak yang akan diterima Nasabah atau kewajiban
                                yang harus dipenuhi oleh Nasabah (jika ada).
                            </li>
                            <li>
                                Nasabah wajib melunasi/memenuhi kewajibannya kepada BCAS dalam waktu 3 (tiga)
                                Hari Bursa setelah dikirimkannya pemberitahuan penutupan oleh BCAS. Apabila
                                setelah jangka waktu tersebut Nasabah belum melunasi kewajibannya, BCAS berhak
                                mempergunakan Efek milik Nasabah yang ada dalam Rekening Efek dan/atau dana
                                Nasabah yang ada dalam Rekening Dana dan menjual Efek milik Nasabah yang ada di
                                BCAS untuk melunasi kewajiban Nasabah dengan cara penjualan melalui Pasar
                                Reguler, Pasar Tunai atau Pasar Negosiasi termasuk dengan mekanisme tutup sendiri.
                            </li>
                            <li>
                                Dalam hal pengakhiran Perjanjian oleh Nasabah, pemberitahuan mengenai
                                pengakhiran Perjanjian harus disampaikan kepada BCAS selambat-lambatnya 5 (lima)
                                Hari Bursa sebelum tanggal efektif pengakhiran Perjanjian yang dikehendaki oleh
                                Nasabah.
                            </li>
                            <li>
                                Apabila Perjanjian ini diakhiri, maka seluruh hak Nasabah, baik yang berupa uang
                                maupun Efek yang dimiliki Nasabah (jika ada), akan diserahkan dan/atau ditransfer
                                kepada Nasabah dan/atau ke rekening yang ditentukan oleh Nasabah, setelah
                                dikurangi seluruh kewajiban Nasabah yang masih terhutang kepada BCAS.
                            </li>
                            <li>
                                Apabila pada saat pemberitahuan pengakhiran Perjanjian oleh Nasabah sebagaimana
                                diatur dalam Bagian XX angka 6 ternyata Nasabah masih memiliki kewajiban yang
                                belum dilunasi kepada BCAS, maka kewajiban Nasabah tersebut harus dilunasi dalam
                                waktu 3 (tiga) Hari Kerja setelah pemberitahuan pengakhiran.
                            </li>
                            <li>
                                BCAS dan Nasabah dengan ini melepaskan ketentuan pasal 1266 Kitab UndangUndang Hukum Perdata Indonesia sepanjang dibutuhkannya putusan pengadilan guna
                                pengakhiran perjanjian.

                            </li>
                        </ol>
                        <li>
                            <b>NASABAH PAILIT DAN / ATAU MENINGGAL DUNIA</b>
                            <ol class="def-list">
                                <li>
                                    Apabila terhadap Nasabah telah ditunjuk likuidator,kurator atau perwakilan yang
                                    diberikan kewenangan atau hak berdasarkan hukum atau perjanjian untuk mengurus
                                    dan mengelola hara kekayaan Nasabah, termasuk segala hal yang berkaitan dengan
                                    Rekening Efek dan atau Rekening Dana, maka Nasabah dengan ini membebaskan
                                    BCAS dan tidak akan mengajukan tuntutan apapun kepada BCAS dalam hal BCAS,
                                    setelah menerima pembuktian mengenai penunjukan likuidator,kurator atau perwakilan
                                    tersebut, melaksanakan perintah atau instruksi yang diberikan oleh likuidator,kurator
                                    atau perwakilan tersebut terhadap Rekening Efek dan atau Rekening Dana, dan
                                    dengan ini Nasabah mengakui dan menyatakan bahwa dalam hal demikian BCAS
                                    tidak memiliki kewajiban untuk meminta persetujuan atau kon rmasi Nasabah dalam
                                    melaksanakan perintah atau instruksi tersebut.
                                </li>
                                <li>
                                    Jika Nasabah perorangan meninggal dunia, maka BCAS berhak meminta kepada
                                    (para) ahli waris salinan yang sah atas akta kematian, surat keterangan hak waris, akta
                                    wasiat dan dokumen lain yang menurut pertimbangan BCAS diperlukan untuk
                                    mengetahui (para) ahli waris yang berhak atas Rekening Efek Nasabah yang telah
                                    meninggal dunia tersebut.   
                                    
                                </li>
                                <li>
                                    Dengan penyerahan kekayaan Rekening Efek Nasabah yang meninggal dunia kepada
                                    (para) ahli waris atau pelaksana wasiat sesuai peraturan perundangan yang berlaku
                                    sebagaimana yang disebutkan dalam surat keterangan hak waris atau surat wasiat
                                    atau dokumen lainnya maka BCAS akan menutup Rekening Efek atas nama Nasabah
                                    dan BCAS dibebaskan sepenuhnya dari semua tanggung jawab sehubungan
                                    penyerahan kekayaan Rekening Efek dan Rekening Dana.

                                </li>
                            </ol>
                        </li>
                        <li>
                            <b>PELAYANAN DAN PENYELESAIAN PENGADUAN NASABAH</b>
                            <ol class="def-list">
                                <li>
                                    Nasabah dapat melakukan pengaduan terhadap ketidakpuasan Nasabah terkait
                                    dengan Transaksi Efek dan/atau pelayanan BCAS kepada Nasabah secara tatap
                                    muka atau surat tertulis dengan BCAS disertai dengan dokumen-dokumen pendukung.
                                </li>
                                <li>
                                    BCAS akan menindaklanjuti dan menyelesaikan pengaduan paling lambat 20 (dua
                                    puluh) Hari Kerja setelah tanggal penerimaan pengaduan secara lengkap dari
                                    Nasabah.
                                </li>
                            </ol>
                        </li>
                        

                        <li>
                            <b>PERNYATAAN TERKAIT DENGAN FASILITAS ONLINE TRADING</b>
                            <ol class="def-list">
                                <li>
                                    BCAS dengan ini memberikan izin kepada Nasabah untuk menggunakan Fasilitas
                                    Online Trading, sebagaimana Nasabah setuju untuk menerima Fasilitas Online Trading
                                    dari BCAS, dalam pelaksanaan Transaksi Efek melalui sistem yang telah disediakan
                                    oleh BCAS.
                                    
                                </li>
                                <li>
                                    Nasabah dapat menggunakan Fasilitas Online Trading ini sepanjang telah memenuhi
                                    persyaratan dan mekanisme perdagangan melalui Fasilitas Online Trading.
                                    Penggunaan Fasilitas Online Trading harus mengikuti peraturan yang berlaku di pasar
                                    modal Indonesia.

                                </li>
                                <li>
                                    Nasabah yang menerima Fasilitas Online Trading setuju untuk tidak merubah,
                                    membongkar, memodi kasi, dan/atau menyalahgunakan software/program komputer
                                    dari Fasilitas Online Trading BCAS.
                                </li>
                                <li>
                                    Nasabah yang menggunakan Fasilitas Online Trading dan akan mengambil suatu
                                    tindakan dan atau mengambil keputusan investasi telah memastikan bahwa diri
                                    mereka sebagai orang yang telah cukup umur, cakap hukum, dan mampu untuk
                                    bertindak atau berinvestasi pada produk atau layanan yang disediakan oleh BCAS
                                    sesuai dengan peraturan yang berlaku dalam yuridiksi mereka.
                                </li>
                                <li class="mt-12px">
                                    Nasabah wajib dan bertanggung jawab menjaga kerahasiaan akses Fasilitas Online
                                    Trading yang dimilikinya, termasuk tetapi tidak terbatas pada User ID, Password, dan
                                    PIN serta hal lain yang wajib dijaga kerahasiaanya. Penggunaan akses Fasilitas Online
                                    Trading merupakan tanggung jawab Nasabah sepenuhnya. BCAS menghimbau
                                    Nasabah untuk secara berkala mengganti Password dan/atau PIN untuk menjamin
                                </li>
                            </ol>
                            
                        </li>

                        
                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="21">
                        <ol class="def-list" start="4">
                            <div>
                                caused by changes of Stock Exchange regulation, OJK regulation,LKP regulation, LPP
                                Regulation, or other regulation, such matter will be noti ed in advance to the Customer
                                no later than 30 (thirty) Business Day before e ective date of such amendment,
                                addition, revision or reduction. If after 30 (thirty) Business Day after noti cation has
                                been received by the Customer and the Customer has not submit objection then the
                                Customer deemed has agreed to such amendment, addition, revision or reduction.

                            </div>
                            <li class="mt-12px">
                                This Agreement may be terminated at any time by BCAS and the Customer by written
                                notice to the other. If this Agreement is terminated by BCAS , then BCAS shall deliver
                                a notice of Securities Account closing to the Customer together with the details of right
                                to be received by the Customer or liabilities to be ful lled by the Customer (if any).
                            </li>
                            <li>
                                The Customer shall pay o /ful ll its liabilities to BCAS within 3 (three) Trading Day after
                                closing noti cation delivered by BCAS. If after such period the Customer has not pay o
                                its liabilities, BCAS entitled to use the Customer&apos;s Securities which available in
                                Securities Account and/or Customer&apos;s Fund which available in Fund Account and sell
                                Customer&apos;s Securities which available in BCAS to pay o Customer&apos;s liabilities with
                                means of sale via Reguler Market, Spot Market or Negotiation Market including with
                                cross mechanism.

                            </li>
                            <li class="mt-12px">
                                In case of termination of Agreement by the Customer, notice regarding the termination
                                of Agreement shall delivered to BCAS within 5 ( ve) Trading Days prior to the e ective
                                date of the termination of Agreement which wishes by the Customer.

                            </li>
                            <li class="mt-12px">
                                If this Agreement is terminated, then all Customer&apos;s rights, either funds or Securities
                                owned by the Customer (if any), shall be delivered and/or transferred to the Customer
                                and/or any account designated by the Customer, after deducting all outstanding
                                Customer&apos;s liabilities to BCAS.
                            </li>
                            <li>
                                If at the time of Agreement termination notice by the Customer as set forth in Section
                                XX number 6 the Customer has remaining outstanding liabilities to BCAS , then such
                                liabilities shall be settled within 3 (three) Trading Days after termination notice.
                            </li>
                            <li class="mt-12px">
                                BCAS and the Customer hereby waive provision of article 1266 of the Indonesia Civil
                                Code as long as court decision is needed to agreement termination.

                            </li>
                        </ol>
                        <li class="mt-16px">
                            <b>CUSTOMER&apos;S INSOLVENCY AND/ OR DEATH</b>
                            <ol class="def-list">
                                <li>
                                    If against the Customer has been designated liquidator, curator or representative which
                                    given authority or right based on the law or agreement to manage and administer
                                    property of the Customer, including anything with respect to Securities Account and/or
                                    Fund Account, then the Customer hereby hold harmless BCAS and shall not led any
                                    claim against BCAS in case BCAS, after receiving proof of such liquidator, curator or
                                    representative designation against Securities Account and/or Fund Account, and
                                    hereby the Customer acknowledge and declare that in that case BCAS has no
                                    obligation to request approval or con rmation from the Customer to execute such order
                                    or instruction.

                                </li>
                                <li class="mt-36px">
                                    In case of individual Customer&apos;s death, BCAS shall be entitled to request to its
                                    inheritor(s) valid copies of death certi cate, legal heir certi cate, testamentary
                                    disposition and other documents which with the discretion of BCAS, is required to
                                    identify the inheritor(s) entitled for Customer&apos;s Securities Account who has passed
                                    away.
                                    
                                </li>
                                <li class="mt-12px">
                                    By the delivery of assets from Late Customer Securities Account to its inheritor(s) or
                                    testamentary executor according to the applicable laws as speci ed in legal heir certi
                                    cate or testamentary disposition or other documents, then BCAS shall close the
                                    Securities Account under the name of the Customer and BCAS shall be fully
                                    discharged from all liabilities in relation to the delivery of assets from Securities
                                    Account and Fund Account.


                                </li>
                            </ol>
                        </li>
                        <li>
                            <b>CUSTOMER COMPLAINT SERVICE AND SETTLEMENT</b>
                            <ol class="def-list">
                                <li>
                                    The Customer may complaint to Customer dissatisfaction with respect to Securities
                                    Account and/or BCAS service to the Customer by face to face or written letter with
                                    BCAS enclosed with supporting documents.
                                </li>
                                <li>
                                    BCAS will follow and settle complaint no later than 20 (twenty) Business Day after date
                                    of complaint receipt in complete from the Customer.
                                </li>
                            </ol>
                        </li>
                        

                        <li>
                            <b>STATEMENT RELATED TO ONLINE TRADING FACILITY</b>
                            <ol class="def-list">
                                <li>
                                    BCAS hereby gives license to the Customer to use Online Trading Facility, as the
                                    Customer agrees to receive Online Trading Facility from BCAS in the implementation
                                    of the Securities Transaction through the system which has been provided by BCAS.
                                    
                                </li>
                                <li class="mt-12px">
                                    The Customer may use the Online Trading Facility to the extent that he has ful lled the
                                    requirements and trading mechanism through the Online Trading Facility. The use of
                                    the Online Trading Facility must follow the existing regulation in the Indonesian capital
                                    market.
                                </li>
                                <li>
                                    The Customer who receives the Online Trading Facility not to change, dismantle,
                                    modify, and/or abuse the software/computer program from the BCAS Online Trading
                                    Facility.
                                </li>
                                <li>
                                    The Customers who use the Online Trading Facility and will take an action and/or
                                    make an investment decision have insured that they are people who are grown
                                </li>
                                <div class="list-with-paraf">
                                    <div class="w-220px">
                                        ups or adults, well-versed in law, and able to act or
                                        invest in the product or services provided by BCAS in
                                        accordance with the existing laws and regulations in
                                        their jurisdiction.
                                        <li>
                                            The Customer shall be required and responsible to
                                            keep the access to Online Trading Facility confidential
                                            he has, including but not limited to User ID, Password,
                                            and PIN and any and other matters which shall be kept
                                            con dential. The use of the access of the Online Trading
                                            Facility constitutes full responsibility of
                                        </li>
                                    </div>
                                    <div class="paraf-box mt-10px">
                                        <div class="paraf-placeholder border-2px"></div>
                                        <div class="grey-dark-2 text-12px">
                                            Paraf / <i>Initial</i>
                                        </div>
                                    </div>
                                </div>
                                
                            </ol>
                            
                        </li>

                        
                    </ol>
                </div>

            </div>
            
            
        </div>
    </div>


    <!-- PAGE #15 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="24">
                        <ol class="def-list">
                            <div>
                                kerahasiaannya. Segala macam penyalahgunaan User ID, Password dan/atau PIN
                                yang terjadi atau disebabkan karena kelalaian Nasabah adalah di luar tanggung jawab
                                BCAS.

                            </div>
                        </ol>
                        <li class="mt-16px">
                            <b>PENGGUNAAN FASILITAS ONLINE TRADING</b>
                            <ol class="def-list">
                                <li>
                                    Nasabah memahami, mengetahui, mengakui dan menyetujui segala ketentuan
                                    mengenai penggunaan Fasilitas Online Trading yang ditetapkan oleh BCAS,
                                    khususnya mengenai cara kerja Fasilitas Online Trading, dan menyatakan bahwa
                                    setiap catatan yang dihasilkan secara elektronis oleh Fasilitas Online Trading ini
                                    adalah sah dan dapat menjadi dokumen yang sah dan mengikat Nasabah serta
                                    memiliki kekuatan hukum.
                                </li>
                                <li>
                                    Nasabah memahami, mengetahui, mengakui dan menyetujui serta bertanggung jawab
                                    atas kebenaran dan keabsahan atas semua instruksi yang meliputi, namun tidak
                                    terbatas pada, data pesanan transaksi, instruksi penarikan dana, instruksi exercise
                                    right atau warrant, instruksi penggantian Password dan/atau PIN, yang dimasukkan
                                    dan/atau disampaikan oleh Nasabah dan/atau ditujukan kepada BCAS berdasarkan
                                    data yang diterima oleh BCAS melalui Fasilitas Online Trading sekalipun tanpa disertai
                                    dengan tanda tangan Nasabah. Semua pesanan dan instruksi yang masuk dan/atau
                                    diterima oleh BCAS melalui Fasilitas Online Trading merupakan tanggung jawab
                                    Nasabah dan menjadi bukti yang sah di mata hukum.
                                    
                                </li>
                                <li>
                                    BCAS berhak membatasi dan menghentikan akses Nasabah dalam penggunaan
                                    Fasilitas Online Trading dengan memberitahukan alasannya kepada Nasabah,
                                    termasuk namun tidak terbatas karena alasan pemeliharaan dan perbaikan sistem,
                                    pelanggaran terhadap ketentuan yang diatur dalam Addendum ini dan/atau
                                    persetujuan lain antara BCAS dengan Nasabah, dan atau karena adanya indikasi atau
                                    temuan penggunaan User ID, Password dan/atau PIN oleh pihak yang tidak berhak.

                                </li>
                                <li>
                                    Nasabah dengan ini menyatakan tidak akan menggunakan Fasilitas Online Trading ini
                                    untuk memanipulasi pasar dan/atau tindakan-tindakan lain yang melanggar hukum dan
                                    atau bertentangan dengan peraturan perundang-undangan yang berlaku di pasar
                                    modal.

                                </li>
                                <li>
                                    Nasabah memahami dan mengetahui adanya kemungkinan terjadinya penundaan data
                                    dan pesanan Nasabah. BCAS tidak bertanggung jawab atas kerugian yang mungkin
                                    muncul sebagai akibat dari penundaan tersebut, sepanjang penundaan tersebut terjadi
                                    tidak karena kesalahan BCAS.
                                </li>
                                <li>
                                    Nasabah akan dikenai biaya penggunaan Fasilitas Online Trading sesuai dengan
                                    ketentuan yang berlaku. BCAS berhak sepenuhnya untuk mengubah ketentuan
                                    mengenai besarnya biaya tersebut dengan pemberitahuan kepada Nasabah paling
                                    lambat 30 (tiga puluh) hari kerja sebelum berlakunya perubahan biaya tersebut. Jika
                                    Nasabah tidak mengajukan keberatan terhadap perubahan tersebut dalam waktu 30
                                    (tiga puluh) hari kerja maka Nasabah dianggap telah menyetujui sepenuhnya
                                    perubahan tersebut.
                                </li>
                                <li>
                                    Dalam hal Fasilitas Online Trading tidak berfungsi sebagaimana mestinya, Nasabah
                                    dapat menghubungi Call Center BCAS yang memiliki jalur komunikasi telepon siaga
                                    (hotline) dan tersedia terus-menerus pada setiap hari bursa demi kenyamanan dan
                                    kemudahan Nasabah. BCAS tidak bertanggung jawab atas segala keterlambatan
                                    dalam melaksanakan pesanan Nasabah, baik untuk membeli atau menjual Efek yang
                                    dikarenakan gangguan komunikasi pada Call Center BCAS yang terjadi karena hal-hal
                                    di luar kuasa BCAS termasuk Force Majeure atau Keadaan memaksa yang
                                    menyebabkan Call Center BCAS tidak dapat dihubungi.
                                </li>
                                <li>
                                    Dengan memperhatikan ketentuan angka 7 di atas, dalam hal Nasabah memberikan
                                    pesanan beli dan jual melalui Call Center, maka Call Center akan melakukan veri kasi
                                    terhadap data Nasabah untuk keamanan Nasabah. Nasabah menjamin dan
                                    menyatakan bahwa apabila veri kasi BCAS telah dilakukan dengan baik dan dapat
                                    dibuktikan oleh BCAS, maka Nasabah akan menanggung setiap hak dan kewajiban
                                    yang timbul dari dilaksanakannya pesanan tersebut oleh BCAS.
                                </li>
                                <li>
                                    BCAS akan menyampaikan kon rmasi transaksi yang telah dilakukan Nasabah pada
                                    hari bursa yang sama melalui email kepada Nasabah sesuai dengan alamat email
                                    yang telah didaftarkan pada BCAS. Kon rmasi yang telah dikirimkan oleh BCAS
                                    melalui alamat email tersebut dianggap telah diterima oleh Nasabah pada saat
                                    dikirimkan oleh BCAS, dan dengan ini Nasabah menyetujui bahwa kon rmasi yang
                                    diberikan oleh BCAS melalui email tersebut merupakan kon rmasi yang bersifat akurat
                                    dan benar sesuai dengan transaksi yang dilakukan oleh Nasabah, serta tidak dapat
                                    digugat akurasi dan kebenarannya dan mengikat Nasabah.

                                </li>
                                <li class="mt-12px">
                                    BCAS berhak sepenuhnya dari waktu ke waktu memperbaharui, merevisi, mengubah
                                    dan atau menghentikan suatu bagian fitur Fasilitas Online Trading dengan
                                    pemberitahuan kepada Nasabah.
                                </li>
                            </ol>
                        </li>
                        <li>
                            <b>PENGGUNAAN FASILITAS AUTOMATED ORDERING</b>
                            <ol class="def-list">
                                <li>
                                    Fasilitas Automated Ordering adalah fasilitas pesanan beli dan jual yang dapat
                                    dilakukan secara otomatis apabila pergerakan saham telah memenuhi parameter
                                    tertentu yang telah ditetapkan oleh Nasabah melalui tur yang tersedia pada Fasilitas
                                    Online Trading.
                                </li>
                                <li>
                                    Nasabah dengan ini menyatakan telah memahami dan mengetahui fungsi dan cara
                                    kerja dari masing-masing Automated Ordering ini. Nasabah dengan ini membebaskan
                                    BCAS atas segala klaim kerugian yang mungkin timbul akibat kekeliruan dalam
                                    menggunakan Automated Ordering ini, sepanjang hal tersebut tidak disebabkan oleh
                                    kesalahan BCAS.
                                </li>
                                <li>
                                    Nasabah dengan ini membebaskan BCAS dari segala bentuk tanggung jawab atas
                                    kerugian maupun potensi kerugian yang terjadi, baik secara langsung maupun tidak
                                    langsung dari penggunaan Fasilitas Online Trading oleh Nasabah, yang diakibatkan
                                    oleh segala bentuk gangguan jaringan, hilangnya data, penundaan pengoperasian
                                    sistem Fasilitas Online Trading, virus komputer, kerusakan jaringan komunikasi,
                                    pencurian atau pengrusakan data, perubahan atau penggunaan informasi Nasabah
                                    oleh pihak lain yang tidak berwenang dan gangguan sistem lainnya yang
                                    menyebabkan Fasilitas Online Trading tidak dapat berfungsi sebagaimana mestinya,
                                    sepanjang hal- hal yang disebutkan tersebut tidak disebabkan oleh kesalahan BCAS.

                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="24">
                        <ol class="def-list">
                            <div>
                                the Customer. BCAS appeals the Customer to regularly change his Password and/or
                                PIN in order to guarantee its confidentiality. Any and all abuses of User ID, Password
                                and/or PIN which occur or caused by negligence of the Customer are beyond the
                                responsibility of BCAS.
                            </div>
                        </ol>
                        <li>
                            <b>THE USE OF ONLINE TRADING FACILITY</b>
                            <ol class="def-list">
                                <li>
                                    The Customer understands, knows, acknowledges and approves any and all terms and
                                    conditions regarding the use of the Online Trading Facility stipulated by BCAS,
                                    particularly regarding the working procedure of the Online Trading Facility, and
                                    declares that any note produced electronically by the Online Trading Facility is legal
                                    and may become legal documents and binding the Customer and has legal power.
                                </li>
                                <li>
                                    The Customer understands, knows, acknowledges and approves and holds
                                    responsibility for the truth and legality of any and all instructions which comprise of, but
                                    not limited to, transaction order data, fund withdrawal instruction, exercise right
                                    instruction or warrant, instruction for the change of Password and/or PIN, which is sent
                                    and/or submitted by the Customer and/or addressed to BCAS based on the date
                                    received by BCAS through Online Trading Facility even though it is not accompanied
                                    by signature of the Customer. All orders and instructions which enter and/or are
                                    received by BCAS through the Online Trading Facility constitute the responsibility of
                                    the Customer and become legal evidence before the law.
                                    
                                </li>
                                <li>
                                    BCAS has the right to limit and terminate the access of the Customer in the use of the
                                    Online Trading Facility by notifying their reason to the Customer, including but not
                                    limited to the conditions set forth in this Addendum and/or other agreement between
                                    BCAS and the Customer, and or due to indication or nding of the use of User ID,
                                    Password and/or PIN by the party who has no right.


                                </li>
                                <li class="mt-12px">
                                    The Customer hereby declares not to use this Online Trading Facility to manipulate the
                                    market and/or other actions which violate the law and/or contradictory to the existing
                                    laws and regulations in the capital market.


                                </li>
                                <li class="mt-12px">
                                    The Customer understands and knows about the possibility of delay of data and order
                                    of the Customer. BCAS shall not be responsible to any loss that may arise as the
                                    consequence of the delay to the extent that the delay occurs not due to the mistake of
                                    BCAS.
                                </li>
                                <li>
                                    The Customer will be chargeable for the use of the Online Trading Facility in
                                    accordance with applicable regulations. BCAS has fully the right to amend the
                                    conditions on the amount of the charges with a noti cation to the Customer not later
                                    than a period of 30 (thirty) working days prior to the validity of the change of the
                                    charges. If the Customer fails to submit an objection to such amendment within a
                                    period of 30 (thirty) working days, then the Customer is considered to have fully
                                    approved of the aforesaid changes.
                                </li>
                                <li>
                                    In case the Online Trading Facility fails to function appropriately, the Customer may get
                                    in contact with Call Center BCAS who has hot line communication and is available
                                    continuously on every stock exchange day for the convenience and facility of the
                                    Customer. BCAS holds no any responsibility to any and all delay in implementing the
                                    order of the Customer, either to buy or sell the Securities which due to communication
                                    disturbances or interruption at the Call Center of BCAS which happens due to any and
                                    all matters beyond the power of BCAS including Force Majeure or Emergency which
                                    causes Call Center of BCAS to be unable to be connected.
                                </li>
                                <li>
                                    With due observance of the condition at point 7 above, in case the Customer gives
                                    order for purchase and sales through the Call Center, the Call Center will verify the
                                    data of the Customer for the safety of the Customer. The Customer guarantees and
                                    declares that if the veri cation of BCAS has been conducted properly and may be
                                    evidenced by BCAS, the Customer will bear any and all rights and obligations that
                                    arise from the implementation of the order by BCAS.
                                </li>
                                <li>
                                    BCAS will submit confirmation of the transaction that has been conducted by the
                                    Customer on the same stock exchange day through the e-mail to the Customer in
                                    accordance with the e-mail address that has been registered with BCAS. The con
                                    rmation which has been sent by BCAS through the e-mail address is considered to
                                    have been received by the Customer at the time it is sent by BCAS, and hereby the
                                    Customer agrees that the con rmation which is given by BCAS through the e-mail
                                    constitutes accurate and correct information in accordance with the transaction which
                                    is conducted by the Customer, and may not be claimed of its accuracy and truth and
                                    shall bind the Customer.

                                </li>
                                <li>
                                    BCAS fully has the right from time to time to renew, revise, amend and/or terminate
                                    any part of the features of the Online Trading Facility by a noti cation to the Customer.
                                </li>
                            </ol>
                        </li>
                        <li class="mt-16px">
                            <b>USE OF AUTOMATED ORDERING FACILITY</b>
                            <ol class="def-list">
                                <li>
                                    Automated Ordering Facility is purchase and sales ordering facility which may be
                                    conducted automatically if the movement of shares has ful lled a certain parameter that
                                    has been stipulated by the Customer through features available in the Online Trading
                                    Facility.
                                </li>
                                <li>
                                    The Customer hereby declares to have understood and known about the function and
                                    working procedure of each Automated Ordering. The Customer hereby discharges or
                                    releases BCAS for any and all claims for the loss which may arise as a result of a
                                    mistake in using this Automated Ordering, to the extent that this is not caused by the
                                    mistake of BCAS.
                                </li>
                                <li>
                                    The Customer hereby discharges or releases BCAS from any and all forms of
                                    responsibility to the loss as well as potential loss which happen, both directly and
                                    indirectly from the usage of the Online Trading Facility by the Customer, which is

                                </li>
                                <div class="list-with-paraf">
                                    <div class="w-220px">
                                        caused by any and all forms of network disturbances,
                                        loss of data, delayed operations of the Online Trading
                                        Facility system, computer virus, communication network
                                        damage, theft or destruction of data, change or use of
                                        information of the Customer by other party who is not
                                        authorized and other system disturbances that cause
                                        the Online Trading Facility not to be able to function
                                        appropriately, to the extent that the aforesaid matters
                                        are not caused by the mistake of BCAS.
                                    </div>
                                    <div class="paraf-box mt-10px">
                                        <div class="paraf-placeholder border-2px"></div>
                                        <div class="grey-dark-2 text-12px">
                                            Paraf / <i>Initial</i>
                                        </div>
                                    </div>
                                </div>
                            </ol>
                        </li>
                    </ol>
                </div>

            </div>
            
            
        </div>
    </div>

    
    <!-- PAGE #16 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="26">
                        <li class="mt-16px">
                            <b>PENGHENTIAN PENGGUNAAN AKSES FASILITAS ONLINE TRADING</b>
                            <ol class="def-list">
                                <li>
                                    BCAS berhak melakukan pemblokiran akses Fasilitas Online Trading Nasabah
                                    apabila: 
                                    <ol class="list-alpha">
                                        <li>
                                            Nasabah selama 3 (tiga) bulan berturut-turut tidak melakukan pembayaran atas
                                            biaya penggunaan Fasilitas Online Trading dan tidak memiliki saldo Efek pada
                                            Rekening Efek dan/atau dana pada Rekening Dana; atau
                                        </li>
                                        <li>
                                            Nasabah selama 6 (enam) bulan berturut-turut tidak melakukan pembayaran atas
                                            biaya penggunaan Fasilitas Online Trading namun memiliki saldo Efek pada
                                            Rekening Efek dan/atau dana pada Rekening Dana.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Akses Nasabah terhadap penggunaan Fasilitas Online Trading dapat dibuka kembali
                                    apabila :
                                    <ol class="list-alpha">
                                        <li>
                                            Nasabah yang tidak memiliki saldo Efek pada Rekening Efek dan/atau dana pada
                                            Rekening Dana telah memberikan deposit sebesar Rp 1.000.000,- (satu juta
                                            Rupiah) pada Rekening Dana; atau
                                        </li>
                                        <li>
                                            Nasabah yang memiliki saldo Efek pada Rekening Efek telah menyelesaikan
                                            kewajiban atas pembayaran biaya penggunaan Fasilitas Online Trading yang
                                            tertunggak; dan

                                        </li>
                                        <li>
                                            Nasabah menghubungi Call Center BCAS untuk mengaktifkan kembali akses
                                            penggunaan Fasilitas Online Trading.
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <b>FORCEMAJEURE/KEADAAN MEMAKSA</b><br>
                            Nasabah dengan ini membebaskan BCAS dari segala kerugian yang timbul karena
                            kejadian-kejadian atau keadaan yang berada di luar kendali atau di luar kemampuan
                            BCAS yang mengakibatkan Fasilitas Online Trading tidak dapat bekerja secara
                            normal. Force Majeure atau Keadaan Memaksa tersebut mencakup namun tidak
                            terbatas pada hal-hal sebagai berikut: 
                            <ul class="dot-ul">
                                <li>
                                    terjadinya bencana seperti gempa bumi, banjir, kebakaran dan bencana alam lain
                                    yang memiliki dampak serupa,
                                </li>
                                <li>
                                    terjadinya gangguan keamanan, sosial politik seperti, huru-hara, aksi terorisme,
                                    kerusuhan, sabotase, pemogokan, epidemi atau aktivitas lain yang memiliki
                                    dampak serupa,

                                </li>
                                <li>
                                    terjadinya gangguan infrastruktur seperti adanya gangguan dan/atau terputusnya
                                    jaringan telekomunikasi, listrik atau fasilitas publik lain yang mempengaruhi kinerja
                                    Fasilitas Online Trading.
                                </li>
                            </ul>
                            Nasabah membebaskan BCAS dari segala kerugian, gugatan, denda/penalti dan
                            membebaskan BCAS dari tanggung jawab dan kewajiban yang secara langsung
                            maupun tidak langsung timbul akibat terjadinya Force Majeure atau Keadaan
                            Memaksa.

                        </li>
                        <li>
                            <b>DISCLAIMER</b>
                            <ol class="def-list">
                                <li>
                                    Setiap keputusan investasi yang dibuat setelah membaca atau mendengar informasi
                                    yang diberikan kepada Nasabah oleh BCAS, baik melalui website, Fasilitas Online
                                    Trading, maupun dari karyawan BCAS adalah sepenuhnya keputusan dari Nasabah,
                                    oleh karena itu segala risiko dan akibat dari keputusan investasi tersebut menjadi
                                    tanggung jawab Nasabah.
                                </li>
                                <li>
                                    Nasabah dengan ini menyatakan bertanggung jawab penuh dan akan menanggung
                                    segala biaya, termasuk namun tidak terbatas pada biaya penasihat hukum, klaim,
                                    kerusakan (termasuk namun tidak terbatas pada kerusakan apapun yang bersifat
                                    tidak langsung, kerusakan yang tidak disengaja atau kerusakan apapun yang bersifat
                                    khusus), kerugian (termasuk namun tidak terbatas pada kerugian transaksi atau
                                    hilangnya pendapatan) atau kewajiban lainnya karena ketidakmampuan Nasabah
                                    dalam menggunakan sistem komputer Nasabah maupun Fasilitas Online Trading,
                                    termasuk namun tidak terbatas pada, ketidakmampuan untuk membatalkan order,
                                    pembatasan akses atau gangguan sistem, sepanjang hal tersebut tidak disebabkan
                                    oleh kesalahan BCAS.
                                </li>
                                <li>
                                    BCAS tidak bertanggung jawab terhadap segala akibat yang timbul terkait dengan
                                    penggunaan Fasilitas Online Trading ini, termasuk namun tidak terbatas pada
                                    kegagalan transmisi data, kerusakan data, tidak terkirimnya data baik sebagian
                                    maupun seluruhnya yang terjadi karena alasan di luar kendali BCAS sebagai
                                    penyedia Fasilitas Online Trading. Nasabah mengerti dan menyadari sepenuhnya
                                    akan risiko tersebut dan dengan ini membebaskan BCAS dari segala kerugian yang
                                    sudah dan/ atau mungkin timbul baik pada saat ataupun setelah dipergunakannya
                                    Fasilitas Online Trading.

                                </li>
                            </ol>
                        </li>  
                        <li>
                            <b>KETENTUAN LAIN-LAIN</b>
                            <ol class="def-list">
                                <li>
                                    Semua pemberitahuan atau komunikasi dari Nasabah kepada BCAS harus dikirim
                                    kepada:
                                    <div class="grid-ketentuan-lain">
                                        <div>Nama</div><div>:</div><div>PT BCA Sekuritas</div>
                                        <div>Alamat</div><div>:</div><div>Menara BCA - Grand Indonesia Lt.41, Jakarta Pusat, 10310</div>
                                        <div>Telepon</div><div>:</div><div>+62-21-23587 222,+62-21-2358 7531, +62-21-2358 7532</div>
                                        <div>Faksimili</div><div>:</div><div> +62-21-23587 250, +62-21-23587 300</div>
                                        <div>Email</div><div>:</div><div>cs@bcasekuritas.co.id</div>

                                    </div>
                                    Atau alamat lain yang akan diberitahukan secara tertulis oleh BCAS kepada Nasabah
                                    dari waktu ke waktu dan dianggap telah diterima oleh BCAS apabila sudah ada tanda
                                    bukti penerimaan dari pihak BCAS.
                                </li>
                                <li>
                                    Nasabah dengan ini menyatakan setuju bahwa rekaman pembicaraan melalui telepon
                                    (voice recording) di BCAS, pembukuan-pembukuan, catatan-catatan serta surat-surat
                                    dan dokumen-dokumen lain yang dibuat dan diterbitkan oleh pihak yang sah dan
                                    berwenang mewakili BCAS merupakan bukti yang lengkap dari seluruh transaksi dan
                                    kewajiban Nasabah kepada BCAS berdasarkan Perjanjian ini dan mengikat terhadap
                                    Nasabah. Untuk itu, sepanjang tidak terdapat penipuan, itikad buruk, kelalaian dan/
                                    atau kesalahan yang disengaja oleh BCAS Nasabah memberi kuasa dan wewenang
                                    yang tidak dapat ditarik kembali kepada BCAS untuk menyatakan dan menetapkan
                                    secara tertulis jumlah hutang Nasabah berdasarkan Perjanjian ini, penetapan mana
                                    mengikat secara sah terhadap Nasabah mengenai jumlah kewajiban Nasabah
                                    kepada BCAS dan merupakan bagian yang tidak terpisahkan dari Perjanjian ini BCAS
                                    dan merupakan bagian yang tidak terpisahkan dari Perjanjian ini.
                                </li>
                                <li>
                                    Terhadap Perjanjian ini dan segala dokumen yang berhubungan dengan dan sebagai
                                    akibat dari Perjanjian ini serta akibat hukumnya tunduk pada Hukum Negara Republik
                                    Indonesia.

                                </li>
                                <li>
                                    Dalam hal terjadi sengketa karena cidera janji, wanprestasi dan atau perselisihan
                                </li>
                            </ol>
                        </li>

                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="26">
                        <li class="mt-16px">
                            <b>TERMINATION OF THE USE OF ONLINE TRADING FACILITY ACCESS</b>
                            <ol class="def-list">
                                <li>
                                    BCAS has the right to block the access of the Online Trading Facility of the Customer,
                                    if:
                                    <ol class="list-alpha">
                                        <li>
                                            The Customer for a period of 3 (three) successive months fails to pay the charges
                                            for the usage of the Online Trading Facility and does not have Securities balance
                                            in the Securities Account and/or fund in the Fund Account; or
                                        </li>
                                        <li>
                                            The Customer for a period of 6 (six) successive months fails to pay the charges
                                            for the usage of the Online Trading Facility, but has the Securities balance in the
                                            Securities Account and/or fund in the Fund Account.
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    The access of the Customer to the use of the Online Trading Facility may be
                                    reopened if: 
                                    <ol class="list-alpha">
                                        <li>
                                            The Customer does not have Securities balance in the Securities Account and/or
                                            fund in the Fund Account and has given a deposit in the amount Rp. 1,000,000.-
                                            (one million Rupiahs) in the Fund Account; or
                                        </li>
                                        <li>
                                            The Customer who has Securities balance in the Securities Account has ful lled
                                            his obligation with regard to the payment of usage charges of the outstanding
                                            Online Trading Facility; and


                                        </li>
                                        <li>
                                            The Customer gets in contact with the Call Center of BCAS to re-activate the
                                            access for the usage of the Online Trading Facility.
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <b>FORCEMAJEURE/IRRESISTIBLE CONDITION</b><br>
                            The Customer hereby discharges or releases BCAS from any and all loss that may
                            arise due to events or circumstances which are beyond the control or beyond the
                            capability of BCAS which cause the Online Trading Facility unable to function
                            normally. Force Majeure/Irresistible Condition comprises of however not limited to the
                            following matters:
                            <ul class="dot-ul mt-18px">
                                <li>
                                    The cases of disaster such as earthquake, ood, re and other natural disasters
                                    which have a similar impact;
                                </li>
                                <li>
                                    The cases of security, social political disturbances such as: riots, acts of terrorism,
                                    commotion, sabotage, strike, epidemic or other activities which have similar impact.

                                </li>
                                <li class="mt-12px">
                                    The case of infrastructure disturbances such as the break-down or interruption of
                                    telecommunication network, electricity or other public facilities which a ect the
                                    performance of the Online Trading Facility.
                                </li>
                            </ul>
                            The Customer discharges or releases BCAS from any and all loss, claims, penalty
                            and discharges or releases BCAS from responsibility and obligation which both
                            directly and indirectly may arise as a result of Force Majeure or Irresistible Condition.
                        </li>
                        <li>
                            <b>DISCLAIMER</b>
                            <ol class="def-list">
                                <li>
                                    Any Investment decision made after reading or hearing about the information given to
                                    the Customer by BCAS, both through website, Online Trading Facility and employees
                                    of BCAS is fully the decision of the Customer, therefore any and all risks and
                                    consequences from the investment decision shall become responsibility of the
                                    Customer.
                                </li>
                                <li>
                                    The Customer hereby declares to be fully responsible and will bear any and all
                                    charges, including but not limited to counselor&apos;s legal fee, claim, damages (including
                                    but not limited to any damages whatsoever which is of indirect nature), unintentional
                                    damages or any damages whatsoever which are of special nature), loss (including but
                                    not limited to transactional loss or loss of revenue) or other obligations due to
                                    incapability of the Customer in using the computer system of the Customer as well as
                                    the Online Trading Facility, including but not limited to, incapability to cancel order,
                                    limitation of access or system disturbances, to the extent that such matter is not
                                    caused by the mistake of BCAS.

                                </li>
                                <li class="mt-12px">
                                    BCAS shall not be responsible to any and all consequences that may arise related to
                                    the use of the Online Trading Facility, including but not limited to data transmission
                                    failure, data damages, non-transmitted data both in part and in whole which may
                                    happen due to reasons beyond the control of BCAS as the provider for Online Trading
                                    Facility. The Customer understands and is fully aware of the risk and hereby
                                    discharges or releases BCAS from any and all loss which has and/or may arise both
                                    at the time or after the usage of the Online Trading Facility.


                                </li>
                            </ol>
                        </li>  
                        <li>
                            <b>OTHER PROVISIONS</b>
                            <ol class="def-list">
                                <li>
                                    All notices or communications from the Customer to BCAS shall be addressed to :
                                    <div class="grid-ketentuan-lain mt-12px">
                                        <div>Name</div><div>:</div><div>PT BCA Sekuritas</div>
                                        <div>Address</div><div>:</div><div>Menara BCA - Grand Indonesia Lt.41, Jakarta Pusat, 10310</div>
                                        <div>Phone</div><div>:</div><div>+62-21-23587 222,+62-21-2358 7531, +62-21-2358 7532</div>
                                        <div>Fax</div><div>:</div><div> +62-21-23587 250, +62-21-23587 300</div>
                                        <div>Email</div><div>:</div><div>cs@bcasekuritas.co.id</div>

                                    </div>
                                    Or other addresses to be noti ed in writing by BCAS to the Customer from time to time
                                    and shall be deemed to have been received by BCAS by proper receipt from BCAS.
                                </li>
                                <li>
                                    The Customer hereby declares agrees that conversation record by phone (voice
                                    recording) in BCAS , book keepings, records and letters and other documents which
                                    prepared and issued by the lawfull party and duly represent BCAS shall constitute
                                    complete evidences of all transactions and obligations of the Customer to BCAS
                                    hereunder and bind against the Customer. Therefore, to the extent there is no fraud,
                                    bad faith, negligence and/or wilfull misconduct by BCAS , the Customer irrevocably
                                    grant power of attorney and authorithy to BCAS to declare and determine in writing
                                    the amount of Customer&apos;s debt based on this Agreement, determination of which shall
                                    be lawfully bind the Customer with respect to the amount of Customer&apos;s

                                </li>

                                <div class="list-with-paraf">
                                    <div class="w-220px">
                                        <div>
                                            liabilities to BCAS and shall constitute inseparable part
                                            from this aggrement.
                                        </div>
                                        <li class="mt-18px">
                                            This Agreement and all documents which associated
                                            with and arisefrom this Agreement and all its legal
                                            consequences shall subject to the laws of the Republic
                                            of Indonesia.
                                        </li>
                                        <li>
                                            In the event of a dispute due to breach of contract,
                                            default                                            
                                        </li>
                                    </div>
                                    <div class="paraf-box mt-10px">
                                        <div class="paraf-placeholder border-2px"></div>
                                        <div class="grey-dark-2 text-12px">
                                            Paraf / <i>Initial</i>
                                        </div>
                                    </div>
                                </div>
                                
                            </ol>
                        </li>

                    </ol>
                </div>
            </div>
            
            
        </div>
    </div>


    <!-- PAGE #17 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>PERJANJIAN PEMBUKAAN REKENING EFEK</h1><h2>SECURITIES ACCOUNT OPENING AGREEMENT</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="two-columns">
                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="31">
                        <ol class="def-list" start="5">
                            <div>
                                lainnya sehubungan dengan Perjanjian ini, BCAS dan Nasabah sepakat untuk
                                menyelesaikan perselisihan dengan cara musyawarah untuk mufakat. Apabila
                                musyawarah untuk mufakat yang dilakukan tidak menghasilkan penyelesaian dalam
                                jangka waktu 30 (tiga puluh) hari, BCAS dan Nasabah sepakat untuk menyelesaikan
                                perselisihan melalui Badan Arbitrase Pasar Modal Indonesia (BAPMI) di Jakarta,
                                berdasarkan peraturan-peraturan BAPMI.
                            </div>
                            <li>
                                Apabila salah satu ketentuan dalam Perjanjian ini menjadi tidak berlaku atau tidak
                                dapat dijalankan, maka ketidakberlakuan tersebut tidak mengakibatkan ketentuanketentuan lain dalam Perjanjian ini menjadi tidak berlaku. Dengan memperhatikan
                                ketentuan dalam Bagian XX angka 3 Perjanjian ini, BCAS akan mengubah ketentuan
                                yang menjadi tidak berlaku atau tidak dapat dijalankan tersebut dengan ketentuan lain
                                yang dapat dijalankan.
                            </li>
                            <li>
                                Nasabah dengan ini mengesahkan setiap tindakan BCAS sebagaimana diatur dalam
                                Perjanjian ini, kecuali akibat kelalaian dan kesalahan yang disengaja oleh BCAS.

                            </li>
                            <li>
                                Dalam hal Nasabah mengalami kerugian karena kesalahan dan/atau kelalaian BCAS,
                                maka BCAS wajib membayar ganti rugi kepada Nasabah.
                            </li>
                            <li>
                                Perjanjian ini dibuat dalam Bahasa Inggris dan Bahasa Indonesia, dengan ketentuan
                                bahwa dalam hal terdapat perbedaan penafsiran atau inkonsistensi antara versi
                                Bahasa Inggris dan Bahasa Indonesia, maka versi Bahasa Indonesia yang akan
                                berlaku.
                            </li>
                            <li>
                                Nasabah telah membaca dan mengerti isi dari perjanjian ini dan setuju untuk
                                mengikatkan diri serta mengerti bahwa Perjanjian ini tidak akan berlaku sebelum
                                diterima baik oleh BCAS, sebagaimana terbukti dengan telah ditanda tangan oleh
                                salah satu dari wakilnya yang telah diberi wewenang pada tempat yang telah
                                disediakan dibawah ini.
                            </li>
                            <li>
                                <b>
                                    PERJANJIAN INI TELAH DISESUAIKAN DENGAN KETENTUAN PERATURAN
                                    PERUNDANG-UNDANGAN TERMASUK KETENTUAN PERATURAN OTORITAS
                                    JASA KEUANGAN.
                                </b>
                            </li>
                        </ol>
                        <li>
                            <b>JAMINAN</b>
                            <ol class="def-list">
                                <li>
                                    BCAS tidak berkewajiban untuk membuktikan keaslian dan keabsahan setiap instruksi
                                    yang disampaikan secara elektronik oleh Nasabah. Setiap instruksi Nasabah yang
                                    telah disampaikan oleh BCAS kepada KSEI secara elektronik tidak dapat diubah dan
                                    dicabut kembali apabila instruksi tersebut telah dijalankan oleh KSEI dan segala
                                    instruksi yang dijalankan oleh KSEI tersebut mengikat Nasabah. Nasabah setuju untuk
                                    mengganti kerugian dan membebaskan BCAS dari setiap kerugian atau kerusakan
                                    yang timbul sebagai akibat dari atau berkaitan dengan pelaksanaan instruksi Nasabah
                                    dan/atau Perjanjian ini.
                                </li>
                                <li>
                                    Nasabah menyatakan bahwa setiap keputusan investasi, keputusan untuk menjual
                                    dan/atau membeli Efek diambil oleh Nasabah berdasarkan pertimbangan dan
                                    keputusan Nasabah sendiri oleh karena itu Nasabah membebaskan BCAS dari
                                    tanggung jawab atas segala kerugian, kewajiban, tagihan, gugatan, biaya termasuk
                                    tetapi tidak terbatas pada kewajiban pajak, yang mungkin diderita atau timbul sebagai
                                    akibat dari keputusan Nasabah tersebut.
                                </li>
                                <li>
                                    Nasabah menjamin dan membebaskan BCAS dari segala kerugian, gugatan, atau
                                    tuntutan hukum yang mungkin timbul sebagai akibat disampaikannya informasi dan
                                    data mengenai Nasabah kepada pihak-pihak berwenang oleh BCAS dan Nasabah
                                    menyatakan tidak akan melakukan gugatan atau tuntutan hukum kepada BCAS
                                    apabila BCAS menyampaikan informasi dan data mengenai Nasabah kepada pihakpihak tersebut, sepanjang penyampaian informasi dan data tersebut dilakukan sesuai
                                    dengan ketentuan peraturan perundang-undangan yang berlaku.

                                </li>
                            </ol>

                            Perjanjian ini memuat syarat dan ketentuan yang berlaku dan mengikat BCAS serta
                            Nasabah yang membuka Rekening Efek di BCAS dan menandatangani Formulir
                            Permohonan Pembukaan Rekening Efek.

                        </li>
                        

                    </ol>
                </div>



                <div class="box-half pb-16px flex-col">
                    <ol class="romawi" start="31">
                        <ol class="def-list" start="5">
                            <div>
                                or other disputes in connection with this Agreement, BCAS and Customer agrees to
                                settle the dispute by means of deliberation. If the deliberation fail to produce a
                                settlement within a period of 30 (thirty) days, BCAS and Customer agrees to settle the
                                disputes through the Indonesian Capital Market Arbitration Board (BAPMI) in Jakarta,
                                based on the BAPMI rules.

                            </div>
                            <li class="mt-12px">
                                If any provision of this Agreement becomes invalid or unenforceable, then such
                                invalidity does not result in other provisions of this Agreement are not applicable. With
                                regard to the provisions of Section XX item 3 of this Agreement, BCAS will amend the
                                provision to be invalid or unenforceable with another provision that can enforceable.
                            </li>
                            <li class="mt-22px">
                                the Customer hereby certify any BCAS act as stipulated in this Agreement, except due
                                to negligence and wilfull misconduct by BCAS.

                            </li>
                            <li>
                                In case the Customer su er losses due to error and/or negligence of BCAS, then BCAS
                                shall indemnify BCAS.
                            </li>
                            <li>
                                This Agreement is made in English and Bahasa Indonesia provided that in case of any
                                di erent interpretation or inconsistency between English version and Bahasa Indonesia
                                version, then Bahasa Indonesia version shall prevail.

                            </li>
                            <li>
                                the Customer has read and understood the content of this Agreement and agrees to be
                                bound and understood that this Agreement would not applicable before agreed either
                                by BCAS, as evidenced by has been signed by one of duly representative at the space
                                as provided bellow.

                            </li>
                            <li class="mt-12px">
                                <b>
                                    THIS AGREEMENT HAS BEEN ADJUSTED WITH PROVISIONS OF LAWS
                                    INCLUDING PROVISION OF FINANCIAL SERVICE AUTHORITY REGULATION.
                                </b>
                            </li>
                        </ol>
                        <li class="mt-16px">
                            <b>WARRANTY</b>
                            <ol class="def-list">
                                <li>
                                    The BCAS shall not obliged to prove the authenticity and validity of any instructions
                                    electronically delivered by the Customer. Any Customer&apos;s instruction that have been
                                    delivered by BCAS to KSEI electronically can not be changed and revoked if such
                                    instruction has been executed by KSEI and all instructions which executed by the KSEI
                                    shall bind the Customer. The Customer agrees to indemnify and hold harmless BCAS
                                    of any loss or damage arising from or related to the Customer's instructions and / or
                                    this Agreement.

                                </li>
                                <li class="mt-12px">
                                    The Customer declares that any investment decision, decision to sell and / or purchase
                                    of Securities taken by the Customer is based on the Customer&apos;s own consideration and
                                    decisions therefore the Customer hold harmless BCAS from responsibility for any loss,
                                    liability, claim, suit, cost including but not limited to on tax liabilities, which may be su
                                    ered or incurred as a result of the Customer&apos;s decision.

                                </li>
                                <li class="mt-12px">
                                    The Customer warrants and hold harmless BCAS from any loss, claim, or suit that may
                                    arise due to information and data delivery concerning the Customer to the authorities
                                    by BCAS and the Customer declare shall not make claims or suits againts BCAS if
                                    BCAS convey information and data concerning the Customers to the such parties, as
                                    long as the delivery of information and data is performed in accordance with the
                                    provisions of applicable laws.


                                </li>
                            </ol>
                            <div class="mt-12px">
                                This Agreement contains terms and conditions applicable to and binding BCAS and
                                Customer opening Securities Account with BCAS and signed Securities Account Opening
                                Application Form.
    
                            </div>

                        </li>
                        

                    </ol>
                </div>


            </div>
            
            <div class="center-content">
                <b>Jakarta, 10/06/2022</b>
            </div>

            <div class="two-columns">
                <div class="box-half flex-col center-content ">
                    <div class="center-content mt-24px">
                        <b>Nasabah</b> / <i>Customer</i>
                    </div>
                    <div class="w-318px  border-2px paraf-placeholder"></div>
                    <div class="flex-wrap gap-y-2px mt-6px w-318px">
                        <div class="flex-col w-2 w-26pct">
                            <b>Nama</b>
                            <i>Name</i>
                        </div>
                        <div class="textfield bg-grey-disabled w-70pct"></div>
                        <div class="flex-col w-2 w-26pct">
                            <b>Jabatan</b>
                            <i>Position</i>
                        </div>
                        <div class="textfield bg-grey-disabled w-70pct"></div>
                    </div>
                </div>


                <div class="box-half flex-col center-content ">
                    <div class="center-content mt-24px">
                        <b>Pejabat Berwenang BCAS</b>
                    </div>
                    <div class="w-318px  border-2px paraf-placeholder"></div>
                    <div class="flex-wrap gap-y-2px mt-6px w-318px">
                        <div class="flex-col w-2 w-26pct">
                            <b>Nama</b>
                            <i>Name</i>
                        </div>
                        <div class="textfield bg-grey-disabled w-70pct"></div>
                        <div class="flex-col w-2 w-26pct">
                            <b>Jabatan</b>
                            <i>Position</i>
                        </div>
                        <div class="textfield bg-grey-disabled w-70pct"></div>
                    </div>
                </div>
            </div>




        </div>
    </div>


    <!-- PAGE #18 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            
            <div class="bg-grey-dark-1 text-white center-content py-6px text-12px">
                KETERANGAN LAIN / <i>OTHER INFORMATION</i>
            </div>
            <div class="bg-grey pt-12px">
                <div class="center-content">
                    <b>Mengetahui BCAS dari</b> / <i>knowing BCAS from</i>
                </div>

                <div class="flex-row flex-wrap form-keterangan-lain">
                    
                    <div class="flex-row align-flex-start">
                        <input type="radio" name="" id="">
                        <div class="flex-col">
                            <b>Website:</b>
                            <b><i>Website:</i></b>
                        </div>
                        <div class="textfield w-80px ml-10pt"></div>
                    </div>

                    <div class="flex-row align-flex-start">
                        <input type="radio" name="" id="">
                        <div class="flex-col">
                            <b>Instagram</b>
                            <b><i>USER ID</i></b>
                        </div>
                        <div class="textfield w-80px ml-10pt"></div>
                    </div>

                    <div class="flex-row align-flex-start">
                        <input type="radio" name="" id="">
                        <div class="flex-col">
                            <b>Youtube</b>
                            <b><i>USER ID</i></b>
                        </div>
                        <div class="textfield w-70px ml-10pt"></div>
                    </div>

                    <div class="flex-row align-flex-start">
                        <input type="radio" name="" id="">
                        <div class="flex-col w-80px">
                            <b>Referal</b>
                            <b><i>Referral</i></b>
                        </div>
                        <div class="textfield w-124px ml-10pt"></div>
                    </div>


                    <div class="flex-row align-flex-start">
                        <input type="radio" class=" ml-28px" name="" id="">
                        <div class="flex-col w-136px">
                            <b>Acara, sebutkan</b>
                            <b><i>Event, specify</i></b>
                        </div>
                        <div class="textfield w-300px ml-10pt"></div>
                    </div>

                    <div class="flex-row align-flex-start">
                        <input type="radio" name="" id="">
                        <div class="flex-col w-104px">
                            <b>Iklan, sebutkan dimana</b>
                            <b><i>Please describe from where</i></b>
                        </div>
                        <div class="textfield w-100px ml-10pt"></div>
                    </div>

                    <div class="flex-row align-flex-start">
                        <input type="radio" class=" ml-28px" name="" id="">
                        <div class="flex-col w-136px">
                            <b>Podcast, sebutkan</b>
                            <b><i>Podcast, specify</i></b>
                        </div>
                        <div class="textfield w-300px ml-10pt"></div>
                    </div>

                    <div class="flex-row align-flex-start">
                        <input type="radio" name="" id="">
                        <div class="flex-col w-104px">
                            <b>Lainnya, sebutkan dimana</b>
                            <b><i>Other, specify</i></b>
                        </div>
                        <div class="textfield w-100px ml-10pt"></div>
                    </div>

                </div>
            </div>



        </div>
    </div>

    
    <!-- PAGE #19 -->
    <div class="paper page-agreement">
        <div class="content application-form">
            <div class="box-heading">
                <table>
                    <tr>
                        <td width="80%"><h1>DIISI OLEH BCAS</h1><h2>FILLED OUT BY BCAS</h2></td>
                        <td><img src="{{ config('app.url').'assets/images/logo-grey-bg.JPG' }}" alt="logo"></td>
                    </tr>
                </table>
            </div>

            <div class="grid-cols-3 gap-x-6px gap-y-4px mb-8px">
                <div>
                    <b>No. SID</b> / <i>SID No.</i>
                </div>
                <div>
                    <b>No. C-Best</b> / <i>C-Best No.</i>
                </div>
                <div>
                    <b>No. Rekening Dana</b> / <i>Fund Account No.</i>
                </div>

                <div class="textfield bg-grey-disabled"></div>
                <div class="textfield bg-grey-disabled"></div>
                <div class="textfield bg-grey-disabled"></div>
                
            </div>

            <div class="two-columns">
                
                <div class="box-half pb-16px flex-col">
                    <div class="subheader-1">
                        <b>PERNYATAAN</b> / <i>STATEMENTS</i>
                    </div>
                    <div class="bg-grey p-10px">
                        <b>Saya yang bertanda tangan dibawah ini</b> / <i>I who undersigned in this page</i> <br>
                        <div class="flex-row">
                            <div class="flex align-center w-50pct">
                                <input type="radio" name="" id="" class="mr-2px">
                                <b>Capital Service Consultant</b>
                            </div>
                            <div class="flex align-center w-50pct">
                                <input type="radio" name="" id="" class="mr-2px">
                                <b>Sales Equity</b>
                            </div>

                        </div>
                        <b>
                            menyatakan telah melaksanakan pertemuan langsung (face to face)
                            dengan calon nasabah.
                        </b><br>
                        <i>
                            states that I have condut a face to face meeting with above applicant.
                        </i>
                        <div class="flex-row mb-4px">
                            <input type="radio" name="" id="">
                            <div class="flex-col">
                                <b>Proses face to face telah saya laksanakan pada
                                </b>
                                <i>
                                    Face to face process had been done on
                                </i>
                            </div>
                        </div>

                        <div class="flex-row">
                            <div class="flex-col w-15pct">
                                <b>Tanggal</b>
                                <i>Date</i>
                            </div>

                            <div class="textfield w-15pct mr-8px"></div>

                            <div class="flex-col w-15pct">
                                <b>Bulan</b>
                                <i>Month</i>
                            </div>

                            <div class="textfield w-15pct mr-8px"></div>

                            <div class="flex-col w-15pct">
                                <b>Tahun</b>
                                <i>Year</i>
                            </div>

                            <div class="textfield w-25pct"></div>

                        </div>

                    </div>

                    <div class="subheader-1 flex-col mt-10px">
                        <b>REKOMENDASI SALES EQUITY/MANAGER</b><i>SALES EQUITY/MANAGER RECOMENDATION</i>
                    </div>
                    <div class="bg-grey p-10px">
                        <b>Risiko Nasabah</b> / <i> Customer Risk</i> <br>
                        <div class="flex-row">
                            <div class="flex align-center w-35pct">
                                <input type="radio" name="" id="" class="mr-2px">
                                <b>Rendah</b> / <i>Low</i>
                            </div>
                            <div class="flex align-center w-35pct">
                                <input type="radio" name="" id="" class="mr-2px">
                                <b>Menengah</b> / <i>Medium</i>
                            </div>
                            <div class="flex align-center w-30pct">
                                <input type="radio" name="" id="" class="mr-2px">
                                <b>Tinggi</b> / <i>High</i>
                            </div>
                        </div>
                        <br><br>
                        <div class="flex-row">
                            <div class="flex-col w-60pct">
                                <b>Limit Transaksi yang Diusulkan (Rp)</b>
                                <i>Proposed for Transaction Limit (IDR)</i>
                            </div>
                            <div class="textfield w-40pct"></div>
                        </div>

                    </div>


                    <div class="subheader-1  mt-10px">
                        <b>TANDA TANGAN</b> / <i>SIGNATURE</i>
                    </div>
                    <div class="bg-grey p-10px grid-ttd-staff">
                        <div class="flex-row gap-x-8px">
                            <div class="flex-col w-50pct">
                                <span>
                                    Capital Service Consultant (CSC)
                                </span>
                                <div>
                                    <b>Tanda Tangan</b> / <i>Signature</i>
                                </div>
                                <div class="textfield h-40px">

                                </div>
                            </div>
                            <div class="flex-col w-50pct">
                                <span><b>Tanggal</b> / <i>Date</i></span>
                                <div class="textfield mt-4px"></div>
                                <span><b>Nama</b> / <i>Name</i></span>
                                <div class="textfield mt-4px"></div>
                            </div>
                        </div>

                        <div class="flex-row gap-x-8px">
                            <div class="flex-col w-50pct">
                                <span>
                                    Sales Equity
                                </span>
                                <div>
                                    <b>Tanda Tangan</b> / <i>Signature</i>
                                </div>
                                <div class="textfield h-40px">

                                </div>
                            </div>
                            <div class="flex-col w-50pct">
                                <span><b>Tanggal</b> / <i>Date</i></span>
                                <div class="textfield mt-4px"></div>
                                <span><b>Nama</b> / <i>Name</i></span>
                                <div class="textfield mt-4px"></div>
                            </div>
                        </div>

                        <div class="flex-row gap-x-8px">
                            <div class="flex-col w-50pct">
                                <span>
                                    Sales Manager
                                </span>
                                <div>
                                    <b>Tanda Tangan</b> / <i>Signature</i>
                                </div>
                                <div class="textfield h-40px">

                                </div>
                            </div>
                            <div class="flex-col w-50pct">
                                <span><b>Tanggal</b> / <i>Date</i></span>
                                <div class="textfield mt-4px"></div>
                                <span><b>Nama</b> / <i>Name</i></span>
                                <div class="textfield mt-4px"></div>
                            </div>
                        </div>
                    </div>

                </div>

                

                <div class="box-half pb-16px flex-col">
                    <div class="subheader-1 ">
                        <b>SETORAN AWAL</b> / <i>DEPOSIT</i>
                    </div>
                    <div class="bg-grey p-10px">
                        <div class="flex-wrap">
                            <div class="flex-col w-35pct">
                                <b>Deposit Tunai (Rp)</b>
                                <i>Cash Deposit (IDR)</i>
                            </div>
                            <div class="flex-col textfield w-62pct">
                            </div>

                            <div class="flex-col w-35pct">
                                <b>Deposit Efek</b>
                                <i>Securities Deposit</i>
                            </div>
                            <div class="flex-col textfield w-62pct">
                            </div>
                        </div>

                        <div class="mt-12px mb-8px">
                            <b>Nama Efek </b> / <i>Securities Deposit</i>
                        </div>

                        <ol class="list-nama-efek">
                            <li>
                                <div class="flex-row">
                                    <div class="w-10pct">1</div>
                                    <div class="textfield w-full"></div>
                                </div>
                                <div class="flex-row">
                                    <div class="flex-col w-25pct">
                                        <b>Kode Efek</b>
                                        <i>Securities Code</i>
                                    </div>
                                    <div class="textfield w-25pct mr-20px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Jumlah (lembar)</b>
                                        <i>Amount (share)</i>
                                    </div>
                                    <div class="textfield w-25pct"></div>
                                </div>
                            </li>
                            <li>
                                <div class="flex-row">
                                    <div class="w-10pct">2</div>
                                    <div class="textfield w-full"></div>
                                </div>
                                <div class="flex-row">
                                    <div class="flex-col w-25pct">
                                        <b>Kode Efek</b>
                                        <i>Securities Code</i>
                                    </div>
                                    <div class="textfield w-25pct mr-20px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Jumlah (lembar)</b>
                                        <i>Amount (share)</i>
                                    </div>
                                    <div class="textfield w-25pct"></div>
                                </div>
                            </li>
                            <li>
                                <div class="flex-row">
                                    <div class="w-10pct">3</div>
                                    <div class="textfield w-full"></div>
                                </div>
                                <div class="flex-row">
                                    <div class="flex-col w-25pct">
                                        <b>Kode Efek</b>
                                        <i>Securities Code</i>
                                    </div>
                                    <div class="textfield w-25pct mr-20px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Jumlah (lembar)</b>
                                        <i>Amount (share)</i>
                                    </div>
                                    <div class="textfield w-25pct"></div>
                                </div>
                            </li>
                            <li>
                                <div class="flex-row">
                                    <div class="w-10pct">4</div>
                                    <div class="textfield w-full"></div>
                                </div>
                                <div class="flex-row">
                                    <div class="flex-col w-25pct">
                                        <b>Kode Efek</b>
                                        <i>Securities Code</i>
                                    </div>
                                    <div class="textfield w-25pct mr-20px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Jumlah (lembar)</b>
                                        <i>Amount (share)</i>
                                    </div>
                                    <div class="textfield w-25pct"></div>
                                </div>
                            </li>
                            <li>
                                <div class="flex-row">
                                    <div class="w-10pct">5</div>
                                    <div class="textfield w-full"></div>
                                </div>
                                <div class="flex-row">
                                    <div class="flex-col w-25pct">
                                        <b>Kode Efek</b>
                                        <i>Securities Code</i>
                                    </div>
                                    <div class="textfield w-25pct mr-20px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Jumlah (lembar)</b>
                                        <i>Amount (share)</i>
                                    </div>
                                    <div class="textfield w-25pct"></div>
                                </div>
                            </li>
                            <li>
                                <div class="flex-row">
                                    <div class="w-10pct">6</div>
                                    <div class="textfield w-full"></div>
                                </div>
                                <div class="flex-row">
                                    <div class="flex-col w-25pct">
                                        <b>Kode Efek</b>
                                        <i>Securities Code</i>
                                    </div>
                                    <div class="textfield w-25pct mr-20px"></div>
                                    <div class="flex-col w-25pct">
                                        <b>Jumlah (lembar)</b>
                                        <i>Amount (share)</i>
                                    </div>
                                    <div class="textfield w-25pct"></div>
                                </div>
                            </li>
                            
                        </ol>
                        
                    </div>

                    <div class="subheader-1 mt-10px">
                        <b>PERSETUJUAN</b> / <i>APPROVAL</i>
                    </div>
                    <div class="bg-grey p-10px">
                        <div class="flex-wrap">
                            <div class="flex-col w-40pct">
                                <b>Komisi Transaksi Beli</b>
                                <i>Commision For Buying</i>
                            </div>
                            <div class="flex-col textfield w-57pct">
                            </div>

                            <div class="flex-col w-40pct">
                                <b>Komisi Transaksi Jual</b>
                                <i>Commision For Selling</i>
                            </div>
                            <div class="flex-col textfield w-57pct">
                            </div>

                            <div class="flex-col w-57pct">
                                <b>Limit Transaksi yang Disetujui</b>
                                <i>Approved Trading Limit</i>
                            </div>
                            <div class="flex-col textfield w-40pct">
                            </div>
                        </div>
                       
                    </div>
                </div>


            </div>
            

            <div class="subheader-1  mt-10px">
                <b>PEJABAT BERWENANG</b> / <i>AUTHORISED OFFICER</i>
            </div>
            <div class="bg-grey p-10px">
                <div class="grid-pejabat-berwenang">
                    <div class="flex-col">
                        <div>
                            <b>Nama</b> / <i>Name</i>
                        </div>
                        <div class="textfield"></div>
                        <div>
                            <b>Jabatan</b> / <i>Position</i>
                        </div>
                        <div class="textfield"></div>

                        <div class="flex-row">
                            <div class="flex-col w-50pct">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Setuju</b>
                                        <i>Approve</i>
                                    </div>
                                </div>
                                <div class="flex-row  align-flex-start mt-6px">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Tidak Setuju</b>
                                        <i>Disapprove</i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-col w-50pct">
                                <div>
                                    <b>Tanda Tangan</b> / <i>Signature</i>
                                </div>
                                <div class="textfield signature-box"></div>
                            </div>
                        </div>


                        <div class="mt-6px">
                            <b>Tanggal</b> / <i>Date</i>
                        </div>
                        <div class="textfield"></div>
                    </div>

                    <div class="flex-col">
                        <div>
                            <b>Nama</b> / <i>Name</i>
                        </div>
                        <div class="textfield"></div>
                        <div>
                            <b>Jabatan</b> / <i>Position</i>
                        </div>
                        <div class="textfield"></div>

                        <div class="flex-row">
                            <div class="flex-col w-50pct">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Setuju</b>
                                        <i>Approve</i>
                                    </div>
                                </div>
                                <div class="flex-row  align-flex-start mt-6px">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Tidak Setuju</b>
                                        <i>Disapprove</i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-col w-50pct">
                                <div>
                                    <b>Tanda Tangan</b> / <i>Signature</i>
                                </div>
                                <div class="textfield signature-box"></div>
                            </div>
                        </div>


                        <div class="mt-6px">
                            <b>Tanggal</b> / <i>Date</i>
                        </div>
                        <div class="textfield"></div>
                    </div>

                    <div class="flex-col">
                        <div>
                            <b>Nama</b> / <i>Name</i>
                        </div>
                        <div class="textfield"></div>
                        <div>
                            <b>Jabatan</b> / <i>Position</i>
                        </div>
                        <div class="textfield"></div>

                        <div class="flex-row">
                            <div class="flex-col w-50pct">
                                <div class="flex-row align-flex-start">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Setuju</b>
                                        <i>Approve</i>
                                    </div>
                                </div>
                                <div class="flex-row  align-flex-start mt-6px">
                                    <input type="radio" name="" id="">
                                    <div class="flex-col">
                                        <b>Tidak Setuju</b>
                                        <i>Disapprove</i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-col w-50pct">
                                <div>
                                    <b>Tanda Tangan</b> / <i>Signature</i>
                                </div>
                                <div class="textfield signature-box"></div>
                            </div>
                        </div>


                        <div class="mt-6px">
                            <b>Tanggal</b> / <i>Date</i>
                        </div>
                        <div class="textfield"></div>
                    </div>
                </div>

            </div>


            <div class="catatan-box bg-grey-light-2  mt-10px px-10px py-6px">
                <b>Catatan</b> / <i>Note</i>
            </div>

        </div>
    </div>

    <!-- PAGE BACK-->
    <div class="paper last-page">
        <div class="company-info">
            <img src="assets/images/logo-white-bg.JPG" alt="">
            <b>PT BCA SEKURITAS</b>
            Menara BCA - Grand Indonesia Lt. 41 Jakarta 10310
            <span><b>Phone.</b> +6221-23587222</span>
            <span><b>Fax. </b> +6221-23587250, +6221-23587300</span>
        </div>
    </div>


</body>
</html>