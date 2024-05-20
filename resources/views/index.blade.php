<!DOCTYPE html>
<style>
    .small-text {
        font-size: 12px;
    }

    .medium-text {
        font-size: 16px;
    }

    .large-text {
        font-size: 20px;
    }
    
    .sidebar {
        height: 100%;
        width: 180px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #333;
        padding-top: 20px;
    }

    /* Styling for the links inside the sidebar */
    .sidebar a {
        padding: 10px 20px;
        text-decoration: none;
        font-size: 10px;
        color: white;
        display: block;
    }

    /* Styling for the links when hovered */
    .sidebar a:hover {
        background-color: #555;
    }

    /* Styling for the main content area */
    .content {
        margin-left: 250px; /* Same as the width of the sidebar */
        padding: 20px;
    }
</style>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>INTEGRATION</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                
                  <div class="sidebar">
                  <a href="#page-top">Change Log</a>
                  <a href="#about">Notices</a>
                    @foreach ($menus as $menu)
                      <div class="zz">
                        <a href="#page-top" data-toggle="collapse" data-target="#collapse{{ str_replace(' ', '', $menu['title']) }}" aria-expanded="false" aria-controls="collapse{{ str_replace(' ', '', $menu['title']) }}">
                          {{ $menu['title'] }}
                        </a>
                        <div class="collapse pl-2" id="collapse{{ str_replace(' ', '', $menu['title']) }}">
                          @if (count($menu['childs']) > 0)
                            @foreach ($menu['childs'] as $child)
                              @if (!empty($child['subchilds']))
                                  <a href="{{ $child['path']}}" data-toggle="collapse" data-target="#collapse{{ str_replace(' ', '', $child['title']) }}" aria-expanded="false" aria-controls="collapse{{ str_replace(' ', '', $child['title']) }}">{{ $child['title']}}</a>
                                  @foreach ($child['subchilds'] as $sub)
                                  <div class="collapse pl-2" id="collapse{{ str_replace(' ', '', $child['title']) }}">
                                    <a href="{{ $sub['path'] }}">{{ $sub['title']}}</a>            
                                  </div>                    
                                  @endforeach
                              @else
                                <a href="{{ $child['path'] }}">{{ $child['title']}}</a>                                
                              @endif
                            @endforeach
                          @endif
                        </div>
                      </div>   
                    @endforeach
                    <a href="#appendices">Appendices</a> 
                  </div>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Notification Integration</h1>
                        <hr class="divider my-4" />
                
                    <h4 class="text-uppercase text-white font-weight-bold">Change Log</h4>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <table class="table table-dark small-text">
  <thead>
    <tr>
      <th scope="col">version</th>
      <th scope="col">Release Date</th>
      <th scope="col">Summary</th>
      <th scope="col">Updated By</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1.0</th>
      <td>15 Mei 2024</td>
      <td>Service Integration Bagian Implementasi Sistem Integrasi Internal dan Eksternal</td>
      <td>Team Integration Internal & External</td>
    </tr>
 
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Notices</h2>
                        <hr class="divider light my-4" />
                        <div>
                            <h3 class="text-white mt-0 medium-text" style="text-align: left;">Proprietary Rights</h2>
                            <h6 class="text-white mt-0 small-text" style="text-align: left; margin-left: 100px;">The information contained in this document is proprietary and confidential to PT Pos Indonesia (Persero) (next to be called as POS). This material may not be duplicated, published, or disclosed, in whole or in part, without the prior written permission of POS.</h5>
                            <br>
                            <h3 class="text-white mt-0 medium-text" style="text-align: left;">Disclaimer</h2>
                            <h6 class="text-white mt-0 small-text" style="text-align: left; margin-left: 100px;">POS makes no representations or warranties of any kind, express or implied, with respect to the contents of this document. Without limitation, POS specifically disclaims all representations and warranties with respect to this document and any intellectual property rights subsisting therein or any part thereof, including but not limited to any and all implied warranties of title, non-infringement, or suitability for any purpose (whether or not POS has been advised, has reason to know, or is otherwise in fact aware of any information) or achievement of any particular result. Without limitation, POS specifically disclaims all representations and warranties that any practice or implementation of this document will not infringe any third party patents, copyrights, trade secrets or other rights.</h5>
                        </div>
                     
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Services-->
        <section class="page-section" id="services">    
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-center mt-0">Overview</h2>
                <hr class="divider my-4" />
                        <div>
                            <h3  class="medium-text" style="text-align: left;">Specifications</h2>
                            <h6  class="small-text" style="text-align: left; margin-left: 100px;">This document describes the specifications of the Integration Notification API.</h5>
                            <br>
                            <img src="{{asset('overview.jpg')}}">
                            <br>
                            <h3  class="medium-text" style="text-align: left;" id="authentication">Message Specification Format</h2>
                            <h6  class="small-text" style="text-align: left; margin-left: 100px;">1. The Request is using the HTTP POST protocol</h5>
                            <h6  class="small-text" style="text-align: left; margin-left: 100px;">2. The message is sent using JSON format</h5>
                            <h6  class="small-text" style="text-align: left; margin-left: 100px;">3. All request and response parameters use the Lower Camel Case writing style. Camel Case is a way to separate the words in a phrase by making the first letter of each word capitalized and not using spaces. In the Lower Camel Case, the first letter may not be capitalized. Example: username, merchantId, cekPosPenerima, etc.</h5>
                            <br>
                            <h3  class="medium-text" style="text-align: left;">Authentication</h2>
                            <h6  class="small-text" style="text-align: left; margin-left: 100px;">Users must have a token to authorize API notifications by making a request to the JWT Token service. After sending the request, the user will receive a valid token that can be used for the next 1 hour. After exceeding this time, the user must send a request again to get a new token.
*Notes : username and password in this request payload will be sent separate from this document.</h5>
                            <br>
                        
                        <table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
                            
  <thead>
    <tr>
      <th scope="col">Authentication</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">URL Path</th>
      <td>{DEV2 URL}/restv2/posCommonConfigESB.interfaces:jwt/token</td>
    </tr>
    <tr>
      <th scope="row">HTTP Method</th>
      <td>POST</td>
    </tr>
    <tr>
      <th scope="row">HTTP Header</th>
      <td>Authentication = Basic Auth <br>Content-Type = application/json</td>      
    </tr>
    <tr>
      <th scope="row">HTTP Body</th>
      <td>JSON</td>
    </tr>
    <tr>
      <th scope="row">Raw Request</th>
      <td>{
        <br>
            "username": “{username}”
        <br>
          }
</td>
    </tr>
    <tr >
      <th scope="row">Raw Response</th>
      <td>{
        <br>
        "token":<br>
        "eyJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJFU0JfU3VwZXJhcHBzIiwiaXNzIjoiRVNC
        X0pXVF9BVVRIIiwiZXhwIjoxNzE1Njk5MDI4LCJ1c2VybmFtZSI6IkVTQl9TdXBlcmFwcHMifQ.
        CiYDP_64xY5ua3fFId72JYA1nlpWwPJVnoL93s0sKCoFjOzNDlshFy3aV_ys7SZemphQCE-O81z-
        hYP3W3YbsU5snSzYF_jljyvPDwt1GpnD90bOQW3nyiiNKV8_I6O45BsBY4G1nb-5NJqbpMbUf2UQ
        pX4WNXG1OIWUd1nwmL91GGMVwT_Zp7QNAaHYdkITXdIA7AwNzzGcvMt59iO7bKNIpuWuBGB5qJCY
        dNjmjV2x2J_BShs4p2lnGnR4MLYrOON9k05cDOK_M60CjF5yf5a5wfSJ7H3SQFrqnHnvkiT4f7A8
        dgfT12MXLSAvh7IKHBnTh8Dc6HKYI7CGwfVqJQ",
        <br>
        "message": "Success",
        <br>
        "expired": "14/05/2024 15:03:48"
        <br>
          }
      </td>
    </tr>
  </tbody>
</table>
</div>

<h2  class="medium-text" style="text-align: left;"id="cancelorder">Services</h2>
<h6  class="small-text" style="text-align: left; margin-left: 100px;">Services number 1 to 4 usually used by Channel or Agent who provide Courier and Logistic services such as PosAja, PosUMKM, PosSuperApps, etc.</h5>
<br>
<br>

<h3  class="medium-text" style="text-align: left;">1. Callback Cancel Order</h2>
<h6  class="small-text" style="text-align: left; margin-left: 100px;">This service is used in the event of a shipment cancellation by the validator.</h5>                            
<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
  <thead>
    <tr>
      <th scope="col">Parameter</th>
      <th scope="col">Format</th>
      <th scope="col">Request</th>
      <th scope="col">Response</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">type</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Info</td>
    </tr>
    <tr>
      <th scope="row">extId</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Nomor Resi</td>
    </tr>
    <tr>
      <th scope="row">merchantId</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Merchant name (provide by Integration Team)</td>
    </tr>
    <tr>
      <th scope="row">status</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Delivery Status</td>
    </tr>
    <tr>
      <th scope="row">message</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>The message will be sent</td>
    </tr>
    <tr>
      <th scope="row">nomorCekpos</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Cekpos Number</td>
    </tr>
    <tr>
      <th scope="row">pinCekpos</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Cekpos PIN</td>
    </tr>
    <tr>
      <th scope="row">expired</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Expired datetime</td>
    </tr>
    <tr>
      <th scope="row">amount</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Virtual</td>
    </tr>
    <tr>
      <th scope="row">traceId</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Unique number for each request</td>
    </tr>
    <tr>
      <th scope="row">d</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response data</td>
    </tr>
    <tr>
      <th scope="row">m</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response message</td>
    </tr>
 
  </tbody>
</table>

<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">                       
  <thead >
    <tr>
      <th>Callback&nbsp;Cancel&nbsp;Order</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">HTTP URL</th>
      <td>{URLDEV2}/restv2/posNotification.interfaces:notification/kurirNotifications</td>
    </tr>
    <tr>
      <th scope="row">HTTP Method</th>
      <td>POST</td>
    </tr>
    <tr>
      <th scope="row">HTTP Header</th>
      <td>Authentication = Bearer(token) <br>Content-Type = application/json</td>      
    </tr>
    <tr>
      <th scope="row">HTTP Body</th>
      <td>JSON</td>
    </tr>
    <tr>
      <th scope="row">Raw Request</th>
      <td>{
        <br>
            "type": "cancel_order",
        <br>
            "extId": "QOB05091751779695",
        <br>    
            "merchantId": "UMKM",
        <br>
            "status": "50",
        <br>
            "message":"Kiriman anda telah dibatalkan oleh Validator karena ada ketidaksesuaian barang, untuk 
                proses pengembalian dana silahkan datang ke Kantor Pos terdekat dan infokan nomor Cekpos 12131334212 dan Pin 132452 sebelum 19-05-2024 23:00:00", 
            "nomorCekpos":"12131334212",
        <br> 
            "pinCekpos":"132452",
        <br>
            "expired":"19-05-2024 23:00:00",
        <br> 
            "amount":"50000"

        <br>
          }
      </td>
    </tr>
    <tr >
      <th scope="row">Raw Response</th>
      <td>{
        <br>
        "traceId": "6e4d0b9d-0c9c-46ce-b01d-11a27e6cfd8d",
        <br>
        "responseCode": "200",
        <br>
        "responseMessage": "OK",
        <br>
        "requestTime": "May 14, 2024 @ 09:35:46.819",
        <br>
        "responseTime": "May 14, 2024 @ 09:35:46.950",
        <br>
        "response": {
            <br>
            "d": {
                <br>
                "amount": "50000",
                <br>
                "expired": "19-05-2024 23:00:00",
                <br>
                "extId": "QOB05091751779695",
                <br>
                "message": "Kiriman anda telah dibatalkan oleh Validator karena ada ketidaksesuaian barang, 
                untuk proses pengembalian dana silahkan datang ke Kantor Pos terdekat dan infokan nomor Cekpos  12131334212 dan Pin 132452 sebelum 19-05-2024 23:00:00",
                "nomorCekpos": "12131334212",
                <br>
                "pinCekpos": "132452",
                <br>
                "status": "50",
                <br>
                "type": "cancel_order"
            },
            <br>
            "m": "sukses kirim push notification"
        }

            <br>
              }
      </td>
    </tr>
  </tbody>
</table>
<div id="selisih">
<br>
<br>

<h3  class="medium-text" style="text-align: left;">2. Callback VA Selisih</h2>
<h6  class="small-text" style="text-align: left; margin-left: 100px;">This service is used when there is a rate discrepancy with the Validator.</h5>

<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
  <thead>
    <tr>
      <th scope="col">Parameter</th>
      <th scope="col">Format</th>
      <th scope="col">Request</th>
      <th scope="col">Response</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">type</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Info</td>
    </tr>
    <tr>
      <th scope="row">extId</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Nomor Resi</td>
    </tr>
    <tr>
      <th scope="row">merchantId</th>
      <td>string</td>
      <td>✓</td>
      <td></td>
      <td>Merchant name</td>
    </tr>
    <tr>
      <th scope="row">status</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Delivery Status</td>
    </tr>
    <tr>
      <th scope="row">message</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>The message will be sent</td>
    </tr>
    <tr>
      <th scope="row">nomorVa</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Virtual Account Number</td>
    </tr>
    <tr>
      <th scope="row">expired</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Expired datetime</td>
    </tr>
    <tr>
      <th scope="row">amount</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Virtual</td>
    </tr>
    <tr>
      <th scope="row">traceId</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Unique number for each request</td>
    </tr>
    <tr>
      <th scope="row">d</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response data</td>
    </tr>
    <tr>
      <th scope="row">m</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response message</td>
    </tr>
 
  </tbody>
</table>

<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">                        
  <thead>
    <tr>
      <th scope="col">Callback&nbsp;VA&nbsp;Selisih</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">HTTP URL</th>
      <td>{URLDEV2}/restv2/posNotification.interfaces:notification/kurirNotifications</td>
    </tr>
    <tr>
      <th scope="row">HTTP Method</th>
      <td>POST</td>
    </tr>
    <tr>
      <th scope="row">HTTP Header</th>
      <td>Authentication = Bearer(token) <br>Content-Type = application/json</td>      
    </tr>
    <tr>
      <th scope="row">HTTP Body</th>
      <td>JSON</td>
    </tr>
    <tr>
      <th scope="row">Raw Request</th>
      <td>{
          <br>
              "type": "cancel_order",
          <br>
              "extId": "QOB05091751779695",
          <br>    
              "merchantId": "UMKM",
          <br>
              "status": "50",
          <br>
              "message":"Kiriman anda telah dibatalkan oleh Validator karena ada ketidaksesuaian barang, untuk 
                  proses pengembalian dana silahkan datang ke Kantor Pos terdekat dan infokan nomor Cekpos 12131334212 dan Pin 132452 sebelum 19-05-2024 23:00:00", 
              "nomorCekpos":"12131334212",
          <br> 
              "pinCekpos":"132452",
          <br>
              "expired":"19-05-2024 23:00:00",
          <br> 
              "amount":"50000"

          <br>
            }
      </td>
    </tr>
    <tr >
      <th scope="row">Raw Response</th>
      <td>{
        <br>
          "traceId": "6e4d0b9d-0c9c-46ce-b01d-11a27e6cfd8d",
          <br>
          "responseCode": "200",
          <br>
          "responseMessage": "OK",
          <br>
          "requestTime": "May 14, 2024 @ 09:35:46.819",
          <br>
          "responseTime": "May 14, 2024 @ 09:35:46.950",
          <br>
          "response": {
              <br>
              "d": {
                  <br>
                  "amount": "50000",
                  <br>
                  "expired": "19-05-2024 23:00:00",
                  <br>
                  "extId": "QOB05091751779695",
                  <br>
                  "message": "Kiriman anda telah dibatalkan oleh Validator karena ada ketidaksesuaian barang, 
                  untuk proses pengembalian dana silahkan datang ke Kantor Pos terdekat dan infokan nomor Cekpos  12131334212 dan Pin 132452 sebelum 19-05-2024 23:00:00",
                  "nomorCekpos": "12131334212",
                  <br>
                  "pinCekpos": "132452",
                  <br>
                  "status": "50",
                  <br>
                  "type": "cancel_order"
              },
              <br>
              "m": "sukses kirim push notification"
          }

              <br>
                }
      </td>
    </tr>
  </tbody>
</table>
<div id="pickup">
<br>
<br>
<h3  class="medium-text" style="text-align: left;">3. Callback Pickup</h2>
<h6  class="small-text" style="text-align: left; margin-left: 100px;">This service is used during the shipment process by the Pickuper.</h5>

<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
  <thead>
    <tr>
      <th scope="col">Parameter</th>
      <th scope="col">Format</th>
      <th scope="col">Request</th>
      <th scope="col">Response</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">type</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Info</td>
    </tr>
    <tr>
      <th scope="row">extId</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Nomor Resi</td>
    </tr>
    <tr>
      <th scope="row">merchantId</th>
      <td>string</td>
      <td>✓</td>
      <td></td>
      <td>Merchant name</td>
    </tr>
    <tr>
      <th scope="row">status</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Delivery Status</td>
    </tr>
    <tr>
      <th scope="row">message</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>The message will be sent</td>
    </tr>
    <tr>
      <th scope="row">pickuperPhone</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Pickuper Phone Number</td>
    </tr>
    <tr>
      <th scope="row">pickuperNaa</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Pickuper Name</td>
    </tr>
    <tr>
      <th scope="row">traceId</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Unique number for each request</td>
    </tr>
    <tr>
      <th scope="row">d</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response data</td>
    </tr>
    <tr>
      <th scope="row">m</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response message</td>
    </tr>
 
  </tbody>
</table>

<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
                    
  <thead>
    <tr>
      <th scope="col">Callback&nbsp;Pickup</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">HTTP URL</th>
      <td>{URLDEV2}/restv2/posNotification.interfaces:notification/kurirNotifications</td>
    </tr>
    <tr>
      <th scope="row">HTTP Method</th>
      <td>POST</td>
    </tr>
    <tr>
      <th scope="row">HTTP Header</th>
      <td>Authentication = Bearer(token) <br>Content-Type = application/json</td>      
    </tr>
    <tr>
      <th scope="row">HTTP Body</th>
      <td>JSON</td>
    </tr>
    <tr>
      <th scope="row">Raw Request</th>
      <td>{
        <br>
            "type": "pickup",
        <br>
            "extId": "QOB05091751779695",
        <br>    
            "merchantId": "UMKM",
        <br>
            "status": "17",
        <br>
            "message":"Kiriman anda dengan ID.QOB05091751779695 akan dipickup oleh Oranger MAULANA 
            - 0877222222229. Mohon siapkan kiriman yang akan dilakukan pickup",
        <br> 
            "pickuperPhone":"0877222222229",
        <br>
            "pickuperName":"MAULANA"
        <br>
          }
</td>
    </tr>
    <tr >
      <th scope="row">Raw Response</th>
      <td>{
        <br>
    "traceId": "0fb6f14b-f2f7-4949-bce8-62b77722c7f3",
    <br>
    "responseCode": "200",
    <br>
    "responseMessage": "OK",
    <br>
    "requestTime": "May 14, 2024 @ 09:38:00.369",
    <br>
    "responseTime": "May 14, 2024 @ 09:38:00.499",
    <br>
    "response": {
        <br>
        "d": {
            <br>
            "extId": "QOB05091751779695",
            <br>
            "message": "Kiriman anda dengan ID.QOB05091751779695 akan dipickup oleh Oranger 
              MAULANA - 0877222222229. Mohon siapkan kiriman yang akan dilakukan pickup",
            <br>
            "pickuperName": "MAULANA",
            <br>
            "pickuperPhone": "0877222222229",
            <br>
            "status": "17",
            <br>
            "type": "pickup"
        },
        <br>
        "m": "sukses kirim push notification"
    }

        <br>
          }
      </td>
    </tr>
  </tbody>
</table>

<div id="info">
<br>
<br>
                            <h3  class="medium-text" style="text-align: left;">4. Callback Info</h2>
                            <h6  class="small-text" style="text-align: left; margin-left: 100px;">This service is used when there is a change in shipment status.</h5>
                            
                        <table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
  <thead>
    <tr>
      <th scope="col">Parameter</th>
      <th scope="col">Format</th>
      <th scope="col">Request</th>
      <th scope="col">Response</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">type</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Info</td>
    </tr>
    <tr>
      <th scope="row">extId</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Nomor Resi</td>
    </tr>
    <tr>
      <th scope="row">merchantId</th>
      <td>string</td>
      <td>✓</td>
      <td></td>
      <td>Merchant name</td>
    </tr>
    <tr>
      <th scope="row">status</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Delivery Status</td>
    </tr>
    <tr>
      <th scope="row">message</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>The message will be sent</td>
    </tr>
    <tr>
      <th scope="row">traceId</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Unique number for each request</td>
    </tr>
    <tr>
      <th scope="row">d</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response data</td>
    </tr>
    <tr>
      <th scope="row">m</th>
      <td>string</td>
      <td></td>
      <td>✓</td>
      <td>Response message</td>
    </tr>
 
  </tbody>
</table>

<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
                            
  <thead>
    <tr>
      <th scope="col">Callback&nbsp;Info</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">HTTP URL</th>
      <td>{URLDEV2}/restv2/posNotification.interfaces:notification/kurirNotifications</td>
    </tr>
    <tr>
      <th scope="row">HTTP Method</th>
      <td>POST</td>
    </tr>
    <tr>
      <th scope="row">HTTP Header</th>
      <td>Authentication = Bearer(token) <br>Content-Type = application/json</td>      
    </tr>
    <tr>
      <th scope="row">HTTP Body</th>
      <td>JSON</td>
    </tr>
    <tr>
      <th scope="row">Raw Request</th>
      <td>{
        <br>
            "type": "info",
        <br>
            "extId": "QOB05091751779695",
        <br>    
            "merchantId": "UMKM",
        <br>
            "status": "5",
        <br>
            "message":"Kiriman anda saat ini telah melalui proses Posting Loket"
        <br>
          }
</td>
    </tr>
    <tr >
      <th scope="row">Raw Response</th>
      <td>{
        <br>
    "traceId": "86a108b5-f659-454f-a0bd-ee6e7fc94549",
    <br>
    "responseCode": "200",
    <br>
    "responseMessage": "OK",
    <br>
    "requestTime": "May 14, 2024 @ 07:05:17.610",
    <br>
    "responseTime": "May 14, 2024 @ 07:05:17.751",
    <br>
    "response": {
        <br>
        "d": {
            <br>
            "extId": "QOB05091751779695",
            <br>
            "message": "Kiriman anda saat ini telah melalui proses Posting Loket",
            <br>
            "status": "5",
            <br>
            "type": "info"
        },
        <br>
        "m": "sukses kirim push notification"
    }

        <br>
          }
      </td>
    </tr>
  </tbody>
</table>

<div id="transactioninfo">
<br>
<br>
                            <h3  class="medium-text" style="text-align: left;">5. Callback Transaction Info</h2>
                            <h6  class="small-text" style="text-align: left; margin-left: 100px;">This service is used when there is a change in transaction status.</h5>
                            
                        <table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
  <thead>
    <tr>
      <th scope="col">Parameter</th>
      <th scope="col">Format</th>
      <th scope="col">Request</th>
      <th scope="col">Response</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">sender</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Info</td>
    </tr>
    <tr>
      <th scope="row">amount</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Transaction Nominal</td>
    </tr>
    <tr>
      <th scope="row">merchantId</th>
      <td>string</td>
      <td>✓</td>
      <td></td>
      <td>Merchant name</td>
    </tr>
    <tr>
      <th scope="row">account</th>
      <td>string</td>
      <td>✓</td>
      <td>✓</td>
      <td>Account Number of SuperApps</td>
    </tr>
 
  </tbody>
</table>

<table class="table table-dark small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
                            
  <thead>
    <tr>
      <th scope="col">Callback&nbsp;Info</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">HTTP URL</th>
      <td>{URLDEV2}/restv2/posNotification.interfaces:notification/transactionNotifications</td>
    </tr>
    <tr>
      <th scope="row">HTTP Method</th>
      <td>POST</td>
    </tr>
    <tr>
      <th scope="row">HTTP Header</th>
      <td>Authentication = Bearer(token) <br>Content-Type = application/json</td>      
    </tr>
    <tr>
      <th scope="row">HTTP Body</th>
      <td>JSON</td>
    </tr>
    <tr>
      <th scope="row">Raw Request</th>
      <td>{
        <br>
            "sender": "TOP UP REFERRAL",
        <br>
            "amount": "25000",
        <br>    
            "merchantId": "SUPP",
        <br>
            "account": "0100149350"
        <br>
          }
</td>
    </tr>
    <tr >
      <th scope="row">Raw Response</th>
      <td>{
        <br>
    "traceId": "86a108b5-f659-454f-a0bd-ee6e7fc94549",
    <br>
    "responseCode": "200",
    <br>
    "responseMessage": "OK",
    <br>
    "requestTime": "May 14, 2024 @ 07:05:17.610",
    <br>
    "responseTime": "May 14, 2024 @ 07:05:17.751",
    <br>
    "response": {
        <br>
        "s": 200,
        <br>
        "size":2,
        <br>
        "d": {
            <br>
            "Rc": "QOB05091751779695",
            <br>
            "Msg": "Anda telah menerima kiriman uang sebesar Rp 25.000,00 dari TOP UP REFERRAL"
            <br>
        },
        <br>
        "sign": ""
    }

        <br>
          }
      </td>
    </tr>
  </tbody>
</table>


                   
                    </div>
                </div>
            </div>
        </section>
 
        <!-- Contact-->
        <section class="page-section bg-dark text-white" id="appendices">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center" >
                        <h2 class="mt-0" >Appendices</h2>
                        <hr class="divider my-4" />
                        <h4 class="text-uppercase text-white font-weight-bold" style="text-align: left;">URL</h4>
                        <br>
                        <div class="col-lg-12 align-self-baseline">
                        <table class="table table-white small-text" style="text-align: left; max-width: 100%; overflow-x: auto;">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">URLDEV2</th>
      <td>URL Development :  k8s-esbdev-msr2pos-e9dcf6795b-7f4b3484db516652.elb.ap-southeast-3.amazonaws.com:5555 </td>
    </tr>
    <tr>
      <th scope="row">PROD</th>
      <td>URL Production
tbd
</td>
    </tr>
 
  </tbody>
</table>
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted">
                    Copyright &copy;
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    - Team Integration Internal & External
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>