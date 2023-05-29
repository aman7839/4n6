<!DOCTYPE html>
<html>
<head>
    <title>4n6.com</title>
    <style>
        ul{
            padding: 0;
            padding-left: 30px;
        }
        li{
            list-style: inside;
            margin: 10px 0px;
        }
        .hilight{
            color: #ef8a17;
        }
        .spacing{
            margin: 10px 0px;
            /* text-transform: capitalize */
        }
    </style>
</head>
<body>
    <p class="spacing"><strong>Hi <span class="hilight">{{ ucfirst(trans($details['coach_name']))}}</span> and <span class="hilight">{{ ucfirst(trans($details['assist_coach_name']))}},</span></strong></p>
    
    <p class="spacing">Our records show that your membership with 4N6 Fanatics is scheduled to expire on {{$details['expiration_date']}}.</p>

   

    <ul class="spacing">
        <li>
            If you would like to renew your membership, simply respond to this e-mail and we'll get an invoice sent out to you. 
        </li>
       
       
       
        <li>
         As a special thank-you to our members, renewals will be processed at our reduced renewal rate . . . only ${{$details['offer_price']}} instead of ${{$details['actual_price']}}!
        </li>
    </ul>

    <p class="spacing">We'd love to have {{$details['school_name']}} with us for another year.</p>
    

    <p class="spacing">

        Laurie Mooney, 4N6 Fanatics  <br>
       <a class="hilight" href="tel:541-821-7612"> Phone: 541-821-7612</a> <br>
       <a class="hilight" href="mailto: laurie@4n6fanatics.com"> laurie@4n6fanatics.com</a> <br>
        13157 SE Spring Mountain Drive <br>
        Happy Valley, OR 97086 <br>
       <a class="hilight" href="www.4n6fanatics.com">www.4n6fanatics.com</a>

    </p>
</body>
</html>