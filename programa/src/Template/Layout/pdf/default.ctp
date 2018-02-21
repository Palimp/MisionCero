<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
   <?= $this->Html->css(WWW_ROOT . '/css/pdf.css') ?>
   <style type="text/css">
    /*! CSS Used from: http://misioncero.binnakle.com/css/bootstrap.min.css */
        @media print{
        *,::after,::before{text-shadow:none!important;box-shadow:none!important;}
        p{orphans:3;widows:3;}
        }
        *,::after,::before{box-sizing:inherit;}
        article{display:block;}
        h5{margin-top:0;margin-bottom:.5rem;}
        p{margin-top:0;margin-bottom:1rem;}
        h5{margin-bottom:.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
        h5{font-size:1.25rem;}
        .row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
        .col{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
        .col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%;}
        .mt-2{margin-top:.5rem!important;}
        .mr-4{margin-right:1.5rem!important;}
        .ml-4{margin-left:1.5rem!important;}
        /*! CSS Used from: http://misioncero.binnakle.com/css/style.css */
        .pz-4{padding:.75rem .75rem 0.25rem .75rem!important;}
        .t5_p{border:3px solid #83A521;font-weight:400;}
        .t5_qw{border:3px solid white;}
        :focus{outline:none!important;}
        ::-moz-selection{color:white;text-shadow:none;background:green;}
        ::selection{color:white;text-shadow:none;background:green;}
        /*! CSS Used from: http://misioncero.binnakle.com/css/bootstrap.min.css */
        @media print{
        *,::after,::before{text-shadow:none!important;box-shadow:none!important;}
        p{orphans:3;widows:3;}
        }
        *,::after,::before{box-sizing:inherit;}
        p{margin-top:0;margin-bottom:1rem;}
        .mb-0{margin-bottom:0!important;}
        /*! CSS Used from: http://misioncero.binnakle.com/css/style.css */
        .progressa{background-color:#eee;}
        .progressa .mb-0{color:#000;white-space:nowrap;}
        .progress-bar{padding:.375rem .625rem;height:initial;}
        .card-block{padding:0.5rem 1rem 0px 1rem;}
        :focus{outline:none!important;}
        ::-moz-selection{color:white;text-shadow:none;background:green;}
        ::selection{color:white;text-shadow:none;background:green;}
   </style>
</head>
<body>
    <div id="container">
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
    </div>
</body>
</html>
