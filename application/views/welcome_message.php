<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Evaluasi Online</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{baseUrl}assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{baseUrl}assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="{baseUrl}assets/css/form-elements.css">
        <link rel="stylesheet" href="{baseUrl}assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{baseUrl}assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{baseUrl}assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{baseUrl}assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="{baseUrl}assets/ico/apple-touch-icon-57-precomposed.png">
        <style type="text/css">
            .dropbtn {
                background-color: #4CAF50;
                color: #FFFFFF;
                padding: 10px 15px 10px 15px;
                font-size: 16px;
                border: none;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #FFF;
                min-width: 200px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 6px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #ddd}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
            }
        </style>
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong><img src="{baseUrl}assets/img/eval-logo.png"></img>Lembaga Administrasi Negara</strong></h1>
							<p><h1>Pusdiklat Kepemimpinan Aparatur Nasional</h1></p>
                            <div class="description">
                            	<p>
	                            	Eniline adalah Situs Evaluasi Penilaian Online Penyelenggaraan Diklatpim. 
	                            	Anda dapat mengunjungi Laman situs resmi <a href="puskan.lan.go.id"><strong>Pusdiklat KAN</strong></a>, untuk informasi lainnya.
                            	</p>
                            </div>
                        </div>
                    </div>

				<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>Evaluasi Penyelenggaraan Seleksi:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1" href="/eniline/home.php">Latpim  Tk. I Tahun 2018</a>
                        	</div>
                        </div>
                    </div>

		 <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>Daftar Kode Evaluasi:</h3>
                        	<!-- <div class="social-login-buttons"> -->
                            <div>
                                <!-- <button class="btn btn-default">Latpim Tk. I</button>
                                <button class="btn btn-default">Latpim Tk. II</button> -->
                                
                                <div class="dropdown">
                                    <button class="dropbtn">Latpim Tk. I</button>
                                    <div class="dropdown-content">
                                        <a href="/eniline/latpim1/angkatan38.html">Angkatan XXXVIII</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="dropbtn">Latpim Tk. II</button>
                                    <div class="dropdown-content">
                                        <a href="/eniline/latpim2/angkatan1.html">Angkatan I</a>
                                        <a href="/eniline/latpim2/angkatan2.html">Angkatan II</a>
                                        <a href="/eniline/latpim2/angkatan3.html">Angkatan III</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="dropbtn">Latpim Tk. III</button>
                                    <div class="dropdown-content">
                                        <a href="/eniline/latpim3/angkatan1.html">Angkatan I</a>
                                        <a href="/eniline/latpim3/angkatan2.html">Angkatan II</a>
                                        <a href="/eniline/latpim3/angkatan3.html">Angkatan III</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="dropbtn">Latpim Tk. IV</button>
                                    <div class="dropdown-content">
                                        <a href="/eniline/latpim4/angkatan1.html">Angkatan I</a>
                                        <a href="/eniline/latpim4/angkatan2.html">Angkatan II</a>
                                        <a href="/eniline/latpim4/angkatan3.html">Angkatan III</a>
                                    </div>
                                </div>
	                        	<!-- <a class="btn btn-link-1" href="/eniline/latpim1">Latpim  Tk. I</a>
	                        	<a class="btn btn-link-1" href="/eniline/latpim2">Latpim Tk. II</a>
            					<a class="btn btn-link-1" href="#">Latpim Tk. III</a>
            					<a class="btn btn-link-1" href="#">Latpim Tk. IV</a> -->                             
                        	</div>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Masuk ke form Evaluasi</h3>
                            		<p>Isi kode form dan NDH anda pada kotak di bawah ini:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="cek.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label>Username</label>
			                        	<input type="text" maxlength="4" name="password" placeholder="Kode Form Evaluasi..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" maxlength="2" name="ndh" placeholder="NDH Anda..." class="form-username form-control" id="form-username">
			                        </div>
			                        <button type="submit" class="btn">Masuk</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="{baseUrl}assets/js/jquery-1.11.1.min.js"></script>
        <script src="{baseUrl}assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="{baseUrl}assets/js/jquery.backstretch.min.js"></script>
        <script src="{baseUrl}assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>