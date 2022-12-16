<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nelundaar Challenge</title>

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=2.0, minimum-scale=0, user-scalable=yes"/>
  <!-- My Style Tweaks -->
  <style>
    @media screen and (max-width: 400px) {body {font-size:40%}}
    @media screen and (min-width: 600px) {body {font-size:60%}}
    @media screen and (min-width: 800px) {body {font-size:80%}}
    @media screen and (min-width: 1000px) {body {font-size:100%}}
    @media screen and (min-width: 1200px) {body {font-size:110%}}
    @media screen and (min-width: 1400px) {body {font-size:120%}}
    @media screen and (min-width: 1600px) {body {font-size:130%}}
    @media screen and (min-width: 1800px) {body {font-size:140%}}
    @media screen and (min-width: 2000px) {body {font-size:150%}}

    @media screen and (min-height: 200px) {table.table-fixedheader>tbody {height: 100px;}}
    @media screen and (min-height: 300px) {table.table-fixedheader>tbody {height: 200px;}}
    @media screen and (min-height: 400px) {table.table-fixedheader>tbody {height: 300px;}}
    @media screen and (min-height: 500px) {table.table-fixedheader>tbody {height: 400px;}}
    @media screen and (min-height: 600px) {table.table-fixedheader>tbody {height: 500px;}}
    @media screen and (min-height: 700px) {table.table-fixedheader>tbody {height: 600px;}}
    @media screen and (min-height: 800px) {table.table-fixedheader>tbody {height: 700px;}}
    @media screen and (min-height: 900px) {table.table-fixedheader>tbody {height: 800px;}}
    @media screen and (min-height: 1000px) {table.table-fixedheader>tbody {height: 900px;}}
    @media screen and (min-height: 1100px) {table.table-fixedheader>tbody {height: 1000px;}}
    @media screen and (min-height: 1200px) {table.table-fixedheader>tbody {height: 11000px;}}

    ::-webkit-scrollbar {
        display: none;
    }
    
    a {
      color: inherit; /* inherit colors */
      text-decoration: inherit; /* no underline */
    }
    
    .two-column{
      width: 10em;
    }
    .name{
      width: 50%:
    }
    .points{
      width: 50%;
    }
    .date{
      width: 3%;
    }
    .time{
      width: 2%;
    }
    .tv{
      width: 2%;
    }
    .bowl{
      width: 7%;
      overflow: auto;
    }
    .teamname{
      width: 6%;
      overflow: auto;
    }
    .table {
      white-space: nowrap;
      text-align: left;
    }
    .table-hover tbody tr:hover td {
      background: orange;
    }

    table.table-fixedheader {
      -ms-overflow-style: none;
      width: 1000em;
    }
    table.table-fixedheader,
    table.table-fixedheader>thead,
    table.table-fixedheader>tbody,
    table.table-fixedheader>thead>tr,
    table.table-fixedheader>tbody>tr,
    table.table-fixedheader>thead>tr>th,
    table.table-fixedheader>tbody>td {
      display: block;
    }
    table.table-fixedheader>thead>tr:after,
    table.table-fixedheader>tbody>tr:after {
      content: ' ';
      display: block;
      visibility: hidden;
      clear: both;
    }
    table.table-fixedheader>tbody {
      overflow-y: auto;
    }
    table.table-fixedheader>thead {
      overflow-y: auto;
    }
    table.table-fixedheader>thead::-webkit-scrollbar{
      background-color: inherit;
    }
    table.table-fixedheader>thead>tr>th,
    table.table-fixedheader>tbody>tr>td {
      float: left;
    }
  </style>
</head>
