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
    <p class="spacing"><strong>Hi <span class="hilight">{{ ucfirst(trans($details['user_name']))}},</span> - We have received your membership form and are excited to have <span class="hilight">{{ ucfirst(trans($details['school_name']))}}</span> as a new member</strong></p>
    <ul class="spacing">
        <li>
             We need an approved PO on file or payment for the membership to activate the account. 
        </li>
        <li>
             I’ve attached a PRICE QUOTE and our W-9 form that your business office may need to issue an approved PO.
        </li>
        <li>
            Please e-mail the approved PO to us at <a class="hilight" href="mailto:laurie@4n6fanatics.com">laurie@4n6fanatics.com.</a> 
        </li>
        <li>
            As soon as the approved PO or payment arrives, you will have access to the power of 4N6 Fanatics for a full 365 days.
        </li>
        <li>
          <strong>
            If you’d like to pay with a credit card (MC, Discover, Visa) for the most immediate access, just give us a call at 541-821-7612– we’d be happy to process that for you over the phone.
          </strong>
        </li>
    </ul>

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