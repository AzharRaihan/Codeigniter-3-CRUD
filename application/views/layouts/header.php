<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--==** Font Awesome Link **==-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <title><?= isset($title) ? $title : 'Index Page' ; ?></title>
  <style>
    h1,h2,h3,h4,h5,h6{
      margin-bottom: 0px;
    }
    section{
      padding: 50px 0px;
    }
    .text-right{
      text-align: right;
    }
    .mb-3 span{
      font-weight: 500;
    }
    .btn-check:focus+.btn, .btn:focus {
      box-shadow: none;
    }
    .btn:active:focus {
    box-shadow: none;
    }
    .bg-light-green{
      background: lightgreen !important;
    }
    .bg-light-blue{
      background: lightblue !important;
    }
    .bg-light-skyblue{
      background: lightskyblue !important;
    }
  </style>
</head>
<body>
  
