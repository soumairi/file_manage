<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <style>

            .btn.btn-danger{
                background: #F44336 !important;
            }
            .btn.btn-warning{
                background : #FFA726 !important;
            }
            .btn.btn-primary{
                background : #2196F3 !important;
            }
            .btn.btn-success{
                background : #4CAF50 !important;
            }

            .panel-heading{
                background: #E91E63 !important;
                color: #fff !important;
                border-bottom:3px solid #f8bbd0 !important;
            }

            .resize .navbar{
                margin-left: 0px !important;
            }
            .resize .col-md-3{
                position: absolute !important;
                left: -300px !important;
            }
            .resize .col-md-9{
                width: 100% !important;
                margin: 0px 0px !important;
                padding: 0 20px !important;
            }
            .dropdown-menu {
                height: auto !important;
                width: auto !important;
            }
            .ms-choice{
                height : 35px !important;
                line-height : 35px !important;
                border: 1px solid #ccd0d2 !important;
            }
            .ms-choice > div{
                position: absolute;
                top: 5px !important;
            }
            .dropdown-menu {
                max-height: 250px;
                height: 250px;
                overflow: auto;
                width: 300px
            }

            .smtpshow {
                display: none
            }

            .showcontenue {
                display: none
            }


            body {
                overflow-x: hidden !important;
                padding-right: 0px !important;
            }
            .img-fixed{
                width: 84px;
                max-height: 84px;
                border-radius: 50px !important;
                -webkit-border-radius: 50px !important;
                -moz-border-radius: 50px !important;
                border: 2px #f06292 solid !important;
                overflow: hidden !important;
            }
            .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
                color: #fff !important;
                background-color: transparent;
            }
            .alert{
                margin: 0 50px 0 250px;
            }
            [style*="float"] {
                float: initial !important;
            }
            .navbar {
                background: #e91e63 !important;//#fff !important;
                box-shadow: 0px 2px 15px -10px !important;
                min-height: 64px !important;
                color: #fff !important;
                border-radius: initial !important;
                margin-left: 205px !important;;
            }

            .navbar-header {
                background: #e91e63 !important;//#D62D88 !important;
                height: 64px !important;
                position: absolute !important;
                width: 290px !important;
                text-align: center !important;
                position: relative !important;
                border: none !important;
            }

            .col-md-3 {
                width: 220px !important;
                background: #fff !important;
                position: absolute !important;
                top: 0 !important;
                left:0 !important;
                padding: 0px 0px !important;
                height: 100% !important;
                z-index: 9999 !important;
                transition: all .5s;
                box-shadow: 2px 4px 13px -8px !important;
            }
            .col-md-3:hover{
                box-shadow: 2px 4px 25px -8px !important;
            }
            .panel,
            .panel .panel-heading {
                border: none !important;
            }

            * {
                border-radius: 0px !important;
                transition:all .5s;
                outline : 0px !important;
            }
            .navbar-brand {
                width: 220px !important;
                font-size: 25px !important;
                line-height: 35px !important;
                position: relative !important;

            }
            .btn-img{
                background:#e91e63 !important;
            }
            .btn {
                box-shadow: 0px 3px 7px -3px #504F4F !important;
                border: none !important;
                border-radius: 2px !important;
                color: #fff !important;
                display: block !important;
                position: relative !important;
                height: 36px !important;
                min-width: 64px !important;
                padding: 0 8px !important;
                display: inline-block !important;
                font-family: "Roboto", "Helvetica", "Arial", sans-serif !important;
                font-size: 14px !important;
                font-weight: 500 !important;
                text-transform: uppercase !important;
                line-height: 1 !important;
                letter-spacing: 0 !important;
                overflow: hidden !important;
                will-change: box-shadow, transform !important;
                transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1) !important;
                outline: none !important;
                cursor: pointer !important;
                text-decoration: none !important;
                text-align: center !important;
                line-height: 36px !important;
                vertical-align: middle !important;
            }

            .input-group-btn .btn {
                color: #000 !important;
                box-shadow: initial !important;
                background: #eee !important
            }

            .navbar-nav > li {
                height: 64px !important;
            }

            .navbar-default .navbar-nav > li > a,
            .navbar-default .navbar-text {
                line-height: 35px !important;
            }

            .col-md-9 {
            //    display:none;
                float: right !important;
                width: 82% !important;
                box-shadow: 0px 2px 10px -6px !important;
                padding: 0px !important;
                margin: 0px 25px;
                background: #fff !important
            }

            .col-md-3 .panel {
                margin-bottom: 0px !important;
            }

            .col-md-3 .panel-heading {
                background: #fff !important;
                color: #000 !important;
                text-align: left;
                cursor: pointer !important;
                border-left: 3px solid;
                border-left-color: currentColor;
                border-color: #fff;
                border-bottom-color: rgb(255, 255, 255);
                border-bottom: 1px solid #eee !important;
            }

            .col-md-3 .panel-body {
                background: #f5f8fa !important;
                display: none;
            }

            .col-md-3 .panel-heading::after {
                content: "\e114" !important;
                float: right !important;
                font-family: 'Glyphicons Halflings' !important;
            }

            .navbar-default .navbar-nav > li > a,
            .navbar-default .navbar-text {
                color: #fff !important;
                line-height: 35px !important;
            }

            .navbar-nav > li {
                float: right !important;
                height: 64px !important;
                line-height: 50px !important;
                position: relative !important;
                right: 18px !important;
            }

            .well{
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANwAAAC7CAYAAAAOq/BjAAAgAElEQVR4nOzdd1hU59r3fe5n5/Xe9362tylPmpom1sSoURNLjNHYuzF2LHSs6U1joyO9NxXsmh5jYnb6TrF3QLBXQMrAwKLX7/vHzMDMMGWtmTUDZjvH8Ts0anAG+Hie13lda43D14Pm53w9yEn4epCT8PXg5uxX5xutfKuTBcK3gxcIXz87S/h+tIdwMihBFb844aRvnHDaN0444xcnnPGLF874xQtn/VU546/+b3XS/BNaJN0/QUj3SxDS1En3SxDS/RKFdP8kId0/ScjwTxQy/AzEX5Mk4Zx/onDOP1HI1E9AktFkBSQJWQHJqvgnC5n+yUJmgCpZgZuEK6EpwgEvf2Fdf2fBf7CbEPrSEiFkmCrBBhLy0hLB/wV3waevq+Db370pPlrxFZMBuvEb4C5sGOAuBA10ExL7uwrxekkY6CHE9XMVAh4fL3g/8rLg33mcOmMF/85jBb/OYwW/Tlrp3BxfTTqp4mMkmt/z7jRO8O40Ttigl3WdxglrOo0TVncaJ6zqNF5Y3WmCsKrTBOGdjq8Iyx4cKrg+8Lwwr0M/YVb7PsK8+/oJTvcPUGegMP/+gYLTA/2FGfc+L0y+d7Aw9d5BBjNFK5PvHSRMbMoLwuR7Bwmj7x0kDOnwgjoDhSHtBwhD2vcXBrcfoE5/YXD7/sKgpgwQBrUfIAxuP1AY3OF5YWD7gcLLDwwTFj0xTVjw6BRh/iNThEWPvya49nAWvPovE9548QPhvXEBwocTQ4RVk8KED3USKnwwKUR4f6Iq747dKKydEZ3jsH+wE/r5Rp1vtXKgRRbw3eAFfNNnNj+O9eJ0UCKnAxM45RfHab84zvjFccYvnjN+8Zz114ufKmn+CTpJ145fAml+qh/T/RJI908iwz+xOX6qnPNL4Jz619L9E8nwT+KcfxKZ/klk+ic2JSsgiaxAVTIDmpPVlOTmBKqj/Wv+yZwP3ER+4h5+WhHEmr6L8X3elfCXlxH60lKdhDRlGRuHLcVngDs+/T3wHWAg/Y3HRy/av7d+gAeRA9xI6u9GXH834rUS19+VxIFeJAxwJ/DJSXg/OgL/x8Y1xe+xcfh11spj4/B7bCy+xtJ5LD6adGr+uXfnsXh3HteUDZ3HsV6dDU3/PZZ1ncfxUedxfNh5PGsen8zax6fwUecJvN1xFO4PD2PB/xvInA79mN2hL/Pu68/8+wfidO9AnO4dwLR7X2DKvYOZeu+gFpl87wtMvvcFJnV4nokdBjKuwwDGtR/AuPb9Ga/O0Pb9eaH9AAZ3eJ4hHV5gaIcXGHrvIF68byjD7nuRYQ+8xEsPvsxLD45k+IOjePmhMbz80BiGPzia4f9vNC90GMmsLk6senEt743wZfX4cNZPj8d7VjLeM5NYOy2G1ZMjWDUpnFWTwvlQJ2F8MDGU9yYEs+z59ayfHYODuppJxObEd0MW8N0QFbifxnlxeqMK3Gl/49jSmsAlmMbmn0BGE7QEXWjqaKBpkqH+MbMJW1ILaNrgjCE7r50AXXSZ/slcCNrE7fjdHHovHP9Bbqzr50zY8GZ0IcOXNSV4+DJCX16O/2AvNvRzx2eAR1MsAafJBjXe2P6uxPd3I1adOJ24kvj8EhIHehHsOI0Nj47Ar/NY/B8br4utCdw4fB4bh686qp/rovPtPBbfTmp0ncbi3Wks3p3GNWVDJ21ouvjWdx7L2s7jWNN5HKs7j2P1YxNY+8RkVj05lbcem8jyjqNwe2gYC+5/ntnt+zHzH32Y+8++zGr/HBPbD2BS+wFMbt+fye37M6nDACZ3GMjke59nyv2DmHL/YKbcN5SpDwxj6oPDmf7Qy0x/8BVmPTSaCQ+PYfjDYxj18DhGPTyB0Y9MYtQjkxn1yBRGPTKVUY9MZfQjU3nl4cmMfGgCIx4az8iHJzOq06uMeXwOo590YoyjM6unRhM0L4U102P5aHIUqydFsHpSOKsnhbNqYjgfTAjj3bHBvDkikJVDfVk6YD2ez63Fa8B6Vrzow9KB64h8e4egA84ktiELVBnsxHdDmsF922cWP41fwpngJM4GJXDGXw3NTxdaUwLMQNPEL0FdsfSgGUimfyJZTdVMhc0QtPPq6GDTR6YVbWzn1cnyT+JCQDL5CbtJ944nYsRy1vRZTKgaV6gWOFWWEzx8GT7Pe7DhOV10PgOMozKUpurW34OQAe4kGoTWnNjnXEkY6EniwKWEdp/JhkdH4NNpNL6dx+PbeZwqamB+LbCpfmyKdpXrPAafzmPU4MawoaMq6zqOZl3H0azvOIr1HUex7tFXWPfoK6x9dCRr9LL60RF8+OgI3u84krc6juatxybyzmMTeavTeFZ0HIX7w8NZ+MBgnDoM4LX/fZ5pD7zEzAdHMueh0cx7ZAzzHh7PvEcm4fToZJw6TsWp43QWdHqVhZ1eZUHHV3HqNIOFnV5jdqdXGdNxOmMfncbYR6cyRp1Rj0xixEPjGPHgGEY8NI6Rj0xidOcZjHvSiQld3ZjcYwmTey1jcq/ljOzizOx+b+LzWjyrJoTz1sggXh/qx9KB3ng9t44l/dezcqgv74wNZs1rMQS6bSFu1cfsCD/Al9t+58dvTnL4YBYZF26pwH0jFtuQBWpsKnD/UoP7ZcIS0kKSOBuUyBn/llVNk/SABNIDEprQGcUW0Fy1WkALSFJFC1ozNk1F01QsXWhNkAxVM0MJMJZNZAUkcztuF9dCU9ky9T1WP7uYjS8uIfTl5ToVLvglFcSgYUvZ8Jw73v098B6gis8AD9V/S0CnqXAx/V1JfM6VOJ24qNLPhdh+LsT2cya2nzNxz7mSONCT8B6z2PDwy2x4RAXPu+MovDu/gnfHV9jQaSTrDaXjSDZ00krHV9jQ8RXWd3yF9R1Hs6HTGLw7j1VXtvFs6DyBDY9Nwvvxyfg8MQXfJ6bi++Q0fJ98Fd+nXsPvqZn4dZlNgOMcArvOJbDbPPy7O+HXczEBvVwIfsaDiGeXE9VnJaHPLsOvpyurHeey5LEZLOw4nfmPTGXeI1NxenQ6Czq+2pxO01nQcTpOHacz79FpzH10GnMfnYpTx6lMeGQyIx6exKiHJjDyobGMeHAsrzysATaf8V2dmdjdg8k9ljKp+1LGd/VkbBdXRj2xmBGdFzC843wGdniVBQPfxW92AmtnxBDkuoXY9/ayI/QA+7b/zs/fnOTY4QtknM/mym0Ft8vLKairprCumryqSm4JApdyCwSH/VrgzGNb0ARNkwN9ZvHrxKWkhWziTGCiWWwacAaxBSSqsOmBU0FrxpYZkNQErSlNFU0blC6080HqmEB2QTsaYIGbOB+4iQt6yfJP5lbkNnJjdvLZgvWs7uuM72APQkeoqlrw8KUED1Ml9OVl+A/yZN2zLmzo56pKXxc29HVmQx9nNvRZzPpnF6nSe2FznlnQnN5OrHlmAX69FxD3rBOxvRcQ++wCYvssJLbPImL7LiK272I1NJdmiP3diB/gQfLgFUT3WYTPo6PxfnQ0/k9Owf/JKQQ8NZWALtPxf+pVArq8RqDjTAK7ziao61yCus1jY3cnNvZYQHDPhYT0WERIT2dCerkS2sud0Kc9CXvGi7DeSwjvvZSIZ5cR0Wc5EX1WENF3JZF9Xiey7xtE9n2TyH5vEtnvLSL7vUVUv7eJek6dfm8R3e9Ndd4gqu9KIvusJLrv68Q89xYxz71JWJ9l+PTy4MNui3j9ybl4PD6ThZ2m4/ToNOY8MoXXHprEjIcmMevhycx+ZCpzHpnK7IcmMveh8Ux/eAIjHp7E6EenMvaxmYx9fD5jn1jMmMfdGPO4G6Med2HUEy6MecqFcY5uTOjuweSeS5je903mDn6fxSPX4TLOD5dxQfzw9SkKy8u5mqsgv6Kc4oZaihvrKKyt5nZZOTcLlVzJVXDxZj4Xrt3mvFayruQ2g7ME2/dDFvBdn1n8OnE5aaGbOBuYYBJaekACGZqfG6pq2tGBltgMTRN/FbrzAVqtYlNF04MUlMwF7TRVsKSmXPBPVMUvgfO+CZz3ief8hjiy1seRtS6WrLUxZK2NIuujSDJXRZD5YTiZH4SR8W4wlz6KJNcvgR+cPmKt40xWd59N8BBXgga7EDTYlaDBbmwc4s7GYZ54D3RjXR9XdZXzwnvgUnyeX47vCyvxHfwGfkPewu/Fd/Af9i7+wz8gYPgqAkZ8RODItQSO2oD/WF8SxvuwbbwvKRMCSJ0YROrkYLZOCWHrlFC2TQ1j29Rwtk2LYPv0SLZPj2L7q6rseC2G3XOT2TYtkuh+rxPWzY2oPiuJ6vM6UX3fIKrvm6r0e4vofm8R3e/tZhj9tPOWbvq+qQLV9w0i+r5ORJ/XieizUpW+Kwnvu5LwPtpZQXifFYSpE66XsD7LWySi70qi+71OzHMqlGF9VxLYexm+T3uxvpc773VdyJLOM1n40CRm3jee6R3GM+Xv45nyt8nM/p/XGP/QXEY+tpiJ3byY1vt1ZvZ/B6ehH+I8cj1LJgfyxqxI3luYyIeum1ntnsIaz61sWLYL/zc/JfDdL9n4/j4+8tqD73ufcqNQiUAtl24VcPlmPpduNOfi9bymXLiep4Mu6+pt3ZZSB50eNH1sPwxZwA9DFvJdn1n8e9Jy0sM2czYwwSi2DK1owBmEFpBIpibqgUlT++iXSJZvAlm+8WT5xJHlHUuWTwxZ3tFkrY8ic10kmWsjyfwognOrw8lcFUbmqlAyPwwl88MQMj8IIfP9YM69H8y590PI/DCUrFVhZK2OIGtNJFnrojm/IY7zvglcCEjiwsbNXAxJ5WL4Ni5F7+Jy/F4uJ33KlZQvubp9P9d2H+D6J//i+uc/kb3/NyqPn+Hi/j+Icgpl/YtriJ4XToxTFDELYoheFEesSxKxbskEvxrLxqlxhMxMJHRWMqGzNhE2Zwthc1IIn7uV8HnbiZi/QxWnnUQ67SJywW7CnPYQs2g3exZuY7fTdnYt2MYuJ022qjI/VSsp7JqXwq55W1SZu5ldczfz8eId7J63hdhB7xPWzY3IPiuI7KOqKhF9Vqr/W5UIC6OLaLlWmqGFav3ccFTYQvssJ0QnKwjrq4Ib9vRSQrp5ENLFg+AnvAh6YjkBPd4mYMBH+A/3wXd6MOtnhPL2xGA8xm5k6bhQ3pkZx3rP7QS/9xkRH+0jau1+Ij76mtBV+9j4wZcEvfcFfu9+xoY39rBu+U7WLtnJGq+drFu+G69pcQSu+hxFZQU5RaVcupnP5Zv5XBaBLuvqbcMt5YEhTgbXa5qq9oMeuN8mLScjdBNpAfGk+cWS5hdLul8sab4xpHlHk74hivT1kaSviyB9bThpa8JIWxVK2ochpH0YQvoHwaR9EEza+xtJf28j6e8Fkf5+EOnvB5P+QSjnVoVxbnU45z6KIHNdFFkbYjnvG8/5gETOb0zmQsgWLkZs5WL0Ti7G7+HSpk+5svVLru74mqu7v+HaJ//i2hc/cn3/r9z61x/c+ukQ2b8eI+ePk+QcPUvuqSxup18iL/Mq+RdvUHA1m4IbtynMKUSRr0ShKKVYWY6yrJKSyhpKa+spbWikFCgFBK0AVNTD3o0/4T9jM/ErPyPp7S9JfPMLEt/4jOS3vyB26R6CZ20ldM42QuduVWVOqiqzU1SZs4XQ2SmEzd7SlKDZKSTOSWLvrAR2zEpszmyJmZXAbqcUdi9IJX7YR4R0dyH82aVE9l1JRN8VqpjBJB3ecp2EtsiKFlGhbAYX3HsZ/l1cWf/wfNb8Yw5r/jkf386eRDz3Aakzotj33qf8FvMrZ79M4+rh6+RfL6akqgZFdS3Xc0o4e+ImP32dzt7E34lc8xXrPLfz/sJNvDs/mQ8WbmGNx3Y2rNiN98o9bFi5h3Wv72Htyt2sXbGTNUt3sNprJ6uX7sRtciw7U36ngjquZhdy+WaBKHSqCvfCHOGbF+byzfNz+Ob5OXz7why+fX423w6cpcqAWRxoykz+1X8m/+r/mjozOdBzCr+OcSPdO4Iza0I5uzaMtPURpHlHkeYTq6pqQUlkhGziXHgKWVHbyIzbRVbyx5xP+YwL277kwq6vubj3AJc//54rX//M1QO/ce2Hg9z4+Sg3fzvBzYNnuHU8g+wzF8g5d5nc89fIvXST29dyyLuVT/7tIvILSigoElCUVFBUXk1xdS3FtfUU1zVS3ADKRiihZUr1UgKUNEJJPZTUNVBSW09JTR0l1bWUVNVSUlmDsqIaZXkVyvJKSjQpU6W4pJwGoBE4kPwbvpNjiHROJWH5HuKX7iJ+6W4SX99D+KJUNs7YTMjsLU0JNZGQmSmEzt3C9jlJ7JmZyM5ZEqOHbvusBHbN28yeRdtJGuVLSA83wnovIUIbnXa0ABlrBfXTstI1wwvr25yW+JYT3HspgT088XlsMWv+MZtV/zWDdffNI6TPSjZNDeTzN7bya8wPnP4mjStnsskvKKOkvo4yoAwQaKS4voYCoZxCoZzS2moqqaeSBkqqq7mRXcjpE1f4+bszfLL1dxKDviXwnU94f3Eqb8xJ5vW5m3hnUSqrPHby0fLdfLRiF6uXqcC957qNJTMS+POPLErrqrl0I5/Lt8yjO3/1tuCwf9A84dvBTnw7xInvhi7iuxed+ddLLnw/3I0fRnjx48il/PjKMn4avYJfxrzBr2Pf4tfx7/DvCe/x26QP+GXoSo69Hs21tEyuHM/g6slMrp65wLX0S9w4f40bl29y43oON2/lcyunkOy8YnIUArklFdwuryavspa8qjrya+rJr2sgvwEKG0EBKBpB0aD6sUgdRQMo6hsoqm2gqKYeRVUdiqpaiiprKKqopqi8iqKyShRChQpfSbleKigqqaDYRJSaCMZTUqadSp0Ul1RQ3dgAwOFv0vCfFk+Y0xYSV+whftluElbsIW75bkJmbyb4NV10hhI6ewuBs1OInbuJvbMSpGMzkh0zE9g1J5mPF+9g09gggru5Evq0l3F0fVcQ3tdcG2geY1jfFYT2XU5In2UE917Cxqe9COjhgc9TzqzruIC1D8xjQ/t5bHzClfhh77PbJZIfNn7Oia+OcuNCLiXV9VQBNUA1UEYjxdXVFCjLyFOUcLuwhNzCEnILlaoUKMnRSq6ihEKhHKG2hkrqKG+sRVFeztWb+Rw9dJH9n59ga/wvhK//mrXL9/DmwhSWzEpm2bxNvLU4lffct+M5I5FVS3eSU1TCbaWgwmYG3flreYLDrzMDhH/PCeK3uSH8Nj+M3+eH84dTBH8ujOLg4hgOOsdyyDmOIy5xHHGJ54hrAkddEznqmsRR1yQOTgrmbOR35AG5tQ3kVNWRU1lHbmUNuRXV5JRVkSNUkqNUJbekglxlOTnFZeQoSslVlJKrKCFXUcJtRSl5haXkFZY0JV9RSn5RcwqKSikoElQpLqOguIxCA1EUl1Gk1ESFzRSyYknIKo2kitKyKkrLqygRKqmsrQPgxI+ZBM1OImhWEgkr9hC/fDcJr+8h0mUbG1/dZBZciBrc5jlJ7J3Z3E7KAm9mIrtmJ7N34Xa2jA0itKcHoT08iFAPN/RbyPC+K1RDEM0aSmRCei8jqIcX/o5ueD/ljPdTLvh1dyegqzsBjzsT8oQb8QPeZvsEH75yjeNw7AGu/JmFoqCEGnXHUAeUA8WVVRQoy3S+L/IVut83tws18AyjyylQkp2vJDuvmOy8YnILlSjKyimrVyEU6qq5rSgh62IuB/84z2e7DhMf+j2+H3zGh8t28Y77dmaODCN64wEU5WVcv63gyq0Ck+guXMsTHP5wiRP+cI7jj8Wx/Lk4RivR/LkoioOLoji0KIpDC1U5rJc/xvtwNuRLcmtruZlfzK28Ip1oXlB2vt6/MgXK5k+G+pMjGpoamyFozcg00CxHZqqKlZRVqYCVqyIYSGlZJeVVNQDk3Spi25qv2DA5hpglu4hfsYf41/cQtiCVja9uNtlWBs/eQuicLWyfnciumYm66zcJMY4ugV2zk/h4wTZ2zIgjuv+bBHd1bbEWU+FZaSTqNdezywl+eikB3TzwfcoV7yed8XnShaCeXkQNeJPEFz8g9eU17BnlzdfTQ/llWSonIg9w8dszFFzMo6yonBo1riqgtKGeIqFC52tcUFym9b1QahaeqWqXo4VO53s3v5hcRQlF5RWUN9RQ2ViLsrKC69mFZGTd4tSZ6/z4YwbxkT9w9NglbheXcuVWQVMMobtwLU9w+H1BuPD7ggj+0GRhBH+qc3BhBIcWRnBoYSSHFkZyuClRHF6kyp/jfUgL30duXS239MCpXojqRYnGpjBf1QxBK2xR0ayFZriCaZAZAmYMnVBeBUA9jeyL+ZkNk2KIcNlG4hsfE7diN8FzNrPRRGsZMCuV2Lmb2DM7ge0WYhObvQu2sWvuFmIGv09wVxfCey9TtZhN+FSj/bA+KwnpvZygnkvwc/TA+0kXNjzhgl9Xd0KfXU7soHdIGbWWvVMD2TcrnO/nRvOHczKnPviEC3G/cOubNArP3KSsuIJqdXtYDpQ2NqCsqqZIWYaiWEBh5GttEl1RKXkKCegKlGTnKVuiyyvi5u3m3Mor4nZRKQqhHGVlBRUNNSgrK7l8I59r2QVczdYCZwBdEzhLsR1ZFMWf43xIi9xPXkMdtwqKW2LT75+1sEmqaqKhGW8dTa3NxFQysciE8irK9FIqVNBAIwB/fnEKvxnxhC5MIemtj4ny3EHga5vZODOF4Nl6mZlC4OxUNs9JZvfMRLbPSmqRHepo/9x4TIPbPjOB3fNS2LNgGwkvrSOkmythzywl7JllBHX3xK+LGz6Pu+D7pCsbeywhst/rJL74IdvH+/D5zDC+d0vi4MrtHFu5g5Mrd5L+3idkBXzL5W0Hyf7tPPlX8iipqKICqACEhnqKyyopVup+rYpKylVfT/XX1tjX3uJqZ6LFNIXuRq5ClRwF13MKuZFbyPUcBdeyC82iu3g9X3D4QwPOAmwqcN6kx35LXmM9t/KLyRaFTWILKUP7aBqakfWYiXbRHLCmVGhSTWlZFdV19QBkHrlCwKxEgudtIvntjwlbtJWAV7ewcXaKTgJmphI2d4tqymgAmz48c+gM/7lmcNtmxJMyMYrNY6PYNDqGkG5vs/7vswju7knMC2+zZcQa9k4J4FunGH5fvpUT739Mxvp9ZK3/msz3PyP9zY9JW/0F5yJ+4NInR8k+conCnCLKaKBSU8Wqa1Sff/XXxdjXrKikQgedMXiyosvTtJjG0TXBU6PTxBy6ZnASsB3Ry8Hx3mQkHCCPerLzbbBes7J9tKSiWYVMjctQyiurKauoorKmFoCLJ68T7LSJwNmJxL+xh41zUwiYodpvC1KD85mVSsLcTeydZbi6iYk+uG0zEtk6LZ6UybFsHh9NwsuhxA4JInboRpJHR7BjdhJfLNvFT4HfcXpfGie3/MS/nWI5sXIHF/y/5XLgd1z2+5bMDz7j1LIdnFixk7PrvuR8wi/c/DGDwuuFCDW1VAKVQBkNlFZWUWJiICUFntFqJ9O6rnmYIg2dCpxxdJeu5wsOfyxsBielsh1ZFMXRxWpwyf8in0bVE5W6XrOmqplrH0VDa54uyoWsvNJ4yiqqqKiqBiD3hoKktz7Gd0Y8Ya7bCJyZQuBMFbiAmakEzUlh6xzVYGP7rEQDMQ5t28wktr6awOYJMSSMCCN26EZiBgeR+Eo4KZNj2fZaInsWpfD1u5/zW+RPnN13hmsnr1OYo6Syto4Gmh/KjBzS393LcZfNnHp9J2dXfUZmxPdc/fwEt09eQ1lYSqV6LVYFlNXUqqa1ZZpof75VXwPp8JrRWbK2017X5bUCuks3DIA7uDCSg2pwh/Sw6aBbrAL35zhvMrf8SD6QbcP1mtj2UVrraCEyicAMo6umrFKFrr6hgZ92HMZvdiJ+s5MJnJlKkLq6xczdxJ5ZCWyblcQ2o+AS2fZaAqlTY9k0NpL44cHEDA4k7sWNbB4Xya75m/nqzY/5JehfnNh7jCtHrpCdlUv+jUJKlOXUovuoB6oa6qmorqGsooryqlpqgKKbCm4cOEt++i2UucVU1NVRo0ZW0dhAWWW18eFRuSF4lZbBM9NmSm8xpU0wLW0vL90qUIGTgu2wGpsmf471JnPbLxSA9es1K9pHYwMRS6EZW4dZCkyTCr2UV1SrRymQ/sclghZtYc2EWAJmpeI/N4Utc5LYNTNRDU6V1BkJbJ4US+KoCGKGbiR6cBDxL4eSMjWOj123cWD1V/wZ/2/OHUjnVno2ykKB2qa/pfnRANQClXV1lFeZeN4VqlSp/3y1ulUsr6lVfV70Pl8mp7ZS4JlY44lpM5vhGZhiil3XyVjpLqvAhQkHF4arwWlayghVK7ko0iS2o4uj+XOsN1k7/02hFjixlU2utZptoVleyXRwVdUYTXllNVXqTfKc64X4z9/E68MiCZ+7he2vxrFpfDTxw0OJHhxEzNCNJI6OZPvsZD5btpsfA77jxN5jXPrjIrcvF1BeXq3TCmoqVnVDPZU1tYafg/Y/AFKrtE5sB896dAZaTHui04D7c1EzuGZsEWpsujmyuDlHF2vWcBs4v/f3JnAmsVm6XjOyVhPfPqrWaJZCswiZCWDG0FVU16rXdYX4LkzFe0AAW8dHsWthCvve+5w/Yn8lbd8Zrp+8juJ2SdPEU/tRC1TV1VFRLe3vtxagvPCktZnaaztboROzptPfMtBHpwYXLhxcFMEhrRxeFMnhxboxhO3o4igOTfDm/Cd/UgCm20hL12tWVjVzwxBroVkKzPA3uupHgCKFwNnvMsjJyEVQVqJPqxGopZGqmjoqq2qNRp7nZSk+cfBKy1X/IIqCZ7LaWbaukx1djmF0V7PV4HSwLRaJzTmKY85RHJrkw4XPD6EAWSaR8rWQlkGzBzJTQCqraqmorGnZEtY3UFlt+v+TGlvjswSe9eiMVzuxE0y50OkPUa5mFwgOB7XAScLmEsUx50gOTfbh0r4janC62CwejhWhuMkAACAASURBVEhoIS2GJrGaWYJMThz2ii3wGWs3bQdP7BTT+ARTf69O6vTSELqr2YXN4ES3kRpsanCHp/hy6ZtjFIJM2KRUNfHto7GJoyhorQGs2srYG6At4IkZqoiodpImmHrbBnJWums5anAWYXOJ4rhzJIen+HHpu5MowCJsotZrNqhqckGTA1SVJjU2iPpjy4FRfnjmW01rqp2UFlNUpbMS3bWcQsHh0KJwQWwrqYPNJYrjiyM5PNWPKz+cplgNzjJshtdr1raQbQqaNi5bwLIAoqUIbQnP9FClNdGZPpFi9sBzjqK5wqlaSnUWR3BkcfOPR9XgWmBzieLY4kiOTgvg+s9nKdKAsyM2s9AkYBMDzSJgrQ1LQmyCTwo6EfB0q10bQWfg0h4jVU7TUuqCO9wETl3lnFXtpGYy2ZRFURybFsj1X9MpApths2VVkxVaW6pgclZAe8OztsW0Cp256aUxdOaHKNebWkqR2HTBRXNiUSRHpwVy449MirXAicJmbBIpooW0BzR7VbFqO8Ze1c8u8ES0mFI3ycVPLy2rdNdzCwWHQ4tbgjuiAWcKm3M0JxZGcvTVIG4ePt8EznbY5KlqckGzL646EbEfQlvDs7zaiW0xLah0Rq4ykHIE7MZthRrcYgPVzTmKoy7NaV7DqbE5R3N8YSTHZgZz69hFikF0Gylm7G9vbLaCZjWm2nppsRKlLaqepft4cqGTq9JJ2S4QDU7VSprApp2FkRyfE8qtU5fU4FQLT8lrNmsqm62rmsR1mWRcUkFZE4kIJa/3WqnaWYxO6ppO7B6dkdayBThNK2kYWxTHtbCddI1RgZsXRvaZqyjV4OyBzV5VTSw00chEwqiRIZYhtBKfNfBaAZ3ZQYqhY2Ci13MtW0sdcEfEtJL64BZEcMIpnJy066oKZ7SVtD82q6uaxdDEVzA5YMmO0QxAOdZ4llQ7y9BVWoVOzHaBsfWc4U1xHXDiW8mTrjEqcE4RnFwYSW7mTYppFI3N/B6buPWarFVNZOtoSRVrLVhWI7QWn5mKZ3m1M72uM4dOf5Bi6hiYHOhagLME20nXGE46hXNqcRS5F7NR0iD6bKR12CxrIa2taCah3aHILMMnHZ6lFU9si2k/dBYMUXTWcwrB4dDiCBU4F0Pgolus2zQ55RrDyfnhnHKJ4fblXJSNDeKwmZlGWjocsVVVkwKttaHYBZ+JqmcNPGtbTPPoxK7pLJtcmjxz2bQprgZ32DmKIy7NaYanAnfcCLgT88I45RZL3rU8lA31ZvfaLBn92xSbJGjG20a5vrlr9VPXnDoTqdWP1sdojap3x6AzeiJF/BDF2EkUw62lQnA4vDhCOOoSyVGXSI64RHKsKc1nJo+7RHPCNaYpGnTH54VxyiOOvBsFFNfXm9xrsxibmTZScgspuX00DE02XGYwyRVtiLLiM1LxZK92FqIzO72UsF1gbD0nvrUsEhwOOzeDO6aV4y5RnFDnpGt0U05p5cTcEE57xZOfrUBZVyd6SNJWsdmyddR8s5uEUW+DmEJoJUC7Vztz6CzdMrB2PSf2cp68IsHhiEuk0LRuc9UkmhPqnHSN5qRbDCfdYjjlFsMpt2hV1ODOLE2g4HYRyrpag+s2e7eRluypiYFmKTK7wZIBoqX4DLeaEuDJMEyRu9JJXs8Z2Z/TbS2Lm8Edc2mJ7YQWtmZwzTkxJ4SzK5IpzFeirK01O5FsFWySqpr10Awia21cFgC0BJ+5imdJtbNne2nJek5aa1ksOBxxiRCOuURyzFWV465RnFDnpFt0U5oqmxa447ODSXtjEwpFCcraOhHrNtPXssneRkqtala0ji3WYhZ+49fWN8gWOfDV1skBT1y1kxWdyfbSyHaBhCGKuKml/imUFuC0sUUZwKab47M2kv72ZhTFZS3ASR3/tx42y6uawaGHDLjqjKTeQIz9WVkQGhi62Lra2QWdhUMUqa1lyypXLDgcdYkQNNjMVzfdnJgVRPp7KRSVVFBSU2dxKynmBElbwmY5NOOwDGGSK6Yg2hKeubWd0RZTNnTGT6TYo7VsOUApFhyOuqrAScV22j2aE7MCyfhgG8XlVZRU1xqsbmJui9Bq2CypahKhGatetgQmFqA1+KS0mha1mDKjk7Ses2irQMwApQlcMzZtcMawNYF7LZBzq3egrKxBqQZn0bpNJmzGJpGyVDULkbUFYJYAlAJPcsUT22LaBZ249ZzUrQLDAxQ1OEuq22n3aI7PCCRz7S6U1bUoq2pkX7dJwmZBCyl3RdOH1tqQLMUnGp4FwxVLWkxr0JmbXMqxVWBwQ9xglSsWHI64RgrH1eu3465RnHCL5oQpcO4acDGceDWQrA17KKmtR1lZbaKVlH7y3yaVzUZV7U5HJgafWHhtGp0c6zkJraX2sS9VlSsWHI5qgdNgO6FV5fRzyj2aU+4xnHKP4fj0ADJ99lJSX09JRbXR6mZRK2nDNlJuaDbB1tBoeVoZnphqJxmdhPZS6hBFfz1n8Ya42SpXLDgcc40QjmuGJm6qqHDpbg1ofq4Bd9o9huPT/Mn0/4TSxkYdcKKqm4nNbUPVTcqAxJrKJgab7NC0sDTIGDkRim412wI6SzbFZW0tjVU5peBw1ClUOOEWwwn36KacNJJTHs057RHD8Wl+ZAV9igCUVFQZGJTIs25ri9isgmYDXJIR2rLaSWgxpaITvU9nZWtp8QDFZJVTCg6HFwULh6d5c9IjhhMeMSKwxXBanWPT/Dgf8oUOOGtaSdHrNpmx2QVaKwETBdDG8MxVO/ujEzO1lK/KNaNTCg7ZWTeE0+9t4s/xH3F8YRinPGNNgGvGpgF3MeIrygBleaWkqaRV6za7Ymv+xrqTKpm9Kp/u9ocd0cm0nhM9QJFyAsXoZrhScCgGobi+gaxtP3Bw+gaOTvfllGcMJz1MV7fTHjEcn+rLxeivKQNKyrXvgtuyulkylbRs/C8fNour2h0ETQ54Zqtda6KT2FpK35srQyH6yJdScMgvKBaKamopBW6dvsyJ5TEcGr+Gk66RanRRnPKI0lq7Nef4NB8uxe03AM76qaQc6za7Y7uDoVkLzzbobD1EsWOVawKnKBHyFSUUFAuUAkVVtZyL/JyDY1dzfF4wp7ximsBpYzvrEc3xqT5cSvhWDa6qCZvx6mbFoOQOwNbaSGwGz6IWUwZ0Fq7nJJ1CsdE2geHTJxpw6vcEyC8oQQkIwKVPf+fITF+OTFjLKddITnnFGAR3Ofm7FuCsHZRYu26TA9t/OjRr4NkdnS0GKCKrnKThSWGJCpz2ewIUKEooqqhGAPKu5JIV+QWHp27gxMwAznrFNmE76xHN8SneXEn5gfImcEaqm6k9N1k2t63HJrmq2fCbu7HR+rQ2PJMtZiuhs2aAIkuVUxgAV1hcRmFRKYVFAgJQBtz8M4MTruEcmbhOBc4zpgnc1e0/UaEGV9oq1U3ckKQtY5MDmD0B2gudsSGKnK2l+RMo5o98WQCu5ZtwqKYvAsVllVQAxcpyMvz3cHjMR5xaFMYZr1iOTdnA1V2/qMCZqW6t3UqaayPtjc0eyGyNTy50bbm1bK5y5vbljJyx1B6eKEoEhwINOL0pi/bNXBXFZZSpq92l1B84OnU9x2f4c2y6D9c+/p0KsE11k6mVbEvYWhOaLeBJQWdqTScHOjmqnE3XcubBNd9fUlFcRkltHRVA7qkLnF4SzZ/9ljeDk7DJLVt1k9JKWjMg+YtBkxufmBbTHDpL1nP2qHKlJqqcmC0CnUt3VOBKBaNvM6W/76AsR1muajFLKqpIf3cTl1N/oBLsUt2ktpJi1m22xtbakNoSOlnWc+ZaSxtUObH7cmarXBM4I9XN2D0mi5XllAMCjShuFVJaWWPVES5rBiVGsZloJe2BrbXxtAa81kAn+wDFiuGJ2SqnAWewuhm6Xbn29W5CBaW1dQj1DZSWVcpa3cxiEwHO+LrNtthsDgKa0wbhyYHObGupd4sGMa2lnFVOzPDE4MkTRangUFAk6IBTGGknjV3NrT8sMXtm0h7VTYYhSati00ZladowOmvWc3IOUCSdsZTYVho8X2kInJj3BzB1CU5brm5iW8lWwSYHMhvhswidta2lDQYord5WKkoFh0Ij4EzfstyyQ8r64FqjutmilWyTyGTGZ+/WUpYqZ25iae+2Uh+csfd2k95OWniMy+Rk0vrqZraVtBe21oAmAzy7tZZm1nKiT6BYMDyxaVtZJBgDZ6q6tWI7aWF1E9VK/qdAszM8a9DZZWJp8Z5cpfS20jA4G7WTNt53M7cNYK66/Udisxc6awYoVlY5y4cnVraVloIzdidlKe2k9Rvdd3h1swCBNQ97wJOzysm5lmszbaWhC1O1wRltJ20wnbTFsKRNVjc7IpMNXyuikzqxlO24l+S20sJTJ6LAGVy/SbwywNp2so1UN1ths8ejTaBrpSonZ1spdh0nEpy59VuFmfWbZe2koQtM7VLdbNVKtiFo+g+50clV5ayeWNqxrbR4HWcOnKTtgFaaTra56ibyG7o1H62FzhZrudbYkxPdVhoD16rrN5F7b5a0k3JVNzmxtaVHW0Nnyyonf1tpwTrOLLhWX79ZuhXQNqtbW3zIhc6mVU6G4Ynt1nESbr2gC87A+Ukr129iwLVWO3kXW/PD7lXOxNfFko1wW52t1F7Hib31Qktw5cbBmd5/qzC4frN6YCJis9toO1nbRtpJM9+wd8KjrVQ5q06eSFzHWQOuVOy9TiwHZ37DW/LAxIab3XK0k/8J1U370VaqnMH3KrBBW2nNNXIWDU50wIk9sGyouokEZ5P1293qJtvjTq5ybXdwonU3ryJBcFAUa8BZMaG0EJw1+293Arg78WEvdBaDs2Y/TkRbafXgxNSk0iQ4Oa4QsOXAxMbg/hOxaR6tDa7eAnByreMsO8hsflKpKLYQnJxXCFh1dYCF+293q5v5h93aSkvA2XhwYhictZNKyRVO+iU5th6YmDrOZZd20sw35p3+sAadHOs4U/txcm6A22JSaXRroBmcuT04c+As2BKQA5zU/be71U30o7XbSlPrOHuCa0Jn4daAUXCWHFr+q04o74Jr2+BseuLEBDhT18aJ2osTD85whbsL7q+JTfO4C84MuHIbg7Nm01tWcK09MDHxzfhXethlHfcXASdq81sMOLF36boL7i64OwGc2Wvj/qrgrNr0vgvOLo+74OwEzpL7UN4Jp0zugpP2uAvuLri74Oz4uAvuLri74Oz4uAvuLri7azg7Pu6C+wsNTe5OKdv+4y64VgB3dx/uLri/Erg2vw9396SJNHR/pYetwd09aXL3LKXV4P4q6KzB9h8DzpqzlNZeLWAO3N2rBe6sx38KOClXCxgHJ/lqgb/K9XDygLu7jrPT+k0quL/O9XDibwJ7J1zxbRScnIOTvzA6e1Q3UwOT+nrNBagGqpuoK75NgDPVTtrjiu/mu3bdvafJXXCqR1sBJ6WdrDFQ3doSOPP3NDG2F2cInLF1nDlwf+HByZ2KztxrupPXb5aDk/GuXXfvS3kXneZhL2xWgbvT70sp5s7LcoGzz+DEzuu4v1BraS02edvJVnhDD2MTSpvcefnuewv8R1c5OaqbHO2kqfWb2QmlufWbnbcEzIL7K717jlzv6y1HlWvr6OyJrbXaSTHrNzu/e87d94ezJbi2ik7M87Z3dbPF+8OJedthse2kRVsCdnsHVBuCM7eOu/sOqKYf9sZmTXX7S70DquT3+JYCrhU3wOUanvwV0bUGNjHDEotvcV5bL2n/zS4DkxIj7/EtBpyl6zhR4P5KVU4kutaCJ/a5SXm9clQ3q4YlNl6/WX1o2Ti4O28dZ22Va2109oIn5fnYApvtq5t92knd9Vul+IGJaHA2aCsNlXdZjnnZ8N1QbY3OVvCkPgebYRNV3awflrSddlJv/aYPTnxbaf7q79ZoK+1V5WyNTi54lvy9kl6Xnapbm2snLTlhIgc4ua8cMN1W1jZ/cs2Ba2tVzkJ0UiDK8vFtic2S6iZTO2m77QAJJ0xMgxN/bVxbaivNDU9aHZ2M8GSNBa9DTmy23AqwzXEu8+s3Y+AKjIOz/rZ5tmwrbTKxtBe6tgLPwucuJzajk0mxl+K02XZS65IcU+Bs3lZacPWAXGs5UadP7ImuteBZ8XylfF7Mrdvknkzaezopaf9NA05RKjgUiAAn2wWpMp6ttFmVq5e2IX7HwLMjNDlaydaobiYPK+tUNwvaSWPgFMUStwcktJWyDE+sqnK2aS1lQWcLfDI8H9tia1vVTdzVARa2k03gFKWCfukzt46Ts620qMqZuWzH6gFKa6OTCtFGf6ctsFmzDSBrdZNps9sYuBbtZJHQDK7AEDhDbaWUTfByw+DsXuX+SujsmNbCZq/qJssdlqW0k0UCBYoSw+CktpX2r3JtH92dis/S12kVNhlbSVtUN6ntpHlwRUKLEijL8MRIlRMDTo59OVOtpZQhyn8COmtenxhsRockNm4lJVU3KTcLErvZrcFWJJCvAlciFBQJGG4rLT9bafZKcDu1lm0FXVuFZ+1rai1sYltJ8VsBRm72as3ZSe3qVlSqApevAadX5cRsglt1k1hZqpzI1lIudDLBa218cjz/BhHQtLFZvW5rhepm6spu0eDUtvTAlWK8yom914n9qpwle3Ni1nP2RmdveLJBkwObiHWblFZSzJlJ49isG5YYvBRHv7qJB2e6rbxTqpyY/bnWQmcrgLZ4fq2NrXWqm7itANHg8otKka3K3SnozMAThc6G8NpaxEITM41si9hsXt2KSskvFA1OTJUzcxWBzVvL1kX3V4YnNza5hiSi99xMnSoRcVWA1cMSdfIKlc3g8jXg7rAqZ+wUit3R/QWrnRRoZrFJnUiKWbfZqJU0uu8mcqNbZyugBbhCbXBtvMpJbC3lQid6XfcXgScVmtn1mtQ1m5ytpJltACnXvFlT3fIVanB5hUpBW6GhLQJLjntJHaAYOvJ1R6O7A+FJhSZ2OGITbCJbSWsGJRZXNzU43epWogVOoQ1Oripn+vSJNVVO6nrOWnRywGur+DTPTXZoErDJsW6TfxtA7uqmBS6vsAQpVc7qM5ZtEV2teXQWr+3aGEBLgBlaq4nCJhaaSGyG9tskY7PyAlPpa7cS8gpLuK0DTkSVM3ao2bLNcBOtpdj1nMzo7FLtjOCzFUDtj2/tc7VZVROLzYohidlBiYltAHmqmxrcbTW4luhMVTlpm+HGW0vbrOfsgU52eEYQisFo6M/L+XxEQWsr2Czec7NuUGK+upWQW6gUHHK1wOUpSsSv5SRcSSBXa2lXdNotZmvBa+XoQjNf1do2NsPrNsmDEgurW25hCbmFxYJDbmGxcFsDzkiVs/7Il/nWsi2ik1Lt/krwREOTWNVaA5u0VtLaQYlgpJXUA5erBU57gGKsyondJjC3Nyfnek4SOpGb4wbRSYB3J+HTRma2dbSgqsmJTY7TJFJPlGgPSkSdKlGU6FU3JbkFTeCUGK9yFrSWJqaWcqGTOkgxdSJFNDyJFc8QvrYCUPNcanUi4jVpQxP5eWsJTWZsIiqbpONbBltJ8dhaVjcluYVKcgqKBYfcAhW4XPVv6lc5uVtLS9ZzkiudKHSWtZhS13fG8NkboGFgIiqZFdDMVTXbY7Ns3SbXoES3uqnB5TSBU6GTUuWktZYi1nOthc5SeBJbTd20/ObXRmgJRv3/19DHl4TMTOtY2wi1DY2yVjVj+2zS20jdVrJEqKQaqAGUQqXodZuYEyXiqps2uAJl028Yr3LSTqBYu56zdrvA1Oa4nOgMwpOMz3AFlCOWPA/912L0zeyramkAGoCaugbrW0gbYRPKq6ioriX/Sh7F2aU0AMryKkrUhUC2qWSLbQDt6qYFLqdA9Yv6VU57m8CSvTlzWwVyopN6IsUm8GTE1yrRQ2aqdWwEiv7M5FrQp1TcLgINPNBCJqGFtCG20vJKAH5btZO4R2aSf/Q8AEJjA8XKcstaSVHbANrY9MDlGKtyEltLqes5i9FJqXZWopMKT1P12jw+A89P7MSxESg5c5VTw94nY2EY2dt/pvRSLnXqm9NW1zdQXV1jvoU0gc3YP6yGvh9MDUkq6uupboRPRq/D12E4ife8xoWkAzQAVUBxSTlKpfELS60ZlGiDy87XB2cFOu2ppbVDFJugM7Ouawmv5VDFEnhmq5+9IBrBJWUAop16oDyvhAtLEsiYHUzaFD/SZ23kqv/HlJy/SaO64lXX11NVXSPLes3sgMTQ+L9MVd0ufH+GaIdXSXH0IuYhJ2IcJvPvCWtRXs6jDlBW1aAoLrNoC8B8K6kGl1ckOGTnNYMz2lpKnVpKHKLYE520aidfxWuBzxxAKSBFfgwNMEuRaa/RaoGq6louv5NCplM4F5bGc8E9hvRpfqTPCeJa5BeUXLhJPVAPVNXV6/yDJ7WFtAhbeRWlldUA/Pz6JiIdJrC1hxepPbxI7OJBrMMk9nVayNWd/6YGKAf1eWFz2PSv5DY2ldTG1gSuSMjO1/1N0VVO6nrO6BDFzugsrXYywzOI0FQ7KhZVne7Hk+s56rxuoBa46r2HjFkbubAkTpWlCZx3i+bsFB/S5gRxLeorSi5m0wDUAZUmRv5yYxPKq6gASsqq2NX3dRLum0dKN09SunmS2s2T5J5LSbxvNh87TOL40jiEmnoqgMJiQaappKaVVJKdV0x2nkJwyM5TCNl5xRircpav59oGOmuqnRR4cuIThVJmTGKQ6Uwe6xuoA25Efk36qwFcWBLPea1cWJpIllsMZ6f4cnZ2IDeSD1BRWEKDGmplVS2VlebXa2KxGdxrEyppBLK+OkqMw3RSunqQqsaWqoaX1H0Jm7u4ssdhPD++8BaFNwupBYqECgoUpTK1ksVk5xVzK08hONxSg8vOUxpFZ7y1lD5E0Z9ctjo6EdXOJDwbVr3WjEFk2pPH2joagOytP5E21U8Hmw68JQlkuURzeooPGW5R3Nr1C+WKUuo1Fa+u3vjXzQpspeVVKCtU7eRPyxKJdJhIanevFuBSunmS3NWTlF5efPJ/pvFdNzeu7D9ONSAABQqtJZSYDW796panVGMr0gZXpFKYbwic8dZS1FaB5PWcdegkbxtIqHaG4ZmuencSQKPVzMB4v7pGtQd3e99R0ib7cd4r3miyvOI575VAhlMEpydtINM9muy9v1Fy9XZTa1pRU0tFpTxtpOZAciWNKApK2N5zKUkPORnEpkmioycpTy/h8wdm8qXDdI6/n4pCIVAJKMqryC8ssWAqqaluRbrgbuUVYWt05iaXkiqdFjyj6KyBZ1HFM1/52gpCU8/L1B6a/oi/HlAczCJjRhAXPOK44BXflPNe8Zz3bJkLngmcc4rgzBRfzs7dyJWQzyi5fJs6DbzqGsorqiSfjTR0ZAvgZPwBohwmsa2HF1u7ebJVC10Tvq6epHT1IKmLB1t6evFVVxe+cJjM145uZO38lUpAWV9PXoHSCmx64G5pwFmznrNBpTN9DExEtbNxxZMDny0Rivl7pSDTTh2gzLxJ5vwwzrvHmISmSZZWMp1jODPVj7NOIVyL3Y/yUi61QDVQXtUMT0wL2eJ8ZHklDcBPK5JU4Lp7GcSW2tWT1K4eTUnu4sHmbh7s77OErx+aw8cOkzi8Ih5B3WLmFShVMTuVLNZqJVW5cVshONy43QyuGZ0t1nPi0BmqdLZEJyc80/j0AIpEKHv0n4MJZOY2rGsBIUfBeY9YshZHmYSmj02T856JZDhHcWqKN2edgrkWtx/llduqbQegrFwNTQq2skqE+jrKGxv5fMxaEtrNMostRR0Nuk3d3Pm6zxK+6+7Kboex/DLdh4KCUsqB/OIybucrjWPLV7bAdvO2EXC3DLSWrYNO5IkUe6CT0GqKx2cAoJwQjX1sM89JyuurASrKqrj4xhbOzY9QwfJIaJEsY9FUOo94srwSSHeO4vTkDZydt5Gb236iTFlBDVAJlJVVIhhYZrS8zKYSZUk5tcC1g1kk/88cUp5ybWondeBpVbYUrWzp6kGSowrdV8968v2zXnziMImvu7ly6Zvjqq2Dujpy8oqMYsvWM6UD7uZtfXBFLVpLY/tzFqEraYnO8PTSPLo7AZ44fCIxioq0v0vqa6mqVn8eGqGqoZEra3aTMTPYMDTPeLI8DCWOTI84zql/zPSII9M9jkyPBNIWqyreOS/VcKWsqIxqoAIQKmsQyipNXtNWLFQAcGjdbqIdJrCthxfbunmyTRucXiupDW+L+sckRw+SunrwVW9Pfui7hM/bz+BThykc+3ArRUApkFtYomPFUCt587YBcC3RmW4tTaMzfBLFHDpLK51F6KyFZwU+yxFaH0ufqwaZzuuvracGuB66j7SpgZzXApWpjctdHfWvZ3rEc85AMrXjGU/a/BBOTVzPuSUx3Pr0T4qv5VGprnil6n02Q9e0lTXUU1Zdx6dD3iP5f2azvZsn27XAbe3qyVYD2LSjQZfs6EFyV3f2PePOD3282PfUInY7jOHH0R9y7ch5lEB+VTXZt4v0tgB0sd28XcT13ELB4XpuoaD9i+LRmZtcWtZeWjNMkQpPloqnhU/qek8OoLb8+wwi03nNddQBt7b+wtmJ/s2wDEUflNGoK517HOfcVRDPzgvl9FRv0uZv5GrUPhTX86lQH8UqKa+kRNA+8V9OA3Du88PEOUxrwra9myfbunqyrasH27p6sFUvhiqdJsld3El2dOPzp935V29Pvuntwaf3TOWT/5rKyY2fogQKgVs5hUax3chVcD1HDe5GrgLL0BmfXEpBJ+5EigXoyqu0JlzWVTyL8NkYoM2AmUKmlzog96tjxsF5WIpNO/Gc84gjzTmSk9O8ObMwhKuJB1Bcz6MCKIMmbMryKuqAHzxiiXGYxPbu6nbSBDaT8BzdSXV0J6mLOwmO7nz2tBvf93bnm2c9+epxJ/Y6jOeX1/zIyVOiyYQhrQAAFKdJREFUBG4VFHNLz9ONXIUWuJyW4LTRGdqfk4ZORHspEp2UFtPiaicnvLYO0AJg+kexaoGCf2eQNi2ILDe5oTUnwz2ONLc40j3jObM4nJNT1nNmQTBXEg9QeENV8UobGykDCvJL2NVzKVsectKpbKagGQSnxpbq6M4WR3eSu7iTqEb3r2fc+aa3J/t6ubHXYSxfdXMh89tjKIG86mpu3CrUBZej4FpOoeBwLadQuJGjEmi8ykmcXBrZo7MNOuktplzwLMKnBdCuCKt1/15Lnreh118DFKVdJ312KFmusRLbx3gVNLc4zhlJhpsKWlNc4zjrGstZzzhOLw7nxKR1nJm3kWs7fqG4RLXZfe6Tw8Q7TGZHN092dPVkR1cPtpupbi3WcXrYNNnUxZ3ELm58+rQb3/V2Z//Tbuzv48kn7V9lr8MkjqxKpQDIB27cKmjCdj2nsBnc9ZxCxKLLuQPR2QOexfhMYGwB00iM/T9yPB9zr7kGKLmeT6ZzDBkLo8h0jxcRFTJNRGNziyPNLZazbrGkucaqKp5XHKcXhnF80nrSl8VR9FsGPyyOIvm/5rC753I1Nne2q9Ft18KniVhsWxzdSXF0Z3MXdxK7uPNJLze+6+3Gvqfd+PpZD77qsoDdDqP5fvSHZBeWUgTcLCjh+s18I+BEoVOaRGdpe2nuwLOs1U5Cmyl2uGITfK0UKa+zCigrLuP88k2kzw0Xh00bnHucwT+X0SLNbaV2zrrGcdYtjjSvOM65RnNo0lpi2r1EYsdpbHd0YXfPZezqsawFOEPwtprBpp1kdaX75Gk3vnvGjf1Pu7HvGXf2PePGHofx7O+/lMxvj1MA3G5s4NqNPK7eKhQcrmarwIlHV2zlms74IEW+aqd6F1ZRFU/kYMWayteWEUp9DZrX3vS5aKinorGBy2v3kP5asM7AJNM9QZWm9tF8zhnB1rLSqaBpcsY1jqvv7WH/sBX4OzxNZIchRN0/jISOk9nW1Y09PVeyq+dSdnTzaIo2uK2OHmx1dGerGluKVrShbXZ0Z7OjG5sd3Ujq4kZCFzf29nTjQG83vtage9aDT9q/yh6H8fw8N4Abt4vJB67mqsFdy1aBk4rO8kpnXYspV5tpLTxr8NkbojXPTx+ZTqprqQKuhX1N2tQgXWgabDaEpkmaRwLnl24h9clphDgMIPaBl4m+fziR7QcTff9LJHaexvau7uzp9QZ7e73Fzh5L2NHVTQueO9vU4FJMxo0tanAadHFd3NjV040Dz7ixr5cbX/VyZd8zbnzZbRG7HMbwRTcXMvYfowAEh6vZBcK17EJaoDMxubQEXcs7gIlFZ/hCVmPoWp7FlLC+a2o1pbWbcuJrMzGFTDtVNVQDN7b8xJlJAbJVNIPYXNUtpF7OuMZxYeVWDr0WQMQ9Q4j+35eIvW8ksQ+MIvbB0cQ8MILI9kOIvX84mzpPZcvj09jZ1Y3dvZar13fN2drVndSuhitdiqNbE7gtWvCSu7gR38WNXT1c+fZpV/b3cuUrTZ71YO8/p7PXYSKHfHcKDleyC4Rr2QVYhU7/CJjoEyli13XGj4NJaTOlVzzLqt4dCVAsML2UVVRTDWR/dpgzE/2bMbnFmYxmMJJuIOKhxXPGLYGzHolc+/AL9g99nSCHASpo971MzL3DiGo/iMj2A4luP4Cwv/fE/78exduhA3EPj2RPj5Xs7rmCnd282N7Vja1qcBps2tFgS9HDtlkP3c4ernzzjCv7ernypTr7nvXgs6fms/e/pwoOl28VCFezCxCLzuBBZ3uhk9hiGm0zrYRnCT4dgK2NUOt5WPI6dD8XVVQDeT+e5ezkADJd48h0izeaDLd40g3GMDRVEkhzTyLDYxMZnlvIWJJKxpJU0rw2c9Y9njSXKNKdQkjuOJIgh15E/N9+RPyjN+H/eIaIfzxD+N+7E9jucXzv6YzvPU/i87fOBP+9N3EPjmHTYzPZ0c1TBa/7Urar28qW6zm3FtGGt0mNLu5JV7b3cGH/M1pVrpcLX/Ry5fPuzipwV24VoI1OA04aOvHTS+uGKZZWu5bwJFc8GfEZhSgHSAMfz9rnqP+atS+ZqQIKT1wmbWYo55xjdYBlGcGWoRXdCpfAOY9kMr22cG7JVs4tSSHdPZk0l1jOLozgzPwQTs3y5cS0VRyb8AZHR3lxZswSvn92MoEOTxLy9x6E/6MXkf+3D+H/eJrg/+6C3z2d8LnnMfzbdcW/XVe8//Y4of/sT+x9LxPxzxeIeXAkmx6bybYuLuzsvowd3ZawzbF5TZfq6KYT4/BcSe7iSvxTrlqVzoXPe7rwRU8XvujhIjhcUoMTg866zXHTe3VyVjtpFU9cq2lPgG0hBoHpvXbN56QCKL6WzznnWM4tiFKdONHClmEk59wTOOeZTObSFDKXpZK5JIVz7kmkOcdwel4QJ2es4/jk9zg6dgVHRrhz+KXFHHrRiUND5nJw0GwODprDwSFzSRvjxZ4uI/F1eIqofz5H+D+eJejvT+L3/z2M7z2d8G/nSEC7bvi3c8SvnSPef3uC4P/bj9gHRxN9/3CiOwwl8p+DiLr3JRI6TmFrFzd29ljB9m5L2OroylZHt6bow9PGpkmyoysJXVzZ3t2Ffb2c+aqnGl0PZ8Hh0o184bIanNRKJwc6qcMUyW2mSXiWtZsG4RkYuNxJCA09Z0PIDF0AWk4jpUUCF5ZvJmNOuE5Fy3CL55xbApnuSWR5bSZraSpZy1LJXLKFDPdE0hZHcmZOACenr+H4xHc4OnoZh4e7cmjofA6+MEeVwXM5NNSJQ0MXcPjFhRwetpjDLy3m8LDFHHlpMadHebGt80sEOnQn+L8d8f3bQ/j87UH873mSwHbdCWjXtQmbfztHfO55gqB/9Cb2gVFE3zeC6PteJur+4UTdO4yIfw4i8v7hJHScxtYuruzssZzt3bzY6uhqtNJtcXRlixrbJi10cV1cSVWj29fTWQ3uer5w+WY+8qEzt08nscUUXe3MtJmS4EmrepYAbC2Exp6L/lXVpoC1eO11dZTV1nFx9W7SXgsl0yOZTK8UspZuJWvpVjK9tpDhFs/ZBWGcnuXHyWmrOT7hLY6OWsrhYc4cGjyPg8+rcB0aPE8NazGHhzmrs9hAFnH4xUWcHrOCQ8PcCPt7dzY4PIj3/2mP3z2dCGzXjYB23QhQQ9OO9z1PEPj3p4m57xWiO4wkqsMIVe5TbyXcO4zwf75AlAaeoys7eixna1dPUh1d9dpJVx1wm7XgJTu6Et/FldRu6krXw1lwuHg9X7h8Ix99dNfkqHR6VxlYvK4Tu7azsM003mpKq3om8RlEqK4Q1TXU0fwoq6hWfRwRQI0DsgyXWGRCRRVl1bWU1atO61cAV2N/5uzUUNKdYzk7P5TTM304OXUVx8e9wZERnhwaupCDg+Zy8PnZKmCD53FoqLpiNeFy1oOm+vkhPXBHR3hybMwKTr/kyu7Oz/G+w9/w/dtDBLZ7Sqeq6eQeR/zuccTnb08Q0K470R1GEtPhFaI7jCBaC13k/cOJUsML+8cLRNw/nMTOr7G1mxfbeyxTX0VgGpsmyV1ciXvKlZRuLnzVUw3u0o18bIYu3xQ6A1eP66HTORImJzzJFc8yfPoIhTLVj9UNqjfEQP3mFwU3FBzadYRzx640/ZoGpEWYRKAShauymrK6BsobVdefaa5DKwNKa+opLlRSeOUmRecukvVuDIf6O3NkuBuHhi7g4KC5/Pn8bA4OmsuhIU4cHrqIwy86c/hFF1WGubRAdsgAvENav350hCfHx6zk8IuL+bnnK/zwcC/CHf6X9f/nUYL/uxtB7boR2M6RAK00o+uCf7su+P3tSfzbdSX63uHE3DeqGVuHl4nq8DKRHV4mUtNm3j+ciA4vEvbPQUQ9+AqJj80itasnW3ssI6Wbpw40bWzJamzJXVxJUqPb0s2lGZwxdNYMUsRNMOWrdoammZbCM131pOErVd+Lo6qxobmKlVdxKzOXM/vO8O1H+9g+LQ6f5/x5Z0wU//7sJGXqk++1jQ2UllWKgmMVrPIqyqpqKKtroEINS4OrVKik+LaCouu5FJ6/Rv6R0+R8/TM3Uz7lekQKV/1iuRGawNl5b/Fbr2kcGqJpCV1086JeDIAzmBdVFe346BUcHrqIX54Zx/6He/Hd/U/x1SO9CWz3JAHtHAlq50hQuy4E6sSRgHZddOLX7in82j1F1P8OI+a+0S3AacOLun84UWp84R2GquGNJPGxmWzu4kxqj6VN8IxhS+riSmIXV+K7uAgOF67lCRev5yEWndRjYNZUuzyF5fAUEiaa4vGZrn6adZ8mQnkVlfX1TcgEoZKLv1/k18if2e2ylaRxkUQODiRqaBBbJ0URM38z/39t9x/U9H3HcVyr53lOD1Frq6UIAUS72m6tMgYDFX+04rYKJuLGtfxydlpvbtezxVXd+JVgfgImJCEJv/xx2vmrOlBEbaslIG7rbr0T8gtQBCQJP3wHBbX2tT++34QkBBXa/vG4XHKXu/yR570/309yn+/u9WrsWilDwfsHceX4v/GQff/A4BDusmd5fG/3huAYeoiBx9/hHntkwT0AjsfA3b4B9LR1wPqfG+is1aP9WBVaFYdgEWthEahgzi6C+RMxzH8VwfL3AlhyFWjZr8YtzWHc2JmHr17/HeqjUj0n2WhGCU7vtqS8tnwLrq/ZAf2vUnFx8Rr884XFOD01AFUvLoZ+8VpUzovEvgmBbrGFeOD7CI4/JRi5kxdANiMSCv/VOOC33C06b74m3i8hnh4B2cwYKF76LXQh6ShbtB26sK3QhqRBMyK2NKfh4H7o6MZ3XTeWaTeOifcM4T3tWs8jvgHm/ENXdHQffY77GHjEHAMO9kRh45cGXJZcwJH3dJDHClGwLA+qVVKUbpCjgqtEJVeFg7xiiDdrkMsrQ16iFtkJSmRtUED70Qk0N7YCYO5C009jjO7eEBwPHmHgO3jG9egx+u13YTffgvX6/9BZfQU3K06jpfAgzLnFMO6RwpgpgmmvFJYcOSx8JSz5KliEJbCINGjxclN9CM2ZYtS9kYz6yBQ2uqcEF+0VWrRTChpiMvCv1TvQEJOBS6++jbMvLsGJaYE4MycMNUERuBT+Fi6FbYBs2ivImugMjuErtDwv2ZMCIZ2+FMWzmeCcilxGTr2CmbGu6ArYpaZ4egQks2IgD9gAbUg6ysK3ozR0KzScdDa8NKhZKk4aTWh2C2680bV12HwuL3/IJab3zwcjpt2YJ97ou5pPnHr9zPkZDjwePlfj/iBocNAVGQ0+gLnBgivKL3B0ayWKYoWQLuNDuVaG0o1KlG9SoZw37CBXhdIkNfI36yDgliJ/kw78RC2kKeXIT9YgJ1GJzw5cxuDgA2baDT3wOe0c94fgePit61rL+flo6BF6u3thM7ThTt3XaD9Vi1bdcVgkZTBmyWHYLYbhYxGMe2Qw5yhgyWeisoi0aBFrXJjXNL6DU1TC+LdC6CNToP/Fe08JLtWDK7SoFOijU9EYtx3Xlr+Pz1/7Nc7O/xlOzgjCKX8Ozsx7FTWhMahdGI/PwxJx4qU4ZE9cAMEUjkdsDGZJyZ/MQZ6X3MkcZE18GeKfvAHF7DU+YvPkmnJuXNHNioXELxriacsgmxkLxfwN0HIyULpwG/vvk1T36JjgDG7B/diT7kk/HYxn2o1lmel74j3b1GNuTXvf9WW2tttgPtaA7joTAOa0YJPehC8KL+LolnIoVoohi+BDuUqCMq4S5UlqV2BlLOfzQ1wlVEklyEvSYf8mFk8HfoIG0oxKHPjgCLJ+I4d65zHcqB/eVLn74Fs42KhcGxn3htDTaUP3N2Z0XGzAzU9r0KL+B0xCHQz7itCcKUZzphjGvTKYcophFpTALNTC4iRy0sAs1MAi9AzNIzghwyLUoLWwDCaBCvWxGdAvfdcjOL2PyOqjU6GPcp9qqbi28o9oXPUBrkRsRtWCCJyYEYST/iE4PXcxqgLfxIXwOFwIjce5oHh8GZYI3dw3sW/CfORP4YwgmMzg+5DHBiec9joUs1c/MbYiP89rOndS/+WQsdEVsNd4zvCKAzZCF/oH6BZuQ0lIBtScVGdwXTC03cGo0d0a46Qb02bK+KL7UcIbZblp73Wgb2DQ9YW23rKj/cx/Ycg5i2sZOtTwCnDmTyU4vvMwNG8rULgsD6o4McoTFKjgKVHBVTKPLqoRjvCUkLuC0w7jaSFILIEsoxIlHx6H6N1K8DdX4LPiOlitzNmL/Z02dDZ+g9vn69B6pBpmxVEY+Bo0f1KIpo9EaM6UwLCvEMYcJUxsXCNpYN7vxv117+CEvrXISmGR6NC4dhu++vnvUe8V04jQXFLQsGIrGlfvwNXIZJwLjcXJOeE44R+C03MX4cy813A+OAq14W+hhrMe54PiURO8HjXB6yGdGo7siYHIn8wZQeDFO7jsSYEQTv0pFP6rcMBvhc8p572B4ovUb7krOCeJXxQk0yNQ8Hwcil/mQRu6lQ0vHROaWrs6mlq6qLn1DjW33iGDG2NbNxnbusnE7GSSqd1KZpaF+dMztdy2UcttG7V2DGvrsFFbJ+Nml90Dcy8DBnNvuh5Gdy8xtz8e1mntpU6bUx912frojptuWz912z1Z7f1ktd8d1kNk7SGyPYG9152D7H0DZO8boJ6+Aep1DFJPD9Htr1upqfQKNfz5IFUnSOnwulySR+2i3LAtlPlcAmU9n0zqVQKqTNJQBVdF5RuVT1XBVVLFRiVV8pQkTdJQPldLQt4wEU9LQq6W9ieoSZZSQop0Ncm4ItoT8SEJ4nZR1U4RNWUpybBbSjd2CanpYzE17S2k5hwlGQQlZNyveWYmD1oW89zMMnkxu7GItNQiL6fr7/yFri5JorqoNKqLSmWljUofnU5XI5PpfHgcnZyziI77cejU3Ffo9AtL6GzAUqoJi6PasHV0LjieqoPiqTp4HV0OfYc+nRdDORMCSTCJQ/luBE/An8ShPFbOc4GUP2URyf1XktxvBcn9YqnIL5YKWQVuZKOQsiQs6awYF8msGBLNiCTR9AiSzYmj4gAelQSnd/wfaJXME/Bc2B0AAAAASUVORK5CYII=);
                height: 150px;
            }
            .well h4{
                text-align: center;
                text-transform: capitalize;
            }
            .iconapp{
                display:none !important;
                font-size: 25px;
            }
            /*
                SCRIPT
                $(function(){
                    $('.container').eq(2).css('float','right')
                $( ".col-md-3 .panel-heading" ).click(function() {
                var element = $(this).next();
                $( element ).slideToggle( "slow");
                });
                $('.container').removeClass('container')
                $('.col-md-3').attr('style','height:'+($(document).height()+25)+'px !important')
                })
            */




        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/admin') }}">Dashboard <span class="sr-only">(current)</span></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if (Session::has('flash_message'))
            <div class="container">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('flash_message') }}
                </div>
            </div>
        @endif

        @yield('content')

        <hr/>

        <div class="container">
            &copy; {{ date('Y') }}. Created by <a href="http://www.appzcoder.com">AppzCoder</a>
            <br/>
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>

        <script type="text/javascript">
            $(function () {
                // Navigation active
                $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
            });
        </script>

        @yield('scripts')
    <script>
        $(function(){
            $('.container').eq(2).css('float','right')
            $( ".col-md-3 .panel-heading" ).click(function() {
                var element = $(this).next();
                $( element ).slideToggle( "slow");
            });
            $('.container').removeClass('container')
            $('.col-md-3').attr('style','height:'+($(document).height()+25)+'px !important')
        })

        $(function(){
            $('#search').on('input',function () {
                if($(this).val().trim() == "") {
                    $('[type="file"], [type="folder"]').css('display', 'block');
                }
                    var $this = $(this)
            $('[type="file"], [type="folder"]').each(function (i,d) {
//                console.log($(d).text().trim().toLowerCase(),' : ',$this.val().trim().toLowerCase())
                if($(d).text().trim().toLowerCase().indexOf($this.val().trim().toLowerCase())  < 0){
                    $(d).css('display','none')
                }
                if($(d).text().trim().toLowerCase().indexOf($this.val().trim().toLowerCase())  >= 0){
                    $(d).css('display','block')
                }
            })

        })
            $('[type="file"] a').on('click',function(){
                location.href = atob($(this).attr('to'))
            })

        })




    </script>
    </body>
</html>
