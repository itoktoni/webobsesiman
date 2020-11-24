<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
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
        text-align: right !important;
    }

    .invoice-box table tr td:nth-child(3) {
        text-align: right !important;
    }

    .invoice-box table tr td:nth-child(4) {
        text-align: right !important;
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

    .invoice-box table tr.voucher td {
        border-bottom: 1px solid #ddd;
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

    .invoice-box table tr.total.last td {
        text-align: right !important;
    }

    .invoice-box table tr.item td:nth-child(2) {
        text-align: right !important;
    }

    .invoice-box table tr.item td:nth-child(3) {
        text-align: right !important;
    }

    .invoice-box table tr.item td:nth-child(4) {
        text-align: right !important;
    }

    .invoice-box table tr.heading td:nth-child(2) {
        text-align: right !important;
    }

    .invoice-box table tr.heading td:nth-child(3) {
        text-align: right !important;
    }

    .invoice-box table tr.heading td:nth-child(4) {
        text-align: right !important;
    }

    #title h4 {
        margin-top: 5px;
        text-align: right;
        font-size: 1.5em;
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
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }

    #header p {
        margin-top: 0px;
    }

    .date {
        text-align: right;
    }

    #header p img {
        margin-top: -100px !important;
        margin-left: -40px;
        width: 200px !important;
        margin-bottom: -100px;
    }
</style>