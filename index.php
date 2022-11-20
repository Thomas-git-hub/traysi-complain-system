<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Landing Page</title>
</head>
<body class="body-index">
  <?php 
  include_once("includes/navbar.php");

  include("includes/app.php");
  include("includes/auth.php");
  $auth->isLoggedIn();

  ?>

 <div class="container">
    <div class="row row-system-title">
      <div class="col d-flex justify-content-center">
        <img class="cs-logo" src="assets/png/cs-logo-road.png" alt="tcs-logo">
      </div>
      <div class="col d-flex flex-column col-system-title">
        <h1 class="system-title-1">T R A Y S I</h1>
        <h1 class="system-title-2">Complaint & Report Management System</h1>
        <h1 class="system-title-3">Polangui, Albay</h1>
      </div>
    </div>
</div>

<div class="container-fluid">
<div class="container con-mid-con">
  <div class="row row-mid-con">
    <div class="col col-mid-con">
        <h1 class="h1-mid-con-title" style="font-size: 16pt; color: #3198f5; font-weight: 900;">FARE MATRIX OF POLANGUI TRICYCLE ROUTES</h1>
        <h1 class="h1-mid-con-title">As Recommend by the Polangui League of Tricycle Associations and Approved by the Sanggunianng Bayan of Polangui</h1>
    </div>
    <div class="row">
      <h1 class="h1-mid-con-body">I. POBLACION ROUTE (PER PASSENGER) minimum of two (2) and maximum of three (3) passenger per trip.</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. UBALIW - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. BASUD - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C. NAGURANG - 10.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. CENTRO - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. GABON - 10.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. ILAOD - 10.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">G. CABANGAN(per trip) - 40.00</h1>
      </div>
    </div>
  </div>
  <div class="row">
      <h1 class="h1-mid-con-body">II. POBLACION TO THE FF. BARANGAYS (PER TRIP*) min. of 2 maximum of 3</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. SUGCAD - 40.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. LANIGAY (ALONG MAIN ROAD) - 50.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C.  SANTICON - 80.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. BALANGIBANG - 90.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. MATACON - 100.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. EAST MATACON - 100.00</h1>
      </div>
  </div>
  <div class="row">
      <h1 class="h1-mid-con-body">III. POBLACION TO THE FF. BARANGAYS (PER TRIP*) min. of 2 maximum of 3</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. ALNAY - 40.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. PONSO - 50.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C. MENDEZ 60.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. NAPO 60.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. BALINAD - 80.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. BALOGO - 100.00</h1>
      </div>
  </div>
  <div class="row">
      <h1 class="h1-mid-con-body">IV. POBLACION TO THE UPLAND BRGYS. (PER TRIP*) min. of 2 maximum of 3</h1>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">A. PINTOR - 110.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">B. CEPRES (ALONG MAIN ROAD) - 120.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">C. GAMOT - 120.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">D. ITARAN - 130.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">E. MAYNAGA - 140.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">F. LIDONG - 150.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">G. BALABA - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">H. PINAGDAPUGAN - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">I. DANAO - 150.00</h1>
      </div>
      <div class="col">
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">J. ANOPOL - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">K. AMOGUIS - 150.00</h1>
        <h1 class="h1-mid-con-body d-flex justify-content-center mx-2">L. COTMON - 150.00</h1>
      </div>
  </div>   
</div>
</div>

<div class="container con-bot-con">
  <div class="row">
      <div class="col-mid-con">
        <h1 class="h1-mid-con-title" style="font-size: 16pt; color: #3198f5; font-weight: 900; margin-bottom: 30px;">MAGNA CARTA FOR TRICYCLE DRIVERS AND OPERATORS ACT</h1>
    </div>
    <div class="col">
      <p>
        <b>Sec. 4.</b>
        &nbsp;Requirements fo r Operation o f
        Tricycle. - Tricycles shall only be operated
        in accordance with the following
        requirements: a) Subject to the road
        worthiness guidelines and compliance with
        environmental laws prescribed by the
        Department of Transportation (DOTr) thru
        the Land Transportation Office (LTO), the
        cities and municipalities shall continue to
        exercise the power to regulate the
        operation of tricycles and grant permits for
        the operation thereof within their
        territorial jurisdiction. b) For safety
        reasons, no tricycle shall operate on
        national highways where the maximum
        speed limit exceeds forty (40) kiiometers
        per hour. However, the concerned
        Sanggunian may provide exceptions if
        there are no available public transportation
        services or modes servicing the route.
      </p>
      <p>
      &nbsp;&nbsp;&nbsp;Operators shall employ only drivers possessing
        professional licenses duly issued by the LTO. For this
        purpose, the LTO shall issue guidelines, including
        theoretical and practical examinations, appropriate for
        drivers of tricycles. d) The LTO is mandated to formulate
        and issue safety standards and the allowable designs and
        modifications, taking into consideration the needs of the
        vulnerable groups, and determine the limitations on
        passengers and weight capacity. c Cities and Municipalities
        may adopt a color coding scheme for tricycle operating in
        their jurisdiction. They may assign an identification number
        assigned from the license plate number issued by the LTO.
        f) MTOP issued shall be valid for three (3) years, renewable
        for the same period
      </p>
      <p>
      &nbsp;&nbsp;&nbsp;Change of ownership of unit or transfer of
      the MTOP shall be considered as an
      amendment to an MTOP and shall require
      approval of the local government unit (LGU)
      which issued the same. Cities and
      Municipalities shall impose no other
      requirement or condition for 27 tricycle
      operation except those provided in this Act.
      Sec. 7. Rights o f Members o f the Tricycle
      Sector. - Members of the Tricycle 11 Sector
      shall have and enjoy the following rights: 12
      a) Seif-organization to collectively negotiate
      with government and other 13 entities in the
      promotion of their welfare and
      advancement of their interests 14 free from
      any politicai interference or favor; 15 b)
      Informed participation in policy making
      processes relevant to the concerns 16 of
      their sector through their legitimate
      organizations; 17 c) Safe working conditions
      and access to medicai care services; 18 d)
      Freedom from discrimination, violence,
      exploitation, or harassment;
      </p>
    </div>
  </div>
</div>


  
</body>
</html>