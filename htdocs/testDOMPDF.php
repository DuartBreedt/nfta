<?php

    require_once '../libraries/dompdf/autoload.inc.php';

    use Dompdf\Dompdf;

    $clubName = "Border Field Trial Competition";
    $date = date("M Y");
    $count = 1;
    
    

    $html = "<html>
    			<head>
    				<style>
                    body .footer {
                        text-align: center;
                        position: fixed;
                        height: 150px;
                        bottom: -150px;
                    }
                    body .page {
                        width: 100%;
                        text-align: center;
                        page-break-after: always;
                    }
    				body .cover-page {
                        margin: -1.2cm;
                        padding: 20px;
    					color: #333;
    				}
                    body .cover-page img {
                        width: 150px;
                    }
                    body .left-align {
                        text-align: left;
                    }
    				</style>
    			</head>
    			<body>";

            
		$html .=    "<div class='page cover-page'>
                        <img src='images/logo-b.png' />
                        <h1>$clubName</h1>
                        <h2>In Association With The National Field Trials Association</h2>
    					<p>$date</p>
    				</div>";

		$html .=    "<div class='page preface'>
    					<p>We strongly advise participants to read through this manual is preparation of the trials</p>
                        <div class='footer'><p>Page $count</p></div>
    				</div>";

        $html .=    "<div class='page left-align'>
                        <h3>Judges</h3>
                        <ul>
                            <li>Bruno</li>
                            <li>Paul</li>
                        </ul>
                        <div class='footer'><p>Page $count</p></div>";
        $html .=    "</div>
    			</body>
    		</html>";


	// instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('A4', 'portrait');

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream();

    ?>