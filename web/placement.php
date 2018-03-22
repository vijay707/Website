<?php  
session_start();
if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="file.css">
<head>
	<title>Placement</title>
	<style>
#myBtn {
	display: none;
	text-decoration: none;
	position: fixed;
	bottom: 79px;
    right: 2%;
	overflow: hidden;
	z-index: 999; 
	width: 35px;
	height: 35px;
	border: none;
	text-indent: 100%;
	background: url(./top-arrow.png) no-repeat 0px 0px;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-o-border-radius: 50%;
	-moz-border-radius: 50%;
}
/*
#myBtn:hover {
  	width: 35px;
	height: 35px;
	display: block;
	overflow: hidden;
	float: right;
	opacity: 0;
	-moz-opacity: 0;
	filter: alpha(opacity=0);
}*/
</style>
</head>
	<body>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="top-arrow.png"></button>
		<?php include './header.php'; ?>
		<table>
			<caption>KG COLLEGE OF ARTS AND SCIENCE<br>DEPARTMENMT OF COMPUTER APPLICATIONS<br>Placement Details 2013-2016</caption>
			<thead>
			<tr>
				<th scope="col">S.No</th>
				<th scope="col">Student Name</th>
				<th scope="col">Designation</th>
				<th scope="col">Company Name,Location</th>
			</tr>
			</thead>
			<tbody>
				<tr>
				<td data-label="S.NO">1</td>
				<td data-label="Name">ANEESH KUMAR.R</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td scope="row" data-label="S.NO">2</td>
				<td data-label="Name">ARAVINDH KUMAR.S</td>
				<td data-label="Designation">Executive</td>
				<td data-label="Company Name,Location">ICICI,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">3</td>
				<td data-label="Name">ARUN KUMAR.R</td>
				<td data-label="Designation">Executive</td>
				<td data-label="Company Name,Location">ICICI,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">4</td>
				<td data-label="Name">DAYAMARIYA</td>
				<td data-label="Designation">Junior Programmer trainee</td>
				<td data-label="Company Name,Location">WIPRO,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">5</td>
				<td data-label="Name">DHIVYA.R</td>
				<td data-label="Designation">Programmer</td>
				<td data-label="Company Name,Location">WIPRO,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">6</td>
				<td data-label="Name">DURAI RAJ.R</td>
				<td data-label="Designation">Tech-support</td>
				<td data-label="Company Name,Location">CAPGEMINI,BANGLORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">7</td>
				<td data-label="Name">GAYATHRI.P</td>
				<td data-label="Designation">Data Processing</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">8</td>
				<td data-label="Name">JAYANTHI.C</td>
				<td data-label="Designation">Tech-support</td>
				<td data-label="Company Name,Location">TCS,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">9</td>
				<td data-label="Name">KAVITHA.B</td>
				<td data-label="Designation">Data Processing</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">10</td>
				<td data-label="Name">KANAGALAKSHMI.R</td>
				<td data-label="Designation">Executive</td>
				<td data-label="Company Name,Location">ACCESS HEALTH CARE,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">11</td>
				<td data-label="Name">MANIVANNAN.N</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">ACCESS HEALTHCARE,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">12</td>
				<td data-label="Name">MANOJ PRABAKAR.M</td>
				<td data-label="Designation">Network Engineer</td>
				<td data-label="Company Name,Location">TCS,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">13</td>
				<td data-label="Name">MOHAMED THOUFIQ.S</td>
				<td data-label="Designation">Executive</td>
				<td data-label="Company Name,Location">IDBI,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">14</td>
				<td data-label="Name">RAGUL.S</td>
				<td data-label="Designation">Junior Programmer trainee</td>
				<td data-label="Company Name,Location">TCS,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">16</td>
				<td data-label="Name">ROHINI.S</td>
				<td data-label="Designation">Trainer</td>
				<td data-label="Company Name,Location">DICOM,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">17</td>
				<td data-label="Name">SARATHA.M</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">18</td>
				<td data-label="Name">SATHEESH.P</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">19</td>
				<td data-label="Name">SHARIKA.G</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">21</td>
				<td data-label="Name">SUBASRI.M</td>
				<td data-label="Designation">Junior Programmer trainee</td>
				<td data-label="Company Name,Location">WIPRO,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">22</td>
				<td data-label="Name">PRAVEEN.R</td>
				<td data-label="Designation">Junior Programmer traineer</td>
				<td data-label="Company Name,Location">INFOSYS,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">23</td>
				<td data-label="Name">UDHAYA KUMAR.S</td>
				<td data-label="Designation">Junior Programmer traineer</td>
				<td data-label="Company Name,Location"CAPGEMINI,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">24</td>
				<td data-label="Name">VENKATESH.E</td>
				<td data-label="Designation">Junior Programmer traineer</td>
				<td data-label="Company Name,Location">WIPRO,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">25</td>
				<td data-label="Name">VANITHAMANI.M</td>
				<td data-label="Designation">Tele Marketing Executive</td>
				<td data-label="Company Name,Location">JUST DIAL,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">26</td>
				<td data-label="Name">VISHNU DEVAN.R</td>
				<td data-label="Designation">Junior Programmer traineer</td>
				<td data-label="Company Name,Location">WIPRO,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">27</td>
				<td data-label="Name">KARTHIK.S</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">28</td>
				<td data-label="Name">VIJAYAKUMAR</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">29</td>
				<td data-label="Name">AJAY.D</td>
				<td data-label="Designation">Data Analyst</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">30</td>
				<td data-label="Name">ARAVINDAN.G</td>
				<td data-label="Designation">Sales Executive</td>
				<td data-label="Company Name,Location">HDFC BANK,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">31</td>
				<td data-label="Name">SHARON.K</td>
				<td data-label="Designation">Sales Executive</td>
				<td data-label="Company Name,Location">HDFC BANK,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">32</td>
				<td data-label="Name">DHANASEKARAN.V</td>
				<td data-label="Designation">Sales Executive</td>
				<td data-label="Company Name,Location">HDFC BANK,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">33</td>
				<td data-label="Name">DHIVYA.V</td>
				<td data-label="Designation">Tele Marketing Executive</td>
				<td data-label="Company Name,Location">EUREKHA FORBES COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">34</td>
				<td data-label="Name">ELANGO.S</td>
				<td data-label="Designation">Assoicate Software Engineer</td>
				<td data-label="Company Name,Location">ACCENTURE,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">35</td>
				<td data-label="Name">GAYATHRI.R</td>
				<td data-label="Designation">Tele Marketing Executive</td>
				<td data-label="Company Name,Location">DELL,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">36</td>
				<td data-label="Name">HARI PRASANTH.S</td>
				<td data-label="Designation">Associate level 1</td>
				<td data-label="Company Name,Location">ICICI,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">37</td>
				<td data-label="Name">JEEVITHA.L</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr> 
				<td data-label="S.NO">38</td>
				<td data-label="Name">HONEY MOL.V.V</td>
				<td data-label="Designation">Assoicate Software Enginner</td>
				<td data-label="Company Name,Location">WIPRO,COCHIN</td>
			</tr>
			<tr>
				<td data-label="S.NO">39</td>
				<td data-label="Name">KARATHIKEYAN.T</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">40</td>
				<td data-label="Name">KESHAVINODHINI.K</td>
				<td data-label="Designation">Programmer</td>
				<td data-label="Company Name,Location">WIPRO,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">41</td>
				<td data-label="Name">J.MANAIVANANAN</td>
				<td data-label="Designation">Risk Management</td>
				<td data-label="Company Name,Location">HOME CREDIT INDIA FINANCE ,BANGALORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">42</td>
				<td data-label="Name">MANIKANDAN.T</td>
				<td data-label="Designation">Data Reporting Specialist</td>
				<td data-label="Company Name,Location">Intra Club Solution,cbe</td>
			</tr>
			<tr>
				<td data-label="S.NO">43</td>
				<td data-label="Name">NISHANTH.T.J</td>
				<td data-label="Designation">Assistant Manager M1</td>
				<td data-label="Company Name,Location">KOTAK MAHINDR,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">44</td>
				<td data-label="Name">PAVITHRA.R</td>
				<td data-label="Designation">Tele Marketing Executive</td>
				<td data-label="Company Name,Location">EUREKHA FORBES,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">45</td>
				<td data-label="Name">PRAKALYA.C.B</td>
				<td data-label="Designation">Sr.Representative of healthcare</td>
				<td data-label="Company Name,Location">NTTDATA,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">46</td>
				<td data-label="Name">RANJANI.G</td>
				<td data-label="Designation">Data Conversion</td>
				<td data-label="Company Name,Location">TNQ,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">47</td>
				<td data-label="Name">RAJEESH.R</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">48</td>
				<td data-label="Name">RINCY BABY</td>
				<td data-label="Designation">Operations Executive</td>
				<td data-label="Company Name,Location">INFOSYS,TRIVANDRUM</td>
			</tr>
			<tr>
				<td data-label="S.NO">49</td>
				<td data-label="Name">SANJEEV KUMAR.M</td>
				<td data-label="Designation">Tele Marketing Executive</td>
				<td data-label="Company Name,Location">EUREKHA FORBES COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">50</td>
				<td data-label="Name">SOUNDAR RAJ.B</td>
				<td data-label="Designation">Test Engineer</td>
				<td data-label="Company Name,Location">WIPRO,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">51</td>
				<td data-label="Name">SREEJA.S</td>
				<td data-label="Designation">Assistant Team Leader</td>
				<td data-label="Company Name,Location">JUST DIAL,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">52</td>
				<td data-label="Name">SUGANYA.R</td>
				<td data-label="Designation">Sales Executive</td>
				<td data-label="Company Name,Location">ICICI,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">53</td>
				<td data-label="Name">SUJITHA.V</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">54</td>
				<td data-label="Name">VANJITH.D</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">55</td>
				<td data-label="Name">VIGNESH.K</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">56</td>
				<td data-label="Name">VIKRAMAN.R</td>
				<td data-label="Designation">Sales Executive</td>
				<td data-label="Company Name,Location">ICICI,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">57</td>
				<td data-label="Name">AJEETH.K</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">58</td>
				<td data-label="Name">ANITHA.G</td>
				<td data-label="Designation">Call Center Executive</td>
				<td data-label="Company Name,Location">AXIS HEALTH CARE,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">59</td>
				<td data-label="Name">BALASUBRAMANIAM.M</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">60</td>
				<td data-label="Name">DILIPRAJA.A</td>
				<td data-label="Designation">Tele Marketing Executive</td>
				<td data-label="Company Name,Location">EUREKHA FORBES,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">61</td>
				<td data-label="Name">DIXSON PRABU.P</td>
				<td data-label="Designation">Programmer</td>
				<td data-label="Company Name,Location">INFOSYS-IT,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">62</td>
				<td data-label="Name">ENIYAN.K</td>
				<td data-label="Designation">Junior Programmer trainee</td>
				<td data-label="Company Name,Location">WIPRO,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">63</td>
				<td data-label="Name">HARISH.S</td>
				<td data-label="Designation">Data Conversion</td>
				<td data-label="Company Name,Location">TNQ,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">64</td>
				<td data-label="Name">JENCY VARGHESE</td>
				<td data-label="Designation">Data Entry Analyst</td>
				<td data-label="Company Name,Location">DELL,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">65</td>
				<td data-label="Name">KALPANA.R</td>
				<td data-label="Designation">Data Conversion</td>
				<td data-label="Company Name,Location">TNQ,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">66</td>
				<td data-label="Name">KAVYA SHREE.S</td>
				<td data-label="Designation">Process Executive</td>
				<td data-label="Company Name,Location">CTS,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">67</td>
				<td data-label="Name">MALARVIZHI.a</td>
				<td data-label="Designation">Data Conversion</td>
				<td data-label="Company Name,Location">TNQ,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">68</td>
				<td data-label="Name">MANOJ KUMAR.B</td>
				<td data-label="Designation">Junior Programmer trainee</td>
				<td data-label="Company Name,Location">WIPRO,BANGALORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">69</td>
				<td data-label="Name">MARY STELLA.N</td>
				<td data-label="Designation">Data Conversion</td>
				<td data-label="Company Name,Location">TNQ,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">70</td>
				<td data-label="Name">MOHANA PRIYA.V</td>
				<td data-label="Designation">Programmer</td>
				<td data-label="Company Name,Location">TECH MAHINDRA,CHENNAI</td>
			</tr>
			<tr>
				<td data-label="S.NO">71</td>
				<td data-label="Name">NIVEDA.V</td>
				<td data-label="Designation">Junior Programmer trainee</td>
				<td data-label="Company Name,Location">WIPRO,BANGLORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">72</td>
				<td data-label="Name">PAVITHRA.S</td>
				<td data-label="Designation">Call Centre Executive</td>
				<td data-label="Company Name,Location">AXIS HEALTH CARE,COIMBATORE</td>
			</tr>
			<tr>
				<td data-label="S.NO">73</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">74</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">75</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">76</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">77</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">78</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">79</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">80</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">81</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">82</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">83</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">84</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">85</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">86</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
			<tr>
				<td data-label="S.NO">87</td>
				<td data-label="Name"></td>
				<td data-label="Designation"></td>
				<td data-label="Company Name,Location"></td>
			</tr>
		</tbody>
		</table>
		<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

		 <!--<?php include './footer.php'; ?>-->
	</body>
	
</html>
<?php
}else{
    header("Location:login.php");
}
?>