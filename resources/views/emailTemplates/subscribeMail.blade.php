<body style="background-color:white;padding:10px;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="550" bgcolor="white"
        style="border:2px solid #ED9393;border-radius: 10px 10px 0 0;">
        <tbody>
            <tr>
                <td align="center">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" class="col-550"
                        width="550">
                        <tbody>
                            <tr>
                                <td align="center" style="background-color: #ED9393;
                                     height: 50px;">

                                    <a href="#" style="text-decoration: none;">
                                        <h3 style="color:white;
                                             font-weight:bold;">
                                            Subscribe Enquiry
                                    </h3>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 70px;">
                <td align="center"
                    style="border: none;
                     border-bottom: 2px solid #ED9393;
                     padding-right: 20px;padding-left:20px">

                    <p
                        style="font-weight: bolder;font-size: 32px;
                         letter-spacing: 0.025em;
                         color:black;">
                        Gale Ranch
                        <br> Notary
                    </p>
                </td>
            </tr>

            <tr style="display: inline-block;">
                <td style="height: 150px;
                     padding: 20px;
                     border: none;
                     background-color: white;">

                    <h3 style="text-align: left;
                         align-items: center;">
                        Name : {{ $data['name'] }}
                    </h3>
                    <h3 style="text-align: left;
                         align-items: center;">
                        Mail : {{ $data['email'] }}
                    </h3>
                    <h3 style="text-align: left;
                    align-items: center;">
                        Message :
                    </h3>
                    <p class="data"
                        style="text-align: justify-all;
                         align-items: center;
                         font-size: 15px;
                         color:white;
                         width:100%;
                         padding-bottom: 12px;background-color: #ED9393;padding:5px 4px 5px 5px;">
                        {{ $data['loaction'] }}
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</body>
