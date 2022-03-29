<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 */

class PDF
{
    private $db;
    public function __construct()
    {
        $this->api = new API;
    }

    public function invoice($data)
    {
        return ('<!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8" />
                <title>A simple, clean, and responsive HTML invoice template</title>
        
                <style>
                    .invoice-box {
                        max-width: 800px;
                        margin: auto;
                        padding: 30px;
                        border: 1px solid #eee;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                        font-size: 16px;
                        line-height: 24px;
                        font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
                        color: #555;
                    }
        
                    .invoice-box table {
                        width: 100%;
                        line-height: inherit;
                        text-align: left;
                    }
        
                    .invoice-box table td {
                        padding: 5px;
                        vertical-align: top;
                    }
        
                    .invoice-box table tr td:nth-child(2) {
                        text-align: right;
                    }
        
                    .invoice-box table tr.top table td {
                        padding-bottom: 20px;
                    }
        
                    .invoice-box table tr.top table td.title {
                        font-size: 45px;
                        line-height: 45px;
                        color: #333;
                    }
        
                    .invoice-box table tr.information table td {
                        padding-bottom: 40px;
                    }
        
                    .invoice-box table tr.heading td {
                        background: #eee;
                        border-bottom: 1px solid #ddd;
                        font-weight: bold;
                    }
        
                    .invoice-box table tr.details td {
                        padding-bottom: 20px;
                    }
        
                    .invoice-box table tr.item td {
                        border-bottom: 1px solid #eee;
                    }
        
                    .invoice-box table tr.item.last td {
                        border-bottom: none;
                    }
        
                    .invoice-box table tr.total td:nth-child(2) {
                        border-top: 2px solid #eee;
                        font-weight: bold;
                    }
        
                    @media only screen and (max-width: 600px) {
                        .invoice-box table tr.top table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }
        
                        .invoice-box table tr.information table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }
                    }
        
                    /** RTL **/
                    .invoice-box.rtl {
                        direction: rtl;
                        font-family: Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial,
                            sans-serif;
                    }
        
                    .invoice-box.rtl table {
                        text-align: right;
                    }
        
                    .invoice-box.rtl table tr td:nth-child(2) {
                        text-align: left;
                    }
                </style>
            </head>
        
            <body>
                <div class="invoice-box">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="title">
                                            <img
                                                src="https://cdn.discordapp.com/attachments/955145545347891241/958372745958264922/LOGO-1.png"
                                                style="width: 100%; max-width: 300px"
                                            />
                                        </td>
        
                                        <td>
                                            Order ID #: ' . $data['orderid'] . '<br />
                                            Date: January 1, 2015<br />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
        
                        <tr class="information">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td>
                                        .' . $data['firstname'] . ' ' . $data['lastname'] . '.
                                        </td>
        
                                        <td>
                                            ' . $data['email'] . '
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
        
                        <tr class="heading">
                            <td>Payment Currency</td>
        
                            <td>' . $data['price'] . ' #</td>
                        </tr>
        
                        <tr class="heading">
                            <td>Service</td>
        
                            <td>Price</td>
                        </tr>
        
                        <tr class="item last">
                            <td>Domain name (1 year)</td>
        
                            <td>LKR10.00</td>
                        </tr>
        
                        <tr class="total">
                            <td></td>
        
                            <td>Total: $385.00</td>
                        </tr>
                    </table>
                </div>
            </body>
        </html>
        ');
    }
}
